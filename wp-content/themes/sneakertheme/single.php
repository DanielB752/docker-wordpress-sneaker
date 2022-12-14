<?php get_header(); ?>
    <!-- ### POST THUMBNAIL ### -->
    <div class="single-post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>

    <!-- ### POST CONTENT ### -->
    <div class="single-post-content">
        <p class="single-date"><?php the_date(); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

    <!-- ### RATING BOX ### -->
    <?php 
        if( has_term('gadgets', 'category') )
        {
            ?>
                <div class="single-post-rating-container">
                    <div class="single-post-rating-row-1">
                        <div class="rating-grade">
                            <h2>Fazit: <?php echo implode(get_field('mein_eindruck')); ?></h2>
                        </div>
                        <div class="rating-icon">
                            <?php
                                $input = implode(get_field('mein_eindruck'));
                                $switchClass = '';
                                switch ($input)
                                {
                                    case 'Ausgezeichnet':
                                        $switchClass = 'icon-class-1';
                                        break;
                                    case 'Gut':
                                        $switchClass = 'icon-class-2';
                                        break;
                                    case 'Ist einen Versuch wert':
                                        $switchClass = 'icon-class-3';
                                        break;
                                    case 'Nutzlos':
                                        $switchClass = 'icon-class-4';
                                        break;
                                }
                            ?>

                            <img class="<?php echo $switchClass; ?>" src="\wp-content\themes\sneakertheme\img\thumb.png">
                        </div>
                    </div>
                    <div class="single-post-rating-row-2">
                        <ul class="rating-pros">
                            <li>
                                <?php echo implode('</li><li>', get_field('pros')); ?>
                            </li>
                        </ul>
                        <ul class="rating-cons">
                            <li>
                                <?php echo implode('</li><li>', get_field('cons')); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post-rating-row-3">
                        <div class="rating-conlusion">
                            <?php echo get_field('fazit'); ?>
                        </div>
                    </div>
                    <div class="single-post-rating-row-4">
                        <div class="rating-shop-link">
                            <a href="<?php echo get_field('shoplink'); ?>" target="_blank" rel="nofollow" title="<?php echo get_field('shop_button_text'); ?>"><button class="review-button"><?php echo get_field('shop_button_text'); ?></button></a>
                        </div>
                    </div>    
                </div>
            <?php
        }
    ?>

    <!-- ### RELATED POSTS ###  -->
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


