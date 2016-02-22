<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <title>Transparent Collective // Contact Us</title>
    <?php include "meta-head.php" ?>

	<!-- Page Fonts / Pacifico-->
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<!-- Raleway-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,,200,300,600,700' rel='stylesheet' type='text/css'>

	<!-- End CSS Files -->
 
</head>

<!-- Body Start -->
<body class="parallax">

	<!-- Page Loader -->
	<article id="pageloader" class="white-loader">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</article>







<!-- Navigation - select your nav color - dark-nav or white-nav -->
		<!-- Footer -->
	<?php include "nav.php" ?>
	<!-- End Nav -->

	<section id="contact" class="relative contact">

		<!-- Inner -->
		<div class="inner t-center clearfix animated" data-animation="fadeIn" data-animation-delay="800">
			<!-- Header -->
			<h1 class="header header-style-2 dark oswald uppercase t-center ">
				Join Us to Learn More
			</h1>
			<!-- Header Text -->
			<p class="light t-center">
				Fill out the info below and we will reach out with next steps based on your entry
			</p>

			<!-- Form -->
			<div class="fullwidth clearfix">

				<!-- Contact Form -->
				<div class="contact_form type-2 white-form">
					<!-- Form -->
					<form id="join_form" onsubmit="return false" name="cform" class="clearfix form oswald normal antialiased">
						<!-- 50% inputs -->
						<div class="fullwidth clearfix">
							<!-- Left Item -->
							<div class="f-left">
								<!-- Name -->
								<input type="text" name="name" id="name" required placeholder="Name">
							</div>
							<!-- Right Item -->
							<div class="f-right">
								
								<input type="text" name="company" id="company" required placeholder="Company">
							</div>
						</div>
						<!-- End 50% inputs -->
						<!-- Subject -->
						<input type="text" name="url" id="url" required placeholder="Url">
                        <input type="text" name="linkedin" id="linkedin" required placeholder="Linkedin (linkedin.com/in/username)">
                        <input type="email" name="email" id="email" required placeholder="Email">

						<!-- Message -->
						<textarea name="pitch" id="pitch" maxlength="800" required placeholder="Describe Your Business / Traction (180 words or less)"></textarea>

						<!-- Verify Math / You can delete blockers for Math Verify -->
						<!-- <input type="text" name="verify" id="verify" required placeholder=""> -->

						<!-- Send Button -->
						<button type="submit" id="submit" name="submit">Submit</button>
						<!-- Error Message -->
						<div class="error_message">
							<p class="t-left no-margin">
								<!-- Error Message Icon -->
								<i class="fa fa-warning"></i>
								Validation error occured. Please enter the fields and submit it again.
							</p>
						</div>
						<!-- Submit Message -->
						<div class="submit_message">
							<p class="t-left no-margin">
								<!-- Error Message Icon -->
								<i class="fa fa-check"></i>
								Thank You ! Your email has been delivered.
							</p>
						</div>
					</form>
					<!-- End Form -->
				</div>
				<!-- End Form Div -->
			</div>
			<!-- End Contact Form -->
		</div>
		<!-- End Inner -->
	</section>
	<!-- End Contact Section -->
    
  




	<!-- Footer -->
	<?php include "footer.php" ?>



	<!-- JS Files -->
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/waypoint.js"></script>
	<script type="text/javascript" src="js/modernizr-latest.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/SmoothScroll.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.superslides.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
	<script type="text/javascript" src="js/jquery.cubeportfolio.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.timeline.js"></script>
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
	<!-- Revolution Slider -->
	<script type="text/javascript" src="js/rev_slider/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/rev_slider/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="js/rev_slider/rev_plugins.js"></script>
	<!-- Page Plugins -->
	<script type="text/javascript" src="js/plugins.js"></script>
	<!-- Portfolio Plugins -->
	<script type="text/javascript" src="js/portfolio.js"></script>
	<!-- Twitter -->
	<script type="text/javascript" src="js/tweecool.min.js"></script>
	<script type="text/javascript" src="js/tweecool.js"></script>

	<script>
		$(document).ready(function() {

		});
	</script>

	<!-- End JS Files -->

</body>
<!-- Body End -->
</html>
