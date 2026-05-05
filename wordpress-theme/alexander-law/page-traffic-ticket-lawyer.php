<?php
/**
 * Template Name: Traffic Ticket Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $title ) {
    $title['title'] = 'Traffic Ticket Lawyer Richmond VA | Alexander Law';
    return $title;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Fighting a speeding ticket or traffic violation in Richmond? Protect your record and insurance rates. 30+ years defending Virginia drivers. Call (804) 355-0016.">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LegalService",
    "name": "Alexander Law Office",
    "description": "Traffic ticket defense attorney in Richmond, VA. 30+ years protecting Virginia drivers' records and insurance rates from speeding tickets and traffic violations.",
    "url": "https://standishalexander.com/traffic-ticket-lawyer-richmond-va/",
    "telephone": "+18043550016",
    "priceRange": "Free Consultation",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Richmond",
        "addressRegion": "VA",
        "addressCountry": "US"
    },
    "areaServed": [
        { "@type": "City", "name": "Richmond" },
        { "@type": "AdministrativeArea", "name": "Henrico County" },
        { "@type": "AdministrativeArea", "name": "Chesterfield County" },
        { "@type": "AdministrativeArea", "name": "Hanover County" }
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Legal Services",
        "itemListElement": [
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Speeding Ticket Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Traffic Violation Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "DMV Point Reduction" } }
        ]
    },
    "mainEntityOfPage": {
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Is it worth getting a lawyer for a traffic ticket in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Insurance rate increases from a single conviction often exceed $1,000 per year. Legal fees are frequently less than what you'd pay in higher premiums over the next 3 to 5 years — and avoiding the conviction protects your record permanently."
                }
            },
            {
                "@type": "Question",
                "name": "Can a traffic ticket be dismissed in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. An attorney can often negotiate a reduction to a lesser charge, a dismissal based on deficient evidence, or a deferral that keeps a conviction off your record entirely."
                }
            },
            {
                "@type": "Question",
                "name": "How long do traffic tickets stay on your Virginia DMV record?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most traffic violations remain on your Virginia DMV record for 5 years from the date of the offense. Demerit points are assessed separately and have varying timeframes depending on the violation."
                }
            },
            {
                "@type": "Question",
                "name": "What happens if I just pay my Virginia traffic ticket?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Paying the ticket is an admission of guilt. You accept all demerit points, the conviction on your DMV record, and any resulting insurance rate increase. There is no negotiation after payment."
                }
            },
            {
                "@type": "Question",
                "name": "Can a traffic ticket affect my job?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes — particularly if you drive for work, hold a commercial driver's license, or work in a field where your driving record is reviewed. CDL holders face especially serious consequences from any conviction."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between a traffic ticket and reckless driving in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Most traffic tickets are civil infractions that result in demerit points and fines. Reckless driving is a Class 1 misdemeanor — a criminal charge. It creates a permanent criminal record, can result in jail time, and is handled differently in court."
                }
            }
        ]
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
            <span class="hero-badge">Traffic Ticket Defense</span>
            <h1>Traffic Ticket Lawyer Richmond VA</h1>
            <p class="page-hero-subtitle">A Virginia traffic ticket is never "just a ticket." Points stack. Insurance rates climb. Licenses get suspended. Don't pay it and forget it — call us first.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 2rem;">
                <a href="tel:8043550016" class="btn btn-secondary btn-lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    (804) 355-0016
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Main Content + Sidebar -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 2rem;">

            <!-- Main Content -->
            <div style="grid-column: span 2;">
                <article class="post-article">
                    <div class="entry-content">

                        <h2>Paying That Ticket Is an Admission of Guilt</h2>
                        <p>It happens constantly. Someone gets a speeding ticket on I-95, figures it's easier to just pay and be done with it, and six months later their insurance bill has jumped $1,200 a year. They didn't realize they had options.</p>
                        <p>In Virginia, paying a traffic ticket is a guilty plea. There is no "points won't transfer" exception if you're from out of state — Virginia shares conviction data with other states. There is no expiration that removes the conviction. It is on your record, and insurance companies use it to raise your rates at every renewal cycle.</p>
                        <p>The smarter move is to call before you pay. In many cases, an experienced attorney can negotiate a lesser charge, a deferral, or a dismissal — outcomes that protect your record and your wallet.</p>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Virginia Traffic Violations We Handle</h2>

                        <div class="grid md-grid-cols-2" style="gap: 1.25rem; margin: 1.5rem 0;">
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--primary);">Speeding</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">1–9 mph over: 3 points. 10–19 mph over: 4 points. 20+ mph over: reckless driving territory — a criminal charge. The line matters.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--primary);">Failure to Obey Traffic Signal</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">Includes red-light camera tickets and officer-issued citations. 4 demerit points, with potential insurance impact.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--primary);">Driving on a Suspended License</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">Under § 46.2-301, this is a <strong>Class 1 misdemeanor</strong> — not a traffic ticket. It requires criminal defense representation, not just a fine payment.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--primary);">Hit and Run</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">Under § 46.2-894, leaving the scene of an accident is a serious criminal charge — felony in injury cases. Immediate legal help is essential.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--primary);">Following Too Closely</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">4 demerit points. Frequently charged after rear-end accidents. Often challengeable when evidence is limited to the officer's subjective judgment.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem; color: var(--primary);">Improper Driving / Lane Change</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">3 demerit points. Often a negotiated landing spot when other charges are reduced — our goal is to get you here or better.</p>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Understanding Virginia's DMV Point System</h2>
                        <p>Virginia uses a demerit point system that accumulates with each conviction. Here is what the thresholds look like and what happens when you cross them:</p>

                        <div style="overflow-x: auto; margin: 1.5rem 0;">
                            <table style="width: 100%; border-collapse: collapse; font-size: 0.9rem;">
                                <thead>
                                    <tr style="background: var(--primary); color: white;">
                                        <th style="padding: 0.75rem 1rem; text-align: left;">Point Level</th>
                                        <th style="padding: 0.75rem 1rem; text-align: left;">Common Violations</th>
                                        <th style="padding: 0.75rem 1rem; text-align: left;">Record Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom: 1px solid var(--gray-200);">
                                        <td style="padding: 0.75rem 1rem;"><strong>3 points</strong></td>
                                        <td style="padding: 0.75rem 1rem;">Minor speeding, improper lane change</td>
                                        <td style="padding: 0.75rem 1rem;">5 years</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid var(--gray-200); background: #fafafa;">
                                        <td style="padding: 0.75rem 1rem;"><strong>4 points</strong></td>
                                        <td style="padding: 0.75rem 1rem;">Failure to yield, following too closely, running a red light</td>
                                        <td style="padding: 0.75rem 1rem;">5 years</td>
                                    </tr>
                                    <tr style="border-bottom: 1px solid var(--gray-200);">
                                        <td style="padding: 0.75rem 1rem;"><strong>6 points</strong></td>
                                        <td style="padding: 0.75rem 1rem;">Reckless driving, DUI</td>
                                        <td style="padding: 0.75rem 1rem;">11 years</td>
                                    </tr>
                                    <tr style="background: #fff8f8;">
                                        <td style="padding: 0.75rem 1rem;"><strong>−11 points total</strong></td>
                                        <td style="padding: 0.75rem 1rem;" colspan="2"><strong style="color: var(--primary);">Automatic 90-day license suspension</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p style="font-size: 0.9rem; color: var(--text-light); font-style: italic;">Insurance companies are not bound by the same thresholds. Many carriers review your record at every renewal and raise rates for any conviction — even a single 3-point violation.</p>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Why Fighting Your Ticket Is Almost Always Worth It</h2>
                        <p>The math is simple. If your insurer raises your rate $100 per month after a conviction, that is $1,200 per year — sustained for 3 to 5 years. Legal fees for traffic ticket defense are typically a fraction of that.</p>
                        <p>Beyond insurance, there are reasons to fight that have nothing to do with money:</p>

                        <ul style="list-style: none; padding: 0; margin: 1.5rem 0;">
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                <span><strong>CDL holders</strong> — A single moving violation conviction can jeopardize a commercial driver's license. Federal regulations are stricter than state rules.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                <span><strong>Drivers near the suspension threshold</strong> — If you already have points on your record, one more conviction could push you into automatic suspension territory.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                <span><strong>Employment considerations</strong> — Jobs that require driving clearances, professional licenses, or security credentials may be affected by your driving record.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                <span><strong>Out-of-state drivers</strong> — Virginia convictions transfer to your home state. There is no safe harbor for non-residents.</span>
                            </li>
                        </ul>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Our Defense Strategy</h2>
                        <p>There is no one-size approach, but there is a consistent framework we apply to every traffic case:</p>

                        <ol style="padding-left: 1.5rem; line-height: 1.9;">
                            <li style="margin-bottom: 0.75rem;"><strong>Review the officer's notes and equipment.</strong> What device was used? Was it calibrated? Was the officer certified to operate it? These details matter more than most people realize.</li>
                            <li style="margin-bottom: 0.75rem;"><strong>Challenge radar and LIDAR readings.</strong> Speed measurement equipment is subject to error. We obtain calibration records and look for procedural failures in how the reading was taken.</li>
                            <li style="margin-bottom: 0.75rem;"><strong>Negotiate for reduction or dismissal.</strong> Most traffic cases resolve through negotiation. An experienced attorney has credibility with prosecutors that an unrepresented driver simply does not have.</li>
                            <li><strong>Go to trial when the evidence warrants it.</strong> Some cases should be contested. We are prepared to do exactly that.</li>
                        </ol>

                        <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white; margin-top: 2.5rem;">
                            <h3 style="color: white; margin-bottom: 0.75rem;">Protect Your Driving Record — Call Before You Pay That Ticket</h3>
                            <p style="opacity: 0.9; margin-bottom: 1.5rem;">Once you pay, the case is closed and the conviction is on your record. That window to fight it is open right now. Use it.</p>
                            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                                <a href="tel:8043550016" class="btn btn-secondary">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                    (804) 355-0016
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white">Free Consultation</a>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Frequently Asked Questions</h2>

                        <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Is it worth getting a lawyer for a traffic ticket in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes, in most cases. Insurance rate increases from a single conviction frequently exceed legal fees over the life of the policy surcharge. Beyond the financial calculation, a lawyer can often achieve outcomes — reduction, dismissal, deferral — that you simply cannot negotiate on your own.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Can a traffic ticket be dismissed in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes. Dismissal is possible when evidence is deficient, when procedural errors occurred, or when a judge exercises discretion after hearing mitigation. Reduction to a lesser charge is often more readily available than full dismissal, but both outcomes are regularly achieved by experienced counsel.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">How long does a traffic ticket stay on my Virginia DMV record?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Most moving violations remain on your Virginia DMV record for 5 years from the conviction date. Six-point violations like reckless driving remain for 11 years. Insurance companies typically look back 3 to 5 years when calculating your rate, but the conviction does not vanish from the record in that timeframe.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">What happens if I just pay my Virginia traffic ticket?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Paying is a guilty plea. The demerit points are assessed, the conviction goes on your record, and your insurance company is notified at your next renewal. There is no appeal available after payment and no way to remove the conviction after the fact.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Can a traffic ticket affect my employment?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes — particularly for CDL holders, delivery drivers, transportation workers, and anyone in a job that requires a clean driving record as a condition of employment. Even non-driving jobs in industries like insurance, finance, and government may run DMV checks as part of background screening.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">What is the difference between a traffic ticket and reckless driving in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Most traffic violations are civil infractions that result in fines and demerit points but no criminal record. Reckless driving is a Class 1 misdemeanor — a crime. It carries the possibility of jail time, a $2,500 fine, 6 demerit points for 11 years, and a permanent criminal record. The two categories require completely different legal approaches.</p>
                            </div>

                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Related Practice Areas</h2>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0; display: flex; flex-wrap: wrap; gap: 0.75rem;">
                            <li><a href="<?php echo esc_url( home_url( '/reckless-driving-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">Reckless Driving Defense</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/dui-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">DUI / DWI Defense</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/license-suspension-lawyer-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">License Suspension</a></li>
                        </ul>

                    </div>
                </article>
            </div><!-- /main content -->

            <!-- Sidebar -->
            <aside class="blog-sidebar">

                <div class="sidebar-widget widget-cta">
                    <h3>Free Consultation</h3>
                    <p>Speak with an experienced attorney today.</p>
                    <a href="tel:8043550016" class="widget-phone">(804) 355-0016</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width: 100%; margin-top: 1rem;">Contact Us</a>
                </div>

                <div class="sidebar-widget">
                    <h3>Practice Areas</h3>
                    <ul class="category-list">
                        <li>
                            <a href="<?php echo esc_url( home_url( '/reckless-driving-lawyer-richmond-va/' ) ); ?>">
                                <span>Reckless Driving</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/criminal-defense-lawyer-richmond-va/' ) ); ?>">
                                <span>Criminal Defense</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/dui-lawyer-richmond-va/' ) ); ?>">
                                <span>DUI / DWI Defense</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/license-suspension-lawyer-va/' ) ); ?>">
                                <span>License Suspension</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>">
                                <span>All Practice Areas</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Why Choose Us</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">30+ years defending Virginia drivers</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Former Commonwealth's Attorney — inside knowledge</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Familiar with Richmond-area courts and prosecutors</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Free consultation — no obligation</span>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Richmond General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Henrico County Courts</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Chesterfield County Courts</li>
                        <li style="padding: 0.5rem 0;">Hanover County Courts</li>
                    </ul>
                </div>

            </aside><!-- /sidebar -->

        </div>
    </div>
</section>

<!-- Bottom CTA -->
<section class="section" style="background: var(--primary); color: white;">
    <div class="container text-center">
        <h2 style="color: white;">Call Before You Pay That Ticket</h2>
        <p style="max-width: 600px; margin: 0 auto 2rem; opacity: 0.9;">Once you pay, the window closes. Before you admit guilt and accept the points, insurance hike, and record entry — call us. The consultation is free. The peace of mind is worth it.</p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="tel:8043550016" class="btn btn-secondary btn-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                (804) 355-0016
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">Schedule a Free Consultation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
