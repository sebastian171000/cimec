<?php get_header(); ?>
<?php 
$categoria=get_queried_object();
?>
<h1 class="h1-categoria"><?php echo $categoria->name; ?></h1>
<div class="contenedor site-blog site-productos">
<?php get_sidebar('productos'); ?>

        <div>
        <?php $ourCurrentPage=get_query_var('paged');
$args = array(
    'post_type' => 'producto',
    // 'tax_query' => array(
    //     array(
    //         'taxonomy' => 'categoria_producto',
    //         'field'    => 'slug',
    //         'terms'    => 'presion',
    //     ),
    // ),
    'posts_per_page' =>1000,
    'orderby' => 'menu_order',
 
);
$productos = new WP_Query($args);
while ($productos->have_posts()) : $productos->the_post(); ?>
    <?php $taxonomy = 'categoria_producto';?>
    <?php get_template_part('template-parts/extracto-producto', 'queries') ?>
        
<?php endwhile;
 

wp_reset_postdata(); ?>

        </div>

</div>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>
