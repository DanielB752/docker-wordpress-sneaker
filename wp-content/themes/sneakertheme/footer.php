        </div>
        <div class="disclaimer">
            <h4>Disclaimer</h4>
            <p>Hiermit möchte ich darauf hinweisen, dass das Befolgen von Anleitungen oder die Nutzung der hier vorgestellten Rezepte und Gadgets auf eigene Gefahr geschieht. Es kann nicht ausgeschlossen werden, dass es durch die Anwendung von (selbst hergestellten) Reinigungsmitteln, der unsachgemäßen Handhabung eines Reinigungsgeräts oder durch sonstige fehlerhafte Reinigung zu unerwünschten Schäden kommen kann. Sofern mir ein solcher Fall unterlaufen ist, habe ich dies im entsprechenden Artikel angemerkt.</p>
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