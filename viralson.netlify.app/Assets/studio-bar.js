/**
 * Viral Son WordPress Studio Ribbon & Code Inspector
 */
(function() {
    'use strict';

    if (window.__vsStudioInitialized) return;
    window.__vsStudioInitialized = true;

    document.addEventListener('DOMContentLoaded', initStudio);
    if (document.readyState === 'interactive' || document.readyState === 'complete') {
        initStudio();
    }

    let themeFiles = [];
    let currentFileIndex = 0;

    function initStudio() {
        if (document.getElementById('vsStudioRibbon')) return;

        document.body.classList.add('with-studio-bar');

        // Create Ribbon DOM
        const ribbon = document.createElement('div');
        ribbon.id = 'vsStudioRibbon';
        ribbon.innerHTML = `
            <div class="vs-studio-brand">
                <span class="vs-wp-icon">W</span>
                <span class="title-text">Viral Son WordPress Theme</span>
                <span class="vs-studio-pill">Classic PHP · v1.0.0</span>
            </div>

            <div class="vs-studio-nav">
                <button type="button" class="vs-studio-tab-btn active" id="vsTabPreview">
                    <i class="fas fa-eye"></i> Live Preview
                </button>
                <button type="button" class="vs-studio-tab-btn" id="vsTabInspector">
                    <i class="fas fa-code"></i> Theme File Inspector
                </button>
                <button type="button" class="vs-studio-tab-btn" id="vsTabDocs">
                    <i class="fas fa-book"></i> Installation Guide
                </button>
            </div>

            <div>
                <a href="/api/export-theme.zip" class="vs-studio-download-btn" id="vsDownloadBtn">
                    <i class="fas fa-file-archive"></i> Download viralson-theme.zip
                </a>
            </div>
        `;
        document.body.appendChild(ribbon);

        // Create Modal Container for Inspector and Docs
        const modal = document.createElement('div');
        modal.id = 'vsStudioModal';
        modal.className = 'vs-studio-modal';
        modal.innerHTML = `
            <div class="vs-inspector-card">
                <div class="vs-inspector-header">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <span class="vs-wp-icon">W</span>
                        <strong id="vsModalTitle" style="font-size: 14px; color: #fff;">WordPress Theme Files & Templates</strong>
                    </div>
                    <button type="button" id="vsModalCloseBtn" style="background: transparent; border: none; color: #9aa2ae; font-size: 18px; cursor: pointer; padding: 4px 8px;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- View 1: Code Inspector -->
                <div class="vs-inspector-body" id="vsInspectorView">
                    <div class="vs-file-tree" id="vsFileTree">
                        <div style="padding: 12px; color: #9aa2ae; font-size: 12px;">Loading theme files...</div>
                    </div>
                    <div class="vs-code-view-container">
                        <div class="vs-code-view-bar">
                            <span id="vsActiveFileName" style="font-family: monospace; font-weight: 600; color: #fff;">functions.php</span>
                            <div style="display: flex; gap: 10px;">
                                <button type="button" id="vsCopyCodeBtn" style="background: #1e232b; border: 1px solid #3b4759; color: #e4e7eb; padding: 4px 10px; border-radius: 4px; font-size: 11px; cursor: pointer;">
                                    <i class="fas fa-copy"></i> Copy Code
                                </button>
                            </div>
                        </div>
                        <pre class="vs-code-editor" id="vsCodeEditor"><code>// Select a file from the tree to view source code</code></pre>
                    </div>
                </div>

                <!-- View 2: Installation Guide -->
                <div id="vsDocsView" style="display: none; padding: 32px; overflow-y: auto; color: #e4e7eb; line-height: 1.7; font-size: 14px;">
                    <h2 style="font-size: 22px; color: #fff; margin-bottom: 12px; font-weight: 800;">
                        How to Deploy Viral Son on Real-World WordPress Hosting
                    </h2>
                    <p style="color: #9aa2ae; margin-bottom: 24px; font-size: 15px;">
                        This theme is built natively with the WordPress Theme Handbook standard. It works on any hosting (cPanel, Apache, Nginx, Bluehost, SiteGround, WP Engine, Kinsta, or self-hosted).
                    </p>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-bottom: 30px;">
                        <div style="background: #121519; border: 1px solid #262c36; border-radius: 6px; padding: 20px;">
                            <h3 style="font-size: 15px; color: #4da3ff; margin-bottom: 8px; font-weight: 700;">Step 1: Download & Upload</h3>
                            <p style="font-size: 13px; color: #9aa2ae;">
                                Click the top right <strong>"Download viralson-theme.zip"</strong> button. In your WordPress admin, go to <strong>Appearance &gt; Themes &gt; Add New &gt; Upload Theme</strong>, select the zip file, and click <strong>Install Now</strong>.
                            </p>
                        </div>
                        <div style="background: #121519; border: 1px solid #262c36; border-radius: 6px; padding: 20px;">
                            <h3 style="font-size: 15px; color: #2ecc71; margin-bottom: 8px; font-weight: 700;">Step 2: Activate & Menus</h3>
                            <p style="font-size: 13px; color: #9aa2ae;">
                                Click <strong>Activate</strong>. Head to <strong>Appearance &gt; Menus</strong> to assign your links to the "Primary Header Menu" location.
                            </p>
                        </div>
                        <div style="background: #121519; border: 1px solid #262c36; border-radius: 6px; padding: 20px;">
                            <h3 style="font-size: 15px; color: #9b59b6; margin-bottom: 8px; font-weight: 700;">Step 3: Music & Audio CPT</h3>
                            <p style="font-size: 13px; color: #9aa2ae;">
                                The theme registers the <strong>Music &amp; Audio</strong> post type. Enter track sample audio URLs, artist names, and direct download links for FLAC and MP3 tiers.
                            </p>
                        </div>
                    </div>

                    <div style="margin-top: 20px; text-align: center;">
                        <a href="/api/export-theme.zip" class="vs-studio-download-btn" style="padding: 10px 24px; font-size: 14px;">
                            <i class="fas fa-file-archive"></i> Download viralson-theme.zip Now
                        </a>
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(modal);

        // Toast Container
        const toast = document.createElement('div');
        toast.id = 'vsStudioToast';
        toast.innerHTML = '<i class="fas fa-check-circle"></i> <span id="vsToastMsg">Theme ZIP downloaded!</span>';
        document.body.appendChild(toast);

        // Event Listeners
        const tabPreview = document.getElementById('vsTabPreview');
        const tabInspector = document.getElementById('vsTabInspector');
        const tabDocs = document.getElementById('vsTabDocs');
        const modalCloseBtn = document.getElementById('vsModalCloseBtn');
        const inspectorView = document.getElementById('vsInspectorView');
        const docsView = document.getElementById('vsDocsView');
        const modalTitle = document.getElementById('vsModalTitle');
        const downloadBtn = document.getElementById('vsDownloadBtn');

        function setActiveTab(tab) {
            [tabPreview, tabInspector, tabDocs].forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        }

        tabPreview.addEventListener('click', function() {
            setActiveTab(tabPreview);
            modal.classList.remove('open');
        });

        tabInspector.addEventListener('click', function() {
            setActiveTab(tabInspector);
            inspectorView.style.display = 'grid';
            docsView.style.display = 'none';
            modalTitle.textContent = 'WordPress Theme Architecture & Source Code';
            modal.classList.add('open');
            loadThemeFiles();
        });

        tabDocs.addEventListener('click', function() {
            setActiveTab(tabDocs);
            inspectorView.style.display = 'none';
            docsView.style.display = 'block';
            modalTitle.textContent = 'WordPress Deployment & Hosting Guide';
            modal.classList.add('open');
        });

        modalCloseBtn.addEventListener('click', function() {
            setActiveTab(tabPreview);
            modal.classList.remove('open');
        });

        downloadBtn.addEventListener('click', function() {
            showToast('Preparing and downloading viralson-theme.zip for WordPress...');
        });

        const copyBtn = document.getElementById('vsCopyCodeBtn');
        if (copyBtn) {
            copyBtn.addEventListener('click', function() {
                if (themeFiles[currentFileIndex]) {
                    navigator.clipboard.writeText(themeFiles[currentFileIndex].content).then(() => {
                        copyBtn.innerHTML = '<i class="fas fa-check"></i> Copied!';
                        setTimeout(() => {
                            copyBtn.innerHTML = '<i class="fas fa-copy"></i> Copy Code';
                        }, 2000);
                    });
                }
            });
        }
    }

    function loadThemeFiles() {
        if (themeFiles.length > 0) return;
        fetch('/api/theme-files')
            .then(res => res.json())
            .then(files => {
                themeFiles = files;
                renderFileTree();
                if (themeFiles.length > 0) {
                    selectFile(0);
                }
            })
            .catch(err => {
                const tree = document.getElementById('vsFileTree');
                if (tree) tree.innerHTML = '<div style="padding:12px; color:#ff5252;">Failed to load files</div>';
            });
    }

    function renderFileTree() {
        const tree = document.getElementById('vsFileTree');
        if (!tree) return;
        tree.innerHTML = '';

        themeFiles.forEach((file, index) => {
            const item = document.createElement('div');
            item.className = 'vs-file-tree-item' + (index === 0 ? ' active' : '');
            let icon = 'fa-file-code';
            if (file.name.endsWith('.php')) icon = 'fa-file-code';
            if (file.name.endsWith('.css')) icon = 'fa-css3-alt';
            if (file.name.endsWith('.js')) icon = 'fa-js';
            if (file.name.endsWith('.md')) icon = 'fa-file-alt';
            if (file.name.endsWith('.png')) icon = 'fa-file-image';

            item.innerHTML = `<i class="fab ${icon} fa-fw" style="color: ${file.name.endsWith('.php') ? '#8993be' : '#4da3ff'};"></i> ${file.path}`;
            item.addEventListener('click', () => selectFile(index));
            tree.appendChild(item);
        });
    }

    function selectFile(index) {
        currentFileIndex = index;
        const items = document.querySelectorAll('.vs-file-tree-item');
        items.forEach((item, i) => {
            if (i === index) item.classList.add('active');
            else item.classList.remove('active');
        });

        const file = themeFiles[index];
        if (!file) return;

        const fileNameEl = document.getElementById('vsActiveFileName');
        const editorEl = document.getElementById('vsCodeEditor');

        if (fileNameEl) fileNameEl.textContent = file.path + ' (' + formatBytes(file.size) + ')';
        if (editorEl) {
            editorEl.textContent = file.content;
        }
    }

    function formatBytes(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
    }

    function showToast(msg) {
        const toast = document.getElementById('vsStudioToast');
        const toastMsg = document.getElementById('vsToastMsg');
        if (!toast) return;
        if (toastMsg) toastMsg.textContent = msg;
        toast.style.display = 'flex';
        setTimeout(() => {
            toast.style.display = 'none';
        }, 4000);
    }
})();
