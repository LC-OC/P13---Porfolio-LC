<div class="project_page">
    <div class="infos_project">
        <img src="http://localhost/portfolio-lc/wp-content/themes/lc-oc/assets/images/golden_separator_up.png" alt="" class="separator">
        <h1><?php the_title() ?></h1>
        <p><?php echo get_field('description'); ?></p>
        <a href="<?php echo get_field('lien'); ?>">Lien du projet</a>
        <img src="http://localhost/portfolio-lc/wp-content/themes/lc-oc/assets/images/golden_separator_down.png" alt="" class="separator">
    </div>
    <div class="image_project">
        <img src="<?php the_post_thumbnail_url() ?>" alt="Photo <?php the_title() ?>">
    </div>

</div>