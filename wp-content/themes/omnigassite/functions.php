<?php 

if ( ! function_exists( 'omnigassite_setup' ) ) :
    function omnigassite_setup() {
        // Title tag
        add_theme_support( 'title-tag' );
        // Post thumbnails
        add_theme_support( 'post-thumbnails' );
        // HTML5 markup
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
        // Custom logo
        add_theme_support( 'custom-logo' );
        // Register menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'omnigassite' ),
        ) );
        // Load textdomain for translations
        load_theme_textdomain( 'omnigassite', get_template_directory() . '/languages' );
    }
endif;
add_action( 'after_setup_theme', 'omnigassite_setup' );

function omnigassite_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('omnigassite-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', [], null);
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', [], '6.4.0');
	wp_enqueue_style('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], '2.3.4');
	wp_enqueue_style('owl-theme-default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', [], '2.3.4');
	wp_enqueue_style('omnigassite-style', get_template_directory_uri() . '/assets/css/style.css', [], $version);
    wp_enqueue_style( 'omnigassite-style', get_stylesheet_uri(), array(), $version );

    // Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], '2.3.4', true);
	wp_enqueue_script('omnigassite-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], $version, true);
}
add_action( 'wp_enqueue_scripts', 'omnigassite_scripts' );

function omnigassite_enqueue_assets() {
	
}
add_action('wp_enqueue_scripts', 'omnigassite_enqueue_assets');
