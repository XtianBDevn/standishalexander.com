<?php
/**
 * Template Name: Criminal Defense Lawyer Petersburg VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Criminal Defense Lawyer Petersburg VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Petersburg VA criminal defense attorney — DUI, assault, drug charges, felonies. Standish Alexander — 30+ years serving Petersburg area. Free consult. (804) 355-0016.">
<link rel="canonical" href="<?php echo esc_url( home_url( '/petersburg-va/' ) ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LegalService",
      "@id": "<?php echo esc_url( home_url( '/petersburg-va/#localbusiness' ) ); ?>",
      "name": "Alexander Law Office — Petersburg VA Criminal Defense",
      "url": "<?php echo esc_url( home_url( '/petersburg-va/' ) ); ?>",
      "telephone": "+18043550016",
      "priceRange": "$$",
      "image": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/og-image.jpg' ); ?>",
      "description": "Standish Alexander provides aggressive criminal defense for Petersburg, Virginia clients in Petersburg General District Court and Petersburg Circuit Court, and serves Colonial Heights and Dinwiddie County.",
      "areaServed": [
        {
          "@type": "City",
          "name": "Petersburg",
          "addressRegion": "VA"
        },
        {
          "@type": "City",
          "name": "Colonial Heights",
          "addressRegion": "VA"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dinwiddie County",
          "addressRegion": "VA"
        }
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "7605 Forest Avenue, Suite 301",
        "addressLocality": "Richmond",
        "addressRegion": "VA",
        "postalCode": "23229",
        "addressCountry": "US"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "09:00",
          "closes": "17:00"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "<?php echo esc_url( home_url( '/petersburg-va/#faq' ) ); ?>",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Petersburg General District Court located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Petersburg General District Court is located at 150 N Sycamore Street, Petersburg, VA 23803. It handles all misdemeanor, traffic, and preliminary felony matters arising within Petersburg city limits. The Petersburg Circuit Court is located at 7 Courthouse Avenue."
          }
        },
        {
          "@type": "Question",
          "name": "Does Alexander Law Office represent clients in Petersburg?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Standish Alexander has served clients in Petersburg and the surrounding Petersburg area — including Colonial Heights and Dinwiddie County — for over 30 years. He regularly appears in Petersburg General District Court, Petersburg Circuit Court, and the courts of the nearby independent cities and counties."
          }
        },
        {
          "@type": "Question",
          "name": "What are the most common criminal charges in Petersburg?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Petersburg courts handle a significant volume of drug possession and distribution charges, DUI cases (particularly from I-95 and Crater Road enforcement), assault and battery, and theft and larceny matters. Petersburg Circuit Court also handles serious felony charges including drug distribution, robbery, and violent crimes. The city's proximity to Fort Gregg-Adams also means that some clients are military personnel or veterans with particular concerns about how a conviction might affect their service or benefits."
          }
        },
        {
          "@type": "Question",
          "name": "Are Petersburg courts strict on drug charges?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Petersburg Circuit Court handles serious drug distribution cases aggressively, and the Petersburg Commonwealth's Attorney's Office prosecutes drug offenses with significant resources. Simple possession charges in General District Court may have more options for first-time offenders, including first-offender dispositions under Virginia Code. Drug distribution or intent-to-distribute charges in Circuit Court require serious, experienced felony defense counsel."
          }
        },
        {
          "@type": "Question",
          "name": "Does Standish Alexander handle cases in Dinwiddie County and Colonial Heights?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Alexander Law Office serves clients throughout the greater Petersburg area, including Colonial Heights (an independent city south of Petersburg with its own court system) and Dinwiddie County (which borders Petersburg to the south and west). Mr. Alexander is familiar with the courts in all of these jurisdictions and provides comprehensive representation throughout the area."
          }
        }
      ]
    }
  ]
}
</script>
<?php }, 1 );

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="hero-badge">Petersburg, Virginia</span>
            <h1>Criminal Defense Lawyer Petersburg, Virginia</h1>
            <p class="page-hero-subtitle">Petersburg is an independent city with its own distinct court system, and its dockets carry a significant volume of serious felony cases. When the stakes are this high, experience and local knowledge are not optional.</p>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Main Content + Sidebar -->
<section class="section">
    <div class="container">
        <div class="single-post-grid">

            <!-- Main Content -->
            <main>

                <!-- Intro -->
                <div style="margin-bottom: 2.5rem;">
                    <p style="font-size: 1.125rem; line-height: 1.8;">Petersburg sits approximately 25 miles south of Richmond along I-95, and like Richmond, it is an independent city — fully separate from any surrounding county, with its own complete court system. That distinction matters in ways that go beyond geography: Petersburg has its own judges, its own Commonwealth's Attorney's Office, its own police department, and its own procedural culture. An attorney who practices primarily in the Richmond suburbs will be working at a disadvantage in Petersburg's courts without significant experience in this specific jurisdiction.</p>
                    <p style="line-height: 1.8; margin-top: 1rem;">Petersburg courts handle a higher proportion of serious felony matters — drug distribution, assault, robbery, and violent offenses — than most suburban county courts in the region. This is not a place to appear unprepared. Standish Alexander has served Petersburg clients for over 30 years, appearing regularly in Petersburg General District Court and Petersburg Circuit Court, and he knows the prosecutors, the judicial temperament, and the procedural expectations of these specific courtrooms.</p>
                    <p style="line-height: 1.8; margin-top: 1rem;">Alexander Law Office also serves clients in Colonial Heights — an independent city immediately adjacent to Petersburg — and Dinwiddie County, which borders Petersburg to the south and west. If you face charges anywhere in the greater Petersburg area, we can represent you.</p>
                </div>

                <!-- Petersburg Courts -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Petersburg Court System</span>
                    <h2 style="margin-top: 0.75rem;">The Petersburg Courts</h2>
                    <p style="line-height: 1.8;">Because Petersburg is an independent city, its court system is entirely self-contained — separate from Dinwiddie County, Colonial Heights, or any other nearby jurisdiction.</p>

                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Petersburg General District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>150 N Sycamore Street</strong><br>Petersburg, VA 23803</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">All misdemeanor charges, traffic violations (including DUI and reckless driving), and preliminary hearings for felony matters arising within Petersburg city limits are heard here. If a felony probable cause determination is made, the case moves to Petersburg Circuit Court. Misdemeanor convictions may be appealed de novo to Circuit Court within 10 days.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Petersburg Circuit Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>7 Courthouse Avenue</strong><br>Petersburg, VA 23803</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Petersburg Circuit Court handles all felony trials and jury trials within the city. This court sees a significant volume of serious felony matters — drug distribution, robbery, and violent crimes among them. Experienced, prepared felony defense counsel who has appeared in this courtroom is essential. The stakes of a felony conviction are permanent: incarceration, loss of civil rights, and a record that follows you for life.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Colonial Heights &amp; Dinwiddie County Courts</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;">Greater Petersburg Area</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Colonial Heights is an independent city immediately south of Petersburg with its own General District and Circuit courts. Dinwiddie County, which borders Petersburg to the south, has courts in Dinwiddie. Alexander Law Office serves clients in all of these jurisdictions — you do not need a separate attorney for each city or county in the greater Petersburg area.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Petersburg Commonwealth's Attorney</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;">Petersburg, VA 23803</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">The Petersburg Commonwealth's Attorney's Office prosecutes all criminal matters in Petersburg city courts. This office handles a substantial volume of serious felony charges and has well-developed prosecution approaches for the types of cases most commonly charged in Petersburg. Standish Alexander's decades of Petersburg court practice give him detailed insight into how this office operates and how to challenge its cases most effectively.</p>
                        </div>
                    </div>
                </div>

                <!-- Enforcement and Case Types -->
                <div class="card" style="padding: 2rem; margin-bottom: 2.5rem; background: var(--muted);">
                    <h3 style="color: var(--primary);">Petersburg-Area Enforcement and Case Profile</h3>
                    <p style="line-height: 1.8;">Petersburg's court docket reflects the unique character of the city and its enforcement landscape. Key factors that define criminal cases in Petersburg include:</p>
                    <ul style="line-height: 2; margin-top: 0.75rem; padding-left: 1.25rem; color: var(--text-light);">
                        <li><strong style="color: var(--foreground);">Interstate 95</strong> — runs through Petersburg; a major DUI enforcement corridor with both Petersburg Police Department and Virginia State Police patrols</li>
                        <li><strong style="color: var(--foreground);">US-460 (Crater Road)</strong> — primary east-west arterial through Petersburg; active enforcement for DUI and traffic violations</li>
                        <li><strong style="color: var(--foreground);">US-1 (Jefferson Davis Highway)</strong> — north-south through the city; consistent patrol presence</li>
                        <li><strong style="color: var(--foreground);">Drug enforcement</strong> — Petersburg courts handle a significant volume of drug possession and distribution cases; simple possession to felony-level distribution charges all appear on Petersburg dockets</li>
                        <li><strong style="color: var(--foreground);">Fort Gregg-Adams (formerly Fort Lee)</strong> — the nearby military base means some Petersburg-area clients are active-duty military or veterans, adding potential military consequences to civilian criminal charges</li>
                        <li><strong style="color: var(--foreground);">Serious felony matters</strong> — robbery, assault and battery on law enforcement, and other serious charges appear in Petersburg Circuit Court at rates higher than in the surrounding suburban counties</li>
                    </ul>
                </div>

                <!-- Practice Areas -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">What We Handle</span>
                    <h2 style="margin-top: 0.75rem;">Practice Areas Served in Petersburg</h2>
                    <p style="line-height: 1.8;">Alexander Law Office handles the full range of criminal and traffic matters in Petersburg city courts, Colonial Heights, and Dinwiddie County. Every case receives direct, personal attention from Standish Alexander.</p>

                    <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-4" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( home_url( '/practice-areas/dui/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">DUI Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">DUI arrests on I-95, Crater Road, and US-1 in Petersburg — challenging every element from the legality of the stop to the reliability of the breath test.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/reckless-driving/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Reckless Driving</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Reckless driving is a criminal misdemeanor in Virginia — not a traffic ticket. Petersburg reckless driving charges require a real defense, not just a fine payment.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/traffic-violations/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Traffic Tickets</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Contesting Petersburg and Colonial Heights traffic citations to protect your license, driving record, and insurance costs.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/criminal-defense/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Criminal Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Comprehensive misdemeanor and felony defense in Petersburg GDC and Circuit Court — from arraignment through trial or plea resolution.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/expungements/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Expungement</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petitioning Petersburg Circuit Court for expungement of eligible charges under Virginia's expanded expungement law — a fresh start for qualifying clients.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/drug-possession/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Drug Possession</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">From simple possession to distribution-level charges — Petersburg's active drug enforcement requires an experienced defense attorney who knows these courts and these prosecutors.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/assault-battery/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Assault &amp; Battery</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Defense of assault, battery, domestic assault, and assault on law enforcement charges in Petersburg courts — charges that frequently escalate to felony level.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/theft-larceny/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Theft &amp; Larceny</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Representing Petersburg clients on petit larceny, grand larceny, and shoplifting charges — working toward the best possible outcome for your situation.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/license-suspension/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">License Suspension</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Helping Petersburg-area clients petition for restricted driving privileges and work through the DMV reinstatement process.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/felony/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Felony Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petersburg Circuit Court handles serious felony matters. The consequences of conviction are irreversible — experienced trial counsel is not a luxury here, it is a necessity.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/misdemeanor/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Misdemeanor Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petersburg GDC misdemeanor convictions create permanent records. Thorough representation begins at the first court appearance — not when things go wrong at trial.</p>
                        </a>
                    </div>
                </div>

                <!-- Why Alexander Law in Petersburg -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Local Expertise</span>
                    <h2 style="margin-top: 0.75rem;">Why Petersburg Demands Experienced Local Counsel</h2>
                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">An Independent City With Its Own System</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petersburg is legally independent from Dinwiddie County and all surrounding jurisdictions. Its courts, its prosecutors, and its procedural culture are entirely its own. Attorneys who seldom practice here are navigating unfamiliar territory — and in serious cases, that unfamiliarity costs clients dearly.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Serious Felony Case Experience</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petersburg Circuit Court handles a higher concentration of serious felony matters than most suburban Virginia courts. Representing clients effectively here requires trial experience, an understanding of Petersburg-specific evidentiary issues, and credibility before the bench.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Former Prosecutor Advantage</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Having served as a prosecutor before entering private defense practice, Standish Alexander brings insight into how Commonwealth's Attorneys offices throughout the region — including Petersburg — structure their cases and make strategic decisions. That perspective is a real advantage for defense clients.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Regional Coverage Including Fort Gregg-Adams</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">The proximity of Fort Gregg-Adams means that some Petersburg-area clients face dual civilian and potential military consequences from criminal charges. Mr. Alexander understands the stakes involved for military personnel and veterans and works to protect all aspects of his clients' interests.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div style="margin-bottom: 2.5rem;" id="faq">
                    <span class="hero-badge">Common Questions</span>
                    <h2 style="margin-top: 0.75rem;">Frequently Asked Questions — Petersburg Courts</h2>

                    <div style="margin-top: 1.5rem;">
                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Where is Petersburg General District Court located?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Petersburg General District Court is at <strong>150 N Sycamore Street, Petersburg, VA 23803</strong>. It handles all traffic offenses, misdemeanors, and preliminary felony hearings arising within Petersburg's city limits. The Petersburg Circuit Court is separately located at <strong>7 Courthouse Avenue</strong>, where all felony trials and appeals are heard. Both courts are in the downtown Petersburg area.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Does Alexander Law Office represent clients in Petersburg?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes. Standish Alexander has served Petersburg clients for over 30 years. He regularly appears in both Petersburg General District Court and Petersburg Circuit Court. His practice extends throughout the greater Petersburg area, including Colonial Heights and Dinwiddie County. If you or a family member faces charges anywhere in or around Petersburg, Alexander Law Office can provide direct, experienced representation.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">What are the most common criminal charges in Petersburg?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Petersburg courts handle a significant volume of drug possession and distribution charges, DUI cases arising from I-95 and Crater Road enforcement, assault and battery, theft and larceny, and serious felony matters including drug distribution and violent crimes. Compared to suburban county courts in the Richmond metro, Petersburg's Circuit Court docket carries a higher proportion of serious felony charges that require experienced, trial-ready counsel.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Are Petersburg courts strict on drug charges?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">For felony-level drug charges — particularly distribution or possession with intent to distribute — Petersburg Circuit Court and the Petersburg Commonwealth's Attorney's Office pursue aggressive prosecution. The consequences of a distribution conviction include significant mandatory minimum sentences under Virginia law, and there is limited room for informal resolution on the most serious charges. Simple possession in General District Court offers more potential options for first-time offenders, including Virginia's first-offender diversion under Code § 18.2-251. The distinction between possession and distribution — and whether the evidence actually supports the higher charge — is often the most critical question in these cases. Mr. Alexander has the experience to evaluate that question thoroughly.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Does Standish Alexander handle cases in Dinwiddie County and Colonial Heights?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes. Alexander Law Office serves clients in all courts in the greater Petersburg area, including <strong>Colonial Heights</strong> — an independent city immediately south of Petersburg with its own General District and Circuit courts — and <strong>Dinwiddie County</strong>, which has its own court system in the county seat. If your charge occurred anywhere in the Petersburg area, including these surrounding jurisdictions, Mr. Alexander can represent you without you needing to find a different attorney for a different city or county.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Also Serve -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Service Area</span>
                    <h2 style="margin-top: 0.75rem;">Areas We Also Serve</h2>
                    <p style="line-height: 1.8;">Alexander Law Office serves clients throughout Central Virginia. If your charge occurred north of Petersburg, we handle cases in these surrounding jurisdictions:</p>
                    <div class="grid md-grid-cols-2 lg-grid-cols-4 gap-4" style="margin-top: 1.25rem;">
                        <a href="<?php echo esc_url( home_url( '/richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Richmond, VA</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Richmond City Courts</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/henrico-county/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Henrico County</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Henrico GDC &amp; Circuit Court</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/chesterfield-county/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Chesterfield County</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Chesterfield GDC &amp; Circuit Court</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/hanover-county/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Hanover County</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Hanover GDC &amp; Circuit Court</span>
                        </a>
                    </div>
                </div>

            </main>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <div class="sidebar-widget widget-cta">
                    <h3>Free Consultation</h3>
                    <p>Speak with Standish Alexander about your Petersburg case today.</p>
                    <a href="tel:8043550016" class="widget-phone">(804) 355-0016</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width:100%;margin-top:1rem;text-align:center;">Contact Us</a>
                </div>

                <div class="sidebar-widget">
                    <h3>Practice Areas</h3>
                    <ul class="category-list">
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/dui/' ) ); ?>">DUI Defense</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/reckless-driving/' ) ); ?>">Reckless Driving</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/traffic-violations/' ) ); ?>">Traffic Violations</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/criminal-defense/' ) ); ?>">Criminal Defense</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/expungements/' ) ); ?>">Expungement</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/drug-possession/' ) ); ?>">Drug Possession</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/assault-battery/' ) ); ?>">Assault &amp; Battery</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/theft-larceny/' ) ); ?>">Theft &amp; Larceny</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/license-suspension/' ) ); ?>">License Suspension</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/felony/' ) ); ?>">Felony Defense</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/practice-areas/misdemeanor/' ) ); ?>">Misdemeanor Defense</a></li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Why Choose Us</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            Former Prosecutor
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            30+ Years Serving Petersburg Area
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            10.0 AVVO Rating
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            Felony Trial Experience
                        </li>
                        <li style="padding: 0.6rem 0; display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            Free Consultations
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Petersburg Area Courts</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; color: var(--text-light);">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Petersburg General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Petersburg Circuit Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Colonial Heights Courts</li>
                        <li style="padding: 0.5rem 0;">Dinwiddie County Courts</li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white;">Facing Charges in Petersburg? Call for a Free Consultation Today.</h2>
        <p style="max-width: 650px; margin: 0 auto 2rem; opacity: 0.9;">Petersburg courts handle serious criminal cases — and serious cases require serious representation. Standish Alexander has practiced in Petersburg courts for over 30 years. Call now for a free, confidential consultation.</p>
        <div class="flex justify-center gap-4" style="flex-wrap: wrap;">
            <a href="tel:8043550016" class="btn btn-secondary btn-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                (804) 355-0016
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Free Consultation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
