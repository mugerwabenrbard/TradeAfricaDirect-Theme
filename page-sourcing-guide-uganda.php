<?php
/**
 * Template Name: Market Insight — Sourcing Agricultural Products Uganda
 *
 * Educational pillar page for sourcing and importing Ugandan agricultural products.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$portfolio_url = home_url( '/export-portfolio/' );
$calendar_url  = home_url( '/uganda-harvest-calendar-2026/' );
$quote_url     = home_url( '/request-a-quote/' );

$images = [
	'hero_main' => tad_get_theme_image( 'sourcing_hero_main' ),
	'hero_top'  => tad_get_theme_image( 'sourcing_hero_top' ),
	'hero_low'  => tad_get_theme_image( 'sourcing_hero_low' ),
];

$summary_items = [
	[
		'title' => __( 'High-Value Commodities', 'trade-africa-direct' ),
		'body'  => __( 'Coffee, avocados, Nilotica shea butter, and clean-label dried fruits.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Documentation', 'trade-africa-direct' ),
		'body'  => __( 'Phytosanitary Certificate, Certificate of Origin, and OBL or AWB.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Logistics Corridors', 'trade-africa-direct' ),
		'body'  => __( 'Air freight through Entebbe or sea freight through Mombasa.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Risk Mitigation', 'trade-africa-direct' ),
		'body'  => __( 'TDS review, third-party inspection, and URSB verification.', 'trade-africa-direct' ),
	],
];

get_header();
?>

<main id="content" class="tad-insight tad-sourcing-guide">
	<section class="tad-insight-hero">
		<div class="tad-insight-container tad-insight-hero__inner">
			<div class="tad-insight-hero__copy tad-reveal">
				<p class="tad-insight-eyebrow"><?php esc_html_e( 'Market Insights', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'The Ultimate Guide to Sourcing & Importing Agricultural Products from', 'trade-africa-direct' ); ?> <span><?php esc_html_e( 'Uganda (2026)', 'trade-africa-direct' ); ?></span></h1>
				<p><?php esc_html_e( 'Uganda, famously known as the "Pearl of Africa," possesses some of the most fertile volcanic soils and consistent rainfall patterns on the continent. For international procurement managers, Uganda represents a strategic opportunity to diversify supply chains with high-quality, nutrient-dense commodities.', 'trade-africa-direct' ); ?></p>
				<div class="tad-insight-hero__meta">
					<span class="tad-insight-pill"><?php esc_html_e( '2026 B2B Buyer Guide', 'trade-africa-direct' ); ?></span>
					<span class="tad-insight-pill"><?php esc_html_e( 'Uganda Export Procedures', 'trade-africa-direct' ); ?></span>
					<span class="tad-insight-pill"><?php esc_html_e( 'Sourcing from East Africa', 'trade-africa-direct' ); ?></span>
				</div>
			</div>

			<div class="tad-insight-hero__visual tad-reveal tad-reveal--from-right">
				<figure>
					<img src="<?php echo esc_url( $images['hero_main'] ); ?>" alt="<?php echo esc_attr__( 'Ugandan agricultural origin landscape with fertile farmland for export sourcing.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['hero_top'] ); ?>" alt="<?php echo esc_attr__( 'Container ship representing Mombasa export logistics from Uganda.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['hero_low'] ); ?>" alt="<?php echo esc_attr__( 'Kampala warehouse export handling and quality inspection facility.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<div class="tad-insight-hero__badge" aria-hidden="true">
					<strong><?php esc_html_e( '2026', 'trade-africa-direct' ); ?></strong>
					<span><?php esc_html_e( 'A roadmap for procurement managers importing Ugandan agricultural goods.', 'trade-africa-direct' ); ?></span>
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
				<p><?php esc_html_e( 'However, navigating the East African trade landscape requires more than just finding a product; it requires an understanding of the regulatory framework, logistical corridors, and quality standards that govern global trade. This guide provides a comprehensive roadmap for successfully sourcing and importing Ugandan agricultural goods.', 'trade-africa-direct' ); ?></p>

				<section class="tad-insight-section">
					<h2><span>1</span><?php esc_html_e( 'Identifying High-Value Ugandan Commodities', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Before beginning the import process, it is essential to understand which products offer a competitive advantage in the Ugandan market.', 'trade-africa-direct' ); ?></p>
					<ul class="tad-insight-list">
						<li><strong><?php esc_html_e( 'Specialty Coffee:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Uganda is a dual-origin powerhouse, producing both high-altitude Arabica (Mt. Elgon/Rwenzori) and "Fine Robusta" (Lake Victoria Basin).', 'trade-africa-direct' ); ?></li>
						<li><strong><?php esc_html_e( 'Hass Avocados:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Due to the equatorial climate, Uganda has two distinct harvest seasons (May–July and November–January), bridging supply gaps from other global origins.', 'trade-africa-direct' ); ?></li>
						<li><strong><?php esc_html_e( 'Nilotica Shea Butter:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'A rare, high-oleic variety of shea found only in East Africa, prized by the cosmetic industry for its superior spreadability.', 'trade-africa-direct' ); ?></li>
						<li><strong><?php esc_html_e( 'Dried Fruits:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Mango, pineapple, and jackfruit, solar-dried without added sugars or sulphur, meeting the "Clean Label" demands of EU and US retailers.', 'trade-africa-direct' ); ?></li>
					</ul>
				</section>

				<section class="tad-insight-section">
					<h2><span>2</span><?php esc_html_e( 'Navigating the Regulatory & Documentation Landscape', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'To ensure duty-free entry and avoid customs seizures, every shipment from Uganda must be accompanied by the "Holy Trinity" of export documentation.', 'trade-africa-direct' ); ?></p>

					<h3><?php esc_html_e( 'A. The Phytosanitary Certificate', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'Issued by the Ministry of Agriculture, Animal Industry and Fisheries (MAAIF), this document certifies that the plant products have been inspected and are free from regulated pests and diseases. For fresh produce like avocados, this is the most critical document for entry into the EU or UAE.', 'trade-africa-direct' ); ?></p>

					<h3><?php esc_html_e( 'B. Certificate of Origin (EUR.1 / Form A)', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'Uganda benefits from several international trade agreements:', 'trade-africa-direct' ); ?></p>
					<ul class="tad-insight-list">
						<li><strong><?php esc_html_e( 'EBA (Everything But Arms):', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Allows duty-free and quota-free access to the European Union market.', 'trade-africa-direct' ); ?></li>
						<li><strong><?php esc_html_e( 'AGOA (African Growth and Opportunity Act):', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Provides preferential access to the United States market.', 'trade-africa-direct' ); ?></li>
					</ul>
					<p><?php esc_html_e( 'To claim these benefits, a formal Certificate of Origin must be issued by the Uganda Export Promotion Board (UEPB).', 'trade-africa-direct' ); ?></p>

					<h3><?php esc_html_e( 'C. The Bill of Lading (OBL) or Air Waybill (AWB)', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'These are the titles to the goods. The OBL is used for sea freight via Mombasa, while the AWB is used for air freight via Entebbe.', 'trade-africa-direct' ); ?></p>
				</section>

				<section class="tad-insight-section">
					<h2><span>3</span><?php esc_html_e( 'Logistics: Choosing the Right Transit Corridor', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Logistics from a landlocked country like Uganda require a balanced strategy between cost and speed.', 'trade-africa-direct' ); ?></p>
					<div class="tad-insight-options">
						<div class="tad-insight-option">
							<h3><?php esc_html_e( 'Option 1: Air Freight via Entebbe (EBB)', 'trade-africa-direct' ); ?></h3>
							<p><strong><?php esc_html_e( 'Best for:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Fresh avocados, chilled fish, and high-value micro-lots of coffee.', 'trade-africa-direct' ); ?></p>
							<p><strong><?php esc_html_e( 'Transit Time:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( '12 to 48 hours to major hubs.', 'trade-africa-direct' ); ?></p>
							<p><strong><?php esc_html_e( 'Advantage:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Minimizes "Field Heat" exposure and maximizes shelf life for perishables.', 'trade-africa-direct' ); ?></p>
						</div>
						<div class="tad-insight-option">
							<h3><?php esc_html_e( 'Option 2: Sea Freight via Mombasa (MBA), Kenya', 'trade-africa-direct' ); ?></h3>
							<p><strong><?php esc_html_e( 'Best for:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Dried fruits, cocoa, coffee, and shea butter.', 'trade-africa-direct' ); ?></p>
							<p><strong><?php esc_html_e( 'The Route:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Goods are trucked from Kampala to the Port of Mombasa (the Northern Corridor), where they are loaded onto ocean vessels.', 'trade-africa-direct' ); ?></p>
							<p><strong><?php esc_html_e( 'Transit Time:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( '25 to 35 days to European ports (Rotterdam/Hamburg) and 15 to 20 days to Jebel Ali (UAE).', 'trade-africa-direct' ); ?></p>
						</div>
					</div>
				</section>

				<section class="tad-insight-section">
					<h2><span>4</span><?php esc_html_e( 'Quality Assurance & Risk Mitigation', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'The primary risk in African sourcing is "Quality Variance"—where the sample does not match the bulk shipment.', 'trade-africa-direct' ); ?></p>
					<h3><?php esc_html_e( 'How to Mitigate Risk:', 'trade-africa-direct' ); ?></h3>
					<ul class="tad-insight-list">
						<li><strong><?php esc_html_e( 'Request a Technical Data Sheet (TDS):', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Ensure the supplier can define their product in measurable units (e.g., "Moisture <13%") rather than subjective terms (e.g., "Very dry").', 'trade-africa-direct' ); ?></li>
						<li><strong><?php esc_html_e( 'Third-Party Inspection:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'For large contracts, use international inspectors like SGS or Intertek to conduct a pre-shipment inspection (PSI) at the warehouse in Kampala.', 'trade-africa-direct' ); ?></li>
						<li><strong><?php esc_html_e( 'Verify URSB Registration:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Ensure the company is a legally registered entity with the Uganda Registration Services Bureau (URSB).', 'trade-africa-direct' ); ?></li>
					</ul>
				</section>

				<section class="tad-insight-section">
					<h2><span>5</span><?php esc_html_e( 'Sustainable & Ethical Sourcing', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Modern consumers demand traceability. In Uganda, the most sustainable model is Direct Trade with smallholder farmer groups. By sourcing from exporters who provide technical assistance and immediate liquidity to farmers, importers can ensure a "clean" supply chain that is free from exploitative practices and supports local economic development.', 'trade-africa-direct' ); ?></p>
				</section>

				<section class="tad-insight-section">
					<h2><span>✓</span><?php esc_html_e( 'Conclusion: Partnering for Success', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Sourcing from Uganda offers immense rewards for those who value quality and origin-diversity. By understanding the harvest cycles, documentation requirements, and logistical pathways, procurement managers can build a resilient and profitable supply chain in East Africa.', 'trade-africa-direct' ); ?></p>
					<p><?php esc_html_e( 'Are you looking to verify a Ugandan supplier or request a technical quote for 2026?', 'trade-africa-direct' ); ?></p>
				</section>

				<div class="tad-insight-cta tad-reveal">
					<h2><?php esc_html_e( 'Ready to Source from Uganda?', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Use this guide to validate your sourcing plan, then request product-specific technical data, samples, and current 2026 FOB or CIF pricing from our Kampala export team.', 'trade-africa-direct' ); ?></p>
					<div class="tad-insight-cta__actions">
						<a class="tad-insight-btn tad-insight-btn--accent" href="<?php echo esc_url( $portfolio_url ); ?>"><?php esc_html_e( 'View our Full Export Portfolio', 'trade-africa-direct' ); ?></a>
						<a class="tad-insight-btn tad-insight-btn--ghost" href="<?php echo esc_url( $calendar_url ); ?>"><?php esc_html_e( 'Download the 2026 Harvest Calendar', 'trade-africa-direct' ); ?></a>
					</div>
				</div>
			</article>

			<aside class="tad-insight-sidebar tad-reveal tad-reveal--from-right" aria-label="<?php echo esc_attr__( 'Sourcing guide sidebar', 'trade-africa-direct' ); ?>">
				<section class="tad-insight-card tad-insight-card--dark">
					<p class="tad-insight-eyebrow tad-insight-eyebrow--dark"><?php esc_html_e( 'Buyer Action', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Request a technical quote for 2026.', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Send your product, grade, volume, and destination port to receive FOB or CIF pricing from Kampala.', 'trade-africa-direct' ); ?></p>
					<a class="tad-insight-btn tad-insight-btn--accent" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Export Quote', 'trade-africa-direct' ); ?></a>
				</section>

				<section class="tad-insight-card">
					<h3><?php esc_html_e( 'Guide Contents', 'trade-africa-direct' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'High-Value Ugandan Commodities', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Regulatory & Documentation Landscape', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Air vs Sea Logistics Corridors', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Quality Assurance & Risk Mitigation', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Sustainable & Ethical Sourcing', 'trade-africa-direct' ); ?></li>
					</ul>
				</section>

				<section class="tad-insight-card">
					<h3><?php esc_html_e( 'SEO Keywords', 'trade-africa-direct' ); ?></h3>
					<ul>
						<li><?php esc_html_e( 'Import from Uganda', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Uganda export procedures', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Sourcing from Africa', 'trade-africa-direct' ); ?></li>
						<li><?php esc_html_e( 'Uganda agricultural trade 2026', 'trade-africa-direct' ); ?></li>
					</ul>
				</section>
			</aside>
		</div>
	</section>
</main>

<?php
get_footer();
