import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Fee Information | Alexander Law Office - Affordable DUI & Criminal Defense",
  description: "Affordable legal fees for DUI, reckless driving, and criminal defense in Richmond, VA. Payment plans available. Free consultation. Call (804) 355-0016.",
  alternates: {
    canonical: "https://www.standishalexander.com/fees",
  },
};

const feeStructure = [
  {
    category: "DUI/DWI Defense",
    items: [
      { service: "First Offense DUI", range: "$1,200 - $1,500" },
      { service: "Second Offense DUI", range: "$1,200 - $2,000" },
      { service: "Third Offense DUI (Felony)", range: "Consultation Required" },
      { service: "Refusal Cases", range: "Consultation Required" },
    ],
  },
  {
    category: "Reckless Driving",
    items: [
      { service: "Speed-Related Reckless", range: "Case by Case" },
      { service: "General Reckless Driving", range: "Case by Case" },
      { service: "Racing/Exhibition", range: "Case by Case" },
    ],
  },
  {
    category: "Traffic Violations",
    items: [
      { service: "Speeding Tickets", range: "Starting at $300" },
      { service: "Driving on Suspended License", range: "Case by Case" },
      { service: "CDL Violations", range: "Case by Case" },
      { service: "Hit and Run", range: "Consultation Required" },
    ],
  },
  {
    category: "Criminal Defense",
    items: [
      { service: "Misdemeanors", range: "Case by Case" },
      { service: "Felonies", range: "Consultation Required" },
      { service: "Drug Offenses", range: "Case by Case" },
      { service: "Assault Charges", range: "Case by Case" },
    ],
  },
];

export default function FeesPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
            Transparent Pricing
          </p>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            Fee Information
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Quality legal defense at competitive rates. Payment plans available.
          </p>
        </div>
      </section>

      {/* Fee Info Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            <div className="lg:col-span-2">
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f] mb-8">
                Fee Schedule
              </h2>

              <div className="space-y-8">
                {feeStructure.map((category, index) => (
                  <div key={index} className="bg-gray-50 rounded-xl p-6">
                    <h3 className="text-xl font-serif font-bold text-[#1e3a5f] mb-4">
                      {category.category}
                    </h3>
                    <div className="space-y-3">
                      {category.items.map((item, itemIndex) => (
                        <div
                          key={itemIndex}
                          className="flex justify-between items-center py-2 border-b border-gray-200 last:border-0"
                        >
                          <span className="text-gray-700">{item.service}</span>
                          <span className="font-semibold text-[#1e3a5f]">{item.range}</span>
                        </div>
                      ))}
                    </div>
                  </div>
                ))}
              </div>

              <div className="mt-12 p-6 bg-yellow-50 border border-yellow-200 rounded-xl">
                <h3 className="font-semibold text-yellow-800 mb-2">Important Note</h3>
                <p className="text-yellow-700 text-sm">
                  The fees listed above are general estimates and may vary based on the specific
                  circumstances of your case, court location, and complexity. All fees are discussed
                  and agreed upon during your free consultation before any representation begins.
                </p>
              </div>
            </div>

            {/* Sidebar */}
            <div className="lg:col-span-1">
              <div className="sticky top-32 space-y-6">
                <div className="bg-[#1e3a5f] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-4">Payment Options</h3>
                  <ul className="space-y-3">
                    <li className="flex items-center gap-3">
                      <svg className="w-5 h-5 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Cash
                    </li>
                    <li className="flex items-center gap-3">
                      <svg className="w-5 h-5 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Check
                    </li>
                    <li className="flex items-center gap-3">
                      <svg className="w-5 h-5 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Visa / Mastercard
                    </li>
                    <li className="flex items-center gap-3">
                      <svg className="w-5 h-5 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Payment Plans Available
                    </li>
                  </ul>
                </div>

                <div className="bg-[#c9a227] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-2">Free Consultation</h3>
                  <p className="text-white/90 mb-4 text-sm">
                    Discuss your case and get a clear understanding of fees before making any commitment.
                  </p>
                  <a
                    href="tel:804-355-0016"
                    className="block w-full py-3 bg-white text-[#1e3a5f] text-center font-semibold rounded-lg hover:bg-gray-100 transition-colors"
                  >
                    (804) 355-0016
                  </a>
                </div>

                <div className="bg-gray-50 rounded-xl p-6">
                  <h3 className="font-semibold text-[#1e3a5f] mb-4">Why Our Fees Are Worth It</h3>
                  <ul className="space-y-3 text-sm text-gray-600">
                    <li className="flex items-start gap-2">
                      <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      30+ years of courtroom experience
                    </li>
                    <li className="flex items-start gap-2">
                      <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Track record of reduced/dismissed charges
                    </li>
                    <li className="flex items-start gap-2">
                      <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Personal attention from your attorney
                    </li>
                    <li className="flex items-start gap-2">
                      <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      Established relationships with courts
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-16 bg-gray-50">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-2xl font-serif font-bold text-[#1e3a5f] mb-4">
            Questions About Fees?
          </h2>
          <p className="text-gray-600 mb-6">
            Schedule a free consultation to discuss your case and get a clear understanding of costs.
            No obligation, completely confidential.
          </p>
          <Link
            href="/contact"
            className="inline-flex items-center gap-2 px-8 py-4 bg-[#1e3a5f] text-white font-semibold rounded-lg hover:bg-[#0f2744] transition-colors"
          >
            Schedule Free Consultation
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </Link>
        </div>
      </section>
    </>
  );
}
