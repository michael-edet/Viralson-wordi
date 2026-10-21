import express from 'express';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();
const PORT = process.env.PORT || 3000;
const HOST = '0.0.0.0';
const staticDir = path.join(__dirname, 'viralson.netlify.app');

// Mock Google AdSense script requests so browser console doesn't show errors
app.use('/pagead2.googlesyndication.com', (req, res) => {
  res.type('application/javascript').send('// Google AdSense mock for development');
});

// Serve all static files from viralson.netlify.app with html extension resolution
app.use(express.static(staticDir, {
  extensions: ['html'],
  index: 'index.html'
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
