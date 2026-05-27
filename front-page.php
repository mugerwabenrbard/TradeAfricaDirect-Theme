<?php
/**
 * Front page template for Trade Africa Direct.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$quote_url      = home_url( '/request-a-quote/' );
$portfolio_url  = home_url( '/export-portfolio/' );
$calendar_url   = home_url( '/uganda-harvest-calendar-2026/' );
$facility_url   = home_url( '/quality-certifications-logistics/' );
$image_defaults = [
	'avocados'   => tad_get_theme_image( 'home_avocados' ),
	'coffee'     => tad_get_theme_image( 'home_coffee' ),
	'fruits'     => tad_get_theme_image( 'home_fruits' ),
	'warehouse'  => tad_get_theme_image( 'home_warehouse' ),
	'farm'       => tad_get_theme_image( 'home_farm' ),
	'shea'       => tad_get_theme_image( 'home_shea' ),
	'cocoa'      => tad_get_theme_image( 'home_cocoa' ),
	'fish'       => tad_get_theme_image( 'home_fish' ),
	'calendar'   => tad_get_theme_image( 'home_calendar' ),
	'packing'    => tad_get_theme_image( 'home_packing' ),
	'inspection' => tad_get_theme_image( 'home_inspection' ),
];

$stats = [
	[
		'value' => __( 'EU / USA / ME', 'trade-africa-direct' ),
		'label' => __( 'Target Export Markets', 'trade-africa-direct' ),
	],
	[
		'value' => __( '100% Traceable', 'trade-africa-direct' ),
		'label' => __( 'Farm-Level Origin Verified', 'trade-africa-direct' ),
	],
	[
		'value' => __( 'FOB Kampala', 'trade-africa-direct' ),
		'label' => __( 'Competitive 2026 Pricing', 'trade-africa-direct' ),
	],
	[
		'value' => __( 'EBB + Mombasa', 'trade-africa-direct' ),
		'label' => __( 'Air and Sea Freight Routes', 'trade-africa-direct' ),
	],
];

$certifications = [
	[
		'abbr' => __( 'UNBS', 'trade-africa-direct' ),
		'name' => __( 'Uganda National Bureau of Standards', 'trade-africa-direct' ),
	],
	[
		'abbr' => __( 'MAAIF', 'trade-africa-direct' ),
		'name' => __( 'Phytosanitary Authority', 'trade-africa-direct' ),
	],
	[
		'abbr' => __( 'URSB', 'trade-africa-direct' ),
		'name' => __( 'Registered Trading Corporation', 'trade-africa-direct' ),
	],
	[
		'abbr' => __( 'GlobalGAP', 'trade-africa-direct' ),
		'name' => __( 'Good Agricultural Practices', 'trade-africa-direct' ),
	],
	[
		'abbr' => __( 'EU Organic', 'trade-africa-direct' ),
		'name' => __( 'Organic Certification', 'trade-africa-direct' ),
	],
];

$products = [
	[
		'title' => __( 'Bulk Dried Fruits', 'trade-africa-direct' ),
		'tag'   => __( 'Bulk Available', 'trade-africa-direct' ),
		'spec'  => __( 'Solar-dried Mango, Pineapple, Jackfruit. Moisture <15%. No added sugar.', 'trade-africa-direct' ),
		'image' => $image_defaults['fruits'],
		'alt'   => __( 'High-resolution product photo of solar-dried mango, pineapple, and jackfruit packed for bulk export.', 'trade-africa-direct' ),
		'url'   => home_url( '/bulk-dried-fruits-uganda/' ),
	],
	[
		'title' => __( 'Fresh Produce', 'trade-africa-direct' ),
		'tag'   => __( 'Fresh Export', 'trade-africa-direct' ),
		'spec'  => __( 'Premium Hass Avocados and Raw Macadamia. Dry-matter content >22%.', 'trade-africa-direct' ),
		'image' => $image_defaults['avocados'],
		'alt'   => __( 'Export-grade Hass avocados and raw macadamia displayed in clean branded produce cartons.', 'trade-africa-direct' ),
		'url'   => home_url( '/fresh-hass-avocados/' ),
	],
	[
		'title' => __( 'Nilotica Shea Butter', 'trade-africa-direct' ),
		'tag'   => __( 'Grade A Cosmetic', 'trade-africa-direct' ),
		'spec'  => __( '100% Unrefined East African Shea. Grade A Cosmetic. Cold-pressed.', 'trade-africa-direct' ),
		'image' => $image_defaults['shea'],
		'alt'   => __( 'Creamy unrefined Nilotica shea butter being scooped to show its soft Grade A cosmetic texture.', 'trade-africa-direct' ),
		'url'   => home_url( '/nilotica-shea-butter/' ),
	],
	[
		'title' => __( 'Specialty Coffee', 'trade-africa-direct' ),
		'tag'   => __( 'Single Origin', 'trade-africa-direct' ),
		'spec'  => __( 'Single-Origin Arabica (Mt. Elgon) and Screen 18 Fine Robusta.', 'trade-africa-direct' ),
		'image' => $image_defaults['coffee'],
		'alt'   => __( 'Specialty Ugandan green coffee beans being graded beside a moisture meter and cupping tray.', 'trade-africa-direct' ),
		'url'   => home_url( '/specialty-green-coffee-beans/' ),
	],
	[
		'title' => __( 'Cocoa Beans', 'trade-africa-direct' ),
		'tag'   => __( 'Fermented', 'trade-africa-direct' ),
		'spec'  => __( 'Fermented Bundibugyo Beans and Pure Cocoa Butter.', 'trade-africa-direct' ),
		'image' => $image_defaults['cocoa'],
		'alt'   => __( 'Bundibugyo cocoa cut test showing deep brown well-fermented bean interiors for quality verification.', 'trade-africa-direct' ),
		'url'   => home_url( '/ugandan-cocoa-beans/' ),
	],
	[
		'title' => __( 'Freshwater Fish', 'trade-africa-direct' ),
		'tag'   => __( 'Chilled and Premium', 'trade-africa-direct' ),
		'spec'  => __( 'Chilled Nile Perch Fillets and Premium Grade Fish Maw.', 'trade-africa-direct' ),
		'image' => $image_defaults['fish'],
		'alt'   => __( 'Vacuum-sealed white Nile Perch fillet being weighed for chilled export quality control.', 'trade-africa-direct' ),
		'url'   => home_url( '/nile-perch-fish-maw/' ),
	],
];

$guarantees = [
	[
		'title' => __( '100% Farm-Level Traceability', 'trade-africa-direct' ),
		'body'  => __( 'We are not briefcase brokers. We work directly with smallholder farmer groups, ensuring you receive a product that is ethically sourced and traceable to its origin.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Compliance-First Documentation', 'trade-africa-direct' ),
		'body'  => __( 'Every commercial shipment is accompanied by the key export paperwork: Phytosanitary Certificate, EUR.1 for duty-free EU entry, and Certificate of Origin.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Equatorial Cold-Chain Mastery', 'trade-africa-direct' ),
		'body'  => __( 'We use direct air freight via Entebbe International Airport for perishables and secure road-to-sea routing via Mombasa Port for bulk volume.', 'trade-africa-direct' ),
	],
];
?>

<main id="content" class="tad-home">
	<section class="tad-home-hero">
		<div class="tad-home-hero__glow tad-home-hero__glow--top"></div>
		<div class="tad-home-hero__glow tad-home-hero__glow--bottom"></div>
		<div class="tad-home-container tad-home-hero__inner">
			<div class="tad-home-hero__content tad-reveal">
				<p class="tad-home-eyebrow tad-home-eyebrow--light"><?php esc_html_e( 'Uganda Export Company - Pearl of Africa', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'Direct Sourcing from Uganda.', 'trade-africa-direct' ); ?> <span><?php esc_html_e( 'Premium Grade,', 'trade-africa-direct' ); ?></span> <?php esc_html_e( 'Zero Middlemen.', 'trade-africa-direct' ); ?></h1>
				<p><?php esc_html_e( 'We provide a reliable, transparent bridge between Ugandan agricultural excellence and global markets. Sourcing directly from our farm networks, we supply certified organic dried fruits, fresh avocados, Nilotica shea butter, and specialty coffee to importers in the EU, USA, and Middle East.', 'trade-africa-direct' ); ?></p>
				<div class="tad-home-actions">
					<a class="tad-home-button tad-home-button--accent" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request 2026 FOB Price List', 'trade-africa-direct' ); ?></a>
					<a class="tad-home-button tad-home-button--ghost-light" href="<?php echo esc_url( $portfolio_url ); ?>"><?php esc_html_e( 'Explore Our Export Portfolio', 'trade-africa-direct' ); ?></a>
				</div>
			</div>

			<div class="tad-home-collage tad-reveal tad-reveal--delay-1" aria-label="<?php echo esc_attr__( 'Hero visual slots for Hass avocado sorting and Entebbe export logistics imagery', 'trade-africa-direct' ); ?>">
				<figure class="tad-home-collage__item tad-home-collage__item--main">
					<img src="<?php echo esc_url( $image_defaults['avocados'] ); ?>" alt="<?php echo esc_attr__( 'Hass avocados being sorted by hand into branded export cartons for international shipment.', 'trade-africa-direct' ); ?>">
				</figure>
				<figure class="tad-home-collage__item tad-home-collage__item--top">
					<img src="<?php echo esc_url( $image_defaults['coffee'] ); ?>" alt="<?php echo esc_attr__( 'Wide dawn shot of Entebbe Airport tarmac prepared for agricultural export air freight.', 'trade-africa-direct' ); ?>">
				</figure>
				<figure class="tad-home-collage__item tad-home-collage__item--right">
					<img src="<?php echo esc_url( $image_defaults['fruits'] ); ?>" alt="<?php echo esc_attr__( 'Clean export portfolio image showing dried fruits, fresh produce, shea butter, coffee, cocoa, and fish.', 'trade-africa-direct' ); ?>">
				</figure>
				<figure class="tad-home-collage__item tad-home-collage__item--left">
					<img src="<?php echo esc_url( $image_defaults['warehouse'] ); ?>" alt="<?php echo esc_attr__( 'Warehouse staff in safety gear preparing branded export cartons for cold-chain logistics.', 'trade-africa-direct' ); ?>">
				</figure>
				<div class="tad-home-collage__badge">
					<strong>6</strong>
					<span><?php esc_html_e( 'Export Commodities', 'trade-africa-direct' ); ?></span>
				</div>
			</div>
		</div>

		<div class="tad-home-stats">
			<div class="tad-home-container tad-home-stats__row">
				<?php foreach ( $stats as $stat ) : ?>
					<div class="tad-home-stat">
						<span class="tad-home-stat__icon" aria-hidden="true"></span>
						<span>
							<strong><?php echo esc_html( $stat['value'] ); ?></strong>
							<small><?php echo esc_html( $stat['label'] ); ?></small>
						</span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-home-trust" aria-label="<?php echo esc_attr__( 'Export compliance and certifications', 'trade-africa-direct' ); ?>">
		<div class="tad-home-container tad-home-trust__inner">
			<p><?php esc_html_e( 'Fully Compliant and Certified for International Export', 'trade-africa-direct' ); ?></p>
			<div class="tad-home-certifications">
				<?php foreach ( $certifications as $certification ) : ?>
					<div class="tad-home-certification">
						<span class="tad-home-certification__icon" aria-hidden="true"></span>
						<span>
							<strong><?php echo esc_html( $certification['abbr'] ); ?></strong>
							<small><?php echo esc_html( $certification['name'] ); ?></small>
						</span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-home-section tad-home-authority" id="sourcing">
		<div class="tad-home-container tad-home-split">
			<div class="tad-home-copy tad-reveal">
				<p class="tad-home-eyebrow"><?php esc_html_e( 'Our Approach', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Bridging the Gap Between Ugandan Farmers and Global Procurement Managers', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'As a leading Uganda export company, Trade Africa Direct serves as a specialized gateway for international buyers seeking high-quality, sustainable commodities from the Pearl of Africa. We eliminate the traditional risks associated with East African sourcing by managing the entire supply chain from the farm gate in Nakaseke, Mt. Elgon, and Bundibugyo directly to your port of choice.', 'trade-africa-direct' ); ?></p>
				<p><?php esc_html_e( 'By maintaining strict control over post-harvest handling and cold-chain logistics, we ensure that our wholesale dried mango, specialty green coffee beans, and bulk Nilotica shea butter consistently meet international safety and quality standards. Our mission is to provide global wholesalers with the transparency, traceability, and competitive FOB Kampala pricing they need to secure their 2026 supply lines.', 'trade-africa-direct' ); ?></p>
			</div>
			<div class="tad-home-media-card tad-reveal tad-reveal--delay-1">
				<img src="<?php echo esc_url( $image_defaults['farm'] ); ?>" alt="<?php echo esc_attr__( 'Ugandan smallholder farm network and export team managing traceable post-harvest handling.', 'trade-africa-direct' ); ?>">
				<div class="tad-home-floating-card">
					<strong>3</strong>
					<span><?php esc_html_e( 'Source Regions', 'trade-africa-direct' ); ?></span>
					<small><?php esc_html_e( 'Nakaseke / Mt. Elgon / Bundibugyo', 'trade-africa-direct' ); ?></small>
				</div>
			</div>
		</div>
	</section>

	<section class="tad-home-section tad-home-portfolio" id="portfolio">
		<div class="tad-home-container">
			<div class="tad-home-section-head">
				<p class="tad-home-eyebrow"><?php esc_html_e( 'Export Catalogue', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Premium Agricultural and Freshwater Commodities', 'trade-africa-direct' ); ?></h2>
			</div>
			<div class="tad-home-product-grid">
				<?php foreach ( $products as $index => $product ) : ?>
					<article class="tad-home-product tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index, 3 ) ); ?>">
						<a href="<?php echo esc_url( $product['url'] ); ?>" class="tad-home-product__image">
							<img src="<?php echo esc_url( $product['image'] ); ?>" alt="<?php echo esc_attr( $product['alt'] ); ?>">
							<span><?php echo esc_html( $product['tag'] ); ?></span>
						</a>
						<div class="tad-home-product__body">
							<h3><?php echo esc_html( $product['title'] ); ?></h3>
							<p><?php echo esc_html( $product['spec'] ); ?></p>
							<a class="tad-home-link" href="<?php echo esc_url( $product['url'] ); ?>"><?php esc_html_e( 'View Technical Specs', 'trade-africa-direct' ); ?></a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-home-section tad-home-guarantee" id="why-us">
		<div class="tad-home-guarantee__glow"></div>
		<div class="tad-home-container">
			<div class="tad-home-section-head tad-home-section-head--dark">
				<p class="tad-home-eyebrow tad-home-eyebrow--light"><?php esc_html_e( 'Our Guarantee', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Why Global Importers Choose Our Supply Chain', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'We do not just sell products; we manage risk.', 'trade-africa-direct' ); ?></p>
			</div>
			<div class="tad-home-guarantee-grid">
				<?php foreach ( $guarantees as $index => $guarantee ) : ?>
					<article class="tad-home-guarantee-card tad-reveal tad-reveal--delay-<?php echo esc_attr( $index ); ?>">
						<span class="tad-home-check" aria-hidden="true"></span>
						<h3><?php echo esc_html( $guarantee['title'] ); ?></h3>
						<p><?php echo esc_html( $guarantee['body'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-home-section tad-home-calendar" id="calendar">
		<div class="tad-home-container tad-home-split">
			<div class="tad-home-media-card tad-reveal">
				<img src="<?php echo esc_url( $image_defaults['calendar'] ); ?>" alt="<?php echo esc_attr__( 'iPad mockup displaying the 2026 Uganda Harvest Calendar and sourcing windows for export crops.', 'trade-africa-direct' ); ?>">
				<div class="tad-home-year-card">
					<strong>2026</strong>
					<span><?php esc_html_e( 'Harvest Calendar Now Available', 'trade-africa-direct' ); ?></span>
				</div>
			</div>
			<div class="tad-home-form-card tad-reveal tad-reveal--delay-1">
				<p class="tad-home-eyebrow"><?php esc_html_e( 'Free Resource', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Plan Your 2026 Sourcing with the Uganda Harvest Calendar', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'Stay ahead of market fluctuations. Download our data-driven guide covering peak harvest seasons, historical FOB price trends, and expected yields for Uganda top export crops.', 'trade-africa-direct' ); ?></p>
				<form class="tad-home-form" action="<?php echo esc_url( $calendar_url ); ?>" method="get">
					<div class="tad-home-form__row">
						<label>
							<span><?php esc_html_e( 'Name', 'trade-africa-direct' ); ?></span>
							<input type="text" name="name" placeholder="<?php echo esc_attr__( 'Your full name', 'trade-africa-direct' ); ?>">
						</label>
						<label>
							<span><?php esc_html_e( 'Corporate Email', 'trade-africa-direct' ); ?></span>
							<input type="email" name="email" placeholder="<?php echo esc_attr__( 'name@company.com', 'trade-africa-direct' ); ?>">
						</label>
					</div>
					<div class="tad-home-form__row">
						<label>
							<span><?php esc_html_e( 'Country of Import', 'trade-africa-direct' ); ?></span>
							<input type="text" name="country" placeholder="<?php echo esc_attr__( 'Germany, USA, UAE', 'trade-africa-direct' ); ?>">
						</label>
						<label>
							<span><?php esc_html_e( 'Product of Interest', 'trade-africa-direct' ); ?></span>
							<select name="product">
								<option value=""><?php esc_html_e( 'Select a product', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Dried Fruits', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Fresh Avocados', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Nilotica Shea Butter', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Specialty Coffee', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Cocoa Beans', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Freshwater Fish', 'trade-africa-direct' ); ?></option>
								<option><?php esc_html_e( 'Multiple Products', 'trade-africa-direct' ); ?></option>
							</select>
						</label>
					</div>
					<button class="tad-home-button tad-home-button--primary" type="submit"><?php esc_html_e( 'Download PDF', 'trade-africa-direct' ); ?></button>
				</form>
			</div>
		</div>
	</section>

	<section class="tad-home-section tad-home-transparency" id="transparency">
		<div class="tad-home-container tad-home-split">
			<div class="tad-home-copy tad-reveal">
				<p class="tad-home-eyebrow"><?php esc_html_e( 'Open Doors Policy', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Facility Inspections and Live Audits', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'We believe in full transparency. We invite serious procurement teams to visit our facility in Kampala or request a live video walk-through to inspect our sorting and packing protocols.', 'trade-africa-direct' ); ?></p>
				<a class="tad-home-button tad-home-button--primary" href="<?php echo esc_url( $facility_url ); ?>"><?php esc_html_e( 'Book a Facility Walkthrough', 'trade-africa-direct' ); ?></a>
			</div>
			<div class="tad-home-audit-grid tad-reveal tad-reveal--delay-1">
				<figure class="tad-home-audit-grid__large">
					<img src="<?php echo esc_url( $image_defaults['warehouse'] ); ?>" alt="<?php echo esc_attr__( 'Real warehouse staff in safety gear inspecting sorting tables and export packaging in Kampala.', 'trade-africa-direct' ); ?>">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $image_defaults['packing'] ); ?>" alt="<?php echo esc_attr__( 'Close-up of branded export cartons, sealed packaging, and batch labels ready for inspection.', 'trade-africa-direct' ); ?>">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $image_defaults['inspection'] ); ?>" alt="<?php echo esc_attr__( 'Quality control team conducting a live facility audit of sorting and packing protocols.', 'trade-africa-direct' ); ?>">
				</figure>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
