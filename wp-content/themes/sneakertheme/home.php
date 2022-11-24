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

        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts())
        {
            ?>
                <ul>
                    <?php
                        while($arr_posts->have_posts())
                        {
                            $arr_posts->the_post();

                            // if(has_post_thumbnail())
                            // {
                            //     the_post_thumbnail();
                            // }
                            ?><li><?php
                            the_title();
                            ?></li><?php
                            // the_excerpt();
                        }
                    ?>
                </ul>
            <?php
        }

        wp_reset_postdata();
    ?>


<h2>Gadgets ><h2>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'gadgets',
            'posts_per_page' => '5',
        );

        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts())
        {
            ?>
                <ul>
                    <?php
                        while($arr_posts->have_posts())
                        {
                            $arr_posts->the_post();

                            // if(has_post_thumbnail())
                            // {
                            //     the_post_thumbnail();
                            // }
                            ?><li><?php
                            the_title();
                            ?></li><?php
                            // the_excerpt();
                        }
                    ?>
                </ul>
            <?php
        }

        wp_reset_postdata();
    ?>

<h2>Artikel ><h2>
    <?php
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name' => 'artikel',
            'posts_per_page' => '5',
        );

        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts())
        {
            ?>
                <ul>
                    <?php
                        while($arr_posts->have_posts())
                        {
                            $arr_posts->the_post();

                            // if(has_post_thumbnail())
                            // {
                            //     the_post_thumbnail();
                            // }
                            ?><li><?php
                            the_title();
                            ?></li><?php
                            // the_excerpt();
                        }
                    ?>
                </ul>
            <?php
        }

        wp_reset_postdata();
    ?>


<?php ?>