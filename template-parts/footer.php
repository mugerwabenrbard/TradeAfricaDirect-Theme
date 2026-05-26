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
$sales_email     = 'sales@tradeafricadirect.com';
$whatsapp_label  = '+256 [add number]';
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
			<a class="tad-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<span class="tad-brand__mark" aria-hidden="true">TAD</span>
				<span><?php echo esc_html( $site_name ); ?></span>
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
