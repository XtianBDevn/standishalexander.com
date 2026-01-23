import Link from "next/link";

const practiceAreas = [
  { name: "DUI Defense", href: "/practice-areas/dui" },
  { name: "Reckless Driving", href: "/practice-areas/reckless-driving" },
  { name: "Traffic Violations", href: "/practice-areas/traffic-violations" },
  { name: "Criminal Defense", href: "/practice-areas/criminal-defense" },
  { name: "Expungements", href: "/practice-areas/expungements" },
];

const quickLinks = [
  { name: "About Us", href: "/about" },
  { name: "Blog", href: "/blog" },
  { name: "Case Results", href: "/results" },
  { name: "Testimonials", href: "/testimonials" },
  { name: "Fee Information", href: "/fees" },
  { name: "Contact", href: "/contact" },
];

const serviceAreas = [
  "Richmond",
  "Henrico County",
  "Chesterfield County",
  "Hanover County",
  "Petersburg",
  "Colonial Heights",
  "Hopewell",
  "Goochland",
  "Caroline County",
];

export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-[#1e3a5f] text-white" role="contentinfo">
      {/* CTA Section */}
      <div className="bg-[#c9a227]">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div className="flex flex-col md:flex-row items-center justify-between gap-6">
            <div className="text-center md:text-left">
              <h2 className="text-2xl md:text-3xl font-serif font-bold text-white">
                Facing Criminal Charges or a DUI?
              </h2>
              <p className="text-white/90 mt-2">
                Get the experienced defense you deserve. Free consultation available.
              </p>
            </div>
            <div className="flex flex-col sm:flex-row gap-4">
              <a
                href="tel:804-355-0016"
                className="px-8 py-4 bg-white text-[#1e3a5f] font-bold rounded-lg hover:bg-gray-100 transition-colors flex items-center justify-center gap-2"
                aria-label="Call us at 804-355-0016"
              >
                <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                (804) 355-0016
              </a>
              <Link
                href="/contact"
                className="px-8 py-4 bg-[#1e3a5f] text-white font-bold rounded-lg hover:bg-[#0f2744] transition-colors text-center"
              >
                Schedule Consultation
              </Link>
            </div>
          </div>
        </div>
      </div>

      {/* Main Footer */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
          {/* About Column */}
          <div>
            <div className="flex items-center gap-3 mb-6">
              <div className="w-12 h-12">
                <svg viewBox="0 0 100 100" className="w-full h-full">
                  <circle cx="50" cy="50" r="48" fill="#0f2744" stroke="#c9a227" strokeWidth="2"/>
                  <text x="50" y="38" textAnchor="middle" fill="#c9a227" fontSize="28" fontFamily="serif" fontWeight="bold">A</text>
                  <text x="50" y="58" textAnchor="middle" fill="white" fontSize="10" fontFamily="serif">LAW</text>
                  <path d="M25 68 L75 68" stroke="#c9a227" strokeWidth="1.5"/>
                </svg>
              </div>
              <div>
                <p className="font-serif font-bold text-lg">Alexander Law Office</p>
                <p className="text-xs text-gray-400 tracking-widest uppercase">P.C.</p>
              </div>
            </div>
            <p className="text-gray-300 text-sm leading-relaxed mb-6">
              Providing aggressive, experienced legal defense for DUI, reckless driving,
              traffic violations, and criminal charges throughout Richmond and Central Virginia since 2002.
            </p>
            <div className="flex gap-4">
              <a
                href="https://www.facebook.com/Alexander-Law-Office-PC-227194650719020/"
                target="_blank"
                rel="noopener noreferrer"
                className="w-10 h-10 bg-[#0f2744] rounded-lg flex items-center justify-center hover:bg-[#c9a227] transition-colors"
                aria-label="Facebook"
              >
                <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
                </svg>
              </a>
            </div>
          </div>

          {/* Practice Areas */}
          <div>
            <h3 className="font-serif font-bold text-lg mb-6 text-[#c9a227]">Practice Areas</h3>
            <ul className="space-y-3">
              {practiceAreas.map((area) => (
                <li key={area.name}>
                  <Link
                    href={area.href}
                    className="text-gray-300 hover:text-[#c9a227] transition-colors flex items-center gap-2 text-sm"
                  >
                    <svg className="w-4 h-4 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                    </svg>
                    {area.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="font-serif font-bold text-lg mb-6 text-[#c9a227]">Quick Links</h3>
            <ul className="space-y-3">
              {quickLinks.map((link) => (
                <li key={link.name}>
                  <Link
                    href={link.href}
                    className="text-gray-300 hover:text-[#c9a227] transition-colors flex items-center gap-2 text-sm"
                  >
                    <svg className="w-4 h-4 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
                    </svg>
                    {link.name}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h3 className="font-serif font-bold text-lg mb-6 text-[#c9a227]">Contact Us</h3>
            <address className="not-italic space-y-4 text-sm">
              <div className="flex items-start gap-3">
                <svg className="w-5 h-5 text-[#c9a227] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <div className="text-gray-300">
                  <p>1000 Greenway Lane</p>
                  <p>Richmond, VA 23226</p>
                </div>
              </div>
              <div className="flex items-center gap-3">
                <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <a href="tel:804-355-0016" className="text-gray-300 hover:text-[#c9a227] transition-colors">
                  (804) 355-0016
                </a>
              </div>
              <div className="flex items-center gap-3">
                <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                <a href="tel:804-814-1489" className="text-gray-300 hover:text-[#c9a227] transition-colors">
                  (804) 814-1489 (Cell)
                </a>
              </div>
              <div className="flex items-center gap-3">
                <svg className="w-5 h-5 text-[#c9a227] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span className="text-gray-300">Mon-Fri: 8:00 AM - 6:00 PM</span>
              </div>
            </address>
          </div>
        </div>

        {/* Service Areas */}
        <div className="mt-12 pt-8 border-t border-gray-700">
          <h3 className="font-serif font-bold text-lg mb-4 text-[#c9a227]">Service Areas</h3>
          <p className="text-gray-400 text-sm">
            Proudly serving clients throughout Central Virginia including:{" "}
            <span className="text-gray-300">
              {serviceAreas.join(" • ")}
            </span>
          </p>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="border-t border-gray-700">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-400">
            <p>© {currentYear} Alexander Law Office, P.C. All rights reserved.</p>
            <div className="flex gap-6">
              <Link href="/privacy" className="hover:text-[#c9a227] transition-colors">
                Privacy Policy
              </Link>
              <Link href="/disclaimer" className="hover:text-[#c9a227] transition-colors">
                Disclaimer
              </Link>
              <Link href="/sitemap" className="hover:text-[#c9a227] transition-colors">
                Sitemap
              </Link>
            </div>
          </div>
          <p className="text-center text-xs text-gray-500 mt-4">
            The information on this website is for general information purposes only. Nothing on this site should be taken as legal advice for any individual case or situation.
            This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.
          </p>
        </div>
      </div>

      {/* Structured Data for Local SEO */}
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{
          __html: JSON.stringify({
            "@context": "https://schema.org",
            "@type": "LegalService",
            "name": "Alexander Law Office, P.C.",
            "description": "Experienced DUI, reckless driving, and criminal defense attorney serving Richmond and Central Virginia.",
            "url": "https://www.standishalexander.com",
            "telephone": "+1-804-355-0016",
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "1000 Greenway Lane",
              "addressLocality": "Richmond",
              "addressRegion": "VA",
              "postalCode": "23226",
              "addressCountry": "US"
            },
            "geo": {
              "@type": "GeoCoordinates",
              "latitude": 37.5760265,
              "longitude": -77.5054805
            },
            "openingHoursSpecification": {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
              "opens": "08:00",
              "closes": "18:00"
            },
            "priceRange": "$$",
            "founder": {
              "@type": "Person",
              "name": "Standish Alexander"
            },
            "areaServed": [
              "Richmond, VA",
              "Henrico County, VA",
              "Chesterfield County, VA",
              "Hanover County, VA",
              "Petersburg, VA",
              "Colonial Heights, VA",
              "Hopewell, VA"
            ],
            "aggregateRating": {
              "@type": "AggregateRating",
              "ratingValue": "10",
              "bestRating": "10",
              "ratingCount": "50"
            }
          })
        }}
      />
    </footer>
  );
}
