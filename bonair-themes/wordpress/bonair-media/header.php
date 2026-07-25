<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="site-header__inner">
		<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="site-brand__mark">B</span>
			<span class="site-brand__name">BON AIR<small>MEDIA</small></span>
		</a>

		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'bonair-media' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => false,
					'depth'          => 1,
				)
			);
			?>
		</nav>

		<a class="btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get Started', 'bonair-media' ); ?></a>
	</div>
</header>
