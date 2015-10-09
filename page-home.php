<?php 
/* 
Template Name: Home	
*/
get_header(); ?> 
	
	<!-- main content -->
<div class="container">
	<section id="main-content" class="full gray">

		<ul id="words">
						
			<?php
				$words = get_posts('post_type=words&posts_per_page=-1&orderby=rand');
				foreach ($words as $post) {
					echo '<li class="animate">' . $post->post_title . ',</li>';
				}
			?><li id="animation-suf" class="black">Straight Up.</li>
			
		</ul>	

	<!-- end main-content -->
	
	</section>
</div>		
<?php get_footer(); ?> 