<?php get_header(); ?>
	<!-- main content -->
	<section id="films-carousel">
		<div id="carousel">
			<div class="slides-container">
			<?php
			$featured = query_posts('post_type=branded&posts_per_page=-1&order=ASC&orderby=menu_order');
			$i = 0;
			foreach( $featured as $post ) : setup_postdata($post);
			$meta = get_post_meta($post->ID);
			?>

			<div <?php post_class('item'); ?> id="carousel-<?php the_ID(); ?>" style="background-image: url('<?php echo $meta['_cmb_carousel_image'][0]?>')">
					<div class="holder">
						<div class="held">

							<div class="carousel-title">
								<a href="<?php the_permalink(); ?>" class="noopacity"><?php the_title(); ?></a>
<!-- 								<?php if (!empty($meta['_cmb_subtitle'][0])) { ?><h4 class="carousel-subtitle"><?php echo $meta['_cmb_subtitle'][0]; ?></h4><?php } ?> -->
							</div>

						</div>
					</div>
			</div>

		<?php
			$i++;
			endforeach; wp_reset_postdata();
			?>
			</div>

			<nav class="slides-navigation">
				<a id="carousel-prev" class="carousel-nav pointer prev"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-left.svg"></a>
				<a id="carousel-next" class="carousel-nav pointer next"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right.svg"></a>
			</nav>

		</div>
	</section>

	<section id="main-content" class="grid-container cf">

	<!-- end main-content -->

	</section>

<?php get_footer(); ?>