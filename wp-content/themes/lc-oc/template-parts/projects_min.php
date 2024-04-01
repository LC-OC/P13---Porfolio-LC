<div id="projects_min_container">
    <h2>Mes Projets</h2>
    <div id="projects_min_list">
         <?php 
            $args = array(
                'post_type' => 'projets',
                'posts_per_page' => -1,
                'orderby' => 'none',
                'post_status' => 'publish',
            );
            $the_query = new WP_Query($args);
            if (have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>

            <?php  get_template_part( './template-parts/test' ); ?>
            <?php 
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
    </div>
   
</div>



