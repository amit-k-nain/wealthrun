<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
	
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>Contact Us | Income Tax Return</title>	
	<meta name="description" content="Wealthrun - Income Tax Return (ITR)">
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/wr-logo.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">		
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">		
	<link rel="stylesheet" href="vendor/animate/animate.min.css">		
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">		
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">		
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">		
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demos/demo-medical.css">
	<!-- Skin CSS -->
	<link rel="stylesheet" href="css/skins/skin-medical.css">		<script src="master/style-switcher/style.switcher.localstorage.js"></script> 
	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">
	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>
</head>
<body>
<div class="body">
    <!--==================== Header Section Start =====================-->
	<?php include("header.php");?>
    <!--===================== Header Section End ======================-->

	<div role="main" class="main">
				
		<section class="page-header page-header-modern bg-color-primary page-header-md">
			<div class="container">
				<div class="row">
					<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
						<h1>Contact Us<!--<br><span>Send us a message or call us for more information</span>--></h1>
					</div>
					<div class="col-md-4 order-1 order-md-2 align-self-center">
						<ul class="breadcrumb d-block text-md-right breadcrumb-light">
							<li><a href="index.php">Home</a></li>
							<li class="active">Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
        
        
		<div class="container">
			<div class="row mt-5">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon pt-0">
							<i class="icon-location-pin icons"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="mb-2">Address</h4>
							<p class="tedxt-4">WEALTHRUN ADVISORS PRIVATE LIMITED<br><b>CIN:</b> U74999HR2020PTC085965<br>DSS-29, SHOPPING COMPLEX, SECTOR 13<br>HISAR HARYANA 125005 IN</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon pt-0">
							<i class="icon-phone icons"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="mb-2">Phone</h4>
							<p class="text-4">
								+91 9992818228 <br>
								+91 9050620402
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon pt-0">
							<i class="icon-envelope icons"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="mb-2">Email</h4>
							<p class="text-4">
								Email: <a href="mailto:admin@wealthrun.in" class="text-decoration-none">admin@wealthrun.in</a><br>
                                Gmail: <a href="mailto:wealthrun.in@gmail.com" class="text-decoration-none">wealthrun.in@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr class="solid">
			<div class="row pt-4 mb-4">
				<div class="col-lg-6">
					<div id="map_contact">
                      	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13940.133200124119!2d75.72756626889266!3d29.13420821555837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWEALTHRUN%20ADVISORS%20PRIVATE%20LIMITED%20DSS-29%2C%20SHOPPING%20COMPLEX%2C%20SECTOR%2013%20HISAR%20HARYANA%20125005%20IN!5e0!3m2!1sen!2sin!4v1585650246505!5m2!1sen!2sin" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
				</div>
				<div class="col-lg-6">
					<h4 class="font-weight-semibold mb-4">Send a Message to Us</h4>
					<form class="contact-form2" action="action/contact_process.php" method="POST">
						<?php if(isset($_SESSION['success']) && $_SESSION['success']){
						    ?>
                            <div class="contact-form-success alert alert-success mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>
                            <?php
                            unset($_SESSION['success']);
                        } ?>

                        <?php if(isset($_SESSION['error']) && $_SESSION['error']){
						    ?>
                            <div class="contact-form-error alert alert-danger mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                            </div>
                            <?php
                            unset($_SESSION['error']);
                        } ?>
						<div class="form-row">
							<div class="form-group col">
								<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<input type="email" placeholder="Your E-mail" value="" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
							</div>
						</div>
                        <div class="form-row">
							<div class="form-group col">
								<input type="tel" placeholder="Phone" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" id="phone" required>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col">
								<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--================== Footer Section Start ===================-->
        <?php include('comm_footer.php'); ?>
		<!--=================== Footer Section End ====================-->
	</div>

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>		
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>		
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>		
	<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>		
	<script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src="master/less/skin-medical.less"></script>		
	<script src="vendor/popper/umd/popper.min.js"></script>		
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>		
	<script src="vendor/common/common.min.js"></script>		
	<script src="vendor/jquery.validation/jquery.validate.min.js"></script>		
	<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>		
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>		
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>		
	<script src="vendor/isotope/jquery.isotope.min.js"></script>		
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>		
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>		
	<script src="vendor/vide/jquery.vide.min.js"></script>		
	<script src="vendor/vivus/vivus.min.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>
	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>		
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- Current Page Vendor and Views -->
	<script src="js/views/view.contact.js"></script>
	<!-- Demo -->
	<script src="js/demos/demo-medical.js"></script>
	<!-- Theme Custom -->
	<script src="js/custom.js"></script>
	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
	
		ga('create', 'UA-42715764-5', 'auto');
		ga('send', 'pageview');
	</script>
	<script src="master/analytics/analytics.js"></script>
</div>
</body>
</html>
