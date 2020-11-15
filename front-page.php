<?php get_header('inicio');  ?>

<!-- Swiper -->
<div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if(get_field('slide1')): ?>
            <div class="swiper-slide">
                <div class="contenedor informacion-slide">
                    <div class="contenido-slide">
                        <h2><?php the_field('titulo-slide1'); ?></h2>
                        <h3><?php the_field('subtitulo-slide1'); ?></h3>
                        <p><?php the_field('parrafo-slide1'); ?></p>
                    </div>
                    <img src="<?php the_field('slide1'); ?>" alt="">
                </div>
            </div>
            <?php endif; ?>
            <?php if(get_field('slide2')): ?>
            <div class="swiper-slide">
                <div class="contenedor informacion-slide">
                    <div class="contenido-slide">
                        <h2><?php the_field('titulo-slide2'); ?></h2>
                        <h3><?php the_field('subtitulo-slide2'); ?></h3>
                        <p><?php the_field('parrafo-slide2'); ?></p>
                    </div>
                    <img src="<?php the_field('slide2'); ?>" alt="">
                </div>
            </div>
            <?php endif; ?>
            <?php if(get_field('slide3')): ?>
            <div class="swiper-slide">
                <div class="contenedor informacion-slide">
                    <div class="contenido-slide">
                        <h2><?php the_field('titulo-slide3'); ?></h2>
                        <h3><?php the_field('subtitulo-slide3'); ?></h3>
                        <p><?php the_field('parrafo-slide3'); ?></p>
                    </div>
                    <img src="<?php the_field('slide3'); ?>" alt="">
                </div>
            </div>
            <?php endif; ?>
            <?php if(get_field('slide4')): ?>
            <div class="swiper-slide">
                <div class="contenedor informacion-slide">
                    <div class="contenido-slide">
                        <h2><?php the_field('titulo-slide4'); ?></h2>
                        <h3><?php the_field('subtitulo-slide4'); ?></h3>
                        <p><?php the_field('parrafo-slide4'); ?></p>
                    </div>
                    <img src="<?php the_field('slide4'); ?>" alt="">
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
</div>
<hr>
<div class="contenedor descripcion">
<?php while (have_posts()) : the_post();?> 
    <p><?php the_content()?></p>
            <?php endwhile; ?>
</div>
<!-- animacion de numeros -->
<div class="contador parallax ">
    <div class="contenedor contenido-contador">
        <div class="contador-flex">
            <i class="fas fa-user-tie"></i>
            <div class="event-container">
                <p class="number ">0</p>
                <p class="event"><?php the_field('texto-experiencia') ?></p>
            </div>
        </div>
        <div class="contador-flex">
            <i aria-hidden="true" class="far fa-heart"></i>
            <div class="event-container">
                <p class="number">0</p>
                <p class="event"><?php the_field('texto-clientes') ?></p>
            </div>
        </div>
        <div class="contador-flex">        
            <i aria-hidden="true" class="fas fa-chart-pie"></i> 
            <div class="event-container">
                <p class="number">0</p> 
                <p class="event"><?php the_field('texto-proyectos') ?></p>
            </div>
        </div>
        <div class="contador-flex">
            <i class="fas fa-box-open"></i> 
            <div class="event-container">
                <p class="number">0</p>
                <p class="event"><?php the_field('texto-productos') ?></p>
            </div>
        </div>

    </div>
    <input type="hidden" id="numero1" value="<?php the_field('numero-experiencia') ?>" >
    <input type="hidden" id="numero2" value="<?php the_field('numero-clientes') ?>">
    <input type="hidden" id="numero3" value="<?php the_field('numero-proyectos') ?>">
    <input type="hidden" id="numero4" value="<?php the_field('numero-productos') ?>">
    
    
</div>

    <!-- fin de animacion de numeros -->
<div class="contenedor site-clientesYmercados">
<h2>Principales Mercados y Clientes</h2>
<div class="mercados">
    <div>
       <img src="<?php the_field('mercado1') ?>" alt=""> 
       <p>Minería</p>
    </div>
    
    <div>
       <img src="<?php the_field('mercado2') ?>" alt=""> 
       <p>EPC - OEM</p>
    </div>
    <div>
       <img src="<?php the_field('mercado3') ?>" alt=""> 
       <p>Oil&Gas</p>
    </div>
    <div>
       <img src="<?php the_field('mercado4') ?>" alt=""> 
       <p>Metalurgia</p>
    </div>
    <div>
       <img src="<?php the_field('mercado5') ?>" alt=""> 
       <p>Cemento</p>
    </div>
    <div>
       <img src="<?php the_field('mercado6') ?>" alt=""> 
       <p>Química</p>
    </div>
    <div>
       <img src="<?php the_field('mercado7') ?>" alt=""> 
       <p>Alimentos</p>
    </div>
    <div>
       <img src="<?php the_field('mercado8') ?>" alt=""> 
       <p>Energía</p>
    </div>
</div>

<div class="swiper-container2 container">
        <div class="swiper-wrapper" style="align-items: center;">
            <?php if(get_field('cliente1')): ?>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente1') ?>" alt="">
            </div>
            <?php endif; ?>
            <?php if(get_field('cliente2')): ?>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente2') ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente3') ?>" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente4') ?>" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente5') ?>" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente6') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente7') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente8') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente9') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente10') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente11') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente12') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente13') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente14') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente15') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente16') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente17') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente18') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente19') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente20') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente21') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente22') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente23') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente24') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente25') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente26') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente27') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente28') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente29') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente30') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente31') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente32') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente33') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente34') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente35') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente36') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente37') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente38') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente39') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente40') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente41') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente42') ?>" alt=""> 
            </div>
            <div class="swiper-slide">
                <img src="<?php the_field('cliente43') ?>" alt=""> 
            </div>
            

        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
        <!-- Add Arrows -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>
</div>
<hr>
<section class="contenedor">
    <h2>Marcas Comercializadas</h2>
    <div class="representadas">
    <img src="<?php the_field('representada1') ?>" alt="">
    <img src="<?php the_field('representada2') ?>" alt="">
    <img src="<?php the_field('representada3') ?>" alt="">
    <img src="<?php the_field('representada4') ?>" alt="">
    <img src="<?php the_field('representada5') ?>" alt="">
    <img src="<?php the_field('representada6') ?>" alt="">
    <img src="<?php the_field('representada7') ?>" alt="">
    <img src="<?php the_field('representada8') ?>" alt="">
    <img src="<?php the_field('representada9') ?>" alt="">
    <img src="<?php the_field('representada10') ?>" alt="">
    <img src="<?php the_field('representada11') ?>" alt="">
    <img src="<?php the_field('representada12') ?>" alt="">
    <img src="<?php the_field('representada13') ?>" alt="">
    <img src="<?php the_field('representada14') ?>" alt="">
    <img src="<?php the_field('representada15') ?>" alt="">
    <img src="<?php the_field('representada16') ?>" alt="">
    



    </div>
</section>


<?php get_footer() ?>
