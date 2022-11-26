<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
            <?php wp_title( '|', true, 'right' ); ?>
        </title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<header>
		<div class="header-container">
			<div class="logo">
				<h1>Testlogo</h1>
			</div>
			<div class="menu">
				<nav class="header-navigation">
					<ul class="header-navigation-wrapper">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'link_before'    => '<span>',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .footer-navigation-wrapper -->
				</nav><!-- .footer-navigation -->
			</div>
		</div>
	</header>
	<body>
		<div class="site-content">