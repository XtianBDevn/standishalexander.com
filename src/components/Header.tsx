"use client";

import Link from "next/link";
import { useState, useEffect } from "react";

const navigation = [
  { name: "Home", href: "/" },
  { name: "About", href: "/about" },
  {
    name: "Practice Areas",
    href: "/practice-areas",
    children: [
      { name: "DUI Defense", href: "/practice-areas/dui" },
      { name: "Reckless Driving", href: "/practice-areas/reckless-driving" },
      { name: "Traffic Violations", href: "/practice-areas/traffic-violations" },
      { name: "Criminal Defense", href: "/practice-areas/criminal-defense" },
      { name: "Expungements", href: "/practice-areas/expungements" },
    ],
  },
  { name: "Blog", href: "/blog" },
  { name: "Results", href: "/results" },
  { name: "Testimonials", href: "/testimonials" },
  { name: "Fees", href: "/fees" },
  { name: "Contact", href: "/contact" },
];

export default function Header() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
  const [activeDropdown, setActiveDropdown] = useState<string | null>(null);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 10);
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled
          ? "bg-white shadow-lg py-2"
          : "bg-transparent py-4"
      }`}
    >
      {/* Top bar with contact info */}
      <div
        className={`transition-all duration-300 overflow-hidden ${
          isScrolled ? "max-h-0 opacity-0" : "max-h-16 opacity-100"
        }`}
      >
        <div className="bg-[#1e3a5f] text-white py-2">
          <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-sm">
            <div className="flex items-center gap-6">
              <a
                href="tel:804-355-0016"
                className="flex items-center gap-2 hover:text-[#c9a227] transition-colors"
                aria-label="Call us at 804-355-0016"
              >
                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span>(804) 355-0016</span>
              </a>
              <span className="hidden md:flex items-center gap-2">
                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Richmond, VA</span>
              </span>
            </div>
            <div className="hidden sm:flex items-center gap-4">
              <span className="text-[#c9a227] font-semibold">Free Consultation</span>
              <span>|</span>
              <span>Mon-Fri 8AM-6PM</span>
            </div>
          </div>
        </div>
      </div>

      {/* Main navigation */}
      <nav className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center">
          {/* Logo */}
          <Link href="/" className="flex items-center gap-3 group" aria-label="Alexander Law Office Home">
            <div className={`transition-all duration-300 ${isScrolled ? "w-10 h-10" : "w-12 h-12"}`}>
              <svg viewBox="0 0 100 100" className="w-full h-full">
                <circle cx="50" cy="50" r="48" fill="#1e3a5f" stroke="#c9a227" strokeWidth="2"/>
                <text x="50" y="38" textAnchor="middle" fill="#c9a227" fontSize="28" fontFamily="serif" fontWeight="bold">A</text>
                <text x="50" y="58" textAnchor="middle" fill="white" fontSize="10" fontFamily="serif">LAW</text>
                <path d="M25 68 L75 68" stroke="#c9a227" strokeWidth="1.5"/>
              </svg>
            </div>
            <div className={`transition-all duration-300 ${isScrolled ? "text-[#1e3a5f]" : "text-white drop-shadow-lg"}`}>
              <p className={`font-serif font-bold leading-tight ${isScrolled ? "text-lg" : "text-xl"}`}>
                Alexander Law Office
              </p>
              <p className={`text-xs tracking-widest uppercase ${isScrolled ? "text-gray-600" : "text-gray-200"}`}>
                Criminal & DUI Defense
              </p>
            </div>
          </Link>

          {/* Desktop Navigation */}
          <div className="hidden lg:flex items-center gap-1">
            {navigation.map((item) => (
              <div
                key={item.name}
                className="relative"
                onMouseEnter={() => item.children && setActiveDropdown(item.name)}
                onMouseLeave={() => setActiveDropdown(null)}
              >
                <Link
                  href={item.href}
                  className={`px-4 py-2 rounded-lg font-medium transition-all duration-200 flex items-center gap-1 ${
                    isScrolled
                      ? "text-gray-700 hover:text-[#1e3a5f] hover:bg-gray-100"
                      : "text-white hover:text-[#c9a227] hover:bg-white/10"
                  }`}
                >
                  {item.name}
                  {item.children && (
                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                    </svg>
                  )}
                </Link>
                {/* Dropdown menu */}
                {item.children && activeDropdown === item.name && (
                  <div className="absolute top-full left-0 mt-1 w-56 bg-white rounded-lg shadow-xl py-2 animate-fade-in">
                    {item.children.map((child) => (
                      <Link
                        key={child.name}
                        href={child.href}
                        className="block px-4 py-2 text-gray-700 hover:bg-[#1e3a5f] hover:text-white transition-colors"
                      >
                        {child.name}
                      </Link>
                    ))}
                  </div>
                )}
              </div>
            ))}
            <Link
              href="/contact"
              className="ml-4 px-6 py-2.5 bg-[#c9a227] text-white font-semibold rounded-lg hover:bg-[#d4b84a] transition-all duration-200 shadow-lg hover:shadow-xl hover:-translate-y-0.5"
            >
              Free Consultation
            </Link>
          </div>

          {/* Mobile menu button */}
          <button
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
            className={`lg:hidden p-2 rounded-lg transition-colors ${
              isScrolled ? "text-[#1e3a5f] hover:bg-gray-100" : "text-white hover:bg-white/10"
            }`}
            aria-label="Toggle mobile menu"
            aria-expanded={isMobileMenuOpen}
          >
            <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              {isMobileMenuOpen ? (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
              ) : (
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
              )}
            </svg>
          </button>
        </div>

        {/* Mobile Navigation */}
        {isMobileMenuOpen && (
          <div className="lg:hidden mt-4 pb-4 animate-fade-in">
            <div className="bg-white rounded-lg shadow-xl p-4">
              {navigation.map((item) => (
                <div key={item.name}>
                  <Link
                    href={item.href}
                    className="block py-3 px-4 text-gray-700 hover:bg-gray-100 rounded-lg font-medium"
                    onClick={() => !item.children && setIsMobileMenuOpen(false)}
                  >
                    {item.name}
                  </Link>
                  {item.children && (
                    <div className="pl-4">
                      {item.children.map((child) => (
                        <Link
                          key={child.name}
                          href={child.href}
                          className="block py-2 px-4 text-gray-600 hover:bg-gray-100 rounded-lg text-sm"
                          onClick={() => setIsMobileMenuOpen(false)}
                        >
                          {child.name}
                        </Link>
                      ))}
                    </div>
                  )}
                </div>
              ))}
              <div className="mt-4 pt-4 border-t">
                <Link
                  href="/contact"
                  className="block w-full py-3 bg-[#c9a227] text-white text-center font-semibold rounded-lg hover:bg-[#d4b84a]"
                  onClick={() => setIsMobileMenuOpen(false)}
                >
                  Free Consultation
                </Link>
              </div>
            </div>
          </div>
        )}
      </nav>
    </header>
  );
}
