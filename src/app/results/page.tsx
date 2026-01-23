import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Case Results | Alexander Law Office - DUI & Criminal Defense Results",
  description: "View case results from Alexander Law Office. See examples of reduced charges, dismissed cases, and successful outcomes for DUI, reckless driving, and criminal cases.",
  alternates: {
    canonical: "https://www.standishalexander.com/results",
  },
};

const caseResults = [
  {
    category: "Reckless Driving",
    results: [
      {
        original: "Reckless Driving 91/70",
        outcome: "Reduced to Civil Infraction",
        details: "$100 fine, clean driving record",
        location: "Hopewell, VA",
      },
      {
        original: "Reckless Driving 96/70",
        outcome: "Driving School Only",
        details: "No points, no criminal record",
        location: "Central Virginia",
      },
      {
        original: "Reckless Driving 91/70",
        outcome: "Improper Driving",
        details: "$400 fine, no jail, no criminal record",
        location: "Richmond Area",
      },
      {
        original: "Reckless Driving",
        outcome: "Non-Moving Violation",
        details: "Defective Equipment - $200 fine",
        location: "Hopewell, VA",
      },
      {
        original: "Reckless Driving",
        outcome: "Fine + Traffic School",
        details: "No points on license",
        location: "Caroline County",
      },
    ],
  },
  {
    category: "DUI/DWI",
    results: [
      {
        original: "First Offense DUI",
        outcome: "Reduced to Reckless Driving",
        details: "6-month suspension (not 12), restricted license, $350 fine, no jail",
        location: "Richmond Area",
      },
      {
        original: "DUI with High BAC",
        outcome: "Reduced Penalties",
        details: "Avoided mandatory jail time",
        location: "Henrico County",
      },
      {
        original: "Second Offense DUI",
        outcome: "Favorable Plea",
        details: "Minimized jail time and suspension",
        location: "Chesterfield County",
      },
    ],
  },
  {
    category: "Criminal Defense",
    results: [
      {
        original: "Criminal Charge",
        outcome: "Case Dismissed",
        details: "Complete dismissal of all charges",
        location: "Richmond",
      },
      {
        original: "Drug Possession",
        outcome: "Deferred Disposition",
        details: "Charges dismissed upon completion",
        location: "Central Virginia",
      },
      {
        original: "Assault Charge",
        outcome: "Reduced to Lesser Offense",
        details: "Avoided felony conviction",
        location: "Richmond Area",
      },
    ],
  },
  {
    category: "Traffic Violations",
    results: [
      {
        original: "Speeding 79/70",
        outcome: "Simple Speeding",
        details: "$400 fine, no criminal charge",
        location: "Richmond Area",
      },
      {
        original: "Driving on Suspended License",
        outcome: "Reduced Charge",
        details: "Avoided additional suspension",
        location: "Henrico County",
      },
    ],
  },
];

export default function ResultsPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
            Our Track Record
          </p>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            Case Results
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            See examples of the outcomes we&apos;ve achieved for our clients.
            Every case is different, but experience matters.
          </p>
        </div>
      </section>

      {/* Disclaimer */}
      <section className="bg-yellow-50 border-b border-yellow-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
          <p className="text-sm text-yellow-800 text-center">
            <strong>Disclaimer:</strong> Past results do not guarantee future outcomes.
            Each case is unique and results depend on the specific facts and circumstances.
          </p>
        </div>
      </section>

      {/* Results Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="space-y-16">
            {caseResults.map((category, categoryIndex) => (
              <div key={categoryIndex}>
                <h2 className="text-2xl font-serif font-bold text-[#1e3a5f] mb-8 flex items-center gap-3">
                  <span className="w-8 h-1 bg-[#c9a227]" />
                  {category.category}
                </h2>
                <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                  {category.results.map((result, resultIndex) => (
                    <div
                      key={resultIndex}
                      className="bg-gray-50 rounded-xl p-6 border border-gray-100 hover:shadow-lg transition-shadow"
                    >
                      <div className="flex items-start justify-between mb-4">
                        <span className="text-sm text-gray-500">{result.location}</span>
                        <svg className="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>
                      <div className="space-y-2">
                        <div className="flex items-center gap-2">
                          <span className="text-sm font-medium text-gray-500">Original:</span>
                          <span className="text-red-600 font-medium line-through">{result.original}</span>
                        </div>
                        <div className="flex items-center gap-2">
                          <span className="text-sm font-medium text-gray-500">Outcome:</span>
                          <span className="text-green-600 font-bold">{result.outcome}</span>
                        </div>
                      </div>
                      <p className="mt-4 text-sm text-gray-600 border-t pt-4">
                        {result.details}
                      </p>
                    </div>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="py-16 bg-[#1e3a5f] text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
              <p className="text-4xl font-serif font-bold text-[#c9a227]">5,000+</p>
              <p className="text-gray-300 mt-2">Cases Handled</p>
            </div>
            <div>
              <p className="text-4xl font-serif font-bold text-[#c9a227]">30+</p>
              <p className="text-gray-300 mt-2">Years Experience</p>
            </div>
            <div>
              <p className="text-4xl font-serif font-bold text-[#c9a227]">10.0</p>
              <p className="text-gray-300 mt-2">AVVO Rating</p>
            </div>
            <div>
              <p className="text-4xl font-serif font-bold text-[#c9a227]">A+</p>
              <p className="text-gray-300 mt-2">BBB Rating</p>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl font-serif font-bold text-[#1e3a5f] mb-6">
            Get Results For Your Case
          </h2>
          <p className="text-gray-600 mb-8">
            Every case is unique, but experience and expertise matter. Contact Alexander Law Office
            today to discuss your case and learn how we can fight for the best possible outcome.
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
              className="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#1e3a5f] text-white font-bold rounded-lg hover:bg-[#0f2744] transition-colors"
            >
              Free Consultation
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
