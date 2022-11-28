<?php get_header(); ?> 
<section class="woocommerce-area">
 <div class="woocommerce-layout">
    <?php if(has_post_thumbnail()): ?>
      <img src=" <?php the_post_thumbnail_url('post_image') ?>" class="img-fluid mb-5" alt="">
    <?php endif; ?>
    <div class="woocommerce-title-divider">
      <h1 class="woocommerce-title"><?php the_title(); ?></h1>
    </div>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else : endif; ?>
  </div>
</section>
<?php get_footer();  ?>