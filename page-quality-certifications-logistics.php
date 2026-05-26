<?php
/**
 * Template Name: Quality Assurance, Certifications & Logistics
 *
 * Compliance, documentation, and shipping infrastructure page.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$quote_url     = home_url( '/request-a-quote/' );
$incoterms_url = home_url( '/market-insights/sourcing-agricultural-products-uganda/' );

$images = [
	'documents' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&h=900&fit=crop&q=80',
	'lab'       => 'https://images.unsplash.com/photo-1576086213369-97a306d36557?w=1200&h=900&fit=crop&q=80',
	'packing'   => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1200&h=900&fit=crop&q=80',
	'air'       => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&h=760&fit=crop&q=80',
	'sea'       => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=1200&h=760&fit=crop&q=80',
	'warehouse' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&h=900&fit=crop&q=80',
	'stamp'     => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=900&h=700&fit=crop&q=80',
];

$signals = [
	[
		'title' => __( 'Certified', 'trade-africa-direct' ),
		'body'  => __( 'UNBS & MAAIF Approved.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Transparent', 'trade-africa-direct' ),
		'body'  => __( '100% Digital Traceability.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Global Reach', 'trade-africa-direct' ),
		'body'  => __( 'Serving EU, USA, & Middle Eastern Markets.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Security', 'trade-africa-direct' ),
		'body'  => __( 'Verified URSB & Tax Compliant Corporation.', 'trade-africa-direct' ),
	],
];

$proof_items = [
	[
		'mark'  => __( 'MRL', 'trade-africa-direct' ),
		'title' => __( 'Maximum Residue Limits', 'trade-africa-direct' ),
		'body'  => __( 'Destination-country food safety requirements managed before export.', 'trade-africa-direct' ),
	],
	[
		'mark'  => __( 'PHYTO', 'trade-africa-direct' ),
		'title' => __( 'Phytosanitary Readiness', 'trade-africa-direct' ),
		'body'  => __( 'MAAIF inspection and shipment clearance for every plant-based export lot.', 'trade-africa-direct' ),
	],
	[
		'mark'  => __( 'COA', 'trade-africa-direct' ),
		'title' => __( 'Independent Laboratory Analysis', 'trade-africa-direct' ),
		'body'  => __( 'Moisture, microbiology, residue, and lot-specific QA documentation.', 'trade-africa-direct' ),
	],
];

$certifications = [
	[
		'abbr'  => __( 'UNBS', 'trade-africa-direct' ),
		'title' => __( 'UNBS Q-Mark', 'trade-africa-direct' ),
		'body'  => __( 'Ensures all processed goods meet Ugandan national safety standards.', 'trade-africa-direct' ),
	],
	[
		'abbr'  => __( 'MAAIF', 'trade-africa-direct' ),
		'title' => __( 'Phytosanitary Certificate', 'trade-africa-direct' ),
		'body'  => __( 'Issued by MAAIF for every plant-based shipment, guaranteeing freedom from pests and diseases.', 'trade-africa-direct' ),
	],
	[
		'abbr'  => __( 'EUR.1', 'trade-africa-direct' ),
		'title' => __( 'EUR.1 / Form A', 'trade-africa-direct' ),
		'body'  => __( 'Enables duty-free or reduced-tariff entry into the European Union and GSP-eligible countries.', 'trade-africa-direct' ),
	],
	[
		'abbr'  => __( 'HACCP', 'trade-africa-direct' ),
		'title' => __( 'HACCP Protocols', 'trade-africa-direct' ),
		'body'  => __( 'Our fish and fruit processing follows Hazard Analysis Critical Control Point (HACCP) systems.', 'trade-africa-direct' ),
	],
	[
		'abbr'  => __( 'GAP', 'trade-africa-direct' ),
		'title' => __( 'GlobalGAP / Organic', 'trade-africa-direct' ),
		'body'  => __( 'We work with specific farmer groups to maintain GlobalGAP and EU Organic equivalence for specialty contracts.', 'trade-africa-direct' ),
	],
];

$routes = [
	[
		'image' => $images['air'],
		'alt'   => __( 'Cargo aircraft prepared for express air freight through Entebbe International Airport.', 'trade-africa-direct' ),
		'badge' => __( 'Via Entebbe - EBB', 'trade-africa-direct' ),
		'title' => __( '1. The "Express" Air Route (Via Entebbe - EBB)', 'trade-africa-direct' ),
		'facts' => [
			__( 'Ideal For: Fresh Avocados, Chilled Nile Perch, and urgent Cosmetic Samples.', 'trade-africa-direct' ),
			__( 'Transit Time: 12–48 Hours to major global hubs (Brussels, Amsterdam, Dubai, London).', 'trade-africa-direct' ),
			__( 'Capacity: Daily departures with cooling facilities at the airport tarmac.', 'trade-africa-direct' ),
		],
	],
	[
		'image' => $images['sea'],
		'alt'   => __( 'Container vessel at port representing the Mombasa sea freight corridor.', 'trade-africa-direct' ),
		'badge' => __( 'Via Mombasa - MBA', 'trade-africa-direct' ),
		'title' => __( '2. The "Volume" Sea Route (Via Mombasa - MBA)', 'trade-africa-direct' ),
		'facts' => [
			__( 'Ideal For: Dried Fruits, Shea Butter, Coffee, Cocoa, and Frozen Fish.', 'trade-africa-direct' ),
			__( 'Transit Time: 25–35 Days (Port-to-Port).', 'trade-africa-direct' ),
			__( 'Method: Secure road transit from Kampala to Mombasa, followed by 20ft/40ft FCL (Full Container Load) shipping.', 'trade-africa-direct' ),
		],
	],
];

$cold_steps = [
	[
		'title' => __( 'Pre-Cooling', 'trade-africa-direct' ),
		'body'  => __( 'Reducing "field heat" in our Kampala cold rooms within 4 hours of harvest.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Insulated Packaging', 'trade-africa-direct' ),
		'body'  => __( 'Utilizing Styrofoam, gel packs, and thermal blankets for air freight.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Reefer Containers', 'trade-africa-direct' ),
		'body'  => __( 'For sea freight, we utilize state-of-the-art Refrigerated or Controlled Atmosphere (CA) containers to manage $O_2$ and $CO_2$ levels.', 'trade-africa-direct' ),
	],
];

get_header();
?>

<main id="content" class="tad-quality">
	<section class="tad-quality-hero">
		<div class="tad-quality-container tad-quality-hero__inner">
			<div class="tad-quality-hero__copy tad-reveal">
				<p class="tad-quality-eyebrow"><?php esc_html_e( 'Quality Assurance, Certifications & Logistics', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'Global Standards &', 'trade-africa-direct' ); ?> <span><?php esc_html_e( 'Precision Logistics', 'trade-africa-direct' ); ?></span></h1>
				<p><?php esc_html_e( 'Beyond Exporting: We Provide Certainty. Our infrastructure is built on strict international compliance, transparent documentation, and a "Zero-Break" equatorial cold chain.', 'trade-africa-direct' ); ?></p>

				<div class="tad-quality-hero__signals">
					<?php foreach ( $signals as $index => $signal ) : ?>
						<div class="tad-quality-signal tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index, 3 ) ); ?>">
							<span class="tad-quality-signal__icon" aria-hidden="true"></span>
							<span>
								<strong><?php echo esc_html( $signal['title'] ); ?></strong>
								<span><?php echo esc_html( $signal['body'] ); ?></span>
							</span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="tad-quality-hero__visual tad-reveal tad-reveal--from-right">
				<figure>
					<img src="<?php echo esc_url( $images['documents'] ); ?>" alt="<?php echo esc_attr__( 'Official export documentation, stamped certificates, and packing lists prepared for international cargo.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['lab'] ); ?>" alt="<?php echo esc_attr__( 'Laboratory quality assurance team reviewing samples and technical results.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['packing'] ); ?>" alt="<?php echo esc_attr__( 'Export packaging and sealed cartons prepared for safe international shipment.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<div class="tad-quality-hero__badge" aria-hidden="true">
					<strong><?php esc_html_e( '0', 'trade-africa-direct' ); ?></strong>
					<span><?php esc_html_e( 'Breaks tolerated in documentation, traceability, or cold-chain control.', 'trade-africa-direct' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<section class="tad-quality-authority">
		<div class="tad-quality-container tad-quality-authority__inner">
			<div class="tad-quality-section-title tad-reveal tad-reveal--from-left">
				<p class="tad-quality-eyebrow"><?php esc_html_e( 'Export Logistics Authority', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Navigating the Complexity of East African Export Logistics', 'trade-africa-direct' ); ?></h2>
			</div>

			<div class="tad-quality-copy tad-reveal tad-reveal--from-right">
				<p><?php esc_html_e( 'The primary barrier to sourcing from Africa isn’t product quality—it’s logistical reliability and regulatory compliance. At [Your Company Name], we have institutionalized the export process. By maintaining direct relationships with the Uganda National Bureau of Standards (UNBS) and the Ministry of Agriculture (MAAIF), we ensure that every gram of product leaving our Kampala facility meets the "Maximum Residue Limits" (MRLs) and phytosanitary requirements of the destination country.', 'trade-africa-direct' ); ?></p>
				<p><?php esc_html_e( 'Whether we are routing bulk non-perishables through the Port of Mombasa or utilizing high-priority air freight via Entebbe International Airport (EBB), our logistics team manages the complexity so you don’t have to. We provide a seamless "Farm-to-Warehouse" experience, backed by the essential "Holy Trinity" of export documentation: Phytosanitary Certificates, Certificates of Origin (EUR.1), and independent laboratory analysis.', 'trade-africa-direct' ); ?></p>

				<div class="tad-quality-proof">
					<?php foreach ( $proof_items as $index => $item ) : ?>
						<div class="tad-quality-proof__item tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index + 1, 3 ) ); ?>">
							<span class="tad-quality-proof__mark"><?php echo esc_html( $item['mark'] ); ?></span>
							<span>
								<strong><?php echo esc_html( $item['title'] ); ?></strong>
								<span><?php echo esc_html( $item['body'] ); ?></span>
							</span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="tad-quality-framework">
		<div class="tad-quality-container">
			<div class="tad-quality-head tad-reveal">
				<p class="tad-quality-eyebrow"><?php esc_html_e( 'Certification Framework', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Standard Compliance for Global Markets', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'We maintain active certifications to ensure duty-free entry and consumer safety in all major trade blocs.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-quality-cert-grid">
				<?php foreach ( $certifications as $index => $certification ) : ?>
					<article class="tad-quality-cert tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index, 3 ) ); ?>">
						<span class="tad-quality-cert__abbr"><?php echo esc_html( $certification['abbr'] ); ?></span>
						<h3><?php echo esc_html( $certification['title'] ); ?></h3>
						<p><?php echo esc_html( $certification['body'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-quality-routes">
		<div class="tad-quality-container">
			<div class="tad-quality-head tad-quality-head--center tad-reveal">
				<p class="tad-quality-eyebrow"><?php esc_html_e( 'Strategic Shipping Routes', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Optimized Logistics: EBB vs. MBA', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'We select the transit mode based on the biological requirements of the product and the lead-time needs of the buyer.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-quality-route-grid">
				<?php foreach ( $routes as $index => $route ) : ?>
					<article class="tad-quality-route tad-reveal tad-reveal--delay-<?php echo esc_attr( $index + 1 ); ?>">
						<div class="tad-quality-route__image">
							<img src="<?php echo esc_url( $route['image'] ); ?>" alt="<?php echo esc_attr( $route['alt'] ); ?>" loading="lazy">
							<span class="tad-quality-route__badge"><?php echo esc_html( $route['badge'] ); ?></span>
						</div>
						<div class="tad-quality-route__body">
							<h3><?php echo esc_html( $route['title'] ); ?></h3>
							<ul class="tad-quality-route__facts">
								<?php foreach ( $route['facts'] as $fact ) : ?>
									<?php
									$parts = explode( ': ', $fact, 2 );
									?>
									<li>
										<strong><?php echo esc_html( $parts[0] ); ?></strong>
										<span><?php echo esc_html( isset( $parts[1] ) ? $parts[1] : $fact ); ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-quality-cold">
		<div class="tad-quality-container">
			<div class="tad-quality-cold__inner">
				<div class="tad-quality-cold__copy tad-reveal tad-reveal--from-left">
					<p class="tad-quality-eyebrow tad-quality-eyebrow--dark"><?php esc_html_e( 'Zero-Break Cold Chain', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Protecting the Biological Value of Your Cargo', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Temperature fluctuations are the enemy of quality. Our protocol includes:', 'trade-africa-direct' ); ?></p>
				</div>

				<div class="tad-quality-protocol">
					<?php foreach ( $cold_steps as $index => $step ) : ?>
						<article class="tad-quality-protocol__step tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index + 1, 3 ) ); ?>">
							<span class="tad-quality-protocol__num"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
							<span>
								<h3><?php echo esc_html( $step['title'] ); ?></h3>
								<p><?php echo esc_html( $step['body'] ); ?></p>
							</span>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="tad-quality-cta">
		<div class="tad-quality-container tad-quality-cta__inner">
			<div class="tad-quality-cta__visual tad-reveal tad-reveal--from-left">
				<div class="tad-quality-doc-card tad-quality-doc-card--main">
					<img src="<?php echo esc_url( $images['stamp'] ); ?>" alt="<?php echo esc_attr__( 'Stamped official export certificate and compliance documents prepared for QA teams.', 'trade-africa-direct' ); ?>" loading="lazy">
				</div>
				<div class="tad-quality-doc-card tad-quality-doc-card--small">
					<img src="<?php echo esc_url( $images['warehouse'] ); ?>" alt="<?php echo esc_attr__( 'Warehouse team preparing export cartons for inspection and shipment.', 'trade-africa-direct' ); ?>" loading="lazy">
				</div>
				<div class="tad-quality-doc-badge" aria-hidden="true">
					<strong><?php esc_html_e( 'Ready', 'trade-africa-direct' ); ?></strong>
					<span><?php esc_html_e( 'For legal and QA review', 'trade-africa-direct' ); ?></span>
				</div>
			</div>

			<div class="tad-quality-cta__copy tad-reveal tad-reveal--from-right">
				<p class="tad-quality-eyebrow"><?php esc_html_e( 'Compliance Packet', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Request our Compliance & Logistics Packet', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'Need to verify our facility registration or see a sample Certificate of Analysis? Our documentation is ready for your legal and QA teams.', 'trade-africa-direct' ); ?></p>
				<div class="tad-quality-cta__actions">
					<a class="tad-quality-btn tad-quality-btn--primary" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Full Certification Portfolio', 'trade-africa-direct' ); ?></a>
					<a class="tad-quality-btn tad-quality-btn--ghost" href="<?php echo esc_url( $incoterms_url ); ?>"><?php esc_html_e( 'Download Shipping & Incoterms Guide', 'trade-africa-direct' ); ?></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
