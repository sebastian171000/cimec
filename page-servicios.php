<?php get_header(); ?>
<img src="<?php the_field('imagen-servicios') ?>" alt="" class="width100">
<h1 class="h1-servicios"><?php the_title(); ?></h1>
<main class="contenedor site-servicios">
    <div class="contenido-servicios">
        <h2><?php the_field('subtitulo_servicios1') ?></h2>
        <img src="<?php the_field('img-servicio1') ?>" alt="">
        <p><?php the_field('texto-servicio1') ?></p>      
    </div>
    <div class="contenido-servicios">
        <h2><?php the_field('subtitulo_servicios2') ?></h2>
        <img src="<?php the_field('img-servicio2') ?>" alt="">
        <p><?php the_field('texto-servicio2') ?></p>
    </div>
    <div class="contenido-servicios">
        <h2><?php the_field('subtitulo_servicios3') ?></h2>
        <img src="<?php the_field('img-servicio3') ?>" alt="">
        <p><?php the_field('texto-servicio3') ?></p>
    </div>
    <div class="contenido-servicios">
        <h2><?php the_field('subtitulo_servicios4') ?></h2>
        <img src="<?php the_field('img-servicio4') ?>" alt="">
        <p><?php the_field('texto-servicio4') ?></p>
    </div>
</main>
<div class="contenedor imagen-servicios2">
<img src="<?php the_field('tabla-servicios') ?>" alt="" >
</div>

<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>