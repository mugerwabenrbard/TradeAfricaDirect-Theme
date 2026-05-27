<?php
/**
 * Template Name: Market Insight — 2026 Harvest Calendar
 *
 * Lead magnet pillar page for Uganda agricultural harvest sourcing windows.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$quote_url     = home_url( '/request-a-quote/' );
$portfolio_url = home_url( '/export-portfolio/' );

$images = [
	'hero_main' => tad_get_theme_image( 'harvest_hero_main' ),
	'hero_top'  => tad_get_theme_image( 'harvest_hero_top' ),
	'hero_low'  => tad_get_theme_image( 'harvest_hero_low' ),
];

$summary_items = [
	[
		'title' => __( 'Dual-Harvest Cycle', 'trade-africa-direct' ),
		'body'  => __( 'Uganda benefits from two rainy seasons and unique sourcing windows.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Peak Volume Timing', 'trade-africa-direct' ),
		'body'  => __( 'Identify when sizing, quality, and FOB pricing are strongest.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Contract Deadlines', 'trade-africa-direct' ),
		'body'  => __( 'Plan 14, 45, or 60 days ahead depending on route and packaging.', 'trade-africa-direct' ),
	],
	[
		'title' => __( '2026 Data Report', 'trade-africa-direct' ),
		'body'  => __( 'Harvest timing, price trends, yields, moisture, and brix expectations.', 'trade-africa-direct' ),
	],
];

$months = [ 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC' ];

$calendar_rows = [
	[
		'product' => __( 'Hass Avocados', 'trade-africa-direct' ),
		'months'  => [ 'peak', 'lean', 'off', 'off', 'peak', 'peak', 'peak', 'lean', 'off', 'off', 'peak', 'peak' ],
	],
	[
		'product' => __( 'Dried Mango', 'trade-africa-direct' ),
		'months'  => [ 'peak', 'peak', 'lean', 'off', 'off', 'peak', 'peak', 'lean', 'off', 'off', 'lean', 'peak' ],
	],
	[
		'product' => __( 'Specialty Coffee', 'trade-africa-direct' ),
		'months'  => [ 'peak', 'peak', 'lean', 'off', 'off', 'lean', 'lean', 'off', 'off', 'peak', 'peak', 'peak' ],
	],
	[
		'product' => __( 'Cocoa Beans', 'trade-africa-direct' ),
		'months'  => [ 'lean', 'lean', 'off', 'off', 'off', 'peak', 'peak', 'peak', 'lean', 'off', 'peak', 'peak' ],
	],
	[
		'product' => __( 'Shea Butter', 'trade-africa-direct' ),
		'months'  => [ 'off', 'lean', 'peak', 'peak', 'peak', 'peak', 'lean', 'off', 'off', 'off', 'off', 'off' ],
	],
	[
		'product' => __( 'Macadamia', 'trade-africa-direct' ),
		'months'  => [ 'lean', 'peak', 'peak', 'peak', 'peak', 'peak', 'lean', 'off', 'off', 'off', 'lean', 'lean' ],
	],
];

$status_symbols = [
	'peak' => '●',
	'lean' => '○',
	'off'  => '-',
];

$regions = [
	[
		'title'     => __( 'The Central & Western "Fruit Loop" (Avocado, Mango, Pineapple)', 'trade-africa-direct' ),
		'body'      => __( 'The harvest in Nakaseke and Luwero is driven by the "Long Rains" (March–May) and "Short Rains" (September–November).', 'trade-africa-direct' ),
		'advantage' => __( 'Strategic Advantage: Our secondary avocado peak in November–January arrives exactly as the Peruvian and Mexican seasons wind down, offering a high-demand window for EU and Middle Eastern retailers.', 'trade-africa-direct' ),
	],
	[
		'title'     => __( 'The Northern Nilotica Belt (Shea Butter)', 'trade-africa-direct' ),
		'body'      => __( 'The Vitellaria nilotica trees flower between December and February.', 'trade-africa-direct' ),
		'advantage' => __( 'Strategic Advantage: The fresh nut collection begins in March. By sourcing in April and May, you secure the "First Press" oil, which has the lowest peroxide values and highest bioactive potency for cosmetic formulations.', 'trade-africa-direct' ),
	],
	[
		'title'     => __( 'The Highland Coffee Regions (Mt. Elgon & Rwenzori)', 'trade-africa-direct' ),
		'body'      => __( 'Coffee in Uganda follows a "Fly Crop" and "Main Crop" cycle.', 'trade-africa-direct' ),
		'advantage' => __( 'Strategic Advantage: Due to the different altitudes, Uganda can provide fresh-crop green coffee almost 10 months out of the year.', 'trade-africa-direct' ),
	],
];

$deadlines = [
	[
		'title' => __( 'For Sea Freight (Mombasa)', 'trade-africa-direct' ),
		'body'  => __( 'Finalize contracts 45 days before the Peak Season begins to allow for road transit and port clearance.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'For Air Freight (Entebbe)', 'trade-africa-direct' ),
		'body'  => __( 'Finalize volume requirements 14 days in advance to secure cold-room space and pallet positions on cargo flights.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'For Private Label / Custom Packaging', 'trade-africa-direct' ),
		'body'  => __( 'Contracts must be signed 60 days prior to harvest to allow for packaging material procurement and branding.', 'trade-africa-direct' ),
	],
];

get_header();
?>

<main id="content" class="tad-insight tad-harvest-calendar">
	<section class="tad-insight-hero">
		<div class="tad-insight-container tad-insight-hero__inner">
			<div class="tad-insight-hero__copy tad-reveal">
				<p class="tad-insight-eyebrow"><?php esc_html_e( 'Harvest Calendar', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( '2026 Uganda Agricultural Harvest Calendar:', 'trade-africa-direct' ); ?> <span><?php esc_html_e( 'Optimal Sourcing Windows', 'trade-africa-direct' ); ?></span></h1>
				<p><?php esc_html_e( 'For global procurement managers, timing is the difference between a high-margin season and a supply chain crisis. Because Uganda is situated on the Equator, it benefits from two distinct rainy seasons, allowing for a unique dual-harvest cycle that often fills the supply gaps left by other global origins.', 'trade-africa-direct' ); ?></p>
				<div class="tad-insight-hero__meta">
					<span class="tad-insight-pill"><?php esc_html_e( '2026 Sourcing Windows', 'trade-africa-direct' ); ?></span>
					<span class="tad-insight-pill"><?php esc_html_e( 'Peak / Lean / Off-Season', 'trade-africa-direct' ); ?></span>
					<span class="tad-insight-pill"><?php esc_html_e( 'Air & Sea Freight Deadlines', 'trade-africa-direct' ); ?></span>
				</div>
			</div>

			<div class="tad-insight-hero__visual tad-reveal tad-reveal--from-right">
				<figure>
					<img src="<?php echo esc_url( $images['hero_main'] ); ?>" alt="<?php echo esc_attr__( 'Ugandan agricultural fields representing 2026 harvest sourcing windows.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['hero_top'] ); ?>" alt="<?php echo esc_attr__( 'Hass avocados representing Uganda fresh produce harvest windows.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['hero_low'] ); ?>" alt="<?php echo esc_attr__( 'Specialty green coffee beans representing Uganda coffee harvest seasons.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<div class="tad-insight-hero__badge" aria-hidden="true">
					<strong><?php esc_html_e( '12', 'trade-africa-direct' ); ?></strong>
					<span><?php esc_html_e( 'Months of procurement planning across Uganda’s primary export commodities.', 'trade-africa-direct' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<section class="tad-insight-summary">
		<div class="tad-insight-container tad-insight-summary__grid">
			<?php foreach ( $summary_items as $index => $item ) : ?>
				<div class="tad-insight-summary__item tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index, 3 ) ); ?>">
					<strong><?php echo esc_html( $item['title'] ); ?></strong>
					<span><?php echo esc_html( $item['body'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="tad-insight-main">
		<div class="tad-insight-container tad-insight-layout">
			<article class="tad-insight-article tad-reveal">
				<p><?php esc_html_e( 'This calendar provides the definitive 2026 timeline for Uganda’s primary export commodities, helping you plan your contracts, logistics, and inventory arrivals with precision.', 'trade-africa-direct' ); ?></p>

				<section class="tad-insight-section">
					<h2><span>1</span><?php esc_html_e( 'The Master Sourcing Grid', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Use the table below to identify when our products reach peak volume and optimal export quality.', 'trade-africa-direct' ); ?></p>

					<div class="tad-calendar-grid-wrap">
						<table class="tad-calendar-grid">
							<thead>
								<tr>
									<th scope="col"><?php esc_html_e( 'Product', 'trade-africa-direct' ); ?></th>
									<?php foreach ( $months as $month ) : ?>
										<th scope="col"><?php echo esc_html( $month ); ?></th>
									<?php endforeach; ?>
								</tr>
							</thead>
							<tbody>
								<?php foreach ( $calendar_rows as $row ) : ?>
									<tr>
										<td><?php echo esc_html( $row['product'] ); ?></td>
										<?php foreach ( $row['months'] as $status ) : ?>
											<td>
												<span class="tad-calendar-status tad-calendar-status--<?php echo esc_attr( $status ); ?>">
													<?php echo esc_html( $status_symbols[ $status ] ); ?>
												</span>
											</td>
										<?php endforeach; ?>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>

					<ul class="tad-calendar-legend">
						<li><span class="tad-calendar-status tad-calendar-status--peak">●</span><span><strong><?php esc_html_e( 'Peak Season:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Highest volume, optimal sizing, best FOB pricing.', 'trade-africa-direct' ); ?></span></li>
						<li><span class="tad-calendar-status tad-calendar-status--lean">○</span><span><strong><?php esc_html_e( 'Lean Season:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Available volume but higher competition for stock.', 'trade-africa-direct' ); ?></span></li>
						<li><span class="tad-calendar-status tad-calendar-status--off">-</span><span><strong><?php esc_html_e( 'Off-Season:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Limited availability; pre-booked contracts only.', 'trade-africa-direct' ); ?></span></li>
					</ul>
				</section>

				<section class="tad-insight-section">
					<h2><span>2</span><?php esc_html_e( 'Regional Harvest Deep-Dive', 'trade-africa-direct' ); ?></h2>
					<div class="tad-calendar-deep-dive">
						<?php foreach ( $regions as $region ) : ?>
							<article class="tad-calendar-region">
								<h3><?php echo esc_html( $region['title'] ); ?></h3>
								<p><?php echo esc_html( $region['body'] ); ?></p>
								<div class="tad-calendar-region__advantage"><?php echo esc_html( $region['advantage'] ); ?></div>
							</article>
						<?php endforeach; ?>
					</div>
				</section>

				<section class="tad-insight-section">
					<h2><span>3</span><?php esc_html_e( 'Critical Sourcing Deadlines for 2026', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'To ensure guaranteed space and price stability, we recommend the following lead times:', 'trade-africa-direct' ); ?></p>
					<div class="tad-calendar-deadlines">
						<?php foreach ( $deadlines as $deadline ) : ?>
							<article class="tad-calendar-deadline">
								<h3><?php echo esc_html( $deadline['title'] ); ?></h3>
								<p><?php echo esc_html( $deadline['body'] ); ?></p>
							</article>
						<?php endforeach; ?>
					</div>
				</section>

				<section class="tad-insight-section">
					<h2><span>4</span><?php esc_html_e( 'Download the Full 2026 Data Report', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Our digital PDF guide includes more than just dates. It contains:', 'trade-africa-direct' ); ?></p>
					<div class="tad-calendar-report">
						<h3><?php esc_html_e( 'Inside the 2026 Harvest Calendar & Price Forecast', 'trade-africa-direct' ); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Historical price fluctuation charts (2023–2025).', 'trade-africa-direct' ); ?></li>
							<li><?php esc_html_e( 'Estimated yield forecasts for the 2026 season.', 'trade-africa-direct' ); ?></li>
							<li><?php esc_html_e( 'Detailed moisture and brix expectations per harvest month.', 'trade-africa-direct' ); ?></li>
						</ul>
						<a class="tad-insight-btn tad-insight-btn--accent" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Download the 2026 Harvest Calendar & Price Forecast (PDF)', 'trade-africa-direct' ); ?></a>
					</div>
				</section>
			</article>

			<aside class="tad-insight-sidebar tad-reveal tad-reveal--from-right" aria-label="<?php echo esc_attr__( 'Harvest calendar sidebar', 'trade-africa-direct' ); ?>">
				<section class="tad-insight-card tad-insight-card--dark">
					<p class="tad-insight-eyebrow tad-insight-eyebrow--dark"><?php esc_html_e( 'Lead Magnet', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Plan your 2026 procurement windows.', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Request the PDF report with sourcing windows, expected yields, FOB price trends, and product-specific quality expectations.', 'trade-africa-direct' ); ?></p>
					<a class="tad-insight-btn tad-insight-btn--accent" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request PDF Report', 'trade-africa-direct' ); ?></a>
				</section>

				<section class="tad-insight-card">
					<h3><?php esc_html_e( 'Calendar Legend', 'trade-africa-direct' ); ?></h3>
					<ul>
						<li><?php esc_html_e( '● Peak Season: Highest volume, optimal sizing, best FOB pricing.', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( '○ Lean Season: Available volume but higher competition for stock.', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( '- Off-Season: Limited availability; pre-booked contracts only.', 'trade-africa-direct' ); ?></li>
					</ul>
				</section>

				<section class="tad-insight-card">
					<h3><?php esc_html_e( 'SEO Keywords', 'trade-africa-direct' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Uganda harvest season 2026', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'agricultural calendar East Africa', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'coffee harvest months Uganda', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'avocado season Africa', 'trade-africa-direct' ); ?></li>
					</ul>
				</section>

				<section class="tad-insight-card">
					<h3><?php esc_html_e( 'Next Step', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'Review the products available during your target month, then request a formal quote with your volume and destination port.', 'trade-africa-direct' ); ?></p>
					<a class="tad-insight-btn tad-insight-btn--ghost" href="<?php echo esc_url( $portfolio_url ); ?>"><?php esc_html_e( 'View Export Portfolio', 'trade-africa-direct' ); ?></a>
				</section>
			</aside>
		</div>
	</section>
</main>

<?php
get_footer();
