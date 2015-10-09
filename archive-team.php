<?php
/*
Template Name: Vision
*/
get_header(); ?>

	<!-- main content -->
	<section id="main-content" class="container">

		<ul id="people">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				$meta = get_post_meta($post->ID);

				$img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'person');
					/*
echo '<li class="person">';
					echo '<a href="' . get_permalink($post->ID) . '"><img src="' . $img[0] . '"></a>';
					if (!empty($meta['_cmb_role'][0])) {
						echo '<a href="' . get_permalink($post->ID) . '">' . $post->post_title . '<div class="executive size-copy">' . $meta['_cmb_role'][0] . '</div></a>';
					} else {
						echo '<a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a>';
					}
					echo '</a></li>';
*/
					echo '<li class="person">';
					echo '<a href="' . get_permalink($post->ID) . '"><img src="' . $img[0] . '">';
					if (!empty($meta['_cmb_role'][0])) {
						echo $post->post_title . '<div class="executive size-copy">' . $meta['_cmb_role'][0] . '</div></a>';
					} else {
						echo $post->post_title . '</a>';
					}
					echo '</a></li>';

			?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>

		</ul>

	<!-- end main-content -->
	</section>

<?php get_footer(); ?>