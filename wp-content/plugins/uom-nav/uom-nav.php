<?php
/**
 * Plugin Name: UOM Navigation Improvements
 * Description: Improves the University of Malabe navigation header styling
 * Version: 1.0
 */

// Add enhanced nav styles to all pages
function uom_nav_styles() {
    echo '
<style>
/* ===========================
   UOM ENHANCED NAVIGATION
   =========================== */

/* Import fonts */
@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Lora:wght@400;500;600&display=swap");

/* Hide default WordPress page title "Home", "About" etc */
.entry-title,
.page-title {
    display: none !important;
}

/* Site header container */
.site-header,
#masthead {
    background: #ffffff !important;
    box-shadow: 0 2px 20px rgba(0,0,0,0.08) !important;
    position: sticky !important;
    top: 0 !important;
    z-index: 1000 !important;
    padding: 0 !important;
}

/* Site branding / logo area */
.site-branding,
.site-title {
    padding: 14px 0 !important;
}

.site-title a,
.site-title {
    font-family: "Playfair Display", Georgia, serif !important;
    font-size: 22px !important;
    font-weight: 800 !important;
    color: #1a6b3a !important;
    text-decoration: none !important;
    letter-spacing: 0.5px !important;
}

.site-title a:hover {
    color: #0f4526 !important;
}

.site-description {
    font-family: "Lora", Georgia, serif !important;
    font-size: 12px !important;
    color: #888 !important;
    letter-spacing: 1px !important;
    text-transform: uppercase !important;
}

/* ===========================
   MAIN NAVIGATION MENU
   =========================== */
.main-navigation,
#site-navigation,
nav.navigation {
    background: transparent !important;
}

/* Top-level nav links */
.main-navigation ul li a,
#site-navigation ul li a {
    font-family: "Lora", Georgia, serif !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    color: #333 !important;
    text-decoration: none !important;
    padding: 20px 16px !important;
    display: block !important;
    letter-spacing: 0.3px !important;
    transition: color 0.25s !important;
    position: relative !important;
}

/* Active / hover underline effect */
.main-navigation ul li a::after,
#site-navigation ul li a::after {
    content: "" !important;
    position: absolute !important;
    bottom: 12px !important;
    left: 16px !important;
    right: 16px !important;
    height: 2px !important;
    background: #1a6b3a !important;
    transform: scaleX(0) !important;
    transition: transform 0.25s ease !important;
    border-radius: 2px !important;
}

.main-navigation ul li a:hover::after,
.main-navigation ul li.current-menu-item a::after,
#site-navigation ul li a:hover::after,
#site-navigation ul li.current-menu-item a::after {
    transform: scaleX(1) !important;
}

.main-navigation ul li a:hover,
.main-navigation ul li.current-menu-item a,
#site-navigation ul li a:hover,
#site-navigation ul li.current-menu-item a {
    color: #1a6b3a !important;
}

/* Dropdown menus */
.main-navigation ul ul,
#site-navigation ul ul {
    background: #fff !important;
    border: none !important;
    box-shadow: 0 8px 30px rgba(0,0,0,0.12) !important;
    border-radius: 12px !important;
    padding: 8px 0 !important;
    min-width: 200px !important;
    border-top: 3px solid #1a6b3a !important;
}

.main-navigation ul ul li a,
#site-navigation ul ul li a {
    font-size: 13px !important;
    padding: 10px 20px !important;
    color: #444 !important;
}

.main-navigation ul ul li a::after,
#site-navigation ul ul li a::after {
    display: none !important;
}

.main-navigation ul ul li a:hover,
#site-navigation ul ul li a:hover {
    background: #f0f7f2 !important;
    color: #1a6b3a !important;
    padding-left: 26px !important;
}

/* Mobile menu toggle button */
.menu-toggle,
button.menu-toggle {
    background: #1a6b3a !important;
    color: #fff !important;
    border: none !important;
    border-radius: 8px !important;
    padding: 10px 16px !important;
    font-family: "Lora", serif !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    cursor: pointer !important;
    transition: background 0.2s !important;
}

.menu-toggle:hover,
button.menu-toggle:hover {
    background: #0f4526 !important;
}

/* ===========================
   PAGE CONTENT AREA
   =========================== */

/* Remove extra padding/margin WordPress adds */
.site-content,
#content,
.content-area {
    padding-top: 0 !important;
}

.entry-content,
.page-content {
    padding: 0 !important;
    margin: 0 !important;
    max-width: 100% !important;
}

/* Remove Twenty-Twenty-One / common theme white space above content */
.wp-block-group,
.wp-block-cover,
.alignfull {
    margin-top: 0 !important;
}

/* ===========================
   FOOTER
   =========================== */
.site-footer,
#colophon {
    background: linear-gradient(135deg, #0f4526, #1a6b3a) !important;
    color: rgba(255,255,255,0.8) !important;
    padding: 40px !important;
    text-align: center !important;
    font-family: "Lora", serif !important;
}

.site-footer a,
#colophon a {
    color: #c8a84b !important;
    text-decoration: none !important;
}

.site-footer a:hover,
#colophon a:hover {
    color: #fff !important;
}

/* ===========================
   ADMIN BAR OFFSET FIX
   =========================== */
.admin-bar .site-header,
.admin-bar #masthead {
    top: 32px !important;
}

@media (max-width: 782px) {
    .admin-bar .site-header,
    .admin-bar #masthead {
        top: 46px !important;
    }
}
</style>';
}
add_action('wp_head', 'uom_nav_styles');
?>