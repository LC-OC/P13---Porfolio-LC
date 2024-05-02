<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio LC</title>
    <?php wp_head(); ?>
</head>
<body> 
    <header>
        <div id="logo_site">
            <a href="http://localhost/portfolio-lc/">
                <span>LOGO</span>
            </a>
        </div>
        <nav>
            <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array('theme_location' => 'primary'));
                }
                get_template_part( './template-parts/sections-nav' );
                
            ?>
        </nav>
    </header>