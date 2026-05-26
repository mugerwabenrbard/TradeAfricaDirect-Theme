<?php
/**
 * Template Name: Product — Fresh Hass Avocados
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
        <span style="color:var(--gd)"><?php esc_html_e( 'Fresh Hass Avocados', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Fresh Produce · Uganda Origin', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Wholesale Ugandan Hass Avocados: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Premium Export Grade', 'trade-africa-direct' ); ?></em></h1>
          <p class="hero-sub"><?php esc_html_e( 'High-Oil Content, Superior Dry Matter, and Guaranteed Cold-Chain Integrity. Sourced from the volcanic soils of Central and Western Uganda for year-round quality.', 'trade-africa-direct' ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Pricing Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List & Size Chart', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View QA Specs', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=1400&h=500&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Export-grade Hass avocados sorted into branded cartons — Uganda Origin', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">22–25%</div>
            <div class="hl"><?php esc_html_e( 'Dry Matter Content', 'trade-africa-direct' ); ?></div>
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
          <span class="ss-lbl"><?php esc_html_e( 'Dry Matter', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '22% – 25% (Optimal Ripening).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Grading', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Export Grade A (Global Standards).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Logistics', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Pre-cooled Air Freight (EBB) or CA Sea Containers (Mombasa).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Sustainability', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '100% Traceable to Smallholder Farmer Groups.', 'trade-africa-direct' ); ?></span>
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
        <div class="eyebrow"><?php esc_html_e( 'Market Position', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( "Uganda's Strategic Advantage in the ", 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Global Avocado Market', 'trade-africa-direct' ); ?></em></h2>
        <p><?php esc_html_e( 'As global demand for high-quality Hass avocados continues to surge, Uganda has emerged as a critical strategic origin. At Trade Africa Direct, we leverage Uganda\'s unique equatorial climate—featuring two distinct rainy seasons—to provide a reliable supply of wholesale Hass avocados during traditional market gaps.', 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'Our avocados are distinguished by their nutrient-density and buttery texture, the result of being grown in high-altitude, mineral-rich soils. We prioritize Maximum Residue Limit (MRL) compliance and strict adherence to international food safety protocols, making us the preferred partner for importers in the EU, UK, and Middle East seeking a consistent, high-oil content fruit that performs exceptionally in "Ripe-and-Ready" programs.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="https://images.unsplash.com/photo-1541519227354-08fa5d50c820?w=700&h=460&fit=crop&q=80"
               alt="<?php esc_attr_e( 'Open Hass avocado showing high-oil golden flesh — Uganda volcanic soil origin', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">MRL</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Maximum Residue Compliant', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TECHNICAL SPECS TABLE ════════════════════════════════════════════════ -->
<section class="sec tbl-sec" id="specs">
  <div class="con">
    <div class="eyebrow tad-reveal"><?php esc_html_e( 'Quality Metrics', 'trade-africa-direct' ); ?></div>
    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Physical & Quality Metrics for Importers', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Dry matter and oil content lab certificates provided with every pre-shipment sample.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Feature', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Export Specification', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Notes for Procurement', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Variety', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( '100% Hass (Dark Skin)', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Selected for long-distance transport', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Dry Matter %', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>22% Min – 25% Max</span></td><td><?php esc_html_e( 'Tested via microwave/oven method', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Oil Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>18% – 22%</span></td><td><?php esc_html_e( 'Results in superior nutty flavor', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Sizing (Counts)', 'trade-africa-direct' ); ?></td><td><span class="pill" style="background:rgba(15,61,58,.07);border-color:rgba(15,61,58,.2)"><svg viewBox="0 0 24 24" style="stroke:var(--gd)"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( '12, 14, 16, 18, 20, 22, 24', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Standard 4KG or 10KG boxes', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'External Quality', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Clean, green, no mechanical damage', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Zero tolerance for scale or scabs', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Internal Quality', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'No internal browning or bruising', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Managed via 5°C cold chain', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ COLD CHAIN PROTOCOL ══════════════════════════════════════════════════ -->
<section class="sec log">
  <div class="con">
    <div class="log-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Cold Chain', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Preserving Shelf Life: Our Farm-to-Port Cold Chain', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'The secret to a successful avocado arrival is "Heat Extraction." We manage every degree to ensure your fruit arrives in a state of "suspended animation," ready for ripening at your facility.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Selection & Harvest', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Only fruit meeting the 22% dry matter threshold is harvested.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'Rapid Pre-Cooling', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Within hours of harvest, fruit is brought down to +5°C in our Kampala packhouse to stop the ripening process.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Grading & Sizing', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Automated weight-sizing ensures consistent count accuracy per carton.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">4</div><div><span class="step-lbl"><?php esc_html_e( 'Refrigerated Transit', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Fruit is moved in specialized reefer trucks to Entebbe (EBB) for 12-hour air transit or Mombasa for CA (Controlled Atmosphere) sea freight.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Branded open-top export carton with perfectly nested dark-green Hass avocados', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ══ HARVEST CALENDAR ═════════════════════════════════════════════════════ -->
<section class="sec cal">
  <div class="con">
    <div class="cal-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Supply Planning', 'trade-africa-direct' ); ?></div>
        <h3><?php esc_html_e( 'Strategic Buying Windows', 'trade-africa-direct' ); ?></h3>
        <p class="cal-intro"><?php esc_html_e( 'While we maintain a steady flow of fruit, we experience two major peak periods where volume and sizing are at their highest.', 'trade-africa-direct' ); ?></p>
        <div class="cal-items">
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Peak Season A — The Summer Gap', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'May – July', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Peak Season B — The Winter Demand', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'November – January', 'trade-africa-direct' ); ?></span></div></div>
        </div>
        <div class="cal-note"><strong><?php esc_html_e( 'Procurement tip:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Open forward contracts 45 days before peak season to lock preferred count sizes and competitive FOB Entebbe pricing.', 'trade-africa-direct' ); ?></div>
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="cal-vis">
          <div class="cal-vis-title"><?php esc_html_e( '2026 Avocado Supply Calendar', 'trade-africa-direct' ); ?></div>
          <div class="cal-month-hdrs">
            <div></div>
            <div class="cal-mhdr">Jan</div><div class="cal-mhdr">Feb</div><div class="cal-mhdr">Mar</div><div class="cal-mhdr">Apr</div>
            <div class="cal-mhdr">May</div><div class="cal-mhdr">Jun</div><div class="cal-mhdr">Jul</div><div class="cal-mhdr">Aug</div>
            <div class="cal-mhdr">Sep</div><div class="cal-mhdr">Oct</div><div class="cal-mhdr">Nov</div><div class="cal-mhdr">Dec</div>
          </div>
          <div class="cal-row"><div class="cal-row-lbl">Hass</div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock on"></div><div class="cblock on"></div></div>
          <div class="cal-legend">
            <div class="leg-item"><div class="leg-swatch" style="background:var(--acc)"></div> <?php esc_html_e( 'Peak Season', 'trade-africa-direct' ); ?></div>
            <div class="leg-item"><div class="leg-swatch" style="background:rgba(190,241,39,.4)"></div> <?php esc_html_e( 'Available', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
        <div class="stat-cards">
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( 'Air Freight MOQ', 'trade-africa-direct' ); ?></div><div class="stat-card-val">500 kg</div><div class="stat-card-sub"><?php esc_html_e( 'via Entebbe (EBB)', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( 'Sea Freight (20ft FCL)', 'trade-africa-direct' ); ?></div><div class="stat-card-val">≈ 18 MT</div><div class="stat-card-sub"><?php esc_html_e( 'CA Container, Mombasa', 'trade-africa-direct' ); ?></div></div>
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
        <img src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=680&h=400&fit=crop&q=80"
             alt="<?php esc_attr_e( 'High-resolution branded export carton with perfectly nested dark-green avocados', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Secure Your 2026 Avocado Supply', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'We provide detailed laboratory certificates for dry matter and oil content with every pre-shipment sample.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List & Size Chart', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Request Avocado Samples for Lab Testing', 'trade-africa-direct' ); ?></a>
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
