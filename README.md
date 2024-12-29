# WordPress Tag Widget with Styling and Links (wp-tags-widget)
WordPress Tags Widget in PHP

# WordPress Tag Widget with Styling and Links

This PHP snippet is designed to display tags for the current WordPress post or page in a widget area (sidebar or footer). Each tag is styled with a custom orange background and a white font. The tags are also clickable links to their respective archive pages.

---

## Features

- **Dynamic Display**: Automatically fetches and displays tags for the current post or page.
- **Custom Styling**: 
  - Orange background (`#f66c2d`)
  - White font (`#ffffff`)
  - Adjustable font size and padding
- **Clickable Links**: Tags link directly to their respective archive pages.
- **Lightweight**: Inline styling ensures no external CSS is required.

---

## How to Use

1. **Add a PHP Widget Plugin**  
   Install a plugin like [PHP Code Widget](https://wordpress.org/plugins/php-code-widget/) to enable PHP in widget areas.

2. **Paste the Code**  
   Copy and paste the provided PHP code into a PHP widget in your WordPress sidebar or footer area.

3. **Save and Test**  
   - Visit a post or page with tags to confirm functionality.
   - Tags will be displayed with the custom styles and link to their respective archive pages.

---

## Customization

### Adjust Font Size
Modify the `font-size` property in the code to change the size of the tag text.

```php
font-size: 16px; /* Adjust as needed */
