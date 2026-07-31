<?php
/**
 * Single Post Template
 *
 * @package Alexander_Law
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <?php
            $categories = get_the_category();
            if ($categories) :
                ?>
                <span class="hero-badge"><?php echo esc_html($categories[0]->name); ?></span>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p class="page-hero-subtitle"><?php echo get_the_excerpt(); ?></p>
            <?php endif; ?>
            <div style="margin-top: 1.5rem; display: flex; align-items: center; justify-content: center; gap: 1rem; font-size: 0.875rem; opacity: 0.8;">
                <span><?php _e('By', 'alexander-law'); ?> <?php the_author(); ?></span>
                <span>|</span>
                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            </div>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Single Post Content -->
<section class="single-post">
    <div class="container">
        <div class="single-post-grid">
            <!-- Article -->
            <article class="post-article">
                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-bottom: 2rem; border-radius: 1rem; overflow: hidden;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_the_tags();
                if ($tags) :
                    ?>
                    <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--gray-200);">
                        <strong><?php _e('Tags:', 'alexander-law'); ?></strong>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 0.5rem;">
                            <?php foreach ($tags as $tag) : ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" style="background: var(--muted); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; color: var(--primary);">
                                    <?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- CTA Box -->
                <div style="margin-top: 2rem; background: var(--primary); border-radius: 1rem; padding: 2rem; color: white;">
                    <h3 style="color: white; margin-bottom: 0.75rem;"><?php _e('Need Legal Help in Richmond?', 'alexander-law'); ?></h3>
                    <p style="opacity: 0.9; margin-bottom: 1.5rem;"><?php _e('If you\'re facing charges in Richmond, Henrico, Chesterfield, or surrounding areas, contact Alexander Law Office for a free consultation.', 'alexander-law'); ?></p>
                    <div class="flex gap-4" style="flex-wrap: wrap;">
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '8043550016'))); ?>" class="btn btn-secondary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <?php echo esc_html(get_theme_mod('phone_number', '(804) 355-0016')); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white">
                            <?php _e('Free Consultation', 'alexander-law'); ?>
                        </a>
                    </div>
                </div>

                <!-- Author Box -->
                <div class="author-box">
                    <div class="author-avatar">SA</div>
                    <div class="author-info">
                        <h4><?php _e('About the Author', 'alexander-law'); ?></h4>
                        <p class="text-muted"><?php _e('Standish Alexander - Attorney at Law with over 30 years of experience defending DUI, reckless driving, and criminal cases in Richmond and Central Virginia.', 'alexander-law'); ?></p>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" style="font-size: 0.875rem;"><?php _e('Read Full Bio', 'alexander-law'); ?> &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <!-- CTA Widget -->
                <div class="sidebar-widget widget-cta">
                    <h3><?php _e('Quick Contact', 'alexander-law'); ?></h3>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', get_theme_mod('phone_number', '8043550016'))); ?>" class="widget-phone">
                        <?php echo esc_html(get_theme_mod('phone_number', '(804) 355-0016')); ?>
                    </a>
                    <p style="font-size: 0.875rem; opacity: 0.9;"><?php _e('Free consultation available. Call today.', 'alexander-law'); ?></p>
                </div>

                <!-- Related Posts -->
                <?php
                $related_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post__not_in'   => array(get_the_ID()),
                    'category__in'   => wp_get_post_categories(get_the_ID()),
                ));
                if ($related_posts->have_posts()) :
                    ?>
                    <div class="sidebar-widget">
                        <h3><?php _e('Related Articles', 'alexander-law'); ?></h3>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                <li style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid var(--gray-200);">
                                    <a href="<?php the_permalink(); ?>" style="display: block;">
                                        <?php
                                        $cats = get_the_category();
                                        if ($cats) :
                                            ?>
                                            <span style="font-size: 0.75rem; color: var(--secondary); font-weight: 600;"><?php echo esc_html($cats[0]->name); ?></span>
                                        <?php endif; ?>
                                        <h4 style="font-size: 0.875rem; margin: 0.25rem 0 0; line-height: 1.4;"><?php the_title(); ?></h4>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php
                    wp_reset_postdata();
                endif;
                ?>

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

                <?php dynamic_sidebar('sidebar-blog'); ?>
            </aside>
        </div>
    </div>
</section>

<?php endwhile; ?>

<!-- Post Navigation -->
<div class="section bg-muted">
    <div class="container">
        <div class="flex justify-between gap-4" style="flex-wrap: wrap;">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>
            <?php if ($prev_post) : ?>
                <a href="<?php echo get_permalink($prev_post); ?>" class="btn btn-primary">
                    &larr; <?php _e('Previous Article', 'alexander-law'); ?>
                </a>
            <?php endif; ?>
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-outline" style="border-color: var(--primary); color: var(--primary);">
                <?php _e('Back to Blog', 'alexander-law'); ?>
            </a>
            <?php if ($next_post) : ?>
                <a href="<?php echo get_permalink($next_post); ?>" class="btn btn-primary">
                    <?php _e('Next Article', 'alexander-law'); ?> &rarr;
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
