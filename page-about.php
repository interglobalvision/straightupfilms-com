<?php
/*
Template Name: About
*/
get_header(); ?>
<!-- main content -->
<div class="container">
	<section id="main-content" class="full">
		<div id="about">
			<li>
				<span>(find us)</span> 3215 La Cienega Avenue, Los Angeles, CA 90034
			</li>
			<li class="inline-block">
				<span>(call us)</span> <a href="tel:4242388470">424-238-8470</a>
			</li>
			<li class="inline-block">
				<span>(email us)</span> <a href="mailto:hello@straightupfilms.com">hello@straightupfilms.com</a>
			</li>
			<li>
				<span>(connect with us)</span> <a href="https://twitter.com/straightupfilms" target="_blank"><div class="genericon-45 genericon genericon-twitter"></div></a> <a href="https://www.facebook.com/pages/Straight-Up-Films/243716051911" target="_blank"><div class="genericon-45 genericon genericon-facebook"></div></a> <a href="https://vimeo.com/user8885256" target="_blank"><div class="genericon-45 genericon genericon-vimeo"></div></a>
			</li>

			<div id="map-canvas">
<!-- 				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1dtJVKkbFoIGINO734bpSLHV4fg1mYKg&sensor=false"></script> -->
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT62LIBu63ZdZ7KoLHHd2IFoIhkQkzRwo&sensor=false"></script>
				<script type="text/javascript">
			      function initialize() {
			        var mapOptions = {
			        	center: new google.maps.LatLng(34.031923, -118.379163),
			        	zoom: 14,
			        	mapTypeId: google.maps.MapTypeId.ROADMAP
			        };

			        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

			        var contentString = "<div id='gmap-pop'><h3>Come Visit Us!</h3></div>";

			        var infowindow = new google.maps.InfoWindow({
						content: contentString
	  				});

					var marker = new google.maps.Marker({
						position: map.getCenter(),
						map: map,
						title: 'Straight Up Films'
					});
					google.maps.event.addListener(marker, 'click', function() {
						infowindow.open(map,marker);
					});
			      }
			      google.maps.event.addDomListener(window, 'load', initialize);
		  		</script>
			</div>
		</div>
	<!-- end main-content -->
	</section>
</div>
<?php get_footer(); ?>