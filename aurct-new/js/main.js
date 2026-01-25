/**
 * Main JavaScript File
 * Anna University Regional Campus - Tirunelveli
 */

// Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initLoader();
    initNavigation();
    initHeroSlider();
    initScrollToTop();
    initTabs();
    initMarquee();
});

/**
 * Page Loader
 */
function initLoader() {
    const loader = document.querySelector('.loader-overlay');
    if (loader) {
        window.addEventListener('load', function() {
            setTimeout(() => {
                loader.classList.add('hidden');
            }, 500);
        });
    }
}

/**
 * Mobile Navigation
 */
function initNavigation() {
    const navToggle = document.querySelector('.nav-toggle');
    const navToggleHeader = document.querySelector('.nav-toggle-header');
    const navClose = document.querySelector('.nav-close');
    const mainNav = document.querySelector('.main-nav');
    const navOverlay = document.querySelector('.nav-overlay');
    const dropdownItems = document.querySelectorAll('.nav-item.has-dropdown');
    const nestedDropdownItems = document.querySelectorAll('.dropdown-item.has-dropdown');

    // Function to open mobile menu
    function openMobileMenu() {
        mainNav.classList.add('open');
        document.body.classList.add('nav-open');
        if (navOverlay) {
            navOverlay.classList.add('visible');
        }
    }

    // Toggle mobile menu (nav-wrapper hamburger)
    if (navToggle && mainNav) {
        navToggle.addEventListener('click', openMobileMenu);
    }

    // Toggle mobile menu (header hamburger)
    if (navToggleHeader && mainNav) {
        navToggleHeader.addEventListener('click', openMobileMenu);
    }

    // Close button inside sidebar
    if (navClose && mainNav) {
        navClose.addEventListener('click', function() {
            mainNav.classList.remove('open');
            document.body.classList.remove('nav-open');
            if (navOverlay) {
                navOverlay.classList.remove('visible');
            }
        });
    }

    // Close menu when clicking overlay
    if (navOverlay) {
        navOverlay.addEventListener('click', function() {
            mainNav.classList.remove('open');
            document.body.classList.remove('nav-open');
            navOverlay.classList.remove('visible');
        });
    }

    // Mobile dropdown toggle
    dropdownItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 1024 && item.classList.contains('has-dropdown')) {
                e.preventDefault();
                // Close other open dropdowns
                dropdownItems.forEach(other => {
                    if (other !== item) {
                        other.classList.remove('open');
                    }
                });
                item.classList.toggle('open');
            }
        });
    });

    // Nested dropdown toggle for mobile (e.g., University Administration, Campus Administration)
    nestedDropdownItems.forEach(item => {
        const link = item.querySelector('a');
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 1024) {
                e.preventDefault();
                e.stopPropagation();
                // Close other nested dropdowns at same level
                const siblings = item.parentElement.querySelectorAll('.dropdown-item.has-dropdown');
                siblings.forEach(other => {
                    if (other !== item) {
                        other.classList.remove('open');
                    }
                });
                item.classList.toggle('open');
            }
        });
    });

    // Close mobile menu on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 1024) {
            if (navToggle) navToggle.classList.remove('active');
            mainNav.classList.remove('open');
            document.body.classList.remove('nav-open');
            if (navOverlay) {
                navOverlay.classList.remove('visible');
            }
            dropdownItems.forEach(item => item.classList.remove('open'));
            nestedDropdownItems.forEach(item => item.classList.remove('open'));
        }
    });
}

/**
 * Hero Slider
 */
function initHeroSlider() {
    const slider = document.querySelector('.hero-slider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.hero-slide');
    const dots = slider.querySelectorAll('.hero-nav-dot');
    const prevBtn = slider.querySelector('.hero-arrow.prev');
    const nextBtn = slider.querySelector('.hero-arrow.next');
    
    let currentSlide = 0;
    let autoSlideInterval;

    function goToSlide(index) {
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        // Handle wrap around
        if (index >= slides.length) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = slides.length - 1;
        } else {
            currentSlide = index;
        }

        // Add active class to current slide and dot
        slides[currentSlide].classList.add('active');
        if (dots[currentSlide]) {
            dots[currentSlide].classList.add('active');
        }
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 5000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    // Event listeners
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            stopAutoSlide();
            goToSlide(index);
            startAutoSlide();
        });
    });

    // Pause on hover
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);

    // Initialize
    if (slides.length > 0) {
        goToSlide(0);
        startAutoSlide();
    }
}

/**
 * Scroll to Top Button
 */
function initScrollToTop() {
    const scrollTopBtn = document.querySelector('.scroll-top');
    if (!scrollTopBtn) return;

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });

    scrollTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Tabs Component
 */
function initTabs() {
    const tabContainers = document.querySelectorAll('.tabs');

    tabContainers.forEach(container => {
        const tabBtns = container.querySelectorAll('.tab-btn');
        const tabPanels = container.querySelectorAll('.tab-panel');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const target = this.dataset.target;

                // Remove active class from all buttons and panels
                tabBtns.forEach(b => b.classList.remove('active'));
                tabPanels.forEach(p => p.classList.remove('active'));

                // Add active class to clicked button and corresponding panel
                this.classList.add('active');
                const panel = container.querySelector(`#${target}`);
                if (panel) {
                    panel.classList.add('active');
                }
            });
        });
    });
}

/**
 * Marquee Animation
 */
function initMarquee() {
    const marquees = document.querySelectorAll('.marquee');
    
    marquees.forEach(marquee => {
        // Clone content for seamless loop
        const content = marquee.innerHTML;
        marquee.innerHTML = content + content;
    });
}

/**
 * Smooth Scroll for anchor links
 */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '#top') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

/**
 * Utility Functions
 */
const Utils = {
    // Debounce function
    debounce: function(func, wait) {
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

    // Throttle function
    throttle: function(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    // Format date
    formatDate: function(date) {
        const options = { day: 'numeric', month: 'short', year: 'numeric' };
        return new Date(date).toLocaleDateString('en-IN', options);
    }
};

// Export for use in other modules
window.Utils = Utils;
