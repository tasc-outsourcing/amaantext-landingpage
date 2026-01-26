# Deploying to Netlify

Since this is a Laravel application, you have a few options for deploying to Netlify:

## Option 1: Static HTML Build (Recommended for Quick Preview)

This creates a standalone static version that works on Netlify without PHP.

### Steps:

1. **Build the assets:**
   ```bash
   npm install
   npm run build
   ```

2. **The built files will be in `public/build/` directory**

3. **For Netlify deployment:**
   - Go to your Netlify dashboard
   - Drag and drop the `public` folder to Netlify
   - OR connect your Git repository and set:
     - **Build command:** `npm run build`
     - **Publish directory:** `public`

## Option 2: Use Netlify's PHP Support

Netlify supports PHP, but with limitations. You'll need to:

1. **Install dependencies:**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install
   npm run build
   ```

2. **Configure Netlify:**
   - Create a `netlify.toml` file (already created)
   - Set build command: `composer install && npm run build`
   - Set publish directory: `public`

3. **Note:** Laravel's full features may not work on Netlify's PHP runtime. For a landing page, Option 1 is better.

## Option 3: Export Static HTML (Best for Landing Page)

Since this is a static landing page, you can create a standalone HTML file:

1. **Build assets:**
   ```bash
   npm run build
   ```

2. **Copy the built CSS/JS files from `public/build/`**

3. **Create a single HTML file** with all content inline

4. **Deploy to Netlify** by dragging the HTML file

## Quick Deploy Steps:

### Method A: Drag & Drop (Easiest)

1. Run `npm run build`
2. Zip the `public` folder
3. Go to [Netlify Drop](https://app.netlify.com/drop)
4. Drag and drop the zip file

### Method B: Git Integration

1. Push your code to GitHub/GitLab/Bitbucket
2. Connect repository to Netlify
3. Set build settings:
   - **Build command:** `npm install && npm run build`
   - **Publish directory:** `public`
4. Deploy!

### Method C: Netlify CLI

```bash
# Install Netlify CLI
npm install -g netlify-cli

# Build the project
npm run build

# Deploy
netlify deploy --prod --dir=public
```

## Important Notes:

- **Assets:** Make sure all images are in `public/images/`
- **Routes:** For a single-page landing page, Netlify's redirect rules will handle routing
- **PHP:** If you need Laravel features, consider using Laravel Forge, Vapor, or traditional hosting instead

## Current Setup:

Your `netlify.toml` is configured to:
- Build command: `npm run build:static` (you may need to add this script)
- Publish directory: `dist` (or change to `public`)

## Recommended Approach:

For a landing page on Netlify, I recommend:

1. **Build assets:** `npm run build`
2. **Deploy the `public` folder** directly to Netlify
3. **All static assets** (CSS, JS, images) will be served correctly

The `public` folder contains:
- `build/` - Compiled CSS and JS from Vite
- `images/` - All image assets
- `index.html` - Your main page (if generated)

