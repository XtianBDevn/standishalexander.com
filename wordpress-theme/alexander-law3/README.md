# Alexander Law Office WordPress Theme

A custom WordPress theme for Alexander Law Office, P.C. - a criminal defense and traffic law firm in Richmond, Virginia.

## Features

- **Responsive Design**: Mobile-first design that looks great on all devices
- **Custom Post Types**: Practice Areas, Testimonials, Case Results
- **Leaflet.js Map**: Interactive map on the contact page
- **SEO Optimized**: Schema.org structured data for local business
- **Theme Customizer**: Easy configuration of contact info, map coordinates, social links
- **Custom Widgets**: Contact Info and Call-to-Action widgets
- **Page Templates**: About, Contact, Testimonials, Case Results, Fees

## Installation

1. **Upload the Theme**
   - Download or clone this theme folder
   - Upload to `/wp-content/themes/` directory
   - Or zip the folder and upload via Appearance > Themes > Add New > Upload Theme

2. **Activate the Theme**
   - Go to Appearance > Themes
   - Click "Activate" on Alexander Law theme

3. **Setup Permalinks**
   - Go to Settings > Permalinks
   - Select "Post name" structure
   - Click "Save Changes"

4. **Create Pages**
   Create the following pages and assign templates:
   - **Home** - Set as Front Page (Settings > Reading)
   - **Contact** - Use "Contact Page" template
   - **About** - Use "About Page" template
   - **Testimonials** - Use "Testimonials Page" template
   - **Case Results** - Use "Case Results Page" template
   - **Fees** - Use "Fees Page" template
   - **Blog** - Set as Posts Page (Settings > Reading)

5. **Configure Theme Settings**
   - Go to Appearance > Customize
   - Set contact information (phone, email, address)
   - Set map coordinates (latitude/longitude)
   - Set social media URLs
   - Configure homepage hero text

6. **Setup Navigation Menus**
   - Go to Appearance > Menus
   - Create a Primary Menu with these items:
     - Home
     - About (with sub-items: Our Firm, Attorney Profile, Testimonials, Case Results)
     - Practice Areas (link to /practice-areas/)
     - Resources (with sub-items: Blog, Fees, FAQ)
     - Contact
   - Assign to "Primary Menu" location

## Content Setup

### Practice Areas

1. Go to Practice Areas > Add New
2. Enter title (e.g., "DUI Defense")
3. Add content describing the practice area
4. Fill in the Short Description in the meta box
5. Optionally add a custom SVG icon
6. Set featured image
7. Use "Order" field to control display order

Recommended Practice Areas:
- DUI/DWI Defense
- Reckless Driving
- Traffic Violations
- Criminal Defense
- Expungement
- License Restoration

### Testimonials

1. Go to Testimonials > Add New
2. Enter client name or initials as title
3. Add testimonial text in content
4. Select case type from dropdown
5. Set rating (1-5 stars)
6. Enter source (e.g., "Google Review", "AVVO")

### Case Results

1. Go to Case Results > Add New
2. Enter brief case identifier as title
3. Add additional details in content (optional)
4. Fill in:
   - Case Type (DUI, Reckless, Traffic, Criminal, Expungement)
   - Original Charge
   - Outcome/Result
   - Court name

## Customization

### Colors (CSS Variables)

Edit `style.css` to modify these CSS variables:

```css
:root {
    --primary: #1e3a5f;     /* Navy Blue */
    --secondary: #c9a227;   /* Gold */
    --background: #ffffff;
    --text: #1f2937;
    --text-light: #6b7280;
}
```

### Logo

- Go to Appearance > Customize > Site Identity
- Upload your logo
- Recommended size: 180x60px for header display

### Map Location

1. Find your office coordinates on Google Maps
2. Go to Appearance > Customize > Map Settings
3. Enter latitude and longitude

## Recommended Plugins

- **Contact Form 7**: For advanced contact forms
- **Yoast SEO**: For additional SEO features
- **WP Super Cache**: For performance
- **Wordfence**: For security
- **UpdraftPlus**: For backups

## Contact Form 7 Integration

If using Contact Form 7:

1. Install and activate Contact Form 7
2. Create a form with these fields:
   ```
   [text* first-name placeholder "First name"]
   [text* last-name placeholder "Last name"]
   [tel* phone placeholder "(804) 555-1234"]
   [email email placeholder "your@email.com"]
   [select case-type "DUI/DWI" "Reckless Driving" "Traffic Violation" "Criminal Defense" "Expungement" "Other"]
   [date court-date]
   [textarea message]
   [submit "Submit Request"]
   ```
3. Go to Appearance > Customize
4. Enter the Contact Form 7 form ID

## File Structure

```
alexander-law/
├── assets/
│   └── js/
│       └── main.js           # Theme JavaScript
├── inc/
│   ├── template-tags.php     # Template helper functions
│   └── widgets.php           # Custom widgets
├── 404.php                   # 404 error page
├── archive-practice_area.php # Practice areas archive
├── comments.php              # Comments template
├── footer.php                # Site footer
├── front-page.php            # Homepage
├── functions.php             # Theme functions
├── header.php                # Site header
├── index.php                 # Blog archive
├── page.php                  # Default page
├── page-about.php            # About page template
├── page-contact.php          # Contact page template
├── page-fees.php             # Fees page template
├── page-results.php          # Case results template
├── page-testimonials.php     # Testimonials template
├── search.php                # Search results
├── searchform.php            # Search form
├── sidebar.php               # Sidebar template
├── single.php                # Single post
├── single-practice_area.php  # Single practice area
└── style.css                 # Main stylesheet
```

## Google Business Profile Integration

The theme syncs reviews and posts from your Google Business Profile (GBP). Hourly background sync via WP-Cron; manual sync available in Settings > Google Business.

### One-time setup

#### 1. Find your Place ID (informational)

Not required by the API but handy for verification: https://developers.google.com/maps/documentation/places/web-service/place-id

#### 2. Create a Google Cloud project

1. Go to https://console.cloud.google.com/
2. Click the project dropdown > **New Project** > name it (e.g. "Alexander Law GBP")
3. Note the project ID

#### 3. Request access to the Business Profile APIs

The My Business APIs are gated — Google must approve your project before quota is granted.

1. Fill the access request form: https://developers.google.com/my-business/content/prereqs#request-access
2. Use the business email tied to the GBP listing
3. Approval typically takes 2–7 business days

While you wait, you can still complete the rest of the setup; sync will return permission errors until access is granted.

#### 4. Enable the APIs

In Cloud Console > **APIs & Services > Library**, enable:

- My Business Account Management API
- My Business Business Information API
- My Business Q&A API *(optional)*
- Google My Business API *(legacy v4, used for reviews + localPosts)*

#### 5. Configure the OAuth consent screen

1. **APIs & Services > OAuth consent screen**
2. User type: **External**
3. App name, support email, developer email — fill them out
4. Scopes: add `https://www.googleapis.com/auth/business.manage`
5. Test users: add the Google account that owns the GBP listing
6. Save (you can leave the app in "Testing" mode — no verification needed for owner accounts)

#### 6. Create OAuth credentials

1. **APIs & Services > Credentials > Create Credentials > OAuth client ID**
2. Application type: **Web application**
3. Authorized redirect URI: copy from Settings > Google Business in WP admin. Looks like:
   `https://yourdomain.com/wp-admin/admin-post.php?action=alexander_law_gbp_oauth`
4. Save and copy the **Client ID** and **Client Secret**

#### 7. Connect in WordPress

1. **Settings > Google Business** in WP admin
2. Paste Client ID and Secret > **Save Settings**
3. Click **Connect Google Business Profile** > sign in with the owner account
4. After redirect, pick the GBP account + location > **Save Location**
5. Click **Sync Reviews & Posts Now**

### Displaying GBP content

Anywhere a shortcode works:

```
[gbp_reviews limit="5" min="4"]
[gbp_posts limit="3"]
```

Or in PHP templates:

```php
$reviews = alexander_law_get_gbp_reviews( 5 );
$posts   = alexander_law_get_gbp_posts( 3 );
```

Synced reviews automatically populate the LegalService schema on the homepage (`aggregateRating` + individual `review` nodes), which Google can surface as rich results.

### Google Search Console

1. Add your property at https://search.google.com/search-console
2. Choose **HTML tag** verification
3. Copy just the `content="..."` value
4. Paste into Settings > Google Business > "Google Search Console Verification"
5. Sitemap is at `/wp-sitemap.xml` — submit it in GSC

### Troubleshooting

- **"Request had insufficient authentication scopes"** — disconnect, re-authorize. The consent screen needs `business.manage`.
- **403 errors on sync** — your project hasn't been granted Business Profile API access yet; check the request form status.
- **Empty review/post lists** — make sure the connected Google account is an owner/manager of the GBP listing.

## Support

For support or customization requests, contact the developer.

## License

This theme is licensed under the GPL v2 or later.

---

Developed for Alexander Law Office, P.C.
Richmond, Virginia
