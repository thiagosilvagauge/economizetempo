<?php
$offset = isset($args['offset']) ? $args['offset'] : 0;

$featured_query = new WP_Query(array(
    'posts_per_page' => 1,
    'offset' => $offset
));

if ($featured_query->have_posts()) :
    while ($featured_query->have_posts()) : $featured_query->the_post();
?>
        <div class="featured-news">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </a>
            <div class="featured-news__content">
                <span class="category"><?php echo get_first_non_uncategorized_category_link(); ?></span>
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                    <p><?php custom_excerpt_length(the_excerpt()); ?></p>
                </a>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>