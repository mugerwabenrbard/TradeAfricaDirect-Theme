<?php
/**
 * Blog archive template.
 *
 * Used by the WordPress posts page at /blog/.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$quote_url = home_url( '/request-a-quote/' );
$images    = [
	'hero_main' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1000&h=900&fit=crop&q=80',
	'hero_top'  => 'https://images.unsplash.com/photo-1494412651409-8963ce7935a7?w=800&h=600&fit=crop&q=80',
	'hero_low'  => 'https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=800&h=600&fit=crop&q=80',
];

get_header();
?>

<main id="content" class="tad-blog">
	<section class="tad-blog-hero">
		<div class="tad-blog-container tad-blog-hero__inner">
			<div class="tad-blog-hero__copy tad-reveal">
				<p class="tad-blog-eyebrow"><?php esc_html_e( 'Market Insights', 'trade-africa-direct' ); ?></p>
				<h1><?php esc_html_e( 'Uganda Export Intelligence for', 'trade-africa-direct' ); ?> <span><?php esc_html_e( 'B2B Buyers', 'trade-africa-direct' ); ?></span></h1>
				<p><?php esc_html_e( 'Practical sourcing guides, harvest calendars, compliance explainers, and logistics notes for procurement managers importing agricultural commodities from Uganda and East Africa.', 'trade-africa-direct' ); ?></p>
			</div>

			<div class="tad-blog-hero__visual tad-reveal tad-reveal--from-right">
				<figure>
					<img src="<?php echo esc_url( $images['hero_main'] ); ?>" alt="<?php echo esc_attr__( 'Procurement team reviewing Uganda export market intelligence.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['hero_top'] ); ?>" alt="<?php echo esc_attr__( 'Container vessel representing Mombasa export logistics corridor.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<figure>
					<img src="<?php echo esc_url( $images['hero_low'] ); ?>" alt="<?php echo esc_attr__( 'Specialty green coffee beans prepared for buyer market insight reporting.', 'trade-africa-direct' ); ?>" loading="lazy">
				</figure>
				<div class="tad-blog-hero__badge" aria-hidden="true">
					<strong><?php esc_html_e( '2026', 'trade-africa-direct' ); ?></strong>
					<span><?php esc_html_e( 'Sourcing seasons, FOB pricing, logistics, and compliance updates.', 'trade-africa-direct' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<section class="tad-blog-main">
		<div class="tad-blog-container tad-blog-layout">
			<div>
				<?php if ( have_posts() ) : ?>
					<div class="tad-blog-grid">
						<?php
						while ( have_posts() ) :
							the_post();
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'tad-blog-card tad-reveal' ); ?>>
								<a class="tad-blog-card__image" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Read %s', 'trade-africa-direct' ), get_the_title() ) ); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
									<?php else : ?>
										<img src="<?php echo esc_url( $images['hero_top'] ); ?>" alt="<?php echo esc_attr__( 'Uganda export logistics and agricultural sourcing insight.', 'trade-africa-direct' ); ?>" loading="lazy">
									<?php endif; ?>
								</a>
								<div class="tad-blog-card__body">
									<div class="tad-blog-meta">
										<span><?php echo esc_html( get_the_date() ); ?></span>
										<span><?php the_category( ', ' ); ?></span>
									</div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="tad-blog-card__excerpt">
										<?php the_excerpt(); ?>
									</div>
									<a class="tad-blog-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read Insight', 'trade-africa-direct' ); ?></a>
								</div>
							</article>
						<?php endwhile; ?>
					</div>

					<nav class="tad-blog-pagination" aria-label="<?php echo esc_attr__( 'Blog pagination', 'trade-africa-direct' ); ?>">
						<?php
						the_posts_pagination(
							[
								'mid_size'           => 1,
								'prev_text'          => __( 'Previous', 'trade-africa-direct' ),
								'next_text'          => __( 'Next', 'trade-africa-direct' ),
								'screen_reader_text' => __( 'Posts navigation', 'trade-africa-direct' ),
							]
						);
						?>
					</nav>
				<?php else : ?>
					<section class="tad-empty-posts tad-reveal">
						<h2><?php esc_html_e( 'No market insights published yet.', 'trade-africa-direct' ); ?></h2>
						<p><?php esc_html_e( 'New Uganda export sourcing articles will appear here once published.', 'trade-africa-direct' ); ?></p>
					</section>
				<?php endif; ?>
			</div>

			<aside class="tad-blog-sidebar tad-reveal tad-reveal--from-right" aria-label="<?php echo esc_attr__( 'Blog sidebar', 'trade-africa-direct' ); ?>">
				<section class="tad-blog-widget tad-blog-widget--dark">
					<p class="tad-blog-eyebrow"><?php esc_html_e( 'Procurement Desk', 'trade-africa-direct' ); ?></p>
					<h2><?php esc_html_e( 'Need current FOB or CIF pricing?', 'trade-africa-direct' ); ?></h2>
					<p><?php esc_html_e( 'Send your product, grade, and volume requirements to receive a formal export quote from Kampala.', 'trade-africa-direct' ); ?></p>
					<a class="tad-blog-btn" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Export Quote', 'trade-africa-direct' ); ?></a>
				</section>

				<section class="tad-blog-widget">
					<h2><?php esc_html_e( 'Categories', 'trade-africa-direct' ); ?></h2>
					<ul>
						<?php
						wp_list_categories(
							[
								'title_li' => '',
								'number'   => 8,
							]
						);
						?>
					</ul>
				</section>

				<section class="tad-blog-widget">
					<h2><?php esc_html_e( 'Recent Insights', 'trade-africa-direct' ); ?></h2>
					<ul>
						<?php
						wp_get_archives(
							[
								'type'  => 'postbypost',
								'limit' => 5,
							]
						);
						?>
					</ul>
				</section>
			</aside>
		</div>
	</section>
</main>

<?php
get_footer();
