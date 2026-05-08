<?php
/**
 * Main Template (Blog Archive)
 *
 * @package Alexander_Law
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="hero-badge"><?php _e('Legal Resources', 'alexander-law'); ?></span>
            <h1><?php _e('Virginia DUI & Traffic Law Blog', 'alexander-law'); ?></h1>
            <p class="page-hero-subtitle"><?php _e('Legal insights and news for Richmond, Henrico, Chesterfield, and Central Virginia', 'alexander-law'); ?></p>
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
                <?php if (have_posts()) : ?>
                    <div class="posts-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="post-card">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('card'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="post-content">
                                    <?php
                                    $categories = get_the_category();
                                    if ($categories) :
                                        ?>
                                        <span class="post-category"><?php echo esc_html($categories[0]->name); ?></span>
                                    <?php endif; ?>
                                    <h2 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
                                    <div class="post-meta">
                                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        <a href="<?php the_permalink(); ?>" class="practice-link">
                                            <?php _e('Read More', 'alexander-law'); ?>
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => '&laquo; ' . __('Previous', 'alexander-law'),
                            'next_text' => __('Next', 'alexander-law') . ' &raquo;',
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <div class="text-center" style="padding: 4rem 2rem; background: white; border-radius: 1rem;">
                        <h2><?php _e('No Posts Found', 'alexander-law'); ?></h2>
                        <p class="text-muted"><?php _e('Check back soon for legal insights and news.', 'alexander-law'); ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <!-- CTA Widget -->
                <div class="sidebar-widget widget-cta">
                    <h3><?php _e('Need Legal Help?', 'alexander-law'); ?></h3>
                    <p><?php _e('Facing a DUI or traffic charge in Richmond? Get a free consultation with 30+ years of experience.', 'alexander-law'); ?></p>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '8043550016'))); ?>" class="widget-phone">
                        <?php echo esc_html(get_theme_mod('phone_number', '(804) 355-0016')); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white" style="width: 100%;">
                        <?php _e('Free Consultation', 'alexander-law'); ?>
                    </a>
                </div>

                <!-- Categories Widget -->
                <div class="sidebar-widget">
                    <h3><?php _e('Categories', 'alexander-law'); ?></h3>
                    <ul class="category-list">
                        <?php
                        $categories = get_categories(array('hide_empty' => false));
                        foreach ($categories as $category) :
                            ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <span><?php echo esc_html($category->name); ?></span>
                                    <span class="category-count"><?php echo $category->count; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Practice Areas Widget -->
                <div class="sidebar-widget">
                    <h3><?php _e('Practice Areas', 'alexander-law'); ?></h3>
                    <ul class="category-list">
                        <li><a href="<?php echo esc_url(home_url('/dui-lawyer-richmond-va/')); ?>"><span><?php _e('DUI Defense', 'alexander-law'); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url(home_url('/reckless-driving-lawyer-richmond-va/')); ?>"><span><?php _e('Reckless Driving', 'alexander-law'); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url(home_url('/traffic-ticket-lawyer-richmond-va/')); ?>"><span><?php _e('Traffic Violations', 'alexander-law'); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url(home_url('/criminal-defense-lawyer-richmond-va/')); ?>"><span><?php _e('Criminal Defense', 'alexander-law'); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                        <li><a href="<?php echo esc_url(home_url('/expungement-lawyer-richmond-va/')); ?>"><span><?php _e('Expungement', 'alexander-law'); ?></span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg></a></li>
                    </ul>
                </div>

                <!-- Service Areas Widget -->
                <div class="sidebar-widget">
                    <h3><?php _e('Service Areas', 'alexander-law'); ?></h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 0.75rem;"><?php _e('Serving clients throughout Central Virginia:', 'alexander-law'); ?></p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <?php
                        $areas = array('Richmond', 'Henrico County', 'Chesterfield County', 'Hanover County', 'Goochland', 'Petersburg', 'Colonial Heights');
                        foreach ($areas as $area) :
                            ?>
                            <span style="background: var(--muted); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; color: var(--primary);"><?php echo esc_html($area); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php dynamic_sidebar('sidebar-blog'); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
