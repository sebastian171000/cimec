<div class="producto">
        <div class="extracto-imagen">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <p><?php the_field('referencia') ?></p>
        </div>
        
        <div class="extracto-contenido-producto">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title() ?></h3>
            </a>
            <p><?php the_field('precio') ?></p>
            <p>Precio no incluye I.G.V. | En stock: <?php the_field('stock') ?></p>
            <div class="botones">
            <a target="_blank" class="archivo-producto" href="<?php the_field('archivo-proyecto') ?>" >Ficha Técnica</a>
            <a class="btn-verproducto" href="<?php the_permalink(); ?>">Ver Producto</a>
            </div>
            
        </div>
        
        



        
        <?php $term_list = wp_get_post_terms(get_the_ID(), 'post_tag', array("fields" => "all")); ?>
        <div class="extracto-marca">
            <img src="<?php echo get_field('imagen-marca', 'post_tag' . '_' . $term_list[0]->term_id) ?>" alt="">
        </div>

            
</div>