		
			
		<!--Javascript-->	
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="js/jquery-migrate-1.2.1.js" type="text/javascript"></script>			
		<script src="js/owl.carousel.js" type="text/javascript"></script>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="js/modernizr.js" type="text/javascript"></script>
		<script src="js/placeholders.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

		<script>

		(function($) {
		"use strict";

		$(document).ready(function(){

			$('#wrapper').easytabs({
			animate			: true,
			updateHash		: false,
			transitionIn	:'fadeIn',
			transitionOut	:'fadeOut',
			animationSpeed	:100,
			tabActiveClass	:'active',
			tabs            :' #main-nav.tabbed > ul > li ',
			transitionInEasing: 'linear',
			transitionOutEasing: 'linear'	
			});
		});




		})(jQuery);


		

		</script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="102239694755003"
  theme_color="#CD5353">
	  </div>
	  
		<!-- Animation -->
		<script  src="js/index.js"></script>
