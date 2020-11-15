<?php get_header(); ?>
<main class="contenedor main-productos">
<?php // get_sidebar('productos'); ?>
<?php while (have_posts()) : the_post();?> 
<div>
    <div class="single-productos">
        <img src="<?php the_field('imagen-producto') ?>" alt="">
        <div class="contenido-single-producto">
            <h1><?php the_title() ?></h1>
            <?php $term_list = wp_get_post_terms(get_the_ID(), 'categoria_producto', array("fields" => "all")); ?>

                <?php $sizeTermList= count($term_list);  ?>

            <nav class="lista-categorias">
            <?php $taxonomy = 'categoria_producto'; ?>
                <p>Categorías:

                <?php $contador=1; ?>
               
                <?php for ($i=0; $i < $sizeTermList; $i++) {?>
                    <?php if($i!=$sizeTermList-1){ ?>
                    <a href="<?php echo get_term_link($term_list[$i]->slug, $taxonomy); ?>"><?php echo $term_list[$i]->name . ', ';?></a>
                    <?php }else{ ?>
                        <a href="<?php echo get_term_link($term_list[$i]->slug, $taxonomy); ?>"><?php echo $term_list[$i]->name;?></a>

                    <?php } ?>

                <?php } ?>
                </p>
                
            </nav>
            <p><?php the_field('precio') ?></p>
            <p>Precio no incluye I.G.V. | En stock: <?php the_field('stock') ?></p>
        </div>
        
    </div>

    <div class="descripcion-producto">
        <h4>Descripción</h4>
        <?php the_content() ?>
    </div>
    <div class="tabs-producto">
        <a href="#descripcion" class="tab-activo"><?php the_field('titulo-tab1') ?></a>
        <a href="#documentacion"><?php the_field('titulo-tab2') ?></a>
    </div>
    <div id="descripcion" class="ocultar tab-activo">
    <h5><p><?php the_field('subtitulo-tab1') ?></p></h5>
        <p><?php the_field('texto-tab1') ?></p>
    </div>
    <div id="documentacion" class="ocultar">
        <h5><p><?php the_field('subtitulo-tab2') ?></p></h5>
        <p><?php the_field('texto-tab2') ?></p>
    </div>
    
    







    <a target="_blank" class="archivo-producto" href="<?php the_field('archivo-proyecto') ?>">Ficha Técnica</a>

</div>
<?php endwhile; ?>


</main>



<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>
