# Trade Africa Direct Theme Guide

This document explains how the theme creates pages, which templates belong to each page, and how to fix setup warnings in WordPress.

## Automatic Page Creation

When the theme is activated, it runs a setup routine from `functions.php` using the `after_switch_theme` hook.

The routine:

- Creates the required pages if they do not already exist.
- Assigns the correct WordPress page template to each page.
- Sets `Home` as the static front page.
- Sets `Blog` as the WordPress posts page.
- Creates the `Market Insights` parent page.
- Places the Uganda sourcing guide under `Market Insights`.
- Creates `Primary Menu` in Appearance > Menus.
- Assigns `Primary Menu` to the Header menu location.
- Flushes rewrite rules so the URLs work immediately.

If the theme is already active and you need the setup routine to run again, temporarily activate another theme, then reactivate `Trade Africa Direct`.

## Required Page Map

| Page | URL | Template |
| --- | --- | --- |
| Home | `/` | `front-page.php` |
| Export Portfolio | `/export-portfolio/` | `page-export-portfolio.php` |
| About Our Export Company | `/about/` | `page-about.php` |
| Quality Assurance, Certifications & Logistics | `/quality-certifications-logistics/` | `page-quality-certifications-logistics.php` |
| Request a B2B Export Quote | `/request-a-quote/` | `page-request-a-quote.php` |
| Blog / Market Insights Blog | `/blog/` | `home.php` |
| Market Insights | `/market-insights/` | Default page |
| Uganda Sourcing Guide | `/market-insights/sourcing-agricultural-products-uganda/` | `page-sourcing-guide-uganda.php` |
| 2026 Uganda Agricultural Harvest Calendar | `/uganda-harvest-calendar-2026/` | `page-harvest-calendar-2026.php` |
| Bulk Dried Fruits | `/bulk-dried-fruits-uganda/` | `page-bulk-dried-fruits-uganda.php` |
| Macadamia Nuts | `/macadamia-nuts-uganda/` | `page-macadamia-nuts-uganda.php` |
| Nilotica Shea Butter | `/nilotica-shea-butter/` | `page-nilotica-shea-butter.php` |
| Fresh Hass Avocados | `/fresh-hass-avocados/` | `page-fresh-hass-avocados.php` |
| Specialty Green Coffee Beans | `/specialty-green-coffee-beans/` | `page-specialty-green-coffee-beans.php` |
| Ugandan Cocoa Beans | `/ugandan-cocoa-beans/` | `page-ugandan-cocoa-beans.php` |
| Nile Perch & Fish Maw | `/nile-perch-fish-maw/` | `page-nile-perch-fish-maw.php` |

## Page Hierarchy

The only required parent/child relationship is:

- `Market Insights`
- `Market Insights > Uganda Sourcing Guide`

This creates the expected URL:

```text
/market-insights/sourcing-agricultural-products-uganda/
```

The harvest calendar is a top-level page:

```text
/uganda-harvest-calendar-2026/
```

## Header Menu

The theme activation routine creates `Primary Menu` and assigns it to Appearance > Menus > Manage Locations > Header.

The menu structure is:

- Home
- Products
- Products > Bulk Dried Fruits
- Products > Fresh Hass Avocados
- Products > Raw Macadamia Nuts
- Products > Nilotica Shea Butter
- Products > Specialty Coffee
- Products > Cocoa Beans
- Products > Nile Perch & Fish Maw
- Quality & Logistics
- About
- Market Insights
- Market Insights > Uganda Sourcing Guide 2026
- Market Insights > 2026 Harvest Calendar
- Market Insights > Blog

The separate `Request Quote` button is rendered by the theme header and links to `/request-a-quote/`; it is not part of the WordPress menu.

## Blog Templates

The theme includes:

- `home.php` for the WordPress posts page at `/blog/`.
- `single.php` for individual blog posts.
- `assets/css/blog-page.css` for blog archive and single post styling.

For this to work, WordPress must have:

- Settings > Reading > Your homepage displays: `A static page`
- Homepage: `Home`
- Posts page: `Blog`

The theme activation routine sets these automatically.

## Setup Warnings

The theme now validates the required setup in the WordPress admin. If something is wrong, admins will see a warning notice.

Warnings can appear for:

- A required page is missing.
- A page has the wrong template assigned.
- A required template file is missing.
- `Home` is not selected as the static front page.
- `Blog` is not selected as the posts page.
- `Market Insights > Uganda Sourcing Guide` is not in the correct hierarchy.
- `Primary Menu` is not assigned to the Header menu location.

## How to Fix Warnings

1. Go to Appearance > Themes.
2. Activate another theme temporarily.
3. Reactivate `Trade Africa Direct`.
4. Go to Settings > Reading.
5. Confirm:
   - Homepage is `Home`.
   - Posts page is `Blog`.
6. Go to Pages and verify each page uses the correct template from the map above.
7. Go to Settings > Permalinks and click `Save Changes` if any URL gives a 404.

## Adding New Pages

When adding a new required page:

1. Create the template file, for example `page-new-page.php`.
2. Add conditional stylesheet loading in `functions.php` if the page needs custom CSS.
3. Add the page to the activation setup list in `tad_create_theme_pages_on_activation()`.
4. Add the page to `tad_get_theme_setup_requirements()` so WordPress can warn if it is missing or misconfigured.
5. Update this guide.

## Notes for Content Editors

- Product pages are template-driven pages, not normal blog posts.
- Market insight articles can be normal WordPress posts and will appear on `/blog/`.
- The sourcing guide and harvest calendar are dedicated pillar pages because they use custom layouts.
- The RFQ/contact form is currently a styled frontend form. It still needs to be connected to a mail handler, CRM, plugin, or custom WordPress submission handler before it can process enquiries.
