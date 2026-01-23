import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Criminal Defense Attorney Richmond VA | Alexander Law Office",
  description: "Experienced criminal defense lawyer in Richmond, VA. Defending drug charges, assault, theft, and more. Over 30 years experience. Free consultation.",
  alternates: {
    canonical: "https://www.standishalexander.com/practice-areas/criminal-defense",
  },
};

export default function CriminalDefensePage() {
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
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">Criminal Defense</h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Aggressive defense for misdemeanor and felony charges throughout Central Virginia.
          </p>
        </div>
      </section>

      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-12">
            <div className="lg:col-span-2 prose prose-lg max-w-none">
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f]">Your Future Is Worth Fighting For</h2>
              <p>
                A criminal conviction can follow you for life, affecting employment, housing, education, and
                relationships. With over 30 years of experience, we understand what&apos;s at stake and fight
                aggressively to protect your rights and your future.
              </p>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Criminal Cases We Handle</h3>
              <div className="grid md:grid-cols-2 gap-4 not-prose">
                {[
                  { title: "Drug Offenses", items: ["Possession", "Distribution", "Marijuana", "Prescription Drugs"] },
                  { title: "Assault & Battery", items: ["Simple Assault", "Domestic Violence", "Malicious Wounding"] },
                  { title: "Theft Crimes", items: ["Shoplifting", "Petit Larceny", "Grand Larceny", "Embezzlement"] },
                  { title: "Fraud", items: ["Credit Card Fraud", "Identity Theft", "Bad Checks", "Forgery"] },
                ].map((category, i) => (
                  <div key={i} className="bg-gray-50 p-4 rounded-lg">
                    <h4 className="font-bold text-[#1e3a5f] mb-2">{category.title}</h4>
                    <ul className="text-sm text-gray-600 space-y-1">
                      {category.items.map((item, j) => <li key={j}>• {item}</li>)}
                    </ul>
                  </div>
                ))}
              </div>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Our Defense Approach</h3>
              <ul>
                <li><strong>Thorough Investigation</strong> - Examining all evidence and circumstances</li>
                <li><strong>Constitutional Challenges</strong> - Protecting your rights against illegal searches</li>
                <li><strong>Negotiation</strong> - Working for reduced charges or alternative dispositions</li>
                <li><strong>Trial Defense</strong> - Aggressive courtroom representation when needed</li>
              </ul>

              <h3 className="text-2xl font-serif font-bold text-[#1e3a5f] mt-8">Juvenile Cases</h3>
              <p>
                Young people deserve a second chance. We handle juvenile criminal matters with the goal of
                protecting your child&apos;s future while ensuring they learn from the experience.
              </p>
            </div>

            <div className="lg:col-span-1">
              <div className="sticky top-32 space-y-6">
                <div className="bg-[#1e3a5f] rounded-xl p-6 text-white">
                  <h3 className="font-serif text-xl font-bold mb-4">Charges We Defend</h3>
                  <ul className="space-y-2 text-sm">
                    {["Drug Possession", "Assault & Battery", "Theft/Larceny", "Fraud", "Weapons Charges", "Trespassing", "Disorderly Conduct", "Underage Alcohol"].map((item, i) => (
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
                  <p className="text-white/90 mb-4 text-sm">Facing criminal charges? Get experienced defense today.</p>
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
