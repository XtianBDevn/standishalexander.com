<?php
/**
 * Template Name: Practice Areas
 *
 * Landing page listing all practice areas at Alexander Law Office.
 *
 * @package Alexander_Law
 */

// SEO helpers — must be called before get_header() so hooks register in time.
require_once get_template_directory() . '/inc/seo.php';

alexander_law_output_meta(
    'Practice Areas | Alexander Law Office Richmond VA',
    'Explore all practice areas at Alexander Law Office — DUI, criminal defense, reckless driving, expungement & more. 30+ years serving Richmond, VA. Free consultation.'
);

// Schema: LocalBusiness + LegalService
alexander_law_output_schema( array(
    '@context' => 'https://schema.org',
    '@graph'   => array(
        array(
            '@type'            => array( 'LegalService', 'LocalBusiness' ),
            'name'             => 'Alexander Law Office',
            'description'      => 'Full-service criminal and traffic defense law firm serving Richmond, VA and Central Virginia for over 30 years.',
            'url'              => home_url( '/practice-areas/' ),
            'telephone'        => '+18043550016',
            'priceRange'       => '$$',
            'areaServed'       => array( 'Richmond, VA', 'Henrico County', 'Chesterfield County', 'Hanover County', 'Petersburg, VA' ),
            'address'          => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => '1000 Greenway Lane',
                'addressLocality' => 'Richmond',
                'addressRegion'   => 'VA',
                'postalCode'      => '23226',
                'addressCountry'  => 'US',
            ),
            'hasOfferCatalog'  => array(
                '@type'           => 'OfferCatalog',
                'name'            => 'Criminal & Traffic Defense Services',
                'itemListElement' => array(
                    array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'DUI Defense' ) ),
                    array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Reckless Driving Defense' ) ),
                    array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Criminal Defense' ) ),
                    array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Expungement' ) ),
                    array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => 'Traffic Violations' ) ),
                ),
            ),
        ),
    ),
) );

get_header();

// Practice areas data — slug, label, description, icon key
$practice_areas = array(
    array(
        'slug'  => 'dui-lawyer-richmond-va',
        'label' => 'DUI Defense',
        'desc'  => 'Virginia DUI charges carry mandatory jail time, license suspension, and permanent criminal records. We know every defense — from bad breath tests to illegal stops.',
        'icon'  => 'dui',
    ),
    array(
        'slug'  => 'reckless-driving-lawyer-richmond-va',
        'label' => 'Reckless Driving',
        'desc'  => 'Reckless driving in Virginia is a Class 1 misdemeanor — the same level as DUI. Speed 20+ mph over the limit or over 85 mph qualifies. Do not go to court alone.',
        'icon'  => 'reckless',
    ),
    array(
        'slug'  => 'traffic-ticket-lawyer-richmond-va',
        'label' => 'Traffic Violations',
        'desc'  => 'A traffic conviction adds demerit points, raises insurance rates, and can suspend your license. We fight tickets to keep your record — and your premiums — clean.',
        'icon'  => 'traffic',
    ),
    array(
        'slug'  => 'criminal-defense-lawyer-richmond-va',
        'label' => 'Criminal Defense',
        'desc'  => 'From misdemeanor charges to serious felonies, we build aggressive defenses grounded in 30+ years of courtroom experience and a former prosecutor\'s insight.',
        'icon'  => 'criminal',
    ),
    array(
        'slug'  => 'expungement-lawyer-richmond-va',
        'label' => 'Expungement',
        'desc'  => 'A criminal record follows you into every job application and background check. If your charge was dismissed or you were acquitted, you may be eligible to have it removed.',
        'icon'  => 'expungement',
    ),
    array(
        'slug'  => 'drug-possession-lawyer-richmond-va',
        'label' => 'Drug Possession',
        'desc'  => 'Drug charges in Virginia range from simple possession to distribution, with penalties that can include prison time. We challenge searches, chain of custody, and more.',
        'icon'  => 'default',
    ),
    array(
        'slug'  => 'assault-battery-lawyer-richmond-va',
        'label' => 'Assault & Battery',
        'desc'  => 'Assault and battery convictions can mean jail time, restraining orders, and a permanent mark on your record. Self-defense and lack of intent are often viable defenses.',
        'icon'  => 'default',
    ),
    array(
        'slug'  => 'theft-larceny-lawyer-richmond-va',
        'label' => 'Theft & Larceny',
        'desc'  => 'Grand larceny (over $1,000) is a felony in Virginia. Even petit larceny convictions affect employment. We work to get charges reduced or dismissed.',
        'icon'  => 'default',
    ),
    array(
        'slug'  => 'license-suspension-lawyer-va',
        'label' => 'License Suspension',
        'desc'  => 'Driving on a suspended license is a criminal offense in Virginia — not just a traffic infraction. We help restore driving privileges and defend suspension charges.',
        'icon'  => 'car',
    ),
    array(
        'slug'  => 'felony-defense-lawyer-richmond-va',
        'label' => 'Felony Defense',
        'desc'  => 'Felony convictions mean loss of voting rights, firearm rights, and decades of collateral consequences. We fight for dismissals, plea reductions, and acquittals.',
        'icon'  => 'criminal',
    ),
    array(
        'slug'  => 'misdemeanor-defense-lawyer-richmond-va',
        'label' => 'Misdemeanor Defense',
        'desc'  => 'Misdemeanors are criminal convictions — they show up on background checks. Class 1 misdemeanors carry up to 12 months in jail. A lawyer can make the difference.',
        'icon'  => 'gavel',
    ),
    array(
        'slug'  => 'richmond-va',
        'label' => 'Richmond VA',
        'desc'  => 'We practice exclusively in Richmond and Central Virginia courts. Local relationships and local knowledge matter in every courtroom.',
        'icon'  => 'location',
    ),
);
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="hero-badge"><?php _e( 'Criminal & Traffic Defense', 'alexander-law' ); ?></span>
            <h1><?php _e( 'Richmond VA Criminal Defense Practice Areas', 'alexander-law' ); ?></h1>
            <p class="page-hero-subtitle"><?php _e( 'Comprehensive legal defense for DUI, reckless driving, criminal charges, and more. Serving Richmond and Central Virginia for over 30 years.', 'alexander-law' ); ?></p>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Intro -->
<section class="section">
    <div class="container">
        <div style="max-width: 780px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-light);">
                <?php _e( 'Alexander Law Office handles all major criminal and traffic defense matters in Richmond City and the surrounding counties of Henrico, Chesterfield, Hanover, and beyond. Whether you\'re facing a first-offense DUI or a serious felony charge, attorney Standish Alexander brings more than 30 years of courtroom experience — including time as a Commonwealth\'s Attorney — to your defense.', 'alexander-law' ); ?>
            </p>
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--text-light); margin-top: 1rem;">
                <?php _e( 'Every case starts with a free, confidential consultation. Browse the practice areas below, or call now to speak directly with Mr. Alexander.', 'alexander-law' ); ?>
            </p>
            <div style="margin-top: 2rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url( alexander_law_phone_link() ); ?>" class="btn btn-primary">
                    <?php echo alexander_law_icon( 'phone', 20 ); ?>
                    <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
                    <?php _e( 'Free Consultation', 'alexander-law' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Practice Area Cards -->
<section class="section bg-muted">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <span class="hero-badge"><?php _e( 'What We Handle', 'alexander-law' ); ?></span>
            <h2><?php _e( 'Our Practice Areas', 'alexander-law' ); ?></h2>
            <p style="color: var(--text-light); max-width: 600px; margin: 1rem auto 0;"><?php _e( 'Click any area below to learn more about your charges, possible penalties, and how we can help.', 'alexander-law' ); ?></p>
        </div>

        <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-6">
            <?php foreach ( $practice_areas as $area ) : ?>
            <a href="<?php echo esc_url( home_url( '/' . $area['slug'] . '/' ) ); ?>" class="card" style="padding: 2rem; display: flex; flex-direction: column; text-decoration: none; color: inherit; transition: box-shadow 0.2s, transform 0.2s;" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
                <div style="width: 52px; height: 52px; background: var(--primary); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1.25rem; flex-shrink: 0;">
                    <?php echo alexander_law_practice_icon( $area['icon'] ); ?>
                </div>
                <h3 style="font-size: 1.125rem; margin-bottom: 0.75rem; color: var(--primary);">
                    <?php echo esc_html( $area['label'] ); ?>
                </h3>
                <p style="font-size: 0.875rem; color: var(--text-light); line-height: 1.6; flex: 1; margin: 0;">
                    <?php echo esc_html( $area['desc'] ); ?>
                </p>
                <div style="margin-top: 1.25rem; display: flex; align-items: center; gap: 0.375rem; color: var(--secondary); font-weight: 600; font-size: 0.875rem;">
                    <?php _e( 'Learn More', 'alexander-law' ); ?>
                    <?php echo alexander_law_icon( 'arrow-right', 16 ); ?>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Alexander Law Office -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <span class="hero-badge"><?php _e( 'Why Choose Us', 'alexander-law' ); ?></span>
            <h2><?php _e( 'Experience That Works in Your Favor', 'alexander-law' ); ?></h2>
        </div>

        <div class="grid md-grid-cols-2 gap-8">

            <!-- 30+ Years -->
            <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <?php echo alexander_law_icon( 'check-circle', 24 ); ?>
                </div>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;"><?php _e( '30+ Years of Criminal Defense', 'alexander-law' ); ?></h3>
                    <p style="font-size: 0.9rem; color: var(--text-light); margin: 0; line-height: 1.7;">
                        <?php _e( 'Standish Alexander has defended thousands of clients across Richmond and Central Virginia since 1992. That depth of experience means we have seen your situation before — and we know what works.', 'alexander-law' ); ?>
                    </p>
                </div>
            </div>

            <!-- Former Prosecutor -->
            <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <?php echo alexander_law_icon( 'check-circle', 24 ); ?>
                </div>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;"><?php _e( 'Former Commonwealth\'s Attorney', 'alexander-law' ); ?></h3>
                    <p style="font-size: 0.9rem; color: var(--text-light); margin: 0; line-height: 1.7;">
                        <?php _e( 'Having prosecuted cases himself, Mr. Alexander understands exactly how the other side builds its case — and where it falls apart. That inside perspective is a direct advantage for you.', 'alexander-law' ); ?>
                    </p>
                </div>
            </div>

            <!-- Local Courts -->
            <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <?php echo alexander_law_icon( 'check-circle', 24 ); ?>
                </div>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;"><?php _e( 'Deep Local Court Knowledge', 'alexander-law' ); ?></h3>
                    <p style="font-size: 0.9rem; color: var(--text-light); margin: 0; line-height: 1.7;">
                        <?php _e( 'We practice regularly in Richmond General District Court, Richmond Circuit Court, Henrico, Chesterfield, and Hanover courts. Knowing the judges, prosecutors, and procedures matters.', 'alexander-law' ); ?>
                    </p>
                </div>
            </div>

            <!-- Free Consultation -->
            <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                <div style="width: 52px; height: 52px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <?php echo alexander_law_icon( 'check-circle', 24 ); ?>
                </div>
                <div>
                    <h3 style="font-size: 1.125rem; margin-bottom: 0.5rem;"><?php _e( 'Free Initial Consultation', 'alexander-law' ); ?></h3>
                    <p style="font-size: 0.9rem; color: var(--text-light); margin: 0; line-height: 1.7;">
                        <?php _e( 'Your first conversation costs you nothing. We listen to the facts, assess your options honestly, and tell you straight what we can do for you. No pressure, no obligation.', 'alexander-law' ); ?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Service Area -->
<section class="section bg-muted">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <span class="hero-badge"><?php _e( 'Where We Practice', 'alexander-law' ); ?></span>
            <h2><?php _e( 'Serving Richmond & Central Virginia', 'alexander-law' ); ?></h2>
            <p style="color: var(--text-light); max-width: 640px; margin: 1rem auto 0;">
                <?php _e( 'Alexander Law Office represents clients throughout the greater Richmond metropolitan area and surrounding counties. If you\'re not sure whether we cover your court, call us — chances are we do.', 'alexander-law' ); ?>
            </p>
        </div>

        <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-4" style="max-width: 900px; margin: 0 auto;">
            <?php
            $service_areas = array(
                array( 'city' => 'Richmond', 'detail' => 'City of Richmond — GDC &amp; Circuit Court' ),
                array( 'city' => 'Henrico County', 'detail' => 'Henrico General District &amp; Circuit Court' ),
                array( 'city' => 'Chesterfield County', 'detail' => 'Chesterfield GDC &amp; Circuit Court' ),
                array( 'city' => 'Hanover County', 'detail' => 'Hanover GDC &amp; Circuit Court' ),
                array( 'city' => 'Petersburg', 'detail' => 'Petersburg GDC &amp; Circuit Court' ),
                array( 'city' => 'All Central Virginia', 'detail' => 'Call to confirm your jurisdiction' ),
            );
            foreach ( $service_areas as $area ) : ?>
            <div class="card" style="padding: 1.5rem; display: flex; align-items: flex-start; gap: 1rem;">
                <div style="color: var(--secondary); flex-shrink: 0; margin-top: 2px;">
                    <?php echo alexander_law_icon( 'location', 20 ); ?>
                </div>
                <div>
                    <strong style="display: block; color: var(--primary); margin-bottom: 0.25rem;"><?php echo esc_html( $area['city'] ); ?></strong>
                    <span style="font-size: 0.8rem; color: var(--text-light);"><?php echo $area['detail']; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white; margin-bottom: 1rem;"><?php _e( 'Ready to Talk About Your Case?', 'alexander-law' ); ?></h2>
        <p style="max-width: 600px; margin: 0 auto 2rem; opacity: 0.9; font-size: 1.0625rem;">
            <?php _e( 'Call now for a free, confidential consultation. The sooner you call, the more options you have. We return calls promptly — including evenings and weekends.', 'alexander-law' ); ?>
        </p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="<?php echo esc_url( alexander_law_phone_link() ); ?>" class="btn btn-secondary btn-lg">
                <?php echo alexander_law_icon( 'phone', 20 ); ?>
                <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">
                <?php _e( 'Request Free Consultation', 'alexander-law' ); ?>
            </a>
        </div>
        <p style="margin-top: 1.5rem; opacity: 0.7; font-size: 0.875rem;">
            <?php _e( 'Free consultation &bull; No obligation &bull; Confidential', 'alexander-law' ); ?>
        </p>
    </div>
</section>

<?php get_footer(); ?>
