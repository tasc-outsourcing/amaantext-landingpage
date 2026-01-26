const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

// Create dist directory
const distDir = path.join(__dirname, '..', 'dist');
if (!fs.existsSync(distDir)) {
    fs.mkdirSync(distDir, { recursive: true });
}

// Copy public assets
const publicDir = path.join(__dirname, '..', 'public');
if (fs.existsSync(publicDir)) {
    execSync(`cp -r ${publicDir}/* ${distDir}/`, { stdio: 'inherit' });
}

console.log('Static build completed! Files are in the dist/ directory.');
console.log('You can now deploy the dist/ folder to Netlify.');

