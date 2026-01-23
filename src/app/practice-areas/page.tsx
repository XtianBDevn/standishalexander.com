import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Practice Areas | Alexander Law Office - DUI, Reckless Driving & Criminal Defense",
  description: "Practice areas include DUI defense, reckless driving, traffic violations, criminal defense, and expungements in Richmond and Central Virginia.",
  alternates: {
    canonical: "https://www.standishalexander.com/practice-areas",
  },
};

const practiceAreas = [
  {
    title: "DUI Defense",
    description: "Aggressive defense against DUI/DWI charges including first offense, second offense, and felony DUI cases. We challenge breathalyzer results, police procedures, and field sobriety tests.",
    href: "/practice-areas/dui",
    icon: (
      <svg className="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
      </svg>
    ),
    features: ["First & Second Offense DUI", "Refusal Cases", "High BAC Cases", "VASAP Compliance"],
  },
  {
    title: "Reckless Driving",
    description: "In Virginia, reckless driving is a Class 1 misdemeanor criminal offense - not just a traffic ticket. We work to reduce charges to non-criminal infractions when possible.",
    href: "/practice-areas/reckless-driving",
    icon: (
      <svg className="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M13 10V3L4 14h7v7l9-11h-7z" />
      </svg>
    ),
    features: ["Speed-Related Reckless", "General Reckless Driving", "Racing/Exhibition", "Out-of-State Drivers"],
  },
  {
    title: "Traffic Violations",
    description: "Defending drivers against speeding tickets, driving on suspended license, CDL violations, and other moving violations that can impact your record and insurance.",
    href: "/practice-areas/traffic-violations",
    icon: (
      <svg className="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
      </svg>
    ),
    features: ["Speeding Tickets", "Suspended License", "CDL Violations", "Hit and Run"],
  },
  {
    title: "Criminal Defense",
    description: "Comprehensive defense for misdemeanor and felony charges including drug offenses, assault, theft, fraud, and more throughout Central Virginia courts.",
    href: "/practice-areas/criminal-defense",
    icon: (
      <svg className="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
      </svg>
    ),
    features: ["Drug Offenses", "Assault & Battery", "Theft & Fraud", "Juvenile Cases"],
  },
  {
    title: "Expungements",
    description: "Help eligible clients clear their criminal records, removing barriers to employment, housing, education, and other opportunities affected by past charges.",
    href: "/practice-areas/expungements",
    icon: (
      <svg className="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    ),
    features: ["Dismissed Cases", "Not Guilty Verdicts", "Deferred Dispositions", "Eligibility Review"],
  },
  {
    title: "License Restoration",
    description: "Helping habitual offenders and those with suspended licenses navigate the complex process of license reinstatement and restricted license petitions.",
    href: "/practice-areas/license-restoration",
    icon: (
      <svg className="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
      </svg>
    ),
    features: ["Habitual Offender Petitions", "Restricted Licenses", "DMV Hearings", "Compliance Issues"],
  },
];

export default function PracticeAreasPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
            How We Can Help
          </p>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            Practice Areas
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Comprehensive legal defense services for traffic violations, DUI charges,
            and criminal cases throughout Central Virginia.
          </p>
        </div>
      </section>

      {/* Practice Areas Grid */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {practiceAreas.map((area, index) => (
              <Link
                key={index}
                href={area.href}
                className="group bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100"
              >
                <div className="w-20 h-20 bg-[#1e3a5f]/10 rounded-xl flex items-center justify-center text-[#1e3a5f] group-hover:bg-[#c9a227] group-hover:text-white transition-all duration-300 mb-6">
                  {area.icon}
                </div>
                <h2 className="text-2xl font-serif font-bold text-[#1e3a5f] mb-3 group-hover:text-[#c9a227] transition-colors">
                  {area.title}
                </h2>
                <p className="text-gray-600 mb-6">{area.description}</p>
                <ul className="space-y-2 mb-6">
                  {area.features.map((feature, featureIndex) => (
                    <li key={featureIndex} className="flex items-center gap-2 text-sm text-gray-600">
                      <svg className="w-4 h-4 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      {feature}
                    </li>
                  ))}
                </ul>
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

      {/* CTA Section */}
      <section className="py-20 bg-[#1e3a5f] text-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl font-serif font-bold mb-6">
            Don&apos;t See Your Case Type?
          </h2>
          <p className="text-gray-300 mb-8">
            We handle a wide variety of traffic and criminal matters. Contact us to discuss
            your specific situation and learn how we can help.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a
              href="tel:804-355-0016"
              className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#c9a227] text-white font-bold rounded-lg hover:bg-[#d4b84a] transition-colors"
            >
              <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Call (804) 355-0016
            </a>
            <Link
              href="/contact"
              className="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-[#1e3a5f] transition-colors"
            >
              Contact Online
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
