<?php
/**
 * Theme settings: contact details and image URL overrides.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TAD_THEME_SETTINGS_OPTION', 'tad_theme_settings' );
define( 'TAD_THEME_IMAGES_OPTION', 'tad_theme_images' );

/**
 * General theme settings (non-image).
 *
 * @return array<string, array{label: string, default: string, description: string, type: string}>
 */
function tad_get_theme_general_settings_registry() {
	return [
		'whatsapp_number' => [
			'label'       => __( 'WhatsApp number', 'trade-africa-direct' ),
			'default'     => defined( 'TAD_WHATSAPP_NUMBER' ) ? (string) TAD_WHATSAPP_NUMBER : '256000000000',
			'description' => __( 'International format without + (used for the floating WhatsApp button and contact links).', 'trade-africa-direct' ),
			'type'        => 'text',
		],
		'whatsapp_label' => [
			'label'       => __( 'WhatsApp display label', 'trade-africa-direct' ),
			'default'     => '+256 [add number]',
			'description' => __( 'Shown in the footer next to the WhatsApp link.', 'trade-africa-direct' ),
			'type'        => 'text',
		],
		'sales_email' => [
			'label'       => __( 'Sales email', 'trade-africa-direct' ),
			'default'     => 'sales@tradeafricadirect.com',
			'description' => __( 'Primary B2B contact email in the footer and quote page.', 'trade-africa-direct' ),
			'type'        => 'email',
		],
		'logo_url_override' => [
			'label'       => __( 'Logo image URL (optional)', 'trade-africa-direct' ),
			'default'     => '',
			'description' => __( 'Overrides the bundled logo in header/footer when set. Leave empty to use Appearance → Customize → Site Identity → Logo, then the theme default at assets/images/logo.png.', 'trade-africa-direct' ),
			'type'        => 'url',
		],
	];
}

/**
 * All theme image slots with defaults and where they appear on the site.
 *
 * @return array<string, array{label: string, location: string, group: string, default: string}>
 */
function tad_get_theme_image_registry() {
	$groups = [
		'global' => [
			'global_logo' => [
				'label'    => __( 'Site logo (bundled fallback)', 'trade-africa-direct' ),
				'location' => __( 'Header and footer when no Customizer logo is set — file: assets/images/logo.png', 'trade-africa-direct' ),
				'default'  => get_stylesheet_directory_uri() . '/assets/images/logo.png',
			],
			'global_blog_fallback' => [
				'label'    => __( 'Blog post featured image fallback', 'trade-africa-direct' ),
				'location' => __( 'Single blog post (Market Insights) when the post has no featured image — template: single.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1400&h=800&fit=crop&q=80',
			],
		],
		'home' => [
			'home_avocados' => [
				'label'    => __( 'Hass avocados collage', 'trade-africa-direct' ),
				'location' => __( 'Home — hero image grid (top) and Fresh Produce product card — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=900&h=650&fit=crop&q=80',
			],
			'home_coffee' => [
				'label'    => __( 'Specialty coffee', 'trade-africa-direct' ),
				'location' => __( 'Home — hero grid and Specialty Coffee product card — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=520&h=420&fit=crop&q=80',
			],
			'home_fruits' => [
				'label'    => __( 'Dried fruits portfolio', 'trade-africa-direct' ),
				'location' => __( 'Home — hero grid and Bulk Dried Fruits product card — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1490474418585-ba9bad8fd0ea?w=620&h=420&fit=crop&q=80',
			],
			'home_warehouse' => [
				'label'    => __( 'Export warehouse', 'trade-africa-direct' ),
				'location' => __( 'Home — hero grid and QA section warehouse photo — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=620&h=420&fit=crop&q=80',
			],
			'home_farm' => [
				'label'    => __( 'Smallholder farm network', 'trade-africa-direct' ),
				'location' => __( 'Home — “From farm to port” section — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=800&h=560&fit=crop&q=80',
			],
			'home_shea' => [
				'label'    => __( 'Nilotica shea butter', 'trade-africa-direct' ),
				'location' => __( 'Home — Nilotica Shea Butter product card — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=620&h=360&fit=crop&q=80',
			],
			'home_cocoa' => [
				'label'    => __( 'Cocoa beans', 'trade-africa-direct' ),
				'location' => __( 'Home — Cocoa Beans product card — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=620&h=360&fit=crop&q=80',
			],
			'home_fish' => [
				'label'    => __( 'Nile perch fillet', 'trade-africa-direct' ),
				'location' => __( 'Home — Freshwater Fish product card — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1534482421-64566f976cfa?w=620&h=360&fit=crop&q=80',
			],
			'home_calendar' => [
				'label'    => __( 'Harvest calendar mockup', 'trade-africa-direct' ),
				'location' => __( 'Home — 2026 Harvest Calendar promo block — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?w=780&h=540&fit=crop&q=80',
			],
			'home_packing' => [
				'label'    => __( 'Export cartons close-up', 'trade-africa-direct' ),
				'location' => __( 'Home — QA & logistics triptych (centre) — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=520&h=360&fit=crop&q=80',
			],
			'home_inspection' => [
				'label'    => __( 'Quality inspection', 'trade-africa-direct' ),
				'location' => __( 'Home — QA & logistics triptych (right) — front-page.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=520&h=360&fit=crop&q=80',
			],
		],
		'portfolio' => [
			'portfolio_avocados' => [
				'label'    => __( 'Hass avocados (hero strip)', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — top hero collage and featured avocado section — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=1400&h=900&fit=crop&q=80',
			],
			'portfolio_coffee' => [
				'label'    => __( 'Green coffee (hero strip)', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — hero collage and coffee featured block — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1400&h=900&fit=crop&q=80',
			],
			'portfolio_shea' => [
				'label'    => __( 'Shea butter', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — shea featured section — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=1400&h=900&fit=crop&q=80',
			],
			'portfolio_dried_fruits' => [
				'label'    => __( 'Dried fruits grid card', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — commodity grid — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1490474418585-ba9bad8fd0ea?w=1000&h=640&fit=crop&q=80',
			],
			'portfolio_macadamia' => [
				'label'    => __( 'Macadamia nuts grid card', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — commodity grid — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=1000&h=640&fit=crop&q=80',
			],
			'portfolio_cocoa' => [
				'label'    => __( 'Cocoa beans grid card', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — commodity grid — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=1000&h=640&fit=crop&q=80',
			],
			'portfolio_fish' => [
				'label'    => __( 'Fish & fish maw grid card', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — commodity grid — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1534482421-64566f976cfa?w=1000&h=640&fit=crop&q=80',
			],
			'portfolio_farm' => [
				'label'    => __( 'Farm at dawn', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — hero collage (third image) — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=900&h=640&fit=crop&q=80',
			],
			'portfolio_warehouse' => [
				'label'    => __( 'Warehouse operations', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — logistics section — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=900&h=640&fit=crop&q=80',
			],
			'portfolio_packing' => [
				'label'    => __( 'Packing line', 'trade-africa-direct' ),
				'location' => __( 'Export Portfolio — logistics section — page-export-portfolio.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=900&h=640&fit=crop&q=80',
			],
		],
		'about' => [
			'about_hero' => [
				'label'    => __( 'Team / operations hero', 'trade-africa-direct' ),
				'location' => __( 'About — wide hero image below page title — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?w=1400&h=560&fit=crop&q=80',
			],
			'about_farm' => [
				'label'    => __( 'Farmland origin', 'trade-africa-direct' ),
				'location' => __( 'About — farmer network section — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1000&h=700&fit=crop&q=80',
			],
			'about_farmers' => [
				'label'    => __( 'Smallholder partners', 'trade-africa-direct' ),
				'location' => __( 'About — farmer network (secondary image, if used in layout) — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=1000&h=700&fit=crop&q=80',
			],
			'about_banner' => [
				'label'    => __( 'Full-width mission banner', 'trade-africa-direct' ),
				'location' => __( 'About — full-bleed banner between sections — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=1800&h=700&fit=crop&q=80',
			],
			'about_facility' => [
				'label'    => __( 'Processing facility / lab', 'trade-africa-direct' ),
				'location' => __( 'About — Kampala facility section — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1576086213369-97a306d36557?w=1000&h=720&fit=crop&q=80',
			],
			'about_orchard' => [
				'label'    => __( 'Orchard / avocados', 'trade-africa-direct' ),
				'location' => __( 'About — values / produce section — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=1000&h=640&fit=crop&q=80',
			],
			'about_coffee' => [
				'label'    => __( 'Coffee grading', 'trade-africa-direct' ),
				'location' => __( 'About — coffee traceability block — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1000&h=640&fit=crop&q=80',
			],
			'about_packing' => [
				'label'    => __( 'Export packing', 'trade-africa-direct' ),
				'location' => __( 'About — packing & cold chain section — page-about.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1000&h=640&fit=crop&q=80',
			],
		],
		'quality' => [
			'quality_documents' => [
				'label'    => __( 'Export documentation', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — hero triptych (left) — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&h=900&fit=crop&q=80',
			],
			'quality_lab' => [
				'label'    => __( 'Laboratory QA', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — hero triptych (centre) — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1576086213369-97a306d36557?w=1200&h=900&fit=crop&q=80',
			],
			'quality_packing' => [
				'label'    => __( 'Export packing', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — hero triptych (right) — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1200&h=900&fit=crop&q=80',
			],
			'quality_route_air' => [
				'label'    => __( 'Air freight route', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — Entebbe air freight route card — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&h=760&fit=crop&q=80',
			],
			'quality_route_sea' => [
				'label'    => __( 'Sea freight route', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — Mombasa sea freight route card — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=1200&h=760&fit=crop&q=80',
			],
			'quality_warehouse' => [
				'label'    => __( 'Warehouse inspection', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — bottom gallery (right) — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&h=900&fit=crop&q=80',
			],
			'quality_stamp' => [
				'label'    => __( 'Certified documents', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — bottom gallery (left) — page-quality-certifications-logistics.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?w=900&h=700&fit=crop&q=80',
			],
			'quality_cold_chain_banner' => [
				'label'    => __( 'Cold chain section background', 'trade-africa-direct' ),
				'location' => __( 'Quality & Logistics — dark “cold chain protocol” band background — assets/css/quality-page.css (.tad-quality-cold)', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1581093458791-9d15482442f6?w=1800&h=820&fit=crop&q=80',
			],
		],
		'quote' => [
			'quote_meeting' => [
				'label'    => __( 'Buyer meeting', 'trade-africa-direct' ),
				'location' => __( 'Request a Quote — sidebar hero image — page-request-a-quote.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1200&h=900&fit=crop&q=80',
			],
			'quote_warehouse' => [
				'label'    => __( 'Warehouse (reserved)', 'trade-africa-direct' ),
				'location' => __( 'Request a Quote — available for future layout use — page-request-a-quote.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=1200&h=900&fit=crop&q=80',
			],
		],
		'insights_blog' => [
			'insights_hero_main' => [
				'label'    => __( 'Market Insights — main hero', 'trade-africa-direct' ),
				'location' => __( 'Market Insights blog archive — hero collage (large) — home.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1000&h=900&fit=crop&q=80',
			],
			'insights_hero_top' => [
				'label'    => __( 'Market Insights — top small hero', 'trade-africa-direct' ),
				'location' => __( 'Market Insights archive — hero collage (top) and post card fallback — home.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=800&h=600&fit=crop&q=80',
			],
			'insights_hero_low' => [
				'label'    => __( 'Market Insights — bottom small hero', 'trade-africa-direct' ),
				'location' => __( 'Market Insights archive — hero collage (bottom) — home.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=800&h=600&fit=crop&q=80',
			],
			'sourcing_hero_main' => [
				'label'    => __( 'Sourcing guide — main hero', 'trade-africa-direct' ),
				'location' => __( 'Uganda Sourcing Guide — hero collage (large) — page-sourcing-guide-uganda.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1100&h=900&fit=crop&q=80',
			],
			'sourcing_hero_top' => [
				'label'    => __( 'Sourcing guide — shipping', 'trade-africa-direct' ),
				'location' => __( 'Uganda Sourcing Guide — hero collage (top) — page-sourcing-guide-uganda.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=900&h=620&fit=crop&q=80',
			],
			'sourcing_hero_low' => [
				'label'    => __( 'Sourcing guide — warehouse', 'trade-africa-direct' ),
				'location' => __( 'Uganda Sourcing Guide — hero collage (bottom) — page-sourcing-guide-uganda.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=900&h=620&fit=crop&q=80',
			],
			'harvest_hero_main' => [
				'label'    => __( 'Harvest calendar — main hero', 'trade-africa-direct' ),
				'location' => __( '2026 Harvest Calendar — hero collage (large) — page-harvest-calendar-2026.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1100&h=900&fit=crop&q=80',
			],
			'harvest_hero_top' => [
				'label'    => __( 'Harvest calendar — avocados', 'trade-africa-direct' ),
				'location' => __( '2026 Harvest Calendar — hero collage (top) — page-harvest-calendar-2026.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=900&h=620&fit=crop&q=80',
			],
			'harvest_hero_low' => [
				'label'    => __( 'Harvest calendar — coffee', 'trade-africa-direct' ),
				'location' => __( '2026 Harvest Calendar — hero collage (bottom) — page-harvest-calendar-2026.php', 'trade-africa-direct' ),
				'default'  => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=900&h=620&fit=crop&q=80',
			],
		],
	];

	$products = [
		'bulk_dried_fruits' => [
			'label'  => __( 'Bulk Dried Fruits', 'trade-africa-direct' ),
			'slug'   => 'bulk-dried-fruits-uganda',
			'hero'     => 'https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1595173967420-8ebe1a7ba98c?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=680&h=400&fit=crop&q=80',
		],
		'macadamia_nuts' => [
			'label'  => __( 'Macadamia Nuts', 'trade-africa-direct' ),
			'slug'   => 'macadamia-nuts-uganda',
			'hero'     => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1526040652367-ac003a0475fe?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=680&h=400&fit=crop&q=80',
		],
		'nilotica_shea' => [
			'label'  => __( 'Nilotica Shea Butter', 'trade-africa-direct' ),
			'slug'   => 'nilotica-shea-butter',
			'hero'     => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1611080541599-8c6dbde6ed28?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1598511726623-d2e9996b1c4f?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=680&h=400&fit=crop&q=80',
		],
		'hass_avocados' => [
			'label'  => __( 'Fresh Hass Avocados', 'trade-africa-direct' ),
			'slug'   => 'fresh-hass-avocados',
			'hero'     => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1541519227354-08fa5d50c820?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=680&h=400&fit=crop&q=80',
		],
		'green_coffee' => [
			'label'  => __( 'Specialty Green Coffee', 'trade-africa-direct' ),
			'slug'   => 'specialty-green-coffee-beans',
			'hero'     => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=680&h=400&fit=crop&q=80',
		],
		'cocoa_beans' => [
			'label'  => __( 'Ugandan Cocoa Beans', 'trade-africa-direct' ),
			'slug'   => 'ugandan-cocoa-beans',
			'hero'     => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1606312619070-d48b4c652a52?w=680&h=400&fit=crop&q=80',
		],
		'nile_perch' => [
			'label'  => __( 'Nile Perch & Fish Maw', 'trade-africa-direct' ),
			'slug'   => 'nile-perch-fish-maw',
			'hero'     => 'https://images.unsplash.com/photo-1534482421-64566f976cfa?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1516684732162-798a0062be99?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1534482421-64566f976cfa?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1534482421-64566f976cfa?w=680&h=400&fit=crop&q=80',
		],
		'seed_template' => [
			'label'  => __( 'Seed product template (generic)', 'trade-africa-direct' ),
			'slug'   => 'template-seed-product',
			'hero'     => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=1400&h=500&fit=crop&q=80',
			'overview' => 'https://images.unsplash.com/photo-1526040652367-ac003a0475fe?w=700&h=460&fit=crop&q=80',
			'mid'      => 'https://images.unsplash.com/photo-1553413077-190dd305871c?w=700&h=480&fit=crop&q=80',
			'cta'      => 'https://images.unsplash.com/photo-1574226516831-e1dff420e562?w=680&h=400&fit=crop&q=80',
		],
	];

	$slot_labels = [
		'hero'     => __( 'Page hero (full width below title)', 'trade-africa-direct' ),
		'overview' => __( 'Product overview section (beside copy)', 'trade-africa-direct' ),
		'mid'      => __( 'Mid-page feature / logistics block', 'trade-africa-direct' ),
		'cta'      => __( 'Bottom CTA band image', 'trade-africa-direct' ),
	];

	$flat = [];

	foreach ( $groups as $group_key => $items ) {
		foreach ( $items as $key => $item ) {
			$flat[ $key ] = array_merge(
				$item,
				[
					'group' => $group_key,
				]
			);
		}
	}

	foreach ( $products as $product_key => $product ) {
		foreach ( $slot_labels as $slot => $slot_label ) {
			$key = 'product_' . $product_key . '_' . $slot;
			$flat[ $key ] = [
				'label'    => sprintf(
					/* translators: 1: product name, 2: image slot. */
					__( '%1$s — %2$s', 'trade-africa-direct' ),
					$product['label'],
					$slot_label
				),
				'location' => sprintf(
					/* translators: 1: product page path, 2: slot description. */
					__( 'Product page /%1$s/ — %2$s', 'trade-africa-direct' ),
					$product['slug'],
					$slot_label
				),
				'group'    => 'products',
				'default'  => $product[ $slot ],
			];
		}
	}

	return $flat;
}

/**
 * Human-readable group titles for the settings screen.
 *
 * @return array<string, string>
 */
function tad_get_theme_image_group_labels() {
	return [
		'global'          => __( 'Site-wide', 'trade-africa-direct' ),
		'home'            => __( 'Home page', 'trade-africa-direct' ),
		'portfolio'       => __( 'Export Portfolio', 'trade-africa-direct' ),
		'about'           => __( 'About', 'trade-africa-direct' ),
		'quality'         => __( 'Quality & Logistics', 'trade-africa-direct' ),
		'quote'           => __( 'Request a Quote', 'trade-africa-direct' ),
		'insights_blog'   => __( 'Market Insights & pillar pages', 'trade-africa-direct' ),
		'products'        => __( 'Product landing pages', 'trade-africa-direct' ),
	];
}

/**
 * Saved image URL overrides.
 *
 * @return array<string, string>
 */
function tad_get_saved_theme_images() {
	$saved = get_option( TAD_THEME_IMAGES_OPTION, [] );

	return is_array( $saved ) ? $saved : [];
}

/**
 * Saved general settings.
 *
 * @return array<string, string>
 */
function tad_get_saved_theme_settings() {
	$saved = get_option( TAD_THEME_SETTINGS_OPTION, [] );

	return is_array( $saved ) ? $saved : [];
}

/**
 * Resolve a theme image URL (custom override or default).
 *
 * @param string $key Registry key.
 * @return string
 */
function tad_get_theme_image( $key ) {
	$registry = tad_get_theme_image_registry();

	if ( ! isset( $registry[ $key ] ) ) {
		return '';
	}

	$saved = tad_get_saved_theme_images();

	if ( ! empty( $saved[ $key ] ) ) {
		return esc_url( $saved[ $key ] );
	}

	return esc_url( $registry[ $key ]['default'] );
}

/**
 * Product page images by registry slug.
 *
 * @param string $product_key e.g. bulk_dried_fruits.
 * @return array{hero: string, overview: string, mid: string, cta: string}
 */
function tad_get_product_page_images( $product_key ) {
	return [
		'hero'     => tad_get_theme_image( 'product_' . $product_key . '_hero' ),
		'overview' => tad_get_theme_image( 'product_' . $product_key . '_overview' ),
		'mid'      => tad_get_theme_image( 'product_' . $product_key . '_mid' ),
		'cta'      => tad_get_theme_image( 'product_' . $product_key . '_cta' ),
	];
}

/**
 * General theme setting value.
 *
 * @param string $key Setting key.
 * @return string
 */
function tad_get_theme_setting( $key ) {
	$registry = tad_get_theme_general_settings_registry();

	if ( ! isset( $registry[ $key ] ) ) {
		return '';
	}

	$saved = tad_get_saved_theme_settings();

	if ( isset( $saved[ $key ] ) && '' !== $saved[ $key ] ) {
		return (string) $saved[ $key ];
	}

	return (string) $registry[ $key ]['default'];
}

/**
 * Register settings and admin menu.
 *
 * @return void
 */
function tad_register_theme_settings() {
	register_setting(
		'tad_theme_settings_group',
		TAD_THEME_SETTINGS_OPTION,
		[
			'type'              => 'array',
			'sanitize_callback' => 'tad_sanitize_theme_settings',
			'default'           => [],
		]
	);

	register_setting(
		'tad_theme_settings_group',
		TAD_THEME_IMAGES_OPTION,
		[
			'type'              => 'array',
			'sanitize_callback' => 'tad_sanitize_theme_images',
			'default'           => [],
		]
	);
}
add_action( 'admin_init', 'tad_register_theme_settings' );

/**
 * @param mixed $input Raw option.
 * @return array<string, string>
 */
function tad_sanitize_theme_settings( $input ) {
	$registry = tad_get_theme_general_settings_registry();
	$output   = [];
	$input    = is_array( $input ) ? $input : [];

	foreach ( $registry as $key => $field ) {
		$value = isset( $input[ $key ] ) ? (string) $input[ $key ] : '';

		if ( 'email' === $field['type'] ) {
			$output[ $key ] = sanitize_email( $value );
		} elseif ( 'url' === $field['type'] ) {
			$output[ $key ] = esc_url_raw( $value );
		} else {
			$output[ $key ] = sanitize_text_field( $value );
		}
	}

	return $output;
}

/**
 * @param mixed $input Raw option.
 * @return array<string, string>
 */
function tad_sanitize_theme_images( $input ) {
	$registry = tad_get_theme_image_registry();
	$output   = [];
	$input    = is_array( $input ) ? $input : [];

	foreach ( $registry as $key => $field ) {
		$value = isset( $input[ $key ] ) ? (string) $input[ $key ] : '';
		$output[ $key ] = $value ? esc_url_raw( $value ) : '';
	}

	return $output;
}

/**
 * Admin menu entry.
 *
 * @return void
 */
function tad_add_theme_settings_menu() {
	add_theme_page(
		__( 'Trade Africa Direct Settings', 'trade-africa-direct' ),
		__( 'Theme Settings', 'trade-africa-direct' ),
		'manage_options',
		'tad-theme-settings',
		'tad_render_theme_settings_page'
	);
}
add_action( 'admin_menu', 'tad_add_theme_settings_menu' );

/**
 * Admin styles for settings previews.
 *
 * @param string $hook_suffix Current admin page hook.
 * @return void
 */
function tad_theme_settings_admin_assets( $hook_suffix ) {
	if ( 'appearance_page_tad-theme-settings' !== $hook_suffix ) {
		return;
	}

	wp_add_inline_style(
		'wp-admin',
		'.tad-settings-wrap{max-width:960px}.tad-settings-section{margin:2rem 0 2.5rem;padding-top:1rem;border-top:1px solid #c3c4c7}
		.tad-image-field{margin:0 0 1.5rem;padding:1rem 1.1rem;background:#fff;border:1px solid #c3c4c7;border-radius:4px}
		.tad-image-field label{font-weight:600;display:block;margin-bottom:.35rem}
		.tad-image-field .description{color:#646970;margin:.25rem 0 .65rem}
		.tad-image-field input[type=url]{width:100%;max-width:100%}
		.tad-image-preview{margin-top:.5rem}.tad-image-preview img{max-width:140px;height:auto;border-radius:4px;border:1px solid #dcdcde;display:block}
		.tad-settings-tabs{margin:1rem 0}.tad-settings-tabs a{margin-right:1rem}'
	);
}
add_action( 'admin_enqueue_scripts', 'tad_theme_settings_admin_assets' );

/**
 * Render settings page.
 *
 * @return void
 */
function tad_render_theme_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$general_saved = tad_get_saved_theme_settings();
	$images_saved  = tad_get_saved_theme_images();
	$general_reg   = tad_get_theme_general_settings_registry();
	$image_reg     = tad_get_theme_image_registry();
	$group_labels  = tad_get_theme_image_group_labels();
	$tab           = isset( $_GET['tab'] ) && 'images' === $_GET['tab'] ? 'images' : 'general'; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

	$grouped_images = [];

	foreach ( $image_reg as $key => $field ) {
		$group = $field['group'];
		if ( ! isset( $grouped_images[ $group ] ) ) {
			$grouped_images[ $group ] = [];
		}
		$grouped_images[ $group ][ $key ] = $field;
	}

	$page_url = admin_url( 'themes.php?page=tad-theme-settings' );
	?>
	<div class="wrap tad-settings-wrap">
		<h1><?php esc_html_e( 'Trade Africa Direct — Theme Settings', 'trade-africa-direct' ); ?></h1>
		<p><?php esc_html_e( 'Update contact details and replace placeholder image URLs with your own media. Each image field explains what it shows and which template uses it.', 'trade-africa-direct' ); ?></p>

		<nav class="tad-settings-tabs" aria-label="<?php esc_attr_e( 'Settings sections', 'trade-africa-direct' ); ?>">
			<a href="<?php echo esc_url( $page_url ); ?>" <?php echo 'general' === $tab ? 'aria-current="page"' : ''; ?>><?php esc_html_e( 'General', 'trade-africa-direct' ); ?></a>
			<a href="<?php echo esc_url( add_query_arg( 'tab', 'images', $page_url ) ); ?>" <?php echo 'images' === $tab ? 'aria-current="page"' : ''; ?>><?php esc_html_e( 'Images', 'trade-africa-direct' ); ?></a>
		</nav>

		<?php if ( 'general' === $tab ) : ?>
			<form method="post" action="options.php">
				<?php settings_fields( 'tad_theme_settings_group' ); ?>
				<input type="hidden" name="option_page" value="tad_theme_settings_group" />
				<table class="form-table" role="presentation">
					<?php foreach ( $general_reg as $key => $field ) : ?>
						<tr>
							<th scope="row"><label for="tad-general-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $field['label'] ); ?></label></th>
							<td>
								<input
									id="tad-general-<?php echo esc_attr( $key ); ?>"
									name="<?php echo esc_attr( TAD_THEME_SETTINGS_OPTION ); ?>[<?php echo esc_attr( $key ); ?>]"
									type="<?php echo esc_attr( $field['type'] ); ?>"
									value="<?php echo esc_attr( isset( $general_saved[ $key ] ) ? $general_saved[ $key ] : $field['default'] ); ?>"
									class="regular-text"
								/>
								<p class="description"><?php echo esc_html( $field['description'] ); ?></p>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<?php submit_button(); ?>
			</form>
		<?php else : ?>
			<form method="post" action="options.php">
				<?php settings_fields( 'tad_theme_settings_group' ); ?>
				<input type="hidden" name="option_page" value="tad_theme_settings_group" />
				<?php foreach ( $group_labels as $group_key => $group_title ) : ?>
					<?php if ( empty( $grouped_images[ $group_key ] ) ) : ?>
						<?php continue; ?>
					<?php endif; ?>
					<section class="tad-settings-section">
						<h2><?php echo esc_html( $group_title ); ?></h2>
						<?php foreach ( $grouped_images[ $group_key ] as $key => $field ) : ?>
							<?php
							$current = isset( $images_saved[ $key ] ) && $images_saved[ $key ] ? $images_saved[ $key ] : $field['default'];
							?>
							<div class="tad-image-field">
								<label for="tad-image-<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $field['label'] ); ?></label>
								<p class="description"><strong><?php esc_html_e( 'Where:', 'trade-africa-direct' ); ?></strong> <?php echo esc_html( $field['location'] ); ?></p>
								<input
									id="tad-image-<?php echo esc_attr( $key ); ?>"
									name="<?php echo esc_attr( TAD_THEME_IMAGES_OPTION ); ?>[<?php echo esc_attr( $key ); ?>]"
									type="url"
									value="<?php echo esc_attr( $current ); ?>"
									placeholder="<?php echo esc_attr( $field['default'] ); ?>"
								/>
								<p class="description"><?php esc_html_e( 'Paste a full image URL (Media Library → attachment → Copy URL). Leave as default URL to keep the bundled placeholder.', 'trade-africa-direct' ); ?></p>
								<div class="tad-image-preview">
									<img src="<?php echo esc_url( $current ); ?>" alt="" loading="lazy" onerror="this.style.display='none'">
								</div>
							</div>
						<?php endforeach; ?>
					</section>
				<?php endforeach; ?>
				<?php submit_button(); ?>
			</form>
		<?php endif; ?>
	</div>
	<?php
}

/**
 * Inline CSS for quality page CTA background from settings.
 *
 * @return void
 */
function tad_enqueue_quality_page_dynamic_styles() {
	if ( ! is_page_template( 'page-quality-certifications-logistics.php' ) ) {
		return;
	}

	$banner = tad_get_theme_image( 'quality_cold_chain_banner' );

	if ( ! $banner ) {
		return;
	}

	wp_add_inline_style(
		'tad-quality-page',
		'.tad-quality-cold::before{background:linear-gradient(90deg,rgba(0,38,36,.94),rgba(0,38,36,.68)),url("' . esc_url( $banner ) . '") center/cover}'
	);
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_quality_page_dynamic_styles', 40 );
