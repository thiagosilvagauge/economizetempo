<?php
function meu_tema_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'meu-tema'),
    ));
}

function custom_excerpt_length( $length ) {
    return 20;
}

//Get first category
function get_first_non_uncategorized_category_link() {
    $categories = get_the_category();
    
    $filtered_categories = array_filter($categories, function($category) {
        return $category->name != 'Sem categoria';
    });
    
    if (!empty($filtered_categories)) {
        $first_category = array_shift($filtered_categories);
        return '<a class="tag tag--' . esc_attr($first_category->slug) . '" href="' . esc_url(get_category_link($first_category->term_id)) . '">' . esc_html($first_category->name) . '</a>';
    }
    
    return '';
}
    
function meu_tema_enqueue_styles() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/components/header.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/components/footer.css');
    wp_enqueue_style('ads-style', get_template_directory_uri() . '/assets/css/components/ads.css');
    wp_enqueue_style('featured-news-style', get_template_directory_uri() . '/assets/css/components/featured-news.css');
    wp_enqueue_style('news-style', get_template_directory_uri() . '/assets/css/components/news.css');
    wp_enqueue_style('grid-news-style', get_template_directory_uri() . '/assets/css/components/grid-news.css');
    wp_enqueue_style('news-title-item-style', get_template_directory_uri() . '/assets/css/components/title-only-news.css');
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
}
add_action('after_setup_theme', 'meu_tema_setup');
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_styles');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );