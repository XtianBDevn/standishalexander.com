<?php
/**
 * Template Name: Felony Defense Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Felony Defense Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Facing felony charges in Richmond? Standish Alexander — former Commonwealth's Attorney, 30+ years felony defense. Your freedom is at stake. (804) 355-0016.">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Alexander Law Office",
  "description": "Felony defense lawyer in Richmond, VA. Former Commonwealth's Attorney with 30+ years defending clients against felony charges in Circuit Courts throughout Central Virginia.",
  "url": "https://standishalexander.com/felony-defense-lawyer-richmond-va/",
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
    "name": "Felony Defense Services",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Drug Trafficking Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Robbery Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Malicious Wounding Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Grand Larceny Defense" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Felony DUI Defense" } }
    ]
  },
  "knowsAbout": [
    "Virginia felony classifications", "Circuit Court felony trials", "grand jury indictment", "preliminary hearing", "Virginia Sentencing Guidelines", "post-conviction relief"
  ],
  "founder": {
    "@type": "Person",
    "name": "H. Standish Alexander III",
    "jobTitle": "Criminal Defense Attorney",
    "description": "Former Assistant Commonwealth's Attorney with 30+ years of felony defense experience in Richmond and Central Virginia Circuit Courts."
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
            <span class="hero-badge">Felony Defense</span>
            <h1>Felony Defense Lawyer Richmond VA</h1>
            <p class="page-hero-subtitle">A felony conviction in Virginia is life-altering. Prison time. Loss of rights. Permanent record. When the stakes are this high, you need an attorney who has been fighting felony cases in Virginia courts for decades.</p>
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
                    <p>A felony conviction in Virginia is life-altering. Prison time. Loss of voting rights. Loss of gun rights. Inability to hold certain jobs or professional licenses. Permanent deportation risk if you're not a citizen. When the stakes are this high, you need an attorney who has been inside a courtroom fighting felony cases for decades.</p>
                    <p style="margin-top: 1rem;">Standish Alexander is a former Commonwealth's Attorney who has spent more than 30 years on both sides of Virginia's criminal courts. He understands how felony prosecutions are built — and exactly where they can be challenged and dismantled.</p>
                </div>

                <!-- Felony Classifications -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">Virginia Felony Classifications — What You're Facing</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Virginia organizes felonies into six classes, with Class 1 being the most severe. Understanding your charge class is the first step in understanding your exposure.</p>

                    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                        <?php
                        $classes = [
                            ['Class 1 Felony', 'Life in prison or the death penalty.', 'Capital murder — the most serious charge under Virginia law.', 'var(--primary)'],
                            ['Class 2 Felony', '20 years to life in prison.', 'First-degree murder, aggravated sexual battery.', 'var(--primary)'],
                            ['Class 3 Felony', '5 to 20 years in prison.', 'Malicious wounding, certain drug offenses.', '#6c757d'],
                            ['Class 4 Felony', '2 to 10 years in prison.', 'Robbery, breaking and entering with intent.', '#6c757d'],
                            ['Class 5 Felony', '1 to 10 years in prison, or up to 12 months jail.', 'Grand larceny, drug possession (Schedule I/II), embezzlement of $1,000+.', 'var(--secondary)'],
                            ['Class 6 Felony', '1 to 5 years in prison, or up to 12 months jail.', 'The most common felony class — many first-time offenders face this charge.', 'var(--secondary)'],
                        ];
                        foreach ( $classes as $c ) : ?>
                            <div class="card" style="padding: 1.25rem; border-left: 4px solid <?php echo $c[3]; ?>; display: flex; gap: 1.5rem; align-items: flex-start;">
                                <div style="flex-shrink: 0;">
                                    <div style="font-weight: 700; font-size: 0.925rem;"><?php echo esc_html( $c[0] ); ?></div>
                                    <div style="font-size: 0.8rem; color: var(--text-light); margin-top: 0.2rem;"><?php echo esc_html( $c[1] ); ?></div>
                                </div>
                                <div style="font-size: 0.875rem; color: var(--text-light);"><?php echo esc_html( $c[2] ); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Collateral Consequences -->
                <div style="margin-bottom: 3rem; background: var(--gray-200); border-radius: 1rem; padding: 2rem;">
                    <h2 style="margin-bottom: 1rem;">Beyond Prison: Collateral Consequences of a Felony Conviction</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">The sentence is only part of the story. A felony conviction in Virginia carries consequences that follow you long after you've served your time.</p>
                    <div class="grid md-grid-cols-2 gap-3">
                        <?php
                        $consequences = [
                            'Loss of the right to vote (restored upon completing all terms of sentence in Virginia)',
                            'Loss of firearm rights — permanent under federal law, regardless of Virginia restoration',
                            'Loss of professional licenses: law, medicine, nursing, teaching, accounting, and others',
                            'Ineligibility for many government jobs and federal contracts',
                            'Immigration consequences — deportation risk for non-citizens',
                            'Housing discrimination — many landlords reject applicants with felony records',
                            'Loss of eligibility for federal student financial aid for drug convictions',
                            'Permanent visibility on criminal background checks',
                        ];
                        foreach ( $consequences as $con ) : ?>
                            <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#dc3545" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                                <span style="font-size: 0.875rem;"><?php echo esc_html( $con ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Charges We Handle -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.25rem;">Felony Charges We Defend</h2>
                    <div class="grid md-grid-cols-2 gap-3">
                        <?php
                        $charges = [
                            'Drug trafficking and distribution',
                            'Robbery and armed robbery',
                            'Malicious wounding',
                            'Grand larceny',
                            'Breaking and entering / Burglary',
                            'Identity theft',
                            'Felony DUI (3rd offense)',
                            'Hit and run resulting in injury',
                            'Fraud and embezzlement',
                        ];
                        foreach ( $charges as $charge ) : ?>
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <span style="font-size: 0.9rem;"><?php echo esc_html( $charge ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Virginia Felony Process -->
                <div style="margin-bottom: 3rem;">
                    <h2 style="margin-bottom: 1.5rem;">How a Virginia Felony Case Moves Through the Courts</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Understanding the process helps you understand where the opportunities are to fight your charges, challenge evidence, and protect your rights.</p>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php
                        $process = [
                            ['Arrest and detention', 'You are taken into custody and booked. The clock on your rights starts now — what you say can and will be used against you.'],
                            ['Bail hearing', 'A judge determines whether you will be held or released pending trial, and under what conditions.'],
                            ['Preliminary hearing in General District Court', 'A critical early stage where the prosecution must show probable cause. This is an opportunity to challenge evidence and observe the prosecution\'s case before trial.'],
                            ['Grand jury indictment', 'A grand jury reviews evidence in private. In Virginia, felony charges generally require a grand jury indictment to proceed in Circuit Court.'],
                            ['Circuit Court arraignment', 'You enter a formal plea. Pre-trial strategy is already well underway at this stage.'],
                            ['Pre-trial motions', 'Motions to suppress illegally obtained evidence, dismiss charges, or compel discovery — often the most powerful phase of the defense.'],
                            ['Jury or bench trial', 'You have the right to a jury trial for felony charges in Virginia Circuit Court. Strategic selection of jury vs. bench trial matters enormously.'],
                            ['Sentencing (Virginia Sentencing Guidelines)', 'If convicted, Virginia Sentencing Guidelines provide a recommended range. Mitigation arguments here can make a significant difference in the outcome.'],
                            ['Appeals', 'A conviction is not necessarily final. Post-conviction relief, appeals, and other remedies may still be available.'],
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
                    <h2 style="margin-bottom: 1rem;">Our Felony Defense Strategy</h2>
                    <p style="color: var(--text-light); margin-bottom: 1.5rem;">Effective felony defense is not a formula — it is built from the specific facts of your case. But certain principles guide every case we take.</p>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <?php
                        $strategies = [
                            ['Constitutional challenges from day one', 'If the police violated your Fourth Amendment rights during the search, stop, or arrest — that evidence may be suppressed. Suppression of key evidence can collapse a prosecution.'],
                            ['Evidence suppression', 'Illegal searches, Miranda violations, and unlawful seizures are all grounds to exclude evidence. We look for these issues in every case.'],
                            ['Witness credibility attacks', 'Prosecution witnesses — including co-defendants, informants, and police — have their own credibility problems. We find them and use them.'],
                            ['Expert testimony', 'Forensic evidence, mental health evaluations, accident reconstruction, and other expert opinions can challenge the prosecution\'s narrative or support your defense.'],
                            ['Sentencing guideline mitigation', 'When a trial is not the path, aggressive mitigation at sentencing — through guidelines departure arguments, character evidence, and rehabilitation — can substantially reduce the sentence recommended by the court.'],
                            ['Post-conviction relief', 'A conviction is not always the end of the road. Appeals, writs of habeas corpus, and motions to vacate may be available when legal errors or constitutional violations occurred.'],
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
                                What's the difference between a Class 5 and Class 6 felony in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">A Class 5 felony carries a sentence of 1 to 10 years in prison (or up to 12 months in jail as a discretionary alternative), while a Class 6 felony carries 1 to 5 years (or up to 12 months in jail). Class 5 includes offenses like grand larceny and Schedule I/II drug possession. Class 6 is the most common felony class in Virginia.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can a felony be reduced to a misdemeanor in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">In some cases, yes. Plea negotiations can result in a reduction to a lesser charge. In theft cases, successfully disputing value can reduce a grand larceny felony to a petty larceny misdemeanor. Some first-offender programs also allow first-time drug offenders to avoid a felony conviction. Every case is different.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Do I lose my right to vote with a felony in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Yes — while serving your sentence. In Virginia, the right to vote is automatically restored upon completing all terms of your sentence, including probation and parole. This is different from firearm rights, which remain permanently affected under federal law regardless of Virginia restoration.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                How is a Virginia felony trial different from a misdemeanor trial?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Felony cases are tried in Circuit Court (not General District Court). They typically require a grand jury indictment, and you have the constitutional right to a jury trial. Misdemeanors are bench-trial only in GDC. The procedural stakes — and the complexity — are significantly higher for felonies.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                What is the preliminary hearing in a Virginia felony case?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">The preliminary hearing is held in General District Court before the case moves to Circuit Court. The prosecution must show probable cause that a crime was committed and that you committed it. This is a critical strategic opportunity — we hear prosecution witnesses under oath, identify weaknesses in the evidence, and sometimes get charges reduced or dismissed entirely.</p>
                        </details>

                        <details class="card" style="padding: 1.5rem;">
                            <summary style="font-weight: 600; cursor: pointer; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                                Can I avoid prison for a first-time felony in Virginia?
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;"><path d="M6 9l6 6 6-6"/></svg>
                            </summary>
                            <p style="margin-top: 1rem; color: var(--text-light); font-size: 0.9rem;">Sometimes — it depends heavily on the charge, your record, and the facts. First-offender programs exist for some drug charges. Suspended sentences, probation, and mitigating circumstances can also result in non-incarcerated outcomes. There are no guarantees, but there are always options worth exploring with an experienced attorney.</p>
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
                        <a href="<?php echo esc_url( home_url( '/drug-possession-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
                            <span style="font-weight: 600;">Drug Possession</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/assault-battery-lawyer-richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg>
                            <span style="font-weight: 600;">Assault &amp; Battery</span>
                        </a>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white;">
                    <h3 style="color: white; margin-bottom: 0.75rem;">Facing a Felony? Don't Wait &mdash; Call Now</h3>
                    <p style="opacity: 0.9; margin-bottom: 1.5rem;">The earlier you involve an experienced felony defense attorney, the more options you have. Call Alexander Law Office for a free, confidential consultation — and start building your defense today.</p>
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
                    <p>Speak directly with an experienced felony defense attorney. Your first call is free and completely confidential.</p>
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
                            'Misdemeanor Defense'      => '/misdemeanor-defense-lawyer-richmond-va/',
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
                            '30+ years of felony defense experience',
                            'Former Commonwealth\'s Attorney — knows how the prosecution thinks',
                            '10.0 Superb AVVO rating',
                            'Circuit Court experience throughout Central Virginia',
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
