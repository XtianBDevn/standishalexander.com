<?php
/**
 * Template Name: Misdemeanor Defense Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Misdemeanor Defense Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Misdemeanor charges in Richmond VA? Still a criminal record. Fight with Alexander Law Office — 30+ years, former prosecutor. Free consultation. (804) 355-0016.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Alexander Law Office",
  "description": "Misdemeanor defense lawyer in Richmond, VA. 30+ years of experience defending clients against DUI, reckless driving, assault, petty larceny, and all Class 1–4 misdemeanor charges in Virginia General District Courts.",
  "url": "https://standishalexander.com/misdemeanor-defense-lawyer-richmond-va/",
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
    "name": "Misdemeanor Defense Services",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "DUI First Offense Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Reckless Driving Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Simple Assault Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Petty Larceny Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Driving While Suspended Defense" } }
    ]
  },
  "knowsAbout": [
    "Virginia misdemeanor classes", "General District Court", "de novo appeal", "Class 1 misdemeanor Virginia", "bench trial misdemeanor"
  ],
  "founder": {
    "@type": "Person",
    "name": "H. Standish Alexander III",
    "jobTitle": "Criminal Defense Attorney",
    "description": "Former Assistant Commonwealth's Attorney with 30+ years of misdemeanor and criminal defense experience in Richmond and Central Virginia."
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
            <span class="hero-badge">Misdemeanor Defense</span>
            <h1>Misdemeanor Defense Lawyer Richmond VA</h1>
            <p class="page-hero-subtitle">A misdemeanor is not a minor matter. In Virginia, it means a criminal record — permanent, public, and following you to every background check. Don't accept a charge without fighting it.</p>
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
                    <p>Many people assume a misdemeanor is minor. It is not. In Virginia, a misdemeanor conviction means a criminal record — permanent, public, and following you to every background check. Employers see it. Landlords see it. Professional licensing boards see it.</p>
                    <p style="margin-top: 1rem;">Standish Alexander has spent more than 30 years defending clients against misdemeanor charges in Richmond and throughout Central Virginia. As a former prosecutor, he knows exactly how these cases are prosecuted — and where they can be won. Do not accept a "minor" charge without fighting it.</p>
                </div>

                <!-- Misdemeanor Classes -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">Virginia Misdemeanor Classes</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Virginia law categorizes misdemeanors into four classes. Class 1 is by far the most commonly charged — and the most consequential.</p>

                    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--primary);">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 0.5rem; margin-bottom: 0.5rem;">
                                <h3 style="font-size: 1rem; margin: 0;">Class 1 Misdemeanor</h3>
                                <span style="font-size: 0.8rem; background: var(--primary); color: white; padding: 0.2rem 0.6rem; border-radius: 1rem;">Most Common</span>
                            </div>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 0.5rem;">Up to <strong>12 months in jail</strong> and a <strong>$2,500 fine</strong>.</p>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin: 0;">Includes: DUI first offense, reckless driving, simple assault, petty larceny, driving while suspended.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid var(--secondary);">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Class 2 Misdemeanor</h3>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 0.5rem;">Up to <strong>6 months in jail</strong> and a <strong>$1,000 fine</strong>.</p>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin: 0;">Less frequently charged but still results in a permanent criminal record.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid #6c757d;">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Class 3 Misdemeanor</h3>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 0.5rem;">Up to a <strong>$500 fine</strong>. No jail time.</p>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin: 0;">Still a criminal conviction that appears on background checks.</p>
                        </div>
                        <div class="card" style="padding: 1.5rem; border-left: 4px solid #6c757d;">
                            <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Class 4 Misdemeanor</h3>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 0.5rem;">Up to a <strong>$250 fine</strong>. No jail time.</p>
                            <p style="color: var(--text-light); font-size: 0.875rem; margin: 0;">The least severe class — but still a criminal record.</p>
                        </div>
                    </div>
                </div>

                <!-- Charges We Defend -->
                <div style="margin-bottom: 3rem; background: var(--gray-200); border-radius: 1rem; padding: 2rem;">
                    <h2 style="margin-bottom: 1.25rem;">Common Misdemeanor Charges We Defend</h2>
                    <div class="grid md-grid-cols-2 gap-3">
                        <?php
                        $charges = [
                            'DUI / DWI first offense',
                            'Reckless Driving',
                            'Simple Assault (&sect; 18.2-57)',
                            'Petty Larceny (under $1,000)',
                            'Trespassing',
                            'Disorderly Conduct',
                            'Driving While Suspended (&sect; 46.2-301)',
                            'Possession of marijuana or paraphernalia',
                            'Vandalism (under $1,000)',
                            'Obstruction of justice',
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

                <!-- Why Fight a Misdemeanor -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1rem;">Why Fighting a Misdemeanor Matters</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">The consequences of a misdemeanor conviction extend far beyond the fine or jail time. Here is what a conviction actually means for your life:</p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php
                        $reasons = [
                            ['Employment', 'A misdemeanor conviction appears on virtually all criminal background checks — permanently. Employers in healthcare, education, government, finance, and many other sectors regularly screen for any criminal record.'],
                            ['Professional licenses', 'Licensing boards for nursing, teaching, real estate, security clearances, law, and other professions consider criminal history. Even a single misdemeanor conviction can jeopardize your license application or renewal.'],
                            ['Future felony charges', 'Prior misdemeanor convictions can enhance sentencing in future criminal matters — turning what might be a lenient outcome into a mandatory minimum.'],
                            ['Immigration consequences', 'Some Virginia misdemeanors — particularly those involving moral turpitude, domestic violence, or drugs — can trigger deportation proceedings for non-citizens.'],
                            ['Virginia expungement limitations', 'Virginia does not allow expungement of criminal convictions. If you are convicted, the record stays. A dismissal or not-guilty verdict can be expunged — a conviction cannot.'],
                        ];
                        foreach ( $reasons as $r ) : ?>
                            <div style="display: flex; gap: 1rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2.5">
                                        <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                                    </svg>
                                </div>
                                <div>
                                    <strong style="display: block; margin-bottom: 0.25rem;"><?php echo esc_html( $r[0] ); ?></strong>
                                    <span style="font-size: 0.875rem; color: var(--text-light);"><?php echo esc_html( $r[1] ); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- GDC Process -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">How Misdemeanor Cases Work in Virginia</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Most misdemeanors in Virginia are handled in General District Court (GDC). Understanding the process is essential to building a strong defense from the start.</p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php
                        $process = [
                            ['Arrest or summons issued', 'You receive a criminal summons or are arrested and given a court date. The clock starts now — use the time before your court date wisely.'],
                            ['Arraignment', 'You appear before the court, the charge is formally read, and you enter a plea. In most cases, the initial appearance is also the arraignment.'],
                            ['Pre-trial preparation', 'Your attorney reviews the evidence, interviews witnesses, identifies constitutional issues, and considers negotiation options.'],
                            ['Trial — bench only in General District Court', 'Misdemeanor trials in GDC are bench trials only — there is no jury. The judge decides guilt or innocence. This is a critical difference from Circuit Court.'],
                            ['Conviction or acquittal', 'The judge renders a verdict. If acquitted, the charge can be expunged. If convicted, your rights to appeal immediately attach.'],
                            ['De novo appeal to Circuit Court', 'If convicted in GDC, you have an absolute right to a completely new trial in Circuit Court — a de novo appeal. In Circuit Court, you can request a jury trial. This is a powerful right that many defendants do not fully exercise.'],
                        ];
                        foreach ( $process as $i => $step ) : ?>
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

                <!-- Defense Strategy -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1rem;">Our Misdemeanor Defense Strategy</h2>
                    <div class="grid md-grid-cols-2 gap-4">
                        <?php
                        $strategies = [
                            ['Immediate case review', 'We review the charge, police report, and evidence before your first court date to understand the full picture.'],
                            ['Witness interviews &amp; evidence collection', 'We identify favorable witnesses and secure evidence before it becomes unavailable.'],
                            ['Constitutional challenges', 'Illegal stops, improper searches, and Miranda violations can result in evidence suppression.'],
                            ['Negotiation for reduction or dismissal', 'Not every case goes to trial — strategic negotiation often achieves better outcomes.'],
                            ['Aggressive GDC trial defense', 'When the facts are on your side, we try the case — directly challenging every element of the prosecution\'s case.'],
                            ['De novo Circuit Court appeal', 'If GDC goes against you, we immediately pursue a fresh trial in Circuit Court — with a jury if that serves your case.'],
                        ];
                        foreach ( $strategies as $s ) : ?>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 0.975rem; margin-bottom: 0.5rem;"><?php echo $s[0]; ?></h3>
                                <p style="color: var(--text-light); font-size: 0.875rem; margin: 0;"><?php echo esc_html( $s[1] ); ?></p>
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
                                Is a misdemeanor a big deal in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Yes — it is a criminal conviction that appears permanently on all background checks. Employers, landlords, licensing boards, and immigration officials all see it. Do not make the mistake of treating a misdemeanor as something that will go away on its own.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can a Virginia misdemeanor be expunged?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Only if the charge was dismissed or you were found not guilty. Convictions — even first-time, minor misdemeanors — cannot be expunged under current Virginia law. This is exactly why fighting the charge from the beginning is so critical.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Do I need a lawyer for a Virginia misdemeanor?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Strongly yes. The consequences are permanent and the procedures are easy to navigate incorrectly without legal experience. An attorney can identify defenses you would not find on your own, negotiate outcomes the prosecution would not offer you without counsel, and protect your record from a conviction that cannot be erased.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can a misdemeanor affect my professional license in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Yes. Licensing boards for nursing, law, teaching, real estate, security, and many other professions in Virginia require applicants to disclose criminal history and consider it in licensing decisions. A conviction — even for a first-time Class 1 misdemeanor — can result in denial, suspension, or revocation of a professional license.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                What is a de novo appeal in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">After a conviction in General District Court, you have the right to a completely new trial in Circuit Court — not just a review of the GDC decision. This is called a de novo ("from the beginning") appeal. In Circuit Court, you can request a jury trial if you choose. The GDC conviction carries no weight — it starts fresh. This is a powerful right and an important part of your defense options.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can a Virginia misdemeanor be reduced to an infraction?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Sometimes — through negotiation with the prosecutor. Reducing a criminal misdemeanor to a non-criminal traffic infraction or a civil penalty eliminates the criminal record entirely. This is one of the primary goals an experienced defense attorney pursues in negotiation. It is not always possible, but it is always worth pursuing.</p>
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
                        <a href="<?php echo esc_url( home_url( '/assault-battery-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg>
                            <span style="font-weight: 600;">Assault &amp; Battery</span>
                        </a>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white;">
                    <h3 style="color: white; margin-bottom: 0.75rem;">Even 'Minor' Charges Have Major Consequences &mdash; Call Now</h3>
                    <p style="opacity: 0.9; margin-bottom: 1.5rem;">Don't walk into General District Court without a defense strategy. Contact Alexander Law Office for a free consultation and find out exactly what your options are.</p>
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
                    <p>Speak with an experienced misdemeanor defense attorney today. Your first call is free and confidential.</p>
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
                            'Theft &amp; Larceny'      => '/theft-larceny-lawyer-richmond-va/',
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
                            'Former Commonwealth\'s Attorney',
                            '10.0 Superb AVVO rating',
                            'GDC &amp; Circuit Court experience',
                            'Direct access to your attorney',
                            'Free initial consultation',
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
