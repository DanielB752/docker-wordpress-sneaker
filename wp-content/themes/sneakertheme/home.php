<?php get_header(); ?>

    <!-- ### INFOBOX ### -->

    <div class="home-infobox">
        <h1>Sneaker Reinigen</h1>
        <p>Auf sneaker-reinigen.de stelle ich dir verschiedene Methoden vor, mit denen du deine Schuhe optimal pflegen kannst. Hier findest du einen Überblick über alte Hausmittel für die Schuhpflege, klassische Schuhbürsten, aktuelle Sneaker Cleaner und sonstige Gadgets, damit deine Sneaker möglichst lange weiß und sauber bleiben. Was davon funktioniert? Finden wir heraus!</p>
    </div>

    <!-- ### ANLEITUNGEN ### -->

    <div class="home-cat-heading-container">
        <h2>Aktuelle Anleitungen</h2>
    </div>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'anleitungen',
            'posts_per_page' => 5,
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
                                                <span class="home-top-post-tag"> <?php the_date(); ?> </span>
                                                <span class="home-top-post-tag"> <?php echo "Schwierigkeit: " . get_field('schwierigkeitsgrad'); ?> </span>
                                                <span class="home-top-post-tag"> <?php echo "Dauer: " . get_field('dauer') . " Min."; ?> </span>
                                                <span class="home-top-post-tag"> <?php echo "Equipment: " . implode(', ', get_field('benotigtes_equipment')); ?> </span>
                                            </div>
                                            <div class="home-top-post-excerpt">
                                                <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
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
                                                <span class="home-other-post-tag"> <?php the_date(); ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Schwierigkeit: " . get_field('schwierigkeitsgrad'); ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Dauer: " . get_field('dauer') . " Min."; ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Equipment: " . implode(', ', get_field('benotigtes_equipment')); ?> </span>
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

    <!-- ### GADGETS ### -->

    <div class="home-cat-heading-container">
        <h2>Die neuesten Gadgets</h2>
    </div>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'gadgets',
            'posts_per_page' => 5,
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
                                                <span class="home-top-post-tag"> <?php the_date(); ?> </span>
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
                                                <span class="home-other-post-tag"> <?php the_date();?> </span>
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

    <!-- ### Blog ### -->

    <div class="home-cat-heading-container">
        <h2>Blog</h2>
    </div>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'blog',
            'posts_per_page' => 5,
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
                                                <span class="home-top-post-tag"> <?php the_date(); ?></span>
                                            </div>                                        
                                            <div class="home-top-post-excerpt">
                                                <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
                                            </div>
                                            <div class="home-post-buttons">
                                                <div class="home-post-button-article">
                                                    <a href="<?php echo the_permalink(); ?>" title="Weiterlesen"><button class="read-more-button">Weiterlesen</button></a>
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
                                                <span class="home-other-post-tag"> <?php the_date();?> </span>
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

<?php get_footer();?>