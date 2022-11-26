<?php
    if ( ! function_exists( 'myfirsttheme_setup' ) )
    {
        function myfirsttheme_setup()
        {   
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'custom-logo' );

            register_nav_menus( array(
                'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
                'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
            ) );
        }
    }
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );


    ### CUSTOM JS ###
    function add_custom_JS()
	{
		wp_register_script('custom_script', home_url() . '/wp-content/themes/sneakertheme/js/custom.js', array('jquery'), null, true);
		wp_enqueue_script('custom_script');
	}
	add_action( 'wp_enqueue_scripts', 'add_custom_JS' );

?>