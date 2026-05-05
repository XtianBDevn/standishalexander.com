<?php
/**
 * Template Name: Reckless Driving Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $title ) {
    $title['title'] = 'Reckless Driving Lawyer Richmond VA | Alexander Law';
    return $title;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Reckless driving in Virginia is a criminal charge, not a traffic ticket. Fight it with Standish Alexander — 30+ years, former prosecutor. Free consult. (804) 355-0016">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LegalService",
    "name": "Alexander Law Office",
    "description": "Reckless driving defense attorney in Richmond, VA. Former prosecutor with 30+ years of experience handling Virginia reckless driving cases.",
    "url": "https://standishalexander.com/reckless-driving-lawyer-richmond-va/",
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
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Reckless Driving Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Speed Reduction Negotiations" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Traffic Criminal Defense" } }
        ]
    },
    "mainEntityOfPage": {
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Is reckless driving a criminal charge in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Reckless driving in Virginia is a Class 1 misdemeanor — the same category as assault. It is not a traffic ticket. A conviction creates a permanent criminal record."
                }
            },
            {
                "@type": "Question",
                "name": "What speed triggers reckless driving in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Virginia Code § 46.2-862, reckless driving applies if you drive 20 mph or more over the posted speed limit, or at any speed of 85 mph or higher regardless of the limit."
                }
            },
            {
                "@type": "Question",
                "name": "Can reckless driving be reduced in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. In many cases, an experienced attorney can negotiate a reduction to 'improper driving,' which is a traffic infraction rather than a criminal charge. Dismissal is also possible when evidence is weak."
                }
            },
            {
                "@type": "Question",
                "name": "Will reckless driving affect my job?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. A reckless driving conviction appears on criminal background checks, not just your DMV record. Employers, licensing boards, and security clearance agencies all may see it."
                }
            },
            {
                "@type": "Question",
                "name": "Do I need a lawyer for a Virginia reckless driving charge?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Strongly yes. Because it is a criminal charge, the consequences of a conviction are permanent. A skilled lawyer can often get the charge reduced or dismissed entirely."
                }
            },
            {
                "@type": "Question",
                "name": "How does a former prosecutor help with reckless driving?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A former prosecutor knows exactly what arguments work with the Commonwealth's Attorney and what weaknesses to target in the state's case — experience that a purely defense-side attorney simply doesn't have."
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
            <span class="hero-badge">Reckless Driving Defense</span>
            <h1>Reckless Driving Lawyer Richmond VA</h1>
            <p class="page-hero-subtitle">Virginia reckless driving is a Class 1 misdemeanor — the same level as assault. It is not a speeding ticket. One court date can follow you forever. Call before you make any decisions.</p>
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

                        <h2>This Is Not a Traffic Ticket. Treat It Like a Crime — Because It Is.</h2>
                        <p>Most people get the reckless driving summons, glance at it, and assume they'll just pay a fine and move on. That assumption is a mistake that can cost you your record, your job, and in the most serious cases, your freedom.</p>
                        <p>Virginia is one of the toughest states in the country on reckless driving. What other states treat as a moving violation, Virginia treats as a <strong>Class 1 misdemeanor</strong> — the same criminal category as assault and battery. Conviction means a permanent criminal record visible on background checks for every employer, landlord, and licensing board that looks you up.</p>
                        <p>Standish Alexander is a former Commonwealth's Attorney. He knows how prosecutors evaluate these cases, what evidence they rely on, and where the weak points are. That perspective is something most defense attorneys simply cannot offer.</p>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Virginia Reckless Driving Law (§ 46.2-852)</h2>
                        <p>Virginia's reckless driving statute is broader than most people realize. You do not have to be driving dangerously in an obvious way to be charged. The most common triggers:</p>

                        <div class="grid md-grid-cols-2" style="gap: 1.5rem; margin: 1.5rem 0;">
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.75rem; color: var(--primary);">Speed-Based Reckless Driving</h3>
                                <p style="font-size: 0.9rem; margin: 0;">Driving <strong>20 mph or more over the posted limit</strong>, or driving at <strong>any speed of 85 mph or more</strong> — regardless of the speed limit on that road.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.75rem; color: var(--primary);">General Reckless Driving</h3>
                                <p style="font-size: 0.9rem; margin: 0;">Operating any vehicle in a manner that endangers life, limb, or property — a subjective standard that gives officers significant discretion.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.75rem; color: var(--primary);">Racing</h3>
                                <p style="font-size: 0.9rem; margin: 0;">Participating in or aiding any race, speed competition, or acceleration contest on a public highway.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.75rem; color: var(--primary);">Passing a School Bus</h3>
                                <p style="font-size: 0.9rem; margin: 0;">Passing a stopped school bus with its lights flashing — a charge that judges in Richmond-area courts treat with particular severity.</p>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>What a Conviction Costs You</h2>
                        <p>These are not hypothetical penalties. Virginia courts impose them regularly, particularly at higher speeds:</p>

                        <ul style="list-style: none; padding: 0; margin: 1.5rem 0;">
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem; padding: 1rem; background: #fff8f8; border-left: 4px solid var(--primary); border-radius: 0 0.5rem 0.5rem 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                <div><strong>Permanent criminal record</strong> — visible on standard background checks. Not a DMV record. A criminal record.</div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem; padding: 1rem; background: #fff8f8; border-left: 4px solid var(--primary); border-radius: 0 0.5rem 0.5rem 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                <div><strong>Up to 12 months in jail</strong> — Judges in Richmond-area courts regularly impose active jail time for speeds of 90 mph and above.</div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem; padding: 1rem; background: #fff8f8; border-left: 4px solid var(--primary); border-radius: 0 0.5rem 0.5rem 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                <div><strong>Up to $2,500 fine</strong></div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem; padding: 1rem; background: #fff8f8; border-left: 4px solid var(--primary); border-radius: 0 0.5rem 0.5rem 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                <div><strong>6 DMV demerit points</strong> — stay on your record for 11 years. Insurance companies will find them.</div>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 0.75rem; padding: 1rem; background: #fff8f8; border-left: 4px solid var(--primary); border-radius: 0 0.5rem 0.5rem 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                                <div><strong>Possible 6-month license suspension</strong></div>
                            </li>
                        </ul>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Richmond Area Courts That Handle Reckless Driving</h2>
                        <p>Where your case is heard matters. Each court has its own tendencies, and knowing the judges and local prosecutors is a genuine advantage.</p>

                        <div style="display: grid; gap: 1rem; margin: 1.5rem 0;">
                            <div class="card" style="padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <div>
                                    <strong>Richmond General District Court</strong>
                                    <span style="font-size: 0.875rem; color: var(--text-light); display: block;">400 N 9th Street, Richmond, VA 23219</span>
                                </div>
                            </div>
                            <div class="card" style="padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <div>
                                    <strong>Henrico General District Court</strong>
                                    <span style="font-size: 0.875rem; color: var(--text-light); display: block;">4301 E Parham Rd, Henrico, VA 23228</span>
                                </div>
                            </div>
                            <div class="card" style="padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <div>
                                    <strong>Chesterfield General District Court</strong>
                                    <span style="font-size: 0.875rem; color: var(--text-light); display: block;">9500 Courthouse Rd, Chesterfield, VA 23832</span>
                                </div>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>How We Defend Reckless Driving Cases</h2>
                        <p>There is no single approach. The strategy depends on the facts — the speed reading, the equipment used, your driving record, the jurisdiction, and the judge. Here is how we build your defense:</p>

                        <ol style="padding-left: 1.5rem; line-height: 1.9;">
                            <li style="margin-bottom: 0.75rem;"><strong>Examine calibration records and operator certification.</strong> Radar and LIDAR readings are only as reliable as the equipment and the officer using it. Calibration logs and certification paperwork are obtained immediately.</li>
                            <li style="margin-bottom: 0.75rem;"><strong>Challenge the accuracy of the speed reading.</strong> Equipment malfunction, tuning fork errors, and officer training deficiencies are all viable angles.</li>
                            <li style="margin-bottom: 0.75rem;"><strong>Present mitigating evidence.</strong> A clean record, GPS data showing a different speed, evidence of necessity — all can move a judge or change what a prosecutor offers.</li>
                            <li style="margin-bottom: 0.75rem;"><strong>Negotiate for a reduction to improper driving.</strong> Virginia Code § 46.2-869 gives judges the discretion to reduce reckless driving to improper driving — a traffic infraction, not a crime, carrying 3 points instead of 6 and no criminal record.</li>
                            <li><strong>Take it to trial if necessary.</strong> Sometimes the best outcome requires contesting the charge in court. We are trial lawyers, not just negotiators.</li>
                        </ol>

                        <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white; margin-top: 2.5rem;">
                            <h3 style="color: white; margin-bottom: 0.75rem;">Don't Treat Reckless Driving Like a Speeding Ticket — It's a Crime</h3>
                            <p style="opacity: 0.9; margin-bottom: 1.5rem;">Every day you wait is a day less to build your defense. Your court date is not flexible. Call Alexander Law Office now for a free consultation and find out exactly where you stand.</p>
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
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Is reckless driving a criminal charge in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes — it is a Class 1 misdemeanor, the most serious category of misdemeanor in Virginia. It carries the same classification as assault and battery. A conviction creates a permanent criminal record, not just a DMV notation.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">What speed triggers a reckless driving charge in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Under § 46.2-862, reckless driving applies if you were traveling 20 mph or more over the posted speed limit, or at any speed of 85 mph or higher — regardless of the speed limit on that stretch of road.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Can reckless driving be reduced to a lesser charge in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">In many cases, yes. The most common favorable outcome is a reduction to "improper driving" under § 46.2-869 — a traffic infraction that carries 3 demerit points, no criminal record, and no possibility of jail. Dismissal is also achievable when evidence is deficient.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Will reckless driving affect my job?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes. Because it is a criminal conviction, it appears on criminal background checks — the kind run by employers, professional licensing boards, federal agencies, and landlords. It is not hidden in your driving record alone.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Do I need a lawyer for a Virginia reckless driving charge?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Strongly yes. This is a criminal matter with permanent consequences. An experienced attorney may be able to get the charge reduced or dismissed, outcomes that are very difficult to achieve on your own in court.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">How does hiring a former prosecutor help with my reckless driving case?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">A former prosecutor knows exactly how the Commonwealth's Attorney builds these cases and what arguments carry weight in plea negotiations. That inside knowledge — of how prosecutors think, what they prioritize, and what they'll accept — is not something a defense-only attorney can replicate.</p>
                            </div>

                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Related Practice Areas</h2>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0; display: flex; flex-wrap: wrap; gap: 0.75rem;">
                            <li><a href="<?php echo esc_url( home_url( '/dui-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">DUI Defense</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/traffic-ticket-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">Traffic Ticket Defense</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/license-suspension-lawyer-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">License Suspension</a></li>
                        </ul>

                    </div>
                </article>
            </div><!-- /main content -->

            <!-- Sidebar -->
            <aside class="blog-sidebar">

                <div class="sidebar-widget widget-cta">
                    <h3>Free Consultation</h3>
                    <p>Speak with an experienced attorney today. Your court date is coming — don't wait.</p>
                    <a href="tel:8043550016" class="widget-phone">(804) 355-0016</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width: 100%; margin-top: 1rem;">Contact Us</a>
                </div>

                <div class="sidebar-widget">
                    <h3>Practice Areas</h3>
                    <ul class="category-list">
                        <li>
                            <a href="<?php echo esc_url( home_url( '/traffic-ticket-lawyer-richmond-va/' ) ); ?>">
                                <span>Traffic Ticket Defense</span>
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
                            <span style="font-size: 0.875rem;">30+ years of criminal defense experience</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Former Commonwealth's Attorney — knows both sides</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Deep familiarity with Richmond-area courts and judges</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Free initial consultation — no obligation</span>
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
        <h2 style="color: white;">Your Court Date Is Coming. Act Now.</h2>
        <p style="max-width: 600px; margin: 0 auto 2rem; opacity: 0.9;">A reckless driving conviction in Virginia is permanent. The time to fight it is before you walk into that courtroom — not after. Call Alexander Law Office today.</p>
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
