<?php 
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
"https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
$_SERVER['REQUEST_URI']; 
preg_match_all('!\d+!', $link, $matches);
?> 

<?php $paginas=$matches[0][0];
if($paginas==null){
    $paginas=1;
}
?>
<div class="contenedor site-blog site-productos">
<?php get_sidebar('productos'); ?>

    <div>
        <?php 
         $paged = get_query_var('page');
         $paged = ($paged) ? $paged : 1;
         
         $search = new WP_Query(array(
             // $catalog_data is the current taxonomy (woman)
            'post_type' => 'producto',
            'posts_per_page' => 1000000,
            
        ));
         
        
            while ($search->have_posts()) : $search->the_post(); ?>
             <?php $taxonomy = 'categoria_producto';?>
                 <div class="segmento">
                     <!-- get_term_link('slug','nombre taxonomia'); -->
                     <a href="<?php echo get_term_link(get_the_terms( $post->ID , $taxonomy )[0]->slug, $taxonomy); ?>">
                         <h4><?php echo get_the_terms( $post->ID , $taxonomy )[0]->name ?></h4>
                         
         
                     </a>
         
                     <a href="<?php the_permalink(); ?>">
                         <?php the_post_thumbnail('mediano'); ?>
                         <h3><?php the_title() ?></h3>
                     </a>
                     <?php the_content() ?>
                 </div>
                 
         <?php endwhile;
          
         
         wp_reset_postdata();
        ?>
        
    </div>
</div>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>

