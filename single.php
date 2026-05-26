<?php
/**
 * Single post template.
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$quote_url      = home_url( '/request-a-quote/' );
$fallback_image = 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1400&h=800&fit=crop&q=80';

get_header();
?>

<main id="content" class="tad-single">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="tad-single-hero">
				<div class="tad-blog-container">
					<div class="tad-single-hero__head tad-reveal">
						<p class="tad-blog-eyebrow"><?php esc_html_e( 'Market Insight', 'trade-africa-direct' ); ?></p>
						<h1><?php the_title(); ?></h1>
						<div class="tad-blog-meta">
							<span><?php echo esc_html( get_the_date() ); ?></span>
							<span><?php the_category( ', ' ); ?></span>
							<span><?php echo esc_html( sprintf( __( 'By %s', 'trade-africa-direct' ), get_the_author() ) ); ?></span>
						</div>
						<?php if ( has_excerpt() ) : ?>
							<p class="tad-single-hero__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
						<?php endif; ?>
					</div>

					<div class="tad-single-hero__image tad-reveal tad-reveal--scale">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full' ); ?>
						<?php else : ?>
							<img src="<?php echo esc_url( $fallback_image ); ?>" alt="<?php echo esc_attr__( 'Ugandan agricultural export origin landscape used as fallback market insight image.', 'trade-africa-direct' ); ?>" loading="lazy">
						<?php endif; ?>
					</div>
				</div>
			</header>

			<section class="tad-single-main">
				<div class="tad-blog-container tad-single-layout">
					<div class="tad-single-content tad-reveal">
						<?php
						the_content();

						wp_link_pages(
							[
								'before' => '<div class="tad-blog-pagination">' . esc_html__( 'Pages:', 'trade-africa-direct' ),
								'after'  => '</div>',
							]
						);
						?>

						<?php if ( has_tag() ) : ?>
							<div class="tad-single-tags">
								<?php the_tags( '', '', '' ); ?>
							</div>
						<?php endif; ?>

						<nav class="tad-single-nav" aria-label="<?php echo esc_attr__( 'Adjacent posts', 'trade-africa-direct' ); ?>">
							<?php
							$previous_post = get_previous_post();
							$next_post     = get_next_post();
							?>
							<?php if ( $previous_post ) : ?>
								<a href="<?php echo esc_url( get_permalink( $previous_post ) ); ?>">
									<span><?php esc_html_e( 'Previous Insight', 'trade-africa-direct' ); ?></span><br>
									<?php echo esc_html( get_the_title( $previous_post ) ); ?>
								</a>
							<?php endif; ?>
							<?php if ( $next_post ) : ?>
								<a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>">
									<span><?php esc_html_e( 'Next Insight', 'trade-africa-direct' ); ?></span><br>
									<?php echo esc_html( get_the_title( $next_post ) ); ?>
								</a>
							<?php endif; ?>
						</nav>

						<?php if ( comments_open() || get_comments_number() ) : ?>
							<div class="tad-comments">
								<?php comments_template(); ?>
							</div>
						<?php endif; ?>
					</div>

					<aside class="tad-blog-sidebar tad-reveal tad-reveal--from-right" aria-label="<?php echo esc_attr__( 'Post sidebar', 'trade-africa-direct' ); ?>">
						<section class="tad-blog-widget tad-blog-widget--dark">
							<p class="tad-blog-eyebrow"><?php esc_html_e( 'Export Desk', 'trade-africa-direct' ); ?></p>
							<h2><?php esc_html_e( 'Turn this insight into a sourcing plan.', 'trade-africa-direct' ); ?></h2>
							<p><?php esc_html_e( 'Send your target product, volume, grade, and destination port to receive a formal FOB or CIF quote.', 'trade-africa-direct' ); ?></p>
							<a class="tad-blog-btn" href="<?php echo esc_url( $quote_url ); ?>"><?php esc_html_e( 'Request Quote', 'trade-africa-direct' ); ?></a>
						</section>

						<section class="tad-blog-widget">
							<h2><?php esc_html_e( 'More Insights', 'trade-africa-direct' ); ?></h2>
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
		</article>
	<?php endwhile; ?>
</main>

<?php
get_footer();
