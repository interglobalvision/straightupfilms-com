<?php
get_header(); ?>

	<!-- main content -->

<div class="container">
	<section id="main-content" class="full gray">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article <?php
				if (is_page('Investors')) {
					post_class('investors');
				} else {
					post_class();
				}
				?>>

 	  		<?php the_content(); ?>

			</article>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>

	<!-- end main-content -->
	</section>
</div>

<?php get_footer(); ?>