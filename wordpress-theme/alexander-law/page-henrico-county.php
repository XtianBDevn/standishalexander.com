<?php
/**
 * Template Name: Criminal Defense Lawyer Henrico County VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Criminal Defense Lawyer Henrico County VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Henrico County criminal defense attorney — DUI, reckless driving, felonies. Standish Alexander knows Henrico courts. Former prosecutor. Free consult. (804) 355-0016.">
<link rel="canonical" href="<?php echo esc_url( home_url( '/henrico-county/' ) ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LegalService",
      "@id": "<?php echo esc_url( home_url( '/henrico-county/#localbusiness' ) ); ?>",
      "name": "Alexander Law Office — Henrico County Criminal Defense",
      "url": "<?php echo esc_url( home_url( '/henrico-county/' ) ); ?>",
      "telephone": "+18043550016",
      "priceRange": "$$",
      "image": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/og-image.jpg' ); ?>",
      "description": "Standish Alexander provides aggressive criminal defense for Henrico County clients in Henrico General District Court and Henrico Circuit Court at 4301 E Parham Road.",
      "areaServed": {
        "@type": "AdministrativeArea",
        "name": "Henrico County",
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
      "@id": "<?php echo esc_url( home_url( '/henrico-county/#faq' ) ); ?>",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Henrico General District Court located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Henrico General District Court is located at 4301 E Parham Road, Henrico, VA 23228. The General District Court and Circuit Court share the same Henrico Courts Complex on Parham Road."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Richmond and Henrico courts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Richmond and Henrico are completely separate jurisdictions with entirely separate court systems. Charges that occur within Richmond city limits are heard exclusively in Richmond city courts. Charges occurring anywhere in Henrico County — including Short Pump, Glen Allen, Sandston, and Highland Springs — are heard in Henrico courts at 4301 E Parham Road. You cannot choose which jurisdiction to use; it is determined by where the alleged offense took place."
          }
        },
        {
          "@type": "Question",
          "name": "Are DUI arrests common in Henrico County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Henrico County sees a high volume of DUI arrests due to the heavy traffic on Interstate 64, US-1, I-295, and the West Broad Street corridor. Henrico County Police Department is one of the most active law enforcement agencies in Central Virginia and runs regular DUI patrols, particularly on weekend nights and holidays."
          }
        },
        {
          "@type": "Question",
          "name": "Can a Henrico County DUI charge be reduced?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Whether a Henrico DUI charge can be reduced or dismissed depends on the specific facts: the BAC level, the validity of the traffic stop, the accuracy of field sobriety test administration, and whether proper procedures were followed with any breathalyzer or blood draw. An attorney with experience in Henrico courts understands how the Henrico Commonwealth's Attorney's Office approaches these cases and what arguments tend to be effective with Henrico judges."
          }
        },
        {
          "@type": "Question",
          "name": "Does Mr. Alexander practice in Henrico County courts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Standish Alexander regularly appears in both Henrico General District Court and Henrico Circuit Court. He has practiced criminal defense throughout the greater Richmond area, including Henrico County, for more than 30 years."
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
            <span class="hero-badge">Henrico County, Virginia</span>
            <h1>Criminal Defense Lawyer Henrico County, Virginia</h1>
            <p class="page-hero-subtitle">Henrico County wraps around Richmond on three sides, and its high-volume traffic corridors produce a steady stream of DUI and criminal charges. You need an attorney who knows these courts — and knows how Henrico prosecutes.</p>
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
                    <p style="font-size: 1.125rem; line-height: 1.8;">Henrico County surrounds Richmond on the north, east, and west — making it one of the most densely traveled jurisdictions in Central Virginia. From the Short Pump retail corridor on the west to Sandston and Highland Springs on the east, Henrico is geographically diverse and serves a large, growing population. That means a significant caseload for the Henrico courts and an aggressive enforcement presence from Henrico County Police Department, one of the most active law enforcement agencies in the region.</p>
                    <p style="line-height: 1.8; margin-top: 1rem;">If you have been charged with DUI, reckless driving, drug possession, assault, or any other criminal matter in Henrico County, the charge will be heard at the Henrico Courts Complex on East Parham Road — not in Richmond city courts. These are entirely separate jurisdictions. Standish Alexander has appeared regularly in Henrico courts for over three decades, and he knows the judges, the prosecutors in the Henrico Commonwealth's Attorney's Office, and the procedural landscape of these specific courtrooms.</p>
                </div>

                <!-- Henrico Courts -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Henrico Court System</span>
                    <h2 style="margin-top: 0.75rem;">The Henrico County Courts</h2>
                    <p style="line-height: 1.8;">All Henrico criminal and traffic matters are heard at the Henrico Courts Complex on East Parham Road in eastern Henrico County.</p>

                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Henrico General District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>4301 E Parham Road</strong><br>Henrico Courts Complex<br>Henrico, VA 23228</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">This high-volume court handles all misdemeanors, traffic offenses including DUI and reckless driving, and preliminary hearings for felony matters. Henrico GDC processes one of the largest dockets in the Richmond metro area. Local knowledge and prior relationships with court personnel make a meaningful difference in how cases are managed and resolved here.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Henrico Circuit Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>4301 E Parham Road</strong><br>Henrico Courts Complex<br>Henrico, VA 23228</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Henrico Circuit Court shares the same courts complex and handles all felony trials, jury trials, and appeals from GDC. Felony convictions here carry serious consequences including loss of voting rights, firearm rights, and professional licenses. Experienced trial representation is essential at this level.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Henrico J&amp;DR District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>4301 E Parham Road</strong><br>Henrico Courts Complex<br>Henrico, VA 23228</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">The Juvenile and Domestic Relations District Court handles domestic violence charges, violations of protective orders, and criminal matters involving juvenile defendants in Henrico County. The intersection of family law and criminal law in this court makes experienced legal counsel particularly important.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Henrico Police Department</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;">Henrico County, VA 23228</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Henrico County Police Department (HCPD) is responsible for the majority of arrests and traffic citations in the county. HCPD is known for active patrol on Henrico's major corridors and frequently conducts DUI enforcement operations, particularly on Interstate 64, US-1, and the West Broad Street area near Short Pump.</p>
                        </div>
                    </div>
                </div>

                <!-- Traffic Corridors -->
                <div class="card" style="padding: 2rem; margin-bottom: 2.5rem; background: var(--muted);">
                    <h3 style="color: var(--primary);">Henrico County Traffic Enforcement Corridors</h3>
                    <p style="line-height: 1.8;">Henrico's traffic network includes several major interstate and arterial roads that are actively patrolled for DUI, speeding, and reckless driving:</p>
                    <ul style="line-height: 2; margin-top: 0.75rem; padding-left: 1.25rem; color: var(--text-light);">
                        <li><strong style="color: var(--foreground);">Interstate 64</strong> — east-west through central Henrico; one of the most active DUI enforcement corridors in the county</li>
                        <li><strong style="color: var(--foreground);">I-295</strong> — beltway around the Richmond region through eastern and northern Henrico; frequent speed enforcement</li>
                        <li><strong style="color: var(--foreground);">US-1 (Jefferson Davis Highway)</strong> — north-south through eastern Henrico; sustained patrol activity</li>
                        <li><strong style="color: var(--foreground);">West Broad Street</strong> — primary commercial artery through Short Pump and Glen Allen; heavy traffic with frequent stops</li>
                        <li><strong style="color: var(--foreground);">Hungary Spring Road</strong> — active patrol in north central Henrico</li>
                    </ul>
                    <p style="margin-top: 1rem; line-height: 1.8;">A stop on any of these roads resulting in a DUI, reckless driving, or other charge will be processed through Henrico General District Court — a court where Standish Alexander has practiced for decades.</p>
                </div>

                <!-- Practice Areas -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">What We Handle</span>
                    <h2 style="margin-top: 0.75rem;">Practice Areas Served in Henrico County</h2>
                    <p style="line-height: 1.8;">Alexander Law Office handles the full range of criminal and traffic matters in Henrico County courts. Standish Alexander personally handles every case.</p>

                    <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-4" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( home_url( '/practice-areas/dui/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">DUI Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">HCPD DUI arrests on I-64, US-1, and Broad Street — we challenge every element from the traffic stop to the breath test result.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/reckless-driving/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Reckless Driving</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Reckless driving in Virginia is a criminal misdemeanor, not a traffic ticket. Speed-related charges on Henrico's highways need aggressive defense.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/traffic-violations/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Traffic Tickets</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Protecting your driving record and insurance rates by contesting Henrico traffic citations in General District Court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/criminal-defense/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Criminal Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Misdemeanor and felony defense in Henrico GDC and Henrico Circuit Court — comprehensive representation for all criminal charges.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/expungements/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Expungement</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Clearing eligible Henrico County charges from your record under Virginia's expanded expungement law.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/drug-possession/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Drug Possession</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Challenging search and seizure issues, questioning chain of custody, and seeking first-offender dispositions in Henrico courts.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/assault-battery/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Assault &amp; Battery</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Defense of simple assault, assault and battery, and domestic assault charges in Henrico GDC and J&DR Court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/theft-larceny/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Theft &amp; Larceny</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Shoplifting and larceny charges in Henrico's retail-heavy areas — we work toward dismissals and alternatives to conviction.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/license-suspension/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">License Suspension</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Helping Henrico clients petition for restricted driving privileges and navigate the DMV restoration process.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/felony/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Felony Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Felony charges in Henrico Circuit Court carry life-altering consequences. Trial-tested representation is essential.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/misdemeanor/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Misdemeanor Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Misdemeanor convictions in Henrico GDC create permanent criminal records. Every charge deserves a thorough defense.</p>
                        </a>
                    </div>
                </div>

                <!-- Why Alexander Law in Henrico -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Local Expertise</span>
                    <h2 style="margin-top: 0.75rem;">Why Local Representation Matters in Henrico County</h2>
                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Separate Jurisdiction from Richmond</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Henrico and Richmond are completely separate court systems. An attorney who primarily practices in Richmond city courts will be an outsider in Henrico — and that unfamiliarity shows. Mr. Alexander is equally at home in both jurisdictions.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">High-Volume Court Experience</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Henrico GDC handles an enormous caseload. Navigating a busy court docket efficiently requires familiarity with the court's processes, clerk procedures, and scheduling practices — all of which come with years of regular appearances.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Knowledge of Henrico Commonwealth's Attorney</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Effective plea negotiations and motion practice depend on knowing how the Henrico Commonwealth's Attorney's Office evaluates specific charge types. That knowledge is built over decades of practice in this specific jurisdiction.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Understanding HCPD Procedures</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Henrico County Police Department follows specific protocols for DUI investigations, field sobriety tests, and arrests. An experienced local attorney knows where procedural errors occur and how to challenge them effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div style="margin-bottom: 2.5rem;" id="faq">
                    <span class="hero-badge">Common Questions</span>
                    <h2 style="margin-top: 0.75rem;">Frequently Asked Questions — Henrico County Courts</h2>

                    <div style="margin-top: 1.5rem;">
                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Where is Henrico General District Court located?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Henrico General District Court is at <strong>4301 E Parham Road</strong> in the Henrico Courts Complex in eastern Henrico County. The same complex houses the Henrico Circuit Court and the Henrico Juvenile and Domestic Relations District Court. Court sessions typically begin at 9:00 a.m., and the Henrico docket can be lengthy — arriving early and having a prepared attorney is essential.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">What is the difference between Richmond and Henrico courts?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Richmond and Henrico County are entirely separate jurisdictions with completely independent court systems, prosecutors, and judges. There is no overlap. If you are charged in Henrico County — even in an area that feels like it is "part of Richmond," such as a suburb along Broad Street or near Willow Lawn — your case will be heard exclusively in Henrico courts at Parham Road. Charges in Richmond city limits go to Richmond courts. An attorney must be admitted to practice and familiar with both systems to effectively represent clients across the metro area.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Are DUI arrests common in Henrico County?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes. Henrico County's extensive highway network — including I-64, I-295, and US-1 — combined with the county's dense commercial and residential population produces a consistently high volume of DUI arrests. Henrico County Police Department conducts routine saturation patrols on weekend nights, and sobriety checkpoints are common on major corridors during holiday periods. Being stopped by HCPD does not guarantee a conviction — but you need experienced legal representation to protect your rights.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Can a Henrico County DUI charge be reduced?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">The outcome of a Henrico DUI depends heavily on the facts: the BAC reading, whether field sobriety tests were properly administered, whether the traffic stop itself was legally valid, and the defendant's prior record. There is no guaranteed result, but an attorney who regularly practices before the Henrico Commonwealth's Attorney's Office understands what evidence they weigh most heavily and what mitigating factors Henrico judges have considered favorably in similar cases. That knowledge is what distinguishes effective local representation from out-of-county counsel.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Does Mr. Alexander practice in Henrico County courts?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes — Standish Alexander regularly appears in Henrico General District Court and Henrico Circuit Court. He has represented clients throughout the greater Richmond metro area, including Henrico County, for more than 30 years. His familiarity with Henrico's judges, prosecutors, and court procedures is the product of consistent, sustained practice in these specific courtrooms.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Also Serve -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Service Area</span>
                    <h2 style="margin-top: 0.75rem;">Areas We Also Serve</h2>
                    <p style="line-height: 1.8;">Alexander Law Office serves clients throughout Central Virginia. If your charge occurred outside Henrico County, we handle cases in these nearby jurisdictions:</p>
                    <div class="grid md-grid-cols-2 lg-grid-cols-4 gap-4" style="margin-top: 1.25rem;">
                        <a href="<?php echo esc_url( home_url( '/richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Richmond, VA</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Richmond City Courts</span>
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
                    <p>Speak with Standish Alexander about your Henrico case today.</p>
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
                            30+ Years in Henrico Courts
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
                    <h3>Henrico Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; color: var(--text-light);">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Henrico General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Henrico Circuit Court</li>
                        <li style="padding: 0.5rem 0;">Henrico J&amp;DR District Court</li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white;">Charged in Henrico County? Get Local Representation.</h2>
        <p style="max-width: 650px; margin: 0 auto 2rem; opacity: 0.9;">Henrico County courts are not Richmond city courts — the judges, prosecutors, and procedures are different. Standish Alexander has practiced in Henrico for over 30 years and knows this system from the inside. Call now for a free consultation.</p>
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
