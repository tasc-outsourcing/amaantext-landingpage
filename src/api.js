import axios from 'axios'

const BASE = 'https://api.tasctranslate.ai/api/v1/'

const client = axios.create({ baseURL: BASE })

const auth = (token) => ({ headers: { Authorization: `Bearer ${token}` } })

export const sendOtp = (email) =>
  client.post('guest/send-otp', { email })

export const verifyOtp = (email, otp) =>
  client.post('guest/verify-otp', { email, otp })

export const socialSignup = (provider, token) =>
  client.post('guest/social-signup', { provider, token })

export const uploadDoc = (file, sourceLang, targetLang, token, onProgress) => {
  const formData = new FormData()
  formData.append('file', file)
  formData.append('source_language', sourceLang)
  formData.append('target_language', targetLang)

  return client.post('document/upload', formData, {
    ...auth(token),
    onUploadProgress: (e) => {
      if (onProgress && e.total) onProgress(Math.round((e.loaded / e.total) * 100))
    },
  })
}

export const startTranslation = (documentId, token) =>
  client.get(`guest/translate/${documentId}`, auth(token))

export const getProgress = (translateId, token) =>
  client.get(`guest/translation/${translateId}/progress`, auth(token))

export const downloadDoc = (translateId, token) =>
  client.get(`guest/translation/${translateId}/download`, auth(token))
