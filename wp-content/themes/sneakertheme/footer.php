        </div>
    </body>
    <footer>
        <nav>
            <ul class="footer-navigation-wrapper">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'secondary',
                            'items_wrap'     => '%3$s',
                            'container'      => false,
                            'depth'          => 1,
                            'link_before'    => '<span>',
                            'link_after'     => '</span>',
                            'fallback_cb'    => false,
                        )
                    );
                ?>
            </ul>
        </nav>
        <?php wp_footer(); ?>
    </footer>
</html>