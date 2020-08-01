<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
	
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>Good Service Tax | Income Tax Return</title>	
	<meta name="description" content="Wealthrun - Income Tax Return (ITR)">
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
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
    <!--==================== Header Section End =====================-->

	<div role="main" class="main">
		<section class="page-header page-header-modern bg-color-primary page-header-md">
			<div class="container">
				<div class="row">
					<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
						<h1>Good Service Tax (GST) </h1>
					</div>
					<div class="col-md-4 order-1 order-md-2 align-self-center">
						<ul class="breadcrumb d-block text-md-right breadcrumb-light">
							<li><a href="index.html">Home</a></li>
							<li class="active">Services</li>
							<li class="active">Good Service Tax</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!--============ Good Service Tax Section Start ===============-->
		<?php
    		$getdata = mysqli_query($conn,"SELECT * FROM services WHERE servic = 'gst' ");
    		$getdata = mysqli_fetch_array($getdata);
    		$getdata['s_name1'];
    		$getdata['s_name2'];
    		$getdata['doc1'];
    		$getdata['doc2'];
    		$getdata['s_description1'];
    		$getdata['s_description2'];
    		$getdata['s_cost'];
    		$getdata['doc_required'];
    		$getdata['status'];
    		
    		$doc = $getdata['doc_required'];
    		$ndoc = explode(',',$doc);
    		$noofdoc = count($ndoc);
    		
		?>
		
		<!--========== Upload your documents Section Start ============-->
		<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
			<div class="container">
				<div class="row">
				    <div class="col-sm-12 upload-doc">
				        <h2>Upload your documents</h2>
				    </div>
				    <form class="form-width" action="action/upload_doc.php" method="post" enctype="multipart/form-data">
                        <?php
                            if(isset($_SESSION['userid'])){ 
                            $_SESSION['servname'] = 'itr';
                        ?>
                        <input type="hidden" name="servicecost" value="<?=$getdata['s_cost'];?>">
                        <?php } ?>
                        <div class="modal-content">
                            <div class="modal-body text-width">
                                <span class="services-color"><b>Service Cost : Rs. </b><?=$getdata['s_cost'];?></span>
    							<div class="form-group">
    							    <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required=""></textarea>
    							</div>
    							<div class="file-uploads">
            						<?php
            					    for($i=0;$i<$noofdoc;$i++){ ?>
            					    
            					        <label><span class="services-color"><span class="red"> *</span><b><?=$ndoc[$i];?></b>&nbsp;</span></label>
            							<div class="form-group">
            								<input type="file" class="" required name="docs[]">
            							</div>
            						
            					    <?php
            					    }	
            						?>
        						</div>
                            </div>
                            <div class="modal-footer">
                                <?php
                                    if(isset($_SESSION['email'])){?>
                                    <button type="submit" name="upload_doc" class="btn btn-primary">Upload and Make payment</button>
                                <?php
                                }
                                    else{?>
                                    <button type="button" name="signuptoupload" data-toggle="modal" data-target=".log-sign" class="btn btn-primary">Sign up to upload</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</section>
		<!--=========== Upload your documents Section End =============-->
		
		
		<section class="section section-no-border">
			<div class="container">
				<div class="row pt-3">
					
				</div>
				<div class="row mt-4">
					<div class="col-lg-6">
					    <div class="col">
    						<h2 class="font-weight-semibold mb-0"><?=$getdata['s_name1'];?></h2>
    					</div>
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-info text-justify">
								<p><?=$getdata['s_description1'];?></p>
							</div>	
						</div>
					</div>
					<div class="col-lg-6">
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-info">
								<!--<img src="img/demos/medical/gallery/gst.png"  alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom">-->
								<embed src="img/pdf/ITRD.pdf" type="application/pdf"   height="400px" width="100%">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section section-no-border">
			<div class="container">
				<div class="row mt-4">
					<div class="col-lg-6">
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-info">
								<img src="img/demos/medical/gallery/gst2.jpg"  alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
					    <h2 class="font-weight-semibold mb-0"><?=$getdata['s_name2'];?></h2><br>
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-info text-justify">
								<p><?=$getdata['s_description2'];?></p>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--============= Good Service Tax Section End ================-->


		<!--=============== Get in Touch Section Start ================-->
		<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-lg-9">
						<div class="call-to-action-content">
							<h3>"Get in Touch"</h3>
							<p class="mb-0">CONNECT WITH US</p>
						</div>
					</div>
					<div class="col-sm-3 col-lg-3">
						<div class="call-to-action-btn">
							<a href="contact.html" target="_blank" class="btn btn-lg btn-primary">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ Get in Touch Section End =================-->

		
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
