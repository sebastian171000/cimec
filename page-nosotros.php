<?php get_header();  ?>

<div class="site-somos">
<?php while (have_posts()) : the_post();?> 
    <?php the_content()?>
    <?php endwhile; ?>
</div>
<div class="parallax" style="display:none;"></div>
<?php get_footer() ?>
