import Link from "next/link";
import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alexander Law Office, P.C. | Richmond DUI & Criminal Defense Attorney",
  description: "Over 30 years defending DUI, reckless driving & criminal cases in Richmond VA. 5,000+ cases handled. 10.0 AVVO rating. Free consultation: (804) 355-0016",
  alternates: {
    canonical: "https://www.standishalexander.com",
  },
};

const stats = [
  { number: "30+", label: "Years Experience" },
  { number: "5,000+", label: "Cases Handled" },
  { number: "10.0", label: "AVVO Rating" },
  { number: "A+", label: "BBB Rating" },
];

const practiceAreas = [
  {
    title: "DUI Defense",
    description: "Aggressive defense against DUI charges. We challenge breathalyzer results, police procedures, and fight to protect your driving privileges.",
    icon: (
      <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
      </svg>
    ),
    href: "/practice-areas/dui",
  },
  {
    title: "Reckless Driving",
    description: "In Virginia, reckless driving is a criminal misdemeanor, not just a ticket. We work to reduce charges to non-criminal infractions.",
    icon: (
      <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M13 10V3L4 14h7v7l9-11h-7z" />
      </svg>
    ),
    href: "/practice-areas/reckless-driving",
  },
  {
    title: "Traffic Violations",
    description: "Defending drivers against speeding, license suspension, and other moving violations to protect your record and insurance rates.",
    icon: (
      <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
      </svg>
    ),
    href: "/practice-areas/traffic-violations",
  },
  {
    title: "Criminal Defense",
    description: "Defending misdemeanor and felony charges including drug offenses, assault, theft, and more throughout Central Virginia courts.",
    icon: (
      <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
      </svg>
    ),
    href: "/practice-areas/criminal-defense",
  },
  {
    title: "Expungements",
    description: "Help eligible clients clear their criminal records, opening doors to employment, housing, and educational opportunities.",
    icon: (
      <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    ),
    href: "/practice-areas/expungements",
  },
  {
    title: "License Restoration",
    description: "Helping habitual offenders and those with suspended licenses navigate the complex process of license reinstatement.",
    icon: (
      <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
      </svg>
    ),
    href: "/practice-areas/license-restoration",
  },
];

const testimonials = [
  {
    quote: "Mr. Alexander was able to reduce my 91/70 reckless driving to a civil ticket with a $100 fine and clean driver's license. His price was extremely reasonable.",
    author: "Former Client",
    case: "Reckless Driving - Hopewell, VA",
  },
  {
    quote: "We were terrified when my spouse was charged with a criminal offense. Stan put our minds at ease and was very thorough in getting the facts. The end result was dismissal of the case.",
    author: "Criminal Defense Client",
    case: "Criminal Charge - Dismissed",
  },
  {
    quote: "He had the connections and the knowledge to get my 96/70 reduced to driving school. It is a great investment in having an attorney like Stan representing you.",
    author: "Satisfied Client",
    case: "Reckless Driving - Reduced",
  },
];

const awards = [
  { name: "National Trial Lawyers Top 100", year: "2024" },
  { name: "Top 25 Motor Vehicle Law", year: "2024" },
  { name: "AVVO Client's Choice Award", year: "2025" },
  { name: "Lawyers of Distinction", year: "2024" },
  { name: "Best Attorneys of America", year: "2024" },
];

export default function Home() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative min-h-screen flex items-center justify-center bg-[#1e3a5f] hero-pattern overflow-hidden">
        {/* Background gradient overlay */}
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />

        {/* Animated background shapes */}
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute -top-40 -right-40 w-80 h-80 bg-[#c9a227]/10 rounded-full blur-3xl" />
          <div className="absolute -bottom-40 -left-40 w-80 h-80 bg-[#c9a227]/10 rounded-full blur-3xl" />
        </div>

        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
          <div className="animate-fade-in">
            <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
              Richmond&apos;s Trusted Defense Attorney
            </p>
            <h1 className="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-white leading-tight mb-6">
              Aggressive Legal Defense
              <span className="block text-[#c9a227] mt-2">When You Need It Most</span>
            </h1>
            <p className="text-xl text-gray-300 max-w-3xl mx-auto mb-8">
              Over 30 years of experience defending DUI, reckless driving, and criminal cases
              throughout Richmond and Central Virginia. Your future deserves a fierce advocate.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <a
                href="tel:804-355-0016"
                className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#c9a227] text-white font-bold rounded-lg hover:bg-[#d4b84a] transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-1"
              >
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                Call (804) 355-0016
              </a>
              <Link
                href="/contact"
                className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-[#1e3a5f] transition-all duration-200"
              >
                Free Consultation
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </Link>
            </div>
          </div>
        </div>

        {/* Scroll indicator */}
        <div className="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
          <svg className="w-6 h-6 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 14l-7 7m0 0l-7-7m7 7V3" />
          </svg>
        </div>
      </section>

      {/* Stats Section */}
      <section className="bg-white py-16 -mt-16 relative z-10">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="bg-white rounded-2xl shadow-2xl p-8 md:p-12 grid grid-cols-2 md:grid-cols-4 gap-8">
            {stats.map((stat, index) => (
              <div key={index} className="text-center">
                <p className="text-4xl md:text-5xl font-serif font-bold text-[#1e3a5f]">
                  {stat.number}
                </p>
                <p className="text-gray-600 font-medium mt-2">{stat.label}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Practice Areas Section */}
      <section className="py-20 bg-gray-50" id="practice-areas">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-2">
              How We Can Help
            </p>
            <h2 className="text-3xl md:text-4xl font-serif font-bold text-[#1e3a5f]">
              Practice Areas
            </h2>
            <p className="mt-4 text-gray-600 max-w-2xl mx-auto">
              Comprehensive legal defense services for traffic violations, DUI charges,
              and criminal cases throughout Central Virginia.
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {practiceAreas.map((area, index) => (
              <Link
                key={index}
                href={area.href}
                className="group bg-white rounded-xl p-8 shadow-lg card-hover border border-gray-100"
              >
                <div className="w-16 h-16 bg-[#1e3a5f]/10 rounded-xl flex items-center justify-center text-[#1e3a5f] group-hover:bg-[#c9a227] group-hover:text-white transition-all duration-300 mb-6">
                  {area.icon}
                </div>
                <h3 className="text-xl font-serif font-bold text-[#1e3a5f] mb-3 group-hover:text-[#c9a227] transition-colors">
                  {area.title}
                </h3>
                <p className="text-gray-600 mb-4">{area.description}</p>
                <span className="inline-flex items-center text-[#c9a227] font-semibold group-hover:gap-2 transition-all">
                  Learn More
                  <svg className="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>
                </span>
              </Link>
            ))}
          </div>
        </div>
      </section>

      {/* About Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-2">
                About Your Attorney
              </p>
              <h2 className="text-3xl md:text-4xl font-serif font-bold text-[#1e3a5f] mb-6">
                Standish Alexander, Esq.
              </h2>
              <div className="prose prose-lg text-gray-600">
                <p>
                  A graduate of the University of Virginia (1990) and the T.C. Williams School
                  of Law at the University of Richmond (1993), Standish Alexander has been
                  providing aggressive legal defense since 1994.
                </p>
                <p>
                  With over <strong>5,000 cases</strong> handled throughout his career, Mr. Alexander
                  brings unparalleled experience to every case. He appears daily in the courts
                  of Richmond and Central Virginia, having developed strong relationships with
                  judges and prosecutors across multiple jurisdictions.
                </p>
                <p>
                  Licensed to practice in Virginia state courts, the U.S. District Court for
                  the Eastern District of Virginia, and the U.S. Bankruptcy Court, Mr. Alexander
                  is also certified as court-appointed counsel for felonies and misdemeanors.
                </p>
              </div>
              <div className="mt-8 flex flex-wrap gap-4">
                <Link
                  href="/about"
                  className="inline-flex items-center gap-2 px-6 py-3 bg-[#1e3a5f] text-white font-semibold rounded-lg hover:bg-[#0f2744] transition-colors"
                >
                  Read Full Bio
                  <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>
                </Link>
                <Link
                  href="/results"
                  className="inline-flex items-center gap-2 px-6 py-3 border-2 border-[#1e3a5f] text-[#1e3a5f] font-semibold rounded-lg hover:bg-[#1e3a5f] hover:text-white transition-colors"
                >
                  View Case Results
                </Link>
              </div>
            </div>
            <div className="relative">
              <div className="bg-[#1e3a5f] rounded-2xl p-8 text-white">
                <h3 className="font-serif text-2xl font-bold mb-6">Awards & Recognition</h3>
                <ul className="space-y-4">
                  {awards.map((award, index) => (
                    <li key={index} className="flex items-center gap-3">
                      <svg className="w-6 h-6 text-[#c9a227] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                      </svg>
                      <div>
                        <p className="font-semibold">{award.name}</p>
                        <p className="text-sm text-gray-300">{award.year}</p>
                      </div>
                    </li>
                  ))}
                </ul>
                <div className="mt-8 pt-6 border-t border-white/20">
                  <div className="flex items-center gap-4">
                    <div className="text-center">
                      <p className="text-3xl font-bold text-[#c9a227]">10.0</p>
                      <p className="text-sm">AVVO</p>
                    </div>
                    <div className="text-center">
                      <p className="text-3xl font-bold text-[#c9a227]">A+</p>
                      <p className="text-sm">BBB</p>
                    </div>
                    <div className="text-center">
                      <p className="text-3xl font-bold text-[#c9a227]">Top 100</p>
                      <p className="text-sm">Trial Lawyers</p>
                    </div>
                  </div>
                </div>
              </div>
              {/* Decorative element */}
              <div className="absolute -bottom-4 -right-4 w-32 h-32 bg-[#c9a227]/20 rounded-2xl -z-10" />
            </div>
          </div>
        </div>
      </section>

      {/* Why Choose Us Section */}
      <section className="py-20 bg-[#1e3a5f] text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-2">
              The Alexander Advantage
            </p>
            <h2 className="text-3xl md:text-4xl font-serif font-bold">
              Why Choose Us
            </h2>
          </div>
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {[
              {
                icon: (
                  <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                ),
                title: "30+ Years Experience",
                description: "Three decades of courtroom experience defending clients in Virginia courts.",
              },
              {
                icon: (
                  <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                ),
                title: "Personal Attention",
                description: "Direct communication with your attorney throughout your case.",
              },
              {
                icon: (
                  <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                ),
                title: "Proven Results",
                description: "Track record of reducing and dismissing charges for our clients.",
              },
              {
                icon: (
                  <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                ),
                title: "Affordable Rates",
                description: "Competitive fees with payment plans available upon request.",
              },
            ].map((item, index) => (
              <div key={index} className="text-center">
                <div className="w-16 h-16 bg-[#c9a227] rounded-xl flex items-center justify-center mx-auto mb-4">
                  {item.icon}
                </div>
                <h3 className="font-serif text-xl font-bold mb-2">{item.title}</h3>
                <p className="text-gray-300">{item.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Testimonials Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-2">
              Client Success Stories
            </p>
            <h2 className="text-3xl md:text-4xl font-serif font-bold text-[#1e3a5f]">
              What Our Clients Say
            </h2>
          </div>
          <div className="grid md:grid-cols-3 gap-8">
            {testimonials.map((testimonial, index) => (
              <div
                key={index}
                className="bg-white rounded-xl p-8 shadow-lg relative"
              >
                <svg className="w-12 h-12 text-[#c9a227]/20 absolute top-6 right-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>
                <p className="text-gray-600 mb-6 relative z-10">&ldquo;{testimonial.quote}&rdquo;</p>
                <div className="border-t pt-4">
                  <p className="font-semibold text-[#1e3a5f]">{testimonial.author}</p>
                  <p className="text-sm text-gray-500">{testimonial.case}</p>
                </div>
              </div>
            ))}
          </div>
          <div className="text-center mt-12">
            <Link
              href="/testimonials"
              className="inline-flex items-center gap-2 px-6 py-3 bg-[#1e3a5f] text-white font-semibold rounded-lg hover:bg-[#0f2744] transition-colors"
            >
              Read More Reviews
              <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </Link>
          </div>
        </div>
      </section>

      {/* Virginia DUI Info Section (SEO) */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-4xl mx-auto">
            <div className="text-center mb-12">
              <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-2">
                Know Your Rights
              </p>
              <h2 className="text-3xl md:text-4xl font-serif font-bold text-[#1e3a5f]">
                Virginia DUI & Reckless Driving Laws
              </h2>
            </div>
            <div className="prose prose-lg max-w-none text-gray-600">
              <p>
                <strong>In Virginia, reckless driving is not just a traffic ticket—it&apos;s a Class 1 misdemeanor</strong>,
                the same classification as DUI, assault, and petit larceny. A conviction can result in:
              </p>
              <ul>
                <li>Up to 12 months in jail</li>
                <li>Fines up to $2,500</li>
                <li>License suspension up to 6 months</li>
                <li>6 DMV demerit points</li>
                <li>A permanent criminal record</li>
              </ul>
              <p>
                <strong>Virginia DUI convictions</strong> carry mandatory minimum sentences, license
                suspension, and can impact your employment, professional licenses, and future opportunities.
                With penalties that increase dramatically for repeat offenses, having experienced legal
                representation is critical.
              </p>
              <p>
                Don&apos;t face these serious charges alone. Contact Alexander Law Office for a free
                consultation and learn how we can fight to protect your rights, your license, and your future.
              </p>
            </div>
            <div className="mt-8 text-center">
              <Link
                href="/practice-areas/dui"
                className="inline-flex items-center gap-2 text-[#c9a227] font-semibold hover:gap-3 transition-all"
              >
                Learn More About DUI Defense
                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </Link>
            </div>
          </div>
        </div>
      </section>

      {/* Contact CTA Section */}
      <section className="py-20 bg-gradient-to-br from-[#1e3a5f] to-[#0f2744] text-white relative overflow-hidden">
        <div className="absolute inset-0 hero-pattern opacity-30" />
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <h2 className="text-3xl md:text-4xl font-serif font-bold mb-6">
                Get Your Free Consultation Today
              </h2>
              <p className="text-xl text-gray-300 mb-8">
                Facing DUI charges, reckless driving, or criminal accusations? Don&apos;t wait.
                Every day matters when building your defense. Contact us now for a confidential,
                no-obligation consultation.
              </p>
              <div className="space-y-4">
                <div className="flex items-center gap-4">
                  <div className="w-12 h-12 bg-[#c9a227] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                  </div>
                  <div>
                    <p className="text-gray-400 text-sm">Call Now</p>
                    <a href="tel:804-355-0016" className="text-2xl font-bold hover:text-[#c9a227] transition-colors">
                      (804) 355-0016
                    </a>
                  </div>
                </div>
                <div className="flex items-center gap-4">
                  <div className="w-12 h-12 bg-[#c9a227] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <div>
                    <p className="text-gray-400 text-sm">Office Location</p>
                    <p className="font-semibold">1000 Greenway Lane, Richmond, VA 23226</p>
                  </div>
                </div>
                <div className="flex items-center gap-4">
                  <div className="w-12 h-12 bg-[#c9a227] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div>
                    <p className="text-gray-400 text-sm">Office Hours</p>
                    <p className="font-semibold">Mon-Fri: 8:00 AM - 6:00 PM</p>
                    <p className="text-sm text-gray-400">Evening & weekend appointments available</p>
                  </div>
                </div>
              </div>
            </div>
            <div className="bg-white rounded-2xl p-8 shadow-2xl text-gray-900">
              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mb-6">
                Request a Free Consultation
              </h3>
              <form className="space-y-4">
                <div>
                  <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-1">
                    Full Name *
                  </label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                    placeholder="Your name"
                  />
                </div>
                <div>
                  <label htmlFor="phone" className="block text-sm font-medium text-gray-700 mb-1">
                    Phone Number *
                  </label>
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    required
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                    placeholder="(804) 555-1234"
                  />
                </div>
                <div>
                  <label htmlFor="email" className="block text-sm font-medium text-gray-700 mb-1">
                    Email Address
                  </label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                    placeholder="your@email.com"
                  />
                </div>
                <div>
                  <label htmlFor="case-type" className="block text-sm font-medium text-gray-700 mb-1">
                    Type of Case *
                  </label>
                  <select
                    id="case-type"
                    name="case-type"
                    required
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                  >
                    <option value="">Select case type</option>
                    <option value="dui">DUI/DWI</option>
                    <option value="reckless">Reckless Driving</option>
                    <option value="traffic">Traffic Violation</option>
                    <option value="criminal">Criminal Defense</option>
                    <option value="expungement">Expungement</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div>
                  <label htmlFor="message" className="block text-sm font-medium text-gray-700 mb-1">
                    Brief Description
                  </label>
                  <textarea
                    id="message"
                    name="message"
                    rows={3}
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all resize-none"
                    placeholder="Briefly describe your situation..."
                  />
                </div>
                <button
                  type="submit"
                  className="w-full py-4 bg-[#c9a227] text-white font-bold rounded-lg hover:bg-[#d4b84a] transition-colors"
                >
                  Request Free Consultation
                </button>
                <p className="text-xs text-gray-500 text-center">
                  By submitting this form, you agree to be contacted about your case.
                  All information is kept strictly confidential.
                </p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
