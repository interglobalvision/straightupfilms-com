<?php get_header(); ?>
	<!-- main content -->
	<section id="films-carousel">
		<div id="carousel">
			<div class="slides-container">
			<?php
			$featured = query_posts('post_type=film&posts_per_page=-1&category_name=featured&order=ASC&orderby=menu_order');
			$i = 0;
			foreach( $featured as $post ) : setup_postdata($post);
			$meta = get_post_meta($post->ID);
			?>

			<div <?php post_class('item'); ?> id="carousel-<?php the_ID(); ?>" style="background-image: url('<?php echo $meta['_cmb_carousel_image'][0]?>')">
					<div class="holder">
						<div class="held">

							<div class="carousel-title">
								<a href="<?php the_permalink(); ?>" class="noopacity"><?php the_title(); ?></a>
								<?php if (!empty($meta['_cmb_subtitle'][0])) { ?><h4 class="carousel-subtitle"><?php echo $meta['_cmb_subtitle'][0]; ?></h4><?php } ?>
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

		<!-- main posts loop -->
		<div id="films" >

			<nav id="films-filter" class="cf">
				<ul class="inline-list executive">
					<li class="pointer" data-target="all">View All</li>
					<li class="pointer" data-target="in-production">In Production</li>
					<li class="pointer" data-target="in-development">In Development</li>
					<li class="pointer" data-target="on-dvd">On DVD</li>
				</ul>
			</nav>

			<div class="row">
			<?php
				$films = query_posts('post_type=film&posts_per_page=-1&category_name=in-production');
				foreach( $films as $post ) : setup_postdata($post);
			?>

			<a href="<?php the_permalink(); ?>">
			<article <?php post_class('col col4'); ?> id="post-<?php the_ID(); ?>" <?php
				if (has_post_thumbnail()) {
					$img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'film-thumb');
					echo 'data-bg="' . $img[0] . '"';
				}
			?>>
			<div class="holder">
 	  			<div class="held">
 	  				<span class="thumb-title"><?php the_title(); ?></span>
 	  			</div>
			</div>
			</article>
			</a>

			<?php
				endforeach; wp_reset_postdata();

				$films2 = query_posts('post_type=film&posts_per_page=-1&category_name=in-development');
				foreach( $films2 as $post ) : setup_postdata($post);
			?>

			<a href="<?php the_permalink(); ?>">
			<article <?php post_class('col col4'); ?> id="post-<?php the_ID(); ?>" <?php
				if (has_post_thumbnail()) {
					$img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'film-thumb');
					echo 'data-bg="' . $img[0] . '"';
				}
			?>>
			<div class="holder">
 	  			<div class="held">
 	  				<span class="thumb-title"><?php the_title(); ?></span>
 	  			</div>
			</div>
			</article>
			</a>

			<?php
				endforeach; wp_reset_postdata();

				$films3 = query_posts('post_type=film&posts_per_page=-1&category_name=on-dvd');
				foreach( $films3 as $post ) : setup_postdata($post);
			?>

			<a href="<?php the_permalink(); ?>">
			<article <?php post_class('col col4'); ?> id="post-<?php the_ID(); ?>" <?php
				if (has_post_thumbnail()) {
					$img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'film-thumb');
					echo 'data-bg="' . $img[0] . '"';
				}
			?>>
			<div class="holder">
 	  			<div class="held">
 	  				<span class="thumb-title"><?php the_title(); ?></span>
 	  			</div>
			</div>
			</article>
			</a>

			<?php
				endforeach; wp_reset_postdata();
			?>
			</div>

		<!-- end posts -->
		</div>

	<!-- end main-content -->

	</section>

<?php get_footer(); ?>