<?php get_header(); ?>

    <!-- ### INFOBOX ### -->

    <div class="home-infobox">
        <h1>Sneaker Reinigen</h1>
        <p>Auf sneaker-reinigen.de stelle ich dir verschiedene Methoden vor, mit denen du deine Schuhe optimal pflegen kannst. Hier findest du einen Überblick über alte Hausmittel für die Schuhpflege, klassische Schuhbürsten, aktuelle Sneaker Cleaner und sonstige Gadgets, damit deine Sneaker möglichst lange weiß und sauber bleiben. Was davon funktioniert? Finden wir heraus!</p>
    </div>

    <!-- ### ANLEITUNGEN ### -->

    <div class="home-cat-heading-container">
        <h2>Anleitungen ></h2>
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
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="home-top-post-content">
                                            <div class="home-top-post-title">
                                                <h3><?php the_title(); ?></h3>
                                            </div>
                                            <div class="home-top-post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                $post_counter ++;
                            }
                            else
                            {
                                ?>
                                    <div class="home-other-post-content">
                                        <div class="home-other-post-title">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="home-other-post-excerpt">
                                            <?php the_excerpt(); ?>
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
        <h2>Gadgets ></h2>
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
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="home-top-post-content">
                                            <div class="home-top-post-title">
                                                <h3><?php the_title(); ?></h3>
                                            </div>
                                            <div class="home-top-post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                $post_counter ++;
                            }
                            else
                            {
                                ?>
                                    <div class="home-other-post-content">
                                        <div class="home-other-post-title">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="home-other-post-excerpt">
                                            <?php the_excerpt(); ?>
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

    <!-- ### ARTIKEL ### -->

    <div class="home-cat-heading-container">
        <h2>Artikel ></h2>
    </div>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'artikel',
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
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="home-top-post-content">
                                            <div class="home-top-post-title">
                                                <h3><?php the_title(); ?></h3>
                                            </div>
                                            <div class="home-top-post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                $post_counter ++;
                            }
                            else
                            {
                                ?>
                                    <div class="home-other-post-content">
                                        <div class="home-other-post-title">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="home-other-post-excerpt">
                                            <?php the_excerpt(); ?>
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