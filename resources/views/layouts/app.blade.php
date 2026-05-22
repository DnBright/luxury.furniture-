<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'LUXURY | Luxury Outdoor Teak & Design Furniture')</title>
    <meta name="description" content="Discover LUXURY, the pinnacle of luxury outdoor furniture. Designed by world-renowned designers and perfected by master craftsmen using premium sustainable teak wood.">
    <meta name="keywords" content="luxury furniture, outdoor teak furniture, modern designer sofas, premium daybeds, Luxury, designer outdoor dining">
    
    <!-- CSS Design System -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    @yield('styles')
</head>
<body>

    <!-- Global Header -->
    <header id="main-header">
        <div class="nav-left">
            <button class="menu-btn" id="open-menu-btn" aria-label="Open Navigation Menu">
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <span>MENU</span>
            </button>
            <button class="search-btn" id="search-trigger" aria-label="Open Search Panel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <span>SEARCH</span>
            </button>
        </div>
        
        <div class="logo">
            <a href="{{ route('home') }}">LUXURY</a>
        </div>
        
        <div class="nav-right">
            <a href="#contact" class="contact-link">CONTACT US</a>
            <a href="#" class="cart-icon" id="wishlist-trigger" aria-label="View Wishlist">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
                <span>( 0 )</span>
            </a>
        </div>
    </header>

    <!-- Sidebar Slide-In Navigation Menu -->
    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar" id="sidebar-menu">
        <button class="sidebar-close" id="close-menu-btn" aria-label="Close Menu">&times;</button>
        
        <div class="sidebar-menu">
            <div class="sidebar-item" onclick="scrollToSection('collections')">
                <span>PRODUCTS</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('collections')">
                <span>COLLECTIONS</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('story')">
                <span>PROJECTS</span>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('story')">
                <span>DESIGNERS</span>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('footer')">
                <span>CATALOGS</span>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('story')">
                <span>ABOUT US</span>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('footer')">
                <span>STORIES</span>
            </div>
            <div class="sidebar-item" onclick="scrollToSection('contact')">
                <span>INSPIRATIONS</span>
            </div>
        </div>
        
        <div class="sidebar-footer">
            <div class="sidebar-logo">LUXURY</div>
        </div>
    </div>

    <!-- Collection Details Slide-Out Drawer -->
    <div class="sidebar-overlay" id="drawer-overlay" style="z-index: 209;"></div>
    <div class="detail-drawer" id="detail-drawer">
        <div class="drawer-header">
            <div class="drawer-title-box">
                <h3 class="drawer-title" id="drawer-collection-name">LENA COLLECTION</h3>
                <span class="drawer-subtitle" id="drawer-collection-designer">by Made Studio</span>
            </div>
            <button class="drawer-close" id="close-drawer-btn" aria-label="Close Drawer">&times;</button>
        </div>
        <div class="drawer-content">
            <p class="drawer-desc" id="drawer-collection-desc">
                A collection of architectural lines that seamlessly blend premium teak warmth with state-of-the-art aluminum elegance.
            </p>
            
            <div>
                <h4 class="drawer-section-title">COLLECTION PRODUCTS</h4>
                <div id="drawer-products-list">
                    <!-- Dynamic products will be rendered here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notifications Container -->
    <div class="toast-container" id="toast-container"></div>

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="footer-brand">
                <span class="footer-brand-title">Teak Outdoor Furniture</span>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Pinterest">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                            <line x1="18" y1="2" x2="22" y2="6"></line>
                            <path d="M7.5 10.5C7.5 12.43 9.07 14 11 14h2a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4h-2a4 4 0 0 0-4 4v4.5z"></path>
                            <path d="M11.5 14v6.5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V13"></path>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Vimeo">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M23 12c0 3.037-1.74 5.666-4.507 6.848a.5.5 0 0 1-.693-.454v-1.127a6.97 6.97 0 0 0 .7-2.617c0-2.316-1.87-4.195-4.178-4.195a4.237 4.237 0 0 0-3.327 1.621.5.5 0 0 1-.806-.118l-.513-.889a.5.5 0 0 1 .154-.683C11.144 9.421 12.784 9 14.5 9c4.694 0 8.5 3.806 8.5 8.5V12z"></path>
                            <path d="M2 12C2 7.306 5.806 3.5 10.5 3.5c1.716 0 3.356.421 4.793 1.189a.5.5 0 0 1 .154.683l-.513.889a.5.5 0 0 1-.806.118A4.237 4.237 0 0 0 10.822 8c-2.308 0-4.178 1.879-4.178 4.195 0 .973.245 1.884.7 2.617v1.127a.5.5 0 0 1-.693.454C3.74 17.666 2 15.037 2 12z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="footer-nav">
                <span class="footer-label">NAVIGATE</span>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="#story">ABOUT US</a></li>
                    <li><a href="#story">MATERIALS AND MAINTENANCE</a></li>
                    <li><a href="#collections">COLLECTIONS</a></li>
                    <li><a href="#story">DESIGNERS</a></li>
                    <li><a href="#collections">PRODUCTS</a></li>
                    <li><a href="#contact">WARRANTY</a></li>
                </ul>
            </div>
            
            <div class="footer-newsletter">
                <span class="footer-label">SUBSCRIBE TO OUR NEWSLETTER</span>
                <form class="newsletter-form" id="newsletter-form" action="{{ route('subscribe.submit') }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="newsletter-input" placeholder="ENTER YOUR EMAIL ADDRESS" required aria-label="Email address for newsletter">
                    <button type="submit" class="newsletter-btn" aria-label="Subscribe">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <span>Luxury All Rights Reserved</span>
            <span>Copyright &copy; 2026 Privacy Policy</span>
        </div>
    </footer>

    <!-- Global JavaScript -->
    <script>
        // Set CSRF token for fetch requests
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Sticky Header & Dynamic Logo scroll styling
        const header = document.getElementById('main-header');
        const logo = document.querySelector('.logo');

        // Cache initial window width and height to prevent Android/iOS scroll-jumping (address bar collapse)
        let cachedWidth = window.innerWidth;
        let cachedHeight = window.innerHeight;
        let cachedHeaderHeight = header ? header.offsetHeight : 80;

        function handleResize() {
            // Only update height-related caches if the width changes (e.g., screen rotation)
            // This prevents address-bar vertical resizing on mobile from causing recalculation loops.
            if (window.innerWidth !== cachedWidth) {
                cachedWidth = window.innerWidth;
                cachedHeight = window.innerHeight;
                cachedHeaderHeight = header ? header.offsetHeight : 80;
                updateScrollEffects();
            }
        }

        function updateScrollEffects() {
            let scrollY = window.scrollY;
            let maxScroll = 300; // Snappier, tighter animation
            let progress = Math.min(scrollY / maxScroll, 1);
            
            let isMobile = cachedWidth <= 768;
            let startSize = isMobile ? 2.4 : 8; // Polished starting logo size on mobile
            let endSize = isMobile ? 1.1 : 1.8;  // Polished ending logo size on mobile
            
            let startTop = cachedHeight / 2;
            let endTop = cachedHeaderHeight / 2;
            
            let currentTop = startTop - (startTop - endTop) * progress;
            let currentSize = startSize - (startSize - endSize) * progress;
            let currentLetterSpacing = isMobile 
                ? -0.01 + (0.24 * progress) // Tighter mobile spacing transition
                : -0.02 + (0.42 * progress);
            let currentWeight = 600 - (300 * progress);
            
            logo.style.top = currentTop + 'px';
            logo.style.fontSize = currentSize + 'rem';
            logo.style.letterSpacing = currentLetterSpacing + 'em';
            logo.style.fontWeight = currentWeight;
            // Prevent logo from overflowing the header on mobile
            logo.style.maxWidth = isMobile ? 'calc(100vw - 140px)' : 'none';

            if (scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        window.addEventListener('scroll', updateScrollEffects, { passive: true });
        window.addEventListener('resize', handleResize, { passive: true });
        
        // Initial setup on DOMContentLoaded
        document.addEventListener('DOMContentLoaded', () => {
            cachedWidth = window.innerWidth;
            cachedHeight = window.innerHeight;
            cachedHeaderHeight = header ? header.offsetHeight : 80;
            updateScrollEffects();
        });

        // Sidebar Sliding Menu controls
        const sidebar = document.getElementById('sidebar-menu');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const openMenuBtn = document.getElementById('open-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('active');
        }

        openMenuBtn.addEventListener('click', toggleSidebar);
        closeMenuBtn.addEventListener('click', toggleSidebar);
        sidebarOverlay.addEventListener('click', toggleSidebar);

        // Dynamic Collection Details Drawer controls
        const detailDrawer = document.getElementById('detail-drawer');
        const drawerOverlay = document.getElementById('drawer-overlay');
        const closeDrawerBtn = document.getElementById('close-drawer-btn');

        const drawerColName = document.getElementById('drawer-collection-name');
        const drawerColDesigner = document.getElementById('drawer-collection-designer');
        const drawerColDesc = document.getElementById('drawer-collection-desc');
        const drawerProductsList = document.getElementById('drawer-products-list');

        function openDrawer(collectionSlug) {
            // Close sidebar if open
            if (sidebar.classList.contains('active')) {
                toggleSidebar();
            }

            // Set loading state in drawer
            drawerColName.innerText = "Loading...";
            drawerColDesigner.innerText = "";
            drawerColDesc.innerText = "Retrieving collection data...";
            drawerProductsList.innerHTML = '<div style="text-align: center; padding: 2rem 0; color: var(--accent);">Fetching exquisite details...</div>';

            detailDrawer.classList.add('active');
            drawerOverlay.classList.add('active');

            // Fetch details from backend via AJAX
            fetch(`/collections/${collectionSlug}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const col = data.collection;
                        drawerColName.innerText = col.name;
                        drawerColDesigner.innerText = col.designer ? `by ${col.designer}` : '';
                        drawerColDesc.innerText = col.description;
                        
                        let productsHtml = '';
                        if (col.products && col.products.length > 0) {
                            col.products.forEach(p => {
                                productsHtml += `
                                    <div class="drawer-product-card">
                                        <img src="${p.image_path ? '/' + p.image_path : '/assets/images/lena_collection.png'}" alt="${p.name}" class="drawer-product-img">
                                        <div class="drawer-product-info">
                                            <h5 class="drawer-product-name">${p.name}</h5>
                                            <div class="drawer-product-details">
                                                <span><strong>Material:</strong> ${p.material || 'N/A'}</span>
                                                <span><strong>Dimensions:</strong> ${p.dimensions || 'N/A'}</span>
                                            </div>
                                            <span class="drawer-product-price">${p.price}</span>
                                        </div>
                                    </div>
                                `;
                            });
                        } else {
                            productsHtml = '<div style="color: var(--text-muted); padding: 1rem 0;">No products cataloged in this collection yet.</div>';
                        }
                        drawerProductsList.innerHTML = productsHtml;
                    } else {
                        showToast('Error', 'Unable to fetch collection details.', 'error');
                        closeDrawer();
                    }
                })
                .catch(err => {
                    console.error(err);
                    showToast('Error', 'A system error occurred.', 'error');
                    closeDrawer();
                });
        }

        function closeDrawer() {
            detailDrawer.classList.remove('active');
            drawerOverlay.classList.remove('active');
        }

        closeDrawerBtn.addEventListener('click', closeDrawer);
        drawerOverlay.addEventListener('click', closeDrawer);

        // Toast notification system
        const toastContainer = document.getElementById('toast-container');
        function showToast(title, message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = 'toast';
            
            const checkIcon = `
                <svg class="toast-success-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
            `;

            toast.innerHTML = `
                ${checkIcon}
                <div>
                    <strong>${title}</strong><br>
                    <span>${message}</span>
                </div>
            `;

            toastContainer.appendChild(toast);

            // Trigger slide out and destroy
            setTimeout(() => {
                toast.classList.add('fade-out');
                setTimeout(() => {
                    toast.remove();
                }, 400);
            }, 4000);
        }

        // Scroll to Section Helper
        function scrollToSection(sectionId) {
            const target = document.getElementById(sectionId);
            if (sidebar.classList.contains('active')) {
                toggleSidebar();
            }
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // AJAX Newsletter subscription
        const newsletterForm = document.getElementById('newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const emailInput = newsletterForm.querySelector('.newsletter-input');
                const emailValue = emailInput.value;
                const submitBtn = newsletterForm.querySelector('.newsletter-btn');
                
                submitBtn.disabled = true;
                
                fetch(newsletterForm.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ email: emailValue })
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.disabled = false;
                    if (data.success) {
                        showToast('Subscription Active', data.message, 'success');
                        newsletterForm.reset();
                    } else {
                        showToast('Subscription Failed', data.message || 'Unknown error occurred.', 'error');
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    showToast('Subscription Error', 'Already subscribed or invalid email format.', 'error');
                });
            });
        }

        // Wishlist trigger click
        document.getElementById('wishlist-trigger').addEventListener('click', (e) => {
            e.preventDefault();
            showToast('Wishlist', 'This bespoke selection list is preserved for your session.', 'success');
        });
        
        // Search trigger click
        document.getElementById('search-trigger').addEventListener('click', (e) => {
            e.preventDefault();
            showToast('Search', 'Explore our collections. Type "lena" or "teak" in the inquiry form below.', 'success');
        });
    </script>
    @yield('scripts')
</body>
</html>
