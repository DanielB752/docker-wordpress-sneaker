<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
            <?php wp_title( '|', true, 'right' ); bloginfo('name'); ?>
        </title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<header>
		<div class="header-container">
			<div class="logo">
				<?php the_custom_logo() ?>
			</div>
			<div class="menu">
				<?php 
					if (wp_is_mobile())
					{
						?>
							<div class="mobile-menu">
								<div id="nav-icon" class="mobile-menu-container" onclick="swapMenuIcon(this)">
									<div class="bar1"></div>
									<div class="bar2"></div>
									<div class="bar3"></div>
								</div>	
							</div>
						<?php
					} 
					else
					{
						?>
							<nav>
								<ul class="desktop-navigation-wrapper">
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
								</ul>
							</nav>
						<?php	
					}
				?>
			</div>
		</div>
	</header>
		<?php 
			if (wp_is_mobile())
			{
				?>
					<nav>
						<div class="mobile-menu-dropout">
							<ul class="mobile-navigation-wrapper">
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
							</ul>
						</div>
					</nav>
				<?php
			}
		?>
	<body>
		<div class="site-content">