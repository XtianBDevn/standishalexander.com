<?php
/**
 * Template Name: Drug Possession Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Drug Possession Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function () { ?>
<meta name="description" content="Charged with drug possession in Richmond? Virginia penalties are severe. Standish Alexander — former prosecutor, 30+ years. Free consultation. (804) 355-0016.">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@graph": [
		{
			"@type": "LegalService",
			"name": "Alexander Law Office",
			"url": "https://standishalexander.com",
			"telephone": "+18043550016",
			"priceRange": "$$",
			"image": "https://standishalexander.com/wp-content/themes/alexander-law/assets/images/logo.png",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "7 East Franklin Street",
				"addressLocality": "Richmond",
				"addressRegion": "VA",
				"postalCode": "23219",
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
			"areaServed": [
				"Richmond, VA",
				"Henrico County, VA",
				"Chesterfield County, VA",
				"Hanover County, VA",
				"Petersburg, VA"
			],
			"description": "Alexander Law Office defends drug possession charges in Richmond, Virginia. Attorney Standish Alexander is a former Commonwealth's Attorney prosecutor with 30+ years of criminal defense experience."
		},
		{
			"@type": "WebPage",
			"name": "Drug Possession Lawyer Richmond VA | Alexander Law",
			"url": "https://standishalexander.com/drug-possession-lawyer-richmond-va/",
			"description": "Charged with drug possession in Richmond? Virginia penalties are severe. Standish Alexander — former prosecutor, 30+ years. Free consultation. (804) 355-0016.",
			"speakable": {
				"@type": "SpeakableSpecification",
				"cssSelector": ["h1", ".page-hero-subtitle"]
			},
			"breadcrumb": {
				"@type": "BreadcrumbList",
				"itemListElement": [
					{
						"@type": "ListItem",
						"position": 1,
						"name": "Home",
						"item": "https://standishalexander.com"
					},
					{
						"@type": "ListItem",
						"position": 2,
						"name": "Drug Possession Lawyer Richmond VA",
						"item": "https://standishalexander.com/drug-possession-lawyer-richmond-va/"
					}
				]
			}
		},
		{
			"@type": "FAQPage",
			"mainEntity": [
				{
					"@type": "Question",
					"name": "Is marijuana possession still illegal in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Simple possession of marijuana for personal use has been decriminalized in Virginia — the civil penalty is $25 for adults. However, distribution, intent to distribute, and possession with intent to distribute remain criminal offenses. Possession in certain circumstances (near a school, by a minor) can still carry criminal consequences."
					}
				},
				{
					"@type": "Question",
					"name": "Can drug charges be dismissed in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Yes, in several circumstances. An experienced defense attorney can challenge an unlawful search and seizure under the 4th Amendment — if the stop or search was illegal, the evidence can be suppressed and charges often dismissed. First-time offenders may qualify for Virginia's § 18.2-251 deferred disposition program, resulting in dismissal upon completing probation and treatment. Insufficient evidence and chain of custody issues are additional grounds for dismissal."
					}
				},
				{
					"@type": "Question",
					"name": "What is constructive possession in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Constructive possession means the Commonwealth is alleging you controlled or had access to drugs even if they weren't found directly on your person — for example, drugs found in a shared car or apartment. The prosecution must prove you knew the drugs were present and intentionally exercised dominion and control over them. This is a powerful defense that we aggressively challenge when applicable."
					}
				},
				{
					"@type": "Question",
					"name": "Will I go to jail for first-offense drug possession in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Jail is a real possibility for a Schedule I or II possession conviction — it's a Class 5 felony with up to 10 years in prison. However, first-time offenders who qualify for the § 18.2-251 program can avoid conviction and incarceration entirely by completing probation, drug treatment, and community service. An experienced attorney dramatically improves your chances of avoiding jail."
					}
				},
				{
					"@type": "Question",
					"name": "What is the § 18.2-251 first offender program?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Virginia Code § 18.2-251 allows a first-time drug offender to have their charge deferred — not dismissed yet — while they complete a period of probation, drug education or treatment, and community service. Upon successful completion, the charge is dismissed and the person is discharged. This is a one-time-per-lifetime opportunity, so it must be used strategically with the guidance of an attorney."
					}
				},
				{
					"@type": "Question",
					"name": "Can drug charges be expunged in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "If your drug charge was dismissed — through the § 18.2-251 first offender program, nolle prosequi, or acquittal — the record may be eligible for expungement under Virginia law. A conviction, guilty plea, or no-contest plea generally cannot be expunged. Our office handles both the defense and, if the charge is dismissed, the expungement process."
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
			<span class="hero-badge"><?php _e( 'Criminal Defense', 'alexander-law' ); ?></span>
			<h1><?php _e( 'Drug Possession Lawyer Richmond VA', 'alexander-law' ); ?></h1>
			<p class="page-hero-subtitle"><?php _e( 'Virginia\'s drug laws are among the strictest on the East Coast. The difference between a conviction and a dismissal often comes down to who is defending you.', 'alexander-law' ); ?></p>
		</div>
	</div>
</section>

<?php alexander_law_breadcrumbs(); ?>

<!-- Main Content + Sidebar -->
<section class="section">
	<div class="container">
		<div class="grid lg-grid-cols-3 gap-8">

			<!-- Main Content -->
			<div style="grid-column: span 2 / span 2;">

				<!-- Hook -->
				<div style="margin-bottom: 2.5rem;">
					<p style="font-size: 1.125rem; line-height: 1.75;">A drug possession charge in Virginia can end careers, cost you professional licenses, and follow you for life. Virginia imposes some of the harshest drug penalties on the East Coast, and prosecutors pursue these cases aggressively.</p>
					<p>The charge on the police report doesn't tell the whole story. Whether you're facing a misdemeanor or a felony, a first offense or a repeat charge, there are defenses — and opportunities — that only an experienced attorney will know how to use.</p>
					<p>Standish Alexander is a former Commonwealth's Attorney prosecutor who has spent 30+ years on both sides of drug cases in Richmond-area courts. He knows exactly how these cases are built — and how to take them apart.</p>
				</div>

				<!-- Virginia Drug Laws -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Virginia Drug Laws — What You\'re Up Against', 'alexander-law' ); ?></h2>
					<p>Virginia categorizes controlled substances into schedules, and the schedule determines the severity of the charge. Understanding where your charge falls is the first step to understanding your options.</p>

					<div class="card" style="padding: 1.75rem; margin-top: 1.5rem;">
						<h3 style="font-size: 1.0625rem; margin-bottom: 1rem;"><?php _e( 'Key Virginia Drug Statutes', 'alexander-law' ); ?></h3>
						<ul style="list-style: none; padding: 0; margin: 0; font-size: 0.9rem;">
							<?php
							$statutes = [
								[
									'code' => '§ 18.2-250',
									'desc' => 'Possession of Schedule I or II controlled substance — Class 5 felony',
								],
								[
									'code' => '§ 18.2-250.1',
									'desc' => 'Simple marijuana possession — civil penalty $25 (decriminalized for adults); distribution remains criminal',
								],
								[
									'code' => '§ 18.2-248',
									'desc' => 'Distribution of controlled substances — separate, more serious felony charges',
								],
								[
									'code' => '§ 18.2-255',
									'desc' => 'Distribution to minors or within 1,000 feet of a school — enhanced penalties',
								],
								[
									'code' => '§ 18.2-251',
									'desc' => 'First offender deferred disposition program — one-time opportunity for dismissal',
								],
							];
							foreach ( $statutes as $i => $statute ) :
							?>
							<li style="display: flex; gap: 1rem; padding: 0.75rem 0; border-bottom: 1px solid var(--gray-200);">
								<span style="font-weight: 700; color: var(--primary); white-space: nowrap; font-size: 0.8125rem; min-width: 90px;"><?php echo esc_html( $statute['code'] ); ?></span>
								<span style="color: var(--text-light);"><?php echo esc_html( $statute['desc'] ); ?></span>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<p style="margin-top: 1.25rem;">Schedule I and II include heroin, cocaine, methamphetamine, fentanyl, and oxycodone. Schedule III and IV substances (certain prescription drugs, anabolic steroids) carry Class 1 misdemeanor charges. The schedule of the substance — and the weight involved — directly determines how serious your exposure is.</p>
				</div>

				<!-- Penalties by Drug Type -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Virginia Drug Penalties by Charge', 'alexander-law' ); ?></h2>
					<p>Virginia drug penalties escalate sharply based on the substance, quantity, prior record, and circumstances of the arrest. These are not minor consequences.</p>

					<div style="margin-top: 1.5rem; overflow-x: auto;">
						<table style="width: 100%; border-collapse: collapse; font-size: 0.875rem;">
							<thead>
								<tr style="background: var(--primary); color: white;">
									<th style="padding: 0.875rem 1rem; text-align: left; font-weight: 600;">Charge</th>
									<th style="padding: 0.875rem 1rem; text-align: left; font-weight: 600;">Classification</th>
									<th style="padding: 0.875rem 1rem; text-align: left; font-weight: 600;">Potential Sentence</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$penalties = [
									[
										'charge' => 'Possession — Schedule I/II (heroin, cocaine, meth, fentanyl)',
										'class'  => 'Class 5 Felony',
										'sent'   => '1–10 years prison; up to $2,500 fine',
									],
									[
										'charge' => 'Possession — Schedule III/IV',
										'class'  => 'Class 1 Misdemeanor',
										'sent'   => 'Up to 12 months jail; up to $2,500 fine',
									],
									[
										'charge' => 'Distribution — Schedule I/II',
										'class'  => 'Class 5 to Class 4 Felony',
										'sent'   => '5–40 years; mandatory minimums may apply',
									],
									[
										'charge' => 'Distribution near a school (within 1,000 ft)',
										'class'  => 'Enhanced Felony',
										'sent'   => 'Mandatory minimum 1 year additional',
									],
									[
										'charge' => 'Repeat offender (Schedule I/II)',
										'class'  => 'Class 4 Felony',
										'sent'   => '2–10 years; dramatically increased exposure',
									],
								];
								foreach ( $penalties as $i => $row ) :
								$bg = $i % 2 === 0 ? 'white' : '#f9f9fb';
								?>
								<tr style="background: <?php echo $bg; ?>; border-bottom: 1px solid var(--gray-200);">
									<td style="padding: 0.875rem 1rem;"><?php echo esc_html( $row['charge'] ); ?></td>
									<td style="padding: 0.875rem 1rem; font-weight: 600; color: var(--primary);"><?php echo esc_html( $row['class'] ); ?></td>
									<td style="padding: 0.875rem 1rem; color: var(--text-light);"><?php echo esc_html( $row['sent'] ); ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

				<!-- Defenses We Use -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Drug Possession Defenses We Use', 'alexander-law' ); ?></h2>
					<p>Every drug arrest has a story, and every story has potential defenses. Here are the most effective strategies we deploy in Virginia drug cases.</p>

					<div class="grid md-grid-cols-2 gap-5" style="margin-top: 1.5rem;">
						<?php
						$defenses = [
							[
								'title' => '4th Amendment — Unlawful Search & Seizure',
								'desc'  => 'If police searched your car, home, or person without proper legal justification, any evidence found may be inadmissible. This is the most common — and most effective — defense in drug cases. An illegal stop, an improper pat-down, or a warrant that lacked probable cause can get an entire case thrown out.',
							],
							[
								'title' => 'Lack of Knowledge or Possession',
								'desc'  => 'The Commonwealth must prove you knowingly possessed the drugs. If the drugs belonged to someone else, were in a shared space, or you had no idea they were present, you have a defense. We scrutinize constructive possession allegations carefully.',
							],
							[
								'title' => 'Chain of Custody Challenges',
								'desc'  => 'Drug evidence must be properly collected, stored, and tracked from the arrest to the lab and into court. Breaks in the chain of custody raise serious doubt about the integrity of the evidence.',
							],
							[
								'title' => 'Lab Testing Challenges',
								'desc'  => 'The substance must be confirmed as an illegal drug through certified lab analysis. We verify that testing was done correctly, by a qualified analyst, using approved methodology.',
							],
							[
								'title' => 'First Offender Diversion (§ 18.2-251)',
								'desc'  => 'First-time offenders who don\'t have a strong factual defense may still avoid conviction through Virginia\'s diversion program. Complete probation, drug treatment, and community service — and the charge is dismissed. This is a one-time opportunity and should only be used with legal guidance.',
							],
							[
								'title' => 'Constructive Possession Defense',
								'desc'  => 'Being present near drugs does not equal possession. The prosecution must prove you exercised dominion and control with knowledge the drugs were there. In multi-occupant vehicles and shared residences, this standard is harder to meet than it appears.',
							],
						];
						foreach ( $defenses as $defense ) :
						?>
						<div class="card" style="padding: 1.5rem;">
							<h3 style="font-size: 1rem; margin-bottom: 0.6rem; color: var(--primary);"><?php echo esc_html( $defense['title'] ); ?></h3>
							<p style="font-size: 0.875rem; color: var(--text-light); margin: 0; line-height: 1.6;"><?php echo esc_html( $defense['desc'] ); ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- First Offender Program -->
				<div class="card bg-muted" style="padding: 2rem; margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 0.75rem;"><?php _e( 'Virginia\'s First Offender Program — § 18.2-251', 'alexander-law' ); ?></h2>
					<p>Virginia offers first-time drug offenders a path to avoid a criminal conviction entirely. Under § 18.2-251, the court can defer disposition of the charge — meaning no guilty plea, no conviction — while the defendant completes:</p>
					<ul style="list-style: none; padding: 0; margin: 1rem 0;">
						<?php
						$requirements = [
							'A period of supervised probation',
							'Drug education or substance abuse treatment',
							'Community service hours',
							'Regular drug testing',
						];
						foreach ( $requirements as $req ) :
						?>
						<li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;">
								<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
								<polyline points="22 4 12 14.01 9 11.01"/>
							</svg>
							<span style="font-size: 0.9375rem;"><?php echo esc_html( $req ); ?></span>
						</li>
						<?php endforeach; ?>
					</ul>
					<p style="margin: 0; font-size: 0.9375rem;"><strong>Upon successful completion, the charge is dismissed.</strong> This is a once-per-lifetime opportunity under Virginia law. Using it on the wrong case — when a stronger defense exists — wastes it permanently. An attorney helps you decide when to fight and when to use the program.</p>
				</div>

				<!-- Courts -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Richmond-Area Courts Handling Drug Cases', 'alexander-law' ); ?></h2>
					<p>Drug cases in Virginia begin in different courts depending on the nature of the charge. We appear in all Richmond-area courts regularly.</p>
					<div class="grid md-grid-cols-2 gap-4" style="margin-top: 1.25rem;">
						<?php
						$courts = [
							[
								'name' => 'Richmond Circuit Court',
								'note' => 'Felony possession — Schedule I/II',
							],
							[
								'name' => 'Richmond General District Court',
								'note' => 'Misdemeanors and felony preliminary hearings',
							],
							[
								'name' => 'Henrico County Courts',
								'note' => 'Circuit and General District',
							],
							[
								'name' => 'Chesterfield County Courts',
								'note' => 'Circuit and General District',
							],
							[
								'name' => 'Hanover County Courts',
								'note' => 'Circuit and General District',
							],
							[
								'name' => 'Petersburg Circuit Court',
								'note' => 'Circuit and General District',
							],
						];
						foreach ( $courts as $court ) :
						?>
						<div style="padding: 1rem 1.25rem; background: white; border: 1px solid var(--gray-200); border-radius: 0.5rem;">
							<div style="font-weight: 600; font-size: 0.9375rem; margin-bottom: 0.25rem;"><?php echo esc_html( $court['name'] ); ?></div>
							<div style="font-size: 0.8125rem; color: var(--text-light);"><?php echo esc_html( $court['note'] ); ?></div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- FAQ -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1.5rem;"><?php _e( 'Drug Possession FAQs', 'alexander-law' ); ?></h2>
					<?php
					$faqs = [
						[
							'q' => 'Is marijuana possession still illegal in Virginia?',
							'a' => 'Simple possession of marijuana for personal use by adults has been decriminalized — the civil penalty is a $25 fine. However, distribution and possession with intent to distribute remain criminal offenses, as does possession in certain contexts (near schools, by minors). If you were charged with marijuana distribution or any amount beyond personal use, you need a lawyer.',
						],
						[
							'q' => 'Can drug charges be dismissed in Virginia?',
							'a' => 'Yes. 4th Amendment suppression of illegally obtained evidence is the most powerful tool — if the stop or search was unlawful, the evidence goes out and the case often collapses. First-time offenders can also have charges dismissed through the § 18.2-251 deferred disposition program. Insufficient evidence, constructive possession challenges, and chain of custody issues are additional grounds for dismissal.',
						],
						[
							'q' => 'What is constructive possession in Virginia?',
							'a' => 'Constructive possession means you are alleged to have controlled drugs that were not physically on your person — found in your car, your home, or a shared space. The prosecution must prove that you knew the drugs were there and intentionally exercised control over them. This standard is harder to meet than it sounds, and we challenge it aggressively whenever the facts support it.',
						],
						[
							'q' => 'Will I go to jail for first-offense drug possession in Virginia?',
							'a' => 'A Schedule I or II possession conviction is a Class 5 felony with up to 10 years in prison — so jail is a real possibility without legal representation. However, first-time offenders who qualify for the § 18.2-251 program can avoid conviction and incarceration entirely. An experienced attorney may also be able to get the charges dismissed or reduced before it ever reaches that point.',
						],
						[
							'q' => 'What is the § 18.2-251 first offender program?',
							'a' => 'Virginia\'s first offender program defers your charge while you complete probation, drug treatment, and community service. Upon successful completion, the charge is dismissed — no conviction, no criminal record for that offense. This is a once-per-lifetime opportunity under Virginia law, which means choosing the right case for it matters enormously. An attorney helps you make that decision strategically.',
						],
						[
							'q' => 'Can drug charges be expunged in Virginia?',
							'a' => 'If your drug charge was dismissed — through the § 18.2-251 program, nolle prosequi, or acquittal — the arrest record may qualify for expungement under Virginia\'s expungement statute. Convictions, guilty pleas, and no-contest pleas generally cannot be expunged. Our office handles the full picture: fight the charge, and if dismissed, help you clean the record afterward.',
						],
					];
					foreach ( $faqs as $faq ) :
					?>
					<div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; margin-bottom: 1rem; overflow: hidden;">
						<div style="padding: 1.25rem 1.5rem; background: white;">
							<h3 style="font-size: 1rem; margin: 0 0 0.75rem; color: var(--primary);"><?php echo esc_html( $faq['q'] ); ?></h3>
							<p style="font-size: 0.9rem; color: var(--text-light); margin: 0; line-height: 1.65;"><?php echo esc_html( $faq['a'] ); ?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>

				<!-- Internal Links -->
				<div style="margin-bottom: 2.5rem;">
					<h3 style="font-size: 1rem; margin-bottom: 1rem; color: var(--text-light);"><?php _e( 'Related Practice Areas', 'alexander-law' ); ?></h3>
					<div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
						<a href="<?php echo esc_url( home_url( '/criminal-defense-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Criminal Defense
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
						<a href="<?php echo esc_url( home_url( '/expungement-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Expungement
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
						<a href="<?php echo esc_url( home_url( '/felony-defense-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Felony Defense
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</div>

				<!-- CTA Box -->
				<div style="background: var(--primary); border-radius: 1rem; padding: 2.25rem; color: white;">
					<h2 style="color: white; margin-bottom: 0.75rem;"><?php _e( 'Don\'t Face Drug Charges Alone — Call Now', 'alexander-law' ); ?></h2>
					<p style="opacity: 0.9; margin-bottom: 1.5rem; max-width: 560px;">A drug charge is not the end of the road — but delay makes it harder to defend. The sooner you have an attorney reviewing your case, the more options remain available. Call today for a free, confidential consultation.</p>
					<div class="flex gap-4" style="flex-wrap: wrap;">
						<a href="tel:8043550016" class="btn btn-secondary">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="flex-shrink: 0;">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
							</svg>
							(804) 355-0016
						</a>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white">
							<?php _e( 'Free Consultation', 'alexander-law' ); ?>
						</a>
					</div>
				</div>

			</div><!-- end main content -->

			<!-- Sidebar -->
			<aside class="blog-sidebar">

				<!-- Free Consultation Widget -->
				<div class="sidebar-widget widget-cta">
					<h3><?php _e( 'Free Consultation', 'alexander-law' ); ?></h3>
					<p><?php _e( 'Facing a drug charge in Richmond? Talk to Standish Alexander directly — former prosecutor, 30+ years of defense experience. No cost. No obligation.', 'alexander-law' ); ?></p>
					<a href="tel:8043550016" class="widget-phone">(804) 355-0016</a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white" style="width: 100%; margin-top: 1rem; text-align: center;">
						<?php _e( 'Send a Message', 'alexander-law' ); ?>
					</a>
				</div>

				<!-- Practice Areas -->
				<div class="sidebar-widget">
					<h3><?php _e( 'Practice Areas', 'alexander-law' ); ?></h3>
					<ul class="category-list">
						<?php
						$practice_links = [
							'Criminal Defense'          => '/criminal-defense-lawyer-richmond-va/',
							'Drug Possession'           => '/drug-possession-lawyer-richmond-va/',
							'Assault & Battery'         => '/assault-battery-lawyer-richmond-va/',
							'DUI / DWI Defense'         => '/dui-lawyer-richmond-va/',
							'Felony Defense'            => '/felony-defense-lawyer-richmond-va/',
							'Misdemeanor Defense'       => '/misdemeanor-defense-lawyer-richmond-va/',
							'Expungement'               => '/expungement-lawyer-richmond-va/',
							'Traffic Violations'        => '/traffic-lawyer-richmond-va/',
						];
						foreach ( $practice_links as $label => $url ) :
						?>
						<li>
							<a href="<?php echo esc_url( home_url( $url ) ); ?>">
								<span><?php echo esc_html( $label ); ?></span>
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<!-- Why Choose Us -->
				<div class="sidebar-widget">
					<h3><?php _e( 'Why Choose Us', 'alexander-law' ); ?></h3>
					<ul style="list-style: none; padding: 0; margin: 0;">
						<?php
						$reasons = [
							'30+ years of experience',
							'10.0 Superb AVVO rating',
							'Former prosecutor — knows both sides',
							'Direct attorney access — no hand-offs',
							'Free initial consultation',
							'Local Richmond court knowledge',
						];
						foreach ( $reasons as $reason ) :
						?>
						<li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.875rem;">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
								<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
								<polyline points="22 4 12 14.01 9 11.01"/>
							</svg>
							<span style="font-size: 0.875rem;"><?php echo esc_html( $reason ); ?></span>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<!-- Courts We Serve -->
				<div class="sidebar-widget">
					<h3><?php _e( 'Courts We Serve', 'alexander-law' ); ?></h3>
					<ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
						<?php
						$courts = [
							'Richmond Circuit Court',
							'Richmond General District Court',
							'Henrico Circuit Court',
							'Chesterfield Circuit Court',
							'Hanover Circuit Court',
							'Petersburg Circuit Court',
						];
						$last = count( $courts ) - 1;
						foreach ( $courts as $i => $court ) :
						?>
						<li style="padding: 0.5rem 0; <?php echo $i < $last ? 'border-bottom: 1px solid var(--gray-200);' : ''; ?>">
							<?php echo esc_html( $court ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</aside><!-- end sidebar -->

		</div><!-- end grid -->
	</div><!-- end container -->
</section>

<?php get_footer(); ?>
