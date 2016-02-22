<?php 

$section = (isset($_GET['section']))? $_GET['section'] : 'page-header'; 

?>
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
					About Us
				</h2>
				<!-- Sub Page Text -->
				<h5 class="page_note extra-light">
					Learn more about our mission and the team leading the way
				</h5>
			</div>
			
		</div>
		<!-- End Inner -->
	</section>
	<!-- End #page-header -->





	<!-- About Slider -->
	<section id="mission" class="about_with_slider clearfix inner">
		<!-- Left -->
		<div class="left col-xs-6 no-padding">
			<!-- Slider  -->
			<div class="images basic_slider">
				<!-- Image Slider  -->
				<ul class="image_slider clearfix">
					<!-- Slide  -->
					<li class="slide">
						<!-- Image SRC  -->
						<img src="images/about/founder-group.jpg" alt="Content" />
					</li>
					<!-- Slide  -->
					<li class="slide">
						<!-- Image SRC  -->
						<img src="images/about/class-founder.jpg" alt="Content" />
					</li>
				</ul>
				<!-- End Image Slider  -->
			</div>
			<!-- End Slider  -->
		</div>
		<!-- End Left -->

		<!-- Texts  -->
		<div class="right texts col-xs-6" style="padding-top:0">
			<!-- Header  -->
			<h4 class="head">
				Mission
			</h4>
			<!-- Text  -->
			<p class="text">
				Transparent Collective (TC) is a group of founders dedicated to increasing exposure and access to Silicon Valley for African-American as well as Latino/Hispanic men and women. TC is working to break down barriers that acutely affect the success of minority founders at the early start-up stage. <br><br>
                The hiring process and culture of the tech work environment has been formed by the majority. The start-up fund raising process from angel to series A has been formed by the majority. Every component of the Silicon Valley dream to build the future is fraught with challenges, but when you come from a different background than those who have been working in the space for years, the challenges are amplified.<Br><br>
                We're here to enable minority founders the same access as the majority, connecting them with funding sources that enable the opportunity to both fail and succeed. Together, we will make the American Dream 2.0 accessible to talented entrepreneurs from all walks of life.
			</p>
			
			<!-- End List  -->
		</div>
		<!-- End Texts  -->
	</section>
	<!-- End About With Slider  -->


	<!-- Partners Section -->
	<section id="partners" class="container border-1px soft-border gray-bg">

		<!-- Partner Logos -->
		<div class="client-logos box-carousel three-items">
			
			<!-- Client Logo Div -->
			<div class="client-logo">
				<!-- Logo Link -->
				<a href="http://buiness.pilot.ly">
					<!-- Logo Image SRC -->
					<img src="images/partners/pilotly_silver.png" alt="pilotly_silver">
				</a>
			</div>
			<!-- End Client Logo Div -->

			<!-- Client Logo Div -->
			<div class="client-logo">
				<!-- Logo Link -->
				<a href="http://senetur.com">
					<!-- Logo Image SRC -->
					<img src="images/partners/senetur_silver.png" alt="senetur_silver">
				</a>
			</div>
			<!-- End Client Logo Div -->
            
            
			<!-- Client Logo Div -->
			<div class="client-logo">
				<!-- Logo Link -->
				<a href="http://threaddating.com/">
					<!-- Logo Image SRC -->
					<img src="images/partners/thread_silver.png" alt="v">
				</a>
			</div>
			<!-- End Client Logo Div -->

			

		</div>
		<!-- End Partner Logos -->
	</section>
	<!-- End Features Section  -->

	<!-- About Section -->
	<section id="team" class="background22 parallax6 xxdark-bg bw-type">
    	<!-- Inner -->
		<div class="inner t-center clearfix">
			
            <h3 class="white" style="margin-bottom:15px">Collective Leaders</h3>
			<div class="boxes boxes-type-4 no-padding-top light box-carousel three-items clearfix animated" data-animation="fadeIn" data-animation-delay="500">

				<!-- Box -->
				<div class="box white antialiased normal c-pointer">
					<!-- Box Image -->
					<div class="box-image fullwidth t-center normal">
						<!-- Image
						<a data-toggle="modal" data-target="#member1" class="changeable-image"> -->
                        <a href="" class="changeable-image">
							<img src="images/team/james_norman.jpg" alt="james_norman">
						</a>
					</div>
					<!-- End Box Icon -->
					<!-- Box Header -->
					<h4 class="box-header no-padding uppercase">
						James Norman
					</h4>
					<!-- Position -->
					<h5 class="colored raleway">
						Co-Founder @ Pilotly
					</h5>
					<!-- Box Description -->
					<p class="no-padding no-margin raleway">
						Founded Ubi Video, Shift Marketing, F1RST Motoring Apparel, and now Pilotly. Written over 250k lines of code to change TV forever. EECS BS @University of Michigan
					</p>
				</div>
				<!-- End Box -->

				<!-- Box -->
				<div class="box white antialiased normal">
					<!-- Box Image -->
					<div class="box-image fullwidth t-center normal">
						<!-- Image -->
						<a href="" class="changeable-image">
							<img src="images/team/adrian_walker.jpg" alt="adrian_walker">
						</a>
					</div>
					<!-- End Box Icon -->
					<!-- Box Header -->
					<h4 class="box-header no-padding uppercase ">
						Adrian Walker
					</h4>
					<!-- Position -->
					<h5 class="colored raleway">
						Founder @ Senetur
					</h5>
					<!-- Box Description -->
					<p class="no-padding no-margin raleway">
						Founded Rippld, First Element Ent and Senetur. Industrial Operations Engineer @University of Michigan
					</p>
				</div>
				<!-- End Box -->

				<!-- Box -->
				<div class="box white antialiased normal">
					<!-- Box Image -->
					<div class="box-image fullwidth t-center normal">
						<!-- Image -->
						<a href="" class="changeable-image">
							<img src="images/team/clayton_bryan.jpg" alt="clayton_bryan">
						</a>
					</div>
					<!-- End Box Icon -->
					<!-- Box Header -->
					<h4 class="box-header no-padding uppercase ">
						Clayton Bryan
					</h4>
					<!-- Position -->
					<h5 class="colored raleway">
						 Partner @ DormRoom Fund
					</h5>
					<!-- Box Description -->
					<p class="no-padding no-margin raleway">
						Product enthusiast & customer development advocate. Partner @Dorm Room Fund. Former @Yahoo. Educated @Cal-berkeley @NYU. 
					</p>
				</div>
				<!-- End Box -->

				<!-- Box -->
				<div class="box white antialiased normal">
					<!-- Box Image -->
					<div class="box-image fullwidth t-center normal">
						<!-- Image -->
						<a href="" class="changeable-image">
							<img src="images/team/rohini_pandhi.jpg" alt="rohini_pandhi">
						</a>
					</div>
					<!-- End Box Icon -->
					<!-- Box Header -->
					<h4 class="box-header no-padding uppercase ">
						Rohini Pandhi
					</h4>
					<!-- Position -->
					<h5 class="colored raleway">
						Sr Product Manager @ PubNub
					</h5>
					<!-- Box Description -->
					<p class="no-padding no-margin raleway">
						Product Maven @PubNub, Studied Computer Engineering @University of Michigan, MBA @University Of Chicago Booth School Of Business
					</p>
				</div>
				<!-- End Box -->

				<!-- Box -->
				<div class="box white antialiased normal">
					<!-- Box Image -->
					<div class="box-image fullwidth t-center normal">
						<!-- Image -->
						<a href="" class="changeable-image">
							<img src="images/team/lander_cg.jpg" alt="lander_cg">
						</a>
					</div>
					<!-- End Box Icon -->
					<!-- Box Header -->
					<h4 class="box-header no-padding uppercase ">
						Lander Coronado-Garcia
					</h4>
					<!-- Position -->
					<h5 class="colored raleway">
						CEO @ Thread
					</h5>
					<!-- Box Description -->
					<p class="no-padding no-margin raleway">
						Appointed CEO @Thread, Wharton MBA, Mechanical Engineering  @University of Michigan
					</p>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Boxes -->
       </div>
	    <!--Inner -->
        
        
		<!-- Member Modals -->
		<div id="member-modals">

			<!-- Modal -->
			<div class="modal fade" id="member1" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Modal Dialog -->
				<div class="modal-dialog t-left">
					<!-- Body -->
					<div class="modal-body t-center clearfix">
						<!-- Close Button -->
						<a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						<!-- Image SRC -->
						<div class="member-image">
							<img src="images/team/01.jpg" alt="Crexis Team" />
						</div>
						<!-- Details -->
						<div class="details t-left">
							<!-- Member Name -->
							<h2 class="member-header light">
								Adriana Doen
							</h2>
							<!-- Member Position -->
							<h4 class="member-position light colored">
								Designer
							</h4>
							<!-- Description -->
							<p class="no-padding light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
							</p>
						</div>
						<!-- End Details -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Dialog -->
			</div>
			<!-- End Modal -->

			<!-- Modal -->
			<div class="modal fade" id="member2" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Modal Dialog -->
				<div class="modal-dialog t-left">
					<!-- Body -->
					<div class="modal-body t-center clearfix">
						<!-- Close Button -->
						<a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						<!-- Image SRC -->
						<div class="member-image">
							<img src="images/team/02.jpg" alt="Crexis Team" />
						</div>
						<!-- Details -->
						<div class="details t-left">
							<!-- Member Name -->
							<h2 class="member-header light">
								Jessica Doen
							</h2>
							<!-- Member Position -->
							<h4 class="member-position light colored">
								Ceo &amp; Founder
							</h4>
							<!-- Description -->
							<p class="no-padding light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
							</p>
						</div>
						<!-- End Details -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Dialog -->
			</div>
			<!-- End Modal -->

			<!-- Modal -->
			<div class="modal fade" id="member3" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Modal Dialog -->
				<div class="modal-dialog t-left">
					<!-- Body -->
					<div class="modal-body t-center clearfix">
						<!-- Close Button -->
						<a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						<!-- Image SRC -->
						<div class="member-image">
							<img src="images/team/03.jpg" alt="Crexis Team" />
						</div>
						<!-- Details -->
						<div class="details t-left">
							<!-- Member Name -->
							<h2 class="member-header light">
								Sarah Tron
							</h2>
							<!-- Member Position -->
							<h4 class="member-position light colored">
								Ceo &amp; Founder
							</h4>
							<!-- Description -->
							<p class="no-padding light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
							</p>
						</div>
						<!-- End Details -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Dialog -->
			</div>
			<!-- End Modal -->

			<!-- Modal -->
			<div class="modal fade" id="member4" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Modal Dialog -->
				<div class="modal-dialog t-left">
					<!-- Body -->
					<div class="modal-body t-center clearfix">
						<!-- Close Button -->
						<a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						<!-- Image SRC -->
						<div class="member-image">
							<img src="images/team/04.jpg" alt="Crexis Team" />
						</div>
						<!-- Details -->
						<div class="details t-left">
							<!-- Member Name -->
							<h2 class="member-header light">
								Adriana Doen
							</h2>
							<!-- Member Position -->
							<h4 class="member-position light colored">
								Human Resources
							</h4>
							<!-- Description -->
							<p class="no-padding light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
							</p>
						</div>
						<!-- End Details -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Dialog -->
			</div>
			<!-- End Modal -->

			<!-- Modal -->
			<div class="modal fade" id="member5" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Modal Dialog -->
				<div class="modal-dialog t-left">
					<!-- Body -->
					<div class="modal-body t-center clearfix">
						<!-- Close Button -->
						<a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						<!-- Image SRC -->
						<div class="member-image">
							<img src="images/team/05.jpg" alt="Crexis Team" />
						</div>
						<!-- Details -->
						<div class="details t-left">
							<!-- Member Name -->
							<h2 class="member-header light">
								Ketty Clon
							</h2>
							<!-- Member Position -->
							<h4 class="member-position light colored">
								Human Resources
							</h4>
							<!-- Description -->
							<p class="no-padding light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
							</p>
						</div>
						<!-- End Details -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Dialog -->
			</div>
			<!-- End Modal -->

			<!-- Modal -->
			<div class="modal fade" id="member6" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Modal Dialog -->
				<div class="modal-dialog t-left">
					<!-- Body -->
					<div class="modal-body t-center clearfix">
						<!-- Close Button -->
						<a class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
						<!-- Image SRC -->
						<div class="member-image">
							<img src="images/team/06.jpg" alt="Crexis Team" />
						</div>
						<!-- Details -->
						<div class="details t-left">
							<!-- Member Name -->
							<h2 class="member-header light">
								Sarah Tron
							</h2>
							<!-- Member Position -->
							<h4 class="member-position light colored">
								Web Designer
							</h4>
							<!-- Description -->
							<p class="no-padding light">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
							</p>
						</div>
						<!-- End Details -->
					</div>
					<!-- End Body -->
				</div>
				<!-- End Dialog -->
			</div>
			<!-- End Modal -->

		</div>
		<!-- End Modals -->
    </section>

	
    
    
    
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
	<!-- Twitter -->
	<script type="text/javascript" src="js/tweecool.min.js"></script>
	<script type="text/javascript" src="js/tweecool.js"></script>
	<!-- Page Plugins -->
	<script type="text/javascript" src="js/plugins.js"></script>
	<!-- Portfolio Plugins -->
	<script type="text/javascript" src="js/portfolio.js"></script>
	<!-- Theme Panel -->
	
	<!-- End JS Files -->

	<script>
		$(document).ready(function() {
			$('#latest_tweets').tweecool({
				username : 'TCfounders'
			});
			
			$('html, body').animate({
       			scrollTop: $("#<?php echo $section; ?>").offset().top
		    }, 1500);
		});
	</script>


</body>
<!-- Body End -->
</html>