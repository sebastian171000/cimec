<?php get_header(); ?>
<img src="<?php the_field('imagen-ingenieria') ?>" alt="" class="width100">
<h1 class="h1-ingenieria">Desarrollo de Ingeniería de detalle</h1>
<div class="contenedor">
<?php while (have_posts()) : the_post();?> 

    <?php the_content()?>
    
<?php endwhile; ?>
</div>
<main class="contenedor site-ing">
    <div class="contenido-ing">
        <img src="<?php the_field('img-ing1') ?>" alt="">
        <h3><?php the_field('subtitulo-ing1') ?></h3>
        <p><?php the_field('texto-ing1') ?></p>
    </div>
    <div class="contenido-ing">
        <img src="<?php the_field('img-ing2') ?>" alt="">
        <h3><?php the_field('subtitulo-ing2') ?></h3>
        <p><?php the_field('texto-ing2') ?></p>
    </div>
    <div class="contenido-ing">
        <img src="<?php the_field('img-ing3') ?>" alt="">
        <h3><?php the_field('subtitulo-ing3') ?></h3>
        <p><?php the_field('texto-ing3') ?></p>
    </div>
    <div class="contenido-ing">
        <img src="<?php the_field('img-ing4') ?>" alt="">
        <h3><?php the_field('subtitulo-ing4') ?></h3>
        <p><?php the_field('texto-ing4') ?></p>
    </div>
    <div class="contenido-ing">
        <img src="<?php the_field('img-ing5') ?>" alt="">
        <h3><?php the_field('subtitulo-ing5') ?></h3>
        <p><?php the_field('texto-ing5') ?></p>
    </div>
</main>
<div class="contenedor imagen-servicios">
<img src="<?php the_field('tabla-ing-res') ?>" alt="" >
</div>
<div class="contenedor imagen-servicios2">
<img src="<?php the_field('tabla-ing') ?>" alt="" >
</div>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>