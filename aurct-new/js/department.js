/**
 * Department Page JavaScript
 * Anna University Regional Campus - Tirunelveli
 */

document.addEventListener('DOMContentLoaded', function() {
    initDepartmentTabs();
    initDeptTabs();
    initGalleryLightbox();
    initMobileDepartmentNav();
});

/**
 * Mobile Department Navigation Toggle
 */
function initMobileDepartmentNav() {
    const departmentNav = document.querySelector('.department-nav');
    const navTitle = document.querySelector('.department-nav-title');
    const navLinks = document.querySelectorAll('.department-nav-link');

    if (!departmentNav || !navTitle) return;

    // Toggle menu on title click (mobile only)
    navTitle.addEventListener('click', function() {
        if (window.innerWidth <= 1024) {
            departmentNav.classList.toggle('open');
        }
    });

    // Close menu when a link is clicked (mobile only)
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 1024) {
                departmentNav.classList.remove('open');
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 1024 && !departmentNav.contains(e.target)) {
            departmentNav.classList.remove('open');
        }
    });

    // Reset on resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 1024) {
            departmentNav.classList.remove('open');
        }
    });
}

/**
 * Department Section Tabs (Sidebar navigation - used in CSE)
 */
function initDepartmentTabs() {
    const navLinks = document.querySelectorAll('.department-nav-link');
    const sections = document.querySelectorAll('.department-section');

    if (navLinks.length === 0) return;

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const target = this.dataset.section;

            // Remove active class from all links and sections
            navLinks.forEach(l => l.classList.remove('active'));
            sections.forEach(s => s.classList.remove('active'));

            // Add active class to clicked link and corresponding section
            this.classList.add('active');
            const targetSection = document.getElementById(target);
            if (targetSection) {
                targetSection.classList.add('active');
                
                // Scroll to section on mobile
                if (window.innerWidth <= 1024) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
}

/**
 * Department Tabs (Button tabs - used in ECE, Mech, Civil, etc.)
 */
function initDeptTabs() {
    const tabs = document.querySelectorAll('.dept-tab');
    const contents = document.querySelectorAll('.dept-tab-content');

    if (tabs.length === 0) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const target = this.dataset.tab;

            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            const targetContent = document.getElementById(target);
            if (targetContent) {
                targetContent.classList.add('active');
            }
        });
    });
}

/**
 * Gallery Lightbox
 */
function initGalleryLightbox() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const imgSrc = this.querySelector('img').src;
            openLightbox(imgSrc);
        });
    });
}

function openLightbox(src) {
    // Create lightbox elements
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-overlay"></div>
        <div class="lightbox-content">
            <button class="lightbox-close">&times;</button>
            <img src="${src}" alt="Gallery Image">
        </div>
    `;

    // Add styles
    const style = document.createElement('style');
    style.textContent = `
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .lightbox-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
        }
        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }
        .lightbox-content img {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
        }
        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            background: none;
            border: none;
            color: white;
            font-size: 2rem;
            cursor: pointer;
        }
    `;

    document.head.appendChild(style);
    document.body.appendChild(lightbox);

    // Close lightbox
    const closeBtn = lightbox.querySelector('.lightbox-close');
    const overlay = lightbox.querySelector('.lightbox-overlay');

    closeBtn.addEventListener('click', closeLightbox);
    overlay.addEventListener('click', closeLightbox);

    function closeLightbox() {
        lightbox.remove();
        style.remove();
    }

    // Close on escape key
    document.addEventListener('keydown', function escHandler(e) {
        if (e.key === 'Escape') {
            closeLightbox();
            document.removeEventListener('keydown', escHandler);
        }
    });
}

/**
 * Faculty Data Loader
 */
async function loadFacultyData(department) {
    try {
        const response = await fetch(`data/${department}-faculty.json`);
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error loading faculty data:', error);
        return [];
    }
}

/**
 * Render Faculty Cards
 */
function renderFacultyCards(container, facultyData) {
    // Determine base path based on current page depth
    const basePath = window.location.pathname.includes('/departments/') ? '../' : '';
    const defaultImage = basePath + 'assets/images/favicon.png';
    
    const html = facultyData.map(faculty => `
        <div class="card faculty-card">
            <img src="${faculty.image || defaultImage}" 
                 alt="${faculty.name}" 
                 class="faculty-image">
            <h5 class="faculty-name">${faculty.name}</h5>
            <p class="faculty-designation">${faculty.designation}</p>
            <p class="faculty-email">
                <a href="mailto:${faculty.email}">${faculty.email}</a>
            </p>
        </div>
    `).join('');

    container.innerHTML = html;
}

// Export functions
window.loadFacultyData = loadFacultyData;
window.renderFacultyCards = renderFacultyCards;
