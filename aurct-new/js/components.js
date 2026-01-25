/**
 * Header & Footer Component Loader
 * Anna University Regional Campus - Tirunelveli
 */

// Determine base path based on current page depth
function getBasePath() {
    // Check if basePath was already defined in the page
    if (typeof window.basePath !== 'undefined' && window.basePath !== '') {
        return window.basePath;
    }
    const path = window.location.pathname;
    if (path.includes('/departments/')) {
        return '../';
    }
    return '';
}

const basePath = getBasePath();

// Header HTML Template
function getHeaderHTML() {
    return `
<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <a href="mailto:helpdesk@auttvl.ac.in"><i class="fas fa-envelope"></i> helpdesk@auttvl.ac.in</a>
            <a href="tel:04622501969"><i class="fas fa-phone"></i> 0462-2501969</a>
        </div>
        <div class="top-bar-right">
            <div class="top-bar-links">
                <a href="${basePath}alumni.html">Alumni</a>
                <a href="${basePath}placements.html">Placements</a>
                <a href="${basePath}sports.html">Sports</a>
                <a href="${basePath}hostel.html">Hostel</a>
            </div>
            <div class="top-bar-social">
                <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.youtube.com/@annauniversityregionalcamp7405" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="main-header">
    <div class="container header-container">
        <div class="logo">
            <a href="${basePath}index.html">
                <img src="${basePath}assets/images/logo.svg" alt="Anna University Regional Campus - Tirunelveli">
            </a>
            <div class="logo-text">
                <h1 class="university-name">Anna University</h1>
                <p class="campus-name">Regional Campus - Tirunelveli</p>
            </div>
        </div>
        <button class="nav-toggle nav-toggle-header" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- Navigation -->
<div class="nav-wrapper">
    <div class="container nav-container">
        <button class="nav-toggle nav-toggle-nav" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="main-nav">
            <button class="nav-close" aria-label="Close navigation">
                <i class="fas fa-times"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="${basePath}index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Administration</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item has-dropdown">
                            <a href="#">University Administration</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="https://www.annauniv.edu/vcprofile.php" target="_blank">Vice Chancellor</a></li>
                                <li class="dropdown-item"><a href="${basePath}registrar.html">Registrar</a></li>
                                <li class="dropdown-item"><a href="${basePath}director-ccc.html">Director (CCC)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item has-dropdown">
                            <a href="#">Campus Administration</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="${basePath}deans-desk.html">Dean's Desk</a></li>
                                <li class="dropdown-item"><a href="${basePath}dean-office.html">Dean Office</a></li>
                                <li class="dropdown-item"><a href="${basePath}establishment.html">Establishment</a></li>
                                <li class="dropdown-item"><a href="${basePath}estate-office.html">Estate Office</a></li>
                                <li class="dropdown-item"><a href="${basePath}health-centre.html">Health Centre</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Academic</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="${basePath}courses-offered.html">Programmes</a></li>
                        <li class="dropdown-item"><a href="${basePath}academic-calendar.html">Academic Calendar</a></li>
                        <li class="dropdown-item"><a href="${basePath}library.html">Library</a></li>
                        <li class="dropdown-item"><a href="${basePath}research.html">PhD Research Guides</a></li>
                        <li class="dropdown-item"><a href="https://auttvl.irins.org/" target="_blank">Faculty Research (IRINS)</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Admission</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="${basePath}admission-procedure.html">Admission Procedure</a></li>
                        <li class="dropdown-item"><a href="${basePath}courses-offered.html">Courses Offered</a></li>
                        <li class="dropdown-item"><a href="${basePath}../uploads/documents/fees.pdf" target="_blank">Fee Structure - College</a></li>
                        <li class="dropdown-item"><a href="${basePath}../wp-content/uploads/2021/09/Hostel_Fee_Structure.pdf" target="_blank">Fee Structure - Hostel</a></li>
                        <li class="dropdown-item"><a href="${basePath}scholarship.html">Scholarship</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="${basePath}departments.html" class="nav-link">Departments</a>
                </li>
                <li class="nav-item">
                    <a href="${basePath}aicte.html" class="nav-link">AICTE</a>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Campus Life</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="${basePath}placements.html">Placements</a></li>
                        <li class="dropdown-item"><a href="${basePath}gallery.html">Gallery</a></li>
                        <li class="dropdown-item"><a href="${basePath}anti-ragging.html">Anti Ragging</a></li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link">Committees &amp; Cell</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="${basePath}women-empowerment-cell.html">Women Empowerment Cell</a></li>
                        <li class="dropdown-item"><a href="${basePath}grievance.html">Grievance Committee</a></li>
                        <li class="dropdown-item"><a href="${basePath}discipline-committee.html">Discipline Committee</a></li>
                        <li class="dropdown-item"><a href="${basePath}posh.html">Anti Sexual Harassment Committee</a></li>
                        <li class="dropdown-item"><a href="${basePath}sc-st-cell.html">SC/ST Cell</a></li>
                        <li class="dropdown-item"><a href="${basePath}internal-complaint.html">Internal Complaint Committee</a></li>
                        <li class="dropdown-item"><a href="${basePath}social-media-cell.html">Social Media Cell</a></li>
                        <li class="dropdown-item"><a href="${basePath}ipr-cell.html">Intellectual Property Right Cell</a></li>
                        <li class="dropdown-item"><a href="${basePath}innovation-cell.html">Innovation Cell</a></li>
                        <li class="dropdown-item"><a href="${basePath}iqac.html">Internal Quality Assurance Cell</a></li>
                        <li class="dropdown-item"><a href="${basePath}industry-cell.html">Institution Industry Cell</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="${basePath}contact.html" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="nav-overlay"></div>
`;
}

// Footer HTML Template
function getFooterHTML() {
    return `
<!-- Main Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Contact Info -->
            <div class="footer-col">
                <h5 class="footer-title">Contact Us</h5>
                <p class="footer-text">
                    Anna University Regional Campus - Tirunelveli<br>
                    Tirunelveli - 627007<br>
                    Tamil Nadu, India
                </p>
                <ul class="footer-contact">
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>0462-2551298</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>helpdesk@auttvl.ac.in</span>
                    </li>
                </ul>
                <div class="footer-social">
                    <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/@annauniversityregionalcamp7405" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="https://www.annauniv.edu/" target="_blank">Anna University Chennai</a></li>
                    <li><a href="${basePath}courses-offered.html">Courses Offered</a></li>
                    <li><a href="${basePath}courses-offered.html">Curriculum & Syllabus</a></li>
                    <li><a href="${basePath}../uploads/documents/fees.pdf" target="_blank">College Fee Structure</a></li>
                    <li><a href="${basePath}../wp-content/uploads/2021/09/Hostel_Fee_Structure.pdf" target="_blank">Hostel Fee Structure</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div class="footer-col">
                <h5 class="footer-title">Important Links</h5>
                <ul class="footer-links">
                    <li><a href="${basePath}anti-ragging.html">Anti Ragging Committee</a></li>
                    <li><a href="${basePath}posh.html">POSH Cell</a></li>
                    <li><a href="${basePath}grievance.html">Student Grievance</a></li>
                    <li><a href="${basePath}sc-st-cell.html">SC/ST Cell</a></li>
                    <li><a href="${basePath}iqac.html">IQAC</a></li>
                </ul>
            </div>

            <!-- Map -->
            <div class="footer-col">
                <h5 class="footer-title">Location</h5>
                <div class="footer-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.048476076911!2d77.72352431532853!3d8.68694029664295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04126b9cf8ff7d%3A0xe818c690ce42ee03!2sAnna+University+Regional+Campus!5e0!3m2!1sen!2sin!4v1555306115553!5m2!1sen!2sin"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Bottom -->
<div class="footer-bottom">
    <div class="container">
        <p class="copyright">© 2025 Anna University Regional Campus - Tirunelveli. All rights reserved.</p>
        <div class="footer-bottom-links">
            <a href="${basePath}privacy-policy.html">Privacy Policy</a>
            <a href="${basePath}terms.html">Terms & Conditions</a>
            <a href="${basePath}sitemap.html">Sitemap</a>
        </div>
    </div>
</div>

<!-- Scroll to Top Button -->
<button class="scroll-top" aria-label="Scroll to top">
    <i class="fas fa-arrow-up"></i>
</button>
`;
}

/**
 * Load Header Component
 */
function loadHeader() {
    const headerHTML = getHeaderHTML();
    const headerPlaceholder = document.getElementById('header-placeholder');
    if (headerPlaceholder) {
        headerPlaceholder.innerHTML = headerHTML;
    } else {
        // Insert at the beginning of body
        document.body.insertAdjacentHTML('afterbegin', headerHTML);
    }
}

/**
 * Set active navigation item based on current page
 */
function setActiveNavItem() {
    const currentPath = window.location.pathname;
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        if (!link) return;
        
        const href = link.getAttribute('href');
        if (!href || href === '#') return;
        
        // Get just the filename from the href
        const hrefFile = href.split('/').pop();
        const currentFile = currentPath.split('/').pop() || 'index.html';
        
        // Check for exact match or if it's a department page and we're on departments
        if (hrefFile === currentFile || 
            (hrefFile === 'departments.html' && currentPath.includes('/departments/')) ||
            (hrefFile === 'index.html' && (currentFile === '' || currentFile === 'index.html'))) {
            item.classList.add('active');
        }
    });
}

/**
 * Load Footer Component
 */
function loadFooter() {
    const footerHTML = getFooterHTML();
    const footerPlaceholder = document.getElementById('footer-placeholder');
    if (footerPlaceholder) {
        footerPlaceholder.innerHTML = footerHTML;
    } else {
        // Insert at the end of body
        document.body.insertAdjacentHTML('beforeend', footerHTML);
    }
}

/**
 * Initialize Components
 */
function initComponents() {
    loadHeader();
    loadFooter();
    setActiveNavItem();
}

// Auto-load components when DOM is ready
document.addEventListener('DOMContentLoaded', initComponents);

// Export functions for manual use
window.loadHeader = loadHeader;
window.loadFooter = loadFooter;
