<?php
/**
 * Universal Trade Africa Direct header.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$site_name       = get_bloginfo( 'name' );
$tagline         = get_bloginfo( 'description', 'display' );
$logo_url        = tad_get_theme_logo_url();
$has_custom_logo = (bool) get_theme_mod( 'custom_logo' );
$quote_url       = home_url( '/request-a-quote/' );
$header_nav_menu = wp_nav_menu(
	[
		'theme_location' => 'menu-1',
		'fallback_cb'    => false,
		'container'      => false,
		'echo'           => false,
		'menu_id'        => 'tad-primary-menu',
		'menu_class'     => 'tad-primary-menu',
		'depth'          => 3,
	]
);
?>

<header id="site-header" class="tad-site-header">
	<div class="tad-header__inner">
		<a class="tad-brand tad-brand--logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php echo esc_attr__( 'Trade Africa Direct home', 'trade-africa-direct' ); ?>">
			<img
				class="tad-brand__logo"
				src="<?php echo esc_url( $logo_url ); ?>"
				alt="<?php echo esc_attr( $site_name ? $site_name : __( 'Trade Africa Direct', 'trade-africa-direct' ) ); ?>"
				width="340"
				height="96"
				decoding="async"
			>

			<?php if ( $has_custom_logo && $tagline ) : ?>
				<span class="tad-brand__copy">
					<span class="tad-brand__tagline"><?php echo esc_html( $tagline ); ?></span>
				</span>
			<?php endif; ?>
		</a>

		<div class="tad-header__nav-wrap" data-tad-primary-nav>
			<?php if ( $header_nav_menu ) : ?>
				<nav class="tad-primary-nav" aria-label="<?php echo esc_attr__( 'Main menu', 'trade-africa-direct' ); ?>">
					<?php echo $header_nav_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</nav>
			<?php endif; ?>

			<a class="tad-header__mobile-cta" href="<?php echo esc_url( $quote_url ); ?>">
				<?php esc_html_e( 'Request Export Quote', 'trade-africa-direct' ); ?>
			</a>
		</div>

		<div class="tad-header__actions">
			<a class="tad-header__cta" href="<?php echo esc_url( $quote_url ); ?>">
				<?php esc_html_e( 'Request Quote', 'trade-africa-direct' ); ?>
			</a>

			<button class="tad-menu-toggle" type="button" aria-controls="tad-primary-menu" aria-expanded="false" data-tad-menu-toggle>
				<span class="screen-reader-text"><?php esc_html_e( 'Toggle navigation', 'trade-africa-direct' ); ?></span>
				<span class="tad-menu-toggle__bar"></span>
				<span class="tad-menu-toggle__bar"></span>
				<span class="tad-menu-toggle__bar"></span>
			</button>
		</div>
	</div>
</header>
