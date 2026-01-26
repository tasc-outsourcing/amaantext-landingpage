# Deploying Laravel Landing Page to Vercel

## Quick Deploy Steps

### Option 1: Via Vercel Dashboard (Recommended)

1. **Go to [Vercel Dashboard](https://vercel.com/dashboard)**
2. **Click "Add New Project"**
3. **Import your GitHub repository:**
   - Select `tasc-outsourcing/amaantext-landingpage`
   - Click "Import"

4. **Configure Project Settings:**
   - **Framework Preset:** Other
   - **Root Directory:** (leave empty or `.`)
   - **Build Command:** `composer install --no-dev --optimize-autoloader --no-interaction --no-scripts && npm install && npm run build`
   - **Output Directory:** `public`
   - **Install Command:** `composer install --no-dev --optimize-autoloader --no-interaction --no-scripts && npm install`

5. **Environment Variables:**
   - Click "Environment Variables"
   - Add:
     - `APP_ENV` = `production`
     - `APP_DEBUG` = `false`
     - `APP_KEY` = (generate with `php artisan key:generate --show` locally)

6. **Click "Deploy"**

### Option 2: Via Vercel CLI

```bash
# Install Vercel CLI
npm install -g vercel

# Login to Vercel
vercel login

# Deploy
vercel

# For production
vercel --prod
```

## Configuration Files

✅ **`vercel.json`** - Vercel configuration (already created)
✅ **`.vercelignore`** - Files to ignore (already created)

## Important Notes

### Vercel PHP Support

- Vercel supports PHP 8.2 via serverless functions
- Laravel routes work through `public/index.php`
- Static assets are served directly
- Blade templates render server-side

### Build Process

1. **Install Composer dependencies** (production only)
2. **Install npm dependencies**
3. **Build assets** with Vite
4. **Deploy** the `public` directory

### Environment Variables

Make sure to set these in Vercel Dashboard → Project Settings → Environment Variables:

- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_KEY=` (your generated key)

### After Deployment

1. Your site will be live at `https://your-project.vercel.app`
2. You can add a custom domain in Project Settings
3. Each push to main branch triggers automatic deployment

## Troubleshooting

### Build Fails

- Check build logs in Vercel dashboard
- Verify PHP version is 8.2
- Ensure all dependencies are in `composer.json` and `package.json`

### Assets Not Loading

- Check `public/build/` exists after build
- Verify Vite manifest is generated
- Check asset paths use `asset()` helper in Blade

### 500 Error

- Verify `APP_KEY` is set correctly
- Check `APP_DEBUG=false` in production
- Review function logs in Vercel dashboard

## Vercel vs Netlify

**Vercel Advantages:**
- ✅ Better PHP serverless support
- ✅ Faster builds
- ✅ Better developer experience
- ✅ Automatic HTTPS and CDN

**Both Support:**
- ✅ Laravel applications
- ✅ PHP 8.2
- ✅ Node.js builds
- ✅ Environment variables

Your Laravel landing page is ready for Vercel! 🚀

