<?php get_header(); ?>
<?php 
$categoria=get_queried_object();
$cadena=get_query_var('tag');
$cadena_resultado=str_replace("+", ",", $cadena);
$titulo=str_replace("+", ", ", $cadena);
$titulofinal=str_replace("_", " ", $titulo);
$titulofinal2=str_replace("-", " ", $titulofinal);
$pos = strpos($titulofinal2, ',');
if($pos==false){
    $textcategoria='Marca: ';
}else{
    $textcategoria='Marcas: ';
}
?>

<h1 class="h1-categoria" style="text-transform: capitalize;"><?php echo $textcategoria . $titulofinal2; ?></h1>
<img src="<?php the_field('imagen-categoria',$categoria) ?>" alt="">
<div class="contenedor site-blog site-productos">
<?php get_sidebar('productos'); ?>

    <div>
        <?php 
         $paged = get_query_var('page');
         $paged = ($paged) ? $paged : 1;
         
         $products = new WP_Query(array(
            'tag' => $cadena_resultado, // $catalog_data is the current taxonomy (woman)
            'post_type' => 'producto',
            'posts_per_page' => get_field('numero_de_productos_por_pagina','9'),
            'paged' => $paged
        ));
         
        
            while ($products->have_posts()) : $products->the_post(); ?>
             <?php $taxonomy = 'categoria_producto';?>
             <?php get_template_part('template-parts/extracto-producto', 'tag') ?>
                 
         <?php endwhile;
          
 if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $products)); 
         
         wp_reset_postdata();
        ?>
        
    </div>
</div>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>

