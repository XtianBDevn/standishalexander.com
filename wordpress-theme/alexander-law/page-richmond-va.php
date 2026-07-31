<?php
/**
 * Template Name: Location - Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Criminal Defense Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Richmond VA criminal defense attorney with 30+ years in Richmond courts. DUI, reckless driving, felonies &amp; more. Former prosecutor. Free consult. (804) 355-0016.">
<link rel="canonical" href="<?php echo esc_url( home_url( '/richmond-va/' ) ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LegalService",
      "@id": "<?php echo esc_url( home_url( '/richmond-va/#localbusiness' ) ); ?>",
      "name": "Alexander Law Office — Richmond VA Criminal Defense",
      "url": "<?php echo esc_url( home_url( '/richmond-va/' ) ); ?>",
      "telephone": "+18043550016",
      "priceRange": "$$",
      "image": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/og-image.jpg' ); ?>",
      "description": "Standish Alexander provides aggressive criminal defense representation in Richmond, Virginia courts including Richmond General District Court and Richmond Circuit Court.",
      "areaServed": {
        "@type": "City",
        "name": "Richmond",
        "addressRegion": "VA"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "7605 Forest Avenue, Suite 301",
        "addressLocality": "Richmond",
        "addressRegion": "VA",
        "postalCode": "23229",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 37.5407,
        "longitude": -77.4360
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "09:00",
          "closes": "17:00"
        }
      ],
      "hasMap": "https://maps.google.com/?q=Richmond+City+Circuit+Court+Richmond+VA"
    },
    {
      "@type": "FAQPage",
      "@id": "<?php echo esc_url( home_url( '/richmond-va/#faq' ) ); ?>",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Richmond General District Court located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Richmond General District Court is located at 400 N 9th Street in the John Marshall Courts Building in downtown Richmond, Virginia. It handles misdemeanors, traffic violations, and preliminary hearings for felony charges."
          }
        },
        {
          "@type": "Question",
          "name": "What criminal charges are handled in Richmond Circuit Court versus General District Court?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Richmond General District Court at 400 N 9th Street handles Class 1 and Class 2 misdemeanors, traffic infractions, and preliminary hearings where judges decide whether felony charges should proceed to trial. Richmond Circuit Court at 900 E Broad Street handles all felony matters, jury trials, and appeals from the General District Court. If you are convicted in General District Court, you have the right to appeal de novo to Circuit Court within 10 days."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a Richmond DUI case typically take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most Richmond DUI cases require two to four court appearances spread over several months. The first appearance is typically an arraignment or continuance for your attorney to gather evidence. Subsequent dates may include motions hearings and ultimately a trial or plea. Complex cases involving accidents or contested field sobriety tests can take longer."
          }
        },
        {
          "@type": "Question",
          "name": "Are Richmond courts strict on DUI and reckless driving charges?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Outcomes in Richmond courts vary considerably by judge and by the specific facts of each case. Some Richmond judges apply mandatory minimums strictly while others are open to alternative dispositions for first-time offenders. An attorney with decades of Richmond courtroom experience understands each judge's tendencies and how the Richmond Commonwealth's Attorney's Office approaches these charges — knowledge that can meaningfully affect your outcome."
          }
        },
        {
          "@type": "Question",
          "name": "Does Standish Alexander appear regularly in Richmond courts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Standish Alexander has practiced criminal defense in Richmond City courts for more than 30 years. He regularly appears in Richmond General District Court, Richmond Circuit Court, and the Richmond Juvenile and Domestic Relations District Court. His long-standing presence in these courtrooms means he knows the judges, the prosecutors, and the procedures firsthand."
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
            <span class="hero-badge">Richmond, Virginia</span>
            <h1>Criminal Defense Lawyer Richmond, Virginia</h1>
            <p class="page-hero-subtitle">Over 30 years defending Richmond clients in Richmond City courts. Former prosecutor. Aggressive representation for DUI, reckless driving, felonies, and all criminal matters.</p>
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
                    <p style="font-size: 1.125rem; line-height: 1.8;">Richmond is Virginia's capital city and an independent city — it is not part of any surrounding county. That distinction matters enormously in criminal law: charges occurring within Richmond city limits are prosecuted exclusively through Richmond's own court system, completely separate from Henrico, Chesterfield, or any other jurisdiction. If you or a family member has been arrested or charged with a crime in the City of Richmond, you need an attorney who has spent decades inside these specific courtrooms, working with these specific prosecutors, and arguing before these specific judges.</p>
                    <p style="line-height: 1.8; margin-top: 1rem;">Standish Alexander has defended Richmond clients since the early 1990s. Before entering private practice, he served as an Assistant Commonwealth's Attorney — prosecuting cases in the very courts where he now defends clients. That inside perspective gives his clients a decisive advantage: he knows how the Richmond Commonwealth's Attorney's Office builds its cases, where the evidence is strong, and where it can be challenged.</p>
                </div>

                <!-- Richmond Courts -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Richmond Court System</span>
                    <h2 style="margin-top: 0.75rem;">The Richmond City Courts</h2>
                    <p style="line-height: 1.8;">Because Richmond is an independent city, it maintains a complete, self-contained court system. Understanding which court handles your charge is the first step to building an effective defense.</p>

                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Richmond General District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>400 N 9th Street</strong><br>John Marshall Courts Building<br>Richmond, VA 23219</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">This court handles all Class 1 and Class 2 misdemeanors, traffic violations including DUI and reckless driving, and preliminary hearings for felony charges. Most Richmond criminal cases begin here. Verdicts from this court can be appealed de novo to the Circuit Court within 10 days of sentencing.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Richmond Circuit Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>900 E Broad Street</strong><br>Richmond City Circuit Court<br>Richmond, VA 23219</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">All felony trials and jury trials take place in the Richmond Circuit Court. This court also hears appeals from the General District Court, where the case is tried entirely fresh before a new judge. Felony convictions here carry significant prison time — experienced representation is not optional.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Richmond Juvenile &amp; Domestic Relations Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>400 N 9th Street</strong><br>John Marshall Courts Building<br>Richmond, VA 23219</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">This court handles family law criminal matters including domestic assault, child abuse allegations, protective orders, and criminal charges involving juvenile defendants. Cases here require careful handling given the overlap between criminal and family law consequences.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Richmond Commonwealth's Attorney</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>900 E Broad Street, Suite 1001</strong><br>Richmond, VA 23219</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">The Richmond Commonwealth's Attorney's Office prosecutes all criminal matters in Richmond city courts. As a former prosecutor himself, Standish Alexander has extensive knowledge of how this office evaluates evidence, makes charging decisions, and approaches plea negotiations.</p>
                        </div>
                    </div>
                </div>

                <!-- Where Traffic Stops Happen -->
                <div class="card" style="padding: 2rem; margin-bottom: 2.5rem; background: var(--muted);">
                    <h3 style="color: var(--primary);">Major Richmond Traffic Enforcement Corridors</h3>
                    <p style="line-height: 1.8;">Richmond police officers and Virginia State Police troopers actively patrol Richmond's major roadways for DUI, reckless driving, and speeding violations. High-enforcement areas include:</p>
                    <ul style="line-height: 2; margin-top: 0.75rem; padding-left: 1.25rem; color: var(--text-light);">
                        <li><strong style="color: var(--foreground);">I-95</strong> — crosses Richmond north to south; heavily patrolled for DUI and excessive speed</li>
                        <li><strong style="color: var(--foreground);">I-64</strong> — east-west corridor through the city; frequent DUI checkpoints near downtown exits</li>
                        <li><strong style="color: var(--foreground);">US-60 / Broad Street</strong> — runs through the heart of the city; high-volume traffic with frequent enforcement</li>
                        <li><strong style="color: var(--foreground);">Midlothian Turnpike</strong> — southern Richmond commercial corridor; speed and DUI enforcement</li>
                        <li><strong style="color: var(--foreground);">Hull Street Road</strong> — southwest corridor with regular patrol activity</li>
                    </ul>
                    <p style="margin-top: 1rem; line-height: 1.8;">If you were stopped on any of these roads and charged with DUI, reckless driving, or another traffic offense, the charge will be heard in Richmond General District Court — and we know that court well.</p>
                </div>

                <!-- Practice Areas -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">What We Handle</span>
                    <h2 style="margin-top: 0.75rem;">Practice Areas Served in Richmond</h2>
                    <p style="line-height: 1.8;">Alexander Law Office handles the full range of criminal and traffic matters in Richmond City courts. Every case receives direct attention from Standish Alexander — not a junior associate.</p>

                    <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-4" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( home_url( '/practice-areas/dui/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">DUI Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Challenging breath tests, field sobriety tests, and traffic stop validity in Richmond GDC and Circuit Court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/reckless-driving/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Reckless Driving</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">In Virginia, reckless driving is a Class 1 misdemeanor — a criminal charge. Defense requires more than just showing up to court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/traffic-violations/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Traffic Tickets</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Speeding, running red lights, improper lane changes — points add up fast. Contesting tickets protects your license and insurance rates.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/criminal-defense/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Criminal Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Comprehensive defense for misdemeanor and felony charges in Richmond's General District and Circuit courts.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/expungements/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Expungement</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Virginia's 2021 expungement reforms opened new doors. We help eligible clients clear their records in Richmond City Circuit Court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/drug-possession/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Drug Possession</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">From simple possession to distribution charges, we challenge searches, chain of custody, and intent-to-distribute allegations.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/assault-battery/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Assault &amp; Battery</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Self-defense and mutual combat defenses, challenging witness credibility, and seeking alternative dispositions where appropriate.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/theft-larceny/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Theft &amp; Larceny</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petit larceny, grand larceny, and shoplifting charges — all carry criminal records that follow you. We fight for dismissals and reductions.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/license-suspension/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">License Suspension</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Helping clients navigate DMV hearings and petition Richmond courts for restricted driving privileges.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/felony/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Felony Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Felony charges in Richmond Circuit Court demand experienced trial counsel. The stakes are too high for anything less.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/misdemeanor/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit; transition: box-shadow 0.2s;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Misdemeanor Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Even misdemeanor convictions affect employment and housing. We take every case seriously regardless of the charge level.</p>
                        </a>
                    </div>
                </div>

                <!-- Why Alexander Law in Richmond -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Local Expertise</span>
                    <h2 style="margin-top: 0.75rem;">Why Local Court Knowledge Matters in Richmond</h2>
                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Former Richmond Prosecutor</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Mr. Alexander began his career on the prosecution side. He knows exactly how the Richmond Commonwealth's Attorney's Office evaluates cases and structures its arguments — giving defense clients a critical edge.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">30+ Years in Richmond Courtrooms</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Thousands of appearances in Richmond General District Court and Richmond Circuit Court have given Standish Alexander an unmatched understanding of how these courtrooms operate day to day.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Richmond's Unique Jurisdiction</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">As an independent city, Richmond operates differently than the surrounding counties. An attorney unfamiliar with the specific procedures of Richmond's courts can miss important nuances — procedural deadlines, local rules, and judicial preferences.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Direct Attorney Representation</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">When you retain Alexander Law Office, Standish Alexander personally handles your case from initial consultation through final disposition. You will never be handed off to a paralegal or associate.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div style="margin-bottom: 2.5rem;" id="faq">
                    <span class="hero-badge">Common Questions</span>
                    <h2 style="margin-top: 0.75rem;">Frequently Asked Questions — Richmond Courts</h2>

                    <div style="margin-top: 1.5rem;">
                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Where is Richmond General District Court located?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Richmond General District Court is at <strong>400 N 9th Street</strong> in the John Marshall Courts Building in downtown Richmond. The building also houses the Richmond Juvenile and Domestic Relations District Court. Parking is available in nearby city garages. Court begins at 9:00 a.m. and it is essential to arrive early — dockets are often long, and cases can be called at any time.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">What criminal charges are handled in Richmond Circuit Court versus General District Court?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Richmond General District Court (400 N 9th Street) handles misdemeanors and traffic matters, while Richmond Circuit Court (900 E Broad Street) handles all felonies and jury trials. If you are charged with a felony, you first appear in GDC for a preliminary hearing. If probable cause is found, the case is certified to Circuit Court. Misdemeanor convictions in GDC may be appealed de novo to Circuit Court within 10 days — the entire case is retried before a new judge without the original conviction counting against you.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">How long does a Richmond DUI case typically take?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Most Richmond DUI cases require two to four court dates spread over three to six months. The first appearance is typically an arraignment or a continuance to allow your attorney time to review discovery materials — the police report, dashcam footage, and breath or blood test results. Subsequent dates include any motions hearings and ultimately a trial or plea. Cases involving accidents, BAC levels above 0.15, or prior DUI convictions tend to take longer and involve more hearings.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Are Richmond courts strict on DUI and reckless driving?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Results in Richmond's courts are far from uniform — they depend heavily on the specific judge, the strength of the evidence, and the skill of your attorney. Some Richmond judges apply Virginia's mandatory minimums strictly, while others are more receptive to mitigating evidence and alternative dispositions for first-time offenders. Knowing each judge's tendencies — and understanding what the Richmond Commonwealth's Attorney's Office will and won't negotiate on — is knowledge that comes only from years of consistent practice in these courtrooms.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Does Standish Alexander appear regularly in Richmond courts?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes — Standish Alexander has been a regular presence in Richmond city courts for over 30 years. He appears frequently in Richmond General District Court, Richmond Circuit Court, and the Richmond Juvenile and Domestic Relations District Court. This sustained presence means judges and prosecutors in Richmond know him as a serious, prepared attorney — a reputation that benefits every client he represents.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Also Serve -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Service Area</span>
                    <h2 style="margin-top: 0.75rem;">Areas We Also Serve</h2>
                    <p style="line-height: 1.8;">Alexander Law Office represents clients throughout the greater Richmond metropolitan area. If your charge occurred outside Richmond city limits, we handle cases in these jurisdictions as well:</p>
                    <div class="grid md-grid-cols-2 lg-grid-cols-4 gap-4" style="margin-top: 1.25rem;">
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
                        <a href="<?php echo esc_url( home_url( '/petersburg-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Petersburg, VA</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Petersburg GDC &amp; Circuit Court</span>
                        </a>
                    </div>
                </div>

            </main>

            <!-- Sidebar -->
            <aside class="blog-sidebar">
                <div class="sidebar-widget widget-cta">
                    <h3>Free Consultation</h3>
                    <p>Speak with Standish Alexander about your Richmond case today.</p>
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
                            30+ Years in Richmond Courts
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            10.0 AVVO Rating
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            Direct Attorney Access
                        </li>
                        <li style="padding: 0.6rem 0; display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            Free Consultations
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Richmond Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; color: var(--text-light);">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Richmond General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Richmond Circuit Court</li>
                        <li style="padding: 0.5rem 0;">Richmond J&amp;DR District Court</li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white;">Facing Charges in Richmond? Call the Local Expert.</h2>
        <p style="max-width: 650px; margin: 0 auto 2rem; opacity: 0.9;">Standish Alexander has defended Richmond clients for over 30 years. As a former Richmond-area prosecutor, he knows these courts from both sides. Call now for a free, confidential consultation.</p>
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
