<?php get_header(); ?>

	<!-- main content -->

	<section id="main-content" class="grid-container cf">

		<!-- main posts loop -->
		<section id="film-single">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$meta = get_post_meta($post->ID);
		?>

			<article <?php post_class(); ?> id="project-<?php the_ID(); ?>">

			<?php if (!empty($meta['_cmb_trailer'][0])) { ?>

			<div class="row cf">
			<div class="col col1">&nbsp;</div>

			<div id="video-player-holder" class="col col10 mb40">
					<div id="video-player-inner" class="responsive-wrapper" style="padding-bottom: <?php
						if (!empty($meta['suf_vimeo_ratio'][0])) {
							echo $meta['suf_vimeo_ratio'][0]*100;
						} else {
							echo '56.25';
						}
						?>%">
						<iframe id="player" src="http://player.vimeo.com/video/<?php echo $meta['_cmb_trailer'][0]; ?>?title=0&amp;color=ffffff&amp;byline=0&amp;portrait=0&amp;autoplay=false&amp;badge=0&amp;api=1&amp;player_id=player" frameborder="0"></iframe>
				</div>
			</div>

			</div>
			<?php } else if (!empty($meta['_cmb_large_image'][0])) { ?>

			<div class="row cf">
			<div class="col col1">&nbsp;</div>
			<div class="col col10 mb40">

				<img src="<?php echo $meta['_cmb_large_image'][0]?>">

			</div>
			</div>

			<?php } ?>

			<header class="align-center mb10">
				<h3><?php the_title(); ?></h3>
				<?php if (!empty($meta['_cmb_year'][0])) { echo '<h3 class="film-year">' . $meta['_cmb_year'][0] . '</h3>'; } ?>
				<?php if (!empty($meta['_cmb_subtitle'][0])) { ?><h3><?php echo $meta['_cmb_subtitle'][0]; ?></h3><?php } ?>
			</header>

			<div class="content row cf executive size-copy">
				<div class="col col2">&nbsp;</div>
				<div class="col col8">

					<div class="border-top border-bottom pt20 pb20 mb20">
						<div class="row cf">
							<div class="col col1">&nbsp;</div>
							<div class="col col6 no-p-margin"><?php the_content(); ?></div>
						</div>
					</div>

					<div>
						<div class="row cf">
							<div class="col col1">&nbsp;</div>
							<div class="col col6 mb40">
								<?php if (!empty($meta['_cmb_details'][0])) { echo wpautop($meta['_cmb_details'][0]);} ?>
							</div>
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