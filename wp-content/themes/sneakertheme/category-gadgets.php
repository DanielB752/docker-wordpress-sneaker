<?php get_header();?>

    <div class="home-infobox">
        <h1><?php the_archive_title(); ?></h1>
        <p><?php the_archive_description(); ?></p>
    </div>

    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'gadgets',
            'posts_per_page' => -1,
        );
        
        $post_counter = 1;

        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts())
        {
            ?>
                <div class="home-post-container">
                    <?php
                        while($arr_posts->have_posts())
                        {
                            $arr_posts->the_post();

                            if($post_counter === 1)
                            {
                                ?>
                                    <div class="home-top-post">
                                        <div class="home-top-post-thumbnail">
                                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
                                        </div>
                                        <div class="home-top-post-title">
                                            <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
                                        </div>
                                        <div class="home-top-post-content">                                        
                                            <div class="home-top-post-tags">
                                                <span class="home-top-post-tag"> <?php echo get_field('selbst_getestet'); ?> </span>
                                                <span class="home-top-post-tag"> <?php echo "Eindruck: " . implode(get_field('mein_eindruck')); ?> </span>
                                                <span class="home-top-post-tag"> <?php echo "€: " . implode(get_field('preis')); ?> </span>
                                            </div>
                                            <div class="home-top-post-excerpt">
                                                <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
                                            </div>
                                            <div class="home-post-buttons">
                                                <div class="home-post-button-article">
                                                    <a href="<?php echo the_permalink(); ?>" title="Weiterlesen"><button class="read-more-button">Weiterlesen</button></a>
                                                </div>
                                                <div class="home-post-button-shop">
                                                    <a href="<?php echo get_field('shoplink'); ?>" target="_blank" rel="nofollow" title="<?php echo get_field('shop_button_text'); ?>"><button class="shop-more-button"><?php echo get_field('shop_button_text'); ?></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                $post_counter ++;
                            }
                            else
                            {
                                ?>
                                    <div class="home-other-post-container">
                                        <div class="home-other-post-content">
                                            <div class="home-other-post-title">
                                                <a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3></a>
                                            </div>
                                            <div class="home-other-post-tags"> 
                                                <span class="home-other-post-tag"> <?php echo get_field('selbst_getestet'); ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Eindruck: " . implode(get_field('mein_eindruck')); ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "€: " . implode(get_field('preis')); ?> </span>
                                            </div>
                                            <div class="home-other-post-excerpt">
                                                <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                </div>
            <?php
        }
        $post_counter = 0;
        wp_reset_postdata();
    ?>

<?php get_footer(); ?>