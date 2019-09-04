<?php get_header();?>

    <section class="container">
      <?php get_template_part('left'); ?>

      <div class="main-content gray">
        <?php while(have_posts()):the_post(); ?>
        <div class="article-summery">
          <h3>
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
          </h3>
          <?php the_excerpt();?>
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