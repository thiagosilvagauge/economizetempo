<?php
// Obtém todas as categorias
$categories = get_categories();

if ( ! empty( $categories ) ) {
    echo '<ul>';
    foreach ( $categories as $category ) {
        // Exibe o nome da categoria com um link para a página da categoria
        echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></li>';
    }
    echo '</ul>';
} else {
    echo 'Nenhuma categoria encontrada.';
}
?>
