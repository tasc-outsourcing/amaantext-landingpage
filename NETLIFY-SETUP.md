# Netlify Deployment Setup - Laravel Landing Page

Your Laravel application is now configured to deploy on Netlify! Here's everything you need to know.

## ✅ What's Already Configured

1. **`netlify.toml`** - Build configuration for Netlify
2. **`public/index.php`** - Laravel entry point
3. **`public/.htaccess`** - URL rewriting rules
4. **`.netlifyignore`** - Files to exclude from deployment
5. **Laravel structure** - All necessary directories and files

## 🚀 Quick Start (3 Steps)

### 1. Push to GitHub/GitLab/Bitbucket

```bash
# Initialize git (if not already done)
git init

# Add all files
git add .

# Commit
git commit -m "Laravel landing page ready for Netlify"

# Add your remote repository
git remote add origin https://github.com/yourusername/your-repo.git

# Push
git push -u origin main
```

### 2. Deploy on Netlify

1. Go to **[Netlify Dashboard](https://app.netlify.com/)**
2. Click **"Add new site"** → **"Import an existing project"**
3. Connect your Git provider (GitHub/GitLab/Bitbucket)
4. Select your repository
5. **Configure build settings:**
   ```
   Build command: composer install --no-dev --optimize-autoloader && npm install && npm run build
   Publish directory: public
   ```
6. Click **"Show advanced"** → Add:
   - **PHP version:** `8.2`
   - **Node version:** `18`
7. Click **"Deploy site"**

### 3. Set Environment Variables

After the first deploy:

1. Go to **Site settings** → **Environment variables**
2. Add these variables:

   ```
   APP_ENV=production
   APP_DEBUG=false
   APP_KEY=base64:YOUR_KEY_HERE
   ```

3. **Generate APP_KEY** (run locally):
   ```bash
   php artisan key:generate --show
   ```
   Copy the output and paste it as `APP_KEY` value.

4. **Trigger a new deploy** from the Deploys tab

## 📁 Project Structure

```
├── app/                    # Laravel application code
├── bootstrap/              # Laravel bootstrap files
├── config/                 # Configuration files
├── public/                 # Public assets (deployed to Netlify)
│   ├── index.php          # Laravel entry point
│   ├── .htaccess          # URL rewriting
│   ├── images/            # Image assets
│   └── build/             # Compiled CSS/JS (generated)
├── resources/              # Blade templates & assets
│   ├── views/             # Blade templates
│   ├── css/               # CSS source files
│   └── js/                # JavaScript source files
├── routes/                 # Route definitions
├── composer.json           # PHP dependencies
├── package.json           # Node dependencies
└── netlify.toml           # Netlify configuration
```

## 🔧 Build Process

When Netlify builds your site, it will:

1. **Install PHP dependencies:** `composer install --no-dev --optimize-autoloader`
2. **Install Node dependencies:** `npm install`
3. **Build assets:** `npm run build` (compiles CSS/JS with Vite)
4. **Deploy:** Publishes the `public/` directory

## 🌐 How It Works

- **Netlify supports PHP** through their serverless functions
- **Laravel routes** work via `public/index.php`
- **Blade templates** render server-side
- **Static assets** (CSS, JS, images) are served directly
- **All routes** redirect to Laravel's router via `.htaccess`

## ⚙️ Configuration Files Explained

### `netlify.toml`
- Sets build command and publish directory
- Configures PHP and Node versions
- Sets up redirects for Laravel routing
- Configures caching headers

### `public/index.php`
- Laravel's entry point
- Handles all incoming requests
- Routes through Laravel's kernel

### `public/.htaccess`
- Rewrites URLs to `index.php`
- Handles trailing slashes
- Sets up authorization headers

## 🐛 Troubleshooting

### Build Fails

**Problem:** Build command fails
**Solution:**
- Check build logs in Netlify dashboard
- Ensure `composer.json` and `package.json` are committed
- Verify PHP/Node versions are correct

### Assets Not Loading

**Problem:** CSS/JS files return 404
**Solution:**
- Wait for build to complete (check `public/build/` exists)
- Verify Vite manifest is generated
- Clear browser cache
- Check asset paths use `asset()` helper in Blade

### 500 Internal Server Error

**Problem:** Site shows 500 error
**Solution:**
- Check `APP_KEY` is set correctly
- Verify `APP_DEBUG=false` in production
- Check Netlify function logs
- Ensure all Laravel files are committed

### Routes Not Working

**Problem:** Routes return 404
**Solution:**
- Verify `.htaccess` is in `public/` folder
- Check redirect rules in `netlify.toml`
- Ensure `index.php` exists in `public/`

## 📝 Environment Variables Reference

| Variable | Value | Required |
|----------|-------|----------|
| `APP_ENV` | `production` | Yes |
| `APP_DEBUG` | `false` | Yes |
| `APP_KEY` | Generated key | Yes |
| `APP_URL` | Your Netlify URL | Optional |

## 🎯 Testing Locally Before Deploy

```bash
# Install dependencies
composer install
npm install

# Build assets
npm run build

# Generate app key
php artisan key:generate

# Test locally
php artisan serve
```

Visit `http://localhost:8000` to verify everything works.

## 📦 What Gets Deployed

Netlify deploys the `public/` directory which contains:
- ✅ Compiled CSS and JS (`public/build/`)
- ✅ Images (`public/images/`)
- ✅ Laravel entry point (`public/index.php`)
- ✅ URL rewriting rules (`public/.htaccess`)

**Note:** The `vendor/` directory is installed during build, but only needed files are included.

## 🔄 Continuous Deployment

Once connected to Git:
- **Automatic deploys** on every push to `main` branch
- **Preview deploys** for pull requests
- **Build logs** available in Netlify dashboard

## ✨ Next Steps

1. ✅ Push code to Git
2. ✅ Connect to Netlify
3. ✅ Set environment variables
4. ✅ Deploy!
5. 🎉 Your Laravel landing page is live!

## 📚 Additional Resources

- [Netlify PHP Documentation](https://docs.netlify.com/integrations/frameworks/php/)
- [Laravel Deployment Guide](https://laravel.com/docs/deployment)
- [Netlify Build Configuration](https://docs.netlify.com/configure-builds/file-based-configuration/)

---

**Your Laravel landing page is ready for Netlify!** 🚀

Just follow the 3 steps above and you'll be live in minutes.

