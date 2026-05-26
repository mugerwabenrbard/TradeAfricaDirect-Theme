<?php
/**
 * Template Name: Product — Bulk Dried Fruits (Uganda)
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
        <span style="color:var(--gd)"><?php esc_html_e( 'Dried Fruits', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Dried Fruits · Uganda Origin', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Wholesale Dried ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Mango, Pineapple,', 'trade-africa-direct' ); ?></em><?php esc_html_e( ' and Jackfruit (Uganda Origin)', 'trade-africa-direct' ); ?></h1>
          <p class="hero-sub"><?php esc_html_e( '100% Natural, Solar-Dried, and Sulphur-Free. We provide high-volume, export-ready dried fruit processed to strict EU and US food safety standards.', 'trade-africa-direct' ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Pricing Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request FOB Price List', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View Technical Specs', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?w=1400&h=500&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Premium solar-dried tropical fruits ready for export — Uganda Origin', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">15 MT</div>
            <div class="hl"><?php esc_html_e( 'Monthly Export Capacity', 'trade-africa-direct' ); ?></div>
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
          <span class="ss-lbl"><?php esc_html_e( 'Direct Source', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Sourced from Nakaseke & Luwero farmers.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Purity', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '0% Added Sugar / 0% Preservatives.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Capacity', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '15 Metric Tons monthly export capacity.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Logistics', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Palletized for Air (EBB) or Sea (Mombasa).', 'trade-africa-direct' ); ?></span>
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
        <h2><?php esc_html_e( "Uganda's Premier Source for Bulk ", 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Solar-Dried Fruit', 'trade-africa-direct' ); ?></em></h2>
        <p><?php esc_html_e( "Uganda's equatorial climate and nutrient-rich volcanic soils produce fruits with naturally higher brix (sugar) levels and more intense flavor profiles than regional competitors. At Trade Africa Direct, we capture this peak ripeness through advanced solar-dehydration techniques.", 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'By removing moisture at controlled, low temperatures, we preserve the vibrant color, nutritional integrity, and natural enzymes of the fruit. Our wholesale dried mango (Kent and Tommy Atkins varieties) and Smooth Cayenne dried pineapple are favorites among healthy snack brands and industrial food manufacturers in Europe and the Middle East seeking Non-GMO, organic-standard ingredients from a traceable African origin.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="https://images.unsplash.com/photo-1595173967420-8ebe1a7ba98c?w=700&h=460&fit=crop&q=80"
               alt="<?php esc_attr_e( 'Ugandan equatorial farms — source of premium tropical fruits', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">Non-GMO</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Organic-Standard Origin', 'trade-africa-direct' ); ?></div>
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
      <h3><?php esc_html_e( 'Physical, Chemical, and Microbiological Specs', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'All specs verified per AOAC and EU food safety standards. Certificate of Analysis available upon request.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Attribute / Parameter', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Specification / Limit', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Standard / Method / Note', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Moisture Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>12.0% – 15.0%</span></td><td><?php esc_html_e( 'AOAC / Pliable, shelf-stable texture', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Water Activity (a', 'trade-africa-direct' ); ?><sub>w</sub>)</td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 0.60</span></td><td><?php esc_html_e( 'Prevents microbial growth', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Preservatives', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>0.0% (No SO₂/Sulphur)</span></td><td><?php esc_html_e( 'Natural shelf-life mastery', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Added Sugar', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>0.0%</span></td><td><?php esc_html_e( 'No syrups or sweeteners added', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Cut Formats', 'trade-africa-direct' ); ?></td><td><span class="pill" style="background:rgba(15,61,58,.07);border-color:rgba(15,61,58,.2)"><svg viewBox="0 0 24 24" style="stroke:var(--gd)"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Slices, Strips, or Dices', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Customizable to buyer requirements', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Total Plate Count', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 10,000 cfu/g</span></td><td><?php esc_html_e( 'Standard Food Safety method', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Yeast & Mold', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 1,000 cfu/g</span></td><td><?php esc_html_e( 'Standard Food Safety method', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Aflatoxins', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Absent / Below detection', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Strict EU Mycotoxin compliance', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ LOGISTICS & PACKAGING ════════════════════════════════════════════════ -->
<section class="sec log">
  <div class="con">
    <div class="log-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Logistics & Packaging', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Packaging & Shipping Logistics', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'We ensure our dried fruit is protected from humidity and temperature fluctuations during its journey from Kampala to your warehouse.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Primary Packaging', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Food-grade, high-density polyethylene (HDPE) blue bags, vacuum-sealed or heat-sealed.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'Secondary Packaging', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Double-walled 5-ply corrugated export cartons (5kg or 10kg Net Weight).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Sea Freight via Mombasa', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( '20ft FCL (Approx. 9 Metric Tons) | 40ft FCL (Approx. 19 Metric Tons).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">4</div><div><span class="step-lbl"><?php esc_html_e( 'Air Freight via Entebbe (EBB)', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Minimum Order Quantity (MOQ) 500kg. Direct daily flights to Brussels, Amsterdam, and Dubai.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Export warehouse packing and logistics — Kampala', 'trade-africa-direct' ); ?>" loading="lazy">
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
        <h3><?php esc_html_e( 'Securing Your 2026 Supply Chain', 'trade-africa-direct' ); ?></h3>
        <p class="cal-intro"><?php esc_html_e( 'While pineapple is available year-round, mango and jackfruit follow distinct seasons. We recommend opening contracts 60 days prior to peak harvest.', 'trade-africa-direct' ); ?></p>
        <div class="cal-items">
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Mango (Kent & Tommy Atkins)', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Dec–Feb (Main Season) · June–July (Short Season)', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Pineapple (Smooth Cayenne)', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Year-round availability — Peak volume May–July', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Jackfruit', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Available 10 months of the year', 'trade-africa-direct' ); ?></span></div></div>
        </div>
        <div class="cal-note"><strong><?php esc_html_e( 'Procurement tip:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Open forward contracts 60 days before peak harvest to secure priority allocation and competitive FOB Kampala pricing for the 2026 season.', 'trade-africa-direct' ); ?></div>
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="cal-vis">
          <div class="cal-vis-title"><?php esc_html_e( '2026 Harvest & Availability Calendar', 'trade-africa-direct' ); ?></div>
          <div class="cal-month-hdrs">
            <div></div>
            <div class="cal-mhdr">Jan</div><div class="cal-mhdr">Feb</div><div class="cal-mhdr">Mar</div><div class="cal-mhdr">Apr</div>
            <div class="cal-mhdr">May</div><div class="cal-mhdr">Jun</div><div class="cal-mhdr">Jul</div><div class="cal-mhdr">Aug</div>
            <div class="cal-mhdr">Sep</div><div class="cal-mhdr">Oct</div><div class="cal-mhdr">Nov</div><div class="cal-mhdr">Dec</div>
          </div>
          <div class="cal-row"><div class="cal-row-lbl">Mango</div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock"></div><div class="cblock"></div><div class="cblock"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock"></div><div class="cblock"></div><div class="cblock"></div><div class="cblock"></div><div class="cblock on"></div></div>
          <div class="cal-row"><div class="cal-row-lbl">Pineapple</div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div><div class="cblock pk"></div></div>
          <div class="cal-row"><div class="cal-row-lbl">Jackfruit</div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock"></div><div class="cblock"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div><div class="cblock on"></div></div>
          <div class="cal-legend">
            <div class="leg-item"><div class="leg-swatch" style="background:var(--acc)"></div> <?php esc_html_e( 'Peak Season', 'trade-africa-direct' ); ?></div>
            <div class="leg-item"><div class="leg-swatch" style="background:rgba(190,241,39,.4)"></div> <?php esc_html_e( 'Available', 'trade-africa-direct' ); ?></div>
            <div class="leg-item"><div class="leg-swatch" style="background:rgba(255,255,255,.07)"></div> <?php esc_html_e( 'Off-Season', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
        <div class="stat-cards">
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( '20ft FCL (Sea)', 'trade-africa-direct' ); ?></div><div class="stat-card-val">≈ 9 MT</div><div class="stat-card-sub"><?php esc_html_e( 'via Mombasa Port', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( 'Air MOQ (EBB)', 'trade-africa-direct' ); ?></div><div class="stat-card-val">500 kg</div><div class="stat-card-sub"><?php esc_html_e( 'Brussels · Amsterdam · Dubai', 'trade-africa-direct' ); ?></div></div>
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
        <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=680&h=400&fit=crop&q=80"
             alt="<?php esc_attr_e( '1kg commercial sample box — ready for DHL dispatch', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Request Your Technical Data Sheet & Sample', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'Ready to verify our quality for your supply chain? We offer commercial samples for lab testing and sensory evaluation.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Order 1KG Commercial Sample', 'trade-africa-direct' ); ?></a>
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
