import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Traffic Violations Attorney Richmond VA | Alexander Law Office",
  description: "Traffic violation defense in Richmond, VA. Speeding tickets, driving on suspended license, CDL violations. Protect your driving record. Free consultation.",
  alternates: {
    canonical: "https://www.standishalexander.com/practice-areas/traffic-violations",
  },
};

export default function TrafficViolationsPage() {
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
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">Traffic Violations</h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Defending drivers against speeding tickets, suspended license charges, and other traffic violations.
          </p>
        </div>
      </section>

      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            <div className="lg:col-span-2 prose prose-lg max-w-none">
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f]">Protect Your Driving Record</h2>
              <p>
                Traffic violations may seem minor, but they can lead to significant consequences: increased insurance
                rates, demerit points, license suspension, and even job loss for commercial drivers.
              </p>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Traffic Cases We Handle</h3>
              <ul>
                <li><strong>Speeding Tickets</strong> - Fighting to reduce or dismiss speeding charges</li>
                <li><strong>Driving on Suspended License</strong> - Defending against additional suspensions and jail time</li>
                <li><strong>CDL Violations</strong> - Protecting commercial drivers&apos; livelihoods</li>
                <li><strong>Hit and Run</strong> - Defense against failure to stop charges</li>
                <li><strong>Failure to Yield/Stop</strong> - Intersection and stop sign violations</li>
                <li><strong>Following Too Closely</strong> - Tailgating citations</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Why Fight a Traffic Ticket?</h3>
              <p>Even a simple traffic ticket can have lasting consequences:</p>
              <ul>
                <li>DMV demerit points (3-6 points depending on violation)</li>
                <li>Insurance rate increases lasting years</li>
                <li>Accumulation toward license suspension</li>
                <li>Employment issues for commercial drivers</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">CDL Driver Defense</h3>
              <p>
                For commercial drivers, traffic violations are especially serious. A CDL holder can lose their
                license and livelihood over violations that would be minor for regular drivers. We understand
                the special rules governing CDL holders and fight to protect your career.
              </p>
            </div>

            <div className="lg:col-span-1">
              <div className="sticky top-32 space-y-6">
                <div className="bg-[#1e3a5f] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-4">Violations We Defend</h3>
                  <ul className="space-y-2 text-sm">
                    {["Speeding", "Suspended License", "CDL Violations", "Hit and Run", "Running Stop Signs", "Improper Lane Change", "Following Too Closely", "No Insurance"].map((item, i) => (
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
                  <p className="text-white/90 mb-4 text-sm">Got a traffic ticket? Let us help protect your record.</p>
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
