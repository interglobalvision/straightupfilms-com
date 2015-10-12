<div class="container">
<footer class="full executive size-copy">
	<ul id="footer-left" class="inline-list half">
		<li>&copy; Straight Up Films <?php echo date('Y'); ?></li>
		<li>|</li>
		<li class="pointer meta-drawer-trigger" id="terms-trigger">Terms</li>
		<li>|</li>
		<li class="pointer meta-drawer-trigger" id="credits-trigger">Credits</li>
		<li>|</li>
		<li><a href="https://www.facebook.com/pages/Straight-Up-Films/243716051911" target="_blank"><div class="genericon genericon-facebook"></div></a>  &nbsp; <a href="https://twitter.com/straightupfilms" target="_blank"><div class="genericon genericon-twitter"></div></a>  &nbsp; <a href="https://vimeo.com/user8885256" target="_blank"><div class="genericon genericon-vimeo"></div></a></li>
	</ul>

	<ul id="footer-right" class="inline-list half align-right">
		<li>our <a class="black" href="<?php echo site_url('/investors'); ?>">FILM FUND</a></li>
	</ul>
</footer>

		<div id="footer-meta" class="full executive size-copy gray">

		<?php
			$about = get_page_by_title( 'contact' );
			$aboutmeta = get_post_meta($about->ID);
		?>
		<div id="footer-meta-drawer-credits" class="footer-meta-drawer">
			<div class="col col3">&nbsp;</div>
			<div class="col col6">
				<?php if ($aboutmeta['_cmb_credits'][0]) { echo wpautop($aboutmeta['_cmb_credits'][0]); } ?>
			</div>
		</div>
		<div id="footer-meta-drawer-terms" class="row cf footer-meta-drawer">
			<div class="col col3">&nbsp;</div>
			<div class="col col6">
				<?php if ($aboutmeta['_cmb_terms'][0]) { echo wpautop($aboutmeta['_cmb_terms'][0]); } ?>
			</div>
		</div>

		</div>

</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.9.1.min.js"><\/script>')</script>
<?php wp_footer(); ?>

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet change the UA-XXXXX-X to be your site's ID -->
<script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>

</body>
</html>