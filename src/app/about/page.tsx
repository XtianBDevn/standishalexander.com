import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "About Standish Alexander | Richmond Criminal Defense Attorney",
  description: "Learn about Standish Alexander, a UVA and UR Law graduate with 30+ years defending DUI, reckless driving & criminal cases in Richmond VA. 10.0 AVVO rating.",
  alternates: {
    canonical: "https://www.standishalexander.com/about",
  },
};

export default function AboutPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
            Your Attorney
          </p>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            About Standish Alexander
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Over three decades of dedicated legal defense in Richmond and Central Virginia
          </p>
        </div>
      </section>

      {/* Main Content */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            {/* Sidebar */}
            <div className="lg:col-span-1">
              <div className="bg-gray-50 rounded-2xl p-8 sticky top-32">
                <div className="w-32 h-32 bg-[#1e3a5f] rounded-full mx-auto mb-6 flex items-center justify-center">
                  <svg className="w-16 h-16 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
                </div>
                <h2 className="text-2xl font-serif font-bold text-[#1e3a5f] text-center mb-2">
                  Standish Alexander
                </h2>
                <p className="text-gray-600 text-center mb-6">Attorney at Law</p>

                <div className="space-y-4 border-t pt-6">
                  <div className="flex items-center gap-3">
                    <svg className="w-5 h-5 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <a href="tel:804-355-0016" className="text-gray-700 hover:text-[#c9a227]">
                      (804) 355-0016
                    </a>
                  </div>
                  <div className="flex items-center gap-3">
                    <svg className="w-5 h-5 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span className="text-gray-700">Richmond, VA</span>
                  </div>
                </div>

                <div className="mt-8 pt-6 border-t">
                  <h3 className="font-semibold text-[#1e3a5f] mb-4">Ratings</h3>
                  <div className="grid grid-cols-2 gap-4">
                    <div className="text-center p-3 bg-white rounded-lg">
                      <p className="text-2xl font-bold text-[#c9a227]">10.0</p>
                      <p className="text-xs text-gray-600">AVVO</p>
                    </div>
                    <div className="text-center p-3 bg-white rounded-lg">
                      <p className="text-2xl font-bold text-[#c9a227]">A+</p>
                      <p className="text-xs text-gray-600">BBB</p>
                    </div>
                  </div>
                </div>

                <Link
                  href="/contact"
                  className="mt-6 block w-full py-3 bg-[#c9a227] text-white text-center font-semibold rounded-lg hover:bg-[#d4b84a] transition-colors"
                >
                  Free Consultation
                </Link>
              </div>
            </div>

            {/* Main Content */}
            <div className="lg:col-span-2">
              <div className="prose prose-lg max-w-none">
                <h2 className="text-3xl font-serif font-bold text-[#1e3a5f] mb-6">
                  Experienced Legal Defense When You Need It Most
                </h2>

                <p>
                  Standish Alexander is a highly experienced criminal and traffic defense attorney with a deep
                  understanding of Virginia&apos;s legal system. With over <strong>30 years of legal experience</strong> and
                  more than <strong>5,000 cases handled</strong>, he brings unparalleled expertise to every client he represents.
                </p>

                <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-10 mb-4">
                  Education & Background
                </h3>
                <p>
                  Mr. Alexander is a <strong>1990 graduate of the University of Virginia</strong> and a
                  <strong>1993 graduate of the T.C. Williams School of Law at the University of Richmond</strong>.
                  He has been practicing law since 1994, dedicating his career to defending individuals charged
                  with traffic violations, DUI, and criminal offenses.
                </p>

                <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-10 mb-4">
                  Licenses & Certifications
                </h3>
                <ul>
                  <li>Licensed to practice law in all Virginia state courts</li>
                  <li>U.S. District Court for the Eastern District of Virginia</li>
                  <li>U.S. Bankruptcy Court for the Eastern District of Virginia</li>
                  <li>Certified as court-appointed counsel for felonies and misdemeanors by the VA Indigent Defense Commission</li>
                </ul>

                <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-10 mb-4">
                  Practice Areas
                </h3>
                <p>
                  Mr. Alexander appears daily in the courts of Richmond and Central Virginia, specializing in:
                </p>
                <ul>
                  <li><strong>DUI/DWI Defense</strong> - Including 1st, 2nd, and 3rd offense cases</li>
                  <li><strong>Reckless Driving</strong> - Speed-related and general reckless driving charges</li>
                  <li><strong>Traffic Violations</strong> - Speeding, driving on suspended license, CDL violations</li>
                  <li><strong>Criminal Defense</strong> - Drug offenses, assault, theft, fraud</li>
                  <li><strong>License Restoration</strong> - Habitual offender petitions</li>
                  <li><strong>Expungements</strong> - Clearing eligible criminal records</li>
                </ul>

                <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-10 mb-4">
                  Awards & Recognition
                </h3>
                <div className="grid md:grid-cols-2 gap-4 not-prose">
                  {[
                    "National Trial Lawyers Top 100",
                    "Top 25 Motor Vehicle Law",
                    "AVVO Client's Choice Award 2025",
                    "Lawyers of Distinction",
                    "Best Attorneys of America",
                    "National Advocacy for DUI Defense",
                  ].map((award, index) => (
                    <div key={index} className="flex items-center gap-3 p-4 bg-gray-50 rounded-lg">
                      <svg className="w-6 h-6 text-[#c9a227] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                      </svg>
                      <span className="text-gray-700 font-medium">{award}</span>
                    </div>
                  ))}
                </div>

                <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-10 mb-4">
                  The Alexander Law Office Difference
                </h3>
                <p>
                  Founded in 2002, Alexander Law Office, P.C. has successfully handled thousands of cases
                  across Central Virginia. What sets our practice apart:
                </p>
                <ul>
                  <li><strong>Personal Attention</strong> - Direct communication with your attorney throughout your case</li>
                  <li><strong>Courtroom Expertise</strong> - Daily presence in Richmond and Central Virginia courts</li>
                  <li><strong>Established Relationships</strong> - Working relationships with judges and prosecutors across multiple jurisdictions</li>
                  <li><strong>Proven Results</strong> - Track record of reducing and dismissing charges</li>
                  <li><strong>Affordable Representation</strong> - Competitive fees with payment plans available</li>
                </ul>

                <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-10 mb-4">
                  Service Areas
                </h3>
                <p>
                  Mr. Alexander practices throughout Richmond and Central Virginia, including:
                </p>
                <div className="grid grid-cols-2 md:grid-cols-3 gap-2 not-prose mt-4">
                  {[
                    "Richmond",
                    "Henrico County",
                    "Chesterfield County",
                    "Hanover County",
                    "Petersburg",
                    "Colonial Heights",
                    "Hopewell",
                    "Goochland",
                    "Caroline County",
                    "New Kent",
                    "Charles City",
                    "Spotsylvania",
                  ].map((area, index) => (
                    <span key={index} className="text-gray-600 text-sm">• {area}</span>
                  ))}
                </div>
              </div>

              {/* CTA */}
              <div className="mt-12 p-8 bg-[#1e3a5f] rounded-2xl text-white">
                <h3 className="text-2xl font-serif font-bold mb-4">
                  Ready to Discuss Your Case?
                </h3>
                <p className="text-gray-300 mb-6">
                  Contact Alexander Law Office today for a free, confidential consultation.
                  Evening and weekend appointments available.
                </p>
                <div className="flex flex-col sm:flex-row gap-4">
                  <a
                    href="tel:804-355-0016"
                    className="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#c9a227] text-white font-semibold rounded-lg hover:bg-[#d4b84a] transition-colors"
                  >
                    <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Call (804) 355-0016
                  </a>
                  <Link
                    href="/contact"
                    className="inline-flex items-center justify-center gap-2 px-6 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-[#1e3a5f] transition-colors"
                  >
                    Contact Online
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
