<?php get_header(); ?>

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
                                            <div class="home-post-buttons">
                                                <div class="home-post-button-article-no-shop-link">
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
                                                <span class="home-other-post-tag"> <?php the_date(); ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Schwierigkeit: " . get_field('schwierigkeitsgrad'); ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Dauer: " . get_field('dauer') . " Min."; ?> </span>
                                                <span class="home-other-post-tag"> <?php echo "Equipment: " . implode(', ', get_field('benotigtes_equipment')); ?> </span>
                                            </div>
                                            <div class="home-other-post-excerpt">
                                                <a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
                                            </div>
                                            <div class="home-other-post-buttons">
                                                <div class="home-other-post-button-article">
                                                    <a href="<?php echo the_permalink(); ?>" title="Weiterlesen"><button class="read-more-button">Weiterlesen</button></a>
                                                </div>
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
                                            <div class="home-other-post-buttons">
                                                <div class="home-other-post-button-article">
                                                    <a href="<?php echo the_permalink(); ?>" title="Weiterlesen"><button class="read-more-button">Weiterlesen</button></a>
                                                </div>
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
                                                <div class="home-post-button-article-no-shop-link">
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
                                            <div class="home-other-post-buttons">
                                                <div class="home-other-post-button-article">
                                                    <a href="<?php echo the_permalink(); ?>" title="Weiterlesen"><button class="read-more-button">Weiterlesen</button></a>
                                                </div>
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

    <!-- ### INFOBOX ### -->

    <div class="home-infobox">
        <h1>Sneaker Reinigen</h1>
        <p>Hey du! Willkommen auf Sneaker-reinigen.de – der ultimativen Anlaufstelle, wenn es um die Pflege und Reinigung deiner heiß geliebten Sneaker geht! Hier findest du alles, was du wissen musst, um deine Schuhe wieder wie neu aussehen zu lassen. Egal, ob du ein erfahrener Sneakerhead bist oder gerade erst deine ersten Schuhe gekauft hast – hier findest du alle nützlichen Tipps und Tricks, um deine Sneaker in Topform zu halten.</p>
        <h2>Warum ist es wichtig, deine Sneaker zu reinigen?</h2>
        <p>Sneaker sind heutzutage mehr als nur Schuhe – sie sind eine Art Statement und ein wichtiger Teil unseres persönlichen Stils. Aber mit dem Tragen kommen Schmutz und Verschleiß. Ohne angemessene Pflege können deine Sneaker schnell abgenutzt aussehen und ihre ursprüngliche Schönheit verlieren. Eine regelmäßige Reinigung hält deine Schuhe nicht nur sauber, sondern verlängert auch ihre Lebensdauer.</p>
        <h2>Wie reinigt man seine Sneaker?</h2>
        <p>Das Reinigen deiner Sneaker kann auf den ersten Blick einschüchternd wirken, aber keine Sorge – es ist gar nicht so schwer, wie es aussieht! Zunächst solltest du herausfinden, aus welchem Material deine Schuhe bestehen, da dies bestimmt, welche Reinigungsmethode am besten geeignet ist. Ich habe detaillierte Anleitungen für jedes Material – von Leder über Mesh bis hin zu Wildleder – damit du sicher sein kannst, dass du deine Schuhe richtig behandelst.</p>
        <h2>Welche Produkte solltest du zum Reinigen deiner Sneaker verwenden?</h2>
        <p>Die Wahl der richtigen Reinigungsprodukte ist ebenfalls wichtig. Verwende niemals aggressive Chemikalien oder Reinigungsmittel, die deine Sneaker beschädigen könnten. Es gibt viele spezielle Sneaker-Reinigungsmittel auf dem Markt, die sanft sind und gleichzeitig effektiv Schmutz und Flecken entfernen. Ich habe einige meiner Lieblingsprodukte zusammengestellt, die du verwenden kannst, um deine Sneaker in Topform zu halten.</p>
        <h2>Wie vermeidet man Schmutz und Verschleiß?</h2>
        <p>Es ist einfacher, Schmutz und Verschleiß zu vermeiden, als ihn zu beseitigen. Es gibt viele Tipps und Tricks, die du anwenden kannst, um deine Sneaker vor Schmutz und Verschleiß zu schützen. Hier sind nur einige davon:</p>
        <ul>
            <li>Verwende Imprägnierspray, um deine Sneaker vor Wasser und Schmutz zu schützen</li>
            <li>Trage deine Sneaker nicht bei extremen Wetterbedingungen wie Regen oder Schnee</li>
            <li>Vermeide es, deine Schuhe auf unebenen oder steinigen Oberflächen zu tragen</li>
            <li>Wechsle deine Schuhe regelmäßig, um eine übermäßige Abnutzung zu vermeiden</li>
        </ul>
        <h2>Wie lagert man seine Sneaker?</h2>
        <p>Die richtige Lagerung deiner Sneaker ist ebenfalls wichtig, um ihre Lebensdauer zu verlängern. Hier sind einige Tipps, wie du deine Schuhe lagern solltest:</p>
        <ul>
            <li>Bewahre deine Sneaker an einem kühlen, trockenen Ort auf, um Schimmelbildung zu vermeiden</li>
            <li>Verwende Schuhspanner, um die Form deiner Schuhe zu erhalten</li>
            <li>Bewahre deine Sneaker niemals in Plastiktüten auf, da dies Schäden an den Materialien verursachen kann</li>
            <li>Wenn du deine Sneaker in Schuhkartons aufbewahrst, solltest du darauf achten, dass diese sauber und trocken sind, um Schimmelbildung zu vermeiden</li>
            <li>Wenn du deine Schuhe für längere Zeit lagern möchtest, solltest du sie vorher gründlich reinigen und danach mit Imprägnierspray behandeln, um sie vor Feuchtigkeit und Schmutz zu schützen</li>
        </ul>
        <p>Die richtige Pflege und Reinigung deiner Sneaker ist unerlässlich, um sie in Topform zu halten und ihre Lebensdauer zu verlängern. Auf Sneaker-reinigen.de findest du alle Tipps und Tricks, die du brauchst, um deine Sneaker sauber und schön zu halten. Egal, ob du deine Sneaker zum Laufen, beim Shoppen oder zum Ausgehen trägst – hier findest du alle nützlichen Informationen und Produkte, um deine Schuhe in Topform zu halten. Also, worauf wartest du noch? Los geht's mit der Reinigung deiner Sneaker!</p>
    </div>

<?php get_footer();?>