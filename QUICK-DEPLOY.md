# Quick Deploy to Netlify - Laravel Landing Page

## Fastest Way to Deploy

### Step 1: Push to Git
```bash
git init
git add .
git commit -m "Laravel landing page"
git remote add origin <your-github-repo-url>
git push -u origin main
```

### Step 2: Deploy on Netlify

1. Go to https://app.netlify.com/
2. Click **"Add new site"** → **"Import an existing project"**
3. Connect your Git provider and select your repository
4. **Build settings:**
   - **Build command:** `composer install --no-dev --optimize-autoloader && npm install && npm run build`
   - **Publish directory:** `public`
5. Click **"Show advanced"** and add:
   - **PHP version:** `8.2`
   - **Node version:** `18`
6. Click **"Deploy site"**

### Step 3: Set Environment Variables

After first deploy, go to **Site settings** → **Environment variables** and add:

```
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:YOUR_GENERATED_KEY_HERE
```

To generate `APP_KEY`, run locally:
```bash
php artisan key:generate --show
```

### Step 4: Redeploy

After adding environment variables, trigger a new deploy from the **Deploys** tab.

## That's It! 🎉

Your Laravel landing page is now live on Netlify!

## Troubleshooting

**Build fails?**
- Check build logs in Netlify dashboard
- Make sure `composer.json` and `package.json` are committed

**Assets not loading?**
- Wait for build to complete (check `public/build/` exists)
- Clear browser cache

**500 Error?**
- Check `APP_KEY` is set correctly
- Verify `APP_DEBUG=false` in production

## Files Already Configured

✅ `netlify.toml` - Build configuration
✅ `public/index.php` - Laravel entry point  
✅ `public/.htaccess` - URL rewriting
✅ `.netlifyignore` - Files to exclude from deploy

Everything is ready to go! Just push to Git and deploy on Netlify.

