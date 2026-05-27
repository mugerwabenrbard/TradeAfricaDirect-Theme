<?php
/**
 * Universal Trade Africa Direct footer.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$site_name       = get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : __( 'Trade Africa Direct', 'trade-africa-direct' );
$quote_url       = home_url( '/request-a-quote/' );
$sales_email     = tad_get_theme_setting( 'sales_email' );
$whatsapp_url    = tad_get_whatsapp_url();
$whatsapp_label  = tad_get_theme_setting( 'whatsapp_label' );
$logo_url        = tad_get_theme_logo_url();
$portfolio_links = [
	__( 'Bulk Dried Fruits', 'trade-africa-direct' )       => home_url( '/bulk-dried-fruits-uganda/' ),
	__( 'Macadamia Nuts', 'trade-africa-direct' )          => home_url( '/macadamia-nuts-uganda/' ),
	__( 'Fresh Hass Avocados', 'trade-africa-direct' )    => home_url( '/fresh-hass-avocados/' ),
	__( 'Nilotica Shea Butter', 'trade-africa-direct' )   => home_url( '/nilotica-shea-butter/' ),
	__( 'Specialty Green Coffee', 'trade-africa-direct' ) => home_url( '/specialty-green-coffee-beans/' ),
	__( 'Cocoa Beans', 'trade-africa-direct' )            => home_url( '/ugandan-cocoa-beans/' ),
	__( 'Nile Perch & Fish Maw', 'trade-africa-direct' )  => home_url( '/nile-perch-fish-maw/' ),
];
$resource_links  = [
	__( 'Request Sample', 'trade-africa-direct' )         => $quote_url,
	__( 'Harvest Calendar 2026', 'trade-africa-direct' ) => home_url( '/uganda-harvest-calendar-2026/' ),
	__( 'Incoterms Guide', 'trade-africa-direct' )       => home_url( '/market-insights/sourcing-agricultural-products-uganda/' ),
	__( 'Quality & Logistics', 'trade-africa-direct' )   => home_url( '/quality-certifications-logistics/' ),
	__( 'Payment Policies', 'trade-africa-direct' )      => home_url( '/payment-policies/' ),
	__( 'Privacy Policy', 'trade-africa-direct' )        => get_privacy_policy_url() ? get_privacy_policy_url() : home_url( '/privacy-policy/' ),
];
$footer_nav_menu = wp_nav_menu(
	[
		'theme_location' => 'menu-2',
		'fallback_cb'    => false,
		'container'      => false,
		'echo'           => false,
		'menu_class'     => 'tad-footer-menu',
		'depth'          => 1,
	]
);
?>

<footer id="site-footer" class="tad-site-footer">
	<section class="tad-footer-cta" aria-labelledby="tad-footer-cta-title">
		<div class="tad-footer-cta__content">
			<p class="tad-eyebrow"><?php esc_html_e( 'Procurement teams', 'trade-africa-direct' ); ?></p>
			<h2 id="tad-footer-cta-title"><?php esc_html_e( 'Secure a direct link to Ugandan export supply.', 'trade-africa-direct' ); ?></h2>
			<p><?php esc_html_e( 'Request current FOB/CIF pricing, technical data sheets, samples, and certification documents from our Kampala export team.', 'trade-africa-direct' ); ?></p>
		</div>
		<div class="tad-footer-cta__actions">
			<a class="tad-button tad-button--secondary" href="<?php echo esc_url( $quote_url ); ?>">
				<?php esc_html_e( 'Request 2026 Price List', 'trade-africa-direct' ); ?>
			</a>
			<a class="tad-button tad-button--ghost-light" href="<?php echo esc_url( 'mailto:' . $sales_email ); ?>">
				<?php esc_html_e( 'Email Sales', 'trade-africa-direct' ); ?>
			</a>
		</div>
	</section>

	<div class="tad-footer__inner">
		<div class="tad-footer__brand">
			<a class="tad-footer__logo tad-footer__logo--image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img
					class="tad-footer__logo-image"
					src="<?php echo esc_url( $logo_url ); ?>"
					alt="<?php echo esc_attr( $site_name ); ?>"
					width="300"
					height="86"
					loading="lazy"
					decoding="async"
				>
			</a>
			<p><?php esc_html_e( 'A Kampala-based B2B export partner connecting Ugandan farmers, certified processors, and global procurement managers.', 'trade-africa-direct' ); ?></p>
			<ul class="tad-footer__trust-list" aria-label="<?php echo esc_attr__( 'Export trust signals', 'trade-africa-direct' ); ?>">
				<li><?php esc_html_e( 'URSB registered Ugandan trading corporation', 'trade-africa-direct' ); ?></li>
				<li><?php esc_html_e( 'UNBS and MAAIF export documentation ready', 'trade-africa-direct' ); ?></li>
				<li><?php esc_html_e( 'Air via Entebbe and sea freight via Mombasa', 'trade-africa-direct' ); ?></li>
			</ul>
		</div>

		<nav class="tad-footer__nav" aria-label="<?php echo esc_attr__( 'Export portfolio', 'trade-africa-direct' ); ?>">
			<h2><?php esc_html_e( 'Export Portfolio', 'trade-africa-direct' ); ?></h2>
			<ul>
				<?php foreach ( $portfolio_links as $label => $url ) : ?>
					<li><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>

		<nav class="tad-footer__nav" aria-label="<?php echo esc_attr__( 'Resources', 'trade-africa-direct' ); ?>">
			<h2><?php esc_html_e( 'Resources', 'trade-africa-direct' ); ?></h2>
			<?php if ( $footer_nav_menu ) : ?>
				<?php echo $footer_nav_menu; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			<?php else : ?>
				<ul>
					<?php foreach ( $resource_links as $label => $url ) : ?>
						<li><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</nav>

		<div class="tad-footer__contact">
			<h2><?php esc_html_e( 'Kampala Export Desk', 'trade-africa-direct' ); ?></h2>
			<address>
				<span><?php esc_html_e( 'Kampala, Uganda', 'trade-africa-direct' ); ?></span>
				<a href="<?php echo esc_url( 'mailto:' . $sales_email ); ?>"><?php echo esc_html( $sales_email ); ?></a>
				<span><?php echo esc_html( sprintf( __( 'WhatsApp: %s', 'trade-africa-direct' ), $whatsapp_label ) ); ?></span>
			</address>
			<p class="tad-footer__note"><?php esc_html_e( 'Typical B2B response time: under 2 hours during EAT business hours.', 'trade-africa-direct' ); ?></p>
		</div>
	</div>

	<div class="tad-footer__bottom">
		<p>
			&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
			<?php echo esc_html( $site_name ); ?>.
			<?php esc_html_e( 'All rights reserved.', 'trade-africa-direct' ); ?>
		</p>
		<p><?php esc_html_e( 'Built for transparent farm-to-port export sourcing from Uganda.', 'trade-africa-direct' ); ?></p>
	</div>
</footer>

<div class="tad-floating-actions" aria-label="<?php echo esc_attr__( 'Quick actions', 'trade-africa-direct' ); ?>">
	<button type="button" class="tad-back-to-top" data-tad-back-to-top aria-label="<?php esc_attr_e( 'Back to top', 'trade-africa-direct' ); ?>">
		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
			<path d="M12 5l-7 7h4v7h6v-7h4l-7-7z" fill="currentColor"/>
		</svg>
	</button>
	<?php if ( $whatsapp_url ) : ?>
		<a
			class="tad-whatsapp-float"
			href="<?php echo esc_url( $whatsapp_url ); ?>"
			target="_blank"
			rel="noopener noreferrer"
			aria-label="<?php esc_attr_e( 'Chat on WhatsApp', 'trade-africa-direct' ); ?>"
		>
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false">
				<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" fill="currentColor"/>
				<path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.832-1.438A9.955 9.955 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18.182a8.18 8.18 0 01-4.166-1.14l-.298-.177-2.87.855.855-2.87-.177-.298A8.18 8.18 0 014.818 12c0-4.514 3.668-8.182 8.182-8.182S21.182 7.486 21.182 12 16.514 20.182 12 20.182z" fill="currentColor"/>
			</svg>
		</a>
	<?php endif; ?>
</div>
