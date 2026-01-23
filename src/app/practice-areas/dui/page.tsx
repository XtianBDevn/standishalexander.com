import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "DUI Defense Attorney Richmond VA | Alexander Law Office",
  description: "Experienced DUI defense lawyer in Richmond, VA. Over 30 years defending DUI/DWI charges. Challenge breathalyzer results, protect your license. Free consultation.",
  alternates: {
    canonical: "https://www.standishalexander.com/practice-areas/dui",
  },
};

export default function DUIPage() {
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
            DUI Defense
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Aggressive defense against DUI/DWI charges throughout Richmond and Central Virginia.
            Over 30 years of experience protecting your rights.
          </p>
        </div>
      </section>

      {/* Content Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            <div className="lg:col-span-2 prose prose-lg max-w-none">
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f]">
                Virginia DUI Laws Are Serious
              </h2>
              <p>
                A DUI conviction in Virginia carries severe penalties that can impact every
                aspect of your life. Virginia has some of the strictest DUI laws in the
                country, with mandatory minimum sentences and significant consequences.
              </p>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Potential Penalties for DUI in Virginia
              </h3>

              <div className="bg-gray-50 p-6 rounded-xl not-prose">
                <h4 className="font-bold text-[#1e3a5f] mb-4">First Offense DUI</h4>
                <ul className="space-y-2 text-gray-600">
                  <li>• Up to 12 months in jail</li>
                  <li>• Fines up to $2,500</li>
                  <li>• License suspension for 12 months</li>
                  <li>• Mandatory VASAP alcohol education program</li>
                  <li>• Ignition interlock device may be required</li>
                </ul>
              </div>

              <div className="bg-gray-50 p-6 rounded-xl not-prose mt-4">
                <h4 className="font-bold text-[#1e3a5f] mb-4">Second Offense DUI (within 5-10 years)</h4>
                <ul className="space-y-2 text-gray-600">
                  <li>• Mandatory minimum 10 days to 1 month in jail</li>
                  <li>• Fines up to $2,500</li>
                  <li>• License suspension for 3 years</li>
                  <li>• Ignition interlock required</li>
                  <li>• Mandatory VASAP program</li>
                </ul>
              </div>

              <div className="bg-red-50 p-6 rounded-xl not-prose mt-4 border border-red-200">
                <h4 className="font-bold text-red-800 mb-4">Third Offense DUI (Felony)</h4>
                <ul className="space-y-2 text-red-700">
                  <li>• Class 6 Felony charge</li>
                  <li>• Mandatory minimum 90 days to 6 months in jail</li>
                  <li>• Fines up to $2,500</li>
                  <li>• Indefinite license revocation</li>
                  <li>• Vehicle forfeiture possible</li>
                </ul>
              </div>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                How We Defend DUI Cases
              </h3>
              <p>
                Every DUI case has potential defenses. Our approach includes challenging:
              </p>
              <ul>
                <li><strong>Traffic Stop Validity</strong> - Did police have reasonable suspicion to stop you?</li>
                <li><strong>Field Sobriety Tests</strong> - Were they administered properly? Many factors can affect results.</li>
                <li><strong>Breathalyzer Accuracy</strong> - Was the device calibrated? Was it operated correctly?</li>
                <li><strong>Blood Test Procedures</strong> - Was proper chain of custody maintained?</li>
                <li><strong>Miranda Rights</strong> - Were your rights properly explained?</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Protecting Your License
              </h3>
              <p>
                Losing your license can devastate your ability to work, care for your family,
                and maintain your daily life. We fight aggressively to:
              </p>
              <ul>
                <li>Minimize or avoid license suspension</li>
                <li>Obtain restricted driving privileges when possible</li>
                <li>Navigate DMV administrative hearings</li>
                <li>Help with ignition interlock requirements</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">
                Refusal Cases
              </h3>
              <p>
                If you refused the breathalyzer test, you face automatic license suspension
                under Virginia&apos;s implied consent law. However, refusal cases can still be
                defended, and the prosecution must prove their case without BAC evidence.
              </p>
            </div>

            {/* Sidebar */}
            <div className="lg:col-span-1">
              <div className="sticky top-32 space-y-6">
                <div className="bg-[#1e3a5f] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-4">DUI Cases We Handle</h3>
                  <ul className="space-y-3">
                    {[
                      "First Offense DUI",
                      "Second Offense DUI",
                      "Third Offense DUI (Felony)",
                      "High BAC Cases",
                      "Refusal Cases",
                      "Drug DUI",
                      "Underage DUI",
                      "Commercial Driver DUI",
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

                <div className="bg-[#c9a227] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-2">Free Consultation</h3>
                  <p className="text-white/90 mb-4 text-sm">
                    Arrested for DUI? Time is critical. Contact us immediately to protect your rights.
                  </p>
                  <a
                    href="tel:804-355-0016"
                    className="block w-full py-3 bg-white text-[#1e3a5f] text-center font-semibold rounded-lg hover:bg-gray-100 transition-colors"
                  >
                    (804) 355-0016
                  </a>
                </div>

                <div className="bg-gray-50 rounded-xl p-6">
                  <h3 className="font-semibold text-[#1e3a5f] mb-4">Service Areas</h3>
                  <p className="text-sm text-gray-600">
                    We handle DUI cases throughout Central Virginia including Richmond, Henrico,
                    Chesterfield, Hanover, Petersburg, Colonial Heights, and surrounding areas.
                  </p>
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
            Facing DUI Charges?
          </h2>
          <p className="text-gray-600 mb-6">
            Don&apos;t face a DUI charge alone. With over 30 years of experience,
            we know how to fight for the best possible outcome.
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
