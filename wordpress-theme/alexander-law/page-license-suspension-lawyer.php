<?php
/**
 * Template Name: License Suspension Lawyer VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'License Suspension Lawyer Virginia | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Driver's license suspended in Virginia? Fight it with Alexander Law Office — 30+ years helping clients restore driving privileges. Free consultation. (804) 355-0016.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Alexander Law Office",
  "description": "License suspension lawyer in Virginia with 30+ years helping clients restore driving privileges after DUI, reckless driving, and DMV point accumulation.",
  "url": "https://standishalexander.com/license-suspension-lawyer-va/",
  "telephone": "+18043550016",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1502 Willow Lawn Dr Suite 212",
    "addressLocality": "Richmond",
    "addressRegion": "VA",
    "postalCode": "23230",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 37.5860,
    "longitude": -77.5028
  },
  "areaServed": [
    { "@type": "State", "name": "Virginia" },
    { "@type": "City", "name": "Richmond", "addressRegion": "VA" }
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "License Suspension Defense Services",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Restricted License Application" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "License Reinstatement" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "DMV Hearing Representation" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Habitual Offender Petition" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Driving While Suspended Defense" } }
    ]
  },
  "knowsAbout": ["Virginia license suspension", "restricted license Virginia", "DMV hearing", "habitual offender", "driving while suspended"],
  "founder": {
    "@type": "Person",
    "name": "H. Standish Alexander III",
    "jobTitle": "Criminal Defense Attorney",
    "description": "Former Assistant Commonwealth's Attorney with 30+ years of criminal defense and traffic law experience in Virginia."
  }
}
</script>
<?php }, 1 );

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="hero-badge">Traffic &amp; License Law</span>
            <h1>License Suspension Lawyer Virginia &mdash; Restore Your Driving Privileges</h1>
            <p class="page-hero-subtitle">Losing your driver's license affects every part of your life. Whether your suspension came from DUI, DMV points, unpaid fines, or another cause — there are legal options to fight back.</p>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Main Content Section -->
<section class="section">
    <div class="container">
        <div class="grid lg-grid-cols-3 gap-8">

            <!-- Main Content -->
            <div class="lg-col-span-2" style="grid-column: span 2 / span 2;">

                <!-- Hook -->
                <div style="font-size: 1.125rem; line-height: 1.8; margin-bottom: 2.5rem; color: var(--text-light);">
                    <p>Losing your driver's license in Virginia affects every part of your life — getting to work, taking your kids to school, managing the basics of daily life. Whether your license was suspended for a DUI, unpaid court fines, DMV point accumulation, or a medical reason, there are legal options available to restore your driving privileges.</p>
                    <p style="margin-top: 1rem;">Standish Alexander has spent more than 30 years helping Virginia drivers navigate the DMV system, fight suspensions, and get back on the road legally. Don't assume the suspension is final — there is almost always something that can be done.</p>
                </div>

                <!-- Reasons for Suspension -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">Reasons Your Virginia License May Be Suspended</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Virginia DMV can suspend or revoke your license for a wide range of reasons. Understanding the basis for your suspension determines what remedies are available.</p>

                    <div class="grid md-grid-cols-2 gap-4">
                        <?php
                        $reasons = [
                            ['DUI Conviction', '12-month minimum suspension for a first offense. Restricted license available after 30 days with an ignition interlock device.'],
                            ['Reckless Driving', 'Court discretion — up to 6-month suspension. Often added to the criminal penalty.'],
                            ['DMV Demerit Points', '11 points triggers a 90-day suspension; 18+ points in 12 months triggers an additional 90 days.'],
                            ['Failure to Pay Court Fines', 'License suspended until fines are paid or a payment plan is approved by the court.'],
                            ['Failure to Appear in Court', 'Automatic suspension upon notification from the court to DMV.'],
                            ['Child Support Non-Compliance', 'License suspended for failure to comply with a child support order.'],
                            ['Medical Suspension', 'DMV may suspend a license based on a physician\'s report or a medical condition affecting driving ability.'],
                            ['Habitual Offender Status', 'Multiple serious violations can result in a 10-year revocation under &sect; 46.2-360.'],
                        ];
                        foreach ( $reasons as $r ) : ?>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 0.975rem; margin-bottom: 0.5rem;"><?php echo $r[0]; ?></h3>
                                <p style="color: var(--text-light); font-size: 0.875rem; margin: 0;"><?php echo $r[1]; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Driving While Suspended -->
                <div style="margin-bottom: 3rem; background: #fff3cd; border: 1px solid #ffc107; border-radius: 1rem; padding: 2rem;">
                    <h2 style="margin-bottom: 1rem; font-size: 1.25rem;">Driving While Suspended &mdash; &sect; 46.2-301</h2>
                    <p style="color: var(--text-light); margin-bottom: 1rem;">This is a criminal charge — not just a traffic offense. Getting caught driving on a suspended license in Virginia means:</p>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.75rem;">
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc3545" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span style="font-size: 0.9rem;"><strong>Class 1 misdemeanor</strong> — the same class as DUI first offense</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc3545" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span style="font-size: 0.9rem;">Up to <strong>12 months in jail</strong> and a $2,500 fine</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc3545" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span style="font-size: 0.9rem;"><strong>Additional suspension period</strong> stacked on top of your existing suspension</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc3545" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span style="font-size: 0.9rem;">A <strong>permanent criminal record</strong> that appears on background checks</span>
                        </li>
                    </ul>
                    <p style="font-size: 0.875rem; color: var(--text-light); margin-top: 1rem; margin-bottom: 0;">If you are already driving on a suspended license, call us immediately. Do not wait for your court date.</p>
                </div>

                <!-- Restricted License -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1rem;">Virginia Restricted License — Getting Back on the Road</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">In many suspension situations, you can petition for a restricted license that allows you to drive for essential purposes. For DUI first offenses, you may be eligible after serving 30 days of the suspension.</p>

                    <div class="grid md-grid-cols-2 gap-4" style="margin-bottom: 1.5rem;">
                        <?php
                        $permitted = [
                            'To and from work',
                            'Medical appointments',
                            'School and educational programs',
                            'Court appearances',
                            'Church services',
                            'DMV appointments',
                            'Alcohol education programs (ASAP)',
                            'Child care or dependent care',
                        ];
                        foreach ( $permitted as $p ) : ?>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span style="font-size: 0.9rem;"><?php echo esc_html( $p ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <p style="font-size: 0.875rem; color: var(--text-light);">Note: Restricted licenses for DUI suspensions typically require installation of an ignition interlock device (IID) under &sect; 46.2-391.1. We can walk you through the entire process.</p>
                </div>

                <!-- Reinstatement Process -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">Virginia License Reinstatement Process</h2>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php
                        $steps = [
                            ['Serve the suspension period', 'The minimum suspension time must be completed before reinstatement in most cases.'],
                            ['Pay the DMV reinstatement fee', 'Typically $220 to $300 depending on the type and number of violations. Must be paid directly to Virginia DMV.'],
                            ['Complete required programs', 'ASAP (Alcohol Safety Action Program), driver improvement clinics, or other court-ordered programs must be finished.'],
                            ['File SR-22 insurance', 'Required for DUI-related suspensions for a minimum of 3 years. Your insurance carrier files this with DMV.'],
                            ['Install IID if required', 'Ignition interlock device installation is mandatory for many DUI-related restricted licenses and reinstatements.'],
                            ['Petition Circuit Court if needed', 'In some situations — including habitual offender status — a formal court petition is required for reinstatement or early relief.'],
                        ];
                        foreach ( $steps as $i => $step ) : ?>
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: white; font-weight: 700; font-size: 0.875rem;">
                                    <?php echo $i + 1; ?>
                                </div>
                                <div>
                                    <strong style="display: block; margin-bottom: 0.25rem;"><?php echo esc_html( $step[0] ); ?></strong>
                                    <span style="font-size: 0.875rem; color: var(--text-light);"><?php echo esc_html( $step[1] ); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Services -->
                <div style="margin-bottom: 3rem; background: var(--gray-200); border-radius: 1rem; padding: 2rem;">
                    <h2 style="margin-bottom: 1.25rem;">We Help With</h2>
                    <div class="grid md-grid-cols-2 gap-3">
                        <?php
                        $services = [
                            'DMV hearings',
                            'Restricted license applications',
                            'License reinstatement',
                            'Habitual offender petitions (&sect; 46.2-360)',
                            'Driving while suspended defense',
                            'SR-22 guidance',
                        ];
                        foreach ( $services as $s ) : ?>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span style="font-size: 0.9rem;"><?php echo $s; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- FAQ -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">Frequently Asked Questions</h2>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                How long is a license suspension for a first DUI in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">A first DUI conviction in Virginia results in a 12-month license suspension. After serving 30 days, you may be eligible to apply for a restricted license — but you must meet the requirements and install an ignition interlock device in most cases.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can I get a restricted license in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Yes — in many cases. A restricted license allows driving for work, medical appointments, school, court appearances, church, DMV visits, and other essential purposes. Eligibility and conditions depend on the reason for the suspension. We handle the application process for you.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                What happens if I drive on a suspended license in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Driving while suspended in Virginia is a Class 1 misdemeanor under &sect; 46.2-301 — up to 12 months in jail and a $2,500 fine. You also face an additional suspension stacked on top of your current one, and a permanent criminal record.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                How do I reinstate my Virginia driver's license?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">You must serve the suspension period, pay the DMV reinstatement fee ($220–$300), complete all required programs (such as ASAP), file SR-22 insurance if required, and install an ignition interlock device if applicable. In some cases, a Circuit Court petition is also necessary.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                What is habitual offender status in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Habitual offender status in Virginia is declared when a driver accumulates multiple serious violations within a certain period, resulting in a 10-year license revocation under &sect; 46.2-360. Reinstatement requires a formal petition to Circuit Court — and often a strong legal argument.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can I fight a license suspension in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Yes. Depending on the basis for the suspension, you may be able to contest it through a DMV administrative hearing or a Circuit Court petition. For driving while suspended charges, a full criminal defense applies. Call us to discuss the specific facts of your situation.</p>
                        </details>

                    </div>
                </div>

                <!-- Internal Links -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1rem;">Related Practice Areas</h2>
                    <div class="grid md-grid-cols-2 gap-4">
                        <a href="<?php echo esc_url( home_url( '/dui-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span style="font-weight: 600;">DUI Defense</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/reckless-driving-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                            <span style="font-weight: 600;">Reckless Driving</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/traffic-ticket-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
                            <span style="font-weight: 600;">Traffic Tickets</span>
                        </a>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white;">
                    <h3 style="color: white; margin-bottom: 0.75rem;">Don't Lose Your License Without a Fight &mdash; Call Today</h3>
                    <p style="opacity: 0.9; margin-bottom: 1.5rem;">Alexander Law Office has been helping Virginia drivers restore their licenses for over 30 years. Call now for a free consultation — we'll tell you exactly what your options are.</p>
                    <div class="flex gap-4" style="flex-wrap: wrap;">
                        <a href="tel:8043550016" class="btn btn-secondary">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            (804) 355-0016
                        </a>
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white">Free Consultation</a>
                    </div>
                </div>

            </div><!-- /.main -->

            <!-- Sidebar -->
            <aside class="blog-sidebar">

                <!-- Free Consultation -->
                <div class="sidebar-widget widget-cta">
                    <h3>Free Consultation</h3>
                    <p>Talk to an experienced license suspension attorney today. We'll explain your options and what we can do to help.</p>
                    <a href="tel:8043550016" class="widget-phone">(804) 355-0016</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width: 100%; margin-top: 1rem; text-align: center;">Contact Us</a>
                </div>

                <!-- Practice Areas -->
                <div class="sidebar-widget">
                    <h3>Practice Areas</h3>
                    <ul class="category-list">
                        <?php
                        $links = [
                            'Criminal Defense'         => '/criminal-defense-lawyer-richmond-va/',
                            'DUI Defense'              => '/dui-lawyer-richmond-va/',
                            'Reckless Driving'         => '/reckless-driving-lawyer-richmond-va/',
                            'Drug Possession'          => '/drug-possession-lawyer-richmond-va/',
                            'Assault &amp; Battery'    => '/assault-battery-lawyer-richmond-va/',
                            'Felony Defense'           => '/felony-defense-lawyer-richmond-va/',
                            'Misdemeanor Defense'      => '/misdemeanor-defense-lawyer-richmond-va/',
                            'Theft &amp; Larceny'      => '/theft-larceny-lawyer-richmond-va/',
                            'Expungement'              => '/expungement-lawyer-richmond-va/',
                            'Traffic Tickets'          => '/traffic-ticket-lawyer-richmond-va/',
                        ];
                        foreach ( $links as $label => $url ) : ?>
                            <li>
                                <a href="<?php echo esc_url( home_url( $url ) ); ?>">
                                    <span><?php echo $label; ?></span>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Why Choose Us -->
                <div class="sidebar-widget">
                    <h3>Why Choose Us</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php
                        $reasons = [
                            '30+ years of traffic &amp; criminal defense',
                            'Former Commonwealth\'s Attorney',
                            '10.0 Superb AVVO rating',
                            'Direct access to your attorney',
                            'Free initial consultation',
                            'Serving all of Central Virginia',
                        ];
                        foreach ( $reasons as $reason ) : ?>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.875rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span style="font-size: 0.875rem;"><?php echo $reason; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Courts We Serve -->
                <div class="sidebar-widget">
                    <h3>Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
                        <?php
                        $courts = [
                            'Richmond General District Court',
                            'Richmond Circuit Court',
                            'Henrico County Courts',
                            'Chesterfield County Courts',
                            'Hanover County Courts',
                            'Colonial Heights Courts',
                        ];
                        $last = count( $courts ) - 1;
                        foreach ( $courts as $i => $court ) : ?>
                            <li style="padding: 0.5rem 0;<?php echo $i < $last ? ' border-bottom: 1px solid var(--gray-200);' : ''; ?>">
                                <?php echo esc_html( $court ); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </aside><!-- /.sidebar -->

        </div>
    </div>
</section>

<?php get_footer(); ?>
