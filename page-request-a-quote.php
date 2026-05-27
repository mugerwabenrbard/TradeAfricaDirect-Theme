<?php
/**
 * Template Name: Contact — Request a B2B Export Quote
 *
 * High-intent procurement intake page for export quote requests.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$portfolio_url = home_url( '/export-portfolio/' );

$images = [
	'meeting'   => tad_get_theme_image( 'quote_meeting' ),
	'warehouse' => tad_get_theme_image( 'quote_warehouse' ),
];

$trust_signals = [
	[
		'icon'  => __( '01', 'trade-africa-direct' ),
		'title' => __( 'Secure', 'trade-africa-direct' ),
		'body'  => __( 'Your data is handled with 100% B2B confidentiality.', 'trade-africa-direct' ),
	],
	[
		'icon'  => __( '02', 'trade-africa-direct' ),
		'title' => __( 'Technical', 'trade-africa-direct' ),
		'body'  => __( 'We provide full specs and lab results upon request.', 'trade-africa-direct' ),
	],
	[
		'icon'  => __( '03', 'trade-africa-direct' ),
		'title' => __( 'Global', 'trade-africa-direct' ),
		'body'  => __( 'Serving all major global ports (Rotterdam, Jebel Ali, Newark, etc.).', 'trade-africa-direct' ),
	],
];

$products = [
	__( 'Dried Fruits', 'trade-africa-direct' ),
	__( 'Hass Avocados', 'trade-africa-direct' ),
	__( 'Macadamia', 'trade-africa-direct' ),
	__( 'Shea Butter', 'trade-africa-direct' ),
	__( 'Coffee', 'trade-africa-direct' ),
	__( 'Cocoa', 'trade-africa-direct' ),
	__( 'Nile Perch', 'trade-africa-direct' ),
];

$certifications = [
	__( 'Phytosanitary', 'trade-africa-direct' ),
	__( 'EUR.1', 'trade-africa-direct' ),
	__( 'Organic', 'trade-africa-direct' ),
	__( 'Halal', 'trade-africa-direct' ),
	__( 'Other', 'trade-africa-direct' ),
];

$process = [
	[
		'title' => __( 'Technical Review', 'trade-africa-direct' ),
		'body'  => __( 'Our team reviews your specs against current harvest data and stock levels in Kampala.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Formal Quote', 'trade-africa-direct' ),
		'body'  => __( 'You receive a PDF quote including current FOB/CIF pricing, lead times, and payment terms (LC/TT).', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Sample Verification', 'trade-africa-direct' ),
		'body'  => __( 'If the quote is accepted, we dispatch a 1KG commercial sample via DHL for your QA lab testing.', 'trade-africa-direct' ),
	],
	[
		'title' => __( 'Contract & Loading', 'trade-africa-direct' ),
		'body'  => __( 'Upon sample approval and deposit/LC issuance, we begin the grading, packing, and phytosanitary clearing for your shipment.', 'trade-africa-direct' ),
	],
];

$partners = [
	__( 'DHL', 'trade-africa-direct' ),
	__( 'Maersk', 'trade-africa-direct' ),
	__( 'Emirates SkyCargo', 'trade-africa-direct' ),
	__( 'MSC', 'trade-africa-direct' ),
];

get_header();
?>

<main id="content" class="tad-contact">
	<section class="tad-contact-hero">
		<div class="tad-contact-container">
			<div class="tad-contact-hero__head tad-reveal">
				<p class="tad-contact-eyebrow"><?php esc_html_e( 'Contact Us', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'Request a Commercial Export', 'trade-africa-direct' ); ?> <span><?php esc_html_e( 'Quote (2026)', 'trade-africa-direct' ); ?></span></h1>
				<p><?php esc_html_e( 'Streamline your procurement process. Provide your technical requirements below, and our Kampala-based export team will provide a detailed FOB or CIF quote within 24–48 hours.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-contact-trust">
				<?php foreach ( $trust_signals as $index => $signal ) : ?>
					<article class="tad-contact-trust__card tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index + 1, 3 ) ); ?>">
						<span class="tad-contact-trust__icon"><?php echo esc_html( $signal['icon'] ); ?></span>
						<span>
							<strong><?php echo esc_html( $signal['title'] ); ?></strong>
							<span><?php echo esc_html( $signal['body'] ); ?></span>
						</span>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-contact-main">
		<div class="tad-contact-container tad-contact-main__inner">
			<aside class="tad-contact-side tad-reveal tad-reveal--from-left">
				<div class="tad-contact-side__intro">
					<p class="tad-contact-eyebrow tad-contact-eyebrow--dark"><?php esc_html_e( 'Procurement Intake', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Technical Sourcing Requirements', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'This is not a standard contact form. It is designed to gather the technical data we need to generate a professional FOB or CIF quote without five follow-up emails.', 'trade-africa-direct' ); ?></p>
				</div>

				<div class="tad-contact-hotline">
					<h3><?php esc_html_e( 'Need an Immediate Answer?', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'If you are currently at a trade show or have an urgent supply chain gap, connect directly with our Head of Export Sales via WhatsApp Business.', 'trade-africa-direct' ); ?></p>
					<a href="https://wa.me/256000000000"><?php esc_html_e( 'Chat with us on WhatsApp', 'trade-africa-direct' ); ?></a>
				</div>

				<div class="tad-contact-image">
					<img src="<?php echo esc_url( $images['meeting'] ); ?>" alt="<?php echo esc_attr__( 'Export procurement team reviewing commercial quote requirements with an international buyer.', 'trade-africa-direct' ); ?>" loading="lazy">
					<div class="tad-contact-image__badge">
						<strong><?php esc_html_e( '24–48 Hours', 'trade-africa-direct' ); ?></strong>
						<span><?php esc_html_e( 'Typical formal quote turnaround after technical review.', 'trade-africa-direct' ); ?></span>
					</div>
				</div>
			</aside>

			<div class="tad-contact-form-card tad-reveal tad-reveal--from-right">
				<div class="tad-contact-form-card__head">
					<span>
						<h2><?php esc_html_e( 'Technical Sourcing Requirements', 'trade-africa-direct' ); ?></h2>
						<p><?php esc_html_e( 'Provide your commercial, product, logistics, and certification requirements below.', 'trade-africa-direct' ); ?></p>
					</span>
					<span class="tad-contact-form-card__send" aria-hidden="true">+</span>
				</div>

				<form class="tad-contact-form" action="#" method="post">
					<fieldset class="tad-contact-fieldset">
						<legend><?php esc_html_e( '1. Basic Information', 'trade-africa-direct' ); ?></legend>
						<div class="tad-contact-grid">
							<div class="tad-contact-field">
								<label for="tad-full-name"><?php esc_html_e( 'Full Name:', 'trade-africa-direct' ); ?></label>
								<input id="tad-full-name" type="text" name="full_name" autocomplete="name">
							</div>
							<div class="tad-contact-field">
								<label for="tad-job-title"><?php esc_html_e( 'Job Title / Role:', 'trade-africa-direct' ); ?></label>
								<input id="tad-job-title" type="text" name="job_title" placeholder="<?php echo esc_attr__( 'e.g., Procurement Manager', 'trade-africa-direct' ); ?>">
							</div>
							<div class="tad-contact-field">
								<label for="tad-company"><?php esc_html_e( 'Company Name:', 'trade-africa-direct' ); ?></label>
								<input id="tad-company" type="text" name="company" autocomplete="organization">
							</div>
							<div class="tad-contact-field">
								<label for="tad-email"><?php esc_html_e( 'Corporate Email:', 'trade-africa-direct' ); ?></label>
								<input id="tad-email" type="email" name="email" autocomplete="email">
							</div>
							<div class="tad-contact-field tad-contact-field--full">
								<label for="tad-website"><?php esc_html_e( 'Company Website:', 'trade-africa-direct' ); ?></label>
								<input id="tad-website" type="url" name="website" autocomplete="url">
							</div>
						</div>
					</fieldset>

					<fieldset class="tad-contact-fieldset">
						<legend><?php esc_html_e( '2. Product & Volume Specifications', 'trade-africa-direct' ); ?></legend>
						<div class="tad-contact-grid">
							<div class="tad-contact-field">
								<label for="tad-product"><?php esc_html_e( 'Primary Product of Interest:', 'trade-africa-direct' ); ?></label>
								<select id="tad-product" name="product">
									<option value=""><?php esc_html_e( 'Select a product', 'trade-africa-direct' ); ?></option>
									<?php foreach ( $products as $product ) : ?>
										<option><?php echo esc_html( $product ); ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="tad-contact-field">
								<label for="tad-volume"><?php esc_html_e( 'Target Volume / Quantity:', 'trade-africa-direct' ); ?></label>
								<input id="tad-volume" type="text" name="volume" placeholder="<?php echo esc_attr__( 'e.g., 5 Metric Tons / 1x20ft Container', 'trade-africa-direct' ); ?>">
							</div>
							<div class="tad-contact-field">
								<label for="tad-frequency"><?php esc_html_e( 'Frequency of Order:', 'trade-africa-direct' ); ?></label>
								<select id="tad-frequency" name="frequency">
									<option><?php esc_html_e( 'One-time Spot Buy', 'trade-africa-direct' ); ?></option>
									<option><?php esc_html_e( 'Monthly Contract', 'trade-africa-direct' ); ?></option>
									<option><?php esc_html_e( 'Quarterly Contract', 'trade-africa-direct' ); ?></option>
								</select>
							</div>
							<div class="tad-contact-field">
								<label for="tad-grade"><?php esc_html_e( 'Target Grade / Specification:', 'trade-africa-direct' ); ?></label>
								<input id="tad-grade" type="text" name="grade" placeholder="<?php echo esc_attr__( 'e.g., Screen 18, Grade A, Moisture <12%', 'trade-africa-direct' ); ?>">
							</div>
						</div>
					</fieldset>

					<fieldset class="tad-contact-fieldset">
						<legend><?php esc_html_e( '3. Logistics & Terms', 'trade-africa-direct' ); ?></legend>
						<div class="tad-contact-grid">
							<div class="tad-contact-field">
								<label for="tad-incoterms"><?php esc_html_e( 'Preferred Incoterms:', 'trade-africa-direct' ); ?></label>
								<select id="tad-incoterms" name="incoterms">
									<option><?php esc_html_e( 'FOB (Mombasa/Entebbe)', 'trade-africa-direct' ); ?></option>
									<option><?php esc_html_e( 'CIF (Destination Port)', 'trade-africa-direct' ); ?></option>
									<option><?php esc_html_e( 'EXW (Kampala)', 'trade-africa-direct' ); ?></option>
								</select>
							</div>
							<div class="tad-contact-field">
								<label for="tad-destination"><?php esc_html_e( 'Destination Port / City:', 'trade-africa-direct' ); ?></label>
								<input id="tad-destination" type="text" name="destination">
							</div>
							<div class="tad-contact-field tad-contact-field--full">
								<span><?php esc_html_e( 'Preferred Shipping Method:', 'trade-africa-direct' ); ?></span>
								<div class="tad-contact-radio" role="radiogroup" aria-label="<?php echo esc_attr__( 'Preferred Shipping Method', 'trade-africa-direct' ); ?>">
									<label class="tad-contact-option">
										<input type="radio" name="shipping_method" value="air">
										<?php esc_html_e( 'Air Freight', 'trade-africa-direct' ); ?>
									</label>
									<label class="tad-contact-option">
										<input type="radio" name="shipping_method" value="sea">
										<?php esc_html_e( 'Sea Freight', 'trade-africa-direct' ); ?>
									</label>
								</div>
							</div>
							<div class="tad-contact-field tad-contact-field--full">
								<span class="tad-contact-checks__label"><?php esc_html_e( 'Required Certifications:', 'trade-africa-direct' ); ?></span>
								<div class="tad-contact-checks">
									<?php foreach ( $certifications as $certification ) : ?>
										<label class="tad-contact-option">
											<input type="checkbox" name="certifications[]" value="<?php echo esc_attr( sanitize_title( $certification ) ); ?>">
											<?php echo esc_html( $certification ); ?>
										</label>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset class="tad-contact-fieldset">
						<legend><?php esc_html_e( '4. Additional Context', 'trade-africa-direct' ); ?></legend>
						<div class="tad-contact-grid">
							<div class="tad-contact-field tad-contact-field--full">
								<label for="tad-message"><?php esc_html_e( 'Message / Special Instructions:', 'trade-africa-direct' ); ?></label>
								<textarea id="tad-message" name="message"></textarea>
							</div>
						</div>
					</fieldset>

					<div class="tad-contact-form__foot">
						<button class="tad-contact-btn tad-contact-btn--accent" type="submit"><?php esc_html_e( 'Submit Request for Quote', 'trade-africa-direct' ); ?></button>
						<p class="tad-contact-form__note"><?php esc_html_e( 'By submitting this request, you agree to be contacted by our export team for pricing, documentation, and logistics clarification.', 'trade-africa-direct' ); ?></p>
					</div>
				</form>
			</div>
		</div>
	</section>

	<section class="tad-contact-process">
		<div class="tad-contact-container">
			<div class="tad-contact-section-head tad-reveal">
				<p class="tad-contact-eyebrow"><?php esc_html_e( 'What Happens Next?', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Our 4-Step Quote-to-Shipment Process', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'This section manages the buyer’s expectations and proves your professional workflow.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-contact-process-grid">
				<?php foreach ( $process as $index => $step ) : ?>
					<article class="tad-contact-process-card tad-reveal tad-reveal--delay-<?php echo esc_attr( min( $index, 3 ) ); ?>">
						<span class="tad-contact-process-card__num"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
						<h3><?php echo esc_html( $step['title'] ); ?></h3>
						<p><?php echo esc_html( $step['body'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="tad-contact-whatsapp">
		<div class="tad-contact-container tad-contact-whatsapp__inner">
			<div class="tad-contact-whatsapp__copy tad-reveal tad-reveal--from-left">
				<p class="tad-contact-eyebrow tad-contact-eyebrow--dark"><?php esc_html_e( 'Emergency Contact', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Need an Immediate Answer?', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'If you are currently at a trade show or have an urgent supply chain gap, connect directly with our Head of Export Sales via WhatsApp Business.', 'trade-africa-direct' ); ?></p>
				<a class="tad-contact-btn tad-contact-btn--accent" href="https://wa.me/256000000000"><?php esc_html_e( 'Chat with us on WhatsApp', 'trade-africa-direct' ); ?></a>
			</div>

			<div class="tad-contact-whatsapp__card tad-reveal tad-reveal--from-right">
				<strong><?php esc_html_e( '< 2 Hours', 'trade-africa-direct' ); ?></strong>
				<span><?php esc_html_e( 'Typical Response Time: < 2 Hours (EAT Timezone)', 'trade-africa-direct' ); ?></span>
			</div>
		</div>
	</section>

	<section class="tad-contact-partners">
		<div class="tad-contact-container tad-contact-partners__inner">
			<div class="tad-contact-partners__copy tad-reveal tad-reveal--from-left">
				<p class="tad-contact-eyebrow"><?php esc_html_e( 'Trusted Logistics Partners', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'The Pipes to Move the Cargo', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'We work with air, courier, sea, and container logistics partners to move samples, perishables, and full container loads through Entebbe and Mombasa.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-contact-logo-grid tad-reveal tad-reveal--from-right">
				<?php foreach ( $partners as $partner ) : ?>
					<div class="tad-contact-logo"><?php echo esc_html( $partner ); ?></div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
