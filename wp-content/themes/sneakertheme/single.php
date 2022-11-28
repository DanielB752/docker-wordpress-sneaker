<?php

    get_header();

    ?>
        <div class="single-post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="single-post-content">
            <?php
                the_title();
                the_content();
            ?>
        </div>
    <?php
    
    get_footer();
?>