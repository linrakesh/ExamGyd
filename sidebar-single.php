<div class="left-sidebar">
<?php 
   $current_page_ids = array( get_the_ID() );
   $current_category = get_queried_object(); ////getting current category
		$args = array(
		        'orderby' => 'post_date',
		        'order' => 'DESC',
		        'post__not_in' => $current_page_ids,
		        'cat' => $current_category->cat_ID // current category ID
		);
		$the_query = new WP_Query($args);
		echo '<div class="left-widget"><ul>'; 
		while($the_query->have_posts()): $the_query->the_post(); ?>
		     <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
		<?php endwhile;      
		echo '</ul></div>'; 
		
	?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div>