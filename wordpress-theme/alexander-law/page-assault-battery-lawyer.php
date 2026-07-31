<?php
/**
 * Template Name: Assault Battery Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Assault & Battery Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function () { ?>
<meta name="description" content="Charged with assault or battery in Richmond? A conviction means a criminal record. Standish Alexander defends assault charges. 30+ years. Free consult. (804) 355-0016.">
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
			"description": "Alexander Law Office defends assault and battery charges in Richmond, Virginia. Attorney Standish Alexander — former prosecutor with 30+ years of criminal defense experience — handles assault, battery, malicious wounding, and domestic assault cases."
		},
		{
			"@type": "WebPage",
			"name": "Assault & Battery Lawyer Richmond VA | Alexander Law",
			"url": "https://standishalexander.com/assault-battery-lawyer-richmond-va/",
			"description": "Charged with assault or battery in Richmond? A conviction means a criminal record. Standish Alexander defends assault charges. 30+ years. Free consult. (804) 355-0016.",
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
						"name": "Assault & Battery Lawyer Richmond VA",
						"item": "https://standishalexander.com/assault-battery-lawyer-richmond-va/"
					}
				]
			}
		},
		{
			"@type": "FAQPage",
			"mainEntity": [
				{
					"@type": "Question",
					"name": "What's the difference between assault and battery in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "In Virginia, assault is the intentional threat or attempt to cause harmful or offensive contact — no physical contact required. Battery is the actual unwanted physical contact itself. The two are frequently charged together as 'assault and battery.' Under § 18.2-57, both fall under the same statute and the same Class 1 misdemeanor classification at the simple level."
					}
				},
				{
					"@type": "Question",
					"name": "Can assault charges be dropped in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Charges can be dismissed for several reasons — lack of evidence, victim recantation, self-defense justification, or successful motions to dismiss. However, Virginia prosecutors often proceed with assault charges even when the alleged victim does not wish to cooperate, particularly in domestic cases. You cannot count on the alleged victim to make the case go away. You need a lawyer who can address the charge directly."
					}
				},
				{
					"@type": "Question",
					"name": "What is simple assault in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Simple assault under § 18.2-57 is a Class 1 misdemeanor, carrying up to 12 months in jail and a $2,500 fine. Even though it is classified as a misdemeanor, a conviction creates a permanent criminal record that shows up on background checks for employment, housing, and licensing."
					}
				},
				{
					"@type": "Question",
					"name": "Can I defend myself against assault charges if I was protecting myself?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Yes. Virginia law recognizes self-defense and defense of others as valid defenses to assault and battery charges. If you reasonably believed you were in danger of bodily harm and used reasonable force to protect yourself, that is a complete defense. We investigate the facts carefully to build the strongest self-defense argument the evidence supports."
					}
				},
				{
					"@type": "Question",
					"name": "Will an assault charge affect my job?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Yes — most employer background checks reveal criminal convictions, including misdemeanor assault. Certain professions — healthcare, education, law enforcement, childcare, financial services — have specific bars on hiring people with assault convictions. A conviction can also affect professional licensing, security clearances, and immigration status."
					}
				},
				{
					"@type": "Question",
					"name": "What happens if I'm charged with domestic assault in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Virginia has a mandatory arrest policy for domestic assault — police must make an arrest if they have probable cause, regardless of whether the alleged victim wants to press charges. An emergency protective order is typically issued immediately, requiring you to leave the home. Domestic assault can affect gun rights (federal law prohibits firearm possession for domestic assault convictions), child custody proceedings, and immigration status. Do not delay getting legal representation."
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
			<h1><?php _e( 'Assault & Battery Lawyer Richmond VA', 'alexander-law' ); ?></h1>
			<p class="page-hero-subtitle"><?php _e( 'The charge sounds simple. The consequences — a criminal record, job loss, loss of gun rights — are not. Get an experienced defense attorney in your corner.', 'alexander-law' ); ?></p>
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
					<p style="font-size: 1.125rem; line-height: 1.75;">Assault and battery charges in Virginia arise from bar fights, domestic disputes, neighbor confrontations, and altercations that escalate — situations where both parties often share some fault. But the law doesn't see it that way once you're charged.</p>
					<p>Even a first-time conviction for simple assault leaves a permanent mark on your record. It affects employment, housing, and professional licenses. Domestic assault carries additional consequences that extend far beyond the courtroom: gun rights, child custody, immigration status.</p>
					<p>Standish Alexander has been handling assault and battery cases in Richmond and Central Virginia for over 30 years, including as a former Commonwealth's Attorney prosecutor. He knows the evidence that matters, the defenses that work, and how Virginia courts handle these cases — because he's seen it from both sides.</p>
				</div>

				<!-- Virginia Assault Law -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Virginia Assault & Battery Law', 'alexander-law' ); ?></h2>
					<p>Virginia law covers a spectrum of offenses under the assault umbrella — from simple misdemeanor assault up to malicious wounding, which carries years in state prison. Where you fall on that spectrum determines everything about your exposure.</p>

					<div style="margin-top: 1.5rem;">
						<?php
						$laws = [
							[
								'statute' => '§ 18.2-57',
								'name'    => 'Simple Assault',
								'class'   => 'Class 1 Misdemeanor',
								'penalty' => 'Up to 12 months jail; $2,500 fine',
								'note'    => 'Intentional threat or attempt to cause harmful contact — no physical contact required.',
							],
							[
								'statute' => '§ 18.2-57',
								'name'    => 'Assault & Battery',
								'class'   => 'Class 1 Misdemeanor',
								'penalty' => 'Up to 12 months jail; $2,500 fine',
								'note'    => 'Same statute; actual unwanted physical contact. Often charged together with assault.',
							],
							[
								'statute' => '§ 18.2-57(B)',
								'name'    => 'Assault on Police, EMT, or Teacher',
								'class'   => 'Class 6 Felony (minimum)',
								'penalty' => '1–5 years prison; mandatory minimum 6 months',
								'note'    => 'Assault against protected classes of individuals carries felony-level charges automatically.',
							],
							[
								'statute' => '§ 18.2-57.2',
								'name'    => 'Domestic Assault & Battery',
								'class'   => 'Class 1 Misdemeanor (first offense)',
								'penalty' => 'Up to 12 months jail; $2,500 fine',
								'note'    => 'Separate statute; mandatory arrest policy; additional collateral consequences including gun rights.',
							],
							[
								'statute' => '§ 18.2-51',
								'name'    => 'Malicious Wounding',
								'class'   => 'Class 5 Felony',
								'penalty' => '5–20 years prison if malicious; 1–5 years if unlawful',
								'note'    => 'Cutting, wounding, or causing bodily injury with intent to maim, disfigure, or kill.',
							],
							[
								'statute' => '§ 18.2-51',
								'name'    => 'Unlawful Wounding',
								'class'   => 'Class 6 Felony',
								'penalty' => '1–5 years prison; or up to 12 months jail',
								'note'    => 'Same physical act as malicious wounding without proof of specific intent.',
							],
						];
						foreach ( $laws as $law ) :
						?>
						<div style="border: 1px solid var(--gray-200); border-radius: 0.75rem; padding: 1.25rem 1.5rem; margin-bottom: 1rem; background: white;">
							<div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; gap: 0.5rem; margin-bottom: 0.5rem;">
								<div>
									<span style="font-size: 0.75rem; font-weight: 700; color: var(--secondary); text-transform: uppercase; letter-spacing: 0.05em;"><?php echo esc_html( $law['statute'] ); ?></span>
									<h3 style="font-size: 1rem; margin: 0.2rem 0 0;"><?php echo esc_html( $law['name'] ); ?></h3>
								</div>
								<div style="text-align: right;">
									<span style="display: inline-block; font-size: 0.75rem; font-weight: 600; color: var(--primary); background: rgba(0,0,0,0.05); padding: 0.25rem 0.6rem; border-radius: 2rem;"><?php echo esc_html( $law['class'] ); ?></span>
									<div style="font-size: 0.8125rem; color: var(--text-light); margin-top: 0.25rem;"><?php echo esc_html( $law['penalty'] ); ?></div>
								</div>
							</div>
							<p style="font-size: 0.875rem; color: var(--text-light); margin: 0;"><?php echo esc_html( $law['note'] ); ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Domestic Violence -->
				<div class="card" style="padding: 2rem; margin-bottom: 2.5rem; border-left: 4px solid var(--secondary);">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Domestic Assault — What You Need to Know', 'alexander-law' ); ?></h2>
					<p>Domestic assault cases involve a separate set of rules and consequences that make them more complicated than a standard assault charge. If you've been arrested for domestic assault in Virginia, these issues apply to you immediately.</p>
					<div class="grid md-grid-cols-2 gap-4" style="margin-top: 1.25rem;">
						<?php
						$dom_issues = [
							[
								'title' => 'Mandatory Arrest Policy',
								'desc'  => 'Virginia law requires police to make an arrest when probable cause exists for domestic assault — even if the alleged victim does not want charges filed. The decision is not theirs or yours. It belongs to the officer.',
							],
							[
								'title' => 'Immediate Protective Order',
								'desc'  => 'An emergency protective order is typically issued on arrest, requiring you to vacate the shared residence and have no contact with the alleged victim. Violating it is a separate criminal offense.',
							],
							[
								'title' => 'No-Drop Prosecution',
								'desc'  => 'Many Virginia jurisdictions operate under a no-drop policy — the Commonwealth proceeds even if the alleged victim recants or requests the charges be dropped. Do not assume a change of heart will end the case.',
							],
							[
								'title' => 'Federal Gun Rights',
								'desc'  => 'A domestic assault conviction — even a misdemeanor — triggers a federal firearms disability under the Lautenberg Amendment. You lose the right to possess a firearm. This affects police officers, military personnel, hunters, and anyone with a carry permit.',
							],
							[
								'title' => 'Child Custody Impact',
								'desc'  => 'Virginia family courts treat domestic violence history as a significant factor in custody and visitation decisions. A conviction can directly affect your parental rights.',
							],
							[
								'title' => 'Immigration Consequences',
								'desc'  => 'For non-citizens, a domestic violence conviction can have severe immigration consequences, including deportation, inadmissibility, and loss of immigration status.',
							],
						];
						foreach ( $dom_issues as $issue ) :
						?>
						<div style="padding: 1rem; background: #f9f9fb; border-radius: 0.5rem;">
							<h3 style="font-size: 0.9375rem; margin-bottom: 0.4rem;"><?php echo esc_html( $issue['title'] ); ?></h3>
							<p style="font-size: 0.8125rem; color: var(--text-light); margin: 0; line-height: 1.55;"><?php echo esc_html( $issue['desc'] ); ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Defense Strategies -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Assault Defense Strategies We Use', 'alexander-law' ); ?></h2>
					<p>There is no single defense that works for every assault case. Strategy depends entirely on the facts — what happened, who was there, what physical evidence exists, and what witnesses will say. Here are the defenses we evaluate in every case.</p>

					<div class="grid md-grid-cols-2 gap-5" style="margin-top: 1.5rem;">
						<?php
						$defenses = [
							[
								'title' => 'Self-Defense',
								'desc'  => 'Virginia allows reasonable force to protect yourself from imminent bodily harm. If you were defending yourself and used proportional force, that is a complete defense to assault and battery. We investigate the full sequence of events, any history between the parties, and who the initial aggressor was.',
							],
							[
								'title' => 'Defense of Others',
								'desc'  => 'The same standard that allows self-defense also covers defense of another person — a family member, friend, or bystander — if you reasonably believed they were in danger and you used reasonable force to protect them.',
							],
							[
								'title' => 'Mutual Combat / Consent',
								'desc'  => 'In some circumstances — particularly barroom fights where both parties voluntarily engaged — consent to the physical contact is a defense. This is fact-specific and requires careful analysis of the circumstances.',
							],
							[
								'title' => 'Misidentification',
								'desc'  => 'Witnesses and alleged victims misidentify people, especially in chaotic or fast-moving situations. We scrutinize identification evidence, lighting conditions, sightlines, and witness reliability in every case.',
							],
							[
								'title' => 'False Accusation / Motive to Lie',
								'desc'  => 'In domestic cases especially, allegations are sometimes made in the context of divorce, custody, or financial disputes. We investigate the accuser\'s motive, prior communications, and any inconsistencies in their account.',
							],
							[
								'title' => 'Lack of Intent — Accident',
								'desc'  => 'Assault requires intentional conduct. An accidental physical contact — bumping into someone, reacting involuntarily — does not meet the legal definition of assault or battery. If the contact was unintentional, we present that as a factual defense.',
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

				<!-- The Court Process -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'How Assault Cases Move Through Virginia Courts', 'alexander-law' ); ?></h2>
					<p>Understanding what happens at each stage helps you make better decisions. Here is the typical progression of an assault or battery case in Richmond-area courts.</p>

					<div style="margin-top: 1.5rem;">
						<?php
						$steps = [
							[
								'num'   => '01',
								'title' => 'Arrest and Arraignment',
								'desc'  => 'You are formally charged and advised of the charge. Bond may be set at arraignment. In domestic cases, a protective order is issued immediately.',
							],
							[
								'num'   => '02',
								'title' => 'General District Court',
								'desc'  => 'Misdemeanor assault cases are tried in General District Court. Felony charges receive a preliminary hearing in GDC to determine whether probable cause exists to send the case to Circuit Court.',
							],
							[
								'num'   => '03',
								'title' => 'Transfer to Circuit Court (Felony / Jury)',
								'desc'  => 'If the charge is a felony, or if either party demands a jury trial, the case is certified or appealed to Circuit Court. Circuit Court has broader discovery rights and longer timelines.',
							],
							[
								'num'   => '04',
								'title' => 'Pre-Trial Motions',
								'desc'  => 'We file motions to suppress evidence, challenge witness statements, and address any constitutional violations before trial. Many cases are resolved or significantly weakened at this stage.',
							],
							[
								'num'   => '05',
								'title' => 'Trial',
								'desc'  => 'If the case proceeds to trial, we present your defense before the judge or jury. We cross-examine the Commonwealth\'s witnesses aggressively and present every available defense.',
							],
						];
						foreach ( $steps as $step ) :
						?>
						<div style="display: flex; gap: 1.25rem; margin-bottom: 1.5rem; align-items: flex-start;">
							<div style="width: 44px; height: 44px; background: var(--primary); color: var(--secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.8125rem; flex-shrink: 0;">
								<?php echo esc_html( $step['num'] ); ?>
							</div>
							<div>
								<h3 style="font-size: 1.0625rem; margin-bottom: 0.35rem;"><?php echo esc_html( $step['title'] ); ?></h3>
								<p style="font-size: 0.9rem; color: var(--text-light); margin: 0;"><?php echo esc_html( $step['desc'] ); ?></p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Courts -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Richmond-Area Courts We Appear In', 'alexander-law' ); ?></h2>
					<div class="grid md-grid-cols-2 gap-4">
						<?php
						$courts = [
							[
								'name' => 'Richmond General District Court',
								'note' => 'Misdemeanor assault; preliminary hearings',
							],
							[
								'name' => 'Richmond Circuit Court',
								'note' => 'Felony assault; jury trials',
							],
							[
								'name' => 'Henrico County Courts',
								'note' => 'General District and Circuit',
							],
							[
								'name' => 'Chesterfield County Courts',
								'note' => 'General District and Circuit',
							],
							[
								'name' => 'Hanover County Courts',
								'note' => 'General District and Circuit',
							],
							[
								'name' => 'Petersburg Courts',
								'note' => 'General District and Circuit',
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
					<h2 style="margin-bottom: 1.5rem;"><?php _e( 'Assault & Battery FAQs', 'alexander-law' ); ?></h2>
					<?php
					$faqs = [
						[
							'q' => 'What\'s the difference between assault and battery in Virginia?',
							'a' => 'Assault is the intentional threat or attempt to cause harmful or offensive contact — no physical touching required. Battery is the actual unwanted physical contact. They are often charged together as "assault and battery" under § 18.2-57, which treats both as Class 1 misdemeanors at the simple level.',
						],
						[
							'q' => 'Can assault charges be dropped in Virginia?',
							'a' => 'Charges can be dismissed for lack of evidence, self-defense justification, victim recantation, or successful pre-trial motions. However, Virginia prosecutors — especially in domestic cases — often proceed even when the alleged victim doesn\'t cooperate. Counting on the victim to make the case disappear is not a legal strategy. You need an attorney who addresses the charge directly.',
						],
						[
							'q' => 'What is simple assault in Virginia?',
							'a' => 'Simple assault under § 18.2-57 is a Class 1 misdemeanor carrying up to 12 months in jail and a $2,500 fine. It is the lowest-level assault charge in Virginia. Despite being a misdemeanor, a conviction creates a permanent criminal record that appears on background checks for jobs, housing, and professional licenses.',
						],
						[
							'q' => 'Can I defend myself against assault charges if I was protecting myself?',
							'a' => 'Yes. Virginia law recognizes self-defense and defense of others as complete defenses to assault and battery charges. If you reasonably believed you or someone else faced imminent bodily harm and you used proportional force to stop it, that is a valid defense. The standard is what a reasonable person in your position would have believed — we build that argument from the specific facts of your case.',
						],
						[
							'q' => 'Will an assault charge affect my job?',
							'a' => 'Yes — most employer background checks reveal criminal convictions, including misdemeanor assault. Industries with specific restrictions include healthcare, education, law enforcement, childcare, financial services, and government contracting. A conviction can affect professional licensing, security clearances, and for non-citizens, immigration status.',
						],
						[
							'q' => 'What happens if I\'m charged with domestic assault in Virginia?',
							'a' => 'Virginia has a mandatory arrest policy for domestic assault — police must arrest if probable cause exists, regardless of the alleged victim\'s wishes. An emergency protective order is typically issued immediately, requiring you to leave your home. A domestic assault conviction triggers a federal firearm disability under the Lautenberg Amendment, can affect child custody proceedings, and may have serious immigration consequences for non-citizens. Do not wait to contact an attorney.',
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
						<a href="<?php echo esc_url( home_url( '/misdemeanor-defense-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Misdemeanor Defense
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
						<a href="<?php echo esc_url( home_url( '/expungement-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Expungement
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</div>

				<!-- CTA Box -->
				<div style="background: var(--primary); border-radius: 1rem; padding: 2.25rem; color: white;">
					<h2 style="color: white; margin-bottom: 0.75rem;"><?php _e( 'Charged with Assault? Don\'t Face It Without a Fight.', 'alexander-law' ); ?></h2>
					<p style="opacity: 0.9; margin-bottom: 1.5rem; max-width: 560px;">Every assault case has a defense. The question is whether you have an attorney who knows how to build it. Call Standish Alexander today — 30 years of experience, former prosecutor, free consultation, and the attention your case deserves.</p>
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
					<p><?php _e( 'Charged with assault or battery in Richmond? Talk directly to Standish Alexander — former prosecutor, 30+ years of defense experience, and someone who has seen these cases from both sides.', 'alexander-law' ); ?></p>
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
