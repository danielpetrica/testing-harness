## Project Name

**ClearHome Florida – Property Due Diligence SaaS**

***

## Project Overview

**ClearHome Florida** is a high-performance SaaS platform designed for property due diligence in Florida. It leverages **Laravel 12.x**, **FrankenPHP (Octane)**, and **FilamentPHP v3** to provide real-time property health reports. The platform abstracts fragmented Florida government data (Property Appraiser, Clerk of Court, GIS) into a unified "Clear Home Score," helping buyers, investors, and professionals assess property risks like liens, flood zones, and open permits.

***

## MVP Feature List

### 1. **Data Ingestion Engine**
- Unified interface for Florida county data (Pinellas, Hillsborough, etc.).
- Driver-based architecture (`CountyDataProvider`) for specific county scrapers and APIs.
- Integration with Florida Statewide Parcel Map API (ArcGIS REST) for geospatial data.

### 2. **Clear Home Score Algorithm**
- Automated risk assessment deducting points from a base score of 100.
- Weighted risk factors: Active Liens (-20), Flood Zones (-15), Open Permits (-10), Crime Rate (-5).
- Detailed breakdown explaining the score to the user.

### 3. **Filament-Powered Dashboards**
- **Admin Panel (`/admin`):** Manage users, reports, payments, and supported counties.
- **App Panel (`/app`):** Custom-themed customer dashboard for managing property reports.

### 4. **Search & Conversion Funnel**
- Address autocomplete via Google Places or Mapbox.
- Free property preview showing basic data and blurred risk factors.
- Stripe Checkout integration for full report purchasing.

### 5. **High-Quality Report Generation**
- PDF generation using `spatie/browsershot` (Headless Chrome) for modern CSS support.
- Professional report layout with detailed property insights and scoring breakdown.

### 6. **Public SEO Pages**
- Marketing site with pricing, features, and county-specific landing pages (e.g., "Property Due Diligence in Pinellas County").
- Dynamic sitemap generation for local traffic capture.

***

**Goal:**  
Make **ClearHome Florida** the most trusted and efficient tool for Florida property risk assessment and due diligence.
