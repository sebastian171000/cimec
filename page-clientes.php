<?php get_header(); ?>

<img src="<?php the_field('imagen-clientes') ?>" alt="">
<main class="contenedor"> 
<?php while (have_posts()) : the_post();?> 

    <?php echo get_the_content()?>
    
<?php endwhile; ?>
</main>   
<h1 class="h1-clientes">Principales Clientes por Mercado</h1>
<section class="contenedor site-clientes">
    <div class="portafolio-menu">
        <ul>
            <li class="active" data-filter="*">Todos</li>
            <li data-filter=".min">Minería</li>
            <li data-filter=".al">Alimentos - Industria</li>
            
            <li data-filter=".epc">EPC - OEM</li>
            
            
            <li data-filter=".oil">Oil&Gas</li>
            <li data-filter=".qui">Química</li>
            <li data-filter=".met">Metalurgia - Cemento</li>
            <li data-filter=".en">Energía - Infraestructura</li>
        </ul>
    </div>
    <div class="portfolio-item">
        <div class="item min">
            <img src="<?php the_field('cliente37') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente38') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente39') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente40') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente41') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente42') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente1') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente2') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente3') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente4') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente5') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente6') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente7') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente20') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente21') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente22') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente23') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente24') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente25') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente26') ?>" alt="">
        </div>
        
        <div class="item min">
            <img src="<?php the_field('cliente43') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente44') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente45') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente46') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente47') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente48') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente49') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente50') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente51') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente52') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente53') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente54') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente55') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente56') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente57') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente58') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente59') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente60') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente61') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente62') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente63') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente64') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente65') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente66') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente67') ?>" alt="">
        </div>
        <div class="item min">
            <img src="<?php the_field('cliente68') ?>" alt="">
        </div>
        
        <div class="item al">
            <img src="<?php the_field('cliente8') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente9') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente10') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente11') ?>" alt="">
        </div>
        <div class="item al">
            <img src="<?php the_field('cliente12') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente13') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente14') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente15') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente16') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente17') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente18') ?>" alt="">
        </div>
        <div class="item en">
            <img src="<?php the_field('cliente19') ?>" alt="">
        </div>
        
        <div class="item epc">
            <img src="<?php the_field('cliente27') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente28') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente29') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente30') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente31') ?>" alt="">
        </div>
        <div class="item epc">
            <img src="<?php the_field('cliente32') ?>" alt="">
        </div>
        
        <div class="item met">
            <img src="<?php the_field('cliente33') ?>" alt="">
        </div>
        <div class="item met">
            <img src="<?php the_field('cliente34') ?>" alt="">
        </div>
        <div class="item met">
            <img src="<?php the_field('cliente35') ?>" alt="">
        </div>
        
        
        <div class="item oil">
            <img src="<?php the_field('cliente69') ?>" alt="">
        </div>
        <div class="item oil">
            <img src="<?php the_field('cliente70') ?>" alt="">
        </div>
        <div class="item oil">
            <img src="<?php the_field('cliente71') ?>" alt="">
        </div>
        <div class="item oil">
            <img src="<?php the_field('cliente72') ?>" alt="">
        </div>
        <div class="item oil">
            <img src="<?php the_field('cliente73') ?>" alt="">
        </div>
        <div class="item qui">
            <img src="<?php the_field('cliente74') ?>" alt="">
        </div>
        <div class="item qui">
            <img src="<?php the_field('cliente75') ?>" alt="">
        </div>
        <div class="item qui">
            <img src="<?php the_field('cliente76') ?>" alt="">
        </div>
        <div class="item qui">
            <img src="<?php the_field('cliente77') ?>" alt="">
        </div>
        <div class="item met qui">
            <img src="<?php the_field('cliente36') ?>" alt="">
        </div>
        
    </div>
</section>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>
