<?php
/**
 * Alexander Law Office Theme Functions
 *
 * @package Alexander_Law
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ALEXANDER_LAW_VERSION', '1.0.0');
define('ALEXANDER_LAW_DIR', get_template_directory());
define('ALEXANDER_LAW_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function alexander_law_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');

    // Set content width
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1200;
    }

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'alexander-law'),
        'footer'    => __('Footer Menu', 'alexander-law'),
        'mobile'    => __('Mobile Menu', 'alexander-law'),
    ));

    // Add image sizes
    add_image_size('hero', 1920, 1080, true);
    add_image_size('card', 600, 400, true);
    add_image_size('thumbnail-large', 400, 300, true);
}
add_action('after_setup_theme', 'alexander_law_setup');

/**
 * Enqueue Scripts and Styles
 */
function alexander_law_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'alexander-law-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&family=Dancing+Script:wght@600;700&display=swap',
        array(),
        null
    );

    // Leaflet CSS
    wp_enqueue_style(
        'leaflet',
        'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css',
        array(),
        '1.9.4'
    );

    // Main stylesheet
    wp_enqueue_style(
        'alexander-law-style',
        get_stylesheet_uri(),
        array('leaflet'),
        ALEXANDER_LAW_VERSION
    );

    // Leaflet JS
    wp_enqueue_script(
        'leaflet',
        'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js',
        array(),
        '1.9.4',
        true
    );

    // Theme JS
    wp_enqueue_script(
        'alexander-law-script',
        ALEXANDER_LAW_URI . '/assets/js/main.js',
        array('leaflet'),
        ALEXANDER_LAW_VERSION,
        true
    );

    // Localize script with theme data
    wp_localize_script('alexander-law-script', 'alexanderLaw', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('alexander_law_nonce'),
        'office'  => array(
            'lat'     => get_theme_mod('office_lat', '37.5760265'),
            'lng'     => get_theme_mod('office_lng', '-77.5054805'),
            'address' => get_theme_mod('office_address', '1000 Greenway Lane, Richmond, VA 23226'),
            'name'    => get_theme_mod('office_name', 'Alexander Law Office, P.C.'),
        ),
    ));
}
add_action('wp_enqueue_scripts', 'alexander_law_scripts');

/**
 * Register Custom Post Types
 */
function alexander_law_register_post_types() {
    // Practice Areas CPT
    register_post_type('practice_area', array(
        'labels' => array(
            'name'               => __('Practice Areas', 'alexander-law'),
            'singular_name'      => __('Practice Area', 'alexander-law'),
            'add_new'            => __('Add New', 'alexander-law'),
            'add_new_item'       => __('Add New Practice Area', 'alexander-law'),
            'edit_item'          => __('Edit Practice Area', 'alexander-law'),
            'new_item'           => __('New Practice Area', 'alexander-law'),
            'view_item'          => __('View Practice Area', 'alexander-law'),
            'search_items'       => __('Search Practice Areas', 'alexander-law'),
            'not_found'          => __('No practice areas found', 'alexander-law'),
            'not_found_in_trash' => __('No practice areas found in Trash', 'alexander-law'),
        ),
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'practice-areas'),
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
        'menu_icon'           => 'dashicons-portfolio',
        'show_in_rest'        => true,
    ));

    // Testimonials CPT
    register_post_type('testimonial', array(
        'labels' => array(
            'name'               => __('Testimonials', 'alexander-law'),
            'singular_name'      => __('Testimonial', 'alexander-law'),
            'add_new'            => __('Add New', 'alexander-law'),
            'add_new_item'       => __('Add New Testimonial', 'alexander-law'),
            'edit_item'          => __('Edit Testimonial', 'alexander-law'),
            'new_item'           => __('New Testimonial', 'alexander-law'),
            'view_item'          => __('View Testimonial', 'alexander-law'),
            'search_items'       => __('Search Testimonials', 'alexander-law'),
            'not_found'          => __('No testimonials found', 'alexander-law'),
            'not_found_in_trash' => __('No testimonials found in Trash', 'alexander-law'),
        ),
        'public'              => true,
        'has_archive'         => false,
        'supports'            => array('title', 'editor'),
        'menu_icon'           => 'dashicons-format-quote',
        'show_in_rest'        => true,
    ));

    // Case Results CPT
    register_post_type('case_result', array(
        'labels' => array(
            'name'               => __('Case Results', 'alexander-law'),
            'singular_name'      => __('Case Result', 'alexander-law'),
            'add_new'            => __('Add New', 'alexander-law'),
            'add_new_item'       => __('Add New Case Result', 'alexander-law'),
            'edit_item'          => __('Edit Case Result', 'alexander-law'),
            'new_item'           => __('New Case Result', 'alexander-law'),
            'view_item'          => __('View Case Result', 'alexander-law'),
            'search_items'       => __('Search Case Results', 'alexander-law'),
            'not_found'          => __('No case results found', 'alexander-law'),
            'not_found_in_trash' => __('No case results found in Trash', 'alexander-law'),
        ),
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'results'),
        'supports'            => array('title', 'editor'),
        'menu_icon'           => 'dashicons-yes-alt',
        'show_in_rest'        => true,
    ));
}
add_action('init', 'alexander_law_register_post_types');

/**
 * Register Custom Taxonomies
 */
function alexander_law_register_taxonomies() {
    // Blog Categories (enhanced)
    register_taxonomy('blog_category', 'post', array(
        'labels' => array(
            'name'              => __('Blog Categories', 'alexander-law'),
            'singular_name'     => __('Blog Category', 'alexander-law'),
            'search_items'      => __('Search Categories', 'alexander-law'),
            'all_items'         => __('All Categories', 'alexander-law'),
            'edit_item'         => __('Edit Category', 'alexander-law'),
            'update_item'       => __('Update Category', 'alexander-law'),
            'add_new_item'      => __('Add New Category', 'alexander-law'),
            'new_item_name'     => __('New Category Name', 'alexander-law'),
        ),
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'blog-category'),
    ));
}
add_action('init', 'alexander_law_register_taxonomies');

/**
 * Register Meta Boxes
 */
function alexander_law_add_meta_boxes() {
    // Testimonial meta box
    add_meta_box(
        'testimonial_details',
        __('Testimonial Details', 'alexander-law'),
        'alexander_law_testimonial_meta_box',
        'testimonial',
        'normal',
        'high'
    );

    // Practice Area meta box
    add_meta_box(
        'practice_area_details',
        __('Practice Area Details', 'alexander-law'),
        'alexander_law_practice_area_meta_box',
        'practice_area',
        'normal',
        'high'
    );

    // Case Result meta box
    add_meta_box(
        'case_result_details',
        __('Case Result Details', 'alexander-law'),
        'alexander_law_case_result_meta_box',
        'case_result',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'alexander_law_add_meta_boxes');

/**
 * Testimonial Meta Box Callback
 */
function alexander_law_testimonial_meta_box($post) {
    wp_nonce_field('alexander_law_testimonial_nonce', 'testimonial_nonce');

    $author = get_post_meta($post->ID, '_testimonial_author', true);
    $case_type = get_post_meta($post->ID, '_testimonial_case_type', true);
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    ?>
    <p>
        <label for="testimonial_author"><strong><?php _e('Author Name:', 'alexander-law'); ?></strong></label><br>
        <input type="text" id="testimonial_author" name="testimonial_author" value="<?php echo esc_attr($author); ?>" class="widefat">
    </p>
    <p>
        <label for="testimonial_case_type"><strong><?php _e('Case Type:', 'alexander-law'); ?></strong></label><br>
        <input type="text" id="testimonial_case_type" name="testimonial_case_type" value="<?php echo esc_attr($case_type); ?>" class="widefat">
    </p>
    <p>
        <label for="testimonial_rating"><strong><?php _e('Rating (1-5):', 'alexander-law'); ?></strong></label><br>
        <select id="testimonial_rating" name="testimonial_rating">
            <?php for ($i = 5; $i >= 1; $i--) : ?>
                <option value="<?php echo $i; ?>" <?php selected($rating, $i); ?>><?php echo $i; ?> Stars</option>
            <?php endfor; ?>
        </select>
    </p>
    <?php
}

/**
 * Practice Area Meta Box Callback
 */
function alexander_law_practice_area_meta_box($post) {
    wp_nonce_field('alexander_law_practice_area_nonce', 'practice_area_nonce');

    $icon = get_post_meta($post->ID, '_practice_area_icon', true);
    $short_desc = get_post_meta($post->ID, '_practice_area_short_desc', true);
    ?>
    <p>
        <label for="practice_area_icon"><strong><?php _e('Icon (SVG or Dashicon class):', 'alexander-law'); ?></strong></label><br>
        <input type="text" id="practice_area_icon" name="practice_area_icon" value="<?php echo esc_attr($icon); ?>" class="widefat">
        <small><?php _e('Enter a dashicon class (e.g., dashicons-shield) or paste SVG code', 'alexander-law'); ?></small>
    </p>
    <p>
        <label for="practice_area_short_desc"><strong><?php _e('Short Description:', 'alexander-law'); ?></strong></label><br>
        <textarea id="practice_area_short_desc" name="practice_area_short_desc" rows="3" class="widefat"><?php echo esc_textarea($short_desc); ?></textarea>
    </p>
    <?php
}

/**
 * Case Result Meta Box Callback
 */
function alexander_law_case_result_meta_box($post) {
    wp_nonce_field('alexander_law_case_result_nonce', 'case_result_nonce');

    $result = get_post_meta($post->ID, '_case_result_outcome', true);
    $case_type = get_post_meta($post->ID, '_case_result_type', true);
    $court = get_post_meta($post->ID, '_case_result_court', true);
    ?>
    <p>
        <label for="case_result_outcome"><strong><?php _e('Outcome:', 'alexander-law'); ?></strong></label><br>
        <input type="text" id="case_result_outcome" name="case_result_outcome" value="<?php echo esc_attr($result); ?>" class="widefat" placeholder="e.g., Case Dismissed, Reduced to Traffic Infraction">
    </p>
    <p>
        <label for="case_result_type"><strong><?php _e('Case Type:', 'alexander-law'); ?></strong></label><br>
        <select id="case_result_type" name="case_result_type" class="widefat">
            <option value=""><?php _e('Select Case Type', 'alexander-law'); ?></option>
            <option value="dui" <?php selected($case_type, 'dui'); ?>><?php _e('DUI/DWI', 'alexander-law'); ?></option>
            <option value="reckless" <?php selected($case_type, 'reckless'); ?>><?php _e('Reckless Driving', 'alexander-law'); ?></option>
            <option value="traffic" <?php selected($case_type, 'traffic'); ?>><?php _e('Traffic Violation', 'alexander-law'); ?></option>
            <option value="criminal" <?php selected($case_type, 'criminal'); ?>><?php _e('Criminal Defense', 'alexander-law'); ?></option>
            <option value="expungement" <?php selected($case_type, 'expungement'); ?>><?php _e('Expungement', 'alexander-law'); ?></option>
        </select>
    </p>
    <p>
        <label for="case_result_court"><strong><?php _e('Court:', 'alexander-law'); ?></strong></label><br>
        <input type="text" id="case_result_court" name="case_result_court" value="<?php echo esc_attr($court); ?>" class="widefat" placeholder="e.g., Richmond General District Court">
    </p>
    <?php
}

/**
 * Save Meta Boxes
 */
function alexander_law_save_meta_boxes($post_id) {
    // Testimonial
    if (isset($_POST['testimonial_nonce']) && wp_verify_nonce($_POST['testimonial_nonce'], 'alexander_law_testimonial_nonce')) {
        if (isset($_POST['testimonial_author'])) {
            update_post_meta($post_id, '_testimonial_author', sanitize_text_field($_POST['testimonial_author']));
        }
        if (isset($_POST['testimonial_case_type'])) {
            update_post_meta($post_id, '_testimonial_case_type', sanitize_text_field($_POST['testimonial_case_type']));
        }
        if (isset($_POST['testimonial_rating'])) {
            update_post_meta($post_id, '_testimonial_rating', intval($_POST['testimonial_rating']));
        }
    }

    // Practice Area
    if (isset($_POST['practice_area_nonce']) && wp_verify_nonce($_POST['practice_area_nonce'], 'alexander_law_practice_area_nonce')) {
        if (isset($_POST['practice_area_icon'])) {
            update_post_meta($post_id, '_practice_area_icon', wp_kses_post($_POST['practice_area_icon']));
        }
        if (isset($_POST['practice_area_short_desc'])) {
            update_post_meta($post_id, '_practice_area_short_desc', sanitize_textarea_field($_POST['practice_area_short_desc']));
        }
    }

    // Case Result
    if (isset($_POST['case_result_nonce']) && wp_verify_nonce($_POST['case_result_nonce'], 'alexander_law_case_result_nonce')) {
        if (isset($_POST['case_result_outcome'])) {
            update_post_meta($post_id, '_case_result_outcome', sanitize_text_field($_POST['case_result_outcome']));
        }
        if (isset($_POST['case_result_type'])) {
            update_post_meta($post_id, '_case_result_type', sanitize_text_field($_POST['case_result_type']));
        }
        if (isset($_POST['case_result_court'])) {
            update_post_meta($post_id, '_case_result_court', sanitize_text_field($_POST['case_result_court']));
        }
    }
}
add_action('save_post', 'alexander_law_save_meta_boxes');

/**
 * Register Widget Areas
 */
function alexander_law_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'alexander-law'),
        'id'            => 'sidebar-blog',
        'description'   => __('Widgets for blog sidebar', 'alexander-law'),
        'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'alexander-law'),
        'id'            => 'footer-1',
        'description'   => __('First footer widget area', 'alexander-law'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-heading">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'alexander-law'),
        'id'            => 'footer-2',
        'description'   => __('Second footer widget area', 'alexander-law'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-heading">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'alexander_law_widgets_init');

/**
 * Customizer Settings
 */
function alexander_law_customize_register($wp_customize) {
    // Contact Information Section
    $wp_customize->add_section('alexander_law_contact', array(
        'title'    => __('Contact Information', 'alexander-law'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default'           => '(804) 355-0016',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('phone_number', array(
        'label'   => __('Phone Number', 'alexander-law'),
        'section' => 'alexander_law_contact',
        'type'    => 'text',
    ));

    // Cell Phone
    $wp_customize->add_setting('cell_phone', array(
        'default'           => '(804) 814-1489',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('cell_phone', array(
        'label'   => __('Cell Phone', 'alexander-law'),
        'section' => 'alexander_law_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('email_address', array(
        'default'           => 'info@standishalexanderlaw.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('email_address', array(
        'label'   => __('Email Address', 'alexander-law'),
        'section' => 'alexander_law_contact',
        'type'    => 'email',
    ));

    // Office Address
    $wp_customize->add_setting('office_address', array(
        'default'           => '1000 Greenway Lane, Richmond, VA 23226',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('office_address', array(
        'label'   => __('Office Address', 'alexander-law'),
        'section' => 'alexander_law_contact',
        'type'    => 'text',
    ));

    // Office Hours
    $wp_customize->add_setting('office_hours', array(
        'default'           => 'Mon-Fri 8AM-6PM',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('office_hours', array(
        'label'   => __('Office Hours', 'alexander-law'),
        'section' => 'alexander_law_contact',
        'type'    => 'text',
    ));

    // Map Coordinates Section
    $wp_customize->add_section('alexander_law_map', array(
        'title'    => __('Map Settings', 'alexander-law'),
        'priority' => 35,
    ));

    // Latitude
    $wp_customize->add_setting('office_lat', array(
        'default'           => '37.5760265',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('office_lat', array(
        'label'   => __('Office Latitude', 'alexander-law'),
        'section' => 'alexander_law_map',
        'type'    => 'text',
    ));

    // Longitude
    $wp_customize->add_setting('office_lng', array(
        'default'           => '-77.5054805',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('office_lng', array(
        'label'   => __('Office Longitude', 'alexander-law'),
        'section' => 'alexander_law_map',
        'type'    => 'text',
    ));

    // Social Media Section
    $wp_customize->add_section('alexander_law_social', array(
        'title'    => __('Social Media', 'alexander-law'),
        'priority' => 40,
    ));

    // Facebook
    $wp_customize->add_setting('facebook_url', array(
        'default'           => 'https://www.facebook.com/Alexander-Law-Office-PC-227194650719020/',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('facebook_url', array(
        'label'   => __('Facebook URL', 'alexander-law'),
        'section' => 'alexander_law_social',
        'type'    => 'url',
    ));

    // Homepage Section
    $wp_customize->add_section('alexander_law_homepage', array(
        'title'    => __('Homepage Settings', 'alexander-law'),
        'priority' => 45,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Experienced DUI & Criminal Defense in Richmond',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'alexander-law'),
        'section' => 'alexander_law_homepage',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Over 30 years of aggressive defense for DUI, reckless driving, and criminal charges in Richmond and Central Virginia.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'alexander-law'),
        'section' => 'alexander_law_homepage',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'alexander_law_customize_register');

/**
 * Custom Walker for Navigation Menu
 */
class Alexander_Law_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<div class="dropdown">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</div>';
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        if ($depth === 0) {
            $output .= '<div class="menu-item' . ($has_children ? ' has-dropdown' : '') . '">';
            $output .= '<a href="' . esc_url($item->url) . '" class="menu-link">';
            $output .= esc_html($item->title);
            if ($has_children) {
                $output .= '<svg class="dropdown-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 9l-7 7-7-7"/></svg>';
            }
            $output .= '</a>';
        } else {
            $output .= '<a href="' . esc_url($item->url) . '" class="dropdown-link">' . esc_html($item->title) . '</a>';
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }
}

/**
 * Breadcrumbs Function
 */
function alexander_law_breadcrumbs() {
    if (is_front_page()) {
        return;
    }

    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<div class="container">';
    echo '<ol class="breadcrumbs-list" itemscope itemtype="https://schema.org/BreadcrumbList">';

    // Home
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    echo '<a href="' . esc_url(home_url('/')) . '" itemprop="item"><span itemprop="name">' . __('Home', 'alexander-law') . '</span></a>';
    echo '<meta itemprop="position" content="1" />';
    echo '</li>';
    echo '<li class="breadcrumbs-separator">/</li>';

    $position = 2;

    if (is_singular('post')) {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '" itemprop="item"><span itemprop="name">' . __('Blog', 'alexander-law') . '</span></a>';
        echo '<meta itemprop="position" content="' . $position . '" />';
        echo '</li>';
        echo '<li class="breadcrumbs-separator">/</li>';
        $position++;
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span class="current" itemprop="name">' . get_the_title() . '</span>';
        echo '<meta itemprop="position" content="' . $position . '" />';
        echo '</li>';
    } elseif (is_singular('practice_area')) {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_post_type_archive_link('practice_area')) . '" itemprop="item"><span itemprop="name">' . __('Practice Areas', 'alexander-law') . '</span></a>';
        echo '<meta itemprop="position" content="' . $position . '" />';
        echo '</li>';
        echo '<li class="breadcrumbs-separator">/</li>';
        $position++;
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span class="current" itemprop="name">' . get_the_title() . '</span>';
        echo '<meta itemprop="position" content="' . $position . '" />';
        echo '</li>';
    } elseif (is_page()) {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span class="current" itemprop="name">' . get_the_title() . '</span>';
        echo '<meta itemprop="position" content="' . $position . '" />';
        echo '</li>';
    } elseif (is_archive()) {
        echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span class="current" itemprop="name">' . get_the_archive_title() . '</span>';
        echo '<meta itemprop="position" content="' . $position . '" />';
        echo '</li>';
    }

    echo '</ol>';
    echo '</div>';
    echo '</nav>';
}

/**
 * Fetch RSS Feed for Blog
 */
function alexander_law_fetch_rss_feed($feed_url, $limit = 5) {
    include_once(ABSPATH . WPINC . '/feed.php');

    $rss = fetch_feed($feed_url);

    if (is_wp_error($rss)) {
        return array();
    }

    $maxitems = $rss->get_item_quantity($limit);
    $rss_items = $rss->get_items(0, $maxitems);

    $items = array();
    foreach ($rss_items as $item) {
        $items[] = array(
            'title'       => $item->get_title(),
            'link'        => $item->get_permalink(),
            'description' => wp_trim_words($item->get_description(), 30),
            'date'        => $item->get_date('F j, Y'),
        );
    }

    return $items;
}

/**
 * Add Schema.org Structured Data
 */
function alexander_law_schema_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'LegalService',
            'name' => get_bloginfo('name'),
            'description' => get_bloginfo('description'),
            'url' => home_url('/'),
            'telephone' => get_theme_mod('phone_number', '(804) 355-0016'),
            'address' => array(
                '@type' => 'PostalAddress',
                'streetAddress' => '1000 Greenway Lane',
                'addressLocality' => 'Richmond',
                'addressRegion' => 'VA',
                'postalCode' => '23226',
                'addressCountry' => 'US',
            ),
            'geo' => array(
                '@type' => 'GeoCoordinates',
                'latitude' => get_theme_mod('office_lat', '37.5760265'),
                'longitude' => get_theme_mod('office_lng', '-77.5054805'),
            ),
            'openingHoursSpecification' => array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens' => '08:00',
                'closes' => '18:00',
            ),
            'priceRange' => '$$',
            'areaServed' => array(
                'Richmond, VA',
                'Henrico County, VA',
                'Chesterfield County, VA',
                'Hanover County, VA',
            ),
            'aggregateRating' => array(
                '@type' => 'AggregateRating',
                'ratingValue' => '10',
                'bestRating' => '10',
                'ratingCount' => '50',
            ),
        );

        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
    }
}
add_action('wp_head', 'alexander_law_schema_data');

/**
 * Helper function to get practice areas
 */
function alexander_law_get_practice_areas($limit = -1) {
    return new WP_Query(array(
        'post_type'      => 'practice_area',
        'posts_per_page' => $limit,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ));
}

/**
 * Helper function to get testimonials
 */
function alexander_law_get_testimonials($limit = -1) {
    return new WP_Query(array(
        'post_type'      => 'testimonial',
        'posts_per_page' => $limit,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));
}

/**
 * Helper function to get case results
 */
function alexander_law_get_case_results($limit = -1, $type = '') {
    $args = array(
        'post_type'      => 'case_result',
        'posts_per_page' => $limit,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    if (!empty($type)) {
        $args['meta_query'] = array(
            array(
                'key'   => '_case_result_type',
                'value' => $type,
            ),
        );
    }

    return new WP_Query($args);
}

/**
 * Include template parts and modules
 */
require_once ALEXANDER_LAW_DIR . '/inc/template-tags.php';
require_once ALEXANDER_LAW_DIR . '/inc/widgets.php';
require_once ALEXANDER_LAW_DIR . '/inc/seo.php';

/**
 * Contact form handler
 */
function alexander_law_handle_contact_form() {
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'alexander_law_contact_nonce')) {
        wp_die(__('Security check failed', 'alexander-law'));
    }

    $first_name = sanitize_text_field($_POST['first_name'] ?? '');
    $last_name = sanitize_text_field($_POST['last_name'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $case_type = sanitize_text_field($_POST['case_type'] ?? '');
    $court_date = sanitize_text_field($_POST['court_date'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');
    $how_heard = sanitize_text_field($_POST['how_heard'] ?? '');

    $to = get_theme_mod('email_address', get_option('admin_email'));
    $subject = sprintf(__('New Consultation Request from %s %s', 'alexander-law'), $first_name, $last_name);

    $body = sprintf(
        "Name: %s %s\nPhone: %s\nEmail: %s\nCase Type: %s\nCourt Date: %s\nHow Heard: %s\n\nMessage:\n%s",
        $first_name,
        $last_name,
        $phone,
        $email,
        alexander_law_case_type_label($case_type),
        $court_date ?: 'Not specified',
        $how_heard,
        $message
    );

    $headers = array('Content-Type: text/plain; charset=UTF-8');
    if ($email) {
        $headers[] = 'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>';
    }

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', home_url('/contact/')));
    } else {
        wp_redirect(add_query_arg('contact', 'error', home_url('/contact/')));
    }
    exit;
}
add_action('admin_post_alexander_law_contact', 'alexander_law_handle_contact_form');
add_action('admin_post_nopriv_alexander_law_contact', 'alexander_law_handle_contact_form');

/**
 * Add body classes
 */
function alexander_law_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    if (is_page_template('page-contact.php')) {
        $classes[] = 'contact-page';
    }
    return $classes;
}
add_filter('body_class', 'alexander_law_body_classes');

/**
 * Excerpt length
 */
function alexander_law_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'alexander_law_excerpt_length');

/**
 * Excerpt more
 */
function alexander_law_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'alexander_law_excerpt_more');
