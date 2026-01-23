import { parseStringPromise } from 'xml2js';

export interface RSSItem {
  title: string;
  link: string;
  description: string;
  pubDate: string;
  source: string;
  category: string;
  slug: string;
  imageUrl?: string;
}

export interface RSSFeed {
  title: string;
  description: string;
  link: string;
  items: RSSItem[];
}

// RSS feeds focused on DUI Defense and Traffic Law in Virginia
export const RSS_FEEDS = [
  {
    url: 'https://news.google.com/rss/search?q=DUI+Virginia+Richmond+law&hl=en-US&gl=US&ceid=US:en',
    category: 'DUI News',
    source: 'Google News'
  },
  {
    url: 'https://news.google.com/rss/search?q=traffic+law+Virginia+Richmond&hl=en-US&gl=US&ceid=US:en',
    category: 'Traffic Law',
    source: 'Google News'
  },
  {
    url: 'https://news.google.com/rss/search?q=reckless+driving+Virginia&hl=en-US&gl=US&ceid=US:en',
    category: 'Reckless Driving',
    source: 'Google News'
  },
  {
    url: 'https://news.google.com/rss/search?q=Virginia+criminal+defense+law&hl=en-US&gl=US&ceid=US:en',
    category: 'Criminal Defense',
    source: 'Google News'
  }
];

// Generate a URL-safe slug from title
function generateSlug(title: string): string {
  return title
    .toLowerCase()
    .replace(/[^a-z0-9\s-]/g, '')
    .replace(/\s+/g, '-')
    .replace(/-+/g, '-')
    .substring(0, 80)
    .replace(/-$/, '');
}

// Clean HTML from description
function cleanDescription(html: string): string {
  if (!html) return '';
  return html
    .replace(/<[^>]*>/g, '')
    .replace(/&nbsp;/g, ' ')
    .replace(/&amp;/g, '&')
    .replace(/&lt;/g, '<')
    .replace(/&gt;/g, '>')
    .replace(/&quot;/g, '"')
    .replace(/&#39;/g, "'")
    .trim()
    .substring(0, 300);
}

// Extract image URL from content if available
function extractImageUrl(content: string): string | undefined {
  if (!content) return undefined;
  const imgMatch = content.match(/<img[^>]+src="([^"]+)"/);
  return imgMatch ? imgMatch[1] : undefined;
}

// Parse a single RSS feed
async function parseFeed(feedConfig: typeof RSS_FEEDS[0]): Promise<RSSItem[]> {
  try {
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), 10000);

    const response = await fetch(feedConfig.url, {
      signal: controller.signal,
      headers: {
        'User-Agent': 'Mozilla/5.0 (compatible; AlexanderLawBot/1.0)',
      },
      next: { revalidate: 3600 } // Cache for 1 hour
    });

    clearTimeout(timeoutId);

    if (!response.ok) {
      console.error(`Failed to fetch ${feedConfig.url}: ${response.status}`);
      return [];
    }

    const xml = await response.text();
    const result = await parseStringPromise(xml, { explicitArray: false });

    const channel = result.rss?.channel;
    if (!channel?.item) return [];

    const items = Array.isArray(channel.item) ? channel.item : [channel.item];

    return items.slice(0, 10).map((item: Record<string, unknown>) => ({
      title: String(item.title || ''),
      link: String(item.link || ''),
      description: cleanDescription(String(item.description || '')),
      pubDate: String(item.pubDate || new Date().toISOString()),
      source: feedConfig.source,
      category: feedConfig.category,
      slug: generateSlug(String(item.title || '')),
      imageUrl: extractImageUrl(String(item['content:encoded'] || item.description || ''))
    }));
  } catch (error) {
    console.error(`Error parsing feed ${feedConfig.url}:`, error);
    return [];
  }
}

// Fetch all RSS feeds and combine results
export async function fetchAllFeeds(): Promise<RSSItem[]> {
  const feedPromises = RSS_FEEDS.map(parseFeed);
  const results = await Promise.all(feedPromises);

  const allItems = results.flat();

  // Sort by date (newest first) and remove duplicates by title
  const seen = new Set<string>();
  const uniqueItems = allItems.filter(item => {
    const normalizedTitle = item.title.toLowerCase();
    if (seen.has(normalizedTitle)) return false;
    seen.add(normalizedTitle);
    return true;
  });

  return uniqueItems.sort((a, b) =>
    new Date(b.pubDate).getTime() - new Date(a.pubDate).getTime()
  );
}

// Fetch feeds by category
export async function fetchFeedsByCategory(category: string): Promise<RSSItem[]> {
  const allFeeds = await fetchAllFeeds();
  return allFeeds.filter(item =>
    item.category.toLowerCase() === category.toLowerCase()
  );
}

// Get a single article by slug
export async function getArticleBySlug(slug: string): Promise<RSSItem | null> {
  const allFeeds = await fetchAllFeeds();
  return allFeeds.find(item => item.slug === slug) || null;
}

// Format date for display
export function formatDate(dateString: string): string {
  try {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });
  } catch {
    return dateString;
  }
}

// Format date for SEO (ISO 8601)
export function formatDateISO(dateString: string): string {
  try {
    return new Date(dateString).toISOString();
  } catch {
    return new Date().toISOString();
  }
}

// Local legal resources and static content for SEO
export const localLegalResources = [
  {
    title: 'Understanding Virginia DUI Laws: Blood Alcohol Limits',
    slug: 'virginia-dui-blood-alcohol-limits',
    description: 'Learn about Virginia\'s BAC limits, including the 0.08% standard for drivers 21+, 0.02% for underage drivers, and enhanced penalties for 0.15%+ BAC levels in Richmond and throughout Virginia.',
    category: 'DUI Defense',
    pubDate: new Date().toISOString(),
    source: 'Alexander Law Office',
    link: '/blog/virginia-dui-blood-alcohol-limits',
    isLocal: true
  },
  {
    title: 'Reckless Driving in Virginia: A Class 1 Misdemeanor Explained',
    slug: 'reckless-driving-virginia-class-1-misdemeanor',
    description: 'In Virginia, reckless driving is a criminal offense, not just a traffic ticket. Learn about the penalties, including potential jail time, and how an experienced Richmond defense attorney can help.',
    category: 'Reckless Driving',
    pubDate: new Date().toISOString(),
    source: 'Alexander Law Office',
    link: '/blog/reckless-driving-virginia-class-1-misdemeanor',
    isLocal: true
  },
  {
    title: 'Richmond Traffic Court: What to Expect at Your Hearing',
    slug: 'richmond-traffic-court-what-to-expect',
    description: 'A comprehensive guide to Richmond General District Court traffic proceedings. Learn about court procedures, what to wear, and how an attorney can represent you in Henrico, Chesterfield, and Richmond courts.',
    category: 'Traffic Law',
    pubDate: new Date().toISOString(),
    source: 'Alexander Law Office',
    link: '/blog/richmond-traffic-court-what-to-expect',
    isLocal: true
  },
  {
    title: 'Virginia Implied Consent Law: Refusing a Breathalyzer',
    slug: 'virginia-implied-consent-refusing-breathalyzer',
    description: 'Understanding the consequences of refusing a breath test in Virginia. Learn about license suspension, court admissibility, and your rights during a Richmond-area DUI stop.',
    category: 'DUI Defense',
    pubDate: new Date().toISOString(),
    source: 'Alexander Law Office',
    link: '/blog/virginia-implied-consent-refusing-breathalyzer',
    isLocal: true
  },
  {
    title: 'Speeding Over 85 MPH in Virginia: Why It\'s Reckless Driving',
    slug: 'speeding-over-85-mph-virginia-reckless-driving',
    description: 'Virginia law treats speeding over 85 MPH as reckless driving regardless of the speed limit. Learn about penalties and defense strategies for I-95 and I-64 corridor cases.',
    category: 'Reckless Driving',
    pubDate: new Date().toISOString(),
    source: 'Alexander Law Office',
    link: '/blog/speeding-over-85-mph-virginia-reckless-driving',
    isLocal: true
  },
  {
    title: 'License Suspension in Virginia: How to Get Restricted Driving Privileges',
    slug: 'virginia-license-suspension-restricted-privileges',
    description: 'After a DUI or excessive points, you may qualify for restricted driving privileges in Virginia. Learn how Richmond drivers can maintain their ability to drive to work and essential appointments.',
    category: 'Traffic Law',
    pubDate: new Date().toISOString(),
    source: 'Alexander Law Office',
    link: '/blog/virginia-license-suspension-restricted-privileges',
    isLocal: true
  }
];
