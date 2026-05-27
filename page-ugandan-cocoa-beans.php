<?php
/**
 * Template Name: Product — Ugandan Cocoa Beans & Cocoa Butter
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$quote_url    = home_url( '/request-a-quote/' );
$products_url = home_url( '/#portfolio' );
$pi           = tad_get_product_page_images( 'cocoa_beans' );
?>

<main id="content" class="tad-product-page">

<!-- ══ HERO ══════════════════════════════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-top">
    <div class="con">
      <nav class="breadcrumb" aria-label="<?php esc_attr_e( 'Breadcrumb', 'trade-africa-direct' ); ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'trade-africa-direct' ); ?></a><span>›</span>
        <a href="<?php echo esc_url( $products_url ); ?>"><?php esc_html_e( 'Products', 'trade-africa-direct' ); ?></a><span>›</span>
        <span style="color:var(--gd)"><?php esc_html_e( 'Cocoa Beans', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Cocoa · Uganda Origin', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Wholesale Ugandan Cocoa Beans: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Bundibugyo Origin', 'trade-africa-direct' ); ?></em></h1>
          <p class="hero-sub"><?php esc_html_e( 'Ethically Sourced, Expertly Fermented, and Rich in Natural Cocoa Butter. We supply premium sun-dried cocoa beans and semi-processed cocoa butter to craft chocolate makers and industrial manufacturers.', 'trade-africa-direct' ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Pricing Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View Technical Specs', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="<?php echo esc_url( $pi['hero'] ); ?>"
             alt="<?php esc_attr_e( 'Bundibugyo cocoa cut test showing deep brown well-fermented bean interiors — Uganda', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">>52%</div>
            <div class="hl"><?php esc_html_e( 'Natural Cocoa Butter Fat', 'trade-africa-direct' ); ?></div>
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
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 2C7 7 4 12 4 17a8 8 0 0016 0c0-5-3-10-8-15z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Origin', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Bundibugyo District (Western Uganda).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Fermentation', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '6–7 Days Centralized Box Fermentation.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Fat Content', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '>52% Natural Cocoa Butter.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Certification', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Traceable to Rainforest-Bordering Smallholder Networks.', 'trade-africa-direct' ); ?></span>
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
        <div class="eyebrow"><?php esc_html_e( 'Origin Profile', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'The Unique Profile of ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Bundibugyo Cocoa Beans', 'trade-africa-direct' ); ?></em></h2>
        <p><?php esc_html_e( 'Uganda has rapidly ascended as a preferred origin for high-quality cocoa due to the unique terroir of the Bundibugyo region, nestled between the Rwenzori Mountains and the Semliki Wildlife Reserve. At Trade Africa Direct, we specialize in wholesale Ugandan cocoa beans that offer a distinct flavor profile: deep chocolatey base notes with subtle hints of red fruit and earthiness.', 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'Our commitment to quality begins with centralized fermentation. Unlike farm-level drying which can lead to inconsistency, our beans undergo a controlled 6-day fermentation process in tiered wooden boxes. This ensures a high "cut-test" score with minimal slatey or purple beans, resulting in a low-acid, highly aromatic bean that is ideal for both high-end bean-to-bar chocolate production and high-yield cocoa butter extraction.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="<?php echo esc_url( $pi['overview'] ); ?>"
               alt="<?php esc_attr_e( 'Bundibugyo cocoa pods and fermented beans ready for export — Western Uganda', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">>80%</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Well-Fermented Score', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TECHNICAL SPECS TABLE ════════════════════════════════════════════════ -->
<section class="sec tbl-sec" id="specs">
  <div class="con">
    <div class="eyebrow tad-reveal"><?php esc_html_e( "Manufacturer's Data Sheet", 'trade-africa-direct' ); ?></div>
    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Physical and Quality Metrics', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Detailed cut-test reports and microbiological analysis provided for every lot.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Attribute', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Specification / Limit', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Standard / Note', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Moisture Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 7.5%</span></td><td><?php esc_html_e( 'Prevents mold and ensures shelf stability', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Bean Count', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>95 – 105 beans per 100g</span></td><td><?php esc_html_e( 'Large, uniform beans for even roasting', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Fermentation Degree', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&gt; 80% (Well Fermented)</span></td><td><?php esc_html_e( 'Evaluated via standard Cut Test', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Slatey Beans', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 3%</span></td><td><?php esc_html_e( 'Indicates superior fermentation control', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Total Fat Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>52% – 56%</span></td><td><?php esc_html_e( 'High natural cocoa butter yield', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Free Fatty Acids (FFA)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 1.75%</span></td><td><?php esc_html_e( 'Indicates fresh, non-degraded beans', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Foreign Matter', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 0.5%</span></td><td><?php esc_html_e( 'Hand-sorted and magnet-cleaned', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ FERMENTATION PROTOCOL ════════════════════════════════════════════════ -->
<section class="sec log">
  <div class="con">
    <div class="log-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Quality Process', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'From Pod to Port: Our Quality Control Process', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'Consistency is the primary requirement for chocolate manufacturers. Our process is designed to eliminate variance.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Wet Bean Collection', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'We purchase wet beans directly from farmers to control the fermentation start time.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'Tiered Fermentation', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Beans are fermented in mahogany boxes, turned every 48 hours to ensure even temperature distribution and flavor development.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Solar Drying', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Beans are dried slowly on raised African beds under UV-protected mesh. We avoid mechanical drying to prevent "smoky" off-flavors.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">4</div><div><span class="step-lbl"><?php esc_html_e( 'Hand Sorting', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Every batch is manually sorted to remove broken beans, flat beans, and placenta.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="<?php echo esc_url( $pi['mid'] ); ?>"
             alt="<?php esc_attr_e( 'Cocoa beans being sorted on raised African drying beds — Bundibugyo Uganda', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ══ PACKAGING & LOGISTICS ════════════════════════════════════════════════ -->
<section class="sec cal">
  <div class="con">
    <div class="cal-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Export Logistics', 'trade-africa-direct' ); ?></div>
        <h3><?php esc_html_e( 'Bulk Supply Chain Management', 'trade-africa-direct' ); ?></h3>
        <p class="cal-intro"><?php esc_html_e( 'Cocoa is sensitive to humidity and cross-contamination. We utilize industry-standard protection for all shipments.', 'trade-africa-direct' ); ?></p>
        <div class="cal-items">
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Standard Packaging', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( '62.5 KG or 64 KG food-grade Jute bags.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Hermetic Protection', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'GrainPro® or Ecotact hermetic liners available upon request to preserve aromatic integrity during sea transit.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Container Loadability (20ft FCL)', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( '12.5 Metric Tons (approx. 200 bags).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Cocoa Butter Packaging', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( '25 KG food-grade cartons with polyethylene liners (stored at +15°C).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Logistics', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Sea Freight via Mombasa Port. Average transit to EU: 25–30 days.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="stat-cards" style="grid-template-columns:1fr">
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( '20ft FCL Capacity', 'trade-africa-direct' ); ?></div><div class="stat-card-val">12.5 MT</div><div class="stat-card-sub"><?php esc_html_e( '≈200 Jute Bags, via Mombasa', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card" style="margin-top:10px"><div class="stat-card-lbl"><?php esc_html_e( 'Fermentation Score', 'trade-africa-direct' ); ?></div><div class="stat-card-val">>80%</div><div class="stat-card-sub"><?php esc_html_e( 'Well Fermented (Cut Test)', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card" style="margin-top:10px"><div class="stat-card-lbl"><?php esc_html_e( 'Transit Time to EU', 'trade-africa-direct' ); ?></div><div class="stat-card-val">25–30d</div><div class="stat-card-sub"><?php esc_html_e( 'Sea Freight via Mombasa', 'trade-africa-direct' ); ?></div></div>
        </div>
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
        <img src="<?php echo esc_url( $pi['cta'] ); ?>"
             alt="<?php esc_attr_e( 'Cocoa cut test showing deep brown well-fermented bean interiors for quality verification', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Request a Technical Data Sheet & Cut Test Results', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'We provide detailed cut-test reports and microbiological analysis for every lot.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Request Cocoa Bean Samples (2KG)', 'trade-africa-direct' ); ?></a>
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
