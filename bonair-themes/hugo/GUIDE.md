# The Bon Air Journal — Install & Go-to-Market Guide

Everything to take this site from your laptop to ranking: install, deploy, connect the admin, and the ongoing playbook for SEO / AEO / GEO and Google Business Profile.

---

## Part 1 — Install & run locally

Prereqs: Hugo extended ≥ 0.164 (`brew install hugo`), Node (for the CMS proxy).

```bash
cd bonair-themes/hugo
hugo server              # site at http://localhost:1313
npx decap-server         # in a 2nd terminal — enables http://localhost:1313/admin/
```

The admin at `/admin/` gives you three custom forms:
- **Journal Entries** — post editor with SEO description, category, lead image, and an FAQ builder (each Q&A renders on the page *and* ships as FAQPage schema).
- **Business Profile** — your Google Business Profile data: NAP (name/address/phone), hours, coordinates, service areas, GBP link, Place ID, featured reviews. Feeds the LocalBusiness schema on every page, the footer, and the homepage reviews section.
- Everything saves as a git-trackable file — no database.

New post from the terminal instead: `hugo new posts/my-title.md`.

**Palette:** the theme ships dark. Set `palette = "light"` in `hugo.toml` for the warm-paper look, or `"auto"` to follow each visitor's OS preference.

## Part 2 — Deploy (Vercel)

1. Push `bonair-themes/hugo/` to its own GitHub repo (e.g. `bonair-journal`).
2. In Vercel: **Add New → Project → import the repo**. `vercel.json` already pins the Hugo version, build command, and output directory — accept the defaults and deploy.
3. Add the domain: `blog.bonairmedia.com` (recommended) in Project → Settings → Domains, and add the CNAME it gives you at your DNS host. If you'd rather serve at `bonairmedia.com/blog`, use a rewrite from your main Next.js site instead — but the subdomain is simpler and keeps the two deploys independent.
4. If you change the domain, update `baseURL` in `hugo.toml` and `site_url` in `static/admin/config.yml`.

**Wire the admin for production** (one-time):
1. Set `backend.repo` in `static/admin/config.yml` to your `owner/repo`.
2. Create a GitHub OAuth App (Settings → Developer settings) with callback `https://api.netlify.com/auth/done`, or self-host an OAuth proxy on Vercel (search "decap oauth vercel" — it's a 2-minute template deploy). Editors then log in at `/admin/` with GitHub; every save is a commit; every commit redeploys.

## Part 3 — Go-to-market (first 30 days)

**Week 1 — Foundations**
- Fill in the **Business Profile form completely** — especially phone and Place ID. NAP must match your GBP listing character-for-character.
- Verify the domain in **Google Search Console** + submit `sitemap.xml`; add **Bing Webmaster Tools** (Bing feeds ChatGPT's browsing).
- Confirm `robots.txt`, `llms.txt`, and schema render on the live URL (test with Google's Rich Results Test).

**Week 2–3 — Content flywheel**
- Publish 2 posts/week. Alternate money topics (what clients search: "SEO agency Richmond VA") with authority topics (what AI cites: original data, definitions, how-tos).
- Every post gets: a ~155-char description, 2–3 FAQ entries, one category, internal link to a service page on the main site.
- Post every article as a **GBP Update** (Posts feature) with a link — GBP posts are a ranked signal and free distribution.

**Week 4 — Distribution**
- Repurpose each post: LinkedIn version, email to your list, and an answer on relevant Reddit/forum threads (AI engines heavily cite forums).
- Ask 2–3 happy clients for Google reviews using your Place ID link (the footer "Review us on Google" URL). Then feature them via the admin's reviews form.

## Part 4 — Maintaining rankings

### SEO
- **Freshness**: update your top 5 posts quarterly; `dateModified` is emitted automatically from the file's change.
- **Internal links**: every new post should link to 2 older posts and 1 main-site service page; go back and add links *to* new posts from old ones.
- **Watch Search Console monthly**: pages with impressions but low CTR need better titles/descriptions — edit them in the admin.
- Never chase volume with thin posts; one 1,200-word answer beats five 300-word stubs.

### AEO / GEO
- **Lead with the answer**: first paragraph of every post should answer the title's question outright — that's what the `speakable` schema points at and what answer engines quote.
- **FAQ everything**: the FAQ form isn't decoration; question-phrased headings + concise answers are the highest-probability citation format for ChatGPT/Perplexity/AI Overviews.
- **Include citable data**: numbers, dates, named definitions ("GEO stands for…"). Generative engines prefer sources with concrete facts to attribute.
- **Check your citations monthly**: ask ChatGPT, Perplexity, and Gemini questions your clients would ask ("best SEO agency near Richmond VA", "what is GEO") and note whether/how you're cited. Adjust content toward the phrasings that engines actually use.
- Keep `llms.txt` accurate — it regenerates from your descriptions, so descriptions matter twice.

### Google Business Profile
- **Post weekly** (new blog entries count) — profiles with recent posts rank measurably better in the local pack.
- **Reviews are the #1 local signal**: ask after every successful project, reply to *every* review within 48h (replies signal an active business).
- **Q&A section**: seed it yourself with the same FAQs from your posts; you can answer your own questions.
- **Categories & services**: review quarterly; add secondary categories (Marketing Agency, Website Designer, Software Company).
- **Photos monthly**: even office/screenshot/team photos — profiles with fresh photos get more clicks.
- **NAP consistency**: any change to phone/address goes in GBP *and* the admin's Business Profile form the same day, plus any directories (Yelp, Apple Maps, Bing Places).

### Cadence cheat-sheet
| Frequency | Do |
|---|---|
| Weekly | 1–2 posts, GBP update, reply to reviews |
| Monthly | Search Console review, AI-citation spot check, GBP photos |
| Quarterly | Refresh top posts, audit GBP categories/services, add internal links |
