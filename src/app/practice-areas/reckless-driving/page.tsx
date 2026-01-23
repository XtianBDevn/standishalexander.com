import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Reckless Driving Attorney Richmond VA | Alexander Law Office",
  description: "Experienced reckless driving lawyer in Richmond, VA. Virginia reckless driving is a criminal misdemeanor. We fight to reduce charges. Free consultation.",
  alternates: {
    canonical: "https://www.standishalexander.com/practice-areas/reckless-driving",
  },
};

export default function RecklessDrivingPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <Link href="/practice-areas" className="inline-flex items-center gap-2 text-[#c9a227] mb-4 hover:underline">
            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 19l-7-7 7-7" />
            </svg>
            Practice Areas
          </Link>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            Reckless Driving Defense
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            In Virginia, reckless driving is NOT just a traffic ticket—it&apos;s a Class 1 criminal misdemeanor.
            We fight to protect your record.
          </p>
        </div>
      </section>

      {/* Alert Banner */}
      <section className="bg-red-50 border-b border-red-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
          <div className="flex items-center justify-center gap-3">
            <svg className="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
            <p className="text-red-800 font-medium">
              Reckless driving in Virginia is the same class of crime as DUI, assault, and petit larceny.
            </p>
          </div>
        </div>
      </section>

      {/* Content Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            <div className="lg:col-span-2 prose prose-lg max-w-none">
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f]">
                Virginia Reckless Driving: A Serious Criminal Charge
              </h2>
              <p>
                Many drivers from other states are shocked to learn that what would be a simple
                speeding ticket elsewhere is a <strong>Class 1 misdemeanor criminal offense</strong> in Virginia.
                A conviction creates a permanent criminal record that can affect employment,
                security clearances, and professional licenses.
              </p>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                When Is Speeding Considered Reckless Driving?
              </h3>
              <div className="bg-gray-50 p-6 rounded-xl not-prose">
                <ul className="space-y-3 text-gray-700">
                  <li className="flex items-start gap-3">
                    <span className="text-[#c9a227] font-bold">•</span>
                    <span><strong>20+ MPH over the speed limit</strong> - Regardless of actual speed</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <span className="text-[#c9a227] font-bold">•</span>
                    <span><strong>Over 85 MPH</strong> - Even on highways with 70 MPH limits</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <span className="text-[#c9a227] font-bold">•</span>
                    <span><strong>Driving too fast for conditions</strong> - Weather, traffic, visibility</span>
                  </li>
                </ul>
              </div>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Potential Penalties
              </h3>
              <ul>
                <li>Up to <strong>12 months in jail</strong></li>
                <li>Fines up to <strong>$2,500</strong></li>
                <li>License suspension up to <strong>6 months</strong></li>
                <li><strong>6 DMV demerit points</strong> (remain for 11 years)</li>
                <li><strong>Permanent criminal record</strong></li>
                <li>Significant insurance rate increases</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Our Defense Strategy
              </h3>
              <p>
                With over 30 years of experience and thousands of reckless driving cases handled,
                we know how to fight for the best possible outcome. Our goals include:
              </p>
              <ul>
                <li><strong>Reduction to improper driving</strong> - A non-criminal traffic infraction</li>
                <li><strong>Reduction to simple speeding</strong> - Traffic ticket only, no criminal record</li>
                <li><strong>Dismissal</strong> - When evidence supports it</li>
                <li><strong>Minimizing penalties</strong> - Even if convicted, reducing fines, avoiding jail</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Factors That Affect Your Case
              </h3>
              <ul>
                <li>Your speed and how far over the limit</li>
                <li>Your driving record history</li>
                <li>Road and weather conditions</li>
                <li>The specific court and judge</li>
                <li>Whether there was an accident</li>
                <li>Completion of driver improvement courses</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Out-of-State Drivers
              </h3>
              <p>
                If you received a reckless driving charge while traveling through Virginia,
                you still need representation. A conviction will be reported to your home
                state and could affect your license and insurance. We regularly represent
                out-of-state drivers and can often appear in court on your behalf.
              </p>
            </div>

            {/* Sidebar */}
            <div className="lg:col-span-1">
              <div className="sticky top-32 space-y-6">
                <div className="bg-[#1e3a5f] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-4">Types of Reckless Driving</h3>
                  <ul className="space-y-3">
                    {[
                      "Speeding 20+ over limit",
                      "Exceeding 85 MPH",
                      "Racing",
                      "Passing a school bus",
                      "Passing on a curve",
                      "Failing to signal",
                      "Faulty brakes",
                      "Overloaded vehicle",
                    ].map((item, index) => (
                      <li key={index} className="flex items-center gap-2">
                        <svg className="w-4 h-4 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {item}
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="bg-green-50 rounded-xl p-6 border border-green-200">
                  <h3 className="font-semibold text-green-800 mb-4">Recent Results</h3>
                  <ul className="space-y-3 text-sm text-green-700">
                    <li>• 91/70 → Civil infraction ($100 fine)</li>
                    <li>• 96/70 → Driving school only</li>
                    <li>• 91/70 → Improper driving ($400 fine)</li>
                  </ul>
                  <Link href="/results" className="text-green-800 font-medium text-sm mt-4 inline-block hover:underline">
                    View more results →
                  </Link>
                </div>

                <div className="bg-[#c9a227] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-2">Free Consultation</h3>
                  <p className="text-white/90 mb-4 text-sm">
                    Charged with reckless driving? Let us fight to protect your record.
                  </p>
                  <a
                    href="tel:804-355-0016"
                    className="block w-full py-3 bg-white text-[#1e3a5f] text-center font-semibold rounded-lg hover:bg-gray-100 transition-colors"
                  >
                    (804) 355-0016
                  </a>
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
            Don&apos;t Let a Traffic Stop Become a Criminal Record
          </h2>
          <p className="text-gray-600 mb-6">
            Contact Alexander Law Office today to discuss your reckless driving charge.
            We&apos;ve helped thousands of clients avoid the worst consequences.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a
              href="tel:804-355-0016"
              className="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#c9a227] text-white font-semibold rounded-lg hover:bg-[#d4b84a] transition-colors"
            >
              Call Now: (804) 355-0016
            </a>
            <Link
              href="/contact"
              className="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#1e3a5f] text-white font-semibold rounded-lg hover:bg-[#0f2744] transition-colors"
            >
              Request Consultation
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
