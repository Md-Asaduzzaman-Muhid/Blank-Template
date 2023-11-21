<footer class="footer py-25 bg-dark">
	<div class="container">
		<div class="row">

			<div class="col-sm-6 order-sm-2 text-sm-right text-center mb-10 mb-sm-0">
				Brand Name <?php echo " &copy; ";  echo date('Y'); ?>
			</div>

			<div class="col-sm-6 order-sm-1 text-sm-left text-center">
				Powered by <a href="https://www.iplus.com.pl/" target="_blank">Internet Plus</a>
			</div>

		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- For Review Slider Form -->
<!--<div class="text-center pb-60"><button class="btn btn-common btn-outline-primary review-btn font-weight-bold">Write A Review</button></div>-->
<div id="mySidenav" class="sidenav">
	<div class="close-button-wrapper"><a href="javascript:void(0)" class="closebtn">×</a></div>
	<div class="slide-nav-content-wrapper">
		<h2 class="home-sidenav-title text-center pb-20">Give Your Review</h2>
		<div class="main-content-section mxw-575">
			<?php
				echo do_shortcode('[contact-form-7 id="5" title="Review Form"]');
			?>
		</div>
	</div>
</div>

<script>
	jQuery('.review-btn, .closebtn').click(function(){
		var element = document.getElementById("mySidenav")
		var shown = element.getAttribute("data-isshown");
		var windowWidth = jQuery( window ).width();
		if( windowWidth > 991){
			if (shown == "true") {
				element.setAttribute("data-isshown", "false");
				element.style.width = "0";
			} else {
				element.setAttribute("data-isshown", "true");
				element.style.width = "800px";
			}
		} else {
			if (shown == "true") {
				element.setAttribute("data-isshown", "false");
				element.style.width = "0";
			} else {
				element.setAttribute("data-isshown", "true");
				element.style.width = "315px";
			}
		}
	});
</script>
<!-- For Review Slider Form End -->
	
</body>
</html>
