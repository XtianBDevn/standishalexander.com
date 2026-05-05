<?php
/**
 * Template Name: Expungement Lawyer Richmond VA
 *
 * @package Alexander_Law
 */

add_filter( 'document_title_parts', function( $t ) {
	$t['title'] = 'Expungement Lawyer Richmond VA | Alexander Law';
	return $t;
}, 10, 1 );

add_action( 'wp_head', function () { ?>
<meta name="description" content="Clear your Virginia criminal record. Alexander Law Office helps with expungements — dismissed charges, not guilty verdicts, deferred dispositions. Call (804) 355-0016.">
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
			"description": "Alexander Law Office provides expungement legal services in Richmond, Virginia. Attorney Standish Alexander — former prosecutor with 30+ years experience — helps clients clear eligible Virginia criminal records."
		},
		{
			"@type": "WebPage",
			"name": "Expungement Lawyer Richmond VA | Alexander Law",
			"url": "https://standishalexander.com/expungement-lawyer-richmond-va/",
			"description": "Clear your Virginia criminal record. Alexander Law Office helps with expungements — dismissed charges, not guilty verdicts, deferred dispositions. Call (804) 355-0016.",
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
						"name": "Expungement Lawyer Richmond VA",
						"item": "https://standishalexander.com/expungement-lawyer-richmond-va/"
					}
				]
			}
		},
		{
			"@type": "FAQPage",
			"mainEntity": [
				{
					"@type": "Question",
					"name": "Do I qualify for expungement in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Eligibility depends on the outcome of your case. If your charge was dismissed (nolle prosequi), you were found not guilty, received an absolute pardon, or had a first-time marijuana possession charge under the 2021 reform, you may qualify. Most criminal convictions cannot be expunged under Virginia law — consulting with an attorney is the fastest way to know where you stand."
					}
				},
				{
					"@type": "Question",
					"name": "How long does expungement take in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "The process typically takes 4 to 6 months from filing. The Commonwealth's Attorney has 60 days to object after the petition is served. If the petition is uncontested, the court generally grants it without a hearing. Contested cases take longer."
					}
				},
				{
					"@type": "Question",
					"name": "Does expungement mean the record is completely gone?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "For most practical purposes, yes. An expungement order seals your record with the Virginia State Police and removes it from public background checks. Most employers, landlords, and lenders will not see it. Some law enforcement and licensing agencies retain limited access, but civilian background checks will not surface the record."
					}
				},
				{
					"@type": "Question",
					"name": "Can I expunge a DUI conviction in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Generally no. Virginia does not allow expungement of most convictions, including DUI. However, if your DUI charge was dismissed — through nolle prosequi, acquittal, or completion of a first-offender program — the arrest record may be eligible for expungement. Call us to review your specific situation."
					}
				},
				{
					"@type": "Question",
					"name": "Will an expunged record show on a background check?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Not on standard civilian background checks. Once expunged, your record is sealed from public access. Most employers, landlords, and financial institutions use third-party background screening companies that will not report an expunged record. Certain federal agencies and law enforcement databases may still retain access."
					}
				},
				{
					"@type": "Question",
					"name": "How much does it cost to get a record expunged in Virginia?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Costs include Virginia court filing fees plus attorney fees. The total varies based on complexity, the number of charges, and whether the petition is contested. We discuss fees transparently at your free consultation so there are no surprises."
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
			<h1><?php _e( 'Expungement Lawyer Richmond VA — Clear Your Record', 'alexander-law' ); ?></h1>
			<p class="page-hero-subtitle"><?php _e( 'A prior charge shouldn\'t define your future. If you were never convicted, Virginia law may allow you to erase it entirely.', 'alexander-law' ); ?></p>
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
					<p style="font-size: 1.125rem; line-height: 1.75;">A criminal record in Virginia doesn't just stay in a courthouse filing cabinet. It shows up on every background check — for jobs, housing, loans, and professional licenses. Employers see it. Landlords see it. Banks see it.</p>
					<p>If you were charged but not convicted, or received a deferred disposition that was later dismissed, you may be eligible to have that record expunged under Virginia law. An expungement doesn't just seal your record — it removes it from public access entirely.</p>
					<p>Attorney Standish Alexander has handled expungement cases throughout Richmond and Central Virginia for over 30 years. He knows the law, the courts, and how to get results.</p>
				</div>

				<!-- Virginia Expungement Law -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Virginia Expungement Law (§ 19.2-392.2)', 'alexander-law' ); ?></h2>
					<p>Virginia's expungement statute is narrow compared to many other states. That's precisely why having an experienced attorney review your record matters — people frequently don't know which charges qualify or even what's in their history.</p>

					<div class="card" style="padding: 1.75rem; margin-top: 1.5rem;">
						<h3 style="font-size: 1.125rem; margin-bottom: 1rem;"><?php _e( 'Who Qualifies Under Virginia Law', 'alexander-law' ); ?></h3>
						<ul style="list-style: none; padding: 0; margin: 0;">
							<?php
							$qualifications = [
								'Charges dismissed via nolle prosequi (Commonwealth declines to prosecute)',
								'Acquittals — found not guilty at trial',
								'Absolute pardons granted by the Governor',
								'First-time simple marijuana possession convictions (2021 reform)',
								'Deferred dispositions where the charge was subsequently dismissed',
							];
							foreach ( $qualifications as $item ) :
							?>
							<li style="display: flex; align-items: flex-start; gap: 0.75rem; padding: 0.6rem 0; border-bottom: 1px solid var(--gray-200);">
								<svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
									<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
									<polyline points="22 4 12 14.01 9 11.01"/>
								</svg>
								<span style="font-size: 0.9375rem;"><?php echo esc_html( $item ); ?></span>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<p style="margin-top: 1.25rem;">Once a petition is filed, the Commonwealth's Attorney has <strong>60 days to object</strong>. If there is no objection, the court may grant the expungement without a hearing. If the Commonwealth contests it, a hearing is scheduled and you need an attorney in your corner.</p>
					<p>Even records that appear "sealed" in other systems can surface in certain background checks. A true expungement under § 19.2-392.2 removes them entirely from public access.</p>
				</div>

				<!-- What Can and Cannot Be Expunged -->
				<div class="grid md-grid-cols-2 gap-6" style="margin-bottom: 2.5rem;">
					<div class="card" style="padding: 1.75rem;">
						<h3 style="font-size: 1.0625rem; color: var(--secondary); margin-bottom: 1rem;"><?php _e( 'Records That Can Be Expunged', 'alexander-law' ); ?></h3>
						<ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
							<?php
							$can = [
								'Dismissed charges (nolle prosequi)',
								'Not guilty verdicts',
								'Acquittals',
								'Absolute pardons',
								'First-time marijuana possession (new law)',
								'Deferred dispositions — charge dismissed',
							];
							foreach ( $can as $item ) :
							?>
							<li style="display: flex; gap: 0.5rem; padding: 0.4rem 0; border-bottom: 1px solid var(--gray-200);">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
									<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
									<polyline points="22 4 12 14.01 9 11.01"/>
								</svg>
								<span><?php echo esc_html( $item ); ?></span>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<div class="card" style="padding: 1.75rem;">
						<h3 style="font-size: 1.0625rem; color: #c0392b; margin-bottom: 1rem;"><?php _e( 'Records That CANNOT Be Expunged', 'alexander-law' ); ?></h3>
						<ul style="list-style: none; padding: 0; margin: 0; font-size: 0.875rem;">
							<?php
							$cannot = [
								'Most criminal convictions',
								'Guilty pleas',
								'Pleas of nolo contendere (no contest)',
								'Traffic infractions',
							];
							foreach ( $cannot as $item ) :
							?>
							<li style="display: flex; gap: 0.5rem; padding: 0.4rem 0; border-bottom: 1px solid var(--gray-200);">
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="2.5" style="flex-shrink: 0; margin-top: 2px;">
									<line x1="18" y1="6" x2="6" y2="18"/>
									<line x1="6" y1="6" x2="18" y2="18"/>
								</svg>
								<span><?php echo esc_html( $item ); ?></span>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>

				<!-- The Expungement Process -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'The Virginia Expungement Process', 'alexander-law' ); ?></h2>
					<p>The process has several steps, each with specific requirements. A mistake at any stage — an improperly served petition, missing fingerprints, filing in the wrong court — can delay or derail your case.</p>

					<div style="margin-top: 1.5rem;">
						<?php
						$steps = [
							[
								'num'   => '01',
								'title' => 'Determine Eligibility',
								'desc'  => 'Review your complete criminal history. Many people are unaware of all charges in their record — we pull everything so nothing is missed.',
							],
							[
								'num'   => '02',
								'title' => 'File Petition in Circuit Court',
								'desc'  => 'The petition must be filed in the circuit court of the jurisdiction where the charge originally occurred.',
							],
							[
								'num'   => '03',
								'title' => 'Fingerprints & Certified Records',
								'desc'  => 'You must provide fingerprints and a certified copy of your arrest record. We coordinate this on your behalf.',
							],
							[
								'num'   => '04',
								'title' => 'Serve the Commonwealth\'s Attorney',
								'desc'  => 'The petition is formally served on the Commonwealth\'s Attorney, who then has 60 days to respond.',
							],
							[
								'num'   => '05',
								'title' => 'Hearing (If Contested)',
								'desc'  => 'If the Commonwealth objects, a hearing is scheduled. We present your case before the judge and argue why the record should be expunged.',
							],
							[
								'num'   => '06',
								'title' => 'Order of Expungement',
								'desc'  => 'If granted, the court order is sent to the Virginia State Police. Your record is sealed and removed from public background check databases.',
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

				<!-- Why Hire a Lawyer -->
				<div class="card bg-muted" style="padding: 2rem; margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Why Hire a Lawyer for an Expungement?', 'alexander-law' ); ?></h2>
					<p>Expungements are not automatically granted. Virginia courts take them seriously, and the Commonwealth's Attorney can — and does — object. Here is what an experienced expungement attorney does for you:</p>
					<ul style="list-style: none; padding: 0; margin: 1rem 0 0;">
						<?php
						$reasons = [
							'Identify all eligible records in your history — people often don\'t know what\'s there',
							'Properly draft, file, and serve all required documents in the correct court',
							'Ensure fingerprints and certified records are submitted correctly',
							'Argue your petition if the Commonwealth objects',
							'Handle multi-county expungements when charges span different jurisdictions',
						];
						foreach ( $reasons as $reason ) :
						?>
						<li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.875rem;">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="var(--secondary)" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
								<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
								<polyline points="22 4 12 14.01 9 11.01"/>
							</svg>
							<span style="font-size: 0.9375rem;"><?php echo esc_html( $reason ); ?></span>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<!-- Courts We Handle -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1rem;"><?php _e( 'Richmond-Area Courts We Handle Expungements In', 'alexander-law' ); ?></h2>
					<div class="grid md-grid-cols-2 gap-4">
						<?php
						$courts = [
							'Richmond Circuit Court',
							'Henrico Circuit Court',
							'Chesterfield Circuit Court',
							'Hanover Circuit Court',
							'Petersburg Circuit Court',
						];
						foreach ( $courts as $court ) :
						?>
						<div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.875rem 1rem; background: white; border: 1px solid var(--gray-200); border-radius: 0.5rem;">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--secondary)" stroke-width="2" style="flex-shrink: 0;">
								<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
								<polyline points="9 22 9 12 15 12 15 22"/>
							</svg>
							<span style="font-size: 0.9375rem; font-weight: 500;"><?php echo esc_html( $court ); ?></span>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- FAQ -->
				<div style="margin-bottom: 2.5rem;">
					<h2 style="margin-bottom: 1.5rem;"><?php _e( 'Expungement FAQs', 'alexander-law' ); ?></h2>
					<?php
					$faqs = [
						[
							'q' => 'Do I qualify for expungement in Virginia?',
							'a' => 'Eligibility depends on the outcome of your case, not the charge itself. If your charge was dismissed, you were acquitted, received an absolute pardon, or had a qualifying first-time marijuana possession charge under the 2021 reform, you may qualify. Most convictions — including guilty pleas and no-contest pleas — are not eligible. The fastest way to know is to call us for a free review of your record.',
						],
						[
							'q' => 'How long does expungement take in Virginia?',
							'a' => 'Typically 4 to 6 months from the date of filing. The Commonwealth\'s Attorney has 60 days to respond after service of the petition. If uncontested, the court usually grants the order without a formal hearing. Contested cases take longer depending on the court\'s docket.',
						],
						[
							'q' => 'Does expungement mean the record is completely gone?',
							'a' => 'For all practical purposes, yes. An expungement order seals your record with the Virginia State Police and removes it from civilian background check databases. Employers, landlords, and financial institutions conducting standard background checks will not see it. Some law enforcement agencies and certain licensing boards retain access, but public-facing searches will return clean.',
						],
						[
							'q' => 'Can I expunge a DUI conviction in Virginia?',
							'a' => 'Generally, no. Virginia does not expunge most convictions, and DUI is no exception. However, if your DUI charge was dismissed — through nolle prosequi, acquittal, or successful completion of a first-offender program — the arrest record may be eligible. Call us to review your specific case.',
						],
						[
							'q' => 'Will an expunged record show on a background check?',
							'a' => 'Not on standard civilian background checks. Once expunged, the record is sealed and removed from public access. Most private employers and landlords use third-party screening services that will not report expunged records. Certain federal employers, law enforcement agencies, and security clearance investigations may still have access to sealed records.',
						],
						[
							'q' => 'How much does it cost to get a record expunged in Virginia?',
							'a' => 'Costs include Virginia court filing fees plus attorney fees. The total varies depending on the complexity of your case, the number of charges, and whether the Commonwealth contests the petition. We discuss all fees at your free initial consultation — no surprises, no hidden costs.',
						],
					];
					foreach ( $faqs as $i => $faq ) :
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
						<a href="<?php echo esc_url( home_url( '/drug-possession-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Drug Possession Defense
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
						<a href="<?php echo esc_url( home_url( '/misdemeanor-defense-lawyer-richmond-va/' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--primary); font-weight: 500; text-decoration: none; padding: 0.5rem 1rem; border: 1px solid var(--primary); border-radius: 2rem;">
							Misdemeanor Defense
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</a>
					</div>
				</div>

				<!-- CTA Box -->
				<div style="background: var(--primary); border-radius: 1rem; padding: 2.25rem; color: white;">
					<h2 style="color: white; margin-bottom: 0.75rem;"><?php _e( 'Ready for a Fresh Start? Call Today.', 'alexander-law' ); ?></h2>
					<p style="opacity: 0.9; margin-bottom: 1.5rem; max-width: 560px;">You may be one petition away from a clean record. Alexander Law Office will review your history for free and tell you exactly where you stand — no obligation.</p>
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
					<p><?php _e( 'Find out if your record qualifies for expungement. Speak with Standish Alexander directly — no cost, no obligation.', 'alexander-law' ); ?></p>
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
