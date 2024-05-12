<div class="project_min_content">
    <div class="img_project">
        <img src="<?php the_post_thumbnail_url() ?>" alt="Projects <?php the_title() ?> ">
    </div>      
    <a href="https://portfolio-lc.000webhostapp.com/projets/photographe-event/"></a>
    <a class="link_project" href="<?php echo get_permalink( $post->ID ); ?>">
        <h3><?php the_title() ?></h3>
    </a>      
</div>