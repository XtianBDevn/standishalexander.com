<?php
/**
 * Template Name: Theft Larceny Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Theft & Larceny Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Facing theft or larceny charges in Richmond VA? Standish Alexander has 30+ years defending theft cases. Former prosecutor. Free consultation. (804) 355-0016.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Alexander Law Office",
  "description": "Theft and larceny defense lawyer in Richmond, VA with 30+ years of experience. Former Commonwealth's Attorney.",
  "url": "https://standishalexander.com/theft-larceny-lawyer-richmond-va/",
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
  "areaServed": {
    "@type": "City",
    "name": "Richmond",
    "addressRegion": "VA"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Theft & Larceny Defense Services",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Shoplifting Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Grand Larceny Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Embezzlement Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Identity Theft Defense" } }
    ]
  },
  "knowsAbout": ["Virginia theft law", "larceny defense", "shoplifting charges", "grand larceny", "embezzlement"],
  "founder": {
    "@type": "Person",
    "name": "H. Standish Alexander III",
    "jobTitle": "Criminal Defense Attorney",
    "description": "Former Assistant Commonwealth's Attorney with 30+ years of criminal defense experience in Richmond, VA."
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
            <span class="hero-badge">Criminal Defense</span>
            <h1>Theft &amp; Larceny Lawyer Richmond VA</h1>
            <p class="page-hero-subtitle">Theft charges in Virginia — from shoplifting to grand larceny — carry the potential for a permanent criminal record. What happens next depends heavily on who is defending you.</p>
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
                    <p>Theft charges in Virginia range from shoplifting to grand larceny — but all of them carry the potential for a permanent criminal record. Even a first-time shoplifting conviction can cost you your job and follow you for years. What happens next depends heavily on who is defending you.</p>
                    <p style="margin-top: 1rem;">Standish Alexander has spent more than 30 years defending clients against theft and larceny charges in Richmond and throughout Central Virginia. As a former prosecutor, he knows exactly how these cases are built — and where they can be challenged.</p>
                </div>

                <!-- Virginia Larceny Law -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">Virginia Larceny Law — What You're Facing</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Virginia law treats larceny seriously at every level. The charge you face depends largely on the value of the property alleged to have been taken.</p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--secondary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Petty Larceny &mdash; &sect; 18.2-96</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Property value under $1,000. Class 1 misdemeanor — up to 12 months in jail and a $2,500 fine. Do not assume a misdemeanor means no consequences.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Grand Larceny &mdash; &sect; 18.2-95</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Property value $1,000 or more, or a firearm of any value. Class 5 felony — 1 to 20 years in prison. This is a life-altering charge.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--secondary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Shoplifting &mdash; &sect; 18.2-103</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">May be charged as petty or grand larceny depending on value. Store employees and loss prevention are often the primary witnesses — their credibility matters.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Larceny with Intent to Sell &mdash; &sect; 18.2-108.01</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Enhanced penalties apply when stolen goods are intended for resale. The prosecution must prove specific intent — a crucial element to challenge.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--secondary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Embezzlement &mdash; &sect; 18.2-111</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Theft by someone entrusted with property — employees, financial managers, agents. Class 5 felony for amounts of $1,000 or more. Often involves employers and financial records.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Receiving Stolen Goods &mdash; &sect; 18.2-108</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Buying or receiving property you knew or should have known was stolen. Carries the same penalties as larceny. Knowledge is the central issue to contest.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--secondary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Third Larceny Conviction — Mandatory Enhancement</h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">A third larceny conviction in Virginia — regardless of the amount — triggers mandatory felony enhancement. Prior record has serious consequences here.</p>
                        </div>
                    </div>
                </div>

                <!-- Charges We Handle -->
                <div style="margin-bottom: 3rem; background: var(--gray-200); border-radius: 1rem; padding: 2rem;">
                    <h2 style="margin-bottom: 1.25rem;">Theft Charges We Defend</h2>
                    <div class="grid md-grid-cols-2 gap-3">
                        <?php
                        $charges = [
                            'Shoplifting',
                            'Embezzlement',
                            'Grand larceny',
                            'Petty larceny',
                            'Identity theft (&sect; 18.2-186.3)',
                            'Credit card fraud',
                            'Robbery (&sect; 18.2-58)',
                            'Burglary',
                        ];
                        foreach ( $charges as $charge ) : ?>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span style="font-size: 0.9rem;"><?php echo $charge; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Defense Strategies -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1rem;">How We Defend Theft Charges in Virginia</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Intent to steal is the essential element in any larceny charge. Without proving that you intended to permanently deprive someone of their property, there is no larceny. Every case turns on its facts — and every set of facts has vulnerabilities the prosecution would rather you not find.</p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php
                        $strategies = [
                            ['Lack of intent to steal', 'The cornerstone of any larceny defense. If the intent element cannot be proven, the charge fails — period.'],
                            ['Mistaken belief of ownership', 'A good-faith belief that the property was yours negates the criminal intent required for conviction.'],
                            ['Value disputes', 'Challenging the alleged value of property can reduce a felony grand larceny charge to a misdemeanor petty larceny.'],
                            ['Ownership of the property', 'If you had a legitimate claim to the property, the taking was not theft under Virginia law.'],
                            ['Constitutional challenges', 'Illegal searches and seizures can suppress critical evidence. If the police violated your Fourth Amendment rights, that evidence may be excluded.'],
                            ['Witness credibility', 'Store employees and loss prevention officers make mistakes. Inconsistent accounts, poor observations, and policy violations can undermine the prosecution\'s witnesses.'],
                        ];
                        foreach ( $strategies as $s ) : ?>
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                </div>
                                <div>
                                    <strong style="display: block; margin-bottom: 0.25rem;"><?php echo esc_html( $s[0] ); ?></strong>
                                    <span style="font-size: 0.875rem; color: var(--text-light);"><?php echo esc_html( $s[1] ); ?></span>
                                </div>
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
                                What is grand larceny in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Grand larceny in Virginia under &sect; 18.2-95 is the theft of property worth $1,000 or more, or any firearm regardless of value. It is a Class 5 felony punishable by 1 to 20 years in prison and a fine of up to $2,500.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Is shoplifting a misdemeanor or felony in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">It depends on the value of the merchandise. Shoplifting items worth less than $1,000 is a Class 1 misdemeanor. Shoplifting $1,000 or more is a Class 5 felony — grand larceny — and carries the possibility of years in prison.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can theft charges be expunged in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Only if the charges were dismissed or you were found not guilty. If you were convicted — even of a first-time misdemeanor — Virginia does not allow expungement of that record. This is why fighting the charge from the start is so important.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                What is the penalty for a first shoplifting charge in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">If the value is under $1,000, a first shoplifting charge is a Class 1 misdemeanor — up to 12 months in jail and a $2,500 fine. But even a suspended sentence means a conviction on your permanent record.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Do employers see theft convictions on background checks?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Yes. Theft and larceny convictions appear on criminal background checks permanently in Virginia. Employers — particularly those in retail, finance, government, and healthcare — regularly screen for theft-related offenses. A conviction can end a job search before it starts.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                What defenses work in Virginia theft cases?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Intent to steal is the key element the prosecution must prove. No intent means no larceny. Beyond intent, defenses include ownership disputes, value challenges, witness credibility problems, and constitutional violations during the investigation or arrest.</p>
                        </details>

                    </div>
                </div>

                <!-- Internal Links -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1rem;">Related Practice Areas</h2>
                    <div class="grid md-grid-cols-2 gap-4">
                        <a href="<?php echo esc_url( home_url( '/criminal-defense-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            <span style="font-weight: 600;">Criminal Defense</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/expungement-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                            <span style="font-weight: 600;">Expungement</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/misdemeanor-defense-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
                            <span style="font-weight: 600;">Misdemeanor Defense</span>
                        </a>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white;">
                    <h3 style="color: white; margin-bottom: 0.75rem;">Facing Theft Charges? Call Before Your Next Court Date.</h3>
                    <p style="opacity: 0.9; margin-bottom: 1.5rem;">Every court date that passes without a defense strategy is a missed opportunity. Contact Alexander Law Office today for a free, confidential consultation.</p>
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
                    <p>Speak with an experienced theft defense attorney today. Your first call is free and confidential.</p>
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
                            'License Suspension'       => '/license-suspension-lawyer-va/',
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
                            '30+ years of criminal defense experience',
                            'Former Commonwealth\'s Attorney — knows both sides',
                            '10.0 Superb AVVO rating',
                            'Direct access to your attorney',
                            'Free initial consultation',
                            'Serving Richmond &amp; Central Virginia',
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
