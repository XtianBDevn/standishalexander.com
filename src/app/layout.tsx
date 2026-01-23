import type { Metadata } from "next";
import { Playfair_Display, Inter } from "next/font/google";
import "./globals.css";
import Header from "@/components/Header";
import Footer from "@/components/Footer";

const playfair = Playfair_Display({
  variable: "--font-playfair",
  subsets: ["latin"],
  display: "swap",
});

const inter = Inter({
  variable: "--font-inter",
  subsets: ["latin"],
  display: "swap",
});

export const metadata: Metadata = {
  title: "Alexander Law Office, P.C. | Richmond DUI & Criminal Defense Attorney",
  description: "Over 30 years of experience defending DUI, reckless driving, and criminal cases in Richmond and Central Virginia. Free consultation available. 10.0 AVVO rating, A+ BBB rated.",
  keywords: "DUI attorney Richmond VA, reckless driving lawyer, criminal defense attorney Richmond, traffic violations lawyer Virginia, Standish Alexander",
  openGraph: {
    title: "Alexander Law Office, P.C. | Richmond DUI & Criminal Defense Attorney",
    description: "Over 30 years of experience defending DUI, reckless driving, and criminal cases in Richmond and Central Virginia.",
    url: "https://www.standishalexander.com",
    siteName: "Alexander Law Office, P.C.",
    locale: "en_US",
    type: "website",
  },
  twitter: {
    card: "summary_large_image",
    title: "Alexander Law Office, P.C. | Richmond DUI & Criminal Defense Attorney",
    description: "Over 30 years of experience defending DUI, reckless driving, and criminal cases in Richmond and Central Virginia.",
  },
  robots: {
    index: true,
    follow: true,
  },
  alternates: {
    types: {
      'application/rss+xml': 'https://www.standishalexander.com/blog/feed.xml',
    },
  },
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en" className="scroll-smooth">
      <body
        className={`${playfair.variable} ${inter.variable} antialiased font-sans`}
      >
        <Header />
        <main>{children}</main>
        <Footer />
      </body>
    </html>
  );
}
