<?php

// Hide front-end admin menu when logged in
add_action('init', 'disable_admin_bar', 1);
function disable_admin_bar()
{
    add_filter('show_admin_bar', '__return_false');
}

// Wrap oEmbed videos with responsive container
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id)
{

    // If the embed content contains a twitter embed, don't wrap it in the additional responsive class
    if (strpos($html, 'twitter') !== false) {
        return $html;
    } else {
        return '<div class="embed-container">' . $html . '</div>';
    }
}

// Allow uploads of SVGs
function add_svg_to_upload_mimes($upload_mimes)
{
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes', 10, 1);

// Remove SEO Frameword credit
add_filter('the_seo_framework_indicator', '__return_false');

// Lower SEO framework meta box priority
add_filter('the_seo_framework_metabox_priority', 'my_seo_metabox_priority');
function my_seo_metabox_priority()
{
    return 'low';
}

// Force date ordering of posts in backend
function ckd_post_types_admin_order($wp_query)
{
    if (is_admin()) {
        // Get the post type from the query
        $post_type = $wp_query->query['post_type'];
        if ($post_type == 'news' || $post_type == 'reports' || $post_type == 'presentations') {
            $wp_query->set('orderby', 'date');
            $wp_query->set('order', 'DESC');
        }
    }
}

add_filter('pre_get_posts', 'ckd_post_types_admin_order');

// Register Google Map API key
function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyBDbMDAlO4w_88rtcuvfZuxv7pFsuzl4N8');
}

add_action('acf/init', 'my_acf_init');

// Remove cateories and tags from posts
add_action('init', 'ckd_unregister_tags_category');

function ckd_unregister_tags_category()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');
    unregister_taxonomy_for_object_type('category', 'post');
}

// Slugify string
function slugify($str = '')
{
    $friendlyURL = htmlentities($str, ENT_COMPAT, "UTF-8", false);
    $friendlyURL = preg_replace('/&([a-z]{1,2})(?:acute|lig|grave|ring|tilde|uml|cedil|caron);/i', '\1', $friendlyURL);
    $friendlyURL = html_entity_decode($friendlyURL, ENT_COMPAT, "UTF-8");
    $friendlyURL = preg_replace('/[^a-z0-9-]+/i', '-', $friendlyURL);
    $friendlyURL = preg_replace('/-+/', '-', $friendlyURL);
    $friendlyURL = trim($friendlyURL, '-');
    $friendlyURL = strtolower($friendlyURL);
    return $friendlyURL;
}

// Remove query string from static resources
function _remove_script_version($src)
{
    $parts = explode('?', $src);
    return $parts[0];
}
add_filter('script_loader_src', '_remove_script_version', 15, 1);
add_filter('style_loader_src', '_remove_script_version', 15, 1);
