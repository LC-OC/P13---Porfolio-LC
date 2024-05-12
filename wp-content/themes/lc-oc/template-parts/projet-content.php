<div class="project_page">
    <div class="infos_project">
        <h1><?php the_title() ?></h1>
        <p class="titre"><?php echo get_field('titre'); ?></p>
        <i class="fa-regular fa-moon"></i>
        <p class="description"><?php echo get_field('description'); ?></p>
        <i class="fa-regular fa-moon"></i>
        <ul class="list_technologies">
            <?php 
                $technologies = get_the_terms($post->ID, 'technologie');
                foreach($technologies as $technologie) : 
            ?>
            <li><?php echo $technologie -> name ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="<?php echo get_field('lien'); ?>" target="_blank">
            <button class="link_project">
                 Découvrir
            </button>
        </a>
    </div>
    <div class="image_project">
        <img src="<?php the_post_thumbnail_url() ?>"  alt="Photo <?php the_title() ?>">
    </div>

</div>