# Tech Stack & Preferences

## Core Stack
- **Framework:** Laravel 12.x
- **Runtime:** FrankenPHP with Laravel Octane
- **UI Framework:** Filament v3 (Admin and App Panels)
- **Database:** PostgreSQL (Preferred for GIS/PostGIS support)
- **Cache/Queue:** Redis (Essential for report generation)
- **API/Scraping:** Saloon for APIs, Symfony Panther for scraping
- **PDF Generation:** Spatie Browsershot (Headless Chrome)
- **Payments:** Laravel Cashier (Stripe)

## Coding Standards
- Always use **Laravel Pint** to format code.
- Always use **named parameters** for function calls.
- Split function calls with 3 or more parameters into individual lines.
- Prefer **native Laravel methods** over raw PHP.
- Use **Enums** placed in `app/Enum` for better readability.
- Use **PHPDoc blocks** for useful array shape definitions and method documentation.
- Use comments to facilitate code scanning, even if the code seems explicit.

## Architectural Patterns
- **Driver Pattern:** Use an interface `CountyDataProvider` for county-specific data ingestion.
- **Service Layer:** Use services like `ScoreCalculator` for complex business logic.
- **Job Queues:** Offload heavy tasks like PDF generation and data scraping to background jobs.
- **Filament Customization:** Create custom Filament themes and widgets to maintain a "SaaS" look for the customer dashboard.

## SEO & Frontend
- Use standard Blade templates + Tailwind for public marketing pages.
- Implement aggressive caching for static pages via Cloudflare and Laravel.
