import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Client Testimonials | Alexander Law Office - Richmond Criminal Defense",
  description: "Read what clients say about Alexander Law Office. See reviews and testimonials from DUI, reckless driving, and criminal defense cases in Richmond, VA.",
  alternates: {
    canonical: "https://www.standishalexander.com/testimonials",
  },
};

const testimonials = [
  {
    quote: "I was given a court date for reckless driving in Hopewell, VA. The Judge wanted to take my CDL license away. Mr. Alexander was able to reduce the speeding ticket 91/70 reckless driving to a civil ticket with a $100 fine and clean driver's license. His price was extremely reasonable.",
    author: "CDL Driver",
    case: "Reckless Driving 91/70 - Hopewell, VA",
    result: "Reduced to civil infraction - $100 fine",
  },
  {
    quote: "We were terrified when my spouse was charged with a criminal offense. We called Stan and he was able to meet with us right away. He put our minds at ease and was very thorough in getting the facts. Stan stayed in communication with us before each court date. The end result was dismissal of the case.",
    author: "Criminal Defense Client",
    case: "Criminal Charge",
    result: "Case Dismissed",
  },
  {
    quote: "He had the connections and the knowledge to get my 96/70 reduced to driving school, but also to be upfront and honest about what to expect. I consider this to be a win-win in light of the cost of insurance and job situation. It is a great investment in having an attorney like Stan representing you.",
    author: "Satisfied Client",
    case: "Reckless Driving 96/70",
    result: "Reduced to driving school only",
  },
  {
    quote: "I received a 'reckless driving' ticket in Hopewell, VA. I met with Atty. Alexander at his office to discuss my case, and on the court date he was able to get my ticket reduced to Non-moving Violation - Defective Equipment with a $200 fine. I would not hesitate to use the services of Atty. Standish Alexander if needed in the future.",
    author: "Former Client",
    case: "Reckless Driving - Hopewell, VA",
    result: "Reduced to non-moving violation - $200 fine",
  },
  {
    quote: "I had a reckless driving ticket in Bowling Green (Caroline County). I had it reduced to a fine and traffic school only (no points). I know each case has its own merits. I consider this to be a win-win in light of the cost of insurance and job situation.",
    author: "Traffic Violation Client",
    case: "Reckless Driving - Caroline County",
    result: "Fine and traffic school - No points",
  },
  {
    quote: "Standish Alexander called me on a Sunday after I called him that same day when I was not even expecting a call until business hours on Monday. Other attorneys did not respond until the next day. His rates are very reasonable too. I highly recommend him if you require the services of an attorney.",
    author: "Impressed Client",
    case: "General Legal Matter",
    result: "Prompt, professional service",
  },
  {
    quote: "Mr. Alexander got my 91/70 reckless driving reduced to improper driving. A $400 fine. No jail time, no license suspension, and most importantly - no criminal record.",
    author: "Reckless Driving Client",
    case: "Reckless Driving 91/70",
    result: "Reduced to improper driving - $400 fine",
  },
  {
    quote: "I was facing serious DUI charges and was terrified about losing my license and job. Stan fought hard for me and got the charge reduced. The restricted license allowed me to keep working while I completed VASAP.",
    author: "DUI Client",
    case: "First Offense DUI",
    result: "Reduced charge with restricted license",
  },
];

export default function TestimonialsPage() {
  return (
    <>
      {/* Hero Section */}
      <section className="relative bg-[#1e3a5f] py-32">
        <div className="absolute inset-0 bg-gradient-to-br from-[#1e3a5f] via-[#0f2744] to-[#1e3a5f] opacity-95" />
        <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <p className="text-[#c9a227] font-semibold tracking-widest uppercase mb-4">
            Client Reviews
          </p>
          <h1 className="text-4xl md:text-5xl font-serif font-bold text-white mb-6">
            What Our Clients Say
          </h1>
          <p className="text-xl text-gray-300 max-w-3xl mx-auto">
            Real testimonials from real clients. See why Alexander Law Office
            has a 10.0 AVVO rating and A+ BBB rating.
          </p>
        </div>
      </section>

      {/* Ratings Banner */}
      <section className="bg-white py-12 border-b">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex flex-wrap justify-center items-center gap-12">
            <div className="text-center">
              <p className="text-4xl font-serif font-bold text-[#1e3a5f]">10.0</p>
              <p className="text-gray-600">AVVO Rating</p>
              <div className="flex gap-1 justify-center mt-2">
                {[...Array(5)].map((_, i) => (
                  <svg key={i} className="w-5 h-5 text-[#c9a227]" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                  </svg>
                ))}
              </div>
            </div>
            <div className="text-center">
              <p className="text-4xl font-serif font-bold text-[#1e3a5f]">A+</p>
              <p className="text-gray-600">BBB Rating</p>
            </div>
            <div className="text-center">
              <p className="text-4xl font-serif font-bold text-[#1e3a5f]">2025</p>
              <p className="text-gray-600">Client&apos;s Choice Award</p>
            </div>
          </div>
        </div>
      </section>

      {/* Testimonials Grid */}
      <section className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid md:grid-cols-2 gap-8">
            {testimonials.map((testimonial, index) => (
              <div
                key={index}
                className="bg-white rounded-xl p-8 shadow-lg relative"
              >
                <svg className="w-12 h-12 text-[#c9a227]/20 absolute top-6 right-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                </svg>

                <div className="flex gap-1 mb-4">
                  {[...Array(5)].map((_, i) => (
                    <svg key={i} className="w-5 h-5 text-[#c9a227]" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                  ))}
                </div>

                <p className="text-gray-600 mb-6 relative z-10">&ldquo;{testimonial.quote}&rdquo;</p>

                <div className="border-t pt-4">
                  <p className="font-semibold text-[#1e3a5f]">{testimonial.author}</p>
                  <p className="text-sm text-gray-500">{testimonial.case}</p>
                  <div className="mt-2 inline-flex items-center gap-2 px-3 py-1 bg-green-100 text-green-700 text-sm rounded-full">
                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                    </svg>
                    {testimonial.result}
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="py-20 bg-[#1e3a5f] text-white">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="text-3xl md:text-4xl font-serif font-bold mb-6">
            Let Us Fight For You
          </h2>
          <p className="text-xl text-gray-300 mb-8">
            Join the thousands of satisfied clients who have trusted Alexander Law Office
            with their legal defense. Contact us today for a free consultation.
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
              className="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-[#1e3a5f] transition-colors"
            >
              Contact Online
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
