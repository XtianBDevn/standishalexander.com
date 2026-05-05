<?php
/**
 * Template Name: DUI Lawyer Richmond VA
 *
 * Dedicated landing page for DUI defense services.
 * URL: /dui-lawyer-richmond-va/
 *
 * @package Alexander_Law
 */

// SEO helpers — must be called before get_header().
require_once get_template_directory() . '/inc/seo.php';

alexander_law_output_meta(
    'DUI Lawyer Richmond VA | Alexander Law Office',
    'Arrested for DUI in Richmond? Standish Alexander — former prosecutor, 30+ years experience. Aggressive DUI defense. Free consultation. Call (804) 355-0016.'
);

// JSON-LD Schema: LegalService + FAQPage
alexander_law_output_schema( array(
    '@context' => 'https://schema.org',
    '@graph'   => array(

        // LegalService
        array(
            '@type'       => 'LegalService',
            'name'        => 'Alexander Law Office - DUI Defense',
            'description' => 'Experienced DUI defense attorney in Richmond, VA. Former prosecutor with 30+ years of criminal defense experience.',
            'url'         => 'https://standishalexander.com/dui-lawyer-richmond-va/',
            'telephone'   => '+18043550016',
            'areaServed'  => array( 'Richmond, VA', 'Henrico County', 'Chesterfield County', 'Hanover County' ),
            'address'     => array(
                '@type'           => 'PostalAddress',
                'addressLocality' => 'Richmond',
                'addressRegion'   => 'VA',
            ),
        ),

        // FAQPage
        array(
            '@type'      => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type'          => 'Question',
                    'name'           => 'What happens if I get a first-offense DUI in Virginia?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'A first-offense DUI in Virginia under § 18.2-266 is a Class 1 misdemeanor. Penalties include up to 12 months in jail (with a mandatory 5-day minimum if BAC is 0.15–0.20, and 10 days if over 0.20), a minimum $250 fine, a 12-month administrative license suspension, mandatory enrollment in the ASAP (Alcohol Safety Action Program), and possible ignition interlock requirements. The conviction is permanent on your criminal record.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Can a DUI be reduced or dismissed in Virginia?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Yes — in many cases. A DUI can be reduced to "wet reckless" (reckless driving involving alcohol), which carries fewer mandatory penalties and no automatic license suspension. Dismissal is possible when the stop lacked reasonable suspicion, the breathalyzer was improperly calibrated or administered, or there were Miranda or chain-of-custody violations. Every case is different — call us to assess your specific facts.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'How long does a DUI stay on my record in Virginia?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'A DUI conviction stays on your Virginia criminal record permanently — it cannot be expunged if you were convicted. On your DMV driving record, the conviction counts for demerit and lookback purposes for 11 years. This means a second DUI within 10 years triggers mandatory minimums, and a third within 10 years can be charged as a Class 6 felony.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'Do I need a lawyer for a DUI in Virginia?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Strongly yes. Virginia DUI law is complex, penalties are severe, and prosecutors are experienced. An attorney can identify constitutional violations, challenge breathalyzer evidence, negotiate with the Commonwealth, and represent you at trial. The cost of a DUI conviction — in fines, increased insurance premiums, ignition interlock fees, ASAP costs, and lost job opportunities — typically far exceeds the cost of hiring a lawyer.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'What is the ASAP program in Virginia?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'ASAP stands for Alcohol Safety Action Program. It is a mandatory education and assessment program required for anyone convicted of DUI in Virginia. Participants are assessed, attend alcohol safety classes, and may be required to complete additional treatment. ASAP also monitors compliance with any license restrictions. Failing to enroll or complete ASAP can result in additional license suspension.',
                    ),
                ),
                array(
                    '@type'          => 'Question',
                    'name'           => 'How much does a DUI lawyer cost in Richmond?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text'  => 'Attorney fees vary depending on the complexity of the case. However, the total cost of a DUI conviction — fines, court costs, ASAP fees, ignition interlock installation and monitoring, insurance surcharges (often $1,000+ per year for 3–5 years), and potential lost income — almost always exceeds the cost of legal representation. We offer free consultations so you can make an informed decision.',
                    ),
                ),
            ),
        ),

    ),
) );

get_header();
?>

<!-- ============================================================
     HERO
============================================================ -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <span class="hero-badge"><?php _e( 'DUI Defense', 'alexander-law' ); ?></span>
            <h1><?php _e( 'DUI Lawyer Richmond VA &mdash; Fight Your Charges', 'alexander-law' ); ?></h1>
            <p class="page-hero-subtitle">
                <?php _e( 'A DUI arrest is not a conviction. Before you plead guilty, talk to a lawyer who has been on both sides of these cases. Free consultation — call now.', 'alexander-law' ); ?>
            </p>
            <div style="margin-top: 2rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="<?php echo esc_url( alexander_law_phone_link() ); ?>" class="btn btn-secondary btn-lg">
                    <?php echo alexander_law_icon( 'phone', 20 ); ?>
                    <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">
                    <?php _e( 'Free Consultation', 'alexander-law' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- ============================================================
     MAIN CONTENT + SIDEBAR LAYOUT
============================================================ -->
<section class="section">
    <div class="container">
        <div class="grid lg-grid-cols-3 gap-12">

            <!-- ---- MAIN CONTENT (2 of 3 columns) ---- -->
            <div style="grid-column: span 2;">

                <!-- Urgency Intro -->
                <div style="margin-bottom: 3rem;">
                    <p style="font-size: 1.0625rem; line-height: 1.8; color: var(--text-light);">
                        <?php _e( 'A DUI in Virginia is not just a traffic ticket. Under Virginia Code § 18.2-266, driving while intoxicated is a criminal offense with consequences that extend well beyond the courtroom. A first offense can mean up to 12 months in jail, a minimum $250 fine, a 12-month license suspension, mandatory enrollment in the ASAP program, and an ignition interlock requirement when your license is eventually reinstated.', 'alexander-law' ); ?>
                    </p>
                    <p style="font-size: 1.0625rem; line-height: 1.8; color: var(--text-light); margin-top: 1rem;">
                        <?php _e( 'More importantly, a DUI conviction is permanent on your Virginia criminal record. It will appear on every background check — for employment, housing, and professional licensing — for the rest of your life. Virginia does not allow expungement of DUI convictions.', 'alexander-law' ); ?>
                    </p>
                    <p style="font-size: 1.0625rem; line-height: 1.8; color: var(--text-light); margin-top: 1rem;">
                        <?php _e( 'Time matters. Breath test records, dashcam footage, and officer logs must be obtained quickly before they are overwritten. The sooner you retain a lawyer, the more options remain available. Do not make any decisions about your case before speaking with an attorney.', 'alexander-law' ); ?>
                    </p>
                </div>

                <!-- Why Choose Standish Alexander -->
                <div style="margin-bottom: 3.5rem;">
                    <span class="hero-badge"><?php _e( 'Your Defense Team', 'alexander-law' ); ?></span>
                    <h2 style="margin-top: 0.75rem; margin-bottom: 2rem;"><?php _e( 'Why Choose Standish Alexander?', 'alexander-law' ); ?></h2>

                    <div class="grid md-grid-cols-2 gap-6">

                        <div class="card" style="padding: 1.75rem;">
                            <div style="width: 48px; height: 48px; background: var(--primary); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                <?php echo alexander_law_icon( 'shield', 24 ); ?>
                            </div>
                            <h3 style="font-size: 1.0625rem; margin-bottom: 0.5rem;"><?php _e( '30+ Years of Experience', 'alexander-law' ); ?></h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">
                                <?php _e( 'Thousands of DUI, reckless driving, and criminal cases handled in Richmond and Central Virginia courts since 1992.', 'alexander-law' ); ?>
                            </p>
                        </div>

                        <div class="card" style="padding: 1.75rem;">
                            <div style="width: 48px; height: 48px; background: var(--primary); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                <?php echo alexander_law_icon( 'gavel', 24 ); ?>
                            </div>
                            <h3 style="font-size: 1.0625rem; margin-bottom: 0.5rem;"><?php _e( 'Former Commonwealth\'s Attorney', 'alexander-law' ); ?></h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">
                                <?php _e( 'Mr. Alexander prosecuted cases before defending them. He knows exactly how the Commonwealth builds a DUI case — and where the weaknesses are.', 'alexander-law' ); ?>
                            </p>
                        </div>

                        <div class="card" style="padding: 1.75rem;">
                            <div style="width: 48px; height: 48px; background: var(--primary); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                <?php echo alexander_law_icon( 'location', 24 ); ?>
                            </div>
                            <h3 style="font-size: 1.0625rem; margin-bottom: 0.5rem;"><?php _e( 'Local Richmond Court Knowledge', 'alexander-law' ); ?></h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">
                                <?php _e( 'We practice regularly in Richmond GDC, Henrico, Chesterfield, and Hanover courts. Local relationships and local knowledge make a real difference.', 'alexander-law' ); ?>
                            </p>
                        </div>

                        <div class="card" style="padding: 1.75rem;">
                            <div style="width: 48px; height: 48px; background: var(--primary); border-radius: 0.75rem; display: flex; align-items: center; justify-content: center; color: var(--secondary); margin-bottom: 1rem;">
                                <?php echo alexander_law_icon( 'check-circle', 24 ); ?>
                            </div>
                            <h3 style="font-size: 1.0625rem; margin-bottom: 0.5rem;"><?php _e( '10.0 AVVO Rating &bull; A+ BBB', 'alexander-law' ); ?></h3>
                            <p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;">
                                <?php _e( 'Peer-reviewed credentials and independent client ratings confirm a sustained record of effective, ethical representation.', 'alexander-law' ); ?>
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Virginia DUI Law Breakdown -->
                <div style="margin-bottom: 3.5rem;">
                    <span class="hero-badge"><?php _e( 'Know the Law', 'alexander-law' ); ?></span>
                    <h2 style="margin-top: 0.75rem; margin-bottom: 1.5rem;"><?php _e( 'Virginia DUI Law — What You\'re Facing', 'alexander-law' ); ?></h2>

                    <p style="color: var(--text-light); line-height: 1.7; margin-bottom: 1.5rem;">
                        <?php _e( 'Virginia Code § 18.2-266 makes it illegal to operate a motor vehicle while (a) under the influence of alcohol to a degree that impairs your ability to drive safely, (b) with a blood alcohol content (BAC) of 0.08% or higher, or (c) under the influence of drugs — prescription or otherwise — that impair your driving.', 'alexander-law' ); ?>
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">

                        <!-- First Offense -->
                        <div style="border-left: 4px solid var(--secondary); padding: 1.25rem 1.5rem; background: var(--gray-200); border-radius: 0 0.5rem 0.5rem 0;">
                            <h4 style="margin: 0 0 0.5rem; color: var(--primary);"><?php _e( 'First Offense DUI', 'alexander-law' ); ?></h4>
                            <ul style="margin: 0; padding-left: 1.25rem; color: var(--text-light); font-size: 0.9rem; line-height: 1.8;">
                                <li><?php _e( 'Class 1 misdemeanor', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Up to 12 months in jail (5-day mandatory minimum if BAC 0.15–0.20; 10-day minimum if BAC over 0.20)', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Minimum $250 fine (up to $2,500)', 'alexander-law' ); ?></li>
                                <li><?php _e( '12-month administrative license suspension', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Mandatory ASAP enrollment', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Possible ignition interlock requirement', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Permanent criminal record — not expungeable', 'alexander-law' ); ?></li>
                            </ul>
                        </div>

                        <!-- Second Offense -->
                        <div style="border-left: 4px solid #b45309; padding: 1.25rem 1.5rem; background: var(--gray-200); border-radius: 0 0.5rem 0.5rem 0;">
                            <h4 style="margin: 0 0 0.5rem; color: var(--primary);"><?php _e( 'Second Offense (Within 10 Years)', 'alexander-law' ); ?></h4>
                            <ul style="margin: 0; padding-left: 1.25rem; color: var(--text-light); font-size: 0.9rem; line-height: 1.8;">
                                <li><?php _e( 'Class 1 misdemeanor', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Mandatory minimum 10-day jail (20 days if within 5 years)', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Minimum $500 fine', 'alexander-law' ); ?></li>
                                <li><?php _e( '3-year license revocation', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Vehicle forfeiture possible', 'alexander-law' ); ?></li>
                            </ul>
                        </div>

                        <!-- Felony DUI -->
                        <div style="border-left: 4px solid #dc2626; padding: 1.25rem 1.5rem; background: var(--gray-200); border-radius: 0 0.5rem 0.5rem 0;">
                            <h4 style="margin: 0 0 0.5rem; color: var(--primary);"><?php _e( 'Felony DUI (3rd Offense Within 10 Years or Maiming)', 'alexander-law' ); ?></h4>
                            <ul style="margin: 0; padding-left: 1.25rem; color: var(--text-light); font-size: 0.9rem; line-height: 1.8;">
                                <li><?php _e( 'Class 6 felony — up to 5 years in prison', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Indefinite license revocation', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Permanent loss of firearm rights and voting rights (until restored)', 'alexander-law' ); ?></li>
                                <li><?php _e( 'DUI maiming (Class 6 felony) — injuries caused while DUI', 'alexander-law' ); ?></li>
                            </ul>
                        </div>

                        <!-- Aggravated / Refusal -->
                        <div style="border-left: 4px solid var(--primary); padding: 1.25rem 1.5rem; background: var(--gray-200); border-radius: 0 0.5rem 0.5rem 0;">
                            <h4 style="margin: 0 0 0.5rem; color: var(--primary);"><?php _e( 'Aggravated DUI &amp; Refusal', 'alexander-law' ); ?></h4>
                            <ul style="margin: 0; padding-left: 1.25rem; color: var(--text-light); font-size: 0.9rem; line-height: 1.8;">
                                <li><?php _e( 'BAC of 0.15–0.20: mandatory 5-day minimum jail (first offense)', 'alexander-law' ); ?></li>
                                <li><?php _e( 'BAC over 0.20: mandatory 10-day minimum jail (first offense)', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Refusal to submit to breath test (first offense): civil penalty — 12-month license suspension', 'alexander-law' ); ?></li>
                                <li><?php _e( 'Second refusal within 10 years: criminal misdemeanor', 'alexander-law' ); ?></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Courts We Handle -->
                <div style="margin-bottom: 3.5rem;">
                    <span class="hero-badge"><?php _e( 'Local Representation', 'alexander-law' ); ?></span>
                    <h2 style="margin-top: 0.75rem; margin-bottom: 1.5rem;"><?php _e( 'Richmond-Area Courts We Handle', 'alexander-law' ); ?></h2>

                    <div class="grid md-grid-cols-2 gap-4">
                        <?php
                        $courts = array(
                            array( 'name' => 'Richmond General District Court', 'address' => '400 N 9th Street, Richmond, VA' ),
                            array( 'name' => 'Richmond Circuit Court', 'address' => '900 E Broad Street, Richmond, VA' ),
                            array( 'name' => 'Henrico General District Court', 'address' => 'Henrico County, VA' ),
                            array( 'name' => 'Chesterfield General District Court', 'address' => 'Chesterfield County, VA' ),
                            array( 'name' => 'Hanover General District Court', 'address' => 'Hanover County, VA' ),
                            array( 'name' => 'All Central Virginia Courts', 'address' => 'Call to confirm your jurisdiction' ),
                        );
                        foreach ( $courts as $court ) : ?>
                        <div style="display: flex; align-items: flex-start; gap: 0.75rem; padding: 1rem; background: var(--gray-200); border-radius: 0.5rem;">
                            <div style="color: var(--secondary); flex-shrink: 0; margin-top: 2px;">
                                <?php echo alexander_law_icon( 'location', 18 ); ?>
                            </div>
                            <div>
                                <strong style="display: block; font-size: 0.9rem; color: var(--primary);"><?php echo esc_html( $court['name'] ); ?></strong>
                                <span style="font-size: 0.8rem; color: var(--text-light);"><?php echo esc_html( $court['address'] ); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Defense Strategy -->
                <div style="margin-bottom: 3.5rem;">
                    <span class="hero-badge"><?php _e( 'How We Fight', 'alexander-law' ); ?></span>
                    <h2 style="margin-top: 0.75rem; margin-bottom: 1.5rem;"><?php _e( 'Our DUI Defense Strategy', 'alexander-law' ); ?></h2>
                    <p style="color: var(--text-light); line-height: 1.7; margin-bottom: 2rem;">
                        <?php _e( 'No two DUI cases are identical. We approach each one systematically — looking for every angle the prosecution may have missed or cut corners on.', 'alexander-law' ); ?>
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">

                        <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 0.9375rem;">1</div>
                            <div>
                                <h3 style="font-size: 1.0625rem; margin: 0 0 0.5rem;"><?php _e( 'Case Investigation', 'alexander-law' ); ?></h3>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin: 0; line-height: 1.6;">
                                    <?php _e( 'We pull the full police report, dashcam and bodycam footage, breathalyzer calibration records, and officer training certificates. The stop itself — and everything that followed — gets scrutinized. An illegal traffic stop means the evidence gathered from it may be inadmissible.', 'alexander-law' ); ?>
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 0.9375rem;">2</div>
                            <div>
                                <h3 style="font-size: 1.0625rem; margin: 0 0 0.5rem;"><?php _e( 'Evidence Review', 'alexander-law' ); ?></h3>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin: 0; line-height: 1.6;">
                                    <?php _e( 'We challenge BAC readings by examining whether the Intox EC/IR II breathalyzer was properly certified and maintained. We review how field sobriety tests were administered — officers must follow NHTSA-standardized protocols precisely. We look for the rising BAC defense and medical conditions that can mimic intoxication.', 'alexander-law' ); ?>
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 0.9375rem;">3</div>
                            <div>
                                <h3 style="font-size: 1.0625rem; margin: 0 0 0.5rem;"><?php _e( 'Pre-Trial Negotiation', 'alexander-law' ); ?></h3>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin: 0; line-height: 1.6;">
                                    <?php _e( 'When the evidence supports it, we work with the Commonwealth\'s Attorney on a reduction to "wet reckless" (reckless driving involving alcohol under § 46.2-852) or other lesser charge. A wet reckless avoids mandatory minimums and does not carry automatic license suspension. Our former-prosecutor background gives us credibility at the negotiating table.', 'alexander-law' ); ?>
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1.25rem; align-items: flex-start;">
                            <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; flex-shrink: 0; font-size: 0.9375rem;">4</div>
                            <div>
                                <h3 style="font-size: 1.0625rem; margin: 0 0 0.5rem;"><?php _e( 'Trial Defense', 'alexander-law' ); ?></h3>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin: 0; line-height: 1.6;">
                                    <?php _e( 'If the case goes to trial, we are fully prepared. We cross-examine officers on their arrest procedures, challenge breath or blood evidence through suppression motions, and — where appropriate — use expert witnesses to contest BAC readings or field sobriety test reliability. The burden of proof is on the Commonwealth; we hold them to it.', 'alexander-law' ); ?>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Possible Defenses -->
                <div style="margin-bottom: 3.5rem;">
                    <span class="hero-badge"><?php _e( 'Defense Angles', 'alexander-law' ); ?></span>
                    <h2 style="margin-top: 0.75rem; margin-bottom: 1.25rem;"><?php _e( 'Possible DUI Defenses in Virginia', 'alexander-law' ); ?></h2>
                    <p style="color: var(--text-light); line-height: 1.7; margin-bottom: 1.5rem;">
                        <?php _e( 'The facts of your arrest determine which defenses apply. Here are common grounds we explore in every DUI case:', 'alexander-law' ); ?>
                    </p>

                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.75rem;">
                        <?php
                        $defenses = array(
                            __( 'Improper traffic stop — officer lacked reasonable suspicion to pull you over', 'alexander-law' ),
                            __( 'Breathalyzer not properly calibrated or maintained per Virginia Department of Forensic Science standards', 'alexander-law' ),
                            __( 'Field sobriety tests improperly administered (non-standardized instructions, inappropriate conditions)', 'alexander-law' ),
                            __( 'Rising BAC defense — BAC was below 0.08 while driving but rose by the time of the test', 'alexander-law' ),
                            __( 'Medical conditions mimicking intoxication (GERD, diabetes, neurological conditions)', 'alexander-law' ),
                            __( 'Miranda rights violations — statements made after arrest without proper advisement', 'alexander-law' ),
                            __( 'Improper blood draw procedure or chain of custody break', 'alexander-law' ),
                            __( 'Officer not certified to administer the breathalyzer model used', 'alexander-law' ),
                        );
                        foreach ( $defenses as $defense ) : ?>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; padding: 0.875rem 1rem; background: var(--gray-200); border-radius: 0.5rem;">
                            <div style="color: var(--secondary); flex-shrink: 0; margin-top: 2px;">
                                <?php echo alexander_law_icon( 'check', 18 ); ?>
                            </div>
                            <span style="font-size: 0.9rem; color: var(--text-light); line-height: 1.6;"><?php echo esc_html( $defense ); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Inline Mid-Page CTA -->
                <div style="padding: 2rem; background: var(--secondary); border-radius: 1rem; margin-bottom: 3.5rem; display: flex; align-items: center; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap;">
                    <div>
                        <h3 style="color: white; margin: 0 0 0.375rem;"><?php _e( 'Have a court date approaching?', 'alexander-law' ); ?></h3>
                        <p style="color: rgba(255,255,255,0.9); margin: 0; font-size: 0.9rem;"><?php _e( 'Call now — the earlier we start, the better the outcome.', 'alexander-law' ); ?></p>
                    </div>
                    <a href="<?php echo esc_url( alexander_law_phone_link() ); ?>" class="btn btn-white" style="white-space: nowrap;">
                        <?php echo alexander_law_icon( 'phone', 18 ); ?>
                        <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
                    </a>
                </div>

                <!-- FAQs -->
                <div style="margin-bottom: 3rem;">
                    <span class="hero-badge"><?php _e( 'FAQs', 'alexander-law' ); ?></span>
                    <h2 style="margin-top: 0.75rem; margin-bottom: 2rem;"><?php _e( 'Frequently Asked Questions — Virginia DUI', 'alexander-law' ); ?></h2>

                    <?php
                    $faqs = array(
                        array(
                            'q' => __( 'What happens if I get a first-offense DUI in Virginia?', 'alexander-law' ),
                            'a' => __( 'A first-offense DUI under Virginia Code § 18.2-266 is a Class 1 misdemeanor. Penalties include up to 12 months in jail (with mandatory minimums if BAC is 0.15+), a $250 minimum fine, a 12-month license suspension, mandatory ASAP enrollment, and possible ignition interlock. The conviction is permanent — Virginia does not allow DUI expungement.', 'alexander-law' ),
                        ),
                        array(
                            'q' => __( 'Can a DUI be reduced or dismissed in Virginia?', 'alexander-law' ),
                            'a' => __( 'Yes — depending on the evidence. A DUI can be reduced to "wet reckless" (reckless driving involving alcohol), which carries fewer penalties and no automatic suspension. Dismissal is possible when there was no reasonable suspicion for the stop, the breathalyzer was improperly maintained, or there were constitutional violations. Call us to assess your case specifically.', 'alexander-law' ),
                        ),
                        array(
                            'q' => __( 'How long does a DUI stay on my record in Virginia?', 'alexander-law' ),
                            'a' => __( 'Permanently — a DUI conviction cannot be expunged from your Virginia criminal record. On your DMV driving record, the conviction counts for lookback purposes for 11 years, meaning a second offense within 10 years triggers mandatory minimums, and a third can be charged as a felony.', 'alexander-law' ),
                        ),
                        array(
                            'q' => __( 'Do I need a lawyer for a DUI in Virginia?', 'alexander-law' ),
                            'a' => __( 'Strongly yes. DUI law in Virginia is complex, prosecutors are experienced, and the long-term consequences of a conviction are severe. An attorney can identify defenses, challenge evidence, negotiate reductions, and represent you at trial. The total cost of a DUI conviction — fines, insurance increases, ASAP fees, ignition interlock, and lost opportunities — nearly always exceeds the cost of legal representation.', 'alexander-law' ),
                        ),
                        array(
                            'q' => __( 'What is the ASAP program in Virginia?', 'alexander-law' ),
                            'a' => __( 'ASAP stands for Alcohol Safety Action Program. It is a mandatory education and assessment program for all DUI convictions in Virginia. After assessment, participants complete required education or treatment hours and must remain compliant to avoid additional suspension. Failure to enroll or complete ASAP can result in extended license revocation.', 'alexander-law' ),
                        ),
                        array(
                            'q' => __( 'How much does a DUI lawyer cost in Richmond?', 'alexander-law' ),
                            'a' => __( 'Attorney fees vary by case complexity. However, consider the full cost of a DUI conviction: fines and court costs, ASAP fees, ignition interlock installation and monthly monitoring ($70–$100/month for 6–12 months), insurance surcharges ($1,000+ per year for 3–5 years), and potential lost employment or professional licensing. In most cases, the cost of a qualified attorney is a fraction of what a conviction will cost you over time. We offer a free consultation — call us.', 'alexander-law' ),
                        ),
                    );

                    foreach ( $faqs as $i => $faq ) :
                        $faq_id = 'faq-dui-' . ( $i + 1 );
                    ?>
                    <div style="border: 1px solid var(--gray-200); border-radius: 0.625rem; margin-bottom: 0.75rem; overflow: hidden;">
                        <button
                            onclick="var d=this.nextElementSibling; var icon=this.querySelector('.faq-icon'); d.style.display=(d.style.display==='none'?'block':'none'); icon.style.transform=(d.style.display==='none'?'rotate(0deg)':'rotate(45deg)');"
                            style="width: 100%; text-align: left; padding: 1.25rem 1.5rem; background: none; border: none; cursor: pointer; display: flex; align-items: center; justify-content: space-between; gap: 1rem; font-family: inherit;"
                            aria-expanded="false"
                            aria-controls="<?php echo esc_attr( $faq_id ); ?>"
                        >
                            <span style="font-weight: 600; font-size: 0.9375rem; color: var(--primary); line-height: 1.4;"><?php echo esc_html( $faq['q'] ); ?></span>
                            <span class="faq-icon" style="color: var(--secondary); flex-shrink: 0; transition: transform 0.2s; font-size: 1.5rem; line-height: 1;">+</span>
                        </button>
                        <div id="<?php echo esc_attr( $faq_id ); ?>" style="display: none; padding: 0 1.5rem 1.25rem; color: var(--text-light); font-size: 0.9rem; line-height: 1.7;">
                            <?php echo esc_html( $faq['a'] ); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Internal Links -->
                <div style="padding: 1.75rem; background: var(--gray-200); border-radius: 0.75rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 1rem; color: var(--primary);"><?php _e( 'Related Practice Areas', 'alexander-law' ); ?></h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                        <a href="<?php echo esc_url( home_url( '/reckless-driving-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.5rem 1rem; background: white; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none; font-weight: 500;">
                            <?php echo alexander_law_icon( 'arrow-right', 14 ); ?>
                            <?php _e( 'Reckless Driving Defense', 'alexander-law' ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/license-suspension-lawyer-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.5rem 1rem; background: white; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none; font-weight: 500;">
                            <?php echo alexander_law_icon( 'arrow-right', 14 ); ?>
                            <?php _e( 'License Suspension', 'alexander-law' ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.375rem; padding: 0.5rem 1rem; background: white; border: 1px solid var(--gray-200); border-radius: 2rem; font-size: 0.875rem; color: var(--primary); text-decoration: none; font-weight: 500;">
                            <?php echo alexander_law_icon( 'arrow-right', 14 ); ?>
                            <?php _e( 'All Practice Areas', 'alexander-law' ); ?>
                        </a>
                    </div>
                </div>

            </div><!-- end main content -->

            <!-- ---- SIDEBAR (1 of 3 columns) ---- -->
            <div>

                <!-- Free Consultation Widget -->
                <div style="background: var(--primary); color: white; border-radius: 1rem; padding: 1.75rem; margin-bottom: 1.5rem; position: sticky; top: 2rem;">
                    <h3 style="color: white; font-size: 1.125rem; margin-bottom: 0.5rem;"><?php _e( 'Free Consultation', 'alexander-law' ); ?></h3>
                    <p style="opacity: 0.85; font-size: 0.875rem; margin-bottom: 1.5rem; line-height: 1.6;">
                        <?php _e( 'Speak directly with Standish Alexander. No obligation, completely confidential.', 'alexander-law' ); ?>
                    </p>
                    <a href="<?php echo esc_url( alexander_law_phone_link() ); ?>" class="btn btn-secondary" style="width: 100%; justify-content: center; margin-bottom: 0.875rem; display: flex;">
                        <?php echo alexander_law_icon( 'phone', 18 ); ?>
                        <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width: 100%; justify-content: center; display: flex;">
                        <?php _e( 'Send a Message', 'alexander-law' ); ?>
                    </a>
                    <p style="font-size: 0.75rem; opacity: 0.65; text-align: center; margin: 1rem 0 0;">
                        <?php _e( 'Evening &amp; weekend calls answered', 'alexander-law' ); ?>
                    </p>
                </div>

                <!-- Other Practice Areas -->
                <div class="card" style="padding: 1.5rem; margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 1rem; color: var(--primary);"><?php _e( 'Other Practice Areas', 'alexander-law' ); ?></h3>
                    <nav>
                        <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
                            <?php
                            $sidebar_areas = array(
                                array( 'slug' => 'reckless-driving-lawyer-richmond-va', 'label' => 'Reckless Driving' ),
                                array( 'slug' => 'traffic-ticket-lawyer-richmond-va', 'label' => 'Traffic Violations' ),
                                array( 'slug' => 'criminal-defense-lawyer-richmond-va', 'label' => 'Criminal Defense' ),
                                array( 'slug' => 'expungement-lawyer-richmond-va', 'label' => 'Expungement' ),
                                array( 'slug' => 'drug-possession-lawyer-richmond-va', 'label' => 'Drug Possession' ),
                                array( 'slug' => 'assault-battery-lawyer-richmond-va', 'label' => 'Assault &amp; Battery' ),
                                array( 'slug' => 'theft-larceny-lawyer-richmond-va', 'label' => 'Theft &amp; Larceny' ),
                                array( 'slug' => 'license-suspension-lawyer-va', 'label' => 'License Suspension' ),
                                array( 'slug' => 'felony-defense-lawyer-richmond-va', 'label' => 'Felony Defense' ),
                                array( 'slug' => 'misdemeanor-defense-lawyer-richmond-va', 'label' => 'Misdemeanor Defense' ),
                            );
                            foreach ( $sidebar_areas as $area ) : ?>
                            <li style="border-bottom: 1px solid var(--gray-200);">
                                <a href="<?php echo esc_url( home_url( '/' . $area['slug'] . '/' ) ); ?>" style="display: flex; align-items: center; gap: 0.5rem; padding: 0.625rem 0; color: var(--primary); text-decoration: none; font-weight: 500;">
                                    <?php echo alexander_law_icon( 'chevron-right', 14 ); ?>
                                    <?php echo $area['label']; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <a href="<?php echo esc_url( home_url( '/practice-areas/' ) ); ?>" style="display: block; text-align: center; margin-top: 1rem; font-size: 0.8125rem; color: var(--secondary); font-weight: 600; text-decoration: none;">
                        <?php _e( 'View All Practice Areas &rarr;', 'alexander-law' ); ?>
                    </a>
                </div>

                <!-- Why Choose Us Checklist -->
                <div class="card" style="padding: 1.5rem; margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 1rem; color: var(--primary);"><?php _e( 'Why Choose Us', 'alexander-law' ); ?></h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; display: flex; flex-direction: column; gap: 0.625rem;">
                        <?php
                        $why_us = array(
                            __( '30+ years criminal defense experience', 'alexander-law' ),
                            __( 'Former Commonwealth\'s Attorney', 'alexander-law' ),
                            __( '10.0 AVVO Rating', 'alexander-law' ),
                            __( 'A+ BBB Rating', 'alexander-law' ),
                            __( 'Local Richmond court knowledge', 'alexander-law' ),
                            __( 'Free initial consultation', 'alexander-law' ),
                            __( 'Direct attorney access — no runaround', 'alexander-law' ),
                            __( 'Evening &amp; weekend availability', 'alexander-law' ),
                        );
                        foreach ( $why_us as $item ) : ?>
                        <li style="display: flex; align-items: flex-start; gap: 0.5rem; color: var(--text-light); line-height: 1.5;">
                            <span style="color: var(--secondary); flex-shrink: 0; margin-top: 2px;"><?php echo alexander_law_icon( 'check', 15 ); ?></span>
                            <?php echo $item; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Courts We Serve -->
                <div class="card" style="padding: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 1rem; color: var(--primary);"><?php _e( 'Courts We Serve', 'alexander-law' ); ?></h3>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem; display: flex; flex-direction: column; gap: 0.5rem;">
                        <?php
                        $sidebar_courts = array(
                            'Richmond GDC &amp; Circuit Court',
                            'Henrico GDC &amp; Circuit Court',
                            'Chesterfield GDC &amp; Circuit Court',
                            'Hanover GDC &amp; Circuit Court',
                            'Petersburg GDC &amp; Circuit Court',
                            'All Central Virginia Courts',
                        );
                        foreach ( $sidebar_courts as $court ) : ?>
                        <li style="display: flex; align-items: flex-start; gap: 0.5rem; color: var(--text-light); line-height: 1.5;">
                            <span style="color: var(--secondary); flex-shrink: 0; margin-top: 2px;"><?php echo alexander_law_icon( 'location', 14 ); ?></span>
                            <?php echo $court; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div><!-- end sidebar -->

        </div><!-- end grid -->
    </div><!-- end container -->
</section>

<!-- ============================================================
     FINAL CTA — DARK BLUE BACKGROUND
============================================================ -->
<section class="section" style="background: var(--primary-dark, var(--primary)); color: white;">
    <div class="container text-center">
        <span class="hero-badge" style="background: rgba(255,255,255,0.15); color: white;"><?php _e( 'Act Now', 'alexander-law' ); ?></span>
        <h2 style="color: white; margin-top: 0.75rem; margin-bottom: 0.75rem;"><?php _e( 'Arrested for DUI in Richmond? Call Now.', 'alexander-law' ); ?></h2>
        <p style="max-width: 580px; margin: 0 auto 2rem; opacity: 0.9; font-size: 1.0625rem; line-height: 1.7;">
            <?php _e( 'The sooner you call, the more options you have. Evidence disappears, memories fade, and deadlines pass. Do not wait.', 'alexander-law' ); ?>
        </p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 1.5rem;">
            <a href="<?php echo esc_url( alexander_law_phone_link() ); ?>" class="btn btn-secondary btn-lg">
                <?php echo alexander_law_icon( 'phone', 20 ); ?>
                <?php echo esc_html( get_theme_mod( 'phone_number', '(804) 355-0016' ) ); ?>
            </a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white btn-lg">
                <?php _e( 'Free Consultation', 'alexander-law' ); ?>
            </a>
        </div>
        <p style="opacity: 0.65; font-size: 0.875rem;">
            <?php _e( 'Free consultation &bull; Confidential &bull; No obligation &bull; Evening &amp; weekend calls answered', 'alexander-law' ); ?>
        </p>
    </div>
</section>

<?php get_footer(); ?>
