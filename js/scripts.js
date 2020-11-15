jQuery(document).ready($ => {

    $('.navegacion-principal').hide();
    $(' .sub-menu').hide();
    $('.nav-secundario a img').css('opacity', 0);
    // $('.menu-principal-footer .sub-menu').show();


    var altura = $('.hero-nav').offset().top;
    var barraAltura = $('.hero-nav').innerHeight();
    var queryMin = window.matchMedia('(min-width: 768px)');
    var queryMax = window.matchMedia('(max-width: 767px)');

    let celulares = window.matchMedia('(max-width: 767px)');
    let tablets = window.matchMedia('(max-width: 1024px)');
    let laptops = window.matchMedia('(min-width: 1025px)');

    let animado = document.querySelector('.parallax');
    let contador = 0;
    let alturaPantalla = screen.height;

    $(window).on('scroll', function() {
        let alturaAnimado = animado.offsetTop;
        if ($(window).scrollTop() > altura) {
            $('.hero-nav').addClass('fixed');
            $('.nav-secundario').addClass('transicion0');
            $('.nav-secundario a img').css('opacity', 1);
            if (queryMin.matches) {
                $('body').css({ 'margin-top': barraAltura + 'px' });

            }
        } else {
            $('.hero-nav').removeClass('fixed');
            $('.nav-secundario').removeClass('transicion0');
            $('.nav-secundario a img').css('opacity', 0);
            if (queryMin.matches) {
                $('body').css({ 'margin-top': '0px' });

            }
        }
        //animaciones numeros
        if (contador < 2) {
            if (laptops.matches) {
                if ($(window).scrollTop() > alturaAnimado - alturaPantalla + 265 - 40) {

                    contador++;

                }
            } else if (celulares.matches) {
                if ($(window).scrollTop() > alturaAnimado - alturaPantalla + 170 - 40) {

                    contador++;

                }
            } else if (tablets.matches) {
                if ($(window).scrollTop() > alturaAnimado - alturaPantalla + 120 - 40) {

                    contador++;

                }
            }
        }

        if (contador == 1) {


            //animaciones numeros
            $('.contador-flex:nth-child(1) .number').animateNumber({ number: $('#numero1').val() }, 3000);
            $('.contador-flex:nth-child(2) .number').animateNumber({ number: $('#numero2').val() }, 3000);
            $('.contador-flex:nth-child(3) .number').animateNumber({ number: $('#numero3').val() }, 3000);
            $('.contador-flex:nth-child(4) .number').animateNumber({ number: $('#numero4').val() }, 3000);


        }
    });
    $('#documentacion').hide();
    $('.tabs-producto a').on('click', function() {
        let enlace_evento = $(this).attr('href');
        $('.tabs-producto a').removeClass('tab-activo');
        $(this).addClass('tab-activo');
        $('.ocultar').hide()
        $(enlace_evento).show();

        return false;
    });
    var pathname = window.location.pathname;
    let contadorFiltro = 0;
    let contadorFiltro2 = 0;
    $('form>div>ul>li:nth-child(2) ul,form>div>ul>li:nth-child(1) ul').hide();

    $('form>div>ul>li h4').addClass('borde-facet');

    $('form>div>ul>li h4').addClass('titulo-filtros');
    if (pathname == '/productos/') {
        $('.btn-refrescar').hide();
    } else {
        $('.btn-refrescar').show();
    }




    $('form>div>ul>li:nth-child(1) .titulo-filtros').on('click', function() {

        if (contadorFiltro == 0) {
            $('form>div>ul>li:nth-child(1) .titulo-filtros').addClass('rotar');
            $('form>div>ul>li:nth-child(1)>ul').slideDown(200);
            $('form>div>ul>li:nth-child(1) h4').removeClass('borde-facet');
            $('form>div>ul>li:nth-child(1)>ul').addClass('borde-facet');
            contadorFiltro = 1;
        } else {
            $('form>div>ul>li:nth-child(1) .titulo-filtros').removeClass('rotar');
            contadorFiltro = 0;
            $('form>div>ul>li:nth-child(1)>ul').slideUp(200);

            $('form>div>ul>li:nth-child(1)>ul').removeClass('borde-facet');
            window.setTimeout(function() { $('form>div>ul>li:nth-child(1) h4').addClass('borde-facet'); }, 200);

        }


    });
    $('form>div>ul>li:nth-child(2) .titulo-filtros').on('click', function() {

        if (contadorFiltro2 == 0) {
            $('form>div>ul>li:nth-child(2) .titulo-filtros').addClass('rotar');
            $('form>div>ul>li:nth-child(2)>ul').slideDown(200);
            $('form>div>ul>li:nth-child(2) h4').removeClass('borde-facet');
            $('form>div>ul>li:nth-child(2)>ul').addClass('borde-facet');
            contadorFiltro2 = 1;
        } else {
            $('form>div>ul>li:nth-child(2) .titulo-filtros').removeClass('rotar');
            $('form>div>ul>li:nth-child(2)>ul').slideUp(200);
            contadorFiltro2 = 0;
            $('form>div>ul>li:nth-child(2)>ul').removeClass('borde-facet');
            window.setTimeout(function() { $('form>div>ul>li:nth-child(2) h4').addClass('borde-facet'); }, 200);
        }

    });


    let inputspadres = $('.cat-item input:not(.children input)');


    inputspadres.on('click', function() {
        if ($(this).prop('checked')) {
            // Selecciona cada input que tenga la clase .checar
            $('.children input').prop('checked', false);
        }
    });


    $('.children input').on('click', function() {
        if ($(this).prop('checked')) {
            // Selecciona cada input que tenga la clase .checar
            inputspadres.prop('checked', false);
        }
    });




    let contadorFiltro3 = 0;
    let contadorFiltro4 = 0;
    let contadorFiltro5 = 0;
    let contadorFiltro6 = 0;
    $('.children').hide();
    $('.cat-item.cat-item-20>label').on('click', function() {
        $('.cat-item-20 .children').slideToggle(200);
        if (contadorFiltro3 == 0) {
            $('.cat-item.cat-item-20>label').addClass('rotar');
            contadorFiltro3 = 1;
        } else {
            $('.cat-item.cat-item-20>label').removeClass('rotar');
            contadorFiltro3 = 0;
        }
    });
    $('.cat-item.cat-item-21>label').on('click', function() {
        $('.cat-item-21 .children').slideToggle(200);
        if (contadorFiltro4 == 0) {
            $('.cat-item.cat-item-21>label').addClass('rotar');
            contadorFiltro4 = 1;
        } else {
            $('.cat-item.cat-item-21>label').removeClass('rotar');
            contadorFiltro4 = 0;
        }
    });
    $('.cat-item.cat-item-22>label').on('click', function() {
        $('.cat-item-22 .children').slideToggle(200);
        if (contadorFiltro5 == 0) {
            $('.cat-item.cat-item-22>label').addClass('rotar');
            contadorFiltro5 = 1;
        } else {
            $('.cat-item.cat-item-22>label').removeClass('rotar');
            contadorFiltro5 = 0;
        }
    });
    $('.cat-item.cat-item-23>label').on('click', function() {
        $('.cat-item-23 .children').slideToggle(200);
        if (contadorFiltro6 == 0) {
            $('.cat-item.cat-item-23>label').addClass('rotar');
            contadorFiltro6 = 1;
        } else {
            $('.cat-item.cat-item-23>label').removeClass('rotar');
            contadorFiltro6 = 0;
        }
    });
    $(".cat-item.cat-item-20>label input").prop('disabled', true);
    $(".cat-item.cat-item-21>label input").prop('disabled', true);
    $(".cat-item.cat-item-22>label input").prop('disabled', true);
    $(".cat-item.cat-item-23>label input").prop('disabled', true);
    $(".children input").prop('disabled', false);

    $('.fa-bars').on('click', function() {
        $('.navegacion-principal').slideToggle(400);

    });
    $('#menu-item-19 a:first').on('click', function() {

        $('#menu-item-19 .sub-menu').slideToggle(400);
        // return false;


    });
    $('#menu-item-18 a:first').on('click', function() {

        $('#menu-item-18 .sub-menu').slideToggle(400);
        // return false;



    });

    $('.nav-secundario .menu-item-19 ').on('mouseenter', function() {
        $('.nav-secundario .menu-item-19 .sub-menu').slideDown(100);


    });
    $('.nav-secundario .menu-item-19 ').on('mouseleave', function() {
        $('.nav-secundario .menu-item-19 .sub-menu').slideUp(100);


    });

    $('.nav-secundario .menu-item-18 ').on('mouseenter', function() {
        $('.nav-secundario .menu-item-18 .sub-menu').slideDown(100);


    });
    $('.nav-secundario .menu-item-18 ').on('mouseleave', function() {
        $('.nav-secundario .menu-item-18 .sub-menu').slideUp(100);


    });

    //swiper
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        // autoplay: {
        //     delay: 2500,
        //     disableOnInteraction: false,
        // },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    var swiperClientes = new Swiper('.swiper-container2', {

        //slidesPerView: 6,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },


    });
    var swiper = new Swiper('.swiper-container-mineria', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 10500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    //fin swiper
    //inicio-portafolio
    $(".portafolio-menu ul li").click(function() {
        $('.portafolio-menu ul li').removeClass('active');
        // $('.portfolio-item .item').hide(1000);
        $(this).addClass('active');
        var value = $(this).attr('data-filter');
        if (value == "*") {
            //$('.filter').removeClass('hidden');
            $('.portfolio-item .item').show('3000');
        } else {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".portfolio-item .item").not('' + value).hide('1000');
            $('.portfolio-item .item').filter('' + value).show('1000');

        }
    });
    $(".portafolio-menu ul li").click(function() {
        $('.portafolio-menu ul li').removeClass('active');
        // $('.portfolio-item .item').hide(1000);
        $(this).addClass('active');
        var value = $(this).attr('data-filter');
        if (value == "*") {
            //$('.filter').removeClass('hidden');
            $('.portfolio-item2 .item').show('3000');
        } else {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".portfolio-item2 .item").not('' + value).hide('1000');
            $('.portfolio-item2 .item').filter('' + value).show('1000');

        }
    });









});