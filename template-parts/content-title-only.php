<?php
    $offset = isset($args['offset']) ? $args['offset'] : 4;
    $posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : 3;
    
    $title_only_query = new WP_Query(array(
        'posts_per_page' => $posts_per_page,
        'offset' => $offset
    ));

    if($title_only_query->have_posts()):
        while($title_only_query->have_posts()): $title_only_query-> the_post();
?>
        <a href="<?php the_permalink(); ?>" class="news-title-item">
            <h3><?php the_title(); ?></h3>
        </a>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>