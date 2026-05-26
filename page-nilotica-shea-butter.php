<?php
/**
 * Template Name: Product — Nilotica Shea Butter
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
        <span style="color:var(--gd)"><?php esc_html_e( 'Nilotica Shea Butter', 'trade-africa-direct' ); ?></span>
      </nav>
      <div class="hero-head">
        <div class="hero-text">
          <div class="eyebrow"><?php esc_html_e( 'Cosmetic Ingredient · Uganda Origin', 'trade-africa-direct' ); ?></div>
          <h1><?php esc_html_e( 'Wholesale Nilotica Shea Butter: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( '100% Unrefined & Grade A', 'trade-africa-direct' ); ?></em></h1>
          <p class="hero-sub"><?php esc_html_e( 'The "Gold Standard" of Shea. Cold-pressed from wild-harvested Nilotica nuts in Northern Uganda. Highly absorbent, naturally soft, and rich in bioactive therapeutic properties.', 'trade-africa-direct' ); ?></p>
        </div>
        <div class="hero-cta-wrap">
          <span class="hero-tag"><?php esc_html_e( '2026 Pricing Available', 'trade-africa-direct' ); ?></span>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Wholesale Price List', 'trade-africa-direct' ); ?></a>
          <a href="#specs" class="btn bg" style="padding:11px 22px;font-size:13.5px"><?php esc_html_e( 'View Formulation Data', 'trade-africa-direct' ); ?></a>
        </div>
      </div>
    </div>
    <div class="con" style="padding-bottom:0;margin-top:32px">
      <div class="hero-img">
        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=1400&h=500&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Creamy unrefined Nilotica shea butter scooped to show its frosting-like consistency — Uganda', 'trade-africa-direct' ); ?>"
             loading="eager" fetchpriority="high">
        <div class="hero-img-overlay"></div>
        <div class="hero-img-badge">
          <div>
            <div class="hn">Grade A</div>
            <div class="hl"><?php esc_html_e( 'Cosmetic & Pharmaceutical', 'trade-africa-direct' ); ?></div>
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
          <span class="ss-lbl"><?php esc_html_e( 'Species', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Vitellaria Nilotica (East African).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3H14z"/><path d="M7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Texture', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Naturally soft (Low melting point).', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Purity', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( '0% Chemicals / Hexane-Free Extraction.', 'trade-africa-direct' ); ?></span>
        </div>
      </div>
      <div class="ss-item">
        <div class="ss-ico"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"/></svg></div>
        <div>
          <span class="ss-lbl"><?php esc_html_e( 'Grade', 'trade-africa-direct' ); ?></span>
          <span class="ss-val"><?php esc_html_e( 'Cosmetic & Pharmaceutical Grade A.', 'trade-africa-direct' ); ?></span>
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
        <h2><?php esc_html_e( 'Nilotica vs. Paradoxa: ', 'trade-africa-direct' ); ?><em><?php esc_html_e( 'Why Premium Formulators Choose Ugandan Shea', 'trade-africa-direct' ); ?></em></h2>
        <p><?php esc_html_e( 'In the global cosmetic market, Nilotica Shea Butter is prized as the rare, premium counterpart to West African varieties. Because it grows in the fertile, high-moisture regions of Northern Uganda, Nilotica Shea contains a significantly higher concentration of liquid oleic acid.', 'trade-africa-direct' ); ?></p>
        <p><?php esc_html_e( 'At Trade Africa Direct, we provide wholesale unrefined Nilotica Shea Butter that remains in its raw, bioactive state. It does not require chemical refining because it is naturally light in aroma and creamy in color. For formulators, this means a butter that absorbs instantly into the skin without the "waxy" residue common in other grades, making it the ideal base for high-end anti-aging creams, baby balms, and lip care products.', 'trade-africa-direct' ); ?></p>
      </div>
      <div class="ov-img-w tad-reveal tad-reveal--delay-1">
        <div class="ov-img">
          <img src="https://images.unsplash.com/photo-1611080541599-8c6dbde6ed28?w=700&h=460&fit=crop&q=80"
               alt="<?php esc_attr_e( 'Cold-pressed unrefined Nilotica shea butter in bulk containers for cosmetic production', 'trade-africa-direct' ); ?>" loading="lazy">
        </div>
        <div class="ov-badge">
          <div class="ov-b-ico"><svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div>
            <div class="ov-b-num">Hexane-Free</div>
            <div class="ov-b-lbl"><?php esc_html_e( 'Cold-Pressed Only', 'trade-africa-direct' ); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ TECHNICAL SPECS TABLE ════════════════════════════════════════════════ -->
<section class="sec tbl-sec" id="specs">
  <div class="con">
    <div class="eyebrow tad-reveal"><?php esc_html_e( 'Formulation Data', 'trade-africa-direct' ); ?></div>
    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Chemical & Physical Profile', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Full Certificate of Analysis (COA) provided with every batch.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Parameter', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Specification / Limit', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Benefit to Formulator', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Appearance', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Light Ivory to Pale Yellow', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Minimal impact on final product color', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Odor', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Mild, nutty, characteristic', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'Easily masked with natural essential oils', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Free Fatty Acids (FFA)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 1.0%</span></td><td><?php esc_html_e( 'Indicates high stability and freshness', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Peroxide Value', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>&lt; 2.0 mEq/kg</span></td><td><?php esc_html_e( 'Low oxidation; extended shelf life', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Iodine Value', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>55 – 65 g/100g</span></td><td><?php esc_html_e( 'Higher than Paradoxa; indicates softness', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Saponification Value', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>170 – 190 mg KOH/g</span></td><td><?php esc_html_e( 'Predictable performance in soap making', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Melting Point', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>28°C – 32°C</span></td><td><?php esc_html_e( 'Melts on skin contact', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>

    <div class="tbl-spacer"></div>

    <div class="tbl-head tad-reveal">
      <h3><?php esc_html_e( 'Fatty Acid Composition', 'trade-africa-direct' ); ?></h3>
      <p class="tbl-note"><?php esc_html_e( 'Nilotica\'s superior oleic acid profile delivers exceptional skin absorption and barrier protection.', 'trade-africa-direct' ); ?></p>
    </div>
    <div class="tbl-wrap tad-reveal tad-reveal--delay-1">
      <table class="dt">
        <thead><tr>
          <th><?php esc_html_e( 'Fatty Acid', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Content Range', 'trade-africa-direct' ); ?></th>
          <th><?php esc_html_e( 'Skin Benefit', 'trade-africa-direct' ); ?></th>
        </tr></thead>
        <tbody>
          <tr><td><?php esc_html_e( 'Oleic Acid (C18:1)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>52% – 60%</span></td><td><?php esc_html_e( 'Superior hydration and skin penetration', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Stearic Acid (C18:0)', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>30% – 38%</span></td><td><?php esc_html_e( 'Texture and skin barrier protection', 'trade-africa-direct' ); ?></td></tr>
          <tr><td><?php esc_html_e( 'Vitamin A & E', 'trade-africa-direct' ); ?></td><td><span class="pill"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg><?php esc_html_e( 'Naturally present', 'trade-africa-direct' ); ?></span></td><td><?php esc_html_e( 'High antioxidant activity', 'trade-africa-direct' ); ?></td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ ETHICAL SOURCING ══════════════════════════════════════════════════════ -->
<section class="sec log">
  <div class="con">
    <div class="log-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Sourcing & Processing', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Traceable, Cold-Pressed, and Hexane-Free', 'trade-africa-direct' ); ?></h2>
        <p class="log-intro"><?php esc_html_e( 'We eliminate the "Black Box" of sourcing. Our Nilotica Shea is:', 'trade-africa-direct' ); ?></p>
        <div class="steps">
          <div class="step"><div class="step-n">1</div><div><span class="step-lbl"><?php esc_html_e( 'Wild-Harvested', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Collected by women\'s cooperatives in Northern Uganda.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">2</div><div><span class="step-lbl"><?php esc_html_e( 'Mechanical Extraction', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'We use cold-pressing only. We never use hexane or chemical solvents to extract our butter.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="step"><div class="step-n">3</div><div><span class="step-lbl"><?php esc_html_e( 'Filtration', 'trade-africa-direct' ); ?></span><span class="step-txt"><?php esc_html_e( 'Double-filtered through 5-micron mesh to ensure a smooth, grit-free texture while preserving the natural unsaponifiables.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
      </div>
      <div class="log-img tad-reveal tad-reveal--delay-1">
        <img src="https://images.unsplash.com/photo-1598511726623-d2e9996b1c4f?w=700&h=480&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Cold-press extraction of Nilotica shea butter in Northern Uganda cooperative', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ══ PACKAGING ════════════════════════════════════════════════════════════ -->
<section class="sec cal">
  <div class="con">
    <div class="cal-grid">
      <div class="tad-reveal">
        <div class="eyebrow"><?php esc_html_e( 'Bulk Supply Chain', 'trade-africa-direct' ); ?></div>
        <h3><?php esc_html_e( 'Bulk Supply Chain Management', 'trade-africa-direct' ); ?></h3>
        <p class="cal-intro"><?php esc_html_e( 'We ensure our Shea Butter remains stable during equatorial transit and international shipping.', 'trade-africa-direct' ); ?></p>
        <div class="cal-items">
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Standard Packaging', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( '10 KG / 20 KG food-grade HDPE pails or lined metal drums.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Bulk Packaging', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( '200 KG steel drums for industrial manufacturers.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Storage', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Store in a cool, dry place (< 20°C) away from direct sunlight.', 'trade-africa-direct' ); ?></span></div></div>
          <div class="cal-item"><div class="cal-dot"></div><div><span class="cal-lbl"><?php esc_html_e( 'Logistics', 'trade-africa-direct' ); ?></span><span class="cal-val"><?php esc_html_e( 'Sea Freight (Mombasa) in 20ft/40ft containers. Air Freight (Entebbe) for urgent cosmetic production runs.', 'trade-africa-direct' ); ?></span></div></div>
        </div>
        <div class="cal-note"><strong><?php esc_html_e( 'Quality note:', 'trade-africa-direct' ); ?></strong> <?php esc_html_e( 'Nilotica Shea is available year-round. Lead time for bulk orders is typically 10–14 business days ex-Kampala.', 'trade-africa-direct' ); ?></div>
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="stat-cards" style="grid-template-columns:1fr">
          <div class="stat-card"><div class="stat-card-lbl"><?php esc_html_e( 'Standard Unit', 'trade-africa-direct' ); ?></div><div class="stat-card-val">10–20 KG</div><div class="stat-card-sub"><?php esc_html_e( 'HDPE Pails or Lined Drums', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card" style="margin-top:10px"><div class="stat-card-lbl"><?php esc_html_e( 'Industrial Bulk', 'trade-africa-direct' ); ?></div><div class="stat-card-val">200 KG</div><div class="stat-card-sub"><?php esc_html_e( 'Steel Drums for Manufacturers', 'trade-africa-direct' ); ?></div></div>
          <div class="stat-card" style="margin-top:10px"><div class="stat-card-lbl"><?php esc_html_e( 'Shelf Life', 'trade-africa-direct' ); ?></div><div class="stat-card-val">24 Mo.</div><div class="stat-card-sub"><?php esc_html_e( 'Stored below 20°C', 'trade-africa-direct' ); ?></div></div>
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
        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=680&h=400&fit=crop&q=80"
             alt="<?php esc_attr_e( 'Nilotica shea butter being scooped — showing its creamy frosting-like consistency', 'trade-africa-direct' ); ?>" loading="lazy">
      </div>
      <div class="tad-reveal tad-reveal--delay-1">
        <div class="eyebrow eyebrow-g"><?php esc_html_e( 'Next Steps', 'trade-africa-direct' ); ?></div>
        <h2><?php esc_html_e( 'Request a Technical Data Sheet (TDS) & Sample', 'trade-africa-direct' ); ?></h2>
        <p class="cta-body"><?php esc_html_e( 'Verify the therapeutic profile of our Nilotica Shea for your next formulation. We provide a full Certificate of Analysis (COA) with every batch.', 'trade-africa-direct' ); ?></p>
        <div class="cta-btns">
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn ba btn-lg"><?php esc_html_e( 'Request 2026 Wholesale Price List', 'trade-africa-direct' ); ?></a>
          <a href="<?php echo esc_url( $quote_url ); ?>" class="btn bw btn-lg"><?php esc_html_e( 'Order Commercial Sample (500g)', 'trade-africa-direct' ); ?></a>
        </div>
        <div class="cta-compliance">
          <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          <p><?php esc_html_e( 'Keyword Focus: "Nilotica Shea Butter wholesale," "Uganda Shea Butter supplier," "Cosmetic grade unrefined shea." COA, TDS and phytosanitary documentation provided on request.', 'trade-africa-direct' ); ?></p>
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
