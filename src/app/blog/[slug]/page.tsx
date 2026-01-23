import { Metadata } from 'next';
import Link from 'next/link';
import { notFound } from 'next/navigation';

// Local blog posts with full content for SEO
const blogPosts: Record<string, {
  title: string;
  description: string;
  category: string;
  pubDate: string;
  content: string;
  relatedPosts: string[];
}> = {
  'virginia-dui-blood-alcohol-limits': {
    title: 'Understanding Virginia DUI Laws: Blood Alcohol Limits',
    description: 'Learn about Virginia\'s BAC limits, including the 0.08% standard for drivers 21+, 0.02% for underage drivers, and enhanced penalties for 0.15%+ BAC levels in Richmond and throughout Virginia.',
    category: 'DUI Defense',
    pubDate: '2024-01-15',
    relatedPosts: ['virginia-implied-consent-refusing-breathalyzer', 'richmond-traffic-court-what-to-expect'],
    content: `
## Virginia DUI Blood Alcohol Content (BAC) Limits

Virginia takes driving under the influence extremely seriously, with strict BAC limits that vary based on the driver's age and license type. Understanding these limits is crucial for anyone driving in Richmond, Henrico, Chesterfield, and throughout Central Virginia.

### Standard BAC Limits in Virginia

**For Drivers 21 and Over:**
- **0.08% BAC** - The standard legal limit for adult drivers
- At this level, you are considered legally intoxicated regardless of how "sober" you may feel

**For Drivers Under 21:**
- **0.02% BAC** - Virginia has a "zero tolerance" policy for underage drinking and driving
- Even a small amount of alcohol can result in DUI charges for young drivers

**For Commercial Driver's License (CDL) Holders:**
- **0.04% BAC** - Commercial drivers are held to a higher standard
- This applies whether driving a commercial vehicle or personal vehicle

### Enhanced Penalties for High BAC

Virginia law provides for enhanced penalties when a driver's BAC reaches certain elevated levels:

**0.15% to 0.20% BAC:**
- Mandatory minimum 5 days in jail (first offense)
- Mandatory minimum 10 days in jail (second offense)
- Additional fines and longer license suspension periods

**0.20% BAC and Above:**
- Mandatory minimum 10 days in jail (first offense)
- Mandatory minimum 20 days in jail (second offense)
- Significantly increased fines and penalties

### How BAC is Measured in Richmond-Area Courts

Virginia courts accept several methods of measuring blood alcohol content:

1. **Breath Tests (Breathalyzer)** - Most common roadside and station tests
2. **Blood Tests** - Often used in accidents or when breath tests are refused
3. **Certificate of Analysis** - Official documentation submitted to courts

### Defenses Against BAC Evidence

An experienced Richmond DUI attorney can challenge BAC evidence on several grounds:

- **Improper calibration** of testing equipment
- **Chain of custody** issues with blood samples
- **Rising BAC defense** - your BAC may have been below the limit while actually driving
- **Medical conditions** that can affect breath test accuracy
- **Mouth alcohol** from recent use of mouthwash, breath spray, or certain medications

### Richmond Courts Handling DUI Cases

If you're charged with DUI in the greater Richmond area, your case may be heard in:

- Richmond General District Court
- Henrico County General District Court
- Chesterfield County General District Court
- Hanover County General District Court

Each court has its own procedures and typical outcomes. Having an attorney familiar with these local courts is invaluable.

### Contact a Richmond DUI Defense Attorney

If you've been charged with DUI in Richmond or the surrounding areas, time is critical. Contact Alexander Law Office for a free consultation to discuss your case and learn about your options for defense.
    `
  },
  'reckless-driving-virginia-class-1-misdemeanor': {
    title: 'Reckless Driving in Virginia: A Class 1 Misdemeanor Explained',
    description: 'In Virginia, reckless driving is a criminal offense, not just a traffic ticket. Learn about the penalties, including potential jail time, and how an experienced Richmond defense attorney can help.',
    category: 'Reckless Driving',
    pubDate: '2024-01-10',
    relatedPosts: ['speeding-over-85-mph-virginia-reckless-driving', 'richmond-traffic-court-what-to-expect'],
    content: `
## Reckless Driving in Virginia: More Serious Than You Think

Many drivers are shocked to learn that reckless driving in Virginia is not simply a traffic ticket—it's a **Class 1 Misdemeanor**, the same classification as assault and battery, DUI, and petit larceny. A conviction creates a permanent criminal record that can affect your employment, security clearances, and insurance rates.

### What Constitutes Reckless Driving in Virginia?

Under Virginia Code § 46.2-852 through § 46.2-868, reckless driving includes:

**Speed-Related Offenses:**
- Driving 20 mph or more over the posted speed limit
- Driving over 85 mph regardless of the speed limit
- Racing on highways

**Dangerous Driving Behaviors:**
- Failing to maintain control of your vehicle
- Passing a stopped school bus
- Passing on a curve or at the crest of a hill
- Driving with faulty brakes
- Passing an emergency vehicle
- Driving too fast for conditions

### Penalties for Reckless Driving in Virginia

As a Class 1 Misdemeanor, reckless driving carries serious potential penalties:

**Criminal Penalties:**
- Up to 12 months in jail
- Fines up to $2,500
- License suspension up to 6 months
- 6 DMV demerit points (remain on record for 11 years)

**Collateral Consequences:**
- Permanent criminal record
- Increased insurance rates (often 300%+ increase)
- Potential loss of security clearances
- Employment difficulties
- Immigration consequences for non-citizens

### Why Reckless Driving Cases Need an Attorney

Unlike simple speeding tickets, reckless driving charges warrant legal representation because:

1. **It's a criminal charge** - You have the right to a trial and legal representation
2. **Permanent record** - A conviction follows you for life
3. **Negotiation opportunities** - An attorney may negotiate reduced charges
4. **Procedural defenses** - Calibration issues, radar certification, and officer training can be challenged
5. **Local court knowledge** - Each Virginia court handles these cases differently

### Common Defenses for Reckless Driving

An experienced Richmond reckless driving attorney can explore defenses such as:

- **Speedometer calibration** - Proving your speedometer was inaccurate
- **Radar/LIDAR challenges** - Questioning equipment accuracy or officer training
- **Emergency circumstances** - Medical emergencies or avoiding accidents
- **Improper speed zone posting** - Signs not meeting Virginia requirements
- **Factual disputes** - Challenging the officer's observations

### Reckless Driving on I-95 and I-64

Richmond's location along major interstate corridors means many reckless driving charges occur on I-95 and I-64. These highways often have speed limits of 70 mph, meaning:

- 85 mph = Automatic reckless driving
- 90+ mph = Enhanced penalties likely
- Out-of-state drivers are frequently charged

If you received a reckless driving ticket while passing through Richmond on the interstate, you still must appear in court or have an attorney appear on your behalf.

### Richmond-Area Courts for Reckless Driving

Your case will be heard based on where the alleged offense occurred:

- **Richmond City** - Richmond General District Court
- **Henrico County** - Henrico General District Court (East or West)
- **Chesterfield County** - Chesterfield General District Court
- **Hanover County** - Hanover General District Court

### Get Help From a Richmond Reckless Driving Attorney

Don't treat a reckless driving charge like a simple traffic ticket. The consequences are too serious. Contact Alexander Law Office for a free consultation to discuss your defense options.
    `
  },
  'richmond-traffic-court-what-to-expect': {
    title: 'Richmond Traffic Court: What to Expect at Your Hearing',
    description: 'A comprehensive guide to Richmond General District Court traffic proceedings. Learn about court procedures, what to wear, and how an attorney can represent you in Henrico, Chesterfield, and Richmond courts.',
    category: 'Traffic Law',
    pubDate: '2024-01-05',
    relatedPosts: ['virginia-license-suspension-restricted-privileges', 'reckless-driving-virginia-class-1-misdemeanor'],
    content: `
## What to Expect at Richmond Traffic Court

Whether you're facing a simple speeding ticket or a more serious traffic charge, appearing in Richmond-area traffic court can be intimidating if you don't know what to expect. This guide will help you prepare for your court date.

### Richmond-Area Traffic Courts

Traffic cases in the Greater Richmond area are heard in General District Courts:

**Richmond General District Court**
- John Marshall Courts Building
- 400 N. 9th Street, Richmond, VA 23219
- Handles cases occurring within Richmond City limits

**Henrico County General District Courts**
- Eastern Location: 7580 E. Parham Road, Henrico
- Western Location: 4301 E. Parham Road, Henrico
- Location depends on where the ticket was issued

**Chesterfield County General District Court**
- 9500 Courthouse Road, Chesterfield, VA 23832
- Handles all Chesterfield County traffic matters

**Hanover County General District Court**
- 7530 County Complex Road, Hanover, VA 23069
- Covers traffic offenses in Hanover County

### Before Your Court Date

**What to Bring:**
- Your traffic summons/ticket
- Valid photo ID
- Any evidence supporting your case
- Documentation of driving school completion (if applicable)
- Proof of vehicle repairs (if relevant)

**What to Wear:**
Dress professionally as if for a job interview:
- Business casual at minimum
- No shorts, tank tops, or flip-flops
- Remove hats before entering the courtroom
- Turn off or silence your cell phone

### The Court Process

**1. Arrival and Check-In**
- Arrive at least 30 minutes early
- Go through security screening
- Find your assigned courtroom
- Check in with the clerk if required

**2. Courtroom Procedures**
- Stand when the judge enters
- Address the judge as "Your Honor"
- Wait for your case to be called
- Speak clearly and respectfully

**3. When Your Case is Called**
- Approach the bench area when your name is called
- The officer may present evidence first
- You'll have an opportunity to respond
- The judge will make a ruling

### Types of Outcomes

**Guilty Finding:**
- You'll be assessed fines and court costs
- Points may be added to your license
- Payment plans may be available

**Not Guilty:**
- Case is dismissed
- No fines, costs, or points

**Prepayment/Waiver:**
- Some minor offenses allow prepayment without appearing
- This constitutes a guilty plea

**Continuance:**
- Case is rescheduled to a later date
- May be requested by either party for good cause

**Reduced Charge:**
- Prosecutor or judge may reduce the charge
- Common in reckless driving cases

### Why Hire a Traffic Attorney?

An attorney can:
- Appear in court on your behalf (for most traffic charges)
- Negotiate with prosecutors for reduced charges
- Present legal defenses you may not know
- Protect your driving record and insurance rates
- Navigate court procedures efficiently

### Common Questions

**Do I have to appear personally?**
For most traffic infractions, an attorney can appear on your behalf. For criminal traffic charges (DUI, reckless driving), you typically must appear unless the court allows otherwise.

**What if I live out of state?**
Out-of-state drivers charged with Virginia traffic offenses still must address the charges. An attorney can often handle everything without requiring your presence.

**Can I appeal a decision?**
Yes, you can appeal to Circuit Court within 10 days, though this results in a completely new trial.

### Contact Alexander Law Office

If you have a traffic court date in Richmond, Henrico, Chesterfield, or Hanover, contact us for a free consultation. We can explain your options and, if retained, handle your court appearance professionally.
    `
  },
  'virginia-implied-consent-refusing-breathalyzer': {
    title: 'Virginia Implied Consent Law: Refusing a Breathalyzer',
    description: 'Understanding the consequences of refusing a breath test in Virginia. Learn about license suspension, court admissibility, and your rights during a Richmond-area DUI stop.',
    category: 'DUI Defense',
    pubDate: '2024-01-01',
    relatedPosts: ['virginia-dui-blood-alcohol-limits', 'virginia-license-suspension-restricted-privileges'],
    content: `
## Virginia's Implied Consent Law Explained

When you obtain a Virginia driver's license or drive on Virginia roads, you automatically consent to chemical testing if lawfully arrested for DUI. Understanding the implied consent law is crucial for anyone facing a potential DUI situation in Richmond or anywhere in Virginia.

### What is Implied Consent?

Under Virginia Code § 18.2-268.2, by driving on Virginia roads, you have implicitly consented to:
- Breath tests
- Blood tests
- Both, if requested by law enforcement

This consent is triggered when:
1. You are lawfully arrested for DUI
2. An officer has probable cause to believe you were driving under the influence
3. The officer requests a chemical test

### Roadside Breath Tests vs. Station Tests

**Preliminary Breath Test (PBT) - Roadside:**
- This is OPTIONAL in Virginia
- You can refuse without direct penalty
- Results typically aren't admissible in court
- Used to establish probable cause

**Official Breath Test - At Station:**
- This is subject to implied consent
- Refusal carries significant penalties
- Results are admissible in court
- Uses calibrated, certified equipment

### Consequences of Refusing the Official Breath Test

**First Refusal (No Prior DUI Convictions):**
- Automatic 12-month license suspension
- No restricted license available for first 12 months
- Civil offense (not criminal)
- Can be used against you in court

**Second Refusal (Prior DUI or Refusal Within 10 Years):**
- 3-year license suspension
- Class 1 Misdemeanor criminal charge
- Up to 12 months in jail
- Fines up to $2,500

**Third or Subsequent Refusal:**
- 3-year license suspension
- Class 1 Misdemeanor
- Mandatory minimum 10 days in jail
- Enhanced fines

### Your Rights During a DUI Stop

Despite implied consent laws, you retain certain rights:

**You CAN:**
- Decline the preliminary roadside breath test
- Ask if you're free to leave
- Refuse to answer incriminating questions
- Request an attorney
- Remain silent

**You CANNOT (Without Penalty):**
- Refuse the official breath or blood test after lawful arrest
- Obstruct the testing process
- Provide false identification

### Strategic Considerations

The decision to submit to or refuse testing is complex and situation-dependent. Factors to consider:

**Arguments for Submitting:**
- Avoid automatic license suspension
- May result in lower BAC reading than expected
- Shows cooperation to court
- Preserves restricted license eligibility

**Arguments for Refusing:**
- No direct evidence of intoxication level
- Prosecution's case may be weaker
- May be advisable if significantly impaired
- Time allows BAC to decrease naturally

### Challenging Implied Consent Violations

An experienced DUI attorney can challenge implied consent penalties on grounds including:

- **Unlawful arrest** - If the initial arrest wasn't lawful, implied consent doesn't apply
- **Improper advisement** - Officers must inform you of consequences
- **Involuntary refusal** - Medical conditions preventing compliance
- **Equipment issues** - Problems with testing equipment

### What Happens After Refusal in Richmond

If you refuse the breath test in the Richmond area:

1. Your license is immediately confiscated
2. You receive a 7-day temporary permit
3. DMV administrative hearing is scheduled
4. Separate criminal DUI case proceeds
5. Both matters must be addressed

### License Restoration After Refusal

To restore your license after an implied consent suspension:

- Complete the full suspension period
- Pay reinstatement fees to DMV
- Provide proof of insurance (FR-44)
- Complete any court-ordered requirements
- May need ignition interlock (depending on circumstances)

### Contact a Richmond DUI Attorney

If you've refused a breath test in Richmond or the surrounding areas, you need experienced legal representation immediately. Contact Alexander Law Office for a free consultation to discuss your case and defense options.
    `
  },
  'speeding-over-85-mph-virginia-reckless-driving': {
    title: 'Speeding Over 85 MPH in Virginia: Why It\'s Reckless Driving',
    description: 'Virginia law treats speeding over 85 MPH as reckless driving regardless of the speed limit. Learn about penalties and defense strategies for I-95 and I-64 corridor cases.',
    category: 'Reckless Driving',
    pubDate: '2023-12-28',
    relatedPosts: ['reckless-driving-virginia-class-1-misdemeanor', 'richmond-traffic-court-what-to-expect'],
    content: `
## Speeding Over 85 MPH: Automatic Reckless Driving in Virginia

Virginia is one of the strictest states in the nation when it comes to speeding. Under Virginia Code § 46.2-862, driving over 85 mph is automatically classified as reckless driving—a Class 1 Misdemeanor criminal offense—regardless of the posted speed limit.

### Why 85 MPH is the Magic Number

Virginia law establishes two ways speed alone can constitute reckless driving:

1. **Exceeding the speed limit by 20 mph or more** (e.g., 75 in a 55 zone)
2. **Driving over 85 mph regardless of the speed limit**

This means on Virginia interstates with 70 mph speed limits (like I-95 and I-64 through Richmond), going just 16 mph over the limit triggers a criminal charge.

### I-95 and I-64: Richmond's Reckless Driving Hot Spots

Richmond sits at the crossroads of two major interstate highways:

**I-95 Corridor:**
- Major north-south route through Richmond
- 70 mph speed limit in most areas
- 85 mph = reckless driving
- Heavy enforcement, especially in Henrico and Chesterfield

**I-64 Corridor:**
- East-west route through Richmond
- 70 mph speed limit
- Popular commuter route
- Frequent speed enforcement

### Penalties for 85+ MPH Reckless Driving

As a Class 1 Misdemeanor, convictions carry:

**Potential Criminal Penalties:**
- Up to 12 months in jail
- Up to $2,500 in fines
- License suspension up to 6 months
- 6 DMV demerit points (11-year record)
- Permanent criminal record

**Speed-Based Enhancements:**
- **90+ mph**: Jail time becomes more likely
- **100+ mph**: Significant jail time often imposed
- **Accident involved**: Enhanced penalties apply

### Out-of-State Drivers: Special Concerns

Many reckless driving charges in Richmond involve out-of-state drivers who:

- Didn't know Virginia's strict laws
- Were passing through on I-95
- Face difficulty returning for court dates
- May have their home state license affected

If you're from out of state, you must still address Virginia charges. An attorney can often appear on your behalf, minimizing travel requirements.

### Defense Strategies for 85+ MPH Cases

An experienced attorney can pursue several defense approaches:

**Speedometer Calibration:**
- Obtaining a calibration certificate
- Showing your speedometer read lower than actual speed
- May result in reduced charges

**Radar/LIDAR Challenges:**
- Officer training and certification
- Equipment calibration records
- Proper operation procedures

**Reduction Negotiations:**
- Negotiating to improper driving (traffic infraction)
- Negotiating to simple speeding (non-criminal)
- Presenting mitigating factors

**Driving Record Presentation:**
- Clean driving history
- Driving improvement course completion
- Character references

### What Judges Consider

Richmond-area judges typically consider:

- Your actual speed (86 mph vs. 100+ mph)
- Weather and traffic conditions
- Your driving record
- Your reason for traveling
- Whether you have an attorney
- Your demeanor and appearance

### Steps to Take After an 85+ MPH Ticket

1. **Don't panic** - These cases are defensible
2. **Note details** - Write down everything you remember
3. **Get calibration** - Have your speedometer calibrated
4. **Consult an attorney** - Free consultations are available
5. **Don't miss court** - Failure to appear adds more charges

### Court Locations for Interstate Reckless Driving

Your court location depends on where you were stopped:

- **I-95/I-64 in Henrico**: Henrico General District Court
- **I-95 in Chesterfield**: Chesterfield General District Court
- **I-95 in Richmond City**: Richmond General District Court
- **I-64 in Hanover**: Hanover General District Court

### Contact Alexander Law Office

If you've been charged with reckless driving for speeding over 85 mph on I-95, I-64, or anywhere in the Richmond area, contact us for a free consultation. With over 30 years of experience in local courts, we can help protect your record and driving privileges.
    `
  },
  'virginia-license-suspension-restricted-privileges': {
    title: 'License Suspension in Virginia: How to Get Restricted Driving Privileges',
    description: 'After a DUI or excessive points, you may qualify for restricted driving privileges in Virginia. Learn how Richmond drivers can maintain their ability to drive to work and essential appointments.',
    category: 'Traffic Law',
    pubDate: '2023-12-20',
    relatedPosts: ['virginia-dui-blood-alcohol-limits', 'virginia-implied-consent-refusing-breathalyzer'],
    content: `
## Getting Restricted Driving Privileges in Virginia

A license suspension doesn't always mean you can't drive at all. Virginia law allows many drivers with suspended licenses to obtain restricted driving privileges for essential purposes. Understanding this process can help Richmond-area drivers maintain their ability to work and meet family obligations.

### What is a Restricted License?

A restricted license allows you to drive for specific, court-approved purposes during a suspension period. This isn't a full license—it comes with strict limitations on when and where you can drive.

### Common Reasons for License Suspension

**DUI-Related Suspensions:**
- First offense DUI: 7-day to 1-year suspension
- Second offense DUI: 3-year suspension (minimum)
- Third offense DUI: Indefinite suspension
- Refusal of breath test: 1-3 year suspension

**Point-Related Suspensions:**
- Accumulating too many demerit points
- Multiple convictions in short period

**Other Suspensions:**
- Failure to pay fines
- Failure to appear in court
- Driving without insurance
- Unpaid child support

### Typical Restricted License Privileges

Courts commonly grant restricted privileges for:

**Work-Related:**
- Driving to and from work
- Driving during work hours (if required for job)
- Travel to job interviews

**Education:**
- Driving to school or college
- Transporting children to school

**Medical:**
- Doctor's appointments
- Medical emergencies
- Pharmacy visits

**Religious:**
- Attending religious services

**Court-Ordered:**
- ASAP (Alcohol Safety Action Program) classes
- Community service locations
- Probation appointments

### Requirements for Restricted License

To obtain restricted driving privileges, you typically must:

1. **Complete initial hard suspension period** (if applicable)
2. **Enroll in VASAP** (for DUI cases)
3. **Install ignition interlock** (often required for DUI)
4. **Obtain SR-22/FR-44 insurance**
5. **Pay required fees**
6. **Petition the court** or meet DMV requirements

### The Ignition Interlock Requirement

For many DUI-related suspensions, Virginia requires an ignition interlock device:

**What It Does:**
- Requires breath sample before starting vehicle
- Periodic rolling retests while driving
- Records all test results

**Duration:**
- First offense: Minimum 6 months (often 12 months)
- Second offense: Minimum 12 months to 3 years
- Third offense: Minimum 3 years (often longer)

**Costs:**
- Installation: $75-$150
- Monthly monitoring: $60-$90
- Removal: $50-$100

### SR-22/FR-44 Insurance

Virginia requires high-risk insurance certification:

**SR-22:**
- Standard proof of insurance filing
- Required for many license reinstatements
- Must maintain for 3 years typically

**FR-44:**
- Virginia-specific requirement for DUI
- Requires higher liability limits
- $50,000/$100,000 bodily injury coverage
- $40,000 property damage coverage
- Significantly more expensive than standard insurance

### How to Apply for Restricted Privileges

**For Court-Ordered Suspensions:**
1. Consult with your attorney
2. File a petition with the sentencing court
3. Attend a hearing (may not always be required)
4. Provide documentation of necessity
5. Receive court order granting privileges

**For DMV Administrative Suspensions:**
1. Contact DMV or visit their website
2. Complete required waiting period
3. Submit necessary documentation
4. Pay reinstatement fees
5. Meet all compliance requirements

### Richmond-Area Resources

**DMV Customer Service Centers:**
- Richmond (various locations)
- Henrico
- Chesterfield
- Mechanicsville

**VASAP (Virginia Alcohol Safety Action Program):**
- Colonial Heights ASAP: Serves Richmond area
- Required enrollment for DUI restricted licenses

### Common Mistakes to Avoid

**Don't:**
- Drive outside restricted hours/purposes
- Let someone else blow into interlock
- Miss ASAP classes
- Let SR-22/FR-44 lapse
- Forget to carry restricted license paperwork

**Consequences of Violations:**
- Additional criminal charges
- Extended suspension
- Loss of restricted privileges
- Possible jail time

### Full License Restoration

After completing your suspension period:

1. Complete all court requirements
2. Pass any required VASAP programs
3. Pay all fines and reinstatement fees
4. Maintain interlock (if required) for full period
5. Provide proof of insurance
6. Apply for full reinstatement at DMV

### Contact Alexander Law Office

Navigating license suspension and restricted privileges in Virginia can be complex. If you're facing a suspension or need help obtaining restricted driving privileges in Richmond, Henrico, Chesterfield, or surrounding areas, contact us for a free consultation.
    `
  }
};

type Params = Promise<{ slug: string }>;

// Generate static params for all blog posts
export async function generateStaticParams() {
  return Object.keys(blogPosts).map((slug) => ({
    slug,
  }));
}

// Generate metadata for each blog post
export async function generateMetadata({ params }: { params: Params }): Promise<Metadata> {
  const { slug } = await params;
  const post = blogPosts[slug];

  if (!post) {
    return {
      title: 'Article Not Found | Alexander Law Office',
    };
  }

  return {
    title: `${post.title} | Richmond VA DUI Attorney`,
    description: post.description,
    keywords: `${post.category}, Richmond VA, Virginia law, ${post.title.toLowerCase()}, DUI defense, traffic attorney`,
    openGraph: {
      title: post.title,
      description: post.description,
      url: `https://www.standishalexander.com/blog/${slug}`,
      siteName: 'Alexander Law Office, P.C.',
      locale: 'en_US',
      type: 'article',
      publishedTime: post.pubDate,
      authors: ['Standish Alexander'],
    },
    twitter: {
      card: 'summary_large_image',
      title: post.title,
      description: post.description,
    },
    alternates: {
      canonical: `https://www.standishalexander.com/blog/${slug}`,
    },
    robots: {
      index: true,
      follow: true,
    },
  };
}

export default async function BlogPostPage({ params }: { params: Params }) {
  const { slug } = await params;
  const post = blogPosts[slug];

  if (!post) {
    notFound();
  }

  // Get related posts
  const relatedPostsData = post.relatedPosts
    .map(relatedSlug => blogPosts[relatedSlug] ? { slug: relatedSlug, ...blogPosts[relatedSlug] } : null)
    .filter(Boolean);

  // Structured data for the article
  const articleStructuredData = {
    '@context': 'https://schema.org',
    '@type': 'Article',
    headline: post.title,
    description: post.description,
    datePublished: post.pubDate,
    dateModified: post.pubDate,
    author: {
      '@type': 'Person',
      name: 'Standish Alexander',
      url: 'https://www.standishalexander.com/about'
    },
    publisher: {
      '@type': 'LegalService',
      name: 'Alexander Law Office, P.C.',
      url: 'https://www.standishalexander.com',
      address: {
        '@type': 'PostalAddress',
        streetAddress: '2106 Maywill St, Suite A',
        addressLocality: 'Richmond',
        addressRegion: 'VA',
        postalCode: '23230'
      }
    },
    mainEntityOfPage: {
      '@type': 'WebPage',
      '@id': `https://www.standishalexander.com/blog/${slug}`
    },
    about: [
      { '@type': 'Thing', name: post.category },
      { '@type': 'Thing', name: 'Virginia Law' },
      { '@type': 'Place', name: 'Richmond, Virginia' }
    ]
  };

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(articleStructuredData) }}
      />

      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-primary-dark via-primary to-accent py-16 md:py-24">
        <div className="absolute inset-0 hero-pattern opacity-30" />
        <div className="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <span className="inline-block px-4 py-1 bg-secondary/20 text-secondary rounded-full text-sm font-semibold mb-4">
              {post.category}
            </span>
            <h1 className="text-3xl md:text-4xl lg:text-5xl font-serif text-white mb-4 animate-fade-in">
              {post.title}
            </h1>
            <p className="text-lg text-white/80 max-w-2xl mx-auto">
              {post.description}
            </p>
            <div className="mt-6 flex items-center justify-center gap-4 text-white/60 text-sm">
              <span>By Standish Alexander</span>
              <span>|</span>
              <time dateTime={post.pubDate}>
                {new Date(post.pubDate).toLocaleDateString('en-US', {
                  year: 'numeric',
                  month: 'long',
                  day: 'numeric'
                })}
              </time>
            </div>
          </div>
        </div>
      </section>

      {/* Breadcrumb */}
      <nav className="bg-muted py-3" aria-label="Breadcrumb">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <ol className="flex items-center space-x-2 text-sm" itemScope itemType="https://schema.org/BreadcrumbList">
            <li itemProp="itemListElement" itemScope itemType="https://schema.org/ListItem">
              <Link href="/" className="text-text-light hover:text-primary" itemProp="item">
                <span itemProp="name">Home</span>
              </Link>
              <meta itemProp="position" content="1" />
            </li>
            <li className="text-text-light">/</li>
            <li itemProp="itemListElement" itemScope itemType="https://schema.org/ListItem">
              <Link href="/blog" className="text-text-light hover:text-primary" itemProp="item">
                <span itemProp="name">Blog</span>
              </Link>
              <meta itemProp="position" content="2" />
            </li>
            <li className="text-text-light">/</li>
            <li itemProp="itemListElement" itemScope itemType="https://schema.org/ListItem">
              <span className="text-primary font-medium truncate max-w-[200px] inline-block" itemProp="name">
                {post.title}
              </span>
              <meta itemProp="position" content="3" />
            </li>
          </ol>
        </div>
      </nav>

      {/* Main Content */}
      <article className="py-12 md:py-16">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            {/* Article Content */}
            <div className="lg:col-span-2">
              <div
                className="prose prose-lg max-w-none prose-headings:font-serif prose-headings:text-primary prose-h2:text-2xl prose-h3:text-xl prose-p:text-gray-700 prose-li:text-gray-700 prose-strong:text-primary"
                dangerouslySetInnerHTML={{ __html: post.content.replace(/\n/g, '<br/>').replace(/<br\/><br\/>/g, '</p><p>').replace(/## /g, '</p><h2>').replace(/<br\/>### /g, '</h3><h3>').replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') }}
              />

              {/* CTA Box */}
              <div className="mt-12 bg-primary rounded-xl p-8 text-white">
                <h3 className="font-serif text-2xl mb-3">Need Legal Help in Richmond?</h3>
                <p className="text-white/80 mb-6">
                  If you&apos;re facing {post.category.toLowerCase()} charges in Richmond, Henrico, Chesterfield, or
                  surrounding areas, contact Alexander Law Office for a free consultation.
                </p>
                <div className="flex flex-col sm:flex-row gap-4">
                  <a
                    href="tel:8048865013"
                    className="inline-flex items-center justify-center bg-secondary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary-light transition-colors"
                  >
                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    (804) 886-5013
                  </a>
                  <Link
                    href="/contact"
                    className="inline-flex items-center justify-center bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
                  >
                    Free Consultation
                  </Link>
                </div>
              </div>
            </div>

            {/* Sidebar */}
            <aside className="lg:col-span-1">
              <div className="sticky top-24 space-y-8">
                {/* Author Box */}
                <div className="bg-white rounded-xl shadow-md p-6">
                  <h3 className="font-serif text-lg text-primary mb-4">About the Author</h3>
                  <div className="flex items-center gap-4 mb-4">
                    <div className="w-16 h-16 bg-primary rounded-full flex items-center justify-center">
                      <span className="text-2xl font-serif text-secondary">SA</span>
                    </div>
                    <div>
                      <p className="font-semibold text-primary">Standish Alexander</p>
                      <p className="text-sm text-text-light">Attorney at Law</p>
                    </div>
                  </div>
                  <p className="text-sm text-text-light">
                    Over 30 years of experience defending DUI, reckless driving, and criminal cases in Richmond and Central Virginia.
                  </p>
                  <Link
                    href="/about"
                    className="inline-block mt-4 text-sm text-secondary hover:underline"
                  >
                    Read Full Bio
                  </Link>
                </div>

                {/* Related Posts */}
                {relatedPostsData.length > 0 && (
                  <div className="bg-white rounded-xl shadow-md p-6">
                    <h3 className="font-serif text-lg text-primary mb-4">Related Articles</h3>
                    <ul className="space-y-4">
                      {relatedPostsData.map((related) => related && (
                        <li key={related.slug}>
                          <Link
                            href={`/blog/${related.slug}`}
                            className="block hover:bg-muted p-2 -mx-2 rounded-lg transition-colors"
                          >
                            <span className="text-xs text-secondary font-semibold">{related.category}</span>
                            <p className="text-sm text-primary font-medium line-clamp-2">{related.title}</p>
                          </Link>
                        </li>
                      ))}
                    </ul>
                  </div>
                )}

                {/* Quick Contact */}
                <div className="bg-secondary text-white rounded-xl p-6">
                  <h3 className="font-serif text-lg mb-3">Quick Contact</h3>
                  <a
                    href="tel:8048865013"
                    className="block text-2xl font-bold mb-2 hover:text-white/80 transition-colors"
                  >
                    (804) 886-5013
                  </a>
                  <p className="text-white/80 text-sm">
                    Free consultation available.<br />
                    Call today.
                  </p>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </article>

      {/* Back to Blog */}
      <div className="bg-muted py-8">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <Link
            href="/blog"
            className="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors"
          >
            <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 19l-7-7 7-7" />
            </svg>
            Back to Blog
          </Link>
        </div>
      </div>
    </>
  );
}
