# TASC Translate Landing Page - Laravel Version

This project has been converted from React/TypeScript to Laravel with Blade templates.

## Project Structure

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── HomeController.php
├── resources/
│   ├── css/
│   │   ├── app.css
│   │   └── fonts.css
│   ├── js/
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── components/
│   │       ├── type-animation.js
│   │       ├── pricing-toggle.js
│   │       ├── how-it-works.js
│   │       └── use-cases.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── partials/
│       │   ├── enterprise-infographic.blade.php
│       │   ├── features-section.blade.php
│       │   ├── how-it-works.blade.php
│       │   ├── pricing.blade.php
│       │   ├── three-foundations.blade.php
│       │   └── use-cases.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php
├── public/
│   └── images/ (assets from src/assets/)
├── composer.json
├── package.json
└── vite.config.js
```

## Setup Instructions

1. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

2. **Install Node Dependencies:**
   ```bash
   npm install
   ```

3. **Set up Environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Build Assets:**
   ```bash
   npm run build
   ```

5. **For Development:**
   ```bash
   npm run dev
   ```

6. **Start Laravel Server:**
   ```bash
   php artisan serve
   ```

## Key Changes from React Version

1. **React Components → Blade Partials:**
   - `App.tsx` → `welcome.blade.php`
   - `HowItWorksSection.tsx` → `partials/how-it-works.blade.php`
   - `EnterpriseInfographic.tsx` → `partials/enterprise-infographic.blade.php`
   - `UseCasesSection.tsx` → `partials/use-cases.blade.php`

2. **State Management:**
   - React `useState` hooks replaced with vanilla JavaScript
   - Interactive components use event listeners and DOM manipulation

3. **Asset Management:**
   - Vite configuration updated for Laravel
   - Assets moved to `public/images/`
   - CSS and JS compiled through Laravel Vite

4. **Routing:**
   - Single route in `routes/web.php` pointing to `welcome` view

## Features Preserved

- ✅ All visual design and styling
- ✅ Interactive pricing toggle (monthly/yearly)
- ✅ How It Works step-by-step animation
- ✅ Use Cases role selection
- ✅ Type animation in hero section
- ✅ All sections and content

## Notes

- The project uses Laravel 10+ with Vite for asset compilation
- Tailwind CSS 4.x is configured
- All React-specific dependencies removed
- Vanilla JavaScript handles all interactivity

