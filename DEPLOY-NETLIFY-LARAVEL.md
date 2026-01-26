# Deploying Laravel Landing Page to Netlify

This guide will help you deploy your Laravel application to Netlify while keeping it as a Laravel app.

## Prerequisites

1. A Netlify account (free tier works)
2. Git repository (GitHub, GitLab, or Bitbucket)
3. Composer and PHP installed locally (for testing)

## Step 1: Prepare Your Repository

Make sure your code is pushed to a Git repository:

```bash
git init
git add .
git commit -m "Initial Laravel landing page"
git remote add origin <your-repo-url>
git push -u origin main
```

## Step 2: Configure Netlify

### Option A: Via Netlify Dashboard (Recommended)

1. **Go to [Netlify Dashboard](https://app.netlify.com/)**
2. **Click "Add new site" → "Import an existing project"**
3. **Connect your Git provider** (GitHub/GitLab/Bitbucket)
4. **Select your repository**
5. **Configure build settings:**
   - **Build command:** `composer install --no-dev --optimize-autoloader && npm install && npm run build`
   - **Publish directory:** `public`
   - **PHP version:** `8.2` (or latest available)
   - **Node version:** `18` (or latest LTS)

6. **Environment Variables (if needed):**
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `APP_KEY=` (generate with `php artisan key:generate --show`)

7. **Click "Deploy site"**

### Option B: Via Netlify CLI

```bash
# Install Netlify CLI
npm install -g netlify-cli

# Login to Netlify
netlify login

# Initialize site
netlify init

# Deploy
netlify deploy --prod
```

## Step 3: Generate Application Key

Before deploying, generate your Laravel application key:

```bash
php artisan key:generate --show
```

Copy the key and add it as an environment variable in Netlify:
- Variable name: `APP_KEY`
- Value: (paste the generated key)

Or add it to your `.env` file and Netlify will use it.

## Step 4: Build Configuration

The `netlify.toml` file is already configured with:

- **Build command:** Installs Composer dependencies, npm packages, and builds assets
- **Publish directory:** `public` (Laravel's public folder)
- **PHP version:** 8.2
- **Redirects:** All routes redirect to `index.php` (Laravel's entry point)

## Step 5: Test Locally First

Before deploying, test the build process locally:

```bash
# Install dependencies
composer install --no-dev --optimize-autoloader
npm install

# Build assets
npm run build

# Test with PHP built-in server
php artisan serve
```

Visit `http://localhost:8000` to verify everything works.

## Step 6: Deploy

Once configured, Netlify will automatically:
1. Install Composer dependencies
2. Install npm packages
3. Build your assets with Vite
4. Deploy the `public` directory

## Important Notes

### Netlify PHP Limitations

Netlify supports PHP, but with some limitations:
- ✅ Static files work perfectly
- ✅ Laravel routing works
- ✅ Blade templates render correctly
- ⚠️ Some Laravel features may be limited (file storage, queues, etc.)
- ⚠️ For a landing page, this is usually fine

### File Structure

Make sure your structure is:
```
├── app/
├── bootstrap/
├── config/
├── public/
│   ├── index.php (Laravel entry point)
│   ├── .htaccess
│   ├── build/ (compiled assets)
│   └── images/
├── resources/
├── routes/
├── vendor/ (installed by Netlify)
├── composer.json
├── package.json
└── netlify.toml
```

### Environment Variables

Add these in Netlify Dashboard → Site Settings → Environment Variables:

- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_KEY=` (your generated key)
- `APP_URL=` (your Netlify URL, e.g., `https://your-site.netlify.app`)

## Troubleshooting

### Build Fails

1. **Check build logs** in Netlify dashboard
2. **Verify PHP version** is set correctly
3. **Ensure all dependencies** are in `composer.json` and `package.json`

### Assets Not Loading

1. **Check `public/build/`** exists after build
2. **Verify Vite manifest** is generated
3. **Check asset paths** in Blade templates use `asset()` helper

### Routes Not Working

1. **Verify `.htaccess`** is in `public/` folder
2. **Check redirect rules** in `netlify.toml`
3. **Ensure `index.php`** exists in `public/`

## Quick Deploy Checklist

- [ ] Code pushed to Git repository
- [ ] `netlify.toml` configured
- [ ] `APP_KEY` generated and set in Netlify
- [ ] Build command set: `composer install --no-dev --optimize-autoloader && npm install && npm run build`
- [ ] Publish directory set: `public`
- [ ] PHP version set: `8.2`
- [ ] Deploy!

## After Deployment

1. **Visit your site** at `https://your-site.netlify.app`
2. **Check browser console** for any errors
3. **Verify all assets load** correctly
4. **Test interactive features** (pricing toggle, step navigation, etc.)

## Need Help?

- Check Netlify build logs for errors
- Verify all files are committed to Git
- Ensure environment variables are set correctly
- Test locally first before deploying

Your Laravel landing page should now be live on Netlify! 🚀

