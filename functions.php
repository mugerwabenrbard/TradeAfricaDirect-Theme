<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once get_stylesheet_directory() . '/inc/theme-settings.php';

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.2' );

/** WhatsApp number in international format without + (update when live number is confirmed). */
define( 'TAD_WHATSAPP_NUMBER', '256000000000' );

/**
 * Theme logo URL (Customizer logo, else bundled wordmark).
 *
 * @return string
 */
function tad_get_theme_logo_url() {
	$override = tad_get_theme_setting( 'logo_url_override' );

	if ( $override ) {
		return $override;
	}

	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( $custom_logo_id ) {
		$url = wp_get_attachment_image_url( $custom_logo_id, 'full' );

		if ( $url ) {
			return $url;
		}
	}

	$logo_path = get_stylesheet_directory() . '/assets/images/logo.png';
	$logo_url  = tad_get_theme_image( 'global_logo' );

	if ( file_exists( $logo_path ) && false !== strpos( $logo_url, '/assets/images/logo.png' ) ) {
		$logo_url = add_query_arg( 'v', (string) filemtime( $logo_path ), $logo_url );
	}

	return $logo_url;
}

/**
 * WhatsApp chat URL for site-wide floating button and contact links.
 *
 * @return string
 */
function tad_get_whatsapp_url() {
	$number = tad_get_theme_setting( 'whatsapp_number' );
	$digits = preg_replace( '/\D+/', '', $number );

	return $digits ? 'https://wa.me/' . $digits : '';
}

/**
 * Register theme features and menu labels used by the child theme.
 *
 * @return void
 */
function trade_africa_direct_theme_setup() {
	register_nav_menus(
		[
			'menu-1' => esc_html__( 'Header', 'trade-africa-direct' ),
			'menu-2' => esc_html__( 'Footer', 'trade-africa-direct' ),
		]
	);
}
add_action( 'after_setup_theme', 'trade_africa_direct_theme_setup', 20 );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'trade-africa-direct-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Work+Sans:wght@500;600;700&display=swap',
		[],
		null
	);

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
			'trade-africa-direct-fonts',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

	wp_register_script(
		'trade-africa-direct-navigation',
		false,
		[],
		HELLO_ELEMENTOR_CHILD_VERSION,
		true
	);

	wp_enqueue_script( 'trade-africa-direct-navigation' );

	wp_add_inline_script(
		'trade-africa-direct-navigation',
		"(function () {
			var toggle = document.querySelector('[data-tad-menu-toggle]');
			var nav = document.querySelector('[data-tad-primary-nav]');

			if (toggle && nav) {
				var header = toggle.closest('.tad-site-header');
				var closeMenu = function () {
					toggle.setAttribute('aria-expanded', 'false');
					if (header) {
						header.classList.remove('is-menu-open');
					}
				};

				toggle.addEventListener('click', function () {
					var isExpanded = toggle.getAttribute('aria-expanded') === 'true';
					toggle.setAttribute('aria-expanded', String(!isExpanded));
					if (header) {
						header.classList.toggle('is-menu-open', !isExpanded);
					}
				});

				nav.addEventListener('click', function (event) {
					if (event.target && event.target.closest('a')) {
						closeMenu();
					}
				});

				document.addEventListener('keydown', function (event) {
					if (event.key === 'Escape') {
						closeMenu();
					}
				});

				window.addEventListener('resize', function () {
					if (window.innerWidth > 900) {
						closeMenu();
					}
				});
			}

			var reveals = document.querySelectorAll('.tad-reveal');
			var reducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

			if ('IntersectionObserver' in window && reveals.length && !reducedMotion) {
				document.body.classList.add('tad-reveal-ready');
				var observer = new IntersectionObserver(function (entries) {
					entries.forEach(function (entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				}, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

				reveals.forEach(function (element) {
					observer.observe(element);
				});
			} else {
				reveals.forEach(function (element) {
					element.classList.add('is-visible');
				});
			}

			var siteHeader = document.querySelector('.tad-site-header');
			var backToTop = document.querySelector('[data-tad-back-to-top]');
			var lastScrollY = window.scrollY;
			var scrollTicking = false;
			var headerRevealOffset = 72;

			var updateScrollUi = function () {
				var currentScrollY = window.scrollY;

				if (siteHeader) {
					if (currentScrollY <= headerRevealOffset) {
						siteHeader.classList.remove('is-header-hidden');
					} else if (currentScrollY > lastScrollY + 4) {
						siteHeader.classList.add('is-header-hidden');
					} else if (currentScrollY < lastScrollY - 4) {
						siteHeader.classList.remove('is-header-hidden');
					}
				}

				if (backToTop) {
					backToTop.classList.toggle('is-visible', currentScrollY > 420);
				}

				lastScrollY = currentScrollY;
				scrollTicking = false;
			};

			var onScroll = function () {
				if (!scrollTicking) {
					scrollTicking = true;
					window.requestAnimationFrame(updateScrollUi);
				}
			};

			window.addEventListener('scroll', onScroll, { passive: true });
			updateScrollUi();

			if (backToTop) {
				backToTop.addEventListener('click', function () {
					window.scrollTo({ top: 0, behavior: reducedMotion ? 'auto' : 'smooth' });
				});
			}
		}());"
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * Enqueue product page stylesheet for commodity landing page templates.
 *
 * @return void
 */
function tad_enqueue_product_page_styles() {
	$product_templates = [
		'page-bulk-dried-fruits-uganda.php',
		'page-macadamia-nuts-uganda.php',
		'page-nilotica-shea-butter.php',
		'page-fresh-hass-avocados.php',
		'page-specialty-green-coffee-beans.php',
		'page-ugandan-cocoa-beans.php',
		'page-nile-perch-fish-maw.php',
		'template-seed-product.php',
	];

	foreach ( $product_templates as $tpl ) {
		if ( is_page_template( $tpl ) ) {
			wp_enqueue_style(
				'tad-product-pages',
				get_stylesheet_directory_uri() . '/assets/css/product-pages.css',
				[ 'hello-elementor-child-style' ],
				HELLO_ELEMENTOR_CHILD_VERSION
			);
			break;
		}
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_product_page_styles', 30 );

/**
 * Enqueue portfolio page stylesheet.
 *
 * @return void
 */
function tad_enqueue_portfolio_page_styles() {
	if ( is_page_template( 'page-export-portfolio.php' ) ) {
		wp_enqueue_style(
			'tad-portfolio-page',
			get_stylesheet_directory_uri() . '/assets/css/portfolio-page.css',
			[ 'hello-elementor-child-style' ],
			HELLO_ELEMENTOR_CHILD_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_portfolio_page_styles', 30 );

/**
 * Enqueue about page stylesheet.
 *
 * @return void
 */
function tad_enqueue_about_page_styles() {
	if ( is_page_template( 'page-about.php' ) ) {
		wp_enqueue_style(
			'tad-about-page',
			get_stylesheet_directory_uri() . '/assets/css/about-page.css',
			[ 'hello-elementor-child-style' ],
			HELLO_ELEMENTOR_CHILD_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_about_page_styles', 30 );

/**
 * Enqueue quality assurance page stylesheet.
 *
 * @return void
 */
function tad_enqueue_quality_page_styles() {
	if ( is_page_template( 'page-quality-certifications-logistics.php' ) ) {
		wp_enqueue_style(
			'tad-quality-page',
			get_stylesheet_directory_uri() . '/assets/css/quality-page.css',
			[ 'hello-elementor-child-style' ],
			HELLO_ELEMENTOR_CHILD_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_quality_page_styles', 30 );

/**
 * Enqueue contact / quote request page stylesheet.
 *
 * @return void
 */
function tad_enqueue_contact_page_styles() {
	if ( is_page_template( 'page-request-a-quote.php' ) ) {
		wp_enqueue_style(
			'tad-contact-page',
			get_stylesheet_directory_uri() . '/assets/css/contact-page.css',
			[ 'hello-elementor-child-style' ],
			HELLO_ELEMENTOR_CHILD_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_contact_page_styles', 30 );

/**
 * Enqueue blog archive and single post stylesheet.
 *
 * @return void
 */
function tad_enqueue_blog_page_styles() {
	if ( is_home() || is_archive() || is_search() || is_singular( 'post' ) ) {
		wp_enqueue_style(
			'tad-blog-page',
			get_stylesheet_directory_uri() . '/assets/css/blog-page.css',
			[ 'hello-elementor-child-style' ],
			HELLO_ELEMENTOR_CHILD_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_blog_page_styles', 30 );

/**
 * Enqueue market insights pillar page stylesheet.
 *
 * @return void
 */
function tad_enqueue_insights_page_styles() {
	$insight_templates = [
		'page-sourcing-guide-uganda.php',
		'page-harvest-calendar-2026.php',
	];

	foreach ( $insight_templates as $template ) {
		if ( is_page_template( $template ) ) {
			wp_enqueue_style(
				'tad-insights-page',
				get_stylesheet_directory_uri() . '/assets/css/insights-page.css',
				[ 'hello-elementor-child-style' ],
				HELLO_ELEMENTOR_CHILD_VERSION
			);
			break;
		}
	}
}
add_action( 'wp_enqueue_scripts', 'tad_enqueue_insights_page_styles', 30 );

/**
 * Create a page by path if it does not already exist and assign its template.
 *
 * @param array $page Page settings.
 * @param array $created_pages Previously created page IDs keyed by slug path.
 * @return int Page ID.
 */
function tad_create_or_update_theme_page( $page, $created_pages ) {
	$path          = trim( $page['path'], '/' );
	$slug          = basename( $path );
	$parent_path   = isset( $page['parent'] ) ? trim( $page['parent'], '/' ) : '';
	$parent_id     = $parent_path && isset( $created_pages[ $parent_path ] ) ? (int) $created_pages[ $parent_path ] : 0;
	$existing_page = get_page_by_path( $path );

	if ( $existing_page ) {
		$page_id = (int) $existing_page->ID;

		if ( $parent_id && (int) $existing_page->post_parent !== $parent_id ) {
			wp_update_post(
				[
					'ID'          => $page_id,
					'post_parent' => $parent_id,
				]
			);
		}
	} else {
		$page_id = wp_insert_post(
			[
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_title'   => $page['title'],
				'post_name'    => $slug,
				'post_parent'  => $parent_id,
				'post_content' => isset( $page['content'] ) ? $page['content'] : '',
			]
		);
	}

	if ( ! is_wp_error( $page_id ) && ! empty( $page['template'] ) ) {
		update_post_meta( (int) $page_id, '_wp_page_template', $page['template'] );
	}

	return is_wp_error( $page_id ) ? 0 : (int) $page_id;
}

/**
 * Return an existing menu item ID by title so activation can run repeatedly without duplicates.
 *
 * @param int    $menu_id Menu term ID.
 * @param string $title Menu item title.
 * @return int
 */
function tad_get_menu_item_id_by_title( $menu_id, $title ) {
	$items = wp_get_nav_menu_items( $menu_id );

	if ( empty( $items ) ) {
		return 0;
	}

	foreach ( $items as $item ) {
		if ( $title === $item->title ) {
			return (int) $item->ID;
		}
	}

	return 0;
}

/**
 * Create or update a nav menu item.
 *
 * @param int   $menu_id Menu term ID.
 * @param array $item Menu item settings.
 * @return int
 */
function tad_create_or_update_menu_item( $menu_id, $item ) {
	$title    = $item['title'];
	$item_id  = tad_get_menu_item_id_by_title( $menu_id, $title );
	$defaults = [
		'menu-item-title'     => $title,
		'menu-item-status'    => 'publish',
		'menu-item-parent-id' => isset( $item['parent_id'] ) ? (int) $item['parent_id'] : 0,
	];

	if ( ! empty( $item['page_id'] ) ) {
		$defaults['menu-item-type']      = 'post_type';
		$defaults['menu-item-object']    = 'page';
		$defaults['menu-item-object-id'] = (int) $item['page_id'];
	} else {
		$defaults['menu-item-type'] = 'custom';
		$defaults['menu-item-url']  = isset( $item['url'] ) ? $item['url'] : '#';
	}

	$result = wp_update_nav_menu_item( $menu_id, $item_id, $defaults );

	return is_wp_error( $result ) ? 0 : (int) $result;
}

/**
 * Create the primary navigation menu and assign it to the Header menu location.
 *
 * @param array $created_pages Created page IDs keyed by slug path.
 * @return void
 */
function tad_create_primary_menu_on_activation( $created_pages ) {
	$menu_name = __( 'Primary Menu', 'trade-africa-direct' );
	$menu      = wp_get_nav_menu_object( $menu_name );

	if ( ! $menu ) {
		$menu_id = wp_create_nav_menu( $menu_name );

		if ( is_wp_error( $menu_id ) ) {
			return;
		}
	} else {
		$menu_id = (int) $menu->term_id;
	}

	tad_create_or_update_menu_item(
		$menu_id,
		[
			'title' => __( 'Home', 'trade-africa-direct' ),
			'url'   => home_url( '/' ),
		]
	);

	$products_item_id = tad_create_or_update_menu_item(
		$menu_id,
		[
			'title' => __( 'Products', 'trade-africa-direct' ),
			'url'   => home_url( '/export-portfolio/' ),
		]
	);

	$product_pages = [
		'bulk-dried-fruits-uganda'       => __( 'Bulk Dried Fruits', 'trade-africa-direct' ),
		'fresh-hass-avocados'           => __( 'Fresh Hass Avocados', 'trade-africa-direct' ),
		'macadamia-nuts-uganda'         => __( 'Raw Macadamia Nuts', 'trade-africa-direct' ),
		'nilotica-shea-butter'          => __( 'Nilotica Shea Butter', 'trade-africa-direct' ),
		'specialty-green-coffee-beans'  => __( 'Specialty Coffee', 'trade-africa-direct' ),
		'ugandan-cocoa-beans'           => __( 'Cocoa Beans', 'trade-africa-direct' ),
		'nile-perch-fish-maw'           => __( 'Nile Perch & Fish Maw', 'trade-africa-direct' ),
	];

	foreach ( $product_pages as $path => $title ) {
		if ( empty( $created_pages[ $path ] ) ) {
			continue;
		}

		tad_create_or_update_menu_item(
			$menu_id,
			[
				'title'     => $title,
				'page_id'   => $created_pages[ $path ],
				'parent_id' => $products_item_id,
			]
		);
	}

	if ( ! empty( $created_pages['quality-certifications-logistics'] ) ) {
		tad_create_or_update_menu_item(
			$menu_id,
			[
				'title'   => __( 'Quality & Logistics', 'trade-africa-direct' ),
				'page_id' => $created_pages['quality-certifications-logistics'],
			]
		);
	}

	if ( ! empty( $created_pages['about'] ) ) {
		tad_create_or_update_menu_item(
			$menu_id,
			[
				'title'   => __( 'About', 'trade-africa-direct' ),
				'page_id' => $created_pages['about'],
			]
		);
	}

	$insights_item_id = ! empty( $created_pages['market-insights'] ) ? tad_create_or_update_menu_item(
		$menu_id,
		[
			'title'   => __( 'Market Insights', 'trade-africa-direct' ),
			'page_id' => $created_pages['market-insights'],
		]
	) : 0;

	$insight_pages = [
		'market-insights/sourcing-agricultural-products-uganda' => __( 'Uganda Sourcing Guide 2026', 'trade-africa-direct' ),
		'uganda-harvest-calendar-2026'                         => __( '2026 Harvest Calendar', 'trade-africa-direct' ),
	];

	foreach ( $insight_pages as $path => $title ) {
		if ( empty( $created_pages[ $path ] ) ) {
			continue;
		}

		tad_create_or_update_menu_item(
			$menu_id,
			[
				'title'     => $title,
				'page_id'   => $created_pages[ $path ],
				'parent_id' => $insights_item_id,
			]
		);
	}

	$locations           = get_theme_mod( 'nav_menu_locations', [] );
	$locations['menu-1'] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Create core site pages and configure front page / posts page on theme activation.
 *
 * @return void
 */
function tad_create_theme_pages_on_activation() {
	$pages = [
		[
			'path'     => 'home',
			'title'    => __( 'Home', 'trade-africa-direct' ),
			'template' => '',
		],
		[
			'path'     => 'export-portfolio',
			'title'    => __( 'Export Portfolio', 'trade-africa-direct' ),
			'template' => 'page-export-portfolio.php',
		],
		[
			'path'     => 'about',
			'title'    => __( 'About Our Export Company', 'trade-africa-direct' ),
			'template' => 'page-about.php',
		],
		[
			'path'     => 'quality-certifications-logistics',
			'title'    => __( 'Quality Assurance, Certifications & Logistics', 'trade-africa-direct' ),
			'template' => 'page-quality-certifications-logistics.php',
		],
		[
			'path'     => 'request-a-quote',
			'title'    => __( 'Request a B2B Export Quote', 'trade-africa-direct' ),
			'template' => 'page-request-a-quote.php',
		],
		[
			'path'     => 'market-insights',
			'title'    => __( 'Market Insights', 'trade-africa-direct' ),
			'template' => '',
		],
		[
			'path'     => 'market-insights/sourcing-agricultural-products-uganda',
			'parent'   => 'market-insights',
			'title'    => __( 'The Ultimate Guide to Sourcing & Importing Agricultural Products from Uganda (2026)', 'trade-africa-direct' ),
			'template' => 'page-sourcing-guide-uganda.php',
		],
		[
			'path'     => 'uganda-harvest-calendar-2026',
			'title'    => __( '2026 Uganda Agricultural Harvest Calendar', 'trade-africa-direct' ),
			'template' => 'page-harvest-calendar-2026.php',
		],
		[
			'path'     => 'bulk-dried-fruits-uganda',
			'title'    => __( 'Wholesale Dried Mango, Pineapple, and Jackfruit (Uganda Origin)', 'trade-africa-direct' ),
			'template' => 'page-bulk-dried-fruits-uganda.php',
		],
		[
			'path'     => 'macadamia-nuts-uganda',
			'title'    => __( 'Wholesale Raw Macadamia Nuts: Premium Uganda Origin', 'trade-africa-direct' ),
			'template' => 'page-macadamia-nuts-uganda.php',
		],
		[
			'path'     => 'nilotica-shea-butter',
			'title'    => __( 'Wholesale Nilotica Shea Butter: 100% Unrefined & Grade A', 'trade-africa-direct' ),
			'template' => 'page-nilotica-shea-butter.php',
		],
		[
			'path'     => 'fresh-hass-avocados',
			'title'    => __( 'Wholesale Ugandan Hass Avocados: Premium Export Grade', 'trade-africa-direct' ),
			'template' => 'page-fresh-hass-avocados.php',
		],
		[
			'path'     => 'specialty-green-coffee-beans',
			'title'    => __( 'Wholesale Ugandan Green Coffee: Specialty Arabica & Fine Robusta', 'trade-africa-direct' ),
			'template' => 'page-specialty-green-coffee-beans.php',
		],
		[
			'path'     => 'ugandan-cocoa-beans',
			'title'    => __( 'Wholesale Ugandan Cocoa Beans: Bundibugyo Origin', 'trade-africa-direct' ),
			'template' => 'page-ugandan-cocoa-beans.php',
		],
		[
			'path'     => 'nile-perch-fish-maw',
			'title'    => __( 'Export-Grade Nile Perch Fillets & Premium Fish Maw', 'trade-africa-direct' ),
			'template' => 'page-nile-perch-fish-maw.php',
		],
	];

	$created_pages = [];

	foreach ( $pages as $page ) {
		$page_id = tad_create_or_update_theme_page( $page, $created_pages );

		if ( $page_id ) {
			$created_pages[ trim( $page['path'], '/' ) ] = $page_id;
		}
	}

	tad_apply_reading_settings( $created_pages );

	tad_create_primary_menu_on_activation( $created_pages );

	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'tad_create_theme_pages_on_activation' );

/**
 * Set static front page and posts page (Market Insights) in Settings > Reading.
 *
 * @param array $page_ids Optional map of slug path => page ID from theme activation.
 * @return bool True when posts page was configured.
 */
function tad_apply_reading_settings( $page_ids = [] ) {
	$home_id     = ! empty( $page_ids['home'] ) ? (int) $page_ids['home'] : 0;
	$insights_id = ! empty( $page_ids['market-insights'] ) ? (int) $page_ids['market-insights'] : 0;

	if ( ! $home_id ) {
		$home_page = get_page_by_path( 'home' );
		$home_id   = $home_page ? (int) $home_page->ID : 0;
	}

	if ( ! $insights_id ) {
		$insights_page = get_page_by_path( 'market-insights' );
		$insights_id   = $insights_page ? (int) $insights_page->ID : 0;
	}

	if ( ! $insights_id ) {
		return false;
	}

	update_option( 'show_on_front', 'page' );

	if ( $home_id ) {
		update_option( 'page_on_front', $home_id );
	}

	update_option( 'page_for_posts', $insights_id );

	return true;
}

/**
 * Repair Reading settings when they drift from the theme defaults (no reactivation required).
 *
 * @return void
 */
function tad_maybe_repair_reading_settings() {
	if ( wp_installing() ) {
		return;
	}

	$insights_page = get_page_by_path( 'market-insights' );

	if ( ! $insights_page ) {
		return;
	}

	$insights_id  = (int) $insights_page->ID;
	$needs_repair = 'page' !== get_option( 'show_on_front' )
		|| (int) get_option( 'page_for_posts' ) !== $insights_id;

	$home_page = get_page_by_path( 'home' );

	if ( $home_page && (int) get_option( 'page_on_front' ) !== (int) $home_page->ID ) {
		$needs_repair = true;
	}

	if ( ! $needs_repair ) {
		return;
	}

	tad_apply_reading_settings();
}
add_action( 'init', 'tad_maybe_repair_reading_settings', 20 );
add_action( 'admin_init', 'tad_maybe_repair_reading_settings', 5 );

/**
 * Return the minimum required page setup for this theme.
 *
 * @return array
 */
function tad_get_theme_setup_requirements() {
	return [
		[
			'path'     => 'home',
			'label'    => __( 'Home', 'trade-africa-direct' ),
			'template' => '',
			'role'     => 'front',
		],
		[
			'path'     => 'export-portfolio',
			'label'    => __( 'Export Portfolio', 'trade-africa-direct' ),
			'template' => 'page-export-portfolio.php',
		],
		[
			'path'     => 'about',
			'label'    => __( 'About Our Export Company', 'trade-africa-direct' ),
			'template' => 'page-about.php',
		],
		[
			'path'     => 'quality-certifications-logistics',
			'label'    => __( 'Quality Assurance, Certifications & Logistics', 'trade-africa-direct' ),
			'template' => 'page-quality-certifications-logistics.php',
		],
		[
			'path'     => 'request-a-quote',
			'label'    => __( 'Request a B2B Export Quote', 'trade-africa-direct' ),
			'template' => 'page-request-a-quote.php',
		],
		[
			'path'     => 'market-insights',
			'label'    => __( 'Market Insights (Blog)', 'trade-africa-direct' ),
			'template' => '',
			'role'     => 'posts',
		],
		[
			'path'     => 'market-insights/sourcing-agricultural-products-uganda',
			'parent'   => 'market-insights',
			'label'    => __( 'Uganda Sourcing Guide', 'trade-africa-direct' ),
			'template' => 'page-sourcing-guide-uganda.php',
		],
		[
			'path'     => 'uganda-harvest-calendar-2026',
			'label'    => __( '2026 Uganda Agricultural Harvest Calendar', 'trade-africa-direct' ),
			'template' => 'page-harvest-calendar-2026.php',
		],
		[
			'path'     => 'bulk-dried-fruits-uganda',
			'label'    => __( 'Bulk Dried Fruits', 'trade-africa-direct' ),
			'template' => 'page-bulk-dried-fruits-uganda.php',
		],
		[
			'path'     => 'macadamia-nuts-uganda',
			'label'    => __( 'Macadamia Nuts', 'trade-africa-direct' ),
			'template' => 'page-macadamia-nuts-uganda.php',
		],
		[
			'path'     => 'nilotica-shea-butter',
			'label'    => __( 'Nilotica Shea Butter', 'trade-africa-direct' ),
			'template' => 'page-nilotica-shea-butter.php',
		],
		[
			'path'     => 'fresh-hass-avocados',
			'label'    => __( 'Fresh Hass Avocados', 'trade-africa-direct' ),
			'template' => 'page-fresh-hass-avocados.php',
		],
		[
			'path'     => 'specialty-green-coffee-beans',
			'label'    => __( 'Specialty Green Coffee Beans', 'trade-africa-direct' ),
			'template' => 'page-specialty-green-coffee-beans.php',
		],
		[
			'path'     => 'ugandan-cocoa-beans',
			'label'    => __( 'Ugandan Cocoa Beans', 'trade-africa-direct' ),
			'template' => 'page-ugandan-cocoa-beans.php',
		],
		[
			'path'     => 'nile-perch-fish-maw',
			'label'    => __( 'Nile Perch & Fish Maw', 'trade-africa-direct' ),
			'template' => 'page-nile-perch-fish-maw.php',
		],
	];
}

/**
 * Validate the theme's required WordPress page/template setup.
 *
 * @return array
 */
function tad_get_theme_setup_warnings() {
	$warnings = [];
	$pages    = [];

	foreach ( tad_get_theme_setup_requirements() as $requirement ) {
		$path = trim( $requirement['path'], '/' );
		$page = get_page_by_path( $path );

		if ( ! $page ) {
			$warnings[] = sprintf(
				/* translators: 1: page label, 2: expected path. */
				__( 'Missing page: %1$s. Expected URL path: /%2$s/.', 'trade-africa-direct' ),
				$requirement['label'],
				$path
			);
			continue;
		}

		$pages[ $path ] = $page;

		if ( ! empty( $requirement['template'] ) ) {
			$template_path = get_stylesheet_directory() . '/' . $requirement['template'];

			if ( ! file_exists( $template_path ) ) {
				$warnings[] = sprintf(
					/* translators: 1: template filename, 2: page label. */
					__( 'Missing template file %1$s for %2$s.', 'trade-africa-direct' ),
					$requirement['template'],
					$requirement['label']
				);
			}

			$assigned_template = get_page_template_slug( $page );

			if ( $assigned_template !== $requirement['template'] ) {
				$warnings[] = sprintf(
					/* translators: 1: page label, 2: assigned template, 3: required template. */
					__( 'Template mismatch for %1$s. Current: %2$s. Required: %3$s.', 'trade-africa-direct' ),
					$requirement['label'],
					$assigned_template ? $assigned_template : __( 'Default template', 'trade-africa-direct' ),
					$requirement['template']
				);
			}
		}
	}

	foreach ( tad_get_theme_setup_requirements() as $requirement ) {
		if ( empty( $requirement['parent'] ) ) {
			continue;
		}

		$path        = trim( $requirement['path'], '/' );
		$parent_path = trim( $requirement['parent'], '/' );

		if ( empty( $pages[ $path ] ) || empty( $pages[ $parent_path ] ) ) {
			continue;
		}

		if ( (int) $pages[ $path ]->post_parent !== (int) $pages[ $parent_path ]->ID ) {
			$warnings[] = sprintf(
				/* translators: 1: child page label, 2: parent path. */
				__( 'Hierarchy mismatch: %1$s should be a child page of /%2$s/.', 'trade-africa-direct' ),
				$requirement['label'],
				$parent_path
			);
		}
	}

	$home_page = isset( $pages['home'] ) ? $pages['home'] : null;
	$posts_page = isset( $pages['market-insights'] ) ? $pages['market-insights'] : null;

	if ( 'page' !== get_option( 'show_on_front' ) ) {
		$warnings[] = __( 'Reading setting mismatch: homepage display should be set to "A static page".', 'trade-africa-direct' );
	}

	if ( $home_page && (int) get_option( 'page_on_front' ) !== (int) $home_page->ID ) {
		$warnings[] = __( 'Front page mismatch: the Home page should be selected as the static front page.', 'trade-africa-direct' );
	}

	if ( $posts_page && (int) get_option( 'page_for_posts' ) !== (int) $posts_page->ID ) {
		$warnings[] = __( 'Posts page mismatch: Market Insights should be selected as the posts page in Settings > Reading.', 'trade-africa-direct' );
	}

	if ( ! has_nav_menu( 'menu-1' ) ) {
		$warnings[] = __( 'Primary Menu mismatch: Appearance > Menus should have a menu assigned to the Header location.', 'trade-africa-direct' );
	}

	return $warnings;
}

/**
 * Show admin warnings when the theme page/template setup is incomplete.
 *
 * @return void
 */
function tad_show_theme_setup_admin_warnings() {
	if ( ! current_user_can( 'manage_options' ) || wp_doing_ajax() ) {
		return;
	}

	$warnings = tad_get_theme_setup_warnings();

	if ( empty( $warnings ) ) {
		return;
	}

	?>
	<div class="notice notice-warning">
		<p><strong><?php esc_html_e( 'Trade Africa Direct theme setup needs attention.', 'trade-africa-direct' ); ?></strong></p>
		<ul style="margin-left: 1.2em; list-style: disc;">
			<?php foreach ( $warnings as $warning ) : ?>
				<li><?php echo esc_html( $warning ); ?></li>
			<?php endforeach; ?>
		</ul>
		<p><?php esc_html_e( 'To auto-create or repair the core page setup, reactivate the theme, then review Settings > Reading and each page template assignment if warnings remain.', 'trade-africa-direct' ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'tad_show_theme_setup_admin_warnings' );

/**
 * If the site owner created a menu but did not assign it to Header, show it anyway.
 *
 * @param array $args Menu arguments.
 * @return array
 */
function trade_africa_direct_use_first_menu_for_header( $args ) {
	if (
		is_admin()
		|| empty( $args['theme_location'] )
		|| 'menu-1' !== $args['theme_location']
		|| has_nav_menu( 'menu-1' )
	) {
		return $args;
	}

	$menus = wp_get_nav_menus();

	if ( empty( $menus ) ) {
		return $args;
	}

	$args['menu'] = $menus[0]->term_id;
	unset( $args['theme_location'] );

	return $args;
}
add_filter( 'wp_nav_menu_args', 'trade_africa_direct_use_first_menu_for_header' );
