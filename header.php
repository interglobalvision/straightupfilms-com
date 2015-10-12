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

	<script type="text/javascript">
  	/*! modernizr 3.1.0 (Custom Build) | MIT *
 * http://modernizr.com/download/?-mediaqueries-svg-touchevents !*/
!function(e,n,t){function o(e,n){return typeof e===n}function s(){var e,n,t,s,a,i,r;for(var l in f){if(e=[],n=f[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=o(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],r=i.split("."),1===r.length?Modernizr[r[0]]=s:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=s),c.push((s?"":"no-")+r.join("-"))}}function a(e){var n=u.className,t=Modernizr._config.classPrefix||"";if(p&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(o,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),p?u.className.baseVal=n:u.className=n)}function i(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):p?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function r(){var e=n.body;return e||(e=i(p?"svg":"body"),e.fake=!0),e}function l(e,t,o,s){var a,l,c,f,d="modernizr",p=i("div"),m=r();if(parseInt(o,10))for(;o--;)c=i("div"),c.id=s?s[o]:d+(o+1),p.appendChild(c);return a=i("style"),a.type="text/css",a.id="s"+d,(m.fake?m:p).appendChild(a),m.appendChild(p),a.styleSheet?a.styleSheet.cssText=e:a.appendChild(n.createTextNode(e)),p.id=d,m.fake&&(m.style.background="",m.style.overflow="hidden",f=u.style.overflow,u.style.overflow="hidden",u.appendChild(m)),l=t(p,e),m.fake?(m.parentNode.removeChild(m),u.style.overflow=f,u.offsetHeight):p.parentNode.removeChild(p),!!l}var c=[],f=[],d={_version:"3.1.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){f.push({name:e,fn:n,options:t})},addAsyncTest:function(e){f.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=d,Modernizr=new Modernizr,Modernizr.addTest("svg",!!n.createElementNS&&!!n.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect);var u=n.documentElement,p="svg"===u.nodeName.toLowerCase(),m=d._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];d._prefixes=m;var h=d.testStyles=l;Modernizr.addTest("touchevents",function(){var t;if("ontouchstart"in e||e.DocumentTouch&&n instanceof DocumentTouch)t=!0;else{var o=["@media (",m.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");h(o,function(e){t=9===e.offsetTop})}return t});var v=function(){var n=e.matchMedia||e.msMatchMedia;return n?function(e){var t=n(e);return t&&t.matches||!1}:function(n){var t=!1;return l("@media "+n+" { #modernizr { position: absolute; } }",function(n){t="absolute"==(e.getComputedStyle?e.getComputedStyle(n,null):n.currentStyle).position}),t}}();d.mq=v,Modernizr.addTest("mediaqueries",v("only all")),s(),a(c),delete d.addTest,delete d.addAsyncTest;for(var g=0;g<Modernizr._q.length;g++)Modernizr._q[g]();e.Modernizr=Modernizr}(window,document);

		Modernizr.load([
			{
				test: Modernizr.mq('only all'),
				nope: "<?php bloginfo('stylesheet_directory'); ?>/js/polyfills/mediaqueries.min.js"
			}
		]);
	</script>

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
<header class="cf">
	<div class="quarter">
<a href="<?php echo site_url(); ?>">SU,F.</a>
	</div>

	<ul id="main-menu" class="three-quarter inline-list align-right">
		<li><a <?php if (is_page('vision')) {echo 'class="active"'; }?> href="<?php echo site_url('/vision'); ?>">Vision</a></li>
		<li><a <?php if ('team' == get_post_type() || is_post_type_archive('team')) {echo 'class="active"'; }?>href="<?php echo site_url('/team'); ?>">Team</a></li>
		<li><a <?php if ('film' == get_post_type() || is_post_type_archive('film')) {echo 'class="active"'; }?>href="<?php echo site_url('/film'); ?>">Films</a></li>
		<li><a <?php if ('branded' == get_post_type() || is_post_type_archive('branded')) {echo 'class="active"'; }?>href="<?php echo site_url('/branded'); ?>">Branded</a></li>
		<li><a <?php if (in_category('news') || is_category('news')) {echo 'class="active"'; }?>href="<?php echo site_url('/news'); ?>">News</a></li>
		<li><a <?php if (is_page('contact')) {echo 'class="active"'; }?>href="<?php echo site_url('/contact'); ?>">Contact</a></li>
	</ul>
</header>

</div>