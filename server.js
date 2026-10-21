import express from 'express';
import path from 'path';
import fs from 'fs';
import { fileURLToPath } from 'url';
import { createRequire } from 'module';

const require = createRequire(import.meta.url);
const { ZipArchive } = require('archiver');

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();
const PORT = process.env.PORT || 3000;
const HOST = '0.0.0.0';
const staticDir = path.join(__dirname, 'viralson.netlify.app');
const themeDir = path.join(__dirname, 'wp-theme', 'viralson');
const zipPath = path.join(__dirname, 'viralson-theme.zip');

// Mock Google AdSense script requests
app.use('/pagead2.googlesyndication.com', (req, res) => {
  res.type('application/javascript').send('// Google AdSense mock for development');
});

// API: Export WordPress Theme ZIP for real-world hosting installation
app.get('/api/export-theme.zip', (req, res) => {
  if (fs.existsSync(zipPath)) {
    res.setHeader('Content-Type', 'application/zip');
    res.setHeader('Content-Disposition', 'attachment; filename="viralson-theme.zip"');
    return fs.createReadStream(zipPath).pipe(res);
  }

  // Dynamic creation if not pre-built
  res.setHeader('Content-Type', 'application/zip');
  res.setHeader('Content-Disposition', 'attachment; filename="viralson-theme.zip"');
  const archive = new ZipArchive({ zlib: { level: 9 } });
  archive.pipe(res);
  archive.directory(themeDir, 'viralson');
  archive.finalize();
});

// API: Theme Files list for the Code Inspector
app.get('/api/theme-files', (req, res) => {
  function scan(dir, base = '') {
    let results = [];
    if (!fs.existsSync(dir)) return results;
    const list = fs.readdirSync(dir);
    for (const file of list) {
      const full = path.join(dir, file);
      const rel = base ? `${base}/${file}` : file;
      const stat = fs.statSync(full);
      if (stat.isDirectory()) {
        results = results.concat(scan(full, rel));
      } else {
        results.push({
          name: file,
          path: rel,
          content: file.endsWith('.png') ? '[Binary File: Theme Screenshot]' : fs.readFileSync(full, 'utf8'),
          size: stat.size,
        });
      }
    }
    return results;
  }
  const files = scan(themeDir);
  res.json(files);
});

// HTML Injection Middleware to attach Studio Bar to all rendered pages
app.use((req, res, next) => {
  let filePath = path.join(staticDir, req.path);
  if (fs.existsSync(filePath) && fs.statSync(filePath).isDirectory()) {
    filePath = path.join(filePath, 'index.html');
  } else if (!path.extname(req.path) && fs.existsSync(filePath + '.html')) {
    filePath = filePath + '.html';
  }

  if (fs.existsSync(filePath) && filePath.endsWith('.html')) {
    try {
      let html = fs.readFileSync(filePath, 'utf8');
      const injection = `
<!-- WordPress Theme Studio Ribbon & Code Inspector -->
<link rel="stylesheet" href="/Assets/studio-bar.css">
<script src="/Assets/studio-bar.js"></script>
</body>`;
      if (html.includes('</body>')) {
        html = html.replace('</body>', injection);
      } else {
        html += injection;
      }
      res.type('html');
      return res.send(html);
    } catch (e) {
      next();
    }
  } else {
    next();
  }
});

// Serve static files
app.use(express.static(staticDir, {
  extensions: ['html'],
  index: 'index.html',
}));

// Cloudflare CDN fallback for any additional cdnjs assets not cached locally
app.use('/cdnjs.cloudflare.com', (req, res) => {
  res.redirect(302, `https://cdnjs.cloudflare.com${req.url}`);
});

// Route fallback for client-side navigation or 404
app.use((req, res) => {
  res.status(404).sendFile(path.join(staticDir, 'index.html'));
});

app.listen(PORT, HOST, () => {
  console.log(`Viral Son server is running at http://${HOST}:${PORT}`);
});
