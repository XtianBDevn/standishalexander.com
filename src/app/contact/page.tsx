import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Contact Us | Alexander Law Office - Richmond DUI & Criminal Defense",
  description: "Contact Alexander Law Office for a free consultation. Located in Richmond, VA. Call (804) 355-0016. Evening and weekend appointments available.",
  alternates: {
    canonical: "https://www.standishalexander.com/contact",
  },
};

export default function ContactPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
            Get In Touch
          </p>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            Contact Alexander Law Office
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Free consultation available. Call now or fill out the form below.
          </p>
        </div>
      </section>

      {/* Contact Section */}
      <section className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12">
            {/* Contact Information */}
            <div>
              <h2 className="text-3xl font-serif font-bold text-[#1e3a5f] mb-8">
                Contact Information
              </h2>

              <div className="space-y-6">
                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-[#1e3a5f] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <div>
                    <h3 className="font-semibold text-[#1e3a5f] text-lg">Office Address</h3>
                    <address className="text-gray-600 not-italic mt-1">
                      1000 Greenway Lane<br />
                      Richmond, VA 23226
                    </address>
                  </div>
                </div>

                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-[#1e3a5f] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                  </div>
                  <div>
                    <h3 className="font-semibold text-[#1e3a5f] text-lg">Phone</h3>
                    <p className="text-gray-600 mt-1">
                      Office: <a href="tel:804-355-0016" className="text-[#c9a227] hover:underline">(804) 355-0016</a>
                    </p>
                    <p className="text-gray-600">
                      Cell: <a href="tel:804-814-1489" className="text-[#c9a227] hover:underline">(804) 814-1489</a>
                    </p>
                    <p className="text-gray-600">
                      Fax: (804) 355-2302
                    </p>
                  </div>
                </div>

                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-[#1e3a5f] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div>
                    <h3 className="font-semibold text-[#1e3a5f] text-lg">Office Hours</h3>
                    <p className="text-gray-600 mt-1">
                      Monday - Friday: 8:00 AM - 6:00 PM
                    </p>
                    <p className="text-sm text-gray-500 mt-1">
                      Evening and weekend appointments available upon request
                    </p>
                  </div>
                </div>

                <div className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-[#1e3a5f] rounded-lg flex items-center justify-center flex-shrink-0">
                    <svg className="w-6 h-6 text-[#c9a227]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <div>
                    <h3 className="font-semibold text-[#1e3a5f] text-lg">Email</h3>
                    <p className="text-gray-600 mt-1">
                      <a href="mailto:info@standishalexanderlaw.com" className="text-[#c9a227] hover:underline">
                        info@standishalexanderlaw.com
                      </a>
                    </p>
                  </div>
                </div>
              </div>

              {/* Map placeholder */}
              <div className="mt-8 bg-gray-100 rounded-xl h-64 flex items-center justify-center">
                <div className="text-center">
                  <svg className="w-12 h-12 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <p className="text-gray-500">1000 Greenway Lane</p>
                  <p className="text-gray-500">Richmond, VA 23226</p>
                  <a
                    href="https://maps.google.com/?q=1000+Greenway+Lane+Richmond+VA+23226"
                    target="_blank"
                    rel="noopener noreferrer"
                    className="text-[#c9a227] text-sm hover:underline mt-2 inline-block"
                  >
                    Get Directions →
                  </a>
                </div>
              </div>

              {/* Quick Contact CTA */}
              <div className="mt-8 p-6 bg-[#c9a227] rounded-xl text-white">
                <h3 className="font-semibold text-lg mb-2">Need Immediate Help?</h3>
                <p className="text-white/90 mb-4">
                  Call now for a free consultation. We respond to calls on evenings and weekends.
                </p>
                <a
                  href="tel:804-355-0016"
                  className="inline-flex items-center gap-2 px-6 py-3 bg-white text-[#1e3a5f] font-semibold rounded-lg hover:bg-gray-100 transition-colors"
                >
                  <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  (804) 355-0016
                </a>
              </div>
            </div>

            {/* Contact Form */}
            <div>
              <div className="bg-gray-50 rounded-2xl p-8">
                <h2 className="text-2xl font-serif font-bold text-[#1e3a5f] mb-6">
                  Request a Free Consultation
                </h2>
                <form className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    <div>
                      <label htmlFor="first-name" className="block text-sm font-medium text-gray-700 mb-2">
                        First Name *
                      </label>
                      <input
                        type="text"
                        id="first-name"
                        name="first-name"
                        required
                        className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                        placeholder="First name"
                      />
                    </div>
                    <div>
                      <label htmlFor="last-name" className="block text-sm font-medium text-gray-700 mb-2">
                        Last Name *
                      </label>
                      <input
                        type="text"
                        id="last-name"
                        name="last-name"
                        required
                        className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                        placeholder="Last name"
                      />
                    </div>
                  </div>

                  <div>
                    <label htmlFor="phone" className="block text-sm font-medium text-gray-700 mb-2">
                      Phone Number *
                    </label>
                    <input
                      type="tel"
                      id="phone"
                      name="phone"
                      required
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                      placeholder="(804) 555-1234"
                    />
                  </div>

                  <div>
                    <label htmlFor="email" className="block text-sm font-medium text-gray-700 mb-2">
                      Email Address
                    </label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                      placeholder="your@email.com"
                    />
                  </div>

                  <div>
                    <label htmlFor="case-type" className="block text-sm font-medium text-gray-700 mb-2">
                      Type of Case *
                    </label>
                    <select
                      id="case-type"
                      name="case-type"
                      required
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                    >
                      <option value="">Select case type</option>
                      <option value="dui">DUI/DWI</option>
                      <option value="reckless">Reckless Driving</option>
                      <option value="traffic">Traffic Violation</option>
                      <option value="criminal">Criminal Defense</option>
                      <option value="expungement">Expungement</option>
                      <option value="license">License Restoration</option>
                      <option value="other">Other</option>
                    </select>
                  </div>

                  <div>
                    <label htmlFor="court-date" className="block text-sm font-medium text-gray-700 mb-2">
                      Court Date (if known)
                    </label>
                    <input
                      type="date"
                      id="court-date"
                      name="court-date"
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                    />
                  </div>

                  <div>
                    <label htmlFor="message" className="block text-sm font-medium text-gray-700 mb-2">
                      Tell Us About Your Case
                    </label>
                    <textarea
                      id="message"
                      name="message"
                      rows={5}
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all resize-none"
                      placeholder="Please describe your situation, including any relevant details about the charges, location, and circumstances..."
                    />
                  </div>

                  <div>
                    <label htmlFor="how-heard" className="block text-sm font-medium text-gray-700 mb-2">
                      How Did You Hear About Us?
                    </label>
                    <select
                      id="how-heard"
                      name="how-heard"
                      className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all"
                    >
                      <option value="">Select an option</option>
                      <option value="google">Google Search</option>
                      <option value="referral">Friend/Family Referral</option>
                      <option value="avvo">AVVO</option>
                      <option value="yelp">Yelp</option>
                      <option value="repeat">Previous Client</option>
                      <option value="other">Other</option>
                    </select>
                  </div>

                  <button
                    type="submit"
                    className="w-full py-4 bg-[#c9a227] text-white font-bold rounded-lg hover:bg-[#d4b84a] transition-colors"
                  >
                    Submit Request
                  </button>

                  <p className="text-xs text-gray-500 text-center">
                    By submitting this form, you agree to be contacted about your case.
                    All information is kept strictly confidential. This form does not create
                    an attorney-client relationship.
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
