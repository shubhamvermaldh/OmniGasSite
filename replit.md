# OmniGas Technologies PLC Website

## Overview
Professional WordPress-style website for OmniGas Technologies PLC, a clean energy company specializing in LPG infrastructure and solutions in Ethiopia.

## Project Information
- **Company**: OmniGas Technologies PLC
- **Established**: 2025
- **Founders**: Mr Banjo Tamiru & Mr Pawlos Tegenye
- **Location**: Bole Dembel, Addis Ababa, Ethiopia
- **Industry**: LPG Plant Design, Installation, Autogas Systems, and Distribution

## Technology Stack
- **Backend**: PHP 8.2
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: PostgreSQL (available but not currently used)
- **Server**: PHP Built-in Development Server

## Project Structure
```
.
├── index.php               # Main entry point with routing logic
├── router.php              # URL router for PHP built-in server
├── includes/
│   ├── header.php          # Site header with navigation
│   └── footer.php          # Site footer with contact info
├── pages/
│   ├── home.php            # Homepage with company overview and services
│   ├── about.php           # About page with mission, vision, and services
│   └── contact.php         # Contact page with form and details
└── assets/
    ├── css/
    │   └── style.css       # Main stylesheet with responsive design
    └── js/
        └── script.js       # JavaScript for animations and interactions
```

## Website Pages

### 1. Homepage (index.php?page=home)
- Hero section with call-to-action buttons
- Company overview with vision and mission
- Energy shift information (Diesel → Petrol → LPG → EVs)
- LPG conversion model details
- 9 safety protections
- Economic and environmental benefits
- Partnership opportunities

### 2. About Page (index.php?page=about)
- Company introduction
- Mission and vision
- Complete services grid (9 services)
- Why choose OmniGas section

### 3. Contact Page (index.php?page=contact)
- Contact form with validation
- Company contact details
- Business hours
- Social media links
- Map placeholder

## Design Features
- **Color Scheme**: Blue primary (#1e40af), Orange secondary (#f59e0b), Green accent (#10b981)
- **Typography**: Inter font family for modern, professional look
- **Responsive Design**: Mobile-first approach with grid layouts
- **Animations**: Smooth scroll animations and hover effects
- **Icons**: Font Awesome for professional iconography

## Key Services Displayed
1. LPG Plant Design & Installation
2. Autogas Conversion Systems
3. Equipment Supply
4. LPG Distribution
5. Commissioning Services
6. Training & Consultation
7. Fill Station Development
8. Safety & Compliance
9. Environmental Solutions

## Running the Project
The website runs on PHP's built-in development server on port 5000:
```bash
php -S 0.0.0.0:5000 router.php
```

## Contact Information
- **Address**: Bole Dembel, behind Abbarus Complex BLD 1st Floor, Addis Ababa, Ethiopia
- **Email**: info@omnigas.com
- **Phone**: +44 7780378098

## Database Schema
The contact form submissions are stored in PostgreSQL database:
- Table: `contact_submissions`
- Fields: id, name, email, phone, subject, message, created_at
- All form submissions are validated and sanitized before storage

## Recent Changes
- October 16, 2025: Initial website creation with all pages
- All content sourced from company presentation (PPT)
- Professional design with energy/technology industry aesthetics
- Fully responsive layout for all devices
- Contact form now saves submissions to PostgreSQL database with proper validation
- Email validation and error handling implemented
- Database connection management with PDO
