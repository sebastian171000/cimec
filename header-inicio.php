<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cimec | Instrumentación Industrial y Control de Procesos</title>
    <?php wp_head(); ?>
      <script>
        let contador = 0;
        window.onload = function() {
            var contenedor = document.getElementById('contenedor_carga');
            contenedor.style.visibility = 'hidden';
            
            contador++;

            if (contador == 1) {
                document.querySelector('body').removeAttribute('id');

            }
        }
    </script>  
</head>

<body <?php body_class(); ?> id="noscroll">
    
    <div id="contenedor_carga">


        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>

        </div>
    </div>
    <header>
        <div class="fondo-barra">
            <div class="contenedor informacion">
                <p><i class="fas fa-phone-alt" style="margin-right:.5rem;"></i>+511-719-3630</p>
                <p><i class="fas fa-envelope-open-text" style="margin-right:.5rem;"></i>ventas@Cimec.com</p>
            </div>
        </div>
        <div class="nav-principal contenedor">
            
            <div class="logo-barra">
                <a href="<?php echo esc_url(site_url('/')) ?>">
                    <img src="<?php the_field('logo','2')?>" alt="">

                </a>
                <i class="fas fa-bars"></i>
                <h1>Instrumentación Industrial<br>y Control de Procesos</h1>
            </div>
            <!-- <img src="<?php //echo get_template_directory_uri() ?>/img/logo_oxen.png" alt=""> -->
            <?php
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'navegacion-principal'
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="hero-nav">
            <div class="nav-secundario contenedor">
            <a href="<?php echo esc_url(site_url('/')) ?>">
                    <img src="<?php the_field('logo2','2')?>" alt="">

                </a>

                <!-- navegacion -->
                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-secundario'
                );
                wp_nav_menu($args);

                ?>
                <!-- fin navegacion -->
            </div>

        </div>

    </header>