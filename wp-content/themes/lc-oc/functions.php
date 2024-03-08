<?php 

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


   function portfolio_lc_style(){
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/sass/index.css' );
}
add_action('wp_enqueue_scripts','portfolio_lc_style');


// error - conflit plugin avec thème ?
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

?>