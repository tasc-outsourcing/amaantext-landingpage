const GOOGLE_CLIENT_ID = '120319811908-ksvfhqeppchald01m8ugvk0dte8gsdjb.apps.googleusercontent.com'
const MICROSOFT_CLIENT_ID = '00e570bf-bd57-41bb-a7b8-2502716719ed'
const MICROSOFT_TENANT_ID = 'common'

function callbackUrl() {
  return `${window.location.origin}/oauth-callback.html`
}

function nonce() {
  return Math.random().toString(36).substring(2) + Date.now().toString(36)
}

export function buildGoogleUrl() {
  const params = new URLSearchParams({
    client_id: GOOGLE_CLIENT_ID,
    redirect_uri: callbackUrl(),
    response_type: 'id_token',
    scope: 'openid email profile',
    nonce: nonce(),
  })
  return `https://accounts.google.com/o/oauth2/v2/auth?${params}`
}

export function buildMicrosoftUrl() {
  const params = new URLSearchParams({
    client_id: MICROSOFT_CLIENT_ID,
    redirect_uri: callbackUrl(),
    response_type: 'token',
    scope: 'https://graph.microsoft.com/User.Read',
    nonce: nonce(),
    response_mode: 'fragment',
  })
  return `https://login.microsoftonline.com/${MICROSOFT_TENANT_ID}/oauth2/v2.0/authorize?${params}`
}

export function openOAuthPopup(url, provider) {
  return new Promise((resolve, reject) => {
    const width = 500, height = 620
    const left = window.screenX + (window.outerWidth - width) / 2
    const top = window.screenY + (window.outerHeight - height) / 2
    const popup = window.open(url, `oauth_${provider}`, `width=${width},height=${height},left=${left},top=${top},scrollbars=yes`)

    if (!popup) {
      reject(new Error('Popup was blocked. Please allow popups for this site.'))
      return
    }

    let settled = false

    const settle = (event) => {
      if (settled) return
      const data = event.data || event
      if (data?.type !== 'oauth-callback') return
      settled = true
      cleanup()

      if (data.error) {
        reject(new Error(data.error_description || data.error))
        return
      }

      const params = data.params || {}
      const token = provider === 'google' ? params.id_token : params.access_token
      if (!token) { reject(new Error('No token received from provider')); return }
      resolve({ token, provider })
    }

    let channel = null
    try {
      channel = new BroadcastChannel('oauth-callback')
      channel.onmessage = settle
    } catch {}

    const onMessage = (e) => {
      if (e.origin !== window.location.origin) return
      settle(e)
    }
    window.addEventListener('message', onMessage)

    const cleanup = () => {
      window.removeEventListener('message', onMessage)
      if (channel) { try { channel.close() } catch {} channel = null }
      clearTimeout(timer)
    }

    const timer = setTimeout(() => {
      if (settled) return
      settled = true
      cleanup()
      try { popup.close() } catch {}
      reject(new Error('OAuth timed out'))
    }, 5 * 60 * 1000)
  })
}
