# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a PHP-based CV generation system for creating professional resumes in multiple languages (French and English) with HTML/CSS styling optimized for PDF conversion. The project is designed to streamline CV editing and generation for different job targets (senior dev, lead, staff positions).

## Architecture

### File Structure
- `src/cv-en.php` - English version of the CV
- `src/cv-fr.php` - French version of the CV
- `assets/face.jpg` - Profile photo
- `pdf/` - Generated PDF outputs

### Code Organization
Each CV file (`cv-en.php`, `cv-fr.php`) contains:
- Complete HTML document with embedded CSS
- Responsive grid layout (sidebar + main content)
- Print-optimized styling with `@media print` rules
- Profile section with contact information
- Skills organized by categories (Backend, Frontend, Architecture, DevOps, etc.)
- Professional experience with structured job entries
- Technical stack tags for each position

### Styling Approach
- CSS Grid layout for responsive design
- Gradient backgrounds and modern styling for web view
- Comprehensive print styles for PDF generation
- Color-coded sections and tags
- Professional typography using system fonts

## Development Workflow

### Viewing CVs
- Open `src/cv-en.php` or `src/cv-fr.php` directly in a web browser
- The files are self-contained HTML documents with embedded styles

### PDF Generation
- Use browser's "Print to PDF" functionality
- Print styles are optimized for A4 format
- Colors and backgrounds are preserved with `color-adjust: exact`

### Content Updates
- Edit the PHP files directly for content changes
- **CRITICAL**: Maintain consistency between French and English versions - all changes must be applied to both `templates/cv-en.php` AND `templates/cv-fr.php`
- **Conciseness requirement**: Keep experience descriptions very concise to fit 2-page PDF format - prioritize impact over details
- Update technical skills, experience entries, and contact information as needed
- Preserve the existing CSS structure and classes when adding content

### Image Assets
- Profile photo should be placed in `assets/face.jpg`
- Image is referenced via relative URL `/assets/face.jpg` in the CSS

## Key Features

- **Multi-language support**: Separate files for French and English
- **Responsive design**: Works on mobile, desktop, and print
- **Modular content**: Skills categorized by technology areas
- **Professional styling**: Modern gradient design with print optimization
- **Easy PDF export**: Browser print functionality with optimized styles