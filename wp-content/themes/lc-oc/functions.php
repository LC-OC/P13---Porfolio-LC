<?php 

function portfolio_lc_style(){
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/sass/index.css' );
}
add_action('wp_enqueue_scripts','portfolio_lc_style');

function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', '//fonts.googleapis.com/css2?family=Raleway&display=swap', array(), null );
}
    add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

// menu header
function register_menu_portfolio_lc() {
    register_nav_menu('primary', __('Main menu'));
   }
   add_action('after_setup_theme', 'register_menu_portfolio_lc');

   // menu footer
function register_menu_footer_portfolio_lc() {
    register_nav_menu('secondary', __('footer'));
   }
add_action('after_setup_theme', 'register_menu_footer_portfolio_lc');


function scripts() {
    wp_enqueue_script( 'script-carousel', get_stylesheet_directory_uri() . '/assets/js/carouselSkills.js', array( 'jquery' ),'',true );    
    wp_enqueue_script( 'script-modale', get_stylesheet_directory_uri() . '/assets/js/modale.js', array( 'jquery' ),'',true );    
    wp_enqueue_script( 'script-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ),'',true );    
    wp_enqueue_script( 'script-font-awesome', 'https://kit.fontawesome.com/019b68e105.js', array( 'jquery' ),'' );
}
add_action( 'wp_enqueue_scripts', 'scripts' );


// error - conflit plugin avec thème ?
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );




?>