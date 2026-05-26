<?php
/**
 * Template Name: Seed Product Page
 *
 * Generic reusable template for seed, nut, and legume commodity pages.
 * Duplicate this file and rename it for each new seed product, then
 * update the content sections below to match the product.
 *
 * Products that use or can use this template:
 *   - Macadamia Nuts (page-macadamia-nuts-uganda.php)
 *   - Sesame Seeds
 *   - Sunflower Seeds
 *   - Soya Beans
 *   - Groundnuts / Peanuts
 *
 * Assign to a WordPress page via: Edit Page → Page Attributes → Template.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$quote_url    = home_url( '/request-a-quote/' );
$products_url = home_url( '/#portfolio' );

// ─────────────────────────────────────────────────────────────────────────────
// EDIT THIS DATA BLOCK for each specific seed product.
// ─────────────────────────────────────────────────────────────────────────────
$product = [
	// Hero section
	'eyebrow'             => __( 'Seeds & Nuts · Uganda Origin', 'trade-africa-direct' ),
	'h1_prefix'           => __( 'Wholesale ', 'trade-africa-direct' ),
	'h1_highlight'        => __( '[Product Name]', 'trade-africa-direct' ),
	'h1_suffix'           => __( ': Uganda Origin', 'trade-africa-direct' ),
	'sub_headline'        => __( '[Replace with product sub-headline — key buyer benefits in one sentence.]', 'trade-africa-direct' ),
	'breadcrumb_label'    => __( '[Product Name]', 'trade-africa-direct' ),
	'hero_badge_value'    => __( '[Key Stat]', 'trade-africa-direct' ),
	'hero_badge_label'    => __( '[Stat Label]', 'trade-africa-direct' ),
	'hero_img_src'        => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=1400&h=500&fit=crop&q=80',
	'hero_img_alt'        => __( '[Describe the hero image for screen readers and SEO]', 'trade-africa-direct' ),
	// Quick Specs Strip (4 items)
	'spec_1_label'        => __( 'Origin', 'trade-africa-direct' ),
	'spec_1_value'        => __( '[Growing region, Uganda]', 'trade-africa-direct' ),
	'spec_2_label'        => __( 'Purity', 'trade-africa-direct' ),
	'spec_2_value'        => __( '[Purity claim, e.g. 99.9% Shell-Free]', 'trade-africa-direct' ),
	'spec_3_label'        => __( 'Packaging', 'trade-africa-direct' ),
	'spec_3_value'        => __( '[Packaging format, e.g. Vacuum-sealed 25KG bags]', 'trade-africa-direct' ),
	'spec_4_label'        => __( 'Capacity', 'trade-africa-direct' ),
	'spec_4_value'        => __( '[Monthly export volume, e.g. 20 MT/month]', 'trade-africa-direct' ),
	// Overview section
	'overview_eyebrow'    => __( 'Product Overview', 'trade-africa-direct' ),
	'overview_h2_plain'   => __( 'Why Source ', 'trade-africa-direct' ),
	'overview_h2_em'      => __( '[Product] from Uganda?', 'trade-africa-direct' ),
	'overview_p1'         => __( '[First paragraph — describe the product\'s unique origin story, growing conditions, and what makes Uganda a premium source. 2–3 sentences focused on brix, altitude, soil, or climate advantage.]', 'trade-africa-direct' ),
	'overview_p2'         => __( '[Second paragraph — describe your company\'s processing model: traceability, small-batch, fresh-to-market, certifications. End with the key buyer segments: confectionery, snack, industrial food.]', 'trade-africa-direct' ),
	'overview_badge_val'  => __( '[Purity/Grade]', 'trade-africa-direct' ),
	'overview_badge_lbl'  => __( '[Badge label, e.g. Certifications]', 'trade-africa-direct' ),
	'overview_img_src'    => 'https://images.unsplash.com/photo-1526040652367-ac003a0475fe?w=700&h=460&fit=crop&q=80',
	'overview_img_alt'    => __( '[Overview image alt text]', 'trade-africa-direct' ),
	// CTA section
	'cta_h2'              => __( 'Secure Your [Product] Supply for 2026', 'trade-africa-direct' ),
	'cta_body'            => __( 'We provide Certificate of Analysis (COA) and microbiological test results with every batch.', 'trade-africa-direct' ),
	'cta_btn1'            => __( 'Request Bulk Price List (FOB/CIF)', 'trade-africa-direct' ),
	'cta_btn2'            => __( 'Order Commercial Samples (1KG)', 'trade-africa-direct' ),
	'cta_img_src'         => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=680&h=400&fit=crop&q=80',
	'cta_img_alt'         => __( '[CTA image alt text]', 'trade-africa-direct' ),
	// Logistics
	'packaging_steps'     => [
		[ 'label' => __( 'Primary Packaging', 'trade-africa-direct' ),       'text' => __( '[e.g. Vacuum-sealed aluminum foil bags, 10KG or 25KG]', 'trade-africa-direct' ) ],
		[ 'label' => __( 'Nitrogen Atmosphere', 'trade-africa-direct' ),      'text' => __( '[e.g. Nitrogen-flushed (N2) to prevent oxidation and rancidity]', 'trade-africa-direct' ) ],
		[ 'label' => __( 'Outer Carton', 'trade-africa-direct' ),             'text' => __( '[e.g. Heavy-duty corrugated fiberboard cartons on EUR pallets]', 'trade-africa-direct' ) ],
		[ 'label' => __( 'Shipping', 'trade-africa-direct' ),                 'text' => __( '[e.g. Sea Freight via Mombasa / Air Freight via Entebbe. Recommend +10°C storage on arrival]', 'trade-africa-direct' ) ],
	],
];

// Technical specs table rows: [ attribute, spec_pill_text, note ]
$spec_rows = [
	[ __( 'Moisture Content', 'trade-africa-direct' ),       __( '< [X]%', 'trade-africa-direct' ),          __( '[Standard / shelf-stability note]', 'trade-africa-direct' ) ],
	[ __( 'Total Oil Content', 'trade-africa-direct' ),      __( '[X]% – [Y]%', 'trade-africa-direct' ),      __( '[Method, e.g. Solvent extraction]', 'trade-africa-direct' ) ],
	[ __( 'Free Fatty Acids', 'trade-africa-direct' ),       __( '< [X]%', 'trade-africa-direct' ),           __( '[Freshness indicator]', 'trade-africa-direct' ) ],
	[ __( 'Purity', 'trade-africa-direct' ),                 __( '[X]% Shell/Foreign Matter Free', 'trade-africa-direct' ), __( '[Sorting method]', 'trade-africa-direct' ) ],
	[ __( 'Aflatoxin (Total)', 'trade-africa-direct' ),      __( '< [X] µg/kg', 'trade-africa-direct' ),      __( 'Strict EU Mycotoxin Compliance', 'trade-africa-direct' ) ],
	[ __( 'Peroxide Value', 'trade-africa-direct' ),         __( '< [X] mEq/kg', 'trade-africa-direct' ),     __( '[Freshness / oxidation indicator]', 'trade-africa-direct' ) ],
	[ __( 'Microbiology (TPC)', 'trade-africa-direct' ),     __( '< [X] cfu/g', 'trade-africa-direct' ),      __( 'Standard Food Safety method', 'trade-africa-direct' ) ],
];

// Grading cards: [ size_label, title, description ]
$grade_cards = [
	[ __( '[Size/Grade 1]', 'trade-africa-direct' ), __( '[Grade Name] — [Description]', 'trade-africa-direct' ), __( 'Ideal for [application, e.g. luxury retail, chocolate coating, snacking].', 'trade-africa-direct' ) ],
	[ __( '[Size/Grade 2]', 'trade-africa-direct' ), __( '[Grade Name] — [Description]', 'trade-africa-direct' ), __( 'The industry standard for [application]. [Details about size range and usage].', 'trade-africa-direct' ) ],
	[ __( '[Size/Grade 3]', 'trade-africa-direct' ), __( '[Grade Name] — [Description]', 'trade-africa-direct' ), __( 'Perfect for [application, e.g. bulk retail, trail mixes, granola manufacturing].', 'trade-africa-direct' ) ],
	[ __( '[Size/Grade 4]', 'trade-africa-direct' ), __( '[Grade Name] — [Description]', 'trade-africa-direct' ), __( 'Preferred by [end user, e.g. bakers, chocolatiers, ingredient manufacturers].', 'trade-africa-direct' ) ],
];
// ─────────────────────────────────────────────────────────────────────────────
?>

<main id="content" class="tad-product-page">

<!-- ══ HERO ══════════════════════════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-top">
    <div class="con">
      <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'trade-africa-direct' ); ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'trade-africa-direct' ); ?></a><span>›</span>
        <a href="<?php echo esc_url( $products_url ); ?>"><?php esc_html_e( 'Products', 'trade-africa-direct' ); ?></a><span>›</span>
        <span style="color:var(--gd)"><?php echo esc_html( $product['breadcrumb_label'] ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php echo esc_html( $product['eyebrow'] ); ?></div>
          <h1><?php echo esc_html( $product['h1_prefix'] ); ?><em><?php echo esc_html( $product['h1_highlight'] ); ?></em><?php echo esc_html( $product['h1_suffix'] ); ?></h1>
          <p class="hero-sub"><?php echo esc_html( $product['sub_headline'] ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Pricing Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request Bulk Price List', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View Technical Specs', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="<?php echo esc_url( $product['hero_img_src'] ); ?>"
             alt="<?php echo esc_attr( $product['hero_img_alt'] ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn"><?php echo esc_html( $product['hero_badge_value'] ); ?></div>
            <div class="hl"><?php echo esc_html( $product['hero_badge_label'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ QUICK SPECS STRIP ═════════════════════════════════════════════════════ -->
<div class="ss">
  <div class="con">
    <div class="ss-row">
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 2C7 7 4 12 4 17a8 8 0 0016 0c0-5-3-10-8-15z"/><path d="M12 12c0 3 2 5 4 5"/></svg></div>
        <div>
          <span class="ss-lbl"><?php echo esc_html( $product['spec_1_label'] ); ?></span>
          <span class="ss-val"><?php echo esc_html( $product['spec_1_value'] ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php echo esc_html( $product['spec_2_label'] ); ?></span>
          <span class="ss-val"><?php echo esc_html( $product['spec_2_value'] ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <div>
          <span class="ss-lbl"><?php echo esc_html( $product['spec_3_label'] ); ?></span>
          <span class="ss-val"><?php echo esc_html( $product['spec_3_value'] ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <div>
          <span class="ss-lbl"><?php echo esc_html( $product['spec_4_label'] ); ?></span>
          <span class="ss-val"><?php echo esc_html( $product['spec_4_value'] ); ?></span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══ OVERVIEW ══════════════════════════════════════════════════════════════ -->
<section class="sec ov">
  <div class="con">
    <div class="ov-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php echo esc_html( $product['overview_eyebrow'] ); ?></div>
        <h2><?php echo esc_html( $product['overview_h2_plain'] ); ?><em><?php echo esc_html( $product['overview_h2_em'] ); ?></em></h2>
        <p><?php echo esc_html( $product['overview_p1'] ); ?></p>
        <p><?php echo esc_html( $product['overview_p2'] ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="<?php echo esc_url( $product['overview_img_src'] ); ?>"
               alt="<?php echo esc_attr( $product['overview_img_alt'] ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num"><?php echo esc_html( $product['overview_badge_val'] ); ?></div>
            <div class="ov-b-lbl"><?php echo esc_html( $product['overview_badge_lbl'] ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TECHNICAL SPECS TABLE ════════════════════════════════════════════════ -->
<section class="sec tbl-sec" id="specs">
  <div class="con">
    <div class="eyebrow tad-reveal"><?php esc_html_e( 'Technical Data', 'trade-africa-direct' ); ?></div>
    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Physical & Chemical Analysis', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Certificate of Analysis and microbiological test results provided with every batch.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Feature / Parameter', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Specification / Limit', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Standard / Method / Note', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <?php foreach ( $spec_rows as $row ) : ?>
          <tr>
            <td><?php echo esc_html( $row[0] ); ?></td>
            <td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php echo esc_html( $row[1] ); ?></span></td>
            <td><?php echo esc_html( $row[2] ); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ GRADING / SIZING ══════════════════════════════════════════════════════ -->
<section class="sec grade-sec">
  <div class="con">
    <div class="tad-reveal">
      <div class="eyebrow"><?php esc_html_e( 'Kernel / Seed Grading', 'trade-africa-direct' ); ?></div>
      <h2 style="font-family:'Work Sans',sans-serif;font-size:36px;font-weight:600;line-height:1.13;letter-spacing:-.02em;color:var(--gd);margin-bottom:12px"><?php esc_html_e( 'Standardized Sizing for Global Manufacturers', 'trade-africa-direct' ); ?></h2>
      <p class="grade-intro-text"><?php esc_html_e( 'We grade our product according to international industry standards to ensure seamless integration into your production lines.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="grade-grid tad-reveal tad-reveal--delay-1">
      <?php foreach ( $grade_cards as $card ) : ?>
      <div class="grade-card">
        <div class="grade-size"><?php echo esc_html( $card[0] ); ?></div>
        <h4><?php echo esc_html( $card[1] ); ?></h4>
        <p><?php echo esc_html( $card[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ PACKAGING & SHELF LIFE ════════════════════════════════════════════════ -->
<section class="sec log" style="background:var(--slo)">
  <div class="con">
    <div class="log-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Packaging & Logistics', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Engineered for Global Transit', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'Seeds and nuts are highly sensitive to oxygen, humidity, and light. Our packaging is designed to maintain "Farm-Gate Freshness" throughout transit.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <?php foreach ( $product['packaging_steps'] as $i => $step ) : ?>
          <div class="step">
            <div class="step-n"><?php echo esc_html( $i + 1 ); ?></div>
            <div>
              <span class="step-lbl"><?php echo esc_html( $step['label'] ); ?></span>
              <span class="step-txt"><?php echo esc_html( $step['text'] ); ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Vacuum-sealed export packaging ready for global transit', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ══ CTA SECTION ══════════════════════════════════════════════════════════ -->
<section class="sec cta-sec" id="cta">
  <div class="cta-glow"></div><div class="cta-glow2"></div>
  <div class="con">
    <div class="cta-grid">
      <div class="cta-img tad-reveal">
        <img src="<?php echo esc_url( $product['cta_img_src'] ); ?>"
             alt="<?php echo esc_attr( $product['cta_img_alt'] ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php echo esc_html( $product['cta_h2'] ); ?></h2>
        <p class="cta-body"><?php echo esc_html( $product['cta_body'] ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php echo esc_html( $product['cta_btn1'] ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php echo esc_html( $product['cta_btn2'] ); ?></a>
        </div>
        <div class="cta-compliance">
          <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          <p><?php esc_html_e( 'Every shipment includes the ', 'trade-africa-direct' ); ?><strong><?php esc_html_e( 'export document trinity', 'trade-africa-direct' ); ?></strong><?php esc_html_e( ': Phytosanitary Certificate · EUR.1 Movement Certificate (duty-free EU entry) · Certificate of Origin (URSB)', 'trade-africa-direct' ); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ BACK NAV ══════════════════════════════════════════════════════════════ -->
<div class="back">
  <div class="con back-i">
    <a href="<?php echo esc_url( $products_url ); ?>" class="back-lnk">
      <svg viewBox="0 0 24 24"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
      <?php esc_html_e( 'Back to All Products', 'trade-africa-direct' ); ?>
    </a>
    <span class="back-r"><?php esc_html_e( 'Need a custom solution? ', 'trade-africa-direct' ); ?><a href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Contact our export team →', 'trade-africa-direct' ); ?></a></span>
  </div>
</div>

</main>

<?php get_footer(); ?>
