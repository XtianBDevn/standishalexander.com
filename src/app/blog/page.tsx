import { Metadata } from 'next';
import Link from 'next/link';
import { fetchAllFeeds, formatDate, localLegalResources, RSSItem } from '@/lib/rss';

export const metadata: Metadata = {
  title: 'DUI & Traffic Law Blog | Richmond VA Legal News | Alexander Law Office',
  description: 'Stay informed about DUI defense, reckless driving laws, and traffic violations in Richmond, Virginia. Expert legal insights from Alexander Law Office with 30+ years of experience in Virginia courts.',
  keywords: 'DUI blog Richmond VA, Virginia traffic law news, reckless driving Virginia, DUI defense articles, Richmond criminal defense blog, Virginia legal updates',
  openGraph: {
    title: 'DUI & Traffic Law Blog | Richmond VA | Alexander Law Office',
    description: 'Expert legal insights on DUI defense, reckless driving, and traffic law in Richmond and Central Virginia.',
    url: 'https://www.standishalexander.com/blog',
    siteName: 'Alexander Law Office, P.C.',
    locale: 'en_US',
    type: 'website',
  },
  twitter: {
    card: 'summary_large_image',
    title: 'DUI & Traffic Law Blog | Richmond VA',
    description: 'Expert legal insights on DUI defense and traffic law in Richmond, Virginia.',
  },
  alternates: {
    canonical: 'https://www.standishalexander.com/blog',
  },
  robots: {
    index: true,
    follow: true,
  },
};

// Structured data for Blog
function BlogStructuredData() {
  const structuredData = {
    '@context': 'https://schema.org',
    '@type': 'Blog',
    name: 'Alexander Law Office Legal Blog',
    description: 'DUI defense, traffic law, and criminal defense insights for Richmond, Virginia',
    url: 'https://www.standishalexander.com/blog',
    publisher: {
      '@type': 'LegalService',
      name: 'Alexander Law Office, P.C.',
      address: {
        '@type': 'PostalAddress',
        streetAddress: '2106 Maywill St, Suite A',
        addressLocality: 'Richmond',
        addressRegion: 'VA',
        postalCode: '23230',
        addressCountry: 'US'
      },
      telephone: '(804) 886-5013',
      areaServed: [
        { '@type': 'City', name: 'Richmond', containedInPlace: { '@type': 'State', name: 'Virginia' } },
        { '@type': 'AdministrativeArea', name: 'Henrico County' },
        { '@type': 'AdministrativeArea', name: 'Chesterfield County' },
        { '@type': 'AdministrativeArea', name: 'Hanover County' }
      ]
    },
    about: [
      { '@type': 'Thing', name: 'DUI Defense' },
      { '@type': 'Thing', name: 'Traffic Law' },
      { '@type': 'Thing', name: 'Reckless Driving' },
      { '@type': 'Thing', name: 'Criminal Defense' }
    ]
  };

  return (
    <script
      type="application/ld+json"
      dangerouslySetInnerHTML={{ __html: JSON.stringify(structuredData) }}
    />
  );
}

// Category badge component
function CategoryBadge({ category }: { category: string }) {
  const colorMap: Record<string, string> = {
    'DUI Defense': 'bg-red-100 text-red-800',
    'DUI News': 'bg-red-100 text-red-800',
    'Traffic Law': 'bg-blue-100 text-blue-800',
    'Reckless Driving': 'bg-orange-100 text-orange-800',
    'Criminal Defense': 'bg-purple-100 text-purple-800',
  };

  return (
    <span className={`inline-block px-3 py-1 text-xs font-semibold rounded-full ${colorMap[category] || 'bg-gray-100 text-gray-800'}`}>
      {category}
    </span>
  );
}

// Article card component
function ArticleCard({ article, featured = false }: { article: RSSItem & { isLocal?: boolean }; featured?: boolean }) {
  const isLocal = 'isLocal' in article && article.isLocal;

  return (
    <article
      className={`bg-white rounded-xl shadow-md overflow-hidden card-hover ${featured ? 'md:col-span-2 md:flex' : ''}`}
      itemScope
      itemType="https://schema.org/BlogPosting"
    >
      <meta itemProp="datePublished" content={article.pubDate} />
      <meta itemProp="author" content="Standish Alexander" />

      <div className={`p-6 ${featured ? 'md:flex-1' : ''}`}>
        <div className="flex items-center gap-3 mb-3">
          <CategoryBadge category={article.category} />
          {isLocal && (
            <span className="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-secondary/10 text-secondary">
              Expert Guide
            </span>
          )}
        </div>

        <h2
          className={`font-serif text-primary mb-3 ${featured ? 'text-2xl md:text-3xl' : 'text-xl'}`}
          itemProp="headline"
        >
          {isLocal ? (
            <Link href={article.link} className="hover:text-secondary transition-colors">
              {article.title}
            </Link>
          ) : (
            <a
              href={article.link}
              target="_blank"
              rel="noopener noreferrer"
              className="hover:text-secondary transition-colors"
            >
              {article.title}
            </a>
          )}
        </h2>

        <p className="text-text-light mb-4 line-clamp-3" itemProp="description">
          {article.description}
        </p>

        <div className="flex items-center justify-between text-sm text-text-light">
          <time dateTime={article.pubDate} itemProp="datePublished">
            {formatDate(article.pubDate)}
          </time>
          <span className="text-xs">{article.source}</span>
        </div>

        <div className="mt-4">
          {isLocal ? (
            <Link
              href={article.link}
              className="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors"
            >
              Read Full Article
              <svg className="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </Link>
          ) : (
            <a
              href={article.link}
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center text-primary font-semibold hover:text-secondary transition-colors"
            >
              Read More
              <svg className="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
              </svg>
            </a>
          )}
        </div>
      </div>
    </article>
  );
}

// Sidebar component
function BlogSidebar() {
  const categories = [
    { name: 'DUI Defense', count: 12, href: '/blog?category=dui' },
    { name: 'Reckless Driving', count: 8, href: '/blog?category=reckless-driving' },
    { name: 'Traffic Violations', count: 15, href: '/blog?category=traffic' },
    { name: 'Criminal Defense', count: 6, href: '/blog?category=criminal' },
  ];

  const serviceAreas = [
    'Richmond', 'Henrico County', 'Chesterfield County', 'Hanover County',
    'Goochland County', 'Powhatan County', 'Colonial Heights', 'Petersburg'
  ];

  return (
    <aside className="space-y-8">
      {/* CTA Box */}
      <div className="bg-primary text-white rounded-xl p-6">
        <h3 className="font-serif text-xl mb-3">Need Legal Help?</h3>
        <p className="text-white/80 mb-4 text-sm">
          Facing a DUI or traffic charge in Richmond? Get a free consultation with 30+ years of experience.
        </p>
        <a
          href="tel:8048865013"
          className="block w-full bg-secondary text-white text-center py-3 rounded-lg font-semibold hover:bg-secondary-light transition-colors mb-3"
        >
          (804) 886-5013
        </a>
        <Link
          href="/contact"
          className="block w-full bg-white text-primary text-center py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
        >
          Free Consultation
        </Link>
      </div>

      {/* Categories */}
      <div className="bg-white rounded-xl shadow-md p-6">
        <h3 className="font-serif text-lg text-primary mb-4">Categories</h3>
        <ul className="space-y-2">
          {categories.map((cat) => (
            <li key={cat.name}>
              <Link
                href={cat.href}
                className="flex justify-between items-center py-2 px-3 rounded-lg hover:bg-muted transition-colors text-sm"
              >
                <span>{cat.name}</span>
                <span className="bg-muted-dark px-2 py-1 rounded text-xs">{cat.count}</span>
              </Link>
            </li>
          ))}
        </ul>
      </div>

      {/* Service Areas - Local SEO */}
      <div className="bg-white rounded-xl shadow-md p-6">
        <h3 className="font-serif text-lg text-primary mb-4">Service Areas</h3>
        <p className="text-sm text-text-light mb-3">
          Serving clients throughout Central Virginia:
        </p>
        <div className="flex flex-wrap gap-2">
          {serviceAreas.map((area) => (
            <span
              key={area}
              className="bg-muted px-3 py-1 rounded-full text-xs text-primary"
            >
              {area}
            </span>
          ))}
        </div>
      </div>

      {/* Quick Links */}
      <div className="bg-white rounded-xl shadow-md p-6">
        <h3 className="font-serif text-lg text-primary mb-4">Practice Areas</h3>
        <ul className="space-y-2">
          <li>
            <Link href="/practice-areas/dui" className="text-sm hover:text-secondary transition-colors flex items-center">
              <svg className="w-4 h-4 mr-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd" />
              </svg>
              DUI Defense
            </Link>
          </li>
          <li>
            <Link href="/practice-areas/reckless-driving" className="text-sm hover:text-secondary transition-colors flex items-center">
              <svg className="w-4 h-4 mr-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd" />
              </svg>
              Reckless Driving
            </Link>
          </li>
          <li>
            <Link href="/practice-areas/traffic-violations" className="text-sm hover:text-secondary transition-colors flex items-center">
              <svg className="w-4 h-4 mr-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd" />
              </svg>
              Traffic Violations
            </Link>
          </li>
          <li>
            <Link href="/practice-areas/criminal-defense" className="text-sm hover:text-secondary transition-colors flex items-center">
              <svg className="w-4 h-4 mr-2 text-secondary" fill="currentColor" viewBox="0 0 20 20">
                <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd" />
              </svg>
              Criminal Defense
            </Link>
          </li>
        </ul>
      </div>
    </aside>
  );
}

export default async function BlogPage() {
  // Fetch RSS feeds
  let rssArticles: RSSItem[] = [];
  try {
    rssArticles = await fetchAllFeeds();
  } catch (error) {
    console.error('Error fetching RSS feeds:', error);
  }

  // Combine local resources with RSS feeds
  const allArticles = [
    ...localLegalResources.map(r => ({ ...r, isLocal: true })),
    ...rssArticles
  ].sort((a, b) => new Date(b.pubDate).getTime() - new Date(a.pubDate).getTime());

  // Get featured article (first local resource)
  const featuredArticle = localLegalResources[0];
  const remainingArticles = allArticles.filter(a =>
    !('isLocal' in a && a.isLocal && a.slug === featuredArticle.slug)
  );

  return (
    <>
      <BlogStructuredData />

      {/* Hero Section */}
      <section className="relative bg-gradient-to-br from-primary-dark via-primary to-accent py-20 md:py-28">
        <div className="absolute inset-0 hero-pattern opacity-30" />
        <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center max-w-3xl mx-auto">
            <h1 className="text-4xl md:text-5xl font-serif text-white mb-4 animate-fade-in">
              Virginia DUI & Traffic Law Blog
            </h1>
            <p className="text-xl text-white/80 mb-6 animate-fade-in" style={{ animationDelay: '0.2s' }}>
              Legal insights and news for Richmond, Henrico, Chesterfield, and Central Virginia
            </p>
            <div className="flex flex-wrap justify-center gap-3 animate-fade-in" style={{ animationDelay: '0.4s' }}>
              <span className="bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm">
                DUI Defense
              </span>
              <span className="bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm">
                Reckless Driving
              </span>
              <span className="bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm">
                Traffic Violations
              </span>
              <span className="bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm">
                Criminal Defense
              </span>
            </div>
          </div>
        </div>
      </section>

      {/* Breadcrumb - SEO */}
      <nav className="bg-muted py-3" aria-label="Breadcrumb">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <ol className="flex items-center space-x-2 text-sm" itemScope itemType="https://schema.org/BreadcrumbList">
            <li itemProp="itemListElement" itemScope itemType="https://schema.org/ListItem">
              <Link href="/" className="text-text-light hover:text-primary" itemProp="item">
                <span itemProp="name">Home</span>
              </Link>
              <meta itemProp="position" content="1" />
            </li>
            <li className="text-text-light">/</li>
            <li itemProp="itemListElement" itemScope itemType="https://schema.org/ListItem">
              <span className="text-primary font-medium" itemProp="name">Blog</span>
              <meta itemProp="position" content="2" />
            </li>
          </ol>
        </div>
      </nav>

      {/* Main Content */}
      <section className="py-12 md:py-16 bg-muted">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-3 gap-8">
            {/* Articles Grid */}
            <div className="lg:col-span-2">
              {/* Featured Article */}
              {featuredArticle && (
                <div className="mb-8">
                  <h2 className="font-serif text-2xl text-primary mb-4">Featured Article</h2>
                  <ArticleCard article={{ ...featuredArticle, isLocal: true }} featured />
                </div>
              )}

              {/* Latest Articles */}
              <div>
                <h2 className="font-serif text-2xl text-primary mb-4">Latest Articles & News</h2>

                {allArticles.length > 0 ? (
                  <div className="grid md:grid-cols-2 gap-6">
                    {remainingArticles.slice(0, 12).map((article, index) => (
                      <ArticleCard key={`${article.slug}-${index}`} article={article} />
                    ))}
                  </div>
                ) : (
                  <div className="bg-white rounded-xl p-8 text-center">
                    <p className="text-text-light">Loading latest legal news...</p>
                  </div>
                )}
              </div>

              {/* Local SEO Content Section */}
              <div className="mt-12 bg-white rounded-xl p-8 shadow-md">
                <h2 className="font-serif text-2xl text-primary mb-4">
                  Richmond DUI & Traffic Defense Resources
                </h2>
                <div className="prose prose-lg max-w-none text-text-light">
                  <p>
                    At Alexander Law Office, we provide comprehensive legal defense for DUI, reckless driving,
                    and traffic violations throughout the Greater Richmond area. Our blog keeps you informed
                    about Virginia traffic law changes, court procedures, and defense strategies.
                  </p>
                  <h3 className="font-serif text-xl text-primary mt-6 mb-3">Virginia Courts We Serve</h3>
                  <ul className="grid md:grid-cols-2 gap-2 list-none p-0">
                    <li className="flex items-center">
                      <svg className="w-5 h-5 text-secondary mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                      </svg>
                      Richmond General District Court
                    </li>
                    <li className="flex items-center">
                      <svg className="w-5 h-5 text-secondary mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                      </svg>
                      Henrico County Courts
                    </li>
                    <li className="flex items-center">
                      <svg className="w-5 h-5 text-secondary mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                      </svg>
                      Chesterfield County Courts
                    </li>
                    <li className="flex items-center">
                      <svg className="w-5 h-5 text-secondary mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                      </svg>
                      Hanover County Courts
                    </li>
                  </ul>
                  <p className="mt-4">
                    Whether you&apos;re facing a first-offense DUI, reckless driving charge for speeding on I-95,
                    or accumulating too many points on your license, understanding Virginia law is crucial.
                    Browse our articles or <Link href="/contact" className="text-secondary hover:underline">contact us</Link> for
                    a free consultation.
                  </p>
                </div>
              </div>
            </div>

            {/* Sidebar */}
            <BlogSidebar />
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="bg-primary py-12">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h2 className="font-serif text-3xl text-white mb-4">
            Charged with DUI or Reckless Driving in Richmond?
          </h2>
          <p className="text-white/80 mb-6 max-w-2xl mx-auto">
            Don&apos;t face Virginia&apos;s tough traffic laws alone. With over 30 years of experience in
            Richmond-area courts, Standish Alexander can help protect your rights and driving privileges.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <a
              href="tel:8048865013"
              className="inline-flex items-center justify-center bg-secondary text-white px-8 py-4 rounded-lg font-semibold hover:bg-secondary-light transition-colors"
            >
              <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              (804) 886-5013
            </a>
            <Link
              href="/contact"
              className="inline-flex items-center justify-center bg-white text-primary px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
            >
              Free Consultation
              <svg className="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
