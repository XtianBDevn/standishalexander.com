<?php
/**
 * Template Name: Criminal Defense Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $title ) {
    $title['title'] = 'Criminal Defense Lawyer Richmond VA | Alexander Law';
    return $title;
}, 10, 1 );

add_action( 'wp_head', function() { ?>
<meta name="description" content="Facing criminal charges in Richmond? Standish Alexander — former Commonwealth's Attorney, 30+ years. Aggressive defense for misdemeanor &amp; felony cases. Free consult.">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LegalService",
    "name": "Alexander Law Office",
    "description": "Criminal defense attorney in Richmond, VA. Former Commonwealth's Attorney with 30+ years handling misdemeanor and felony cases throughout Central Virginia.",
    "url": "https://standishalexander.com/criminal-defense-lawyer-richmond-va/",
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
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Misdemeanor Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Felony Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "DUI Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Drug Charge Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Assault Defense" } },
            { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Expungements" } }
        ]
    },
    "mainEntityOfPage": {
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the difference between a misdemeanor and a felony in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "A misdemeanor in Virginia carries up to 12 months in jail and a $2,500 fine. A felony carries at least one year in a state correctional facility, with sentences ranging to life in prison depending on the class. Both create permanent records; felony convictions also result in the loss of civil rights including voting and firearm ownership."
                }
            },
            {
                "@type": "Question",
                "name": "Can criminal charges be expunged in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Virginia's expungement laws are limited. You may petition for expungement if charges were dismissed, if you were found not guilty, or if you received an absolute pardon. Convictions are generally not eligible for expungement in Virginia. An attorney can evaluate whether your specific situation qualifies."
                }
            },
            {
                "@type": "Question",
                "name": "Do I need a lawyer if I plan to plead guilty?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. An attorney can negotiate plea terms that may result in a lesser charge, reduced sentence, or alternative disposition. Pleading guilty without representation means accepting whatever the Commonwealth offers with no negotiation."
                }
            },
            {
                "@type": "Question",
                "name": "How long does a criminal case take in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Misdemeanor cases in General District Court often resolve in one to three court dates. Felony cases, which involve preliminary hearings and Circuit Court proceedings, typically take several months to over a year depending on the complexity of the charges."
                }
            },
            {
                "@type": "Question",
                "name": "What are my rights after an arrest in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You have the right to remain silent and the right to an attorney. Exercise both immediately. Do not answer questions from law enforcement without an attorney present. Anything you say can and will be used against you in court."
                }
            },
            {
                "@type": "Question",
                "name": "Will a criminal conviction affect my employment in Virginia?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Most employers conduct criminal background checks, and a conviction — misdemeanor or felony — will appear. Professional licenses, security clearances, government employment, and housing applications are all commonly affected by criminal convictions."
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
            <span class="hero-badge">Criminal Defense</span>
            <h1>Criminal Defense Lawyer Richmond VA</h1>
            <p class="page-hero-subtitle">A criminal charge can change your life permanently. You need someone who has been on both sides of the courtroom — and knows exactly how the prosecution builds its case.</p>
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

                        <h2>What You Need Is Someone Who Knows How the Other Side Thinks</h2>
                        <p>Most criminal defense attorneys have only ever seen the inside of a courtroom from one direction. Standish Alexander has seen it from both. As a former Commonwealth's Attorney, he prosecuted cases. He knows how charges are evaluated, how evidence is packaged, and what arguments actually move prosecutors — versus what falls flat.</p>
                        <p>That experience is not theoretical. It translates directly into how your case is handled — what motions are filed, how negotiations are conducted, and what weaknesses in the state's case get targeted first.</p>
                        <p>A criminal conviction in Virginia follows you permanently. It shows up on background checks. It affects employment, housing, professional licenses, and in felony cases, civil rights including the right to vote and own a firearm. The stakes justify having the best representation you can find.</p>

                        <!-- Differentiators -->
                        <div class="grid md-grid-cols-2" style="gap: 1.25rem; margin: 2rem 0;">
                            <div class="card" style="padding: 1.5rem;">
                                <div style="width: 40px; height: 40px; background: var(--primary); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Former Commonwealth's Attorney</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">He built cases as a prosecutor. Now he dismantles them. That dual perspective is rare — and it is a genuine advantage in every negotiation and every trial.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <div style="width: 40px; height: 40px; background: var(--primary); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                </div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">30+ Years in Criminal Defense</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">Decades of practice in Richmond-area courts. He knows the judges, the prosecutors, and the tendencies of local jurisdictions in ways a newer attorney cannot.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <div style="width: 40px; height: 40px; background: var(--primary); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                </div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Direct Attorney Attention</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">You speak with your attorney, not a paralegal. Your case is handled by the person you hired — not passed down to whoever has time.</p>
                            </div>
                            <div class="card" style="padding: 1.5rem;">
                                <div style="width: 40px; height: 40px; background: var(--primary); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                </div>
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Misdemeanors Through Serious Felonies</h3>
                                <p style="font-size: 0.875rem; margin: 0; color: var(--text-light);">From a first-offense assault charge to a serious felony indictment, Alexander Law handles the full range of criminal defense work in Virginia.</p>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Virginia Criminal Charge Categories</h2>
                        <p>Understanding how Virginia categorizes criminal offenses helps set expectations about potential consequences before you ever walk into court.</p>

                        <div style="display: grid; gap: 1rem; margin: 1.5rem 0;">
                            <div style="padding: 1.25rem 1.5rem; border-left: 4px solid var(--secondary); background: #fafafa; border-radius: 0 0.5rem 0.5rem 0;">
                                <strong>Misdemeanors (Class 1–4)</strong>
                                <p style="margin: 0.5rem 0 0; font-size: 0.9rem; color: var(--text-light);">Class 1 is the most serious — up to 12 months in jail and a $2,500 fine. Class 2 through 4 carry lesser maximums. All misdemeanor convictions create a permanent criminal record. Examples: DUI, reckless driving, assault and battery, petty larceny, possession of marijuana (certain amounts).</p>
                            </div>
                            <div style="padding: 1.25rem 1.5rem; border-left: 4px solid var(--primary); background: #fafafa; border-radius: 0 0.5rem 0.5rem 0;">
                                <strong>Felonies (Class 1–6)</strong>
                                <p style="margin: 0.5rem 0 0; font-size: 0.9rem; color: var(--text-light);">Class 1 felonies carry life imprisonment or the death penalty. Class 6 (the least serious) carries 1 to 5 years. All felony convictions result in loss of voting rights, firearm rights, and may affect professional licenses. Examples: drug distribution, grand larceny, robbery, aggravated assault, burglary.</p>
                            </div>
                            <div style="padding: 1.25rem 1.5rem; border-left: 4px solid var(--secondary); background: #fafafa; border-radius: 0 0.5rem 0.5rem 0;">
                                <strong>Traffic-Related Criminal Charges</strong>
                                <p style="margin: 0.5rem 0 0; font-size: 0.9rem; color: var(--text-light);">DUI/DWI, reckless driving, driving on a suspended license, and hit and run are all criminal charges — not civil infractions. They require the same aggressive defense as any other criminal matter.</p>
                            </div>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Criminal Charges We Defend</h2>

                        <div class="grid md-grid-cols-2" style="gap: 0.75rem; margin: 1.5rem 0;">
                            <?php
                            $charges = [
                                'DUI / DWI'                        => '/dui-lawyer-richmond-va/',
                                'Reckless Driving'                 => '/reckless-driving-lawyer-richmond-va/',
                                'Drug Possession & Distribution'   => null,
                                'Assault & Battery'                => null,
                                'Theft & Larceny'                  => null,
                                'Domestic Violence'                => null,
                                'Expungements'                     => '/expungement-lawyer-richmond-va/',
                                'Protective Order Violations'      => null,
                                'Hit and Run'                      => null,
                                'Felony Defense'                   => '/felony-defense-lawyer-richmond-va/',
                            ];
                            foreach ( $charges as $charge => $url ) :
                            ?>
                            <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.875rem 1rem; background: white; border: 1px solid var(--gray-200); border-radius: 0.5rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                                <?php if ( $url ) : ?>
                                    <a href="<?php echo esc_url( home_url( $url ) ); ?>" style="font-size: 0.9rem; color: var(--primary); text-decoration: none; font-weight: 500;"><?php echo esc_html( $charge ); ?></a>
                                <?php else : ?>
                                    <span style="font-size: 0.9rem; font-weight: 500;"><?php echo esc_html( $charge ); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>The Criminal Defense Process in Virginia</h2>
                        <p>Every criminal case moves through a sequence of stages. Knowing what comes next reduces anxiety — and knowing what to do at each stage can change the outcome.</p>

                        <ol style="padding-left: 0; list-style: none; margin: 1.5rem 0; counter-reset: step-counter;">
                            <li style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">1</div>
                                <div>
                                    <strong>Arraignment / Initial Appearance</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">The formal reading of charges and entry of a not guilty plea. Bail conditions are set here. Do not attend without an attorney.</p>
                                </div>
                            </li>
                            <li style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">2</div>
                                <div>
                                    <strong>Preliminary Hearing (Felony Cases)</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">The Commonwealth must show probable cause to continue. This is an important early opportunity to test the state's evidence and sometimes resolve the case before it reaches Circuit Court.</p>
                                </div>
                            </li>
                            <li style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">3</div>
                                <div>
                                    <strong>Discovery and Investigation</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">We obtain police reports, body camera footage, lab reports, witness statements, and any other evidence in the state's possession. Evidence preservation requests go out immediately.</p>
                                </div>
                            </li>
                            <li style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">4</div>
                                <div>
                                    <strong>Pre-Trial Motions</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">Motions to suppress evidence (4th Amendment violations), motions to dismiss, and other constitutional challenges can eliminate or weaken the state's case before trial begins.</p>
                                </div>
                            </li>
                            <li style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">5</div>
                                <div>
                                    <strong>Plea Negotiations</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">Most cases resolve through negotiation. A former prosecutor knows what the Commonwealth values, what leverage exists, and how to structure a favorable offer — or recognize when trial is the better path.</p>
                                </div>
                            </li>
                            <li style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">6</div>
                                <div>
                                    <strong>Trial (Bench or Jury)</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">When trial is the right choice, we go to trial. That means aggressive cross-examination, constitutional arguments, expert witnesses where warranted, and closing arguments that put the state's case under a microscope.</p>
                                </div>
                            </li>
                            <li style="display: flex; gap: 1.25rem; align-items: flex-start;">
                                <div style="width: 36px; height: 36px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.875rem; flex-shrink: 0;">7</div>
                                <div>
                                    <strong>Sentencing and Appeals</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.9rem; color: var(--text-light);">If a conviction occurs, the fight for mitigation is not over. Sentencing advocacy matters. Appeals are evaluated and pursued where grounds exist.</p>
                                </div>
                            </li>
                        </ol>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Richmond Area Courts</h2>
                        <div style="display: grid; gap: 1rem; margin: 1.5rem 0;">
                            <div class="card" style="padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                <div>
                                    <strong>Richmond General District Court</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.875rem; color: var(--text-light);">Handles misdemeanors, traffic crimes, and preliminary hearings for felonies. 400 N 9th Street, Richmond.</p>
                                </div>
                            </div>
                            <div class="card" style="padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                <div>
                                    <strong>Richmond Circuit Court</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.875rem; color: var(--text-light);">Handles all felony trials, jury trials, and appeals from General District Court.</p>
                                </div>
                            </div>
                            <div class="card" style="padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                <div>
                                    <strong>Henrico, Chesterfield &amp; Hanover County Courts</strong>
                                    <p style="margin: 0.25rem 0 0; font-size: 0.875rem; color: var(--text-light);">We practice throughout the Richmond metro area in all surrounding county court systems.</p>
                                </div>
                            </div>
                        </div>

                        <div style="background: var(--primary); border-radius: 1rem; padding: 2rem; color: white; margin-top: 2.5rem;">
                            <h3 style="color: white; margin-bottom: 0.75rem;">Your Freedom and Future Are at Stake — Call Now</h3>
                            <p style="opacity: 0.9; margin-bottom: 1.5rem;">The time to build a defense is immediately after an arrest — not the week before trial. Evidence disappears. Witnesses' memories fade. The sooner you act, the more options you have.</p>
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
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">What is the difference between a misdemeanor and a felony in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">A Class 1 misdemeanor — the most serious — carries up to 12 months in jail and a $2,500 fine. Felonies carry at least one year in a state correctional facility, with Class 1 felonies carrying the potential for life imprisonment or death. Both create permanent records, but felony convictions also result in loss of voting rights and firearm rights.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Can criminal charges be expunged in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Virginia's expungement law is narrow. Expungement is available if charges were dismissed, if you were found not guilty, or if you received an absolute pardon. Most convictions are not eligible. An attorney can evaluate whether your circumstances qualify and file the petition if they do.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Do I need a lawyer even if I plan to plead guilty?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes. Without a lawyer, you accept whatever the Commonwealth offers — and they have no incentive to offer favorable terms to an unrepresented defendant. An attorney can often negotiate a lesser charge, a reduced sentence, or an alternative disposition that a guilty plea alone would never produce.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">How long does a criminal case take in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Misdemeanor cases in General District Court often resolve in one to three court appearances over several weeks or months. Felony cases, which involve a preliminary hearing in General District Court and then proceed to Circuit Court, can take several months to over a year depending on complexity.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">What are my rights after an arrest in Virginia?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">You have the right to remain silent and the right to an attorney. Use both, immediately. Do not answer any questions from law enforcement without counsel present. Everything you say before — and after — an arrest can be used against you at trial. Invoke your rights clearly and stop talking.</p>
                            </div>

                            <div class="card" style="padding: 1.5rem;">
                                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Will a criminal conviction affect my employment?</h3>
                                <p style="margin: 0; font-size: 0.9375rem;">Yes. The vast majority of employers conduct background checks. A conviction — misdemeanor or felony — will appear. Professional licensing boards (medical, legal, financial, real estate) conduct their own reviews. Security clearances, government jobs, and housing applications are all commonly impacted. The long-term consequences of a conviction extend far beyond the sentence itself.</p>
                            </div>

                        </div>

                        <hr style="margin: 2rem 0; border: none; border-top: 1px solid var(--gray-200);">

                        <h2>Related Practice Areas</h2>
                        <ul style="list-style: none; padding: 0; margin: 1rem 0; display: flex; flex-wrap: wrap; gap: 0.75rem;">
                            <li><a href="<?php echo esc_url( home_url( '/dui-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">DUI Defense</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/expungement-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">Expungements</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/felony-defense-lawyer-richmond-va/' ) ); ?>" style="display: inline-block; padding: 0.5rem 1rem; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none;">Felony Defense</a></li>
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
                            <a href="<?php echo esc_url( home_url( '/traffic-ticket-lawyer-richmond-va/' ) ); ?>">
                                <span>Traffic Ticket Defense</span>
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
                            <a href="<?php echo esc_url( home_url( '/expungement-lawyer-richmond-va/' ) ); ?>">
                                <span>Expungements</span>
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
                            <span style="font-size: 0.875rem;">Direct attorney attention — no paralegals</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span style="font-size: 0.875rem;">Free initial consultation</span>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget">
                    <h3>Courts We Serve</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Richmond General District Court</li>
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">Richmond Circuit Court</li>
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
        <h2 style="color: white;">Your Freedom and Future Are at Stake — Call Now</h2>
        <p style="max-width: 620px; margin: 0 auto 2rem; opacity: 0.9;">Criminal charges move fast. Evidence fades. The best defenses are built immediately after an arrest — not the week before trial. Call Alexander Law Office today for a free, confidential consultation.</p>
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
