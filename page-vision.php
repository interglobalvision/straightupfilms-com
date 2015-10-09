<?php 
/* 
Template Name: Vision	
*/
get_header(); ?> 
	
	<!-- main content -->
<div class="container">
	<section id="main-content" class="full">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article <?php post_class(); ?> id="about">
						
 	  		<?php echo $post->post_content; ?> <!-- <span class="black pointer" id="long-about-trigger">READ ON...</span> -->
			
			</article>
			
			<section id="long-about" class="full executive size-copy">
				
				<?php
				$meta = get_post_meta($post->ID);
				echo wpautop($meta['_cmb_long_about'][0]);
				?>
		
			</section>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>
	
	<!-- end main-content -->
	
	</section>
</div>
<?php if (!empty($meta['_cmb_bg'][0])) { ?>
<div id="background-image" style="background-image: url('<?php echo $meta['_cmb_bg'][0] ?>')">
</div>
<?php 
};
get_footer(); ?> 