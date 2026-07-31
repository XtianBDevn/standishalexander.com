# Bon Air Media — Blog Themes (WordPress + Hugo)

Two blog-ready themes matching the bonairmedia.com design system, so you can compare the platforms side by side.

Shared design tokens (pulled from the live site):

| Token | Value |
|---|---|
| Background | `hsl(240 15% 8%)` (#111117) |
| Text | `hsl(240 5% 97%)` |
| Primary (teal) | `hsl(174 70% 45%)` |
| Accent (magenta) | `hsl(340 65% 55%)` |
| Font | System sans stack (same as the live site) |

Both themes share the same stylesheet and class names — cards, gradient headlines, eyebrow pills, glow blobs, pagination — so switching platforms later doesn't mean redesigning.

## WordPress — `wordpress/bonair-media/`

Classic PHP theme: `index.php` (blog grid + hero), `single.php`, `page.php`, `header.php`, `footer.php`, `functions.php`.

Install:
1. Zip the `bonair-media` folder (or copy it to `wp-content/themes/`).
2. Appearance → Themes → Activate **Bon Air Media**.
3. Appearance → Menus → create a menu, assign to **Primary Menu**.
4. Set featured images on posts for the card thumbnails (800×450 crop is registered as `bonair-card`).

To test locally with wp-env: point a `.wp-env.json` `"themes"` entry at `wordpress/bonair-media` and run `npx wp-env start`.

> **Note:** the Hugo site has since been redesigned ("The Bon Air Journal" editorial look) and wired for deployment, CMS admin, and local/AEO/GEO SEO. See [hugo/GUIDE.md](hugo/GUIDE.md) for install, deployment, and the go-to-market playbook.

## Hugo — `hugo/` (theme in `hugo/themes/bonair-dark/`)

The `hugo/` folder is a complete working site: config (`hugo.toml`), one sample post, and the theme.

Run it:

```bash
cd bonair-themes/hugo && hugo server
```

New post:

```bash
cd bonair-themes/hugo && hugo new posts/my-post-title.md
```

Front matter supports `categories` (first one becomes the card/eyebrow label), `author`, `image` (card thumbnail + post hero), and `description`. Content before `<!--more-->` becomes the card excerpt. RSS and sitemap are generated automatically.

## Which platform?

- **WordPress**: browser-based editor, non-technical authors, plugins (forms, SEO, analytics). Needs PHP hosting, updates, and security maintenance.
- **Hugo**: markdown files in git, builds to pure static HTML — free hosting (Vercel/Netlify/Pages), effectively perfect Core Web Vitals, zero maintenance. Authoring means writing markdown and pushing, unless you add a git-based CMS (Decap CMS, Tina) on top.
