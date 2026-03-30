---
name: Geist font via public/fonts
description: How to use the Geist npm package font files in this Laravel/Vite project
type: feedback
---

The `geist` npm package only exports JS modules (for Next.js) — its font files are not accessible via Vite's package resolution.

**Why:** The package's `exports` field restricts access to `.woff2` files, causing a Vite build error when referencing them via a bare package path in CSS `url()`.

**How to apply:** Copy the font file to `public/fonts/` and reference it as a static URL:
1. `cp node_modules/geist/dist/fonts/geist-sans/Geist-Variable.woff2 public/fonts/`
2. In CSS: `url('/fonts/Geist-Variable.woff2')`
