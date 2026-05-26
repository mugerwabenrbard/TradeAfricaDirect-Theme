<?php
/**
 * Template Name: Product — Specialty Green Coffee Beans
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
        <span style="color:var(--gd)"><?php esc_html_e( 'Specialty Coffee', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Green Coffee · Uganda Origin', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Wholesale Ugandan Green Coffee: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Specialty Arabica & Fine Robusta', 'trade-africa-direct' ); ?></em></h1>
          <p class="hero-sub"><?php esc_html_e( 'From the High Altitudes of Mt. Elgon to the Birthplace of Robusta. We supply traceable, high-scoring green coffee beans (SCAA 80+) to specialty roasters and industrial importers worldwide.', 'trade-africa-direct' ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Crop Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View Quality Standards', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1400&h=500&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Specialty green coffee beans being graded beside a moisture meter — Uganda Origin', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">SCAA 82+</div>
            <div class="hl"><?php esc_html_e( 'Cupping Score', 'trade-africa-direct' ); ?></div>
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
          <span class="ss-lbl"><?php esc_html_e( 'Altitudes', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '1,300m – 2,200m ASL (Arabica).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Screen Sizes', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Screen 18 (Robusta) / Screen 15+ (Arabica).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Processing', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Fully Washed, Natural, and Honey Processed.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Direct Trade', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '100% Traceable to Estate or Cooperative level.', 'trade-africa-direct' ); ?></span>
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
        <h2><?php esc_html_e( 'Uganda: The ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Dual-Origin Powerhouse', 'trade-africa-direct' ); ?></em><?php esc_html_e( ' of African Coffee', 'trade-africa-direct' ); ?></h2>
        <p><?php esc_html_e( 'Uganda is uniquely positioned as the only country in the world capable of producing both high-altitude Specialty Arabica and world-class Fine Robusta in massive commercial volumes. At Trade Africa Direct, we leverage this geographic diversity to offer a complete coffee sourcing solution.', 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'Our Mt. Elgon Arabica is grown on the slopes of an extinct volcano, benefiting from nutrient-dense soil that produces complex acidity and stone-fruit notes. Simultaneously, we are at the forefront of the "Robusta Renaissance," exporting Screen 18 Fine Robusta that offers a clean, neutral cup with a heavy body and chocolatey finish—ideal for premium espresso blends. Every bag we export is a testament to Uganda\'s status as Africa\'s largest coffee exporter, backed by strict quality control and direct-trade transparency.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=700&h=460&fit=crop&q=80"
               alt="<?php esc_attr_e( 'Uganda specialty green coffee beans in a cupping tray beside Q-grader notes', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">Q-Grader</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Certified Cup Reports', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TECHNICAL SPECS TABLE ════════════════════════════════════════════════ -->
<section class="sec tbl-sec" id="specs">
  <div class="con">
    <div class="eyebrow tad-reveal"><?php esc_html_e( "Roaster's Data Sheet", 'trade-africa-direct' ); ?></div>
    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Physical & Sensory Quality Standards', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Pre-shipment samples and full cupping reports from certified Q-Graders available.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Attribute', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Specialty Arabica (Mt. Elgon)', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Fine Robusta (Central/Western)', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Varieties', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'SL14, SL28, Nyasaland', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Indigenous Robusta (Wild/Clonal)', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Altitude', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>1,600m – 2,200m ASL</span></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>1,200m – 1,500m ASL</span></td></tr>
          <tr><td><?php esc_html_e( 'SCAA Cupping Score', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>82 – 86+ Points</span></td><td><?php esc_html_e( 'Clean Cup / Specialty Grade', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Screen Size', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Screen 15, 16, 17, 18', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Screen 18 (Large Bean) / Screen 15', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Moisture Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>10.5% – 12.0%</span></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>11.0% – 12.5%</span></td></tr>
          <tr><td><?php esc_html_e( 'Defects', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Grade 1 (Specialty)', 'trade-africa-direct' ); ?></span></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Zero Primary Defects', 'trade-africa-direct' ); ?></span></td></tr>
          <tr><td><?php esc_html_e( 'Processing Method', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Fully Washed / Natural', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Natural / Sun-Dried', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ REGIONAL PROFILES ════════════════════════════════════════════════════ -->
<section class="sec grade-sec">
  <div class="con">
    <div class="tad-reveal">
      <div class="eyebrow"><?php esc_html_e( 'Terroir', 'trade-africa-direct' ); ?></div>
      <h2 style="font-family:'Work Sans',sans-serif;font-size:36px;font-weight:600;line-height:1.13;letter-spacing:-.02em;color:var(--gd);margin-bottom:12px"><?php esc_html_e( 'Sourcing by Terroir', 'trade-africa-direct' ); ?></h2>
      <p class="grade-intro-text"><?php esc_html_e( 'We allow buyers to select beans based on the specific flavor profiles of Uganda\'s diverse growing regions.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="grade-grid tad-reveal tad-reveal--delay-1">
      <div class="grade-card">
        <div class="grade-size">Arabica</div>
        <h4><?php esc_html_e( 'Mt. Elgon', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'Bright citrus acidity, notes of honey, stone fruit, and a clean floral finish.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="grade-card">
        <div class="grade-size">Arabica</div>
        <h4><?php esc_html_e( 'Rwenzori Mountains', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'The "Mountains of the Moon" produce beans with deep berry notes, heavy body, and winey acidity.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="grade-card">
        <div class="grade-size">Fine Robusta</div>
        <h4><?php esc_html_e( 'Central & Lake Victoria Basin', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'High-density beans with notes of toasted nuts, dark chocolate, and a thick crema-producing oil content.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="grade-card">
        <div class="grade-size" style="background:var(--tm)">Micro-Lots</div>
        <h4><?php esc_html_e( 'Estate & Cooperative Lots', 'trade-africa-direct' ); ?></h4>
        <p><?php esc_html_e( 'Request traceable micro-lots for specialty roasters who need a unique, single-origin story for their customers.', 'trade-africa-direct' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ══ LOGISTICS ════════════════════════════════════════════════════════════ -->
<section class="sec log" style="background:var(--slo)">
  <div class="con">
    <div class="log-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Packaging & Export', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Preserving Cup Quality in Transit', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'Green coffee is highly sensitive to moisture and odors. Our packaging protocols exceed standard export requirements.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Primary Packaging', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'GrainPro® or Ecotact hermetic liners to preserve freshness and prevent "baggy" flavors.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'Secondary Packaging', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'New, clean 60 KG Jute Bags.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Container Loadability (20ft FCL)', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Bulk (Loose Bags): 19.2 Metric Tons (320 Bags). Palletized: 14.4 Metric Tons (240 Bags).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">4</div><div><span class="step-lbl"><?php esc_html_e( 'Shipping', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Sea Freight via Mombasa (25–35 days to EU/USA). Air Freight via Entebbe for micro-lots and samples.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Green coffee beans being graded on a black tray next to a moisture meter', 'trade-africa-direct' ); ?>" loading="lazy">
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
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=680&h=400&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Green coffee beans being graded on a black tray next to a moisture meter', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Request a Pre-Shipment Sample (PSS)', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'We provide current harvest crop samples and full cupping reports from certified Q-Graders.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Order Pre-Shipment Samples', 'trade-africa-direct' ); ?></a>
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
