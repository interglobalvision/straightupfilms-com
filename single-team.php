<?php get_header(); ?>

	<!-- main content -->

	<section id="main-content" class="grid-container">

		<!-- main posts loop -->
		<section id="single-team">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$meta = get_post_meta($post->ID);
		?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

 	  			<header class="align-center mb20">

 	  				<?php if (!empty($meta['_cmb_large_image'][0])) { ?>

 	  				<div class="mb40">
	 	  				<img class="attachment-team-single" src="<?php echo $meta['_cmb_large_image'][0]; ?>" />
 	  				</div>

					<?php } else { ?>

					<div class="mb40">
 	  	  				<?php the_post_thumbnail('team-single'); ?>
 	  	  			</div>

 					<?php } ?>

 	  				<h4><?php the_title(); ?></h4>

 	  			</header>

 	  			<div class="content row cf executive">
					<div class="col col2">&nbsp;</div>
					<div class="col col8">

						<div class="border-top border-bottom pt20 pb20 mb20">
							<div class="align-center size-mid">
								<?php if (!empty($meta['_cmb_role'][0])) {
									echo $meta['_cmb_role'][0];
								} ?>
							</div>
						</div>

						<div class="mb40">
						<div class="row cf">
							<div class="col col1">&nbsp;</div>
							<div class="col col6 size-copy"><?php the_content(); ?></div>
						</div>
						</div>

					</div>
 	  			</div>

			</article>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>

		<!-- end posts -->
		</section>

		<!-- post pagination -->
		<!--
<nav id="pagination">
			<?php if ($previous = get_previous_posts_link()) {echo $previous; } ?> <?php if ($next = get_next_posts_link()) {echo $next; } ?>
		</nav>
-->

	<!-- end main-content -->

	</section>

<?php get_footer(); ?>