import React, { useState, useRef } from 'react'
import Select from 'react-select'
import * as api from './api.js'
import { buildGoogleUrl, buildMicrosoftUrl, openOAuthPopup } from './oauthPopup.js'
import './GuestTranslator.css'

const languages = [
  { label: 'English', value: 'en' },
  { label: 'Arabic', value: 'ar' },
]

const dropdownStyles = {
  valueContainer: (base) => ({ ...base, fontSize: '0.85rem', padding: '6px 8px' }),
  control: (base) => ({
    ...base,
    border: '1.5px solid #EDEDED',
    minHeight: '35px',
    height: '35px',
    minWidth: '150px',
    '&:hover': { border: '1.5px solid #007bff' },
    boxShadow: 'none',
  }),
  option: (base, state) => ({
    ...base,
    backgroundColor: state.isFocused ? '#f2f2f2' : '#fff',
    color: '#333',
    cursor: 'pointer',
  }),
  indicatorSeparator: () => ({ display: 'none' }),
  menu: (base) => ({ ...base, zIndex: 9999 }),
  menuList: (base) => ({ ...base, padding: 0, maxHeight: 100 }),
  menuPortal: (base) => ({ ...base, zIndex: 9999 }),
}

export default function GuestTranslator() {
  const [selectedFile, setSelectedFile] = useState(null)
  const [sourceLanguage, setSourceLanguage] = useState(languages[0])
  const [targetLanguage, setTargetLanguage] = useState(languages[1])
  const [isTranslating, setIsTranslating] = useState(false)
  const [uploadStage, setUploadStage] = useState('idle') // idle | uploading | translating
  const [progress, setProgress] = useState(0)
  const [translationCompleted, setTranslationCompleted] = useState(false)
  const [currentTranslationId, setCurrentTranslationId] = useState(null)
  const [isDownloading, setIsDownloading] = useState(false)

  // Auth modal
  const [showModal, setShowModal] = useState(false)
  const [signUpStep, setSignUpStep] = useState('idle') // idle | email_input | otp_input | loading
  const [emailInput, setEmailInput] = useState('')
  const [otpInput, setOtpInput] = useState('')
  const [socialLoading, setSocialLoading] = useState(null)

  const [snack, setSnack] = useState(null)
  const [showUpgrade, setShowUpgrade] = useState(false)

  const fileInputRef = useRef(null)
  const uploadIntervalRef = useRef(null)
  const fakeProgressRef = useRef(null)

  // ── Helpers ────────────────────────────────────────────────────────────────

  const showErr = (title, msg) => {
    setSnack({ title, msg, error: true })
    setTimeout(() => setSnack(null), 5000)
  }

  const getToken = () => localStorage.getItem('lp_guest_token')
  const saveToken = (t) => localStorage.setItem('lp_guest_token', t)

  const startUploadFake = () => {
    if (uploadIntervalRef.current) return
    setProgress(5)
    uploadIntervalRef.current = setInterval(() => {
      setProgress((prev) => {
        if (prev >= 92) return prev
        const remaining = 92 - prev
        const inc = Math.max(0.3, remaining * 0.06 * (0.5 + Math.random()))
        return Math.min(Math.round(prev + inc), 92)
      })
    }, 300)
  }

  const stopUploadFake = () => {
    if (uploadIntervalRef.current) {
      clearInterval(uploadIntervalRef.current)
      uploadIntervalRef.current = null
    }
  }

  const startTranslationFake = () => {
    if (fakeProgressRef.current) return
    fakeProgressRef.current = setInterval(() => {
      setProgress((prev) => {
        if (prev >= 90) return prev
        return Math.min(prev + Math.random() * 0.4 + 0.2, 90)
      })
    }, 900)
  }

  const stopTranslationFake = () => {
    if (fakeProgressRef.current) {
      clearInterval(fakeProgressRef.current)
      fakeProgressRef.current = null
    }
  }

  const resetState = () => {
    stopUploadFake()
    stopTranslationFake()
    setIsTranslating(false)
    setUploadStage('idle')
    setProgress(0)
    setSelectedFile(null)
    if (fileInputRef.current) fileInputRef.current.value = ''
  }

  // ── File handling ──────────────────────────────────────────────────────────

  const ALLOWED_EXT = { '.doc': true, '.docx': true, '.ppt': true, '.pptx': true, '.pdf': true }

  const isSupportedFile = (file) => {
    const ext = file.name.toLowerCase().slice(file.name.lastIndexOf('.'))
    return !!ALLOWED_EXT[ext]
  }

  const handleFileChange = (e) => {
    const file = e.target.files?.[0]
    if (!file) return
    if (!isSupportedFile(file)) { showErr('Unsupported file', 'Please upload a PPT, PPTX, DOC, DOCX or PDF file.'); return }
    if (file.size > 100 * 1024 * 1024) { showErr('File too large', 'Maximum file size is 100 MB.'); return }
    setSelectedFile(file)
    setTranslationCompleted(false)
  }

  const handleDrop = (e) => {
    e.preventDefault()
    const file = e.dataTransfer.files?.[0]
    if (!file) return
    if (!isSupportedFile(file)) { showErr('Unsupported file', 'Please upload a PPT, PPTX, DOC, DOCX or PDF file.'); return }
    if (file.size > 100 * 1024 * 1024) { showErr('File too large', 'Maximum file size is 100 MB.'); return }
    setSelectedFile(file)
    setTranslationCompleted(false)
  }

  const handleDragOver = (e) => e.preventDefault()

  const handleBrowseClick = () => {
    if (!selectedFile) fileInputRef.current?.click()
  }

  const handleRemoveFile = (e) => {
    e.stopPropagation()
    setSelectedFile(null)
    if (fileInputRef.current) fileInputRef.current.value = ''
  }

  const handleSourceLanguageChange = (opt) => {
    setSourceLanguage(opt)
    setTargetLanguage(opt.value === 'en' ? languages[1] : languages[0])
  }

  // ── Translation ────────────────────────────────────────────────────────────

  const runTranslation = async (file, token) => {
    setIsTranslating(true)
    setUploadStage('uploading')
    setProgress(0)
    startUploadFake()

    try {
      const uploadRes = await api.uploadDoc(file, sourceLanguage.value, targetLanguage.value, token)
      const documentId = uploadRes?.data?.data
      if (!documentId) throw new Error('Document ID missing')

      stopUploadFake()
      setProgress(100)
      await new Promise((r) => setTimeout(r, 250))
      setUploadStage('translating')
      setProgress(0)

      const translateRes = await api.startTranslation(documentId, token)
      const translationId = translateRes?.data?.data?.translation_id
      if (!translationId) throw new Error('Translation ID missing')
      setCurrentTranslationId(translationId)
      startTranslationFake()

      const poll = async () => {
        try {
          const res = await api.getProgress(translationId, token)
          const { status, progress: apiProgress } = res?.data?.data || {}
          if (status === 'failed') {
            stopTranslationFake()
            resetState()
            showErr('Translation Failed', 'Something went wrong. Please try again.')
            return
          }
          if (typeof apiProgress === 'number') {
            const display = Math.min(Math.floor(apiProgress * 0.85), 85)
            setProgress((prev) => Math.max(prev, display))
          }
          if (status === 'completed') {
            stopTranslationFake()
            setProgress(100)
            setTimeout(() => {
              setIsTranslating(false)
              setUploadStage('idle')
              setTranslationCompleted(true)
            }, 500)
          } else {
            setTimeout(poll, 5000)
          }
        } catch {
          setTimeout(poll, 5000)
        }
      }
      poll()
    } catch (error) {
      const status = error?.response?.status || error?.status
      const msg = error?.response?.data?.msg || error?.response?.data?.detail || error?.message || ''
      const isLimitReached = status === 403 && msg.toLowerCase().includes('already uploaded')

      if (isLimitReached) {
        stopUploadFake()
        setIsTranslating(false)
        setUploadStage('idle')
        setProgress(0)
        setShowUpgrade(true)
      } else if (status === 401 || status === 403) {
        stopUploadFake()
        setIsTranslating(false)
        setUploadStage('idle')
        setProgress(0)
        localStorage.removeItem('lp_guest_token')
        setShowModal(true)
        setSignUpStep('idle')
      } else {
        resetState()
        showErr('Translation Failed', msg || 'Something went wrong')
      }
    }
  }

  const handleTranslate = () => {
    if (!selectedFile || isTranslating) return
    const token = getToken()
    if (!token) { setShowModal(true); setSignUpStep('idle'); return }
    runTranslation(selectedFile, token)
  }

  // ── Download ───────────────────────────────────────────────────────────────

  const handleDownload = async () => {
    if (!currentTranslationId) return
    setIsDownloading(true)
    try {
      const res = await api.downloadDoc(currentTranslationId, getToken())
      const url = res?.data?.data
      if (url) window.open(url, '_blank')
      else showErr('Download Error', 'Download link not available.')
    } catch (err) {
      showErr('Download Error', err?.response?.data?.msg || 'Download failed.')
    } finally {
      setIsDownloading(false)
    }
  }

  // ── Auth ───────────────────────────────────────────────────────────────────

  const onGuestReady = (token) => {
    setShowModal(false)
    if (selectedFile) runTranslation(selectedFile, token)
  }

  const handleSendOtp = async () => {
    if (!emailInput.trim()) { showErr('Required', 'Please enter your email address.'); return }
    setSignUpStep('loading')
    try {
      await api.sendOtp(emailInput.trim())
      setSignUpStep('otp_input')
    } catch (err) {
      const msg = err?.response?.data?.msg || ''
      if (msg.toLowerCase().includes('already registered') || msg.toLowerCase().includes('log in')) {
        setShowModal(false)
        setShowUpgrade(true)
      } else {
        showErr('Error', msg || 'Failed to send OTP. Try again.')
        setSignUpStep('email_input')
      }
    }
  }

  const handleVerifyOtp = async () => {
    const otp = parseInt(otpInput.trim(), 10)
    if (!otp) { showErr('Required', 'Please enter the OTP.'); return }
    setSignUpStep('loading')
    try {
      const res = await api.verifyOtp(emailInput.trim(), otp)
      const guestToken = res.data?.data?.guest_token
      if (!guestToken) throw new Error('No token received')
      saveToken(guestToken)
      onGuestReady(guestToken)
    } catch (err) {
      showErr('Error', err?.response?.data?.msg || 'Invalid OTP. Please try again.')
      setSignUpStep('otp_input')
    }
  }

  const handleSocialLogin = async (provider) => {
    setSocialLoading(provider)
    try {
      const url = provider === 'google' ? buildGoogleUrl() : buildMicrosoftUrl()
      const result = await openOAuthPopup(url, provider)
      const res = await api.socialSignup(result.provider, result.token)
      const guestToken = res.data?.data?.guest_token
      if (!guestToken) throw new Error('No token received')
      saveToken(guestToken)
      onGuestReady(guestToken)
    } catch (err) {
      showErr('Error', err?.response?.data?.msg || err?.message || 'Sign-up failed. Try again.')
    } finally {
      setSocialLoading(null)
    }
  }

  const isTranslateDisabled = !selectedFile || isTranslating

  return (
    <div className="upload-container items-center">
      {/* ── Translator card ── */}
      <div className="upload-card lp-card">
        <div className="lp-card-inner">
          <div className="mainupload-title">TASC Translate Document translation</div>
          <div className="mainupload-title2 lp-subtitle">
            Upload your documents and get fast, accurate translations powered by{' '}
            <br />
            advanced AI technology—simple and reliable.
          </div>

          <div className="language-selection-container">
            <Select
              options={languages}
              value={sourceLanguage}
              onChange={handleSourceLanguageChange}
              isDisabled={isTranslating}
              placeholder="Select Language"
              isSearchable={false}
              menuPortalTarget={document.body}
              styles={dropdownStyles}
            />
            <img src="/arrow.svg" alt="→" className="lp-lang-arrow" />
            <Select
              options={languages}
              value={targetLanguage}
              onChange={() => {}}
              isDisabled={true}
              placeholder="Select Language"
              isSearchable={false}
              menuPortalTarget={document.body}
              styles={dropdownStyles}
            />
          </div>

          <div
            className="upload-box lp-dropzone"
            onDrop={handleDrop}
            onDragOver={handleDragOver}
            onClick={handleBrowseClick}
          >
            {selectedFile ? (
              <div className="lp-file-selected">
                <img src="/selected_file.svg" alt="File" width={40} />
                <span className="file-name" title={selectedFile.name}>{selectedFile.name}</span>
                {!isTranslating && (
                  <button className="remove-file-btn" onClick={handleRemoveFile}>
                    <img src="/File_remove.svg" alt="Remove" />
                    Remove
                  </button>
                )}
              </div>
            ) : (
              <>
                <img src="/Upload_icon.svg" className="lp-upload-icon" alt="Upload" />
                <div className="lp-upload-text-wrap">
                  <span className="file-upload-title">
                    Drag & drop files or <span className="browser-link">browse</span> to upload
                  </span>
                  <span className="subtext1">Supported formats: PPT, PPTX, DOC, DOCX, PDF</span>
                  <span className="subtext2">Maximum file size: 100 MB</span>
                </div>
              </>
            )}
            <input
              type="file"
              accept=".ppt,.pptx,.doc,.docx,.pdf"
              style={{ display: 'none' }}
              ref={fileInputRef}
              onChange={handleFileChange}
            />
          </div>

          <div className="lp-btn-row">
            {uploadStage === 'uploading' ? (
              <div className="lp-donut-wrap">
                <div className="lp-donut">
                  <svg width="72" height="72" viewBox="0 0 72 72">
                    <circle cx="36" cy="36" r="32" fill="none" stroke="#cce4ee" strokeWidth="4" />
                    <circle cx="36" cy="36" r="32" fill="none" stroke="#0E6C89" strokeWidth="4"
                      strokeDasharray={`${2 * Math.PI * 32}`}
                      strokeDashoffset={`${2 * Math.PI * 32 * (1 - progress / 100)}`}
                      strokeLinecap="round"
                      transform="rotate(-90 36 36)"
                      style={{ transition: 'stroke-dashoffset 0.3s ease' }}
                    />
                  </svg>
                  <span className="lp-donut-pct">{Math.round(progress)}%</span>
                </div>
                <span className="lp-uploading-label">Uploading...</span>
              </div>
            ) : (
              <button
                className="translate-btn lp-translate-btn"
                disabled={isTranslateDisabled}
                onClick={handleTranslate}
                style={{ pointerEvents: isTranslating ? 'none' : 'auto' }}
              >
                {isTranslating && (
                  <div className="lp-btn-fill-dark" style={{ width: `${progress}%` }} />
                )}
                {isTranslating && (
                  <div className="lp-btn-fill-light" style={{ width: `${100 - progress}%` }} />
                )}
                <span className="lp-btn-label">
                  {isTranslating ? `Translation In Progress ${Math.round(progress)}%` : 'Translate'}
                </span>
              </button>
            )}
          </div>
        </div>
      </div>

      {/* ── Completion popup ── */}
      {translationCompleted && (
        <div className="landing-modal-backdrop" onClick={() => setTranslationCompleted(false)}>
          <div className="landing-modal" onClick={(e) => e.stopPropagation()}>
            <button className="landing-modal-close" onClick={() => setTranslationCompleted(false)}>✕</button>
            <div className="lp-complete-header">
              <svg width="52" height="52" viewBox="0 0 52 52">
                <circle cx="26" cy="26" r="26" fill="#e6f7f0" />
                <path d="M14 27l8 8 16-16" stroke="#22c55e" strokeWidth="3" strokeLinecap="round" strokeLinejoin="round" fill="none" />
              </svg>
              <h2 className="landing-modal-title">Translation Complete!</h2>
              <p className="landing-modal-sub">Your document has been translated successfully.</p>
            </div>
            <button
              className="landing-translate-btn"
              style={{ width: '100%', marginBottom: '12px' }}
              onClick={handleDownload}
              disabled={isDownloading}
            >
              {isDownloading ? 'Downloading…' : 'Download Translation'}
            </button>
            <div className="landing-divider"><span>Want more?</span></div>
            <p style={{ fontSize: '0.8rem', color: '#64748b', textAlign: 'center', margin: '8px 0 12px' }}>
              Create a free account to translate unlimited documents.
            </p>
            <a
              href="https://app.tasctranslate.ai/Register"
              className="landing-translate-btn"
              style={{ width: '100%', display: 'flex', alignItems: 'center', justifyContent: 'center', textDecoration: 'none' }}
            >
              Create Free Account
            </a>
          </div>
        </div>
      )}

      {/* ── Auth modal ── */}
      {showModal && (
        <div className="landing-modal-backdrop" onClick={() => setShowModal(false)}>
          <div className="landing-modal" onClick={(e) => e.stopPropagation()}>
            <button className="landing-modal-close" onClick={() => setShowModal(false)}>✕</button>
            <h2 className="landing-modal-title">Sign up to translate</h2>
            <p className="landing-modal-sub">
              Create a free account to translate your document.
              {signUpStep === 'idle' && ' No credit card needed.'}
            </p>

            {(signUpStep === 'idle' || signUpStep === 'email_input') && (
              <>
                <button className="landing-social-btn google" onClick={() => handleSocialLogin('google')} disabled={!!socialLoading}>
                  {socialLoading === 'google' ? 'Signing in…' : (
                    <><img src="/google-icon.svg" alt="" width={18} onError={(e) => { e.target.style.display = 'none' }} /> Continue with Google</>
                  )}
                </button>
                <button className="landing-social-btn microsoft" onClick={() => handleSocialLogin('microsoft')} disabled={!!socialLoading}>
                  {socialLoading === 'microsoft' ? 'Signing in…' : (
                    <><img src="/microsoft-icon.svg" alt="" width={18} onError={(e) => { e.target.style.display = 'none' }} /> Continue with Microsoft</>
                  )}
                </button>
                <div className="landing-divider"><span>or</span></div>
                {signUpStep === 'idle' && (
                  <button className="landing-email-btn" onClick={() => setSignUpStep('email_input')} disabled={!!socialLoading}>
                    Continue with Email
                  </button>
                )}
              </>
            )}

            {signUpStep === 'email_input' && (
              <div className="landing-otp-form">
                <input
                  type="email"
                  className="landing-input"
                  placeholder="Enter your email address"
                  value={emailInput}
                  onChange={(e) => setEmailInput(e.target.value)}
                  onKeyDown={(e) => { if (e.key === 'Enter') handleSendOtp() }}
                  autoFocus
                />
                <button className="landing-translate-btn" style={{ width: '100%' }} onClick={handleSendOtp}>
                  Send Verification Code
                </button>
                <button className="landing-back-link" onClick={() => setSignUpStep('idle')}>← Back</button>
              </div>
            )}

            {signUpStep === 'otp_input' && (
              <div className="landing-otp-form">
                <p className="landing-otp-hint">We sent a 6-digit code to <strong>{emailInput}</strong></p>
                <input
                  type="number"
                  className="landing-input"
                  placeholder="Enter 6-digit code"
                  value={otpInput}
                  onChange={(e) => setOtpInput(e.target.value)}
                  onKeyDown={(e) => { if (e.key === 'Enter') handleVerifyOtp() }}
                  autoFocus
                />
                <button className="landing-translate-btn" style={{ width: '100%' }} onClick={handleVerifyOtp}>
                  Verify & Continue
                </button>
                <button className="landing-back-link" onClick={() => setSignUpStep('email_input')}>← Change email</button>
              </div>
            )}

            {signUpStep === 'loading' && (
              <div className="landing-modal-loading">
                <div className="landing-spinner" />
                <p>Please wait…</p>
              </div>
            )}
          </div>
        </div>
      )}

      {/* ── Upgrade prompt ── */}
      {showUpgrade && (
        <div className="landing-modal-backdrop" onClick={() => setShowUpgrade(false)}>
          <div className="landing-modal" onClick={(e) => e.stopPropagation()}>
            <button className="landing-modal-close" onClick={() => setShowUpgrade(false)}>✕</button>
            <div className="lp-complete-header">
              <svg width="52" height="52" viewBox="0 0 52 52">
                <circle cx="26" cy="26" r="26" fill="#fef3c7" />
                <path d="M26 14v14M26 34v2" stroke="#d97706" strokeWidth="3" strokeLinecap="round" />
              </svg>
              <h2 className="landing-modal-title">Free translation used</h2>
              <p className="landing-modal-sub">
                You've already translated a document with this account. Create a free account to translate unlimited documents.
              </p>
            </div>
            <a
              href="https://app.tasctranslate.ai/Register"
              className="landing-translate-btn"
              style={{ width: '100%', display: 'flex', alignItems: 'center', justifyContent: 'center', textDecoration: 'none', marginBottom: '10px' }}
            >
              Create Free Account
            </a>
            <a
              href="https://app.tasctranslate.ai/Login"
              className="landing-email-btn"
              style={{ width: '100%', display: 'flex', alignItems: 'center', justifyContent: 'center', textDecoration: 'none' }}
            >
              Sign In to Existing Account
            </a>
          </div>
        </div>
      )}

      {/* ── Snackbar ── */}
      {snack && (
        <div className="lp-snack" style={{ background: snack.error ? '#ef4444' : '#22c55e' }}>
          <span><strong>{snack.title}</strong>{snack.msg ? ': ' + snack.msg : ''}</span>
          <button onClick={() => setSnack(null)} className="lp-snack-close">✕</button>
        </div>
      )}
    </div>
  )
}
