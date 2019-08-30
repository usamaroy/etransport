<!-- js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->


<!-- stats -->
	<script src="<?php echo base_url(); ?>assets/theme/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<!-- bars.js -->   
	<script src="<?php echo base_url(); ?>assets/theme/js/bars.js"></script>
	<!-- //bars.js -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="<?php echo base_url(); ?>assets/theme/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->
	<!-- simpleLightbox -->
	<script src="<?php echo base_url(); ?>assets/theme/js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
<!--popup-js-->
<script src="<?php echo base_url(); ?>assets/theme/js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>
<!--//popup-js-->
<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url(); ?>assets/theme/js/move-top.js"></script>
	<script src="<?php echo base_url(); ?>assets/theme/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	
	<!-- smooth scrolling js -->
	<script src="<?php echo base_url(); ?>assets/theme/js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->
 </body>
</html>