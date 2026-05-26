<?php
/**
 * Template Name: Product — Nile Perch Fillets & Fish Maw
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
        <span style="color:var(--gd)"><?php esc_html_e( 'Nile Perch & Fish Maw', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Freshwater Fish · Lake Victoria, Uganda', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Export-Grade ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Nile Perch Fillets', 'trade-africa-direct' ); ?></em><?php esc_html_e( ' & Premium Fish Maw', 'trade-africa-direct' ); ?></h1>
          <p class="hero-sub"><?php esc_html_e( 'Sustainably Wild-Caught from the Pristine Waters of Lake Victoria. We supply high-yield, chilled, and frozen Nile Perch products to global wholesalers and Asian gourmet markets.', 'trade-africa-direct' ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Pricing Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View Quality Specs', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1534482421-64566f976cfa?w=1400&h=500&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Vacuum-sealed white Nile Perch fillet being weighed on a digital scale — Lake Victoria Uganda', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">HACCP</div>
            <div class="hl"><?php esc_html_e( 'EU Approved Facility', 'trade-africa-direct' ); ?></div>
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
          <span class="ss-val"><?php esc_html_e( 'Lake Victoria, Uganda (Wild Caught).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Format', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Chilled Fillets / Frozen Portions / Dried Fish Maw.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Compliance', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'HACCP & EU Approved Processing Facilities.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><rect x="1" y="3" width="15" height="13" rx="1"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Logistics', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Daily Cold-Chain Air Freight from Entebbe (EBB).', 'trade-africa-direct' ); ?></span>
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
        <h2><?php esc_html_e( 'Lake Victoria Nile Perch: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'The Premium Freshwater Choice', 'trade-africa-direct' ); ?></em></h2>
        <p><?php esc_html_e( 'Nile Perch (Lates niloticus) from Lake Victoria is internationally recognized for its firm, white flesh, mild flavor, and high nutritional value. At Trade Africa Direct, we operate at the heart of the world\'s largest freshwater fishery, providing wholesale Nile perch fillets that meet the rigorous standards of the European, Israeli, and North American markets.', 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'Our fish is wild-caught using sustainable, artisan-supported methods that protect the lake\'s ecosystem. Beyond the fillets, we are a leading specialized supplier of Ugandan Fish Maw (Dried Swim Bladders). Harvested from mature Nile Perch, our maw is processed using traditional sun-drying and air-drying techniques to preserve its high collagen content and texture, serving the specific demands of the premium Asian culinary and pharmaceutical sectors.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="https://images.unsplash.com/photo-1516684732162-798a0062be99?w=700&h=460&fit=crop&q=80"
               alt="<?php esc_attr_e( 'Pristine white Nile Perch fillet ready for cold-chain export from Lake Victoria', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">EU Cert.</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Health Certificate Provided', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TECHNICAL SPECS TABLE ════════════════════════════════════════════════ -->
<section class="sec tbl-sec" id="specs">
  <div class="con">
    <div class="eyebrow tad-reveal"><?php esc_html_e( 'Quality Standards', 'trade-africa-direct' ); ?></div>
    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Product Grading & Safety Standards', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'EU Health Certificates and laboratory analysis provided for every shipment.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Feature', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Nile Perch Fillets (Chilled/Frozen)', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Dried Fish Maw (Premium)', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Species', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Lates niloticus', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Lates niloticus (Swim Bladder)', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Grading (Size)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>200–500g, 500–800g, 800g+</span></td><td><?php esc_html_e( 'Grade A / AAA (By Weight/Shape)', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Texture', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Firm, white, succulent', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Dry, translucent, high-collagen', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Fat Content', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'High in Omega-3 Fatty Acids', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Low-fat, High-protein', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Microbiology', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Absent Salmonella/Listeria/Vibrio', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Moisture < 12%', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Certification', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'EU Health Certificate / HACCP', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Uganda Fisheries Department Cleared', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Processing', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Skinless, PBI or PBO (Pin Bone Out)', 'trade-africa-direct' ); ?></td><td><?php esc_html_e( 'Sun-dried / Hand-cleaned', 'trade-africa-direct' ); ?></td></tr>
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
        <h2><?php esc_html_e( '48-Hour Farm-to-Table Logistics', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'Freshness is the primary driver of value in the fish industry. Our logistics chain is optimized for speed and temperature stability.', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Immediate Icing', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Fish are bled and iced on the boat immediately upon catch to maintain muscle integrity.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'HACCP Processing', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Filleting occurs in EU-approved temperature-controlled rooms (+4°C).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Vacuum Packaging', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Fillets are vacuum-sealed or IWP (Individually Wrapped Pack) to prevent oxidation.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">4</div><div><span class="step-lbl"><?php esc_html_e( 'Air-Freight Routing', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Shipments are palletized in insulated "Styro" boxes with gel ice packs and trucked to Entebbe (EBB) for direct flight connection to global hubs.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1534482421-64566f976cfa?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Perfectly white vacuum-sealed Nile Perch fillet being weighed on a digital scale', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ══ SUSTAINABILITY & AVAILABILITY ════════════════════════════════════════ -->
<section class="sec cal">
  <div class="con">
    <div class="cal-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Supply Management', 'trade-africa-direct' ); ?></div>
        <h3><?php esc_html_e( 'Year-Round Supply Management', 'trade-africa-direct' ); ?></h3>
        <p class="cal-intro"><?php esc_html_e( 'Lake Victoria allows for year-round harvesting, though we manage supply based on ecological "closed seasons" to ensure long-term sustainability.', 'trade-africa-direct' ); ?></p>
        <div class="cal-items">
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Fillet Availability', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Daily (Chilled) / Monthly Contracts (Frozen).', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Fish Maw Availability', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Dried stock available for quarterly contracts.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Traceability', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Every batch is traceable to the specific landing site and processing date.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
        <div class="cal-note"><strong><?php esc_html_e( 'Sustainability commitment:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'We observe all Uganda Fisheries Department closed seasons and support artisan fishing communities with fair-price purchasing agreements.', 'trade-africa-direct' ); ?></div>
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="stat-cards" style="grid-template-columns:1fr">
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( 'Fillet MOQ (Chilled Air)', 'trade-africa-direct' ); ?></div><div class="stat-card-val">500 kg</div><div class="stat-card-sub"><?php esc_html_e( 'via Entebbe, daily dispatch', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card" style="margin-top:10px"><div class="stat-card-lbl"><?php esc_html_e( 'Fish Maw (Quarterly)', 'trade-africa-direct' ); ?></div><div class="stat-card-val">Grade A/AAA</div><div class="stat-card-sub"><?php esc_html_e( 'Asian gourmet & pharmaceutical markets', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card" style="margin-top:10px"><div class="stat-card-lbl"><?php esc_html_e( 'Processing Standard', 'trade-africa-direct' ); ?></div><div class="stat-card-val">HACCP</div><div class="stat-card-sub"><?php esc_html_e( 'EU Approved Facility, Kampala', 'trade-africa-direct' ); ?></div></div>
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
        <img src="https://images.unsplash.com/photo-1534482421-64566f976cfa?w=680&h=400&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Perfectly white vacuum-sealed Nile Perch fillet being weighed on digital scale', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Request a Commercial Quote & Health Certificates', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'We provide official EU Health Certificates and laboratory analysis for every shipment.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Price List (FOB/CIF)', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Request a Sample Shipment', 'trade-africa-direct' ); ?></a>
        </div>
        <div class="cta-compliance">
          <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          <p><?php esc_html_e( 'Every shipment includes ', 'trade-africa-direct' ); ?><strong><?php esc_html_e( 'EU Health Certificate', 'trade-africa-direct' ); ?></strong><?php esc_html_e( ', Uganda Fisheries Department Clearance, HACCP compliance documentation, and full cold-chain temperature logs.', 'trade-africa-direct' ); ?></p>
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
