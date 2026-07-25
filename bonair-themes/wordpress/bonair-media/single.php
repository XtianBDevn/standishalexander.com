<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header class="single-post-header">
			<div class="container container--narrow">
				<?php
				$bonair_category = get_the_category();
				if ( $bonair_category ) :
					?>
					<span class="eyebrow"><?php echo esc_html( $bonair_category[0]->name ); ?></span>
				<?php endif; ?>
				<h1 class="gradient-text"><?php the_title(); ?></h1>
				<div class="post-meta">
					<span><?php the_author(); ?></span>
					<span class="sep">•</span>
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				</div>
			</div>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="container container--narrow">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>

		<div class="container container--narrow entry-content">
			<?php the_content(); ?>
		</div>

		<div class="container container--narrow">
			<nav class="post-nav">
				<?php
				$bonair_prev = get_previous_post();
				$bonair_next = get_next_post();
				?>
				<?php if ( $bonair_prev ) : ?>
					<a href="<?php echo esc_url( get_permalink( $bonair_prev ) ); ?>">
						<?php esc_html_e( '← Previous', 'bonair-media' ); ?>
						<strong><?php echo esc_html( get_the_title( $bonair_prev ) ); ?></strong>
					</a>
				<?php else : ?>
					<span></span>
				<?php endif; ?>
				<?php if ( $bonair_next ) : ?>
					<a href="<?php echo esc_url( get_permalink( $bonair_next ) ); ?>" style="text-align:right;">
						<?php esc_html_e( 'Next →', 'bonair-media' ); ?>
						<strong><?php echo esc_html( get_the_title( $bonair_next ) ); ?></strong>
					</a>
				<?php endif; ?>
			</nav>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
