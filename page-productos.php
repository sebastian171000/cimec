<?php get_header(); ?>
<?php 
$categoria=get_queried_object();
?>
<h1 class="h1-categoria"><?php echo $categoria->name; ?></h1>
<div class="contenedor site-blog site-productos">
<?php get_sidebar('productos'); ?>
        <?php while (have_posts()) : the_post();?> 
        <div>
        <?php cimec_lista_productos(); ?>

        </div>
        <?php endwhile; ?>
</div>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>
