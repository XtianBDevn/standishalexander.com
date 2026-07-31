<?php
/**
 * Blog Posts Index Template (home.php)
 *
 * WordPress uses this file — not index.php — when a static front page is
 * configured and a "Posts page" is assigned under Settings → Reading.
 * This is the correct template to assign the /blog/ URL to.
 *
 * @package Alexander_Law
 */

// SEO meta for the blog index
add_action( 'wp_head', function () { ?>
<meta name="description" content="Virginia DUI defense tips, reckless driving laws, expungement guides, and criminal defense insights from Standish Alexander — 30+ years in Richmond-area courts.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Blog",
  "name": "Alexander Law Office Legal Blog",
  "description": "DUI defense, traffic law, and criminal defense insights for Richmond, Virginia",
  "url": "<?php echo esc_url( home_url( '/blog/' ) ); ?>",
  "publisher": {
    "@type": "LegalService",
    "name": "Alexander Law Office",
    "telephone": "+18043550016",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Richmond",
      "addressRegion": "VA",
      "addressCountry": "US"
    }
  }
}
</script>
<?php }, 1 );

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="hero-badge"><?php _e( 'Legal Resources', 'alexander-law' ); ?></span>
            <h1><?php _e( 'Virginia DUI &amp; Criminal Defense Blog', 'alexander-law' ); ?></h1>
            <p class="page-hero-subtitle"><?php _e( 'Practical legal insights on DUI, reckless driving, expungement, and criminal defense in Richmond and Central Virginia.', 'alexander-law' ); ?></p>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Blog Content -->
<section class="section bg-muted">
    <div class="container">
        <div class="blog-grid">

            <!-- Main Content -->
            <div>
                <?php if ( have_posts() ) : ?>
                    <div class="posts-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article class="post-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'card', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="post-content">
                                    <?php
                                    $cats = get_the_category();
                                    if ( $cats ) : ?>
                                        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="post-category">
                                            <?php echo esc_html( $cats[0]->name ); ?>
                                        </a>
                                    <?php endif; ?>

                                    <h2 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>

                                    <div class="post-meta">
                                        <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
                                        <a href="<?php the_permalink(); ?>" class="practice-link">
                                            <?php _e( 'Read More', 'alexander-law' ); ?>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M5 12h14M12 5l7 7-7 7"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <?php
                        echo paginate_links( array(
                            'prev_text' => '&laquo; ' . __( 'Previous', 'alexander-law' ),
                            'next_text' => __( 'Next', 'alexander-law' ) . ' &raquo;',
                        ) );
                        ?>
                    </div>

                <?php else : ?>
                    <div class="text-center" style="padding: 4rem 2rem; background: white; border-radius: 1rem;">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--gray-400)" stroke-width="1.5" style="margin: 0 auto 1.5rem; display: block;">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                        <h2><?php _e( 'No Posts Yet', 'alexander-law' ); ?></h2>
                        <p class="text-muted"><?php _e( 'Legal insights and case updates are coming soon. In the meantime, contact us with any questions.', 'alexander-law' ); ?></p>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="margin-top: 1.5rem;">
                            <?php _e( 'Contact Us', 'alexander-law' ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">

                <!-- CTA Widget -->
                <div class="sidebar-widget widget-cta">
                    <h3><?php _e( 'Free Consultation', 'alexander-law' ); ?></h3>
                    <p><?php _e( 'Facing a DUI or criminal charge in Richmond? Get a free case review with 30+ years of experience.', 'alexander-law' ); ?></p>
                    <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'phone_number', '8043550016' ) ) ); ?>" class="widget-phone">
                        <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width: 100%; margin-top: 1rem;">
                        <?php _e( 'Contact Us', 'alexander-law' ); ?>
                    </a>
                </div>

                <!-- Categories -->
                <div class="sidebar-widget">
                    <h3><?php _e( 'Categories', 'alexander-law' ); ?></h3>
                    <ul class="category-list">
                        <?php
                        $cats = get_categories( array( 'hide_empty' => false, 'orderby' => 'name' ) );
                        foreach ( $cats as $cat ) : ?>
                            <li>
                                <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>">
                                    <span><?php echo esc_html( $cat->name ); ?></span>
                                    <span class="category-count"><?php echo absint( $cat->count ); ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Practice Areas -->
                <div class="sidebar-widget">
                    <h3><?php _e( 'Practice Areas', 'alexander-law' ); ?></h3>
                    <ul class="category-list">
                        <li><a href="<?php echo esc_url( home_url( '/dui-lawyer-richmond-va/' ) ); ?>"><span><?php _e( 'DUI Defense', 'alexander-law' ); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/reckless-driving-lawyer-richmond-va/' ) ); ?>"><span><?php _e( 'Reckless Driving', 'alexander-law' ); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/criminal-defense-lawyer-richmond-va/' ) ); ?>"><span><?php _e( 'Criminal Defense', 'alexander-law' ); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/expungement-lawyer-richmond-va/' ) ); ?>"><span><?php _e( 'Expungement', 'alexander-law' ); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/drug-possession-lawyer-richmond-va/' ) ); ?>"><span><?php _e( 'Drug Possession', 'alexander-law' ); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/traffic-ticket-lawyer-richmond-va/' ) ); ?>"><span><?php _e( 'Traffic Tickets', 'alexander-law' ); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                    </ul>
                </div>

                <!-- Service Areas -->
                <div class="sidebar-widget">
                    <h3><?php _e( 'Areas We Serve', 'alexander-law' ); ?></h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <?php
                        $areas = array(
                            'Richmond'           => '/richmond-va/',
                            'Henrico County'     => '/henrico-county/',
                            'Chesterfield'       => '/chesterfield-county/',
                            'Hanover County'     => '/hanover-county/',
                            'Petersburg'         => '/petersburg-va/',
                        );
                        foreach ( $areas as $label => $url ) : ?>
                            <a href="<?php echo esc_url( home_url( $url ) ); ?>"
                               style="background: var(--muted); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; color: var(--primary); text-decoration: none;">
                                <?php echo esc_html( $label ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php dynamic_sidebar( 'sidebar-blog' ); ?>

            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
