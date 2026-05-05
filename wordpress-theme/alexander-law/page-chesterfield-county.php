<?php
/**
 * Template Name: Criminal Defense Lawyer Chesterfield County VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Criminal Defense Lawyer Chesterfield County | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Chesterfield County criminal defense — DUI, reckless driving, drug charges. Standish Alexander — 30+ years in Chesterfield courts. Free consult. (804) 355-0016.">
<link rel="canonical" href="<?php echo esc_url( home_url( '/chesterfield-county/' ) ); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "LegalService",
      "@id": "<?php echo esc_url( home_url( '/chesterfield-county/#localbusiness' ) ); ?>",
      "name": "Alexander Law Office — Chesterfield County Criminal Defense",
      "url": "<?php echo esc_url( home_url( '/chesterfield-county/' ) ); ?>",
      "telephone": "+18043550016",
      "priceRange": "$$",
      "image": "<?php echo esc_url( get_template_directory_uri() . '/assets/images/og-image.jpg' ); ?>",
      "description": "Standish Alexander provides aggressive criminal defense for Chesterfield County clients in Chesterfield General District Court and Chesterfield Circuit Court at 9500 Courthouse Road.",
      "areaServed": {
        "@type": "AdministrativeArea",
        "name": "Chesterfield County",
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
      "@id": "<?php echo esc_url( home_url( '/chesterfield-county/#faq' ) ); ?>",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Where is Chesterfield General District Court located?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chesterfield General District Court is located at 9500 Courthouse Road, Chesterfield, VA 23832, as part of the Chesterfield Courts Complex. The Circuit Court is in the same complex."
          }
        },
        {
          "@type": "Question",
          "name": "Is reckless driving common on Route 288 in Chesterfield?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Route 288 is a major divided highway that runs through western Chesterfield County, and Chesterfield Police Department actively enforces speed limits on this corridor. In Virginia, driving 20 mph or more over the posted speed limit, or exceeding 85 mph regardless of the speed limit, constitutes reckless driving — a Class 1 misdemeanor with criminal penalties. Route 288's high speed limit and wide lanes can create a false sense of security, resulting in many reckless driving citations."
          }
        },
        {
          "@type": "Question",
          "name": "How does Chesterfield handle first-offense DUI cases?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In Chesterfield County, a first-offense DUI typically carries mandatory minimums under Virginia law: a fine of at least $250, a one-year license suspension, completion of VASAP (Virginia Alcohol Safety Action Program), and possible jail time if the BAC was 0.15 or above. With experienced legal representation, first-time offenders may be candidates for reduced charges or alternative dispositions depending on the specific facts, though no outcome can be guaranteed. An attorney who knows the Chesterfield Commonwealth's Attorney's Office can provide realistic guidance based on the actual circumstances of your case."
          }
        },
        {
          "@type": "Question",
          "name": "Does Mr. Alexander appear in Chesterfield courts regularly?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Standish Alexander has appeared in Chesterfield General District Court and Chesterfield Circuit Court for decades. He is familiar with Chesterfield's judges, prosecutors, and court procedures, and he brings that accumulated local knowledge directly to bear on each client's case."
          }
        },
        {
          "@type": "Question",
          "name": "Can a Chesterfield drug charge be expunged?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Virginia significantly expanded its expungement law in 2021 and 2025. Simple possession convictions for marijuana or certain other controlled substances may now be eligible for expungement under specific conditions. Charges that were dismissed, nolle prossed, or resulted in acquittal are generally expungeable. Whether a specific Chesterfield drug charge qualifies depends on the offense, the disposition, and the client's criminal history. Mr. Alexander can evaluate your specific situation during a free consultation."
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
            <span class="hero-badge">Chesterfield County, Virginia</span>
            <h1>Criminal Defense Lawyer Chesterfield County, Virginia</h1>
            <p class="page-hero-subtitle">Chesterfield is the fastest-growing county in Central Virginia — and Route 288 and Midlothian Turnpike are two of the most aggressively enforced corridors in the region. When you face criminal or traffic charges here, you need an attorney who knows these courts.</p>
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
                    <p style="font-size: 1.125rem; line-height: 1.8;">Chesterfield County sits south and southwest of Richmond and has grown into one of the most populous and economically active counties in all of Virginia. With that growth has come a major increase in highway traffic — and with heavy traffic come DUI arrests, reckless driving charges, and criminal matters of all kinds. Chesterfield Police Department actively patrols Route 288, Midlothian Turnpike (Route 60), Hull Street Road (Route 360), and Chippenham Parkway, issuing a high volume of citations and making arrests throughout the county every week.</p>
                    <p style="line-height: 1.8; margin-top: 1rem;">If you have been charged with a crime or traffic offense in Chesterfield County, your case will be heard at the Chesterfield Courts Complex on Courthouse Road — not in Richmond city courts, and not in any other county's court system. Standish Alexander has appeared in Chesterfield courts for decades. He knows the Chesterfield Commonwealth's Attorney's Office, the judges who rotate through Chesterfield GDC and Circuit Court, and the procedural details that separate informed local representation from an attorney who is simply unfamiliar with the venue.</p>
                </div>

                <!-- Chesterfield Courts -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Chesterfield Court System</span>
                    <h2 style="margin-top: 0.75rem;">The Chesterfield County Courts</h2>
                    <p style="line-height: 1.8;">All criminal and traffic matters originating in Chesterfield County are heard at the Chesterfield Courts Complex on Courthouse Road in the county seat.</p>

                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Chesterfield General District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>9500 Courthouse Road</strong><br>Chesterfield Courts Complex<br>Chesterfield, VA 23832</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">This court handles all traffic offenses, DUI charges, reckless driving cases, misdemeanors, and preliminary hearings for felony matters arising in Chesterfield County. The court handles a large docket reflecting the county's population growth. An attorney who regularly appears here understands how to efficiently navigate the scheduling, the prosecutors, and the judicial expectations in this specific venue.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Chesterfield Circuit Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>9500 Courthouse Road</strong><br>Chesterfield Courts Complex<br>Chesterfield, VA 23832</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">Chesterfield Circuit Court handles felony trials, jury trials, and appeals from GDC. Felony convictions here carry permanent consequences — loss of voting rights, firearm prohibitions, and potential state prison sentences. Experienced trial counsel who has prepared and tried cases in Chesterfield Circuit Court is essential for anyone facing a serious charge.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Chesterfield J&amp;DR District Court</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>9500 Courthouse Road</strong><br>Chesterfield Courts Complex<br>Chesterfield, VA 23832</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">The Juvenile and Domestic Relations District Court handles domestic violence cases, protective order violations, and juvenile criminal matters in Chesterfield County. These cases often have both criminal and civil dimensions that require careful, coordinated legal strategy.</p>
                        </div>
                        <div class="card" style="padding: 1.75rem;">
                            <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.75rem;">Chesterfield Commonwealth's Attorney</h3>
                            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 0.75rem;"><strong>9500 Courthouse Road</strong><br>Chesterfield, VA 23832</p>
                            <p style="font-size: 0.9rem; line-height: 1.7;">The Chesterfield Commonwealth's Attorney's Office prosecutes all criminal and traffic matters in Chesterfield County. Standish Alexander's decades of practice in Chesterfield courts have given him detailed knowledge of how this office approaches specific charges — knowledge that directly informs negotiation strategy and trial preparation.</p>
                        </div>
                    </div>
                </div>

                <!-- Enforcement Corridors -->
                <div class="card" style="padding: 2rem; margin-bottom: 2.5rem; background: var(--muted);">
                    <h3 style="color: var(--primary);">Chesterfield County's Primary Enforcement Corridors</h3>
                    <p style="line-height: 1.8;">Chesterfield Police Department and Virginia State Police routinely patrol these roads for DUI, reckless driving, and speeding violations. Residents and commuters on these routes are frequently cited:</p>
                    <ul style="line-height: 2; margin-top: 0.75rem; padding-left: 1.25rem; color: var(--text-light);">
                        <li><strong style="color: var(--foreground);">Route 288</strong> — beltway through western Chesterfield; heavily patrolled for excessive speed, including reckless driving charges</li>
                        <li><strong style="color: var(--foreground);">Midlothian Turnpike (Route 60)</strong> — primary east-west commercial corridor through central Chesterfield; active DUI enforcement</li>
                        <li><strong style="color: var(--foreground);">Hull Street Road (Route 360)</strong> — southwest Chesterfield arterial; regular patrol activity</li>
                        <li><strong style="color: var(--foreground);">Chippenham Parkway</strong> — connects Chesterfield to Richmond; significant traffic volume and DUI stops</li>
                        <li><strong style="color: var(--foreground);">Jefferson Davis Highway (US-1)</strong> — eastern Chesterfield border; sustained enforcement presence</li>
                    </ul>
                    <p style="margin-top: 1rem; line-height: 1.8;">Chesterfield attracts many Richmond professionals who commute on these highways daily. A single traffic stop can result in a reckless driving charge that carries the weight of a criminal conviction — never assume that paying a fine is the only option.</p>
                </div>

                <!-- Practice Areas -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">What We Handle</span>
                    <h2 style="margin-top: 0.75rem;">Practice Areas Served in Chesterfield County</h2>
                    <p style="line-height: 1.8;">Alexander Law Office handles the full spectrum of criminal and traffic matters in Chesterfield County courts. Every client receives direct representation from Standish Alexander.</p>

                    <div class="grid md-grid-cols-2 lg-grid-cols-3 gap-4" style="margin-top: 1.5rem;">
                        <a href="<?php echo esc_url( home_url( '/practice-areas/dui/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">DUI Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Challenging DUI arrests on Chesterfield's major highways — from the legality of the traffic stop to the accuracy of breathalyzer results.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/reckless-driving/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Reckless Driving</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Route 288 reckless driving charges are a criminal matter in Virginia. Defense strategies include calibration records, speedometer evidence, and driving record mitigation.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/traffic-violations/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Traffic Tickets</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Contesting Chesterfield traffic citations to protect your driving record, DMV points, and insurance premiums.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/criminal-defense/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Criminal Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Comprehensive misdemeanor and felony defense in Chesterfield GDC and Circuit Court — from arraignment through trial or plea.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/expungements/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Expungement</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Virginia's expanded expungement law offers new relief for eligible Chesterfield clients. We evaluate your record and petition Chesterfield Circuit Court.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/drug-possession/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Drug Possession</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Drug charges in Chesterfield's growing suburban corridors — challenging searches, chain of custody, and constructive possession theories.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/assault-battery/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Assault &amp; Battery</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Defense of assault, battery, and domestic assault charges in Chesterfield GDC and J&DR Court with an understanding of how Chesterfield prosecutors approach these cases.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/theft-larceny/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Theft &amp; Larceny</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Chesterfield's retail concentration along Midlothian Turnpike generates numerous larceny cases. We work to minimize consequences and protect your record.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/license-suspension/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">License Suspension</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Assisting Chesterfield clients in petitioning for restricted driving privileges and navigating the DMV reinstatement process.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/felony/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Felony Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Serious felony charges in Chesterfield Circuit Court demand experienced counsel who has prepared and tried cases in this specific courthouse.</p>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/misdemeanor/' ) ); ?>" class="card" style="padding: 1.5rem; display: block; text-decoration: none; color: inherit;">
                            <h3 style="font-size: 1rem; color: var(--primary); margin-bottom: 0.5rem;">Misdemeanor Defense</h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Chesterfield misdemeanor convictions create permanent records that affect employment and housing. Every charge deserves a thorough defense.</p>
                        </a>
                    </div>
                </div>

                <!-- Why Alexander Law in Chesterfield -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Local Expertise</span>
                    <h2 style="margin-top: 0.75rem;">Why Local Court Knowledge Matters in Chesterfield</h2>
                    <div class="grid md-grid-cols-2 gap-6" style="margin-top: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Decades of Chesterfield Practice</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Mr. Alexander has appeared in Chesterfield GDC and Circuit Court for over 30 years. He knows the court's procedures, the rotating judges, and the expectations of Chesterfield's prosecutors in a way that only consistent local practice produces.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Understanding Chesterfield's Growth</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Chesterfield's rapid growth has meant more traffic, more enforcement, and more complex criminal cases. An attorney who has watched the county develop and seen how its courts have evolved brings an institutional perspective that benefits clients.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Former Prosecutor Insight</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">As a former prosecutor, Standish Alexander understands how the Chesterfield Commonwealth's Attorney's Office evaluates cases, what evidence they prioritize, and where defense arguments are most persuasive. That prosecutorial perspective makes him a more effective defense attorney.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 44px; height: 44px; background: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">Commuter-Focused Representation</h3>
                                <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">Many Chesterfield clients are working professionals with careers and reputations to protect. A DUI or reckless driving conviction can affect professional licenses, security clearances, and employment. We take those stakes seriously and work accordingly.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div style="margin-bottom: 2.5rem;" id="faq">
                    <span class="hero-badge">Common Questions</span>
                    <h2 style="margin-top: 0.75rem;">Frequently Asked Questions — Chesterfield County Courts</h2>

                    <div style="margin-top: 1.5rem;">
                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Where is Chesterfield General District Court located?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Chesterfield General District Court is at <strong>9500 Courthouse Road, Chesterfield, VA 23832</strong>, within the Chesterfield Courts Complex. The Circuit Court and Juvenile and Domestic Relations Court are located in the same complex. The facility is in the county seat area of Chesterfield, accessible from Courthouse Road off Route 10. Court generally begins at 9:00 a.m., and the docket can be substantial given the county's large population.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Is reckless driving common on Route 288 in Chesterfield?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Route 288 is one of the most actively patrolled roads in Chesterfield County. The highway's design — wide lanes, gradual curves, high posted speed limits — encourages higher speeds, and Chesterfield Police Department monitors it closely with both patrol units and speed enforcement operations. In Virginia, reckless driving by speed (driving 20+ mph over the posted limit or exceeding 85 mph regardless of the limit) is a Class 1 misdemeanor — the same level as a first-offense DUI. Route 288 reckless driving charges are processed in Chesterfield General District Court, where local knowledge of judicial expectations and prosecutorial standards is invaluable.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">How does Chesterfield handle first-offense DUI cases?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Virginia law imposes mandatory minimums on DUI convictions regardless of which county hears the case: a fine of at least $250, a one-year license suspension, mandatory VASAP enrollment, and possible jail time for elevated BAC readings. However, the latitude a Chesterfield judge exercises in applying those minimums — and the disposition options the Chesterfield Commonwealth's Attorney's Office will consider — depends heavily on the specific facts, the strength of the evidence, and the defendant's background. An attorney with longstanding experience in Chesterfield courts can provide an honest assessment of what outcomes are realistic for your specific situation.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Does Mr. Alexander appear in Chesterfield courts regularly?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Yes. Standish Alexander has appeared regularly in Chesterfield General District Court and Chesterfield Circuit Court for over 30 years. His sustained presence in these courts has given him detailed familiarity with how the judges hear arguments, how the Commonwealth's Attorney's Office evaluates and prosecutes different types of charges, and how to navigate the practical aspects of appearing in Chesterfield courts effectively.</p>
                            </div>
                        </div>

                        <div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; overflow: hidden;">
                            <div style="padding: 1.25rem 1.5rem; background: var(--muted);">
                                <h3 style="font-size: 1rem; margin: 0; color: var(--primary);">Can a Chesterfield drug charge be expunged?</h3>
                            </div>
                            <div style="padding: 1.25rem 1.5rem;">
                                <p style="margin: 0; line-height: 1.7;">Virginia significantly expanded its expungement law in 2021 and again with subsequent reforms. Charges that were dismissed, nolle prossed, or resulted in acquittal are generally eligible for expungement. Some misdemeanor convictions, including simple possession of marijuana and certain other substances, may also now be eligible under specific conditions. Whether a particular Chesterfield drug charge qualifies for expungement depends on the specific offense, the disposition, the time elapsed, and the client's overall criminal history. Mr. Alexander evaluates these questions during a free consultation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Also Serve -->
                <div style="margin-bottom: 2.5rem;">
                    <span class="hero-badge">Service Area</span>
                    <h2 style="margin-top: 0.75rem;">Areas We Also Serve</h2>
                    <p style="line-height: 1.8;">Alexander Law Office serves clients throughout Central Virginia. If your charge occurred outside Chesterfield County, we handle cases in these surrounding jurisdictions:</p>
                    <div class="grid md-grid-cols-2 lg-grid-cols-4 gap-4" style="margin-top: 1.25rem;">
                        <a href="<?php echo esc_url( home_url( '/richmond-va/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Richmond, VA</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Richmond City Courts</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/henrico-county/' ) ); ?>" class="card" style="padding: 1.25rem; text-align: center; text-decoration: none; color: inherit; display: block;">
                            <strong style="color: var(--primary); display: block; margin-bottom: 0.25rem;">Henrico County</strong>
                            <span style="font-size: 0.8rem; color: var(--text-light);">Henrico GDC &amp; Circuit Court</span>
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
                    <p>Speak with Standish Alexander about your Chesterfield case today.</p>
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
                            30+ Years in Chesterfield Courts
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
                    <h3>Chesterfield Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; color: var(--text-light);">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Chesterfield General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Chesterfield Circuit Court</li>
                        <li style="padding: 0.5rem 0;">Chesterfield J&amp;DR District Court</li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white;">Facing Charges in Chesterfield? Call an Attorney Who Knows These Courts.</h2>
        <p style="max-width: 650px; margin: 0 auto 2rem; opacity: 0.9;">Standish Alexander has practiced in Chesterfield County courts for over 30 years. A DUI or reckless driving conviction in Chesterfield follows you permanently. Call now for a free, confidential consultation.</p>
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
