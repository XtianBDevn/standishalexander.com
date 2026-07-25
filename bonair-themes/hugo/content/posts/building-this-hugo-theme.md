---
title: "How We Built This Journal: A Hugo Theme Walkthrough for Beginners"
date: 2026-07-25T09:30:00-04:00
draft: false
categories: ["Tutorials"]
author: "Bon Air Media"
description: "A beginner-to-intermediate walkthrough of building a custom Hugo theme from scratch — layouts, partials, data files, SEO structured data, and a git-based CMS — using this very site as the example."
faq:
  - q: "Do I need to know Go to build a Hugo theme?"
    a: "No. Hugo templates use Go's template syntax, but you only need a handful of patterns — range, with, partial, and variables — all of which are shown in this walkthrough."
  - q: "How long does it take to build a custom Hugo theme?"
    a: "A focused blog theme like this one — layouts, styling, SEO structured data, and CMS config — is a weekend project for an intermediate developer, or about a week of evenings for a beginner."
  - q: "Can Hugo have an admin panel like WordPress?"
    a: "Yes. A git-based CMS such as Decap CMS gives you a browser admin at /admin/ that commits markdown to your repository, so editors never touch code while the site stays fully static."
---

The site you're reading right now is a custom Hugo theme, built from an empty folder. This post walks through how — not every line, but every *decision* — so you can build your own. You'll need basic HTML/CSS and a terminal; no Go knowledge required.

<!--more-->

## Why Hugo

Hugo takes a folder of markdown files and templates and compiles them into plain HTML in milliseconds. There's no database, no PHP, no server to patch — which means free hosting, instant pages, and nothing to hack. The trade-off is that *you* wire up everything a CMS would normally hand you. That wiring is the fun part.

## 1. The skeleton

A Hugo theme is just a naming convention:

```text
themes/bonair-dark/
├── layouts/
│   ├── _default/
│   │   ├── baseof.html    # the outer shell every page uses
│   │   ├── single.html    # one blog post
│   │   └── list.html      # a listing of posts
│   ├── partials/
│   │   ├── header.html
│   │   ├── footer.html
│   │   └── head-seo.html
│   └── index.html         # the homepage
├── static/css/main.css
└── archetypes/posts.md    # front-matter template for new posts
```

`baseof.html` is the frame; every other template fills its `main` block:

```go-html-template
<body>
  {{ partial "header.html" . }}
  <main>{{ block "main" . }}{{ end }}</main>
  {{ partial "footer.html" . }}
</body>
```

That one pattern — a shell, blocks, and partials — is 80% of Hugo theming.

## 2. Loops and data: the homepage index

The numbered index on our homepage is a `range` over the posts section:

```go-html-template
{{ $posts := where .Site.RegularPages "Section" "posts" }}
{{ range $i, $p := $posts }}
  <a href="{{ $p.Permalink }}">
    <span>{{ printf "%02d" (add $i 1) }}</span>
    <span>{{ $p.Title }}</span>
    <time>{{ $p.Date.Format "Jan 2, 2006" }}</time>
  </a>
{{ end }}
```

If you can read that, you can read any Hugo template. `where` filters, `range` loops, `printf` formats — it's a pipeline, like the command line.

## 3. Design: how to not look like a template

Most sites built with AI assistance in 2026 share a look: centered hero, gradient text, glassy cards, purple glow. We deliberately went the other way — the rules we followed work for any palette:

1. **Typography first.** One display serif (Fraunces), one body face (Newsreader), one mono for labels. Type does the branding.
2. **Hairlines, not cards.** Content is separated by 1-pixel rules, like a printed index — no rounded boxes with drop shadows.
3. **One accent color.** Teal appears only where your eye should go: numbers, links, the current state.
4. **Let whitespace be the layout.** The homepage is a headline, one featured entry, and a list. Nothing floats, nothing glows.

## 4. Data files: content that isn't a page

Our business details — address, hours, Google Business Profile link, reviews — live in `data/business.yml`, not hard-coded in templates. Any template can read it:

```go-html-template
{{ $b := .Site.Data.business }}
<address>{{ $b.address.locality }}, {{ $b.address.region }}</address>
```

Change the YAML once; the footer, the schema markup, and the reviews section all update. This is Hugo's answer to a CMS "settings page."

## 5. SEO that answer engines can read

Static sites are already fast — the ranking work is in the markup. Our `head-seo.html` partial emits [JSON-LD structured data](https://schema.org) on every page:

- **`ProfessionalService`** with our real address, coordinates, hours, and service area — the local-SEO anchor that ties the site to our Google Business Profile.
- **`BlogPosting`** with a `speakable` block on every article, telling voice and answer engines which parts to read aloud.
- **`FAQPage`** generated from front matter — the Q&A block at the bottom of this very post is also machine-readable, which is why answer engines can quote it.

The FAQ is the trick worth stealing: authors just type questions and answers in the CMS, and the template renders them *and* emits the schema:

```yaml
faq:
  - q: "Do I need to know Go to build a Hugo theme?"
    a: "No — you only need a handful of template patterns."
```

We also publish `robots.txt` rules that explicitly welcome AI crawlers, and an `llms.txt` file — a plain-text site summary for language models, regenerated on every build.

## 6. An admin panel for a static site

The site has a WordPress-style admin at `/admin/` courtesy of [Decap CMS](https://decapcms.org) — a single HTML file and a YAML config. Editors get forms (post editor, business profile, reviews); every save is a git commit; the host rebuilds automatically. No server, no login database, nothing to hack.

```bash
npx decap-server   # run beside `hugo server` for local editing
```

## 7. Ship it

Deployment is a `vercel.json` with four lines that matter — framework, build command, output directory, and a pinned `HUGO_VERSION`. Push to GitHub, import to Vercel, done. Every later `git push` (including CMS saves) redeploys the site in seconds.

That's the whole build: a folder convention, one template pattern, a data file, and markup that machines can read. Start with `hugo new site`, steal liberally from this walkthrough, and you'll have something that looks — and ranks — like nobody's template.
