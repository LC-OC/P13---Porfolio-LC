<div class="project_page">
    <div class="infos_project">
        <h1><?php the_title() ?></h1>
        <p><?php echo get_field('description'); ?></p>
        
        <a href="<?php echo get_field('lien'); ?>">
            <button class="link_project">
                 Découvrir
            </button>
        </a>
    </div>
    <div class="image_project">
        <img src="<?php the_post_thumbnail_url() ?>" alt="Photo <?php the_title() ?>">
    </div>

</div>