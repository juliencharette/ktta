# KTTA

KTTA is a Kirby CMS project boilerplate that stands for:

**K**irby CMS + **T**wig + **T**ailwindcss + **A**lpineJS

## Features & Tools

-   [Kirby CMS](https://getkirby.com/) — the most amazing flat-file CMS
-   [Tailwind CSS](https://tailwindcss.com/) - utility-first CSS framework
-   [Alpine.js]() — lightweight JavaScript framework
-   [Vite](https://vitejs.dev/) — assets bundling and live reloading
-   [Custom Folder Structure](https://getkirby.com/docs/guide/configuration#custom-folder-setup)

## Requirements

-   PHP 8.0+ (8.1 is recommended)
-   Apache 2, Nginx, LiteSpeed or Caddy
-   URL rewriting
-   `mbstring` extension
-   `curl` extension
-   `ctype` extension
-   `gd` extension
-   [Node.js](https://nodejs.org/en/)
-   [Git](https://git-scm.com/)

## Get Started

### Installation

This setup instruction assume that you will clone this repository a working php web server.

1. Clone this repository.
2. Run `npm run setup` from the project root.
3. On the browser, go to `/panel`.
4. Create your main admin account.

### Development

To bundle assets (js, css) and enjoy livereload during development process, run the following in your terminal:

`npm run dev`

### Production

To bundle assets for production, run the following in your terminal:

`npm run build`

## Development Tips

Create a file `site/config/env.php` add paste the following:

```php
<?php

return [
    'debug' => true,
    'cache' => [
        'pages' => [
            'type'   => 'php',
            'active' => false,
        ],
    ],
];
```

It will disable caching and enable debug mode.

## Documentation

-   **[Kirby Documentation](https://getkirby.com/docs/guide)**
-   **[Twig Documentation](https://twig.symfony.com/doc/3.x/)**
-   **[Tailwind Documentation](https://tailwindcss.com/docs/installation)**
-   **[AlpineJS Documentation](https://alpinejs.dev/start-here)**

## Personal Note

This is a highly opinionated boilerplate that I am using for my personal/client projects. It is setup to serve French as primary language and English as secondary language. Feel free to leave me comments through [GitHub issues](https://github.com/juliencharette/ktta/issues).

---

© 2022 Julien Charette
