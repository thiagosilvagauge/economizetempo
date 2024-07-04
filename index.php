<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

</head>
<body>
    <header>
        <?php include('header.php')  ?>
    </header>
    <?php get_template_part('template-parts/ad', 'horizontal'); ?>
    <main>
       <div class="container">
            <section class="news-grid">
                <div class="news-col">
                    <?php get_template_part('template-parts/content', 'featured'); ?>
                    <div class="news-row">
                        <?php get_template_part('template-parts/content', 'grid'); ?>
                    </div>
                    <div class="news-row">
                        <?php get_template_part('template-parts/content', 'title-only') ?>
                    </div>
                </div>
                <div class="news-col">
                    <?php get_template_part('template-parts/content', 'featured', array('offset' => 7)); ?>
                    <div class="news-row news-row--vertical">
                        <?php get_template_part('template-parts/content', 'title-only', array('offset' => 8, 'posts_per_page' => 4)) ?>
                    </div>
                    <div class="ad--square">
                        <?php get_template_part('template-parts/ad', 'square'); ?>
                    </div>
                </div>
                <div class="news-col">
                    <?php get_template_part('template-parts/ad', 'vertical'); ?>
                </div>
            </section>
       </div>
    </main>
    <footer>
        <?php include('footer.php')  ?>
    </footer>
</body>
</html>
