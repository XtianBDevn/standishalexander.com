<?php
/**
 * Template Name: Criminal Defense Lawyer Hanover County VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Criminal Defense Lawyer Hanover County VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Hanover County criminal defense attorney — DUI, reckless driving, criminal charges. Standish Alexander knows Hanover courts. Free consult. (804) 355-0016.">
<link rel="canonical" href="<?php echo esc_url( home_url( '/hanover-county/' ) ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LegalService",
      "@id": "<?php echo esc_url( home_url( '/hanover-county/#localbusiness' ) ); ?>",
      "name": "Alexander Law Office — Hanover County Criminal Defense",
      "url": "<?php echo esc_url( home_url( '/hanover-county/' ) ); ?>",
      "telephone": "+18043550016",
      "priceRange": "$$",
      "image": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/og-image.jpg' ); ?>",
      "description": "Standish Alexander provides criminal defense for Hanover County clients in Hanover General District Court and Hanover Circuit Court at 7507 Library Drive.",
      "areaServed": {
        "@type": "AdministrativeArea",
        "name": "Hanover County",
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
      "@id": "<?php echo esc_url( home_url( '/hanover-county/#faq' ) ); ?>",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Hanover General District Court located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hanover General District Court is located at 7507 Library Drive, Hanover, VA 23069, in the Hanover Courthouse complex — one of Virginia's oldest continuously operating courthouse sites, dating to 1735."
          }
        },
        {
          "@type": "Question",
          "name": "Who issues traffic tickets in Hanover County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most traffic citations in Hanover County are issued by the Virginia State Police, who have primary patrol responsibility for I-95 and US-1 through the county. The Hanover County Sheriff's Office also patrols county roads and issues citations. Unlike Henrico or Chesterfield, Hanover does not have a county police department — State Police troopers handle the bulk of highway enforcement."
          }
        },
        {
          "@type": "Question",
          "name": "Is I-95 heavily enforced for DUI and speed in Hanover County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The stretch of I-95 running north through Hanover County is regularly patrolled by Virginia State Police. VSP conducts DUI enforcement operations throughout the year on I-95 in Hanover, and the high-speed nature of the interstate means that many reckless driving citations are also issued here. VSP also runs sobriety checkpoints at strategic locations on this corridor during holiday periods."
          }
        },
        {
          "@type": "Question",
          "name": "Does Standish Alexander appear in Hanover courts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Standish Alexander serves clients throughout Central Virginia, including Hanover County. He appears in Hanover General District Court and Hanover Circuit Court and is familiar with the county's court procedures, the Hanover Commonwealth's Attorney's Office, and the State Police troopers whose citations regularly appear on Hanover dockets."
          }
        },
        {
          "@type": "Question",
          "name": "What types of criminal cases are most common in Hanover County?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The most common criminal and traffic charges in Hanover County involve DUI, reckless driving, and speeding on I-95 and US-1 (primarily VSP citations). Drug possession charges also appear regularly, as do traffic violations on Route 301 and Route 54. Hanover's more rural character means the court docket is smaller than Henrico or Chesterfield, and the judges often know local attorneys well — making experienced local representation particularly impactful."
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
            <span class="hero-badge">Hanover County, Virginia</span>
            <h1>Criminal Defense Lawyer Hanover County, Virginia</h1>
            <p class="page-hero-subtitle">North of Richmond, Hanover County's I-95 corridor is one of Virginia State Police's most active enforcement zones. The county's smaller, well-established courts mean that local attorney relationships and knowledge carry real weight.</p>
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
                    <p style="font-size: 1.125rem; line-height: 1.8;">Hanover County stretches north of Richmond along the I-95 corridor, covering a mix of suburban development, rural farmland, and small historic communities. Unlike the urbanized counties to the south and east, Hanover retains a more rural character — and that character shapes how its courts operate. The Hanover Courts sit in the historic Hanover Courthouse area, where legal proceedings have taken place since 1735. Patrick Henry argued some of his earliest notable cases in this very location.</p>
                    <p style="line-height: 1.8; margin-top: 1rem;">Today, Hanover's courts handle a more modest caseload than the high-volume dockets in Henrico or Chesterfield. That smaller docket has a specific implication: the judges who rotate through Hanover General District Court and Hanover Circuit Court tend to know the local bar well. An attorney who appears regularly in Hanover courts — who is recognized by the bench and known to the Hanover Commonwealth's Attorney's Office — brings a credibility advantage that out-of-jurisdiction attorneys simply do not have. Standish Alexander has served Hanover County clients for over 30 years.</p>
                </div>

                <!-- Hanover Courts -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Hanover Court System</span>
                    <h2 style="margin-top: 0.75rem;">The Hanover County Courts</h2>
                    <p style="line-height: 1.8;">All Hanover County criminal and traffic matters are heard at the historic Hanover Courthouse complex in the county seat.</p>

                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Hanover General District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>7507 Library Drive</strong><br>Hanover Courthouse Complex<br>Hanover, VA 23069</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Hanover GDC handles all traffic offenses, misdemeanor charges, and preliminary hearings for felony matters. The court operates with a smaller docket than its counterparts in the suburban counties, which means more focused judicial attention on each case. A prepared attorney who is recognized in this court has a genuine advantage.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Hanover Circuit Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>7507 Library Drive</strong><br>Hanover Courthouse Complex<br>Hanover, VA 23069</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Hanover Circuit Court handles felony trials, jury trials, and appeals from GDC. The historic courthouse setting reflects Hanover's long legal tradition — but the proceedings are entirely modern, and the stakes of a felony conviction here are the same as anywhere else in Virginia: potential prison sentences, loss of civil rights, and a permanent criminal record.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem; grid-column: 1 / -1;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">A Courthouse with History</h3>
                            <p style="font-size: 0.9rem; line-height: 1.7;">The Hanover Courthouse area has been the site of legal proceedings since 1735, making it one of Virginia's oldest continuously operating courthouse locations. Patrick Henry, who grew up in Hanover County, argued some of his earliest and most notable cases here — including the famous Parsons' Cause in 1763, widely credited as one of the first sparks of American revolutionary sentiment. The courthouse building itself is a Virginia landmark. The history of vigorous legal advocacy in this building is something Standish Alexander honors with every appearance he makes inside it.</p>
                        </div>
                    </div>
                </div>

                <!-- Enforcement: VSP and Roads -->
                <div class="card" style="padding: 2rem; margin-bottom: 2.5rem; background: var(--muted);">
                    <h3 style="color: var(--primary);">Virginia State Police Enforcement in Hanover County</h3>
                    <p style="line-height: 1.8;">Hanover County does not have its own county police department. The primary law enforcement agencies patrolling Hanover's roads are Virginia State Police and the Hanover County Sheriff's Office. VSP troopers have primary patrol responsibility for Interstate 95 and US-1 through the county. Key enforcement areas include:</p>
                    <ul style="line-height: 2; margin-top: 0.75rem; padding-left: 1.25rem; color: var(--text-light);">
                        <li><strong style="color: var(--foreground);">Interstate 95</strong> — major north-south interstate through Hanover; VSP conducts regular DUI and speed enforcement, particularly around exits near Ashland</li>
                        <li><strong style="color: var(--foreground);">US-1 (Jefferson Davis Highway)</strong> — runs through eastern Hanover parallel to I-95; consistent patrol presence</li>
                        <li><strong style="color: var(--foreground);">Route 301</strong> — rural road through northeastern Hanover; lower speed limits, farm equipment, and local hazards create enforcement opportunities</li>
                        <li><strong style="color: var(--foreground);">Route 54</strong> — connects Hanover to Ashland and surrounding areas; patrolled by both VSP and the Sheriff's Office</li>
                    </ul>
                    <p style="margin-top: 1rem; line-height: 1.8;">A citation or arrest by a VSP trooper in Hanover County will result in a charge processed through Hanover General District Court. VSP troopers are well-trained and thorough — but their DUI investigations and traffic stops are not immune from challenge. Mr. Alexander has successfully challenged VSP-issued charges throughout his career.</p>
                </div>

                <!-- Practice Areas -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">What We Handle</span>
                    <h2 style="margin-top: 0.75rem;">Practice Areas Served in Hanover County</h2>
                    <p style="line-height: 1.8;">Alexander Law Office handles criminal and traffic matters throughout Central Virginia, including Hanover County. Standish Alexander personally handles every client's case.</p>

                    <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-4" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( home_url( '/practice-areas/dui/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">DUI Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">VSP DUI arrests on I-95 and US-1 in Hanover — challenging every procedural step from the traffic stop to the breath or blood test.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/reckless-driving/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Reckless Driving</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Speed enforcement on I-95 generates many Hanover reckless driving charges. In Virginia, this is a criminal misdemeanor — not a mere traffic fine.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/traffic-violations/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Traffic Tickets</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Contesting VSP and Sheriff's Office citations in Hanover GDC to protect your driving record and insurance costs.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/criminal-defense/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Criminal Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Comprehensive misdemeanor and felony defense in Hanover GDC and Circuit Court with the weight of local court experience behind every argument.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/expungements/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Expungement</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Petitioning Hanover Circuit Court for expungement of eligible charges under Virginia's expanded expungement law.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/drug-possession/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Drug Possession</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Challenging VSP searches and seizures, constructive possession theories, and chain of custody in drug cases arising from Hanover traffic stops.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/assault-battery/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Assault &amp; Battery</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Defense of assault, domestic assault, and battery charges in Hanover GDC and J&DR Court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/theft-larceny/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Theft &amp; Larceny</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Representing Hanover clients on petit and grand larceny charges, working toward dismissals and alternatives where possible.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/license-suspension/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">License Suspension</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Helping Hanover clients petition for restricted driving privileges and navigate DMV reinstatement requirements.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/felony/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Felony Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Hanover Circuit Court felony trials require trial-tested counsel who knows the court and its expectations. Mr. Alexander has that experience.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/misdemeanor/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Misdemeanor Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Every misdemeanor conviction in Hanover GDC is a permanent criminal record. Serious representation begins with the first appearance, not just at trial.</p>
                        </a>
                    </div>
                </div>

                <!-- Why Alexander Law in Hanover -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Local Expertise</span>
                    <h2 style="margin-top: 0.75rem;">Why Local Experience Matters in Hanover County</h2>
                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Small Docket, Greater Judicial Attention</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Hanover courts handle far fewer cases than Henrico or Chesterfield, which means judges pay closer attention to each one. Coming in with a well-prepared, thorough defense has more impact here than in a court where cases are processed by the hundreds.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">VSP Charge Expertise</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Because most Hanover traffic enforcement is conducted by Virginia State Police, an effective defense attorney must understand VSP procedures, training protocols, and how VSP DUI investigations are conducted differently from local police departments. Mr. Alexander has defended VSP-issued charges throughout Central Virginia for decades.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Knowledge of the Hanover Bar</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">In a smaller jurisdiction, professional relationships within the local bar carry real significance. An attorney who is known and respected in Hanover courts brings a credibility that benefits clients at every stage of the proceeding, from initial negotiations to final arguments.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Central Virginia Regional Coverage</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Alexander Law Office covers all of Central Virginia. Whether your charge is in Hanover's rural north or on the I-95 corridor near Ashland, Standish Alexander can represent you in the appropriate court without you needing to search for a different attorney for different jurisdictions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div style="margin-bottom: 2.5rem;" id="faq">
                    <span class="hero-badge">Common Questions</span>
                    <h2 style="margin-top: 0.75rem;">Frequently Asked Questions — Hanover County Courts</h2>

                    <div style="margin-top: 1.5rem;">
                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Where is Hanover General District Court located?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Hanover General District Court is at <strong>7507 Library Drive, Hanover, VA 23069</strong>, in the Hanover Courthouse complex. The Circuit Court and Juvenile and Domestic Relations Court are in the same area. The courthouse is located in the historic Hanover Courthouse community, which has been the county seat since the colonial era. Court sessions typically begin at 9:00 a.m.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Who issues traffic tickets in Hanover County?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Most traffic citations in Hanover County are issued by <strong>Virginia State Police</strong>, who have primary responsibility for patrolling I-95 and US-1 through the county. The <strong>Hanover County Sheriff's Office</strong> patrols county roads and also issues citations. Hanover does not have its own county police department, which distinguishes it from Henrico and Chesterfield. This means that if you received a traffic ticket in Hanover, it was most likely issued by a VSP trooper — and the defense strategies relevant to VSP procedures are the ones that apply to your case.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Is I-95 heavily enforced for DUI and speed in Hanover?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes. The I-95 corridor through Hanover County is one of the more actively patrolled stretches of interstate in the region. Virginia State Police regularly runs DUI enforcement operations and speed saturation patrols on this corridor. The area around the Ashland exits and north toward the Hanover-Caroline county line is a consistent enforcement zone. High speeds on this stretch of highway also generate a significant number of reckless driving citations, which in Virginia are criminal misdemeanors carrying potential jail time and license suspension.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Does Standish Alexander appear in Hanover County courts?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes. Standish Alexander represents clients in all Central Virginia courts, including Hanover General District Court and Hanover Circuit Court. He is familiar with the Hanover Courthouse complex, the Hanover Commonwealth's Attorney's Office, and the Virginia State Police troopers whose charges regularly appear on Hanover's docket. He serves Hanover County clients with the same depth of preparation and local knowledge that he brings to every jurisdiction in his practice area.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">What types of criminal cases are most common in Hanover County?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">The most common charges in Hanover County courts are DUI, reckless driving, and speeding violations on I-95 and US-1 — predominantly issued by Virginia State Police. Drug possession charges also appear regularly, often arising from VSP traffic stops. Beyond traffic-related matters, Hanover sees assault and battery cases, domestic charges, and occasional theft and larceny matters. Hanover's smaller docket means each case receives more focused attention — reinforcing the importance of thorough preparation and recognized local counsel.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Also Serve -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Service Area</span>
                    <h2 style="margin-top: 0.75rem;">Areas We Also Serve</h2>
                    <p style="line-height: 1.8;">Alexander Law Office covers all of Central Virginia. If your charge occurred outside Hanover County, we represent clients in these surrounding jurisdictions:</p>
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
                    <p>Speak with Standish Alexander about your Hanover case today.</p>
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
                            30+ Years Serving Hanover
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            10.0 AVVO Rating
                        </li>
                        <li style="padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200); display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            VSP Charge Expertise
                        </li>
                        <li style="padding: 0.6rem 0; display: flex; gap: 0.5rem; align-items: flex-start;">
                            <span style="color: var(--secondary); font-weight: 700; flex-shrink: 0;">&#10003;</span>
                            Free Consultations
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Hanover Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; color: var(--text-light);">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Hanover General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Hanover Circuit Court</li>
                        <li style="padding: 0.5rem 0;">Hanover J&amp;DR District Court</li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white;">Charged in Hanover County? You Need Local Experience.</h2>
        <p style="max-width: 650px; margin: 0 auto 2rem; opacity: 0.9;">Hanover's smaller courts mean judges know who appears before them regularly. Standish Alexander has been that attorney in Hanover for over 30 years. Call now for a free, confidential consultation about your case.</p>
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
