<footer class="site-footer">
	<div class="site-footer__inner">
		<div>
			<span class="status-dot" aria-hidden="true"></span>
			<?php esc_html_e( 'Available for new projects', 'bonair-media' ); ?>
		</div>
		<div>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'bonair-media' ); ?></div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
