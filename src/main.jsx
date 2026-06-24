import React from 'react'
import ReactDOM from 'react-dom/client'
import GuestTranslator from './GuestTranslator'
import './GuestTranslator.css'

const el = document.getElementById('guest-translator')
if (el) {
  ReactDOM.createRoot(el).render(<GuestTranslator />)
}
