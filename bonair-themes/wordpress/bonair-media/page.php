<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header class="single-post-header">
			<div class="container container--narrow">
				<h1 class="gradient-text"><?php the_title(); ?></h1>
			</div>
		</header>

		<div class="container container--narrow entry-content">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
