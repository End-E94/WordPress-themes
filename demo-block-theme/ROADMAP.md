# Roadmap

Goal: A flexible, accessible block theme for any website. A general purpose block theme (full site editing) with clean typography, sensible defaults, accessible patterns and style variations. Replace this text with a description of the theme you want built. Requirements: block theme using theme.json, templates, parts and patterns; follows the latest WordPress coding standards (WPCS: tabs, escaping, prefixes, translatable strings); ready for WordPress.org theme review (GPL, no external resources, readme.txt, accessibility-ready, no minified code).

Each item is one small task that changes a single file. The roadmap bot ticks items off automatically.

## Block theme foundation
- [x] Create style.css with the WordPress theme header (Theme Name: Demo Block Theme, Description: A flexible, accessible block theme for any website, Version: 0.1.0, Requires at least: 6.6, Tested up to: 7.1, Requires PHP: 7.4, License: GNU General Public License v3 or later, License URI: https://www.gnu.org/licenses/gpl-3.0.html, Text Domain: demo-block-theme, Tags: full-site-editing, block-patterns, accessibility-ready, wide-blocks, translation-ready) and no other CSS _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create theme.json (version 3) with the schema URL, appearanceTools, layout contentSize 720px and wideSize 1200px, and a neutral color palette _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Add system font stacks, a fluid font size scale and a spacing scale to theme.json _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/index.html with the header template part, a query loop with post-template and pagination, and the footer template part _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create parts/header.html with the site logo, site title and navigation blocks _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create parts/footer.html with the site title, a copyright line and a footer navigation block _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/single.html with post title, featured image, post content, post meta, post navigation and comments _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/page.html with post title, featured image and post content _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/archive.html with an archive title, a query loop and pagination _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/search.html with a search block, a results heading, a query loop and pagination _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/404.html with a friendly message and a search block _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/home.html for the blog posts index with a query loop _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create functions.php with a file docblock and a demo_block_theme_setup() function hooked to after_setup_theme that adds wp-block-styles and editor-styles support _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Add a demo_block_theme_register_pattern_categories() function hooked to init that registers a demo-block-theme block pattern category in functions.php _(done by roadmap bot, 2026-11-15, built-in)_

## Patterns and style
- [x] Create patterns/hero.php with a block pattern header comment (Title, Slug: demo-block-theme/hero, Categories: demo-block-theme) and a cover block with a heading, paragraph and call-to-action button, using esc_html_e() with the demo-block-theme text domain for every visible string _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create patterns/call-to-action.php with a call-to-action banner using group, heading and buttons blocks and esc_html_e() with the demo-block-theme text domain _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create patterns/key-stats.php with three columns each showing a large number and a label, using esc_html_e() with the demo-block-theme text domain _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create patterns/features-three-columns.php with three columns each with a heading and a short paragraph, using esc_html_e() with the demo-block-theme text domain _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create patterns/testimonials.php with a quote block pattern using esc_html_e() with the demo-block-theme text domain _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create styles/dark.json style variation (version 3) with a dark color palette _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Add button, link and heading element styles to theme.json using the color palette _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Add a visible :focus-visible outline for links and buttons to theme.json styles _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Add a prefers-reduced-motion rule to the custom CSS in theme.json _(done by roadmap bot, 2026-11-15, built-in)_

## WordPress.org readiness and coding standards
- [x] Create readme.txt in the WordPress.org theme readme format with Description, Installation, Frequently Asked Questions, Copyright (credits for any bundled resources) and Changelog, stating Requires at least 6.6, Tested up to 7.1 and Requires PHP 7.4 _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create phpcs.xml.dist that uses the WordPress-Extra and WordPress-Docs rulesets with text domain and prefix demo-block-theme and minimum_supported_wp_version 6.6 _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create composer.json with dev dependencies wp-coding-standards/wpcs and phpcompatibility/phpcompatibility-wp and lint and fix scripts that run phpcs and phpcbf _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Review functions.php against the WordPress PHP coding standards (tabs, spacing inside parentheses, Yoda conditions, docblocks) and fix any issues _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Update README.md with the theme description, requirements, installation steps, supported features (block theme, patterns, style variations) and development instructions _(done by roadmap bot, 2026-11-15, built-in)_

## Cycle 2 - 2026-11-15
- [x] Create templates/front-page.html that shows the hero and key-stats patterns above the latest posts _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create templates/page-no-title.html for pages without a visible title _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create parts/sidebar.html with a search block and a recent posts list _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create styles/sand.json style variation with a warm neutral color palette _(done by roadmap bot, 2026-11-15, built-in)_
- [x] Create patterns/team-members.php with a three-column team pattern _(done by roadmap bot, 2026-11-15, built-in)_
- [ ] Create patterns/faq.php with a details block pattern
- [ ] Create patterns/pricing-tiers.php with three columns each showing a price and a call-to-action button
- [ ] Add block style variations (card group and underlined heading) in functions.php
