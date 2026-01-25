# Anna University Regional Campus - Tirunelveli

A modern, responsive website for Anna University Regional Campus, Tirunelveli, built with HTML, CSS, and JavaScript.

## 🚀 Features

- **Modern Design**: Clean and professional UI with smooth animations
- **Fully Responsive**: Works on all devices (mobile, tablet, desktop)
- **Component-Based**: Reusable header/footer components
- **Department Pages**: Detailed department pages with tabbed navigation
- **Hero Slider**: Auto-playing image slider with navigation
- **Announcements**: Scrolling marquee and announcement cards
- **Contact Form**: Ready-to-use contact form
- **Gallery**: Image gallery with lightbox feature
- **SEO Optimized**: Proper meta tags and semantic HTML

## 📁 Project Structure

```
aurct-new/
├── index.html              # Homepage
├── about.html              # About page
├── contact.html            # Contact page
├── departments.html        # Departments listing
├── gallery.html            # Photo gallery
├── 404.html                # Error page
├── deans-desk.html         # Dean's desk
├── dean-office.html        # Dean's office
├── establishment.html      # Establishment section
├── estate-office.html      # Estate office
├── health-centre.html      # Health centre
├── admission-procedure.html # Admission details
├── courses-offered.html    # Courses offered
├── academic-calendar.html  # Academic calendar
├── fee-structure.html      # Fee structure
├── scholarship.html        # Scholarships
├── research.html           # Research activities
├── library.html            # Library page
├── hostel.html             # Hostel details
├── sports.html             # Sports facilities
├── placements.html         # Placements page
├── alumni.html             # Alumni page
├── anti-ragging.html       # Anti-ragging cell
├── posh.html               # POSH committee
├── sc-st-cell.html         # SC/ST cell
├── iqac.html               # IQAC page
├── grievance.html          # Grievance redressal
├── student-login.html      # Student login portal
├── staff-login.html        # Staff login portal
├── sitemap.html            # Sitemap
├── privacy-policy.html     # Privacy policy
├── terms.html              # Terms & conditions
├── css/
│   ├── style.css           # Main stylesheet (imports all)
│   ├── variables.css       # CSS Custom Properties
│   ├── base.css            # Base/reset styles
│   ├── components.css      # Reusable component styles
│   ├── header.css          # Header & navigation styles
│   ├── footer.css          # Footer styles
│   ├── hero.css            # Hero slider styles
│   ├── home.css            # Homepage specific styles
│   └── department.css      # Department page styles
├── js/
│   ├── main.js             # Main JavaScript file
│   ├── components.js       # Header/Footer components
│   └── department.js       # Department page functionality
├── departments/
│   ├── computer-science-engineering.html
│   ├── civil-engineering.html
│   ├── electronics-communication-engineering.html
│   ├── mechanical-engineering.html
│   ├── computer-applications.html
│   ├── management-studies.html
│   └── science-humanities.html
├── assets/
│   └── images/             # Image assets
└── README.md
```

## 🛠️ Getting Started

### Prerequisites

- A web browser (Chrome, Firefox, Safari, Edge)
- A local web server (optional, for development)

### Installation

1. Clone or download the project
2. Open `index.html` in your browser

### Development

For local development with live reload, you can use:

```bash
# Using Python
python -m http.server 8000

# Using Node.js (http-server)
npx http-server

# Using PHP
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

## 📝 Customization

### Colors

Edit the CSS variables in `css/variables.css`:

```css
:root {
    --primary-color: #1e3a8a;
    --secondary-color: #f97316;
    /* ... more variables */
}
```

### Header & Footer

Modify the header and footer in `js/components.js`. The components are injected dynamically.

### Adding New Pages

1. Copy an existing page as a template
2. Update the content
3. Add navigation links in `js/components.js`

### Adding Department Pages

1. Copy `departments/computer-science-engineering.html`
2. Update the content sections
3. Modify sidebar navigation as needed

## 🖼️ Required Assets

Add the following images to the `assets/images/` folder:

- `logo.png` - University logo (recommended: 200x70px)
- `favicon.png` - Favicon (32x32px)
- `slide-1.jpg`, `slide-2.jpg`, `slide-3.jpg` - Hero slider images (1920x1080px)
- `campus-main.jpg` - Main campus image
- `campus-banner.jpg` - Page header banner
- `dept-*.jpg` - Department thumbnail images (400x300px)
- `event-*.jpg` - Event images (400x300px)

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## 📱 Responsive Breakpoints

- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

## ✨ Features Overview

### Homepage
- Hero slider with auto-play
- Announcements section
- Latest news marquee
- About section
- Departments overview
- Statistics counter
- Events section

### Department Pages
- Tabbed content navigation
- Faculty profiles
- Course information
- Research areas
- Gallery with lightbox
- Achievements listing

### Other Pages
- About page with timeline
- Contact page with form and map
- Departments listing

## 📄 License

This project is for educational purposes for Anna University Regional Campus - Tirunelveli.

## 👥 Credits

Developed for Anna University Regional Campus - Tirunelveli

---

**TNEA Counselling Code: 4020**

Contact: helpdesk@auttvl.ac.in | 0462-2551298
