import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Expungement Attorney Richmond VA | Clear Your Criminal Record",
  description: "Virginia expungement lawyer serving Richmond. Clear eligible criminal records for dismissed cases and acquittals. Free consultation. (804) 355-0016.",
  alternates: {
    canonical: "https://www.standishalexander.com/practice-areas/expungements",
  },
};

export default function ExpungementsPage() {
  return (
    <>
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <Link href="/practice-areas" className="inline-flex items-center gap-2 text-[#c9a227] mb-4 hover:underline">
            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 19l-7-7 7-7" />
            </svg>
            Practice Areas
          </Link>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">Expungements</h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Clear your criminal record and move forward with your life.
          </p>
        </div>
      </section>

      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            <div className="lg:col-span-2 prose prose-lg max-w-none">
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f]">A Second Chance</h2>
              <p>
                A criminal record—even for charges that were dismissed or resulted in acquittal—can appear on
                background checks and create barriers to employment, housing, education, and professional licensing.
                Expungement removes these records from public view.
              </p>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Who Qualifies for Expungement?</h3>
              <p>Under Virginia law, you may be eligible for expungement if:</p>
              <ul>
                <li><strong>Charges were dismissed</strong> (nolle prosequi)</li>
                <li><strong>You were acquitted</strong> (found not guilty)</li>
                <li><strong>Case was not prosecuted</strong></li>
                <li><strong>Identity theft</strong> - Someone used your identity</li>
                <li><strong>Certain first-time drug offenses</strong> - Under specific programs</li>
              </ul>

              <div className="bg-yellow-50 p-6 rounded-xl not-prose border border-yellow-200 mt-6">
                <h4 className="font-bold text-yellow-800 mb-2">Important Note</h4>
                <p className="text-yellow-700 text-sm">
                  Virginia has historically had limited expungement options. However, recent law changes have
                  expanded eligibility. Contact us to discuss whether you qualify under current Virginia law.
                </p>
              </div>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Benefits of Expungement</h3>
              <ul>
                <li>Remove arrest records from background checks</li>
                <li>Improve employment opportunities</li>
                <li>Qualify for housing and loans</li>
                <li>Professional licensing eligibility</li>
                <li>Peace of mind and a fresh start</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">The Expungement Process</h3>
              <ol>
                <li>Eligibility review of your criminal history</li>
                <li>Preparation and filing of petition</li>
                <li>Court hearing (may not always be required)</li>
                <li>Order issued to seal/expunge records</li>
                <li>Records removed from public databases</li>
              </ol>
            </div>

            <div className="lg:col-span-1">
              <div className="sticky top-32 space-y-6">
                <div className="bg-[#1e3a5f] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-4">Expungement Eligibility</h3>
                  <ul className="space-y-2 text-sm">
                    {["Dismissed Charges", "Acquittals", "Deferred Dispositions", "Identity Theft Cases", "First Offender Programs"].map((item, i) => (
                      <li key={i} className="flex items-center gap-2">
                        <svg className="w-4 h-4 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {item}
                      </li>
                    ))}
                  </ul>
                </div>
                <div className="bg-[#c9a227] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-2">Free Consultation</h3>
                  <p className="text-white/90 mb-4 text-sm">Find out if you qualify for expungement.</p>
                  <a href="tel:804-355-0016" className="block w-full py-3 bg-white text-[#1e3a5f] text-center font-semibold rounded-lg hover:bg-gray-100 transition-colors">
                    (804) 355-0016
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
