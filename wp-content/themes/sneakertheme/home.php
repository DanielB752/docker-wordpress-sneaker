<?php ?>
    

    <!-- ### Anleitungen
    ## Zuletzt erschienen: Banner + Titel
    # Die letzten 5 Anleitungen als Liste
    # Link zur Kategorie -->

    <h2>Anleitungen ><h2>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'anleitungen',
            'posts_per_page' => 5,
        );
        
        $post_counter_anleitungen = 1;

        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts())
        {
            ?>
                <div class="home-articles-container">
                    <?php
                        while($arr_posts->have_posts())
                        {
                            $arr_posts->the_post();

                            if($post_counter_anleitungen === 1)
                            {
                                ?>
                                    <div class="home-articles-container-top-post-container" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                                        <div class="home-articles-container-top-post-container-title">
                                            <?php the_title(); ?>
                                        </div>
                                        <div class="home-articles-container-top-post-container-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                <?php
                                $post_counter_anleitungen ++;
                            }
                            else
                            {
                                ?>
                                    <div class="home-articles-container-other-posts-container">
                                        <div class="home-articles-container-other-posts-thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="home-articles-container-other-posts-content">
                                            <div class="home-articles-container-other-posts-container-title">
                                                <?php the_title(); ?>
                                            </div>
                                            <div class="home-articles-container-other-posts-container-excerpt">
                                                <?php the_excerpt(); ?>
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
        $post_counter_anleitungen = 0;
        wp_reset_postdata();
    ?>

<?php ?>