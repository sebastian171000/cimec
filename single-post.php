<?php get_header(); ?>
<?php while (have_posts()) : the_post();?> 


<h1 class="h1-post"><?php the_title(); ?></h1>
<main class="contenedor site-blog" style="margin-bottom:8rem">
<div>
<?php the_category(); ?>
    <?php echo get_the_content()?>
    
<?php endwhile; ?>
</div>
<?php get_sidebar(); ?>
</main>
<?php 
// global $post;
// if($post->comment_status == 'closed')
// wp_comments_update($post);
// comments_template();
?>

<?php get_footer(); ?>

<div class="parallax" style="display:none;"></div>
