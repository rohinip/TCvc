<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <title>Transparent Collective // </title>
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





	<!-- Page Header - litle-header - big-header or bigger-header -->
	<section id="page-header" class="background22 xxdark-bg parallax big-header">
		<!-- Page Header Inner -->
		<div class="page_header_inner clearfix white">
			<!-- Left -->
			<div class="left f-left">
				<!-- Header -->
				<h2 class="page_header thin">
					Invest in Change
				</h2>
				<!-- Sub Page Text -->
         
				<h5 class="page_note extra-light">
					Explore new and exciting opportunities outside of your traditional network 
				</h5>
			</div>
			
		</div>
		<!-- End Inner -->
	</section>
	<!-- End #page-header -->





	<!-- About Slider -->
	<section class="about_with_slider clearfix inner">
		<!-- Left -->
		<div class="left col-xs-6 no-padding">
			<!-- Slider  -->
			<div class="images basic_slider">
				<!-- Image Slider  -->
				<ul class="image_slider clearfix">
					<!-- Slide  -->
					<li class="slide">
						<!-- Image SRC  -->
						<img src="images/investors/coffee-pitch.jpg" alt="Content" />
					</li>
				
				</ul>
				<!-- End Image Slider  -->
			</div>
			<!-- End Slider  -->
		</div>
		<!-- End Left -->

		<!-- Texts  -->
		<div class="right texts col-xs-6">
			<!-- Header  -->
			<h4 class="head">
				Investor Opportunity
			</h4>
			<!-- Text  -->
			<p class="text">
				Truly diversify your portfolio by connecting with entreprenurs disrupting new and different markets.   We are building something that is unique for Silicon Valley, a celebration of the underrpresented founder.  Our goal is simple, connect progressive investors with amazing women and minority entrepreneurs that lack access to the Silicon Valley network.   We realize investors are govenrned by the principle of making a healthy return, we want to help by pointing you towards new and interesting opportunitites that may have not hit your radar. 
			</p>
            
            <button id="downloadPacket" class="btn download">Investor Info Packet</button>
			
			<!-- End List  -->
		</div>
		<!-- End Texts  -->
	</section>
	<!-- End About With Slider  -->

	
    
	



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
	<script type="text/javascript" src="js/skrollr.min.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
	<!-- Revolution Slider -->
	<script type="text/javascript" src="js/rev_slider/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/rev_slider/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="js/rev_slider/rev_plugins.js"></script>
	<!-- Contact Form -->
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/contact-form.js"></script>
	<!-- Twitter -->
	<script type="text/javascript" src="js/tweecool.min.js"></script>
	<script type="text/javascript" src="js/tweecool.js"></script>
	<!-- Page Plugins -->
	<script type="text/javascript" src="js/plugins.js"></script>
	<!-- Portfolio Plugins -->
	<script type="text/javascript" src="js/portfolio.js"></script>

	<!-- End JS Files -->

	<script>
		$(document).ready(function() {
			$('#latest_tweets').tweecool({
				username : 'TCfounders'
			});
		});
		
		document.getElementById('downloadPacket').addEventListener('click',function(){
			window.open('decks/TC_FF_InvestorMentorSummary.pdf',"_self","toolbar=yes, resizable=yes");
		});
	</script>


</body>
<!-- Body End -->
</html>