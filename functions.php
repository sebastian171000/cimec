<?php
/*Consultas reutilizables */
require get_template_directory() . '/inc/queries.php';
//va a hacer que se muestren nuestros customs posts types en tag.php
function wpse28145_add_custom_types( $query ) {
    if( is_tag() && $query->is_main_query() ) {

        // this gets all post types:
        $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        // $post_types = array( 'post', 'your_custom_type' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'wpse28145_add_custom_types' );
function taxonomy_rewrite_fix($wp_rewrite) {
    $r = array();
    foreach($wp_rewrite->rules as $k=>$v){
        $r[$k] = str_replace('categoria_producto=$matches[1]&paged=','categoria_producto=$matches[1]&page=',$v);
    }
    $wp_rewrite->rules = $r;
}
add_filter('generate_rewrite_rules', 'taxonomy_rewrite_fix');
function taxonomy_rewrite_fix2($wp_rewrite) {
    $r = array();
    foreach($wp_rewrite->rules as $k=>$v){
        $r[$k] = str_replace('tag=$matches[1]&paged=','tag=$matches[1]&page=',$v);
    }
    $wp_rewrite->rules = $r;
}
add_filter('generate_rewrite_rules', 'taxonomy_rewrite_fix2');
function cimec_setup()
{
    //habilita imagenes destacadas
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    //titulo seo
    add_theme_support('title-tag');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    //agregar imagenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
   
}
add_action('after_setup_theme', 'cimec_setup');
function cimec_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'cimec')
    ));
    
}
//init->esta funcion va a correr cuando worpress inicialize 
add_action('init', 'cimec_menus');
//scripts y Styles
function cimec_scripts_styles()
{
    //la hoja de estilo principal
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    
        wp_enqueue_style('swipecss', get_template_directory_uri() . '/css/swiper.min.css', array(), '1.0.0');
    
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefonts','swipecss'), '1.0.0');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
    
        wp_enqueue_script('swipejs', get_template_directory_uri() . '/js/swiper.js', array('jquery'), '1.0.0', true);
    
    
        wp_enqueue_script('animate-number-js', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array('jquery'), '1.0.0', true);
    
    if (is_page(13) || is_page(23)) {
        wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true);
    }
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/a0e0d9b7b0.js', array(), '1.0.0');
    

    
}
//va acargar hojas de estilo en la parte frontal del sitio web
add_action('wp_enqueue_scripts', 'cimec_scripts_styles');
//definir zona de widgets
function cimec_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget2">',
        'after_widget' => '</div>',
        'before_tittle' => '<h3>',
        'after_tittle' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar Productos',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_tittle' => '<h3>',
        'after_tittle' => '</h3>'
    ));
}
add_action('widgets_init', 'cimec_widgets');
//tener cuidado con dejar espacios en las comillas
/**imagen hero */
function animateNumber_hero_imagen()
{
    // obtener id pagina principal
    
    $front_page_id = get_option('page_on_front');
    //obtener id imagen
    $id_imagen = get_field('fondo', $front_page_id);
    //obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    //style css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');
    $imagen_destacada_css = "
    body.home .parallax{
        background-image: url($imagen);
    }
    ";
    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'animateNumber_hero_imagen');

function wp_comments_update($post){
    $new_value = array('ID' => $post->ID, 'comment_status' => 'open');
    wp_update_post($new_value);
    
}
function comments_enable_for_new_post( $data ) {
    if( $data['post_type'] == 'post' ) {
    $data['comment_status'] = "open";
    }
    return $data;
}
// add_filter( 'wp_insert_post_data', 'comments_enable_for_new_post' );

// ////////////////////////////////////////////////////////////////////////
// // User Pro Profile URL Integration ////////////////////////////////////
// ////////////////////////////////////////////////////////////////////////
// add_filter('wpdiscuz_profile_url', 'wpdiscuz_up_profile_url', 10, 2);
// function wpdiscuz_up_profile_url($profile_url, $user) {
//     if ($user && class_exists('userpro_api')) {
//         global $userpro; $profile_url = $userpro->permalink($user->ID);        
//     }
//     return $profile_url;
// }

// ////////////////////////////////////////////////////////////////////////
// // User Pro Badges Integration ////////////////////////////
// ////////////////////////////////////////////////////////////////////////
// add_filter('wpdiscuz_after_label', 'wpdiscuz_up_after_label_html', 110, 2);
// function wpdiscuz_up_after_label_html($afterLabelHtml, $comment) {
//     if ($comment->user_id && class_exists('userpro_api')) {
//         $afterLabelHtml .= userpro_show_badges($comment->user_id, $inline = true);
//     }
//     return $afterLabelHtml;
// }
              
