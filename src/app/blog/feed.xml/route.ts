import { localLegalResources } from '@/lib/rss';

export async function GET() {
  const baseUrl = 'https://www.standishalexander.com';

  const rssItems = localLegalResources.map((post) => `
    <item>
      <title><![CDATA[${post.title}]]></title>
      <link>${baseUrl}${post.link}</link>
      <guid isPermaLink="true">${baseUrl}${post.link}</guid>
      <description><![CDATA[${post.description}]]></description>
      <pubDate>${new Date(post.pubDate).toUTCString()}</pubDate>
      <category>${post.category}</category>
      <author>info@standishalexander.com (Standish Alexander)</author>
    </item>
  `).join('');

  const rssFeed = `<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:content="http://purl.org/rss/1.0/modules/content/">
  <channel>
    <title>Alexander Law Office Blog - Richmond VA DUI &amp; Traffic Law</title>
    <link>${baseUrl}/blog</link>
    <description>Expert legal insights on DUI defense, reckless driving, and traffic law in Richmond, Virginia. Over 30 years of experience serving Henrico, Chesterfield, and Central Virginia.</description>
    <language>en-US</language>
    <lastBuildDate>${new Date().toUTCString()}</lastBuildDate>
    <atom:link href="${baseUrl}/blog/feed.xml" rel="self" type="application/rss+xml"/>
    <managingEditor>info@standishalexander.com (Standish Alexander)</managingEditor>
    <webMaster>info@standishalexander.com (Alexander Law Office)</webMaster>
    <copyright>Copyright ${new Date().getFullYear()} Alexander Law Office, P.C. All rights reserved.</copyright>
    <category>Law</category>
    <category>DUI Defense</category>
    <category>Traffic Law</category>
    <category>Criminal Defense</category>
    <image>
      <url>${baseUrl}/logo.png</url>
      <title>Alexander Law Office Blog</title>
      <link>${baseUrl}/blog</link>
    </image>
    ${rssItems}
  </channel>
</rss>`;

  return new Response(rssFeed, {
    headers: {
      'Content-Type': 'application/xml',
      'Cache-Control': 'public, max-age=3600, s-maxage=3600',
    },
  });
}
