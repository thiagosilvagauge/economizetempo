<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="menu">
            <button class="menu-button">
                <i class="fas fa-bars"></i>
            </button>
            <!-- <nav class="navigation">
                <?php /*get_template_part('template-parts/navigation'); */?>
            </nav> -->
        </div>
        <h1 class="brand">Economizando Tempo</h1>
        <div class="header-search">
            <form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="search-form">
                <label>
                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                </label>
                <button type="submit" class="search-submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</header>
