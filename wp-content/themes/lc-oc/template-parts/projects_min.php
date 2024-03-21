<div id="projects_min_container">
    <h2>Mes Projets</h2>
    <?php 
            $args = array(
                'post_type' => 'projet',
                'posts_per_page' => -1,
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



