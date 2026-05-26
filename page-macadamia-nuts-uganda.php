<?php
/**
 * Template Name: Product — Macadamia Nuts (Uganda)
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$quote_url    = home_url( '/request-a-quote/' );
$products_url = home_url( '/#portfolio' );
?>

<main id="content" class="tad-product-page">

<!-- ══ HERO ══════════════════════════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-top">
    <div class="con">
      <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'trade-africa-direct' ); ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'trade-africa-direct' ); ?></a><span>›</span>
        <a href="<?php echo esc_url( $products_url ); ?>"><?php esc_html_e( 'Products', 'trade-africa-direct' ); ?></a><span>›</span>
        <span style="color:var(--gd)"><?php esc_html_e( 'Macadamia Nuts', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Tree Nuts · Uganda Origin', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Wholesale Raw Macadamia Nuts: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Premium Uganda Origin', 'trade-africa-direct' ); ?></em></h1>
          <p class="hero-sub"><?php esc_html_e( 'Sustainably Sourced, Ethically Processed, and Nutritiously Dense. We supply high-grade Macadamia kernels (Style 0–4) to global food manufacturers and snack wholesalers.', 'trade-africa-direct' ); ?></p>
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
        <img src="https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=1400&h=500&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Premium raw macadamia kernels sorted and vacuum-packed for export — Uganda Origin', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">>72%</div>
            <div class="hl"><?php esc_html_e( 'Natural Oil Content', 'trade-africa-direct' ); ?></div>
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
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Purity', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '100% Raw, Non-GMO Kernels.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Style Options', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Style 0 (Wholes) to Style 4 (Halves/Pieces).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Packaging', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Nitrogen-Flushed Vacuum Tins or Bags.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Social Impact', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Supporting 10,000+ smallholder farmers.', 'trade-africa-direct' ); ?></span>
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
        <div class="eyebrow"><?php esc_html_e( 'Product Overview', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'The Rise of East African Macadamia: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Why Source from Uganda?', 'trade-africa-direct' ); ?></em></h2>
        <p><?php esc_html_e( "Uganda's high-altitude regions provide the perfect microclimate for Macadamia integrifolia. Unlike other origins, our wholesale Macadamia nuts are known for their exceptionally creamy color and a high oil content (over 72%) that results in a superior, buttery crunch.", 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'At Trade Africa Direct, we focus on the "Fresh-to-Market" model. Our nuts are harvested and processed in small batches to prevent the rancidity often found in aged warehouse stocks from larger global competitors. Whether you are a confectionery brand looking for Style 0 whole kernels for chocolate coating or a healthy snack brand seeking Style 1 and 2 halves, our Ugandan Macadamias offer a premium, traceable alternative with a lower carbon footprint.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="https://images.unsplash.com/photo-1526040652367-ac003a0475fe?w=700&h=460&fit=crop&q=80"
               alt="<?php esc_attr_e( 'Creamy white macadamia kernels in a bowl — Uganda high-altitude origin', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">72–76%</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Natural Oil Content', 'trade-africa-direct' ); ?></div>
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
      <h3><?php esc_html_e( 'Physical and Chemical Analysis', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Certificate of Analysis and microbiological test results provided with every batch.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Feature', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Specification / Limit', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Standard / Method', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Color', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Creamy White to Light Ivory', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Visual Inspection', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Moisture Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 1.5%</span></td><td><?php esc_html_e( 'Oven-drying method', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Total Oil Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>72.0% – 76.0%</span></td><td><?php esc_html_e( 'Solvent extraction', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Free Fatty Acids (FFA)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 0.5% (as Oleic Acid)</span></td><td><?php esc_html_e( 'Indicates peak freshness', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Peroxide Value', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 0.5 mEq/kg</span></td><td><?php esc_html_e( 'Prevents off-flavors', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Purity', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>99.9% Free from shell/foreign matter</span></td><td><?php esc_html_e( 'Laser sorted & X-ray scanned', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Aflatoxin (B1, B2, G1, G2)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 4 µg/kg (Total)</span></td><td><?php esc_html_e( 'Strict EU Compliance', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ GRADING STYLES ════════════════════════════════════════════════════════ -->
<section class="sec grade-sec">
  <div class="con">
    <div class="tad-reveal">
      <div class="eyebrow"><?php esc_html_e( 'Kernel Grading', 'trade-africa-direct' ); ?></div>
      <h2 style="font-family:'Work Sans',sans-serif;font-size:36px;font-weight:600;line-height:1.13;letter-spacing:-.02em;color:var(--gd);margin-bottom:12px"><?php esc_html_e( 'Standardized Sizing for Global Manufacturers', 'trade-africa-direct' ); ?></h2>
      <p class="grade-intro-text"><?php esc_html_e( 'We grade our kernels according to international industry standards to ensure seamless integration into your production lines.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="grade-grid tad-reveal tad-reveal--delay-1">
      <div class="grade-card">
        <div class="grade-size"><?php esc_html_e( '&gt;20mm', 'trade-africa-direct' ); ?></div>
        <h4><?php esc_html_e( 'Style 0 — Super Premium Wholes', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'Ideal for luxury retail packs and whole-nut gifting. The pinnacle of Macadamia presentation.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="grade-card">
        <div class="grade-size"><?php esc_html_e( '17mm – 20mm', 'trade-africa-direct' ); ?></div>
        <h4><?php esc_html_e( 'Style 1 — Premium Wholes', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'The industry standard for snacking. Consistent size delivers superior shelf appeal.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="grade-card">
        <div class="grade-size"><?php esc_html_e( '50/50 Mix', 'trade-africa-direct' ); ?></div>
        <h4><?php esc_html_e( 'Style 2 — Wholes & Halves', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'Perfect for bulk retail and trail mixes. Optimal cost-to-quality ratio for high-volume buyers.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="grade-card">
        <div class="grade-size"><?php esc_html_e( '10mm – 14mm', 'trade-africa-direct' ); ?></div>
        <h4><?php esc_html_e( 'Style 4 — Halves & Large Pieces', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'Preferred by bakers and industrial chocolatiers. Consistent piece size for even coating.', 'trade-africa-direct' ); ?></p>
      </div>
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
        <p class="log-intro"><?php esc_html_e( 'Macadamias are sensitive to oxygen and light. Our packaging is designed to maintain "Farm-Gate Freshness" for up to 18 months.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Bulk Packaging', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( '11.34 KG (25 lbs) or 10 KG vacuum-sealed aluminum foil bags.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'Atmosphere', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Nitrogen-flushed (N2) to eliminate oxygen and prevent oxidation.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Outer Case', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Heavy-duty corrugated fiberboard cartons.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">4</div><div><span class="step-lbl"><?php esc_html_e( 'Shipping', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Sea Freight (Mombasa) or Air Freight (Entebbe). We recommend temperature-controlled storage at +10°C upon arrival.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Vacuum-packed macadamia nuts in nitrogen-flushed foil bags for export', 'trade-africa-direct' ); ?>" loading="lazy">
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
        <img src="https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=680&h=400&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Raw macadamia kernels flowing from sorting machine into vacuum bags', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Secure Your Macadamia Supply for 2026', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'We provide Certificate of Analysis (COA) and microbiological test results with every batch.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request Bulk Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Order Commercial Samples (1KG)', 'trade-africa-direct' ); ?></a>
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
