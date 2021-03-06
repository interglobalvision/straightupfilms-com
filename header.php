<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>

  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- social graph meta -->
	<meta name="twitter:site" value="@">
	<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;
		$excerpt = get_the_excerpt();
		if(has_post_thumbnail()) { $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'opengraph' ); ?>
	<meta property="og:image" content="<?php echo $thumb['0'] ?>" />
		<?php } else { ?>
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" />
		<?php }
		if (is_home()) { ?>
	<meta property="og:title" content="<?php wp_title('|',true,'right'); bloginfo('name'); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta name="twitter:card" value="<?php bloginfo('description'); ?>">
<?php } elseif (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php wp_title('|',true,'right'); bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php echo $excerpt ?>" />
	<meta name="twitter:card" value="<?php echo $excerpt ?>">
	<meta property="og:type" content="article" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php } else { ?>
	<meta property="og:title" content="<?php wp_title('|',true,'right'); bloginfo('name'); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta name="twitter:card" value="<?php bloginfo('description'); ?>">
	<meta property="og:type" content="website" />
<?php } ?>

<!-- links -->

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">
	<link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon-touch.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png">

	<!-- wordpress header -->
	 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<!-- start page -->
<body <?php body_class(); ?>>

<div class="container">

	<!-- sub 7.0 internet explorer warning-->
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<!-- start content -->
<header id="header" class="cf">
	<div class="quarter">
<a href="<?php echo site_url(); ?>">SU,F.</a>
	</div>

	<ul id="main-menu" class="three-quarter inline-list align-right">
		<li><a <?php if (is_page('vision')) {echo 'class="active"'; }?> href="<?php echo site_url('/vision'); ?>">Vision</a></li>
		<li><a <?php if ('team' == get_post_type() || is_post_type_archive('team')) {echo 'class="active"'; }?>href="<?php echo site_url('/team'); ?>">Team</a></li>
		<li><a <?php if ('film' == get_post_type() || is_post_type_archive('film')) {echo 'class="active"'; }?>href="<?php echo site_url('/film'); ?>">Film<span id="kern-ampersand">&</span>TV</a></li>
		<li><a <?php if ('branded' == get_post_type() || is_post_type_archive('branded')) {echo 'class="active"'; }?>href="<?php echo site_url('/branded'); ?>">Branded</a></li>
		<li><a <?php if (in_category('news') || is_category('news')) {echo 'class="active"'; }?>href="<?php echo site_url('/news'); ?>">News</a></li>
		<li><a <?php if (is_page('contact')) {echo 'class="active"'; }?>href="<?php echo site_url('/contact'); ?>">Contact</a></li>
	</ul>
</header>

</div>