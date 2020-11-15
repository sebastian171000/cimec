<?php get_header(); ?>
<img src="<?php the_field('imagen-blog','346') ?>" alt="">
<h1 class="h1-blog">Nuestro Blog</h1>
<main class="contenedor site-blog">
    <div class="grid-posts">
        <?php while (have_posts()) : the_post();?> 
        <div class="posts-blog">
            <?php the_category(); ?>
            <a href="<?php the_permalink(); ?>" class="titulo-post">
                <h2><?php the_title(); ?></h2>
            </a>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('mediano'); ?>
            </a>
            <div class="datos-post">
                <p><?php the_time( get_option('date_format')); ?></p>
                <p>
                    <i class="fas fa-user"></i>
                    <?php echo get_the_author(); ?>
                </p>
                <p>
                    <i class="fas fa-comment"></i>
                    <?php echo get_comments_number(); ?>
                </p>
            </div>
            <div class="contenido-blog">
                <?php the_excerpt(); ?>
                
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
<div class="parallax" style="display:none;"></div>
