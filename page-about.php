<?php
/**
 * Template Name: About — Our Export Company
 *
 * The story, farmer network, facility, and values of Trade Africa Direct.
 * Inspiration: execor.vamtam.com/about + finovate.vamtam.com/about
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$portfolio_url = home_url( '/export-portfolio/' );
$quote_url     = home_url( '/request-a-quote/' );
$quality_url   = home_url( '/quality-certifications-logistics/' );

$imgs = [
	'hero'      => 'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=1400&h=560&fit=crop&q=80',
	'farm'      => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1000&h=700&fit=crop&q=80',
	'farmers'   => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=1000&h=700&fit=crop&q=80',
	'banner'    => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=1800&h=700&fit=crop&q=80',
	'facility'  => 'https://images.unsplash.com/photo-1576086213369-97a306d36557?w=1000&h=720&fit=crop&q=80',
	'orchard'   => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=1000&h=640&fit=crop&q=80',
	'coffee'    => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1000&h=640&fit=crop&q=80',
	'packing'   => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1000&h=640&fit=crop&q=80',
];

get_header();
?>

<main id="content" class="tad-about">

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 1 — PAGE HERO
	   Compact heading → wide hero image below (Finovate-style)
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-hero">
		<div class="tad-about-container">

			<nav class="tad-about-hero__breadcrumb tad-reveal" aria-label="<?php echo esc_attr__( 'Breadcrumb', 'trade-africa-direct' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'trade-africa-direct' ); ?></a>
				<span aria-hidden="true">/</span>
				<span><?php esc_html_e( 'About', 'trade-africa-direct' ); ?></span>
			</nav>

			<div class="tad-about-hero__head tad-reveal">
				<p class="tad-about-eyebrow"><?php esc_html_e( 'Our Story', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'Bridging the Gap: From Ugandan Smallholders', 'trade-africa-direct' ); ?><br><em><?php esc_html_e( 'to Global Markets', 'trade-africa-direct' ); ?></em></h1>
				<p><?php esc_html_e( 'We are more than an exporter; we are a vertically integrated supply chain partner. Based in Kampala, we combine traditional East African farming wisdom with modern international logistics.', 'trade-africa-direct' ); ?></p>

				<div class="tad-about-hero__chips">
					<span class="tad-about-chip">
						<strong><?php esc_html_e( 'Founded', 'trade-africa-direct' ); ?></strong>
						<?php esc_html_e( 'Registered Ugandan Corporation', 'trade-africa-direct' ); ?>
					</span>
					<span class="tad-about-chip">
						<strong><?php esc_html_e( '5,000+', 'trade-africa-direct' ); ?></strong>
						<?php esc_html_e( 'Direct Smallholder Partners', 'trade-africa-direct' ); ?>
					</span>
					<span class="tad-about-chip">
						<strong><?php esc_html_e( 'Kampala', 'trade-africa-direct' ); ?></strong>
						<?php esc_html_e( 'Uganda — Operations Hub', 'trade-africa-direct' ); ?>
					</span>
					<span class="tad-about-chip">
						<strong><?php esc_html_e( 'Mission', 'trade-africa-direct' ); ?></strong>
						<?php esc_html_e( 'Quality, Traceability, Shared Prosperity', 'trade-africa-direct' ); ?>
					</span>
				</div>
			</div>

			<div class="tad-about-hero__image tad-reveal tad-reveal--delay-1">
				<img
					src="<?php echo esc_url( $imgs['hero'] ); ?>"
					alt="<?php echo esc_attr__( 'Trade Africa Direct team collaborating on export logistics at the Kampala operations hub.', 'trade-africa-direct' ); ?>"
					loading="lazy"
				>
			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 2 — STATS STRIP (Finovate-style)
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<div class="tad-about-stats">
		<div class="tad-about-container tad-about-stats__row">
			<div class="tad-about-stat tad-reveal">
				<span class="tad-about-stat__value"><?php esc_html_e( '5,000+', 'trade-africa-direct' ); ?></span>
				<span class="tad-about-stat__label"><?php esc_html_e( 'Direct Smallholder Farm Partners', 'trade-africa-direct' ); ?></span>
			</div>
			<div class="tad-about-stat tad-reveal tad-reveal--delay-1">
				<span class="tad-about-stat__value"><?php esc_html_e( '3', 'trade-africa-direct' ); ?></span>
				<span class="tad-about-stat__label"><?php esc_html_e( 'Source Regions — Nakaseke, Mt. Elgon, Bundibugyo', 'trade-africa-direct' ); ?></span>
			</div>
			<div class="tad-about-stat tad-reveal tad-reveal--delay-2">
				<span class="tad-about-stat__value"><?php esc_html_e( '7', 'trade-africa-direct' ); ?></span>
				<span class="tad-about-stat__label"><?php esc_html_e( 'Certified Export Commodities', 'trade-africa-direct' ); ?></span>
			</div>
			<div class="tad-about-stat tad-reveal tad-reveal--delay-3">
				<span class="tad-about-stat__value"><?php esc_html_e( '100%', 'trade-africa-direct' ); ?></span>
				<span class="tad-about-stat__label"><?php esc_html_e( 'Farm-Level Origin Traceability', 'trade-africa-direct' ); ?></span>
			</div>
		</div>
	</div>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 3 — ORIGIN STORY
	   Image left + floating green card (Execor "Driving Success" style)
	   Text right with H2 + body + CTA
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-origin">
		<div class="tad-about-container">
			<div class="tad-about-split tad-about-split--gap-lg">

				<div class="tad-about-img-wrap tad-reveal tad-reveal--from-left">
					<img
						src="<?php echo esc_url( $imgs['farm'] ); ?>"
						alt="<?php echo esc_attr__( 'High-altitude Ugandan farmland showing volcanic soils and lush equatorial vegetation along Lake Victoria.', 'trade-africa-direct' ); ?>"
						loading="lazy"
					>
					<div class="tad-about-float-card" aria-hidden="true">
						<p class="tad-about-float-card__title"><?php esc_html_e( 'Why Our Origin Matters', 'trade-africa-direct' ); ?></p>
						<ul class="tad-about-float-card__list">
							<li><?php esc_html_e( 'Equatorial dual-harvest cycles', 'trade-africa-direct' ); ?></li>
							<li><?php esc_html_e( 'High-altitude volcanic soils', 'trade-africa-direct' ); ?></li>
							<li><?php esc_html_e( 'Lake Victoria freshwater access', 'trade-africa-direct' ); ?></li>
						</ul>
						<a class="tad-about-float-card__btn" href="<?php echo esc_url( $portfolio_url ); ?>">
							<?php esc_html_e( 'View Export Portfolio', 'trade-africa-direct' ); ?>
						</a>
					</div>
				</div>

				<div class="tad-about-copy tad-reveal tad-reveal--from-right">
					<p class="tad-about-eyebrow"><?php esc_html_e( 'The Pearl of Africa', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( "The Pearl of Africa: Why Our Origin Matters", 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( "Uganda's position on the Equator, coupled with its high-altitude volcanic soils and abundant freshwater from Lake Victoria, creates a unique agricultural micro-climate. At Trade Africa Direct, we recognize that the Pearl of Africa offers some of the world's most nutrient-dense produce. However, we also recognize that without infrastructure, this potential is lost.", 'trade-africa-direct' ); ?></p>
					<p><?php esc_html_e( 'As a homegrown Ugandan export company, our purpose is to provide the critical last mile of quality control and international compliance. We do not just buy and sell; we invest in the post-harvest handling, centralized fermentation, and cold-chain technology required to transform raw Ugandan harvests into premium-grade industrial ingredients and retail-ready fresh produce. By choosing us, you are not just sourcing a commodity; you are accessing a transparent, ethically managed ecosystem.', 'trade-africa-direct' ); ?></p>
					<div class="tad-about-copy__actions">
						<a class="tad-about-btn tad-about-btn--primary" href="<?php echo esc_url( $portfolio_url ); ?>">
							<?php esc_html_e( 'Explore Our Export Portfolio', 'trade-africa-direct' ); ?>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 4 — MISSION TWO-COLUMN
	   Execor "Empowering Clients" style: H2 left, copy right
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-mission">
		<div class="tad-about-container">
			<div class="tad-about-mission__inner">
				<div class="tad-about-mission__left tad-reveal tad-reveal--from-left">
					<p class="tad-about-eyebrow"><?php esc_html_e( 'Our Mission', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Transforming Raw Harvests Into Premium-Grade Global Ingredients', 'trade-africa-direct' ); ?></h2>
					<a class="tad-about-text-link" href="<?php echo esc_url( $quality_url ); ?>">
						<?php esc_html_e( 'Explore Our Certifications', 'trade-africa-direct' ); ?>
					</a>
				</div>
				<div class="tad-about-mission__right tad-reveal tad-reveal--from-right">
					<p><?php esc_html_e( "As a homegrown Ugandan export company, our purpose is to provide the critical last mile of quality control and international compliance. We don't just buy and sell; we invest in the post-harvest handling, centralized fermentation, and cold-chain technology required to transform raw Ugandan harvests into premium-grade industrial ingredients and retail-ready fresh produce.", 'trade-africa-direct' ); ?></p>
					<p><?php esc_html_e( 'By choosing Trade Africa Direct, you are not just sourcing a commodity; you are accessing a transparent, ethically managed ecosystem — one built on real relationships with real farmers, not anonymous middlemen.', 'trade-africa-direct' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 5 — DIRECT TRADE ECOSYSTEM
	   "Beyond Fair Trade: Our Farmer-First Model" — 3 cards
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-trade">
		<div class="tad-about-container">

			<div class="tad-about-trade__head tad-reveal">
				<p class="tad-about-eyebrow"><?php esc_html_e( 'Direct Trade', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Beyond Fair Trade: Our Farmer-First Model', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( "Sustainability isn't a buzzword for us — it's our business model. To ensure a consistent 2026 supply for our global partners, we operate a Direct-from-Gate system.", 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-about-trade-grid">

				<article class="tad-about-trade-card tad-reveal tad-reveal--delay-1">
					<div class="tad-about-trade-card__icon" aria-hidden="true">📍</div>
					<span class="tad-about-trade-card__region"><?php esc_html_e( 'Nakaseke · Mt. Elgon · Bundibugyo', 'trade-africa-direct' ); ?></span>
					<h3><?php esc_html_e( 'Centralized Collection', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'We maintain direct collection points in Nakaseke for Fruits, Mt. Elgon for Coffee, and Bundibugyo for Cocoa — eliminating multi-tier brokerage at every stage.', 'trade-africa-direct' ); ?></p>
				</article>

				<article class="tad-about-trade-card tad-reveal tad-reveal--delay-2">
					<div class="tad-about-trade-card__icon" aria-hidden="true">🎓</div>
					<span class="tad-about-trade-card__region"><?php esc_html_e( 'MRL Compliance · Organic Pest Management', 'trade-africa-direct' ); ?></span>
					<h3><?php esc_html_e( 'Technical Assistance', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'We provide our partner farmers with hands-on training on Maximum Residue Limit (MRL) compliance and organic pest management — building a harvest that passes any global inspection.', 'trade-africa-direct' ); ?></p>
				</article>

				<article class="tad-about-trade-card tad-reveal tad-reveal--delay-3">
					<div class="tad-about-trade-card__icon" aria-hidden="true">💰</div>
					<span class="tad-about-trade-card__region"><?php esc_html_e( 'First Right to Grade A Harvest', 'trade-africa-direct' ); ?></span>
					<h3><?php esc_html_e( 'Immediate Liquidity', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'By paying farmers fairly and promptly, we secure the first right to the highest-quality Grade A portion of every harvest — ensuring your orders are always fulfilled with peak-season produce.', 'trade-africa-direct' ); ?></p>
				</article>

			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 6 — CINEMATIC BANNER
	   Full-width facility/warehouse image with floating info card
	   (Finovate "Here's How We Got Started" style)
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<div class="tad-about-banner tad-reveal tad-reveal--scale">
		<img
			class="tad-about-banner__img"
			src="<?php echo esc_url( $imgs['banner'] ); ?>"
			alt="<?php echo esc_attr__( 'Trade Africa Direct Kampala packhouse — sorting tables, cold rooms, and export cartons ready for international shipment.', 'trade-africa-direct' ); ?>"
			loading="lazy"
		>
		<div class="tad-about-banner__card" aria-hidden="true">
			<strong><?php esc_html_e( 'Kampala', 'trade-africa-direct' ); ?></strong>
			<span><?php esc_html_e( 'Uganda Operations Hub', 'trade-africa-direct' ); ?></span>
			<p><?php esc_html_e( 'State-of-the-art packhouse with climate-controlled sorting, in-house lab, and cold-chain logistics direct to EBB or Mombasa Port.', 'trade-africa-direct' ); ?></p>
		</div>
	</div>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 7 — FACILITY & LEADERSHIP
	   Execor "Building on Tradition" style:
	   image left + floating badge → text right with 3 facility points
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-facility">
		<div class="tad-about-container">
			<div class="tad-about-split">

				<div class="tad-about-img-wrap tad-reveal tad-reveal--from-left">
					<img
						src="<?php echo esc_url( $imgs['facility'] ); ?>"
						alt="<?php echo esc_attr__( 'Modern quality-control lab in the Kampala packhouse, with moisture meters and brix analysis equipment.', 'trade-africa-direct' ); ?>"
						loading="lazy"
					>
					<div class="tad-about-badge" aria-hidden="true">
						<strong><?php esc_html_e( 'HACCP', 'trade-africa-direct' ); ?></strong>
						<span><?php esc_html_e( 'Certified Facility', 'trade-africa-direct' ); ?></span>
					</div>
				</div>

				<div class="tad-about-copy tad-reveal tad-reveal--from-right">
					<p class="tad-about-eyebrow"><?php esc_html_e( 'Our Facility', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Modern Infrastructure in the Heart of Kampala', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Our operations are headquartered in a state-of-the-art facility designed for high-efficiency export processing.', 'trade-africa-direct' ); ?></p>

					<ul class="tad-about-facility-list">
						<li>
							<div class="tad-about-facility-list__icon" aria-hidden="true">📦</div>
							<div>
								<strong><?php esc_html_e( 'The Packhouse', 'trade-africa-direct' ); ?></strong>
								<p><?php esc_html_e( 'Features automated weight-sizing for avocados and climate-controlled sorting for dried fruits — ensuring every batch meets export-grade uniformity standards.', 'trade-africa-direct' ); ?></p>
							</div>
						</li>
						<li>
							<div class="tad-about-facility-list__icon" aria-hidden="true">🔬</div>
							<div>
								<strong><?php esc_html_e( 'The In-House Lab', 'trade-africa-direct' ); ?></strong>
								<p><?php esc_html_e( 'Every lot undergoes internal moisture testing, brix measurement, and physical defect analysis before external certification by UNBS or MAAIF.', 'trade-africa-direct' ); ?></p>
							</div>
						</li>
						<li>
							<div class="tad-about-facility-list__icon" aria-hidden="true">🏆</div>
							<div>
								<strong><?php esc_html_e( 'The Team', 'trade-africa-direct' ); ?></strong>
								<p><?php esc_html_e( 'Led by specialists in East African logistics and international food safety standards, including HACCP-certified professionals with direct relationships with MAAIF and UNBS.', 'trade-africa-direct' ); ?></p>
							</div>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 8 — VALUES / THREE PILLARS
	   "Our Three Pillars of Export Excellence"
	   Dark green background, 3 large cards (Finovate fiduciary style)
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-values">
		<div class="tad-about-container">

			<div class="tad-about-values__head tad-reveal">
				<p class="tad-about-eyebrow tad-about-eyebrow--light"><?php esc_html_e( 'Our Philosophy', 'trade-africa-direct' ); ?></p>
				<h2><?php esc_html_e( 'Our Three Pillars of Export Excellence', 'trade-africa-direct' ); ?></h2>
				<p><?php esc_html_e( 'Every decision we make — from which farmer to partner with to which shipping route to use — is guided by these three principles.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-about-values-grid">

				<article class="tad-about-value-card tad-reveal tad-reveal--delay-1">
					<div class="tad-about-value-card__icon" aria-hidden="true">🤝</div>
					<h3><?php esc_html_e( 'Integrity', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'We provide real-time updates on harvest yields and FOB price fluctuations. No hidden middleman fees. No vague assurances. You receive a Certificate of Analysis with every batch, full stop.', 'trade-africa-direct' ); ?></p>
				</article>

				<article class="tad-about-value-card tad-reveal tad-reveal--delay-2">
					<div class="tad-about-value-card__icon" aria-hidden="true">🎯</div>
					<h3><?php esc_html_e( 'Precision', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'We measure quality in percentages and parts-per-million, not just "good" or "bad." Moisture Content, Free Fatty Acids, SCAA Cupping Scores — our documentation speaks the language of your QA team.', 'trade-africa-direct' ); ?></p>
				</article>

				<article class="tad-about-value-card tad-reveal tad-reveal--delay-3">
					<div class="tad-about-value-card__icon" aria-hidden="true">🌱</div>
					<h3><?php esc_html_e( 'Longevity', 'trade-africa-direct' ); ?></h3>
					<p><?php esc_html_e( 'We seek multi-year off-take agreements with partners who value a stable, ethical supply chain over spot-market volatility. Long-term relationships mean better pricing, guaranteed stock, and shared growth.', 'trade-africa-direct' ); ?></p>
				</article>

			</div>
		</div>
	</section>

	<?php /* ═════════════════════════════════════════════════════════════════
	   SECTION 9 — CTA
	   Image left (orchard / founding team) → copy right
	   ═════════════════════════════════════════════════════════════════════ */ ?>
	<section class="tad-about-cta">
		<div class="tad-about-container">
			<div class="tad-about-cta__inner">

				<div class="tad-about-cta__image tad-reveal tad-reveal--from-left">
					<img
						src="<?php echo esc_url( $imgs['orchard'] ); ?>"
						alt="<?php echo esc_attr__( 'Lead agronomist in a lush Hass avocado orchard in central Uganda, inspecting export-grade produce.', 'trade-africa-direct' ); ?>"
						loading="lazy"
					>
				</div>

				<div class="tad-about-cta__copy tad-reveal tad-reveal--from-right">
					<p class="tad-about-eyebrow"><?php esc_html_e( 'Work With Us', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Build a Direct Link to Ugandan Excellence', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Are you ready to diversify your origin strategy with a partner who understands the ground reality of East African trade? Let us discuss your 2026 procurement requirements.', 'trade-africa-direct' ); ?></p>
					<div class="tad-about-cta__actions">
						<a class="tad-about-btn tad-about-btn--primary" href="<?php echo esc_url( $quote_url ); ?>">
							<?php esc_html_e( 'Meet the Team &amp; Book a Consultation', 'trade-africa-direct' ); ?>
						</a>
						<a class="tad-about-btn tad-about-btn--ghost" href="<?php echo esc_url( $quality_url ); ?>">
							<?php esc_html_e( 'View Our CSR &amp; Certifications Report', 'trade-africa-direct' ); ?>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
