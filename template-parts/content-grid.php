<?php
$offset = isset($args['offset']) ? $args['offset'] : 1;
$posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : 3;
$grid_query = new WP_Query(array(
    'posts_per_page' => $posts_per_page,
    'offset' => $offset
));

if($grid_query->have_posts()) :
    while($grid_query->have_posts()) : $grid_query->the_post();
?>
    <div class="news-item">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"  />
            <span class="category"><?php echo get_first_non_uncategorized_category_link(); ?></span>
            <h3><?php the_title(); ?></h3>
            <p><?php custom_excerpt_length(the_excerpt()); ?></p>
        </a>
    </div>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>