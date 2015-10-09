<?php get_header(); ?>

	<!-- main content -->

	<section id="main-content" class="grid-container newsleftmargin">

		<nav id="news-nav-mobile" class="executive">

			<?php if (is_category('16') ) { ?>
				<a class="news-switch-button" href="<?php echo site_url('/news'); ?>">Back to News</a>
			<?php } else { ?>
				<a class="news-switch-button" href="<?php echo site_url('/category/cools-t/'); ?>">Cool Sh#!t<br/>
				SU,F's Musings from the Interweb</a>
			<?php } ?>

		</nav>

		<div class="row">

		<!-- main posts loop -->
		<section id="posts" class="clearfix">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			$meta = get_post_meta($post->ID);
		?>

			<article <?php post_class('col col5'); ?> id="post-<?php the_ID(); ?>">

				<div class="post-title"><?php the_title(); ?></div>

 		  		<?php
 		  			if (has_post_thumbnail()) {
	 		  			echo '<div class="post-thumb">';
	 		  			$img = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'news');
	 		  			echo '<img src="' . $img[0] . '" class="post-thumb-img">';
	 		  			echo '</div>';
 		  			}
 		  		?>

 		  		<div class="post-meta executive">

 		  			<?php
 		  				if (!empty($meta['_cmb_source_text'][0])) {
	 		  				echo '<div class="post-meta-section">';
	 		  				echo '<span>Source</span>';
	 		  				echo '<a href="' . $meta['_cmb_source'][0] . '" target="_blank">';
	 		  				echo $meta['_cmb_source_text'][0];
	 		  				echo ' - ';
	 		  				the_time('F j, Y');
	 		  				echo '</a></div>';
 		  				}
 		  			?>


 		  			<?php
 		  				if (!empty($meta['_cmb_author'][0])) {
	 		  				echo '<div class="post-meta-section">';
	 		  				echo '<span>Author</span>';
	 		  				echo $meta['_cmb_author'][0];
	 		  				echo '</div>';
 		  				}
 		  			?>

 		  		</div>

 		  		<div class="post-copy executive">
 		  			<div class="post-copy-main">
	 		  		<?php the_content(); ?>
 		  			</div>
 		  			<?php if ($pos=strpos($post->post_content, '<!--more-->')) { ?>
 		  			<div class="post-copy-full">
 		  				<?php echo wpautop($post->post_content); ?>
 		  			</div>
 		  			<?php } ?>
 		  		</div>

			</article>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>

		<?php if (get_next_posts_link() || get_previous_posts_link()) { ?>
		<!-- post pagination -->
		<nav id="pagination" class="executive size-copy col col10">
			<?php if ($previous = get_previous_posts_link()) {echo $previous; } ?> <?php if ($next = get_next_posts_link()) {echo $next; } ?>
		</nav>
		<?php } ?>

		</section>

		<nav id="news-nav" class="executive col col2">

			<?php if (is_category('16') ) { ?>
				<a class="news-switch-button" href="<?php echo site_url('/news'); ?>">Back to News</a>
			<?php } else { ?>
				<a class="news-switch-button" href="<?php echo site_url('/category/cools-t/'); ?>">Cool Sh#!t<br/>
				SU,F's Musings from the Interweb</a>
			<?php } ?>

		</nav>


		</div>

	<!-- end main-content -->

	</section>

<?php get_footer(); ?>