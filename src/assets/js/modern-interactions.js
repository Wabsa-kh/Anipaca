// Modern Interactions and Enhanced UX
class ModernInteractions {
    constructor() {
        this.init();
    }

    init() {
        this.initScrollAnimations();
        this.initParallaxEffects();
        this.initSmoothScrolling();
        this.initHeaderEffects();
        this.initCardHoverEffects();
        this.initRippleEffects();
        this.initLazyLoading();
        this.initIntersectionObserver();
        this.initKeyboardNavigation();
        this.initTooltipEnhancements();
        this.initSearchEnhancements();
    }

    // Enhanced scroll animations
    initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        // Observe elements for scroll animations
        document.querySelectorAll('.block_area, .flw-item, .anif-block').forEach(el => {
            el.classList.add('fade-in-on-scroll');
            observer.observe(el);
        });
    }

    // Enhanced parallax effects
    initParallaxEffects() {
        let ticking = false;

        const updateParallax = () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.deslide-cover-img img');
            
            parallaxElements.forEach(element => {
                const speed = 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translate3d(0, ${yPos}px, 0)`;
            });
            
            ticking = false;
        };

        const requestTick = () => {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        };

        window.addEventListener('scroll', requestTick, { passive: true });
    }

    // Enhanced smooth scrolling
    initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }

    // Enhanced header effects
    initHeaderEffects() {
        const header = document.getElementById('header');
        let lastScrollTop = 0;

        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Hide/show header on scroll
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                header.style.transform = 'translateY(-100%)';
            } else {
                header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        }, { passive: true });
    }

    // Enhanced card hover effects
    initCardHoverEffects() {
        document.querySelectorAll('.flw-item').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
                this.classList.add('hover-lift');
            });

            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
                this.classList.remove('hover-lift');
            });

            // Add stagger animation to cards
            const cards = document.querySelectorAll('.flw-item');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.05}s`;
                card.classList.add('animate-slideInUp');
            });
        });
    }

    // Enhanced ripple effects
    initRippleEffects() {
        document.querySelectorAll('.btn, .interactive').forEach(element => {
            element.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
    }

    // Enhanced lazy loading
    initLazyLoading() {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    
                    // Add loading animation
                    img.style.opacity = '0';
                    img.style.transform = 'scale(0.8)';
                    
                    img.src = img.dataset.src;
                    img.onload = () => {
                        img.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                        img.style.opacity = '1';
                        img.style.transform = 'scale(1)';
                        img.classList.add('loaded');
                    };
                    
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Enhanced intersection observer
    initIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInScale');
                    
                    // Add stagger effect to children
                    const children = entry.target.querySelectorAll('.flw-item, .anif-block li');
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('animate-slideInUp');
                        }, index * 50);
                    });
                }
            });
        }, observerOptions);

        document.querySelectorAll('.block_area, .film_list-wrap').forEach(el => {
            observer.observe(el);
        });
    }

    // Enhanced keyboard navigation
    initKeyboardNavigation() {
        document.addEventListener('keydown', (e) => {
            // Enhanced search focus
            if (e.ctrlKey && e.key === 'k') {
                e.preventDefault();
                const searchInput = document.querySelector('.search-input');
                if (searchInput) {
                    searchInput.focus();
                    searchInput.select();
                }
            }

            // Enhanced navigation
            if (e.key === 'Escape') {
                // Close any open dropdowns or modals
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                
                document.querySelectorAll('.modal.show').forEach(modal => {
                    modal.classList.remove('show');
                });
            }
        });
    }

    // Enhanced tooltip effects
    initTooltipEnhancements() {
        document.querySelectorAll('[data-toggle="tooltip"]').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.classList.add('hover-glow');
            });

            element.addEventListener('mouseleave', function() {
                this.classList.remove('hover-glow');
            });
        });
    }

    // Enhanced search interactions
    initSearchEnhancements() {
        const searchInput = document.querySelector('.search-input');
        const searchContainer = document.querySelector('#search .search-content');
        
        if (searchInput && searchContainer) {
            searchInput.addEventListener('focus', () => {
                searchContainer.classList.add('focused');
                searchContainer.style.transform = 'scale(1.02)';
            });

            searchInput.addEventListener('blur', () => {
                searchContainer.classList.remove('focused');
                searchContainer.style.transform = 'scale(1)';
            });

            // Enhanced search suggestions animation
            const searchSuggest = document.getElementById('search-suggest');
            if (searchSuggest) {
                const observer = new MutationObserver((mutations) => {
                    mutations.forEach((mutation) => {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                            if (searchSuggest.style.display === 'block') {
                                searchSuggest.classList.add('animate-slideInDown');
                            }
                        }
                    });
                });

                observer.observe(searchSuggest, { attributes: true });
            }
        }
    }

    // Enhanced loading states
    showLoadingState(element) {
        element.classList.add('loading-shimmer');
        element.style.pointerEvents = 'none';
    }

    hideLoadingState(element) {
        element.classList.remove('loading-shimmer');
        element.style.pointerEvents = 'auto';
    }

    // Enhanced notification system
    showNotification(message, type = 'info', duration = 5000) {
        const notification = document.createElement('div');
        notification.className = `notification ${type} animate-slideInRight`;
        notification.innerHTML = `
            <div class="notification-content">
                <span class="notification-message">${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `;

        document.body.appendChild(notification);

        // Show notification
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);

        // Auto hide
        setTimeout(() => {
            this.hideNotification(notification);
        }, duration);

        // Manual close
        notification.querySelector('.notification-close').addEventListener('click', () => {
            this.hideNotification(notification);
        });
    }

    hideNotification(notification) {
        notification.classList.remove('show');
        notification.classList.add('animate-slideOutRight');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }

    // Enhanced theme switching
    initThemeSwitch() {
        const themeToggle = document.createElement('button');
        themeToggle.className = 'theme-toggle';
        themeToggle.innerHTML = '🌙';
        themeToggle.setAttribute('aria-label', 'Toggle theme');
        
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('light-theme');
            themeToggle.innerHTML = document.body.classList.contains('light-theme') ? '☀️' : '🌙';
        });

        document.querySelector('.header-setting .hs-toggles').appendChild(themeToggle);
    }

    // Enhanced performance monitoring
    initPerformanceMonitoring() {
        // Monitor animation performance
        let animationFrameId;
        let lastTime = performance.now();
        
        const checkPerformance = (currentTime) => {
            const delta = currentTime - lastTime;
            
            if (delta > 16.67) { // If frame rate drops below 60fps
                document.body.classList.add('reduce-animations');
            } else {
                document.body.classList.remove('reduce-animations');
            }
            
            lastTime = currentTime;
            animationFrameId = requestAnimationFrame(checkPerformance);
        };

        requestAnimationFrame(checkPerformance);
    }
}

// Enhanced CSS for modern interactions
const modernInteractionsCSS = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple 0.6s linear;
        pointer-events: none;
    }

    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background: rgba(18, 18, 26, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid var(--border-light);
        border-radius: 12px;
        padding: 16px 20px;
        color: white;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        transform: translateX(400px);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 9999;
        max-width: 400px;
    }

    .notification.show {
        transform: translateX(0);
    }

    .notification.success {
        border-left: 4px solid #4ade80;
    }

    .notification.error {
        border-left: 4px solid #ef4444;
    }

    .notification.warning {
        border-left: 4px solid #f59e0b;
    }

    .notification-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .notification-close {
        background: none;
        border: none;
        color: white;
        font-size: 18px;
        cursor: pointer;
        padding: 0;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background 0.2s ease;
    }

    .notification-close:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .theme-toggle {
        background: var(--background-quaternary);
        border: 1px solid var(--border-light);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
        font-size: 16px;
    }

    .theme-toggle:hover {
        background: var(--gradient-primary);
        transform: scale(1.1);
        box-shadow: var(--shadow-glow);
    }

    .focused {
        box-shadow: 0 0 0 3px rgba(255, 107, 157, 0.2) !important;
    }

    .reduce-animations * {
        animation-duration: 0.1s !important;
        transition-duration: 0.1s !important;
    }

    @keyframes slideOutRight {
        to {
            transform: translateX(400px);
            opacity: 0;
        }
    }

    .animate-slideOutRight {
        animation: slideOutRight 0.3s ease-in-out;
    }

    /* Enhanced loading skeleton */
    .skeleton-card {
        background: var(--background-tertiary);
        border-radius: var(--border-radius-sm);
        padding: 16px;
        margin-bottom: 16px;
    }

    .skeleton-line {
        height: 16px;
        background: linear-gradient(90deg, var(--background-quaternary) 25%, var(--background-tertiary) 50%, var(--background-quaternary) 75%);
        background-size: 200% 100%;
        animation: skeletonLoading 1.5s infinite;
        border-radius: 8px;
        margin-bottom: 8px;
    }

    .skeleton-line.short {
        width: 60%;
    }

    .skeleton-line.medium {
        width: 80%;
    }

    .skeleton-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: linear-gradient(90deg, var(--background-quaternary) 25%, var(--background-tertiary) 50%, var(--background-quaternary) 75%);
        background-size: 200% 100%;
        animation: skeletonLoading 1.5s infinite;
    }

    /* Enhanced focus indicators */
    .focus-visible {
        outline: 3px solid rgba(255, 107, 157, 0.5);
        outline-offset: 2px;
        border-radius: 8px;
    }

    /* Enhanced hover states for accessibility */
    @media (hover: hover) {
        .hover-only:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }
    }

    /* Enhanced touch targets for mobile */
    @media (max-width: 768px) {
        .btn, .nav-link, .dropdown-item {
            min-height: 44px;
            min-width: 44px;
        }
    }
`;

// Inject CSS
const styleSheet = document.createElement('style');
styleSheet.textContent = modernInteractionsCSS;
document.head.appendChild(styleSheet);

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        new ModernInteractions();
    });
} else {
    new ModernInteractions();
}

// Enhanced utility functions
window.ModernUtils = {
    // Smooth scroll to element
    scrollTo(element, offset = 0) {
        const targetPosition = element.offsetTop - offset;
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    },

    // Debounce function for performance
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    // Throttle function for scroll events
    throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    // Enhanced element visibility checker
    isElementVisible(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    },

    // Enhanced animation trigger
    triggerAnimation(element, animationClass, duration = 1000) {
        element.classList.add(animationClass);
        setTimeout(() => {
            element.classList.remove(animationClass);
        }, duration);
    }
};

// Export for global use
window.ModernInteractions = ModernInteractions;