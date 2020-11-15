<?php get_header(); ?>
<img src="<?php the_field('imagen-proyectos') ?>" alt="" class="width100">
<h1 class="h1-proyectos">Desarrollo de Proyectos</h1>
<div class="contenedor">
<?php while (have_posts()) : the_post();?> 

    <?php the_content()?>
    
<?php endwhile; ?>
</div>
<section class="contenedor site-clientes">
    <div class="portafolio-menu">
        <ul>
            <li class="active" data-filter=".min">Minería</li>
            <li data-filter=".al">Alimentos - Industria</li>
            <li data-filter=".epc">EPC - OEM</li>
            <li data-filter=".oil">Oil&Gas - Químicas</li>
            <li data-filter=".met">Metalurgia - Cemento</li>
            <li data-filter=".en">Energía - Infraestructura</li>
        </ul>
    </div>
    <div class="portfolio-item2">
        <div class="item min swiper-container-mineria">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria1') ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria2') ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria3') ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria4') ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria5') ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria6') ?>" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?php the_field('mineria7') ?>" alt="">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="item al" style="display:none;">
            <img src="<?php the_field('tabla-proyecto2') ?>" alt="">
        </div>
        <div class="item epc" style="display:none;">
            <img src="<?php the_field('tabla-proyecto3') ?>" alt="">
        </div>
        <div class="item oil" style="display:none;">
            <img src="<?php the_field('tabla-proyecto4') ?>" alt="">
        </div> 
        <div class="item met" style="display:none;">
            <img src="<?php the_field('tabla-proyecto5') ?>" alt="">
        </div>
        <div class="item en" style="display:none;">
            <img src="<?php the_field('tabla-proyecto6') ?>" alt="">
        </div>     
    </div>
</section>



<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>