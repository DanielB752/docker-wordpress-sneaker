<?php get_header(); ?>
    <div class="single-post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="single-post-content">
        <h1><?php the_title(); ?></h1>
        <?php
            the_content();
        ?>
    </div>
    <div class="single-post-related-items">
        <?php 
            $args = array(
                'category__in'   => wp_get_post_categories( $post->ID ),
                'posts_per_page' => 3,
                'post__not_in'   => array( $post->ID )
            );

            $related = new WP_Query($args);
            
            if( $related->have_posts() ) 
            { 
                ?>
                    <h2>Weitere <?php echo get_the_category()[0]->name; ?></h2>
                    <ul class="single-post-related-items-container">
                        <?php
                            while( $related->have_posts() ) 
                            { 
                                $related->the_post(); 
                                ?>                                    
                                    <li class="single-post-related-item">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                        <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a>
                                    </li>
                                <?php
                            }

                            wp_reset_postdata();
                        ?>
                    </ul>
                <?php
            }
        ?>
    </div>
<?php get_footer(); ?>


