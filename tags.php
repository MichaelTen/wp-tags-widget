<?php
if (is_singular()) {
    // Get the tags for the current post or page
    $tags = get_the_tags();
    if ($tags) {
        echo '<div style="margin: 10px 0;">'; // Wrapper div
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id); // Get the tag link
            echo '<a href="' . esc_url($tag_link) . '" style="
                display: inline-block;
                background-color: #f66c2d; /* Orange background */
                color: #fff9e0 !important; /* White font */
                padding: 5px 10px;
                margin: 5px;
                border-radius: 3px;
                font-size: 16px; /* Regular size */
                font-weight: normal;
                text-transform: capitalize;
                text-decoration: none; /* Remove underline */
            ">' . esc_html($tag->name) . '</a> ';
        }
        echo '</div>';
    } else {
        echo '<p>No tags available.</p>';
    }
}
?>
