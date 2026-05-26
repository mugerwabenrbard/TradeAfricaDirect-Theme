<?php
/**
 * Template Name: Portfolio — Export Catalogue
 *
 * Dedicated portfolio page showcasing all seven export commodities.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$quote_url    = home_url( '/request-a-quote/' );
$calendar_url = home_url( '/uganda-harvest-calendar-2026/' );
$about_url    = home_url( '/about/' );

$imgs = [
	'avocados'     => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=1400&h=900&fit=crop&q=80',
	'coffee'       => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1400&h=900&fit=crop&q=80',
	'shea'         => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=1400&h=900&fit=crop&q=80',
	'dried_fruits' => 'https://images.unsplash.com/photo-1490474418585-ba9bad8fd0ea?w=1000&h=640&fit=crop&q=80',
	'macadamia'    => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=1000&h=640&fit=crop&q=80',
	'cocoa'        => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=1000&h=640&fit=crop&q=80',
	'fish'         => 'https://images.unsplash.com/photo-1534482421-64566f976cfa?w=1000&h=640&fit=crop&q=80',
	'farm'         => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=900&h=640&fit=crop&q=80',
	'warehouse'    => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=900&h=640&fit=crop&q=80',
	'packing'      => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=900&h=640&fit=crop&q=80',
];

/* ── Featured products (alternating full-bleed sections) ─────────────────── */
$featured = [
	[
		'tag'      => __( 'Fresh Export · Grade A', 'trade-africa-direct' ),
		'eyebrow'  => __( 'Fresh Produce', 'trade-africa-direct' ),
		'title'    => __( 'Wholesale Ugandan Hass Avocados: Premium Export Grade', 'trade-africa-direct' ),
		'body'     => __( 'High-oil content, superior dry matter, and guaranteed cold-chain integrity. Sourced from the volcanic soils of Central and Western Uganda for year-round quality. Uganda\'s two distinct rainy seasons fill the supply gaps left by Peruvian and Mexican origins.', 'trade-africa-direct' ),
		'specs'    => [
			__( 'Dry Matter: 22%–25% (optimal ripening threshold)', 'trade-africa-direct' ),
			__( 'Grading: Export Grade A — zero mechanical damage', 'trade-africa-direct' ),
			__( 'Logistics: Pre-cooled air freight (EBB) or CA sea containers via Mombasa', 'trade-africa-direct' ),
			__( 'Sizing: Counts 12 / 14 / 16 / 18 / 20 / 22 / 24 per 4KG or 10KG box', 'trade-africa-direct' ),
		],
		'data_val' => __( '22%+', 'trade-africa-direct' ),
		'data_lbl' => __( 'Minimum Dry Matter', 'trade-africa-direct' ),
		'data_sub' => __( 'Lab-verified per batch', 'trade-africa-direct' ),
		'image'    => $imgs['avocados'],
		'img_alt'  => __( 'Export-grade Hass avocados nested in branded open-top cartons, showing deep green skin and uniform sizing.', 'trade-africa-direct' ),
		'url'      => home_url( '/fresh-hass-avocados/' ),
		'reverse'  => false,
		'bg'       => 'tad-pf-feature--bg-dim',
	],
	[
		'tag'      => __( 'Single Origin · SCAA 80+', 'trade-africa-direct' ),
		'eyebrow'  => __( 'Specialty Coffee', 'trade-africa-direct' ),
		'title'    => __( 'Wholesale Ugandan Green Coffee: Specialty Arabica & Fine Robusta', 'trade-africa-direct' ),
		'body'     => __( 'From the high altitudes of Mt. Elgon to the birthplace of Robusta. Uganda is uniquely positioned as the only country in the world producing high-altitude Specialty Arabica and world-class Fine Robusta in commercial volumes — a dual-origin powerhouse for discerning roasters and industrial importers.', 'trade-africa-direct' ),
		'specs'    => [
			__( 'Arabica altitude: 1,600m–2,200m ASL (Mt. Elgon & Rwenzori)', 'trade-africa-direct' ),
			__( 'Robusta: Screen 18 Fine grade, clean cup, chocolatey finish', 'trade-africa-direct' ),
			__( 'Processing: Fully Washed, Natural, and Honey Processed', 'trade-africa-direct' ),
			__( 'Sea freight via Mombasa in GrainPro® hermetic-lined 60KG jute bags', 'trade-africa-direct' ),
		],
		'data_val' => __( '82–86+', 'trade-africa-direct' ),
		'data_lbl' => __( 'SCAA Cupping Score', 'trade-africa-direct' ),
		'data_sub' => __( 'Arabica — Mt. Elgon origin', 'trade-africa-direct' ),
		'image'    => $imgs['coffee'],
		'img_alt'  => __( 'Green coffee beans being graded on a black tray beside a moisture meter and cupping score sheet.', 'trade-africa-direct' ),
		'url'      => home_url( '/specialty-green-coffee-beans/' ),
		'reverse'  => true,
		'bg'       => 'tad-pf-feature--bg-white',
	],
	[
		'tag'      => __( 'Grade A Cosmetic · Hexane-Free', 'trade-africa-direct' ),
		'eyebrow'  => __( 'Nilotica Shea Butter', 'trade-africa-direct' ),
		'title'    => __( '100% Unrefined Nilotica Shea Butter: The Gold Standard of Shea', 'trade-africa-direct' ),
		'body'     => __( 'Cold-pressed from wild-harvested Nilotica nuts in Northern Uganda. Unlike West African varieties, Nilotica Shea contains a significantly higher concentration of liquid oleic acid (52%–60%), giving it a naturally soft texture with a 28–32°C melting point — it absorbs instantly into the skin without the waxy residue common in other grades.', 'trade-africa-direct' ),
		'specs'    => [
			__( 'Species: Vitellaria Nilotica (East African — rare, premium variety)', 'trade-africa-direct' ),
			__( 'Extraction: Cold-pressing only — zero hexane or chemical solvents', 'trade-africa-direct' ),
			__( 'FFA: < 1.0% | Peroxide Value: < 2.0 mEq/kg (high stability)', 'trade-africa-direct' ),
			__( 'Sourced from women\'s cooperatives in Northern Uganda', 'trade-africa-direct' ),
		],
		'data_val' => __( '52–60%', 'trade-africa-direct' ),
		'data_lbl' => __( 'Oleic Acid Content', 'trade-africa-direct' ),
		'data_sub' => __( 'Superior absorption for cosmetics', 'trade-africa-direct' ),
		'image'    => $imgs['shea'],
		'img_alt'  => __( 'Creamy Nilotica shea butter being scooped to reveal its frosting-like consistency and light ivory colour.', 'trade-africa-direct' ),
		'url'      => home_url( '/nilotica-shea-butter/' ),
		'reverse'  => false,
		'bg'       => 'tad-pf-feature--bg-dim',
	],
];

/* ── Mosaic grid items (all 7 products) ──────────────────────────────────── */
$mosaic = [
	[
		'title'  => __( 'Fresh Hass Avocados', 'trade-africa-direct' ),
		'spec'   => __( 'Grade A — Dry Matter 22%+', 'trade-africa-direct' ),
		'image'  => $imgs['avocados'],
		'alt'    => __( 'Hass avocados in export cartons', 'trade-africa-direct' ),
		'url'    => home_url( '/fresh-hass-avocados/' ),
	],
	[
		'title'  => __( 'Specialty Green Coffee', 'trade-africa-direct' ),
		'spec'   => __( 'SCAA 82–86+ · Mt. Elgon Arabica', 'trade-africa-direct' ),
		'image'  => $imgs['coffee'],
		'alt'    => __( 'Green coffee beans on grading tray', 'trade-africa-direct' ),
		'url'    => home_url( '/specialty-green-coffee-beans/' ),
	],
	[
		'title'  => __( 'Nilotica Shea Butter', 'trade-africa-direct' ),
		'spec'   => __( 'Grade A Cosmetic · Hexane-Free', 'trade-africa-direct' ),
		'image'  => $imgs['shea'],
		'alt'    => __( 'Unrefined Nilotica shea butter', 'trade-africa-direct' ),
		'url'    => home_url( '/nilotica-shea-butter/' ),
	],
	[
		'title'  => __( 'Bulk Dried Fruits', 'trade-africa-direct' ),
		'spec'   => __( 'Solar-dried · 0% Sugar · <15% Moisture', 'trade-africa-direct' ),
		'image'  => $imgs['dried_fruits'],
		'alt'    => __( 'Solar-dried mango, pineapple and jackfruit', 'trade-africa-direct' ),
		'url'    => home_url( '/bulk-dried-fruits-uganda/' ),
	],
	[
		'title'  => __( 'Premium Macadamia Nuts', 'trade-africa-direct' ),
		'spec'   => __( 'Style 0–4 · Oil Content 72–76%', 'trade-africa-direct' ),
		'image'  => $imgs['macadamia'],
		'alt'    => __( 'Raw macadamia kernels in vacuum-sealed bags', 'trade-africa-direct' ),
		'url'    => home_url( '/macadamia-nuts-uganda/' ),
	],
	[
		'title'  => __( 'Ugandan Cocoa Beans', 'trade-africa-direct' ),
		'spec'   => __( 'Bundibugyo Origin · 80% Fermented', 'trade-africa-direct' ),
		'image'  => $imgs['cocoa'],
		'alt'    => __( 'Cocoa cut test showing deep brown well-fermented beans', 'trade-africa-direct' ),
		'url'    => home_url( '/ugandan-cocoa-beans/' ),
	],
	[
		'title'  => __( 'Nile Perch & Fish Maw', 'trade-africa-direct' ),
		'spec'   => __( 'Lake Victoria · HACCP · EU Certified', 'trade-africa-direct' ),
		'image'  => $imgs['fish'],
		'alt'    => __( 'Vacuum-sealed Nile Perch fillet being weighed', 'trade-africa-direct' ),
		'url'    => home_url( '/nile-perch-fish-maw/' ),
	],
];

/* ── Catalogue cards (all 7) ─────────────────────────────────────────────── */
$cards = [
	[
		'tag'   => __( 'Solar Dried', 'trade-africa-direct' ),
		'title' => __( 'Bulk Dried Fruits (Uganda)', 'trade-africa-direct' ),
		'spec'  => __( 'Mango, Pineapple & Jackfruit. Moisture <15%, 0% added sugar, sulphur-free. 15 MT monthly capacity.', 'trade-africa-direct' ),
		'image' => $imgs['dried_fruits'],
		'alt'   => __( 'High-volume export-ready solar-dried mango, pineapple, and jackfruit.', 'trade-africa-direct' ),
		'url'   => home_url( '/bulk-dried-fruits-uganda/' ),
	],
	[
		'tag'   => __( 'Fresh Export', 'trade-africa-direct' ),
		'title' => __( 'Premium Hass Avocados', 'trade-africa-direct' ),
		'spec'  => __( 'Grade A. Dry Matter 22%–25%. Counts 12–24. Cold-chain air freight via EBB or CA sea freight via Mombasa.', 'trade-africa-direct' ),
		'image' => $imgs['avocados'],
		'alt'   => __( 'Export Grade A Hass avocados in open-top branded cartons.', 'trade-africa-direct' ),
		'url'   => home_url( '/fresh-hass-avocados/' ),
	],
	[
		'tag'   => __( 'Premium Kernels', 'trade-africa-direct' ),
		'title' => __( 'Raw Macadamia Nuts (Uganda)', 'trade-africa-direct' ),
		'spec'  => __( 'Style 0–4. Oil content 72%–76%. Nitrogen-flushed vacuum packaging. Shelf life: 18 months.', 'trade-africa-direct' ),
		'image' => $imgs['macadamia'],
		'alt'   => __( 'Creamy white raw macadamia kernels flowing from a stainless steel sorting machine.', 'trade-africa-direct' ),
		'url'   => home_url( '/macadamia-nuts-uganda/' ),
	],
	[
		'tag'   => __( 'Grade A Cosmetic', 'trade-africa-direct' ),
		'title' => __( 'Nilotica Shea Butter (Unrefined)', 'trade-africa-direct' ),
		'spec'  => __( 'Cold-pressed. FFA < 1.0%. Oleic Acid 52%–60%. Melt point 28–32°C. Available in 10KG pails to 200KG drums.', 'trade-africa-direct' ),
		'image' => $imgs['shea'],
		'alt'   => __( 'Unrefined Nilotica shea butter scooped to show its soft Grade A cosmetic texture.', 'trade-africa-direct' ),
		'url'   => home_url( '/nilotica-shea-butter/' ),
	],
	[
		'tag'   => __( 'Single Origin', 'trade-africa-direct' ),
		'title' => __( 'Specialty Green Coffee Beans', 'trade-africa-direct' ),
		'spec'  => __( 'Mt. Elgon Arabica (SCAA 82–86+). Screen 18 Fine Robusta. Fully Washed / Natural / Honey Processed.', 'trade-africa-direct' ),
		'image' => $imgs['coffee'],
		'alt'   => __( 'Specialty Ugandan green coffee beans on grading tray beside cupping scores.', 'trade-africa-direct' ),
		'url'   => home_url( '/specialty-green-coffee-beans/' ),
	],
	[
		'tag'   => __( 'Bundibugyo Origin', 'trade-africa-direct' ),
		'title' => __( 'Premium Ugandan Cocoa Beans', 'trade-africa-direct' ),
		'spec'  => __( 'Fermented 6–7 days. Fat content 52%–56%. Cut test >80% well-fermented. FFA < 1.75%.', 'trade-africa-direct' ),
		'image' => $imgs['cocoa'],
		'alt'   => __( 'Bundibugyo cocoa cut test showing deep brown well-fermented bean interiors.', 'trade-africa-direct' ),
		'url'   => home_url( '/ugandan-cocoa-beans/' ),
	],
	[
		'tag'   => __( 'HACCP Certified', 'trade-africa-direct' ),
		'title' => __( 'Nile Perch Fillets & Fish Maw', 'trade-africa-direct' ),
		'spec'  => __( 'Wild-caught, Lake Victoria. EU Health Certificate. Chilled or frozen fillets. Grade A/AAA dried Fish Maw.', 'trade-africa-direct' ),
		'image' => $imgs['fish'],
		'alt'   => __( 'Vacuum-sealed white Nile Perch fillet being weighed for export quality control.', 'trade-africa-direct' ),
		'url'   => home_url( '/nile-perch-fish-maw/' ),
	],
];

/* ── Guarantees ──────────────────────────────────────────────────────────── */
$guarantees = [
	[
		'title' => __( '100% Farm-Level Traceability', 'trade-africa-direct' ),
		'body'  => __( 'We are not briefcase brokers. We work directly with smallholder farmer groups across Nakaseke, Mt. Elgon, and Bundibugyo — ensuring every batch is ethically sourced and traceable to its exact origin.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Compliance-First Documentation', 'trade-africa-direct' ),
		'body'  => __( 'Every commercial shipment is accompanied by the Holy Trinity of export paperwork: Phytosanitary Certificate, EUR.1 for duty-free EU entry, and Certificate of Origin for AGOA / EBA preferential access.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Equatorial Cold-Chain Mastery', 'trade-africa-direct' ),
		'body'  => __( 'Daily air freight via Entebbe International Airport (EBB) for perishables. Secure road-to-sea routing via Mombasa Port (MBA) for bulk volume — 25–35 day transit to Rotterdam and Hamburg.', 'trade-africa-direct' ),
	],
];

get_header();
?>

<main id="content" class="tad-portfolio">

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 1: PAGE HERO
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-pf-hero">
		<div class="tad-pf-container tad-pf-hero__inner">

			<div class="tad-pf-hero__content tad-reveal">
				<p class="tad-pf-eyebrow"><?php esc_html_e( 'Export Catalogue', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'Premium Agricultural &', 'trade-africa-direct' ); ?><br><em><?php esc_html_e( 'Freshwater Commodities', 'trade-africa-direct' ); ?></em></h1>
				<p><?php esc_html_e( "Seven certified export commodities, directly from Uganda's farm networks to your global facility. Zero intermediaries, 100% traceable supply chain, and competitive 2026 FOB Kampala pricing.", 'trade-africa-direct' ); ?></p>
				<div class="tad-pf-hero__actions">
					<a class="tad-pf-btn tad-pf-btn--accent" href="<?php echo esc_url( $quote_url ); ?>">
						<?php esc_html_e( 'Request 2026 FOB Price List', 'trade-africa-direct' ); ?>
					</a>
					<a class="tad-pf-btn tad-pf-btn--ghost" href="<?php echo esc_url( $calendar_url ); ?>">
						<?php esc_html_e( 'Download Harvest Calendar', 'trade-africa-direct' ); ?>
					</a>
				</div>
			</div>

			<div class="tad-pf-hero__visual tad-reveal tad-reveal--delay-1" aria-hidden="true">
				<figure>
					<img src="<?php echo esc_url( $imgs['avocados'] ); ?>" alt="<?php echo esc_attr__( 'Hass avocados being sorted into branded export cartons.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $imgs['coffee'] ); ?>" alt="<?php echo esc_attr__( 'Specialty green coffee beans on a grading tray.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $imgs['farm'] ); ?>" alt="<?php echo esc_attr__( 'Ugandan smallholder farm network at dawn.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<div class="tad-pf-hero__badge">
					<strong>7</strong>
					<span><?php esc_html_e( 'Export Commodities', 'trade-africa-direct' ); ?></span>
				</div>
			</div>

		</div>

		<div class="tad-pf-stats">
			<div class="tad-pf-container tad-pf-stats__row">
				<div class="tad-pf-stat">
					<strong><?php esc_html_e( '7 Commodities', 'trade-africa-direct' ); ?></strong>
					<small><?php esc_html_e( 'Agricultural & Freshwater Products', 'trade-africa-direct' ); ?></small>
				</div>
				<div class="tad-pf-stat">
					<strong><?php esc_html_e( '3 Source Regions', 'trade-africa-direct' ); ?></strong>
					<small><?php esc_html_e( 'Nakaseke · Mt. Elgon · Bundibugyo', 'trade-africa-direct' ); ?></small>
				</div>
				<div class="tad-pf-stat">
					<strong><?php esc_html_e( 'EU / USA / ME', 'trade-africa-direct' ); ?></strong>
					<small><?php esc_html_e( 'Certified for All Major Trade Blocs', 'trade-africa-direct' ); ?></small>
				</div>
				<div class="tad-pf-stat">
					<strong><?php esc_html_e( 'FOB Kampala', 'trade-africa-direct' ); ?></strong>
					<small><?php esc_html_e( 'Competitive 2026 Pricing Available', 'trade-africa-direct' ); ?></small>
				</div>
			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 2: ALTERNATING FEATURED PRODUCTS
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<?php foreach ( $featured as $index => $feat ) : ?>
		<section class="tad-pf-feature <?php echo esc_attr( $feat['bg'] ); ?><?php echo $feat['reverse'] ? ' tad-pf-feature--reverse' : ''; ?>">

			<div class="tad-pf-feature__image">
				<img
					src="<?php echo esc_url( $feat['image'] ); ?>"
					alt="<?php echo esc_attr( $feat['img_alt'] ); ?>"
					loading="lazy"
				>
				<span class="tad-pf-feature__tag"><?php echo esc_html( $feat['tag'] ); ?></span>
				<div class="tad-pf-feature__data-card" aria-hidden="true">
					<strong><?php echo esc_html( $feat['data_val'] ); ?></strong>
					<span><?php echo esc_html( $feat['data_lbl'] ); ?></span>
					<em><?php echo esc_html( $feat['data_sub'] ); ?></em>
				</div>
			</div>

			<div class="tad-pf-feature__content">
				<div class="tad-pf-feature__inner tad-reveal">
					<p class="tad-pf-eyebrow"><?php echo esc_html( $feat['eyebrow'] ); ?></p>
					<h2><?php echo esc_html( $feat['title'] ); ?></h2>
					<p><?php echo esc_html( $feat['body'] ); ?></p>

					<ul class="tad-pf-spec-list">
						<?php foreach ( $feat['specs'] as $spec ) : ?>
							<li><?php echo esc_html( $spec ); ?></li>
						<?php endforeach; ?>
					</ul>

					<div class="tad-pf-feature__actions">
						<a class="tad-pf-btn tad-pf-btn--primary" href="<?php echo esc_url( $feat['url'] ); ?>">
							<?php esc_html_e( 'View Full Technical Specs', 'trade-africa-direct' ); ?>
						</a>
						<a class="tad-pf-arrow-link" href="<?php echo esc_url( $quote_url ); ?>">
							<?php esc_html_e( 'Request Price List', 'trade-africa-direct' ); ?>
						</a>
					</div>
				</div>
			</div>

		</section>
	<?php endforeach; ?>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 3: VISUAL PRODUCT MOSAIC
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-pf-mosaic-section">
		<div class="tad-pf-container">
			<div class="tad-pf-mosaic-head tad-reveal">
				<p class="tad-pf-eyebrow tad-pf-eyebrow--light"><?php esc_html_e( 'At a Glance', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Seven Commodities, One Trusted Supply Chain', 'trade-africa-direct' ); ?></h2>
			</div>

			<div class="tad-pf-mosaic tad-reveal">
				<?php foreach ( $mosaic as $item ) : ?>
					<div class="tad-pf-mosaic__item">
						<img
							src="<?php echo esc_url( $item['image'] ); ?>"
							alt="<?php echo esc_attr( $item['alt'] ); ?>"
							loading="lazy"
						>
						<a
							href="<?php echo esc_url( $item['url'] ); ?>"
							class="tad-pf-mosaic__icon"
							aria-label="<?php echo esc_attr( sprintf( __( 'View %s product page', 'trade-africa-direct' ), $item['title'] ) ); ?>"
						>+</a>
						<div class="tad-pf-mosaic__caption">
							<strong><?php echo esc_html( $item['title'] ); ?></strong>
							<span><?php echo esc_html( $item['spec'] ); ?></span>
							<a href="<?php echo esc_url( $item['url'] ); ?>" aria-hidden="true" tabindex="-1"></a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 4: FULL CATALOGUE CARD GRID
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-pf-catalogue">
		<div class="tad-pf-container">
			<div class="tad-pf-section-head tad-reveal">
				<p class="tad-pf-eyebrow"><?php esc_html_e( 'Full Catalogue', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'All Seven Export Commodities', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'Click any commodity to access the full technical data sheet, logistics specifications, and 2026 pricing information.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-pf-card-grid">
				<?php foreach ( $cards as $idx => $card ) : ?>
					<article class="tad-pf-card tad-reveal tad-reveal--delay-<?php echo esc_attr( $idx % 3 ); ?>">
						<div class="tad-pf-card__image">
							<img
								src="<?php echo esc_url( $card['image'] ); ?>"
								alt="<?php echo esc_attr( $card['alt'] ); ?>"
								loading="lazy"
							>
							<span class="tad-pf-card__tag"><?php echo esc_html( $card['tag'] ); ?></span>
						</div>
						<div class="tad-pf-card__body">
							<h3><?php echo esc_html( $card['title'] ); ?></h3>
							<p><?php echo esc_html( $card['spec'] ); ?></p>
							<div class="tad-pf-card__footer">
								<a href="<?php echo esc_url( $card['url'] ); ?>" class="tad-pf-card__link">
									<?php esc_html_e( 'View Technical Specs', 'trade-africa-direct' ); ?>
								</a>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 5: GUARANTEE — WHY GLOBAL IMPORTERS CHOOSE US
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-pf-guarantee">
		<div class="tad-pf-container">
			<div class="tad-pf-guarantee__head tad-reveal">
				<p class="tad-pf-eyebrow tad-pf-eyebrow--light"><?php esc_html_e( 'Our Guarantee', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Why Global Importers Choose Our Supply Chain', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'We do not just sell products; we manage risk.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-pf-guarantee-grid">
				<?php foreach ( $guarantees as $gi => $g ) : ?>
					<article class="tad-pf-guarantee-card tad-reveal tad-reveal--delay-<?php echo esc_attr( $gi ); ?>">
						<div class="tad-pf-guarantee-card__icon" aria-hidden="true"></div>
						<h3><?php echo esc_html( $g['title'] ); ?></h3>
						<p><?php echo esc_html( $g['body'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 6: BOTTOM CTA — REQUEST QUOTE
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-pf-cta">
		<div class="tad-pf-container">
			<div class="tad-pf-cta__inner">

				<div class="tad-pf-cta__content tad-reveal">
					<p class="tad-pf-eyebrow"><?php esc_html_e( 'Ready to Source?', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Secure Your 2026 Supply Lines from Uganda', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Provide your technical requirements and our Kampala-based export team will deliver a formal FOB or CIF quote within 24–48 hours — complete with current pricing, lead times, and payment terms.', 'trade-africa-direct' ); ?></p>
					<div class="tad-pf-cta__actions">
						<a class="tad-pf-btn tad-pf-btn--primary" href="<?php echo esc_url( $quote_url ); ?>">
							<?php esc_html_e( 'Request a Commercial Quote', 'trade-africa-direct' ); ?>
						</a>
						<a class="tad-pf-btn tad-pf-btn--ghost" href="<?php echo esc_url( $calendar_url ); ?>">
							<?php esc_html_e( 'Download 2026 Harvest Calendar', 'trade-africa-direct' ); ?>
						</a>
					</div>
				</div>

				<div class="tad-pf-cta__process tad-reveal tad-reveal--delay-1">
					<h3><?php esc_html_e( 'Our 4-Step Quote-to-Shipment Process', 'trade-africa-direct' ); ?></h3>
					<ol class="tad-pf-process-steps">
						<li>
							<span>1</span>
							<div>
								<strong><?php esc_html_e( 'Technical Review', 'trade-africa-direct' ); ?></strong><br>
								<?php esc_html_e( 'We cross-reference your specs against current harvest data and Kampala stock levels.', 'trade-africa-direct' ); ?>
							</div>
						</li>
						<li>
							<span>2</span>
							<div>
								<strong><?php esc_html_e( 'Formal PDF Quote', 'trade-africa-direct' ); ?></strong><br>
								<?php esc_html_e( 'You receive FOB / CIF pricing, lead times, and payment terms (LC / TT).', 'trade-africa-direct' ); ?>
							</div>
						</li>
						<li>
							<span>3</span>
							<div>
								<strong><?php esc_html_e( 'Sample Verification', 'trade-africa-direct' ); ?></strong><br>
								<?php esc_html_e( 'A 1KG commercial sample is dispatched via DHL for your QA lab testing.', 'trade-africa-direct' ); ?>
							</div>
						</li>
						<li>
							<span>4</span>
							<div>
								<strong><?php esc_html_e( 'Contract & Loading', 'trade-africa-direct' ); ?></strong><br>
								<?php esc_html_e( 'Upon approval and deposit / LC issuance, we begin grading, packing, and phytosanitary clearing.', 'trade-africa-direct' ); ?>
							</div>
						</li>
					</ol>
				</div>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
