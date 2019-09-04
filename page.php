<?php get_header();?>

    <section class="container">
      <?php get_template_part('left'); ?>

      <div class="main-content gray">
        <?php while(have_posts()):the_post(); ?>
        <div class="article-summery">
          <h1><?php the_title();?></h1>
          <?php the_content();?>
          <div class="tags">
             <?php the_tags( null, ' ');?> <?php the_category( '', '', false ); ?>
          </div>
        </div>
        <?php endwhile; ?>
        <div class="pagination">
           <?php  echo paginate_links(); ?>
        </div>
      </div>
      <?php get_sidebar();?>
    </section>

 <?php get_footer( null );?>