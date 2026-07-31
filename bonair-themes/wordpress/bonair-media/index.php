<?php get_header(); ?>

<section class="blog-hero">
	<div class="container blog-hero__inner">
		<span class="eyebrow"><?php esc_html_e( 'Digital Intelligence for the AI Era', 'bonair-media' ); ?></span>
		<h1><?php esc_html_e( 'Insights AI', 'bonair-media' ); ?> <span class="gradient-text"><?php esc_html_e( "Can't Ignore", 'bonair-media' ); ?></span></h1>
		<p><?php esc_html_e( 'Strategy, experiments, and field notes on SEO, AEO, GEO, SaaS, iOS, and AI — from the Bon Air Media team.', 'bonair-media' ); ?></p>
	</div>
</section>

<div class="container">
	<?php if ( have_posts() ) : ?>
		<div class="post-grid">
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'post-card' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="post-card__thumb" href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'bonair-card' ); ?>
						</a>
					<?php endif; ?>
					<div class="post-card__body">
						<div class="post-card__meta">
							<?php
							$bonair_category = get_the_category();
							if ( $bonair_category ) {
								echo esc_html( $bonair_category[0]->name );
							}
							?>
							<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						</div>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-card__excerpt"><?php the_excerpt(); ?></div>
						<a class="post-card__more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read Article →', 'bonair-media' ); ?></a>
					</div>
				</article>
			<?php endwhile; ?>
		</div>

		<nav class="pagination">
			<?php echo paginate_links(); ?>
		</nav>
	<?php else : ?>
		<p style="padding: 48px 0;"><?php esc_html_e( 'No posts yet — check back soon.', 'bonair-media' ); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
