<?php
function cimec_lista_productos()
{
    $ourCurrentPage=get_query_var('paged');
$args = array(
    'post_type' => 'producto',
    // 'tax_query' => array(
    //     array(
    //         'taxonomy' => 'categoria_producto',
    //         'field'    => 'slug',
    //         'terms'    => 'presion',
    //     ),
    // ),
    'posts_per_page' => get_field('numero_de_productos_por_pagina','9'),
    'orderby' => 'menu_order',
    'paged'=>$ourCurrentPage
);
$productos = new WP_Query($args);
while ($productos->have_posts()) : $productos->the_post(); ?>
    <?php $taxonomy = 'categoria_producto';?>
    <?php get_template_part('template-parts/extracto-producto', 'queries') ?>
        
<?php endwhile;
 if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $productos)); 

wp_reset_postdata();

} 

