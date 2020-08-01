<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
	
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>WealthRun</title>	
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
	<link rel="stylesheet" href="css/skins/skin-medical.css">		
	<script src="master/style-switcher/style.switcher.localstorage.js"></script> 
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
	    <!--================ Main Slider Section Start ================-->
		<div class="slider-container rev_slider_wrapper" style="height: 650px;">
			<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
				<ul>
                    <?php
                        $sqlp1 = "SELECT * FROM `banners` WHERE `status`= 1";
                        $resp1 = mysqli_query($conn,$sqlp1);
                        $nump1 = mysqli_num_rows($resp1);
                        if($nump1 > 0){
                            while ($fetch1 = mysqli_fetch_array($resp1)){
                                ?>
                                <li data-transition="fade">
                                    <img src="admin/assets/img/banner/<?=$fetch1['banner']?>"
                                         alt=""
                                         data-bgposition="center center"
                                         data-bgfit="cover"
                                         data-bgrepeat="no-repeat"
                                         class="rev-slidebg">

                                    <div class="tp-caption main-label"
                                         data-x="left" data-hoffset="25"
                                         data-y="center" data-voffset="-5"
                                         data-start="1500"
                                         data-whitespace="nowrap"
                                         data-transform_in="y:[100%];s:500;"
                                         data-transform_out="opacity:0;s:500;"
                                         style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
                                         data-mask_in="x:0px;y:0px;"><?=$fetch1['title1']?></div>

                                    <div class="tp-caption main-label"
                                         data-x="left" data-hoffset="25"
                                         data-y="center" data-voffset="-55"
                                         data-start="500"
                                         style="z-index: 5; text-transform: uppercase; font-size: 52px;"
                                         data-transform_in="y:[-300%];opacity:0;s:500;"><?=$fetch1['title2']?></div>

                                    <div class="tp-caption bottom-label"
                                         data-x="left" data-hoffset="25"
                                         data-y="center" data-voffset="40"
                                         data-start="2000"
                                         style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;"
                                         data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;"><?=$fetch1['title3']?></div>
                                </li>
                                <?php
                            }
                        }
                    ?>
					<!--<li data-transition="fade">
						<img src="img/demos/medical/slides/income-2.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat"
							class="rev-slidebg">

						<div class="tp-caption main-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="-5"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
							data-mask_in="x:0px;y:0px;">20 Years Caring About You</div>

						<div class="tp-caption main-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="-55"
							data-start="500"
							style="z-index: 5; text-transform: uppercase; font-size: 52px;"
							data-transform_in="y:[-300%];opacity:0;s:500;">Specialists</div>
						
						<div class="tp-caption bottom-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="40"
							data-start="2000"
							style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;"
							data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;">We are located in Hisar, Haryana, India</div>
					</li>
					<li data-transition="fade">
						<img src="img/demos/medical/slides/investors.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat"
							class="rev-slidebg">

						<div class="tp-caption main-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="-5"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
							data-mask_in="x:0px;y:0px;">Taxes: Personal, Business, and Corporate</div>

						<div class="tp-caption main-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="-55"
							data-start="500"
							style="z-index: 5; text-transform: uppercase; font-size: 52px;"
							data-transform_in="y:[-300%];opacity:0;s:500;">Income Tax</div>
						
						<div class="tp-caption bottom-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="40"
							data-start="2000"
							style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;"
							data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;">Online or Over the Phone</div>
					</li>
					<li data-transition="fade">
						<img src="img/demos/medical/slides/income-3.jpg"  
							alt=""
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat"
							class="rev-slidebg">

						<div class="tp-caption main-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="-5"
							data-start="1500"
							data-whitespace="nowrap"						 
							data-transform_in="y:[100%];s:500;"
							data-transform_out="opacity:0;s:500;"
							style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
							data-mask_in="x:0px;y:0px;">Legally Required Corporate Documentation</div>

						<div class="tp-caption main-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="-55"
							data-start="500"
							style="z-index: 5; text-transform: uppercase; font-size: 52px;"
							data-transform_in="y:[-300%];opacity:0;s:500;">Income Tax</div>
						
						<div class="tp-caption bottom-label"
							data-x="left" data-hoffset="25"
							data-y="center" data-voffset="40"
							data-start="2000"
							style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;"
							data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;">Online or Over the Phone</div>
					</li>-->
				</ul>
			</div>
		</div>
		<!--================= Main Slider Section End =================-->
		
		<!--================= About Us Section Start ==================-->
		<!--<section class="section-custom-medical hidden-xs">
			<div class="container">
				<div class="row medical-schedules">
					<div class="col-xl-3 box-one bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
						<div class="feature-box feature-box-style-2 align-items-center p-4">
							<div class="feature-box-icon p-0">
								<img src="img/demos/medical/icons/medical-icon-heart.png" alt class="img-fluid pt-1" />
							</div>
							<div class="feature-box-info">
								<h4 class="m-0 p-0">
								    <a href="income-tax.php" title="">
								    Income Tax
								    </a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-xl-3 box-two bg-color-tertiary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
						<h5 class="m-0">
							<a href="plan-investment.php" title="">
								Plan Your Finance
								<i class="icon-arrow-right-circle icons"></i>
							</a>
						</h5>
					</div>
					<div class="col-xl-3 box-three bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1200">
						<div class="expanded-info p-4 bg-color-primary">
							<div class="info custom-info">
								<span>Mon-Fri</span>
								<span>8:30 am to 5:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Saturday</span>
								<span>9:30 am to 1:00 pm</span>
							</div>
							<div class="info custom-info">
								<span>Sunday</span>
								<span>Closed</span>
							</div>
						</div>
						<h5 class="m-0">
							Opening Hours
							<i class="icon-arrow-right-circle icons"></i>
						</h5>
					</div>
					<div class="col-xl-3 box-four bg-color-secondary p-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1800">
						<a href="tel:+008001234567" class="text-decoration-none">
							<div class="feature-box feature-box-style-2 m-0">
								<div class="feature-box-icon">
									<i class="icon-call-out icons"></i>
								</div>
								<div class="feature-box-info">
									<label class="font-weight-light">Connect with us</label>
									<strong class="font-weight-normal"> 9991115151</strong>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="row mt-5 mb-5 pt-3 pb-3">
					<div class="col-md-8">
						<h2 class="font-weight-semibold mb-0">About Us</h2>
						<p class="lead font-weight-normal">Serving Our Community</p>

						<p>Our family-owned accounting and taxation consultancy has been serving the community for the last 35 years. Our team has grown and includes experienced CAs and dedicated support to provide both personal and professional financial services. </p>

						<a href="about-us.php" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-4 mb-4 mb-md-0 font-weight-bold">read more</a>
					</div>
					<div class="col-md-4">
						<img src="img/demos/medical/gallery/about.jpg" alt class="img-fluid box-shadow-custom" /> 
					</div>
				</div>
			</div>
		</section>-->
		<!--================== About Us Section End ===================-->
		
		<!--================== 6 Boxes Section Start ==================-->
        <div class="demo">
            <div class="container">
                <div class="row justify-content-md-center title-h2">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold mb-0 align-center">Our Services</h2><br>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox img-hover-zoom img-hover-zoom--zoom-n-rotate">
                            <a href="income-tax.php" class="read-more">
                                <img src="img/itr.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox img-hover-zoom img-hover-zoom--zoom-n-rotate">
                            <a href="gst.php" class="read-more">
                                <img src="img/gst.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox img-hover-zoom img-hover-zoom--zoom-n-rotate">
                            <a href="tds-and-tcs.php" class="read-more">
                                <img src="img/tds.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox img-hover-zoom img-hover-zoom--zoom-n-rotate">
                            <a href="plan-investment.php" class="read-more">
                                <img src="img/plan.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox img-hover-zoom img-hover-zoom--zoom-n-rotate">
                            <a href="start-business.php" class="read-more">
                                <img src="img/start.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--<div class="demo">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <h2 class="font-weight-semibold mb-0 align-center">Our Services</h2><br>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox">
                            <a href="income-tax.php" class="read-more">
                                <img src="img/itr.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox">
                            <a href="plan-investment.php" class="read-more">
                                <img src="img/plan.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox">
                            <a href="tds-and-tcs.php" class="read-more">
                                <img src="img/tds.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox">
                            <a href="gst.php" class="read-more">
                                <img src="img/gst.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="serviceBox">
                            <a href="start-business.php" class="read-more">
                                <img src="img/demos/medical/gallery/b5.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
		<!--=================== 6 Boxes Section End ===================-->
		
		<!--=============== Latest Blogs Section Start ================-->
        <?php
            /*$sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 order by `id` desc limit 0,3";*/
            /*$sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `cat` = '' order by `id` desc limit 0,6";
            $resp = mysqli_query($conn,$sqlp);
            $nump = mysqli_num_rows($resp);
            if ($nump > 0){ */?><!--
                <section class="section">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col align-center">
                                <h2 class="font-weight-semibold mb-0 ">Blogs</h2>
                                <p class="lead font-weight-normal" style="visibility:hidden;">List of our more blogs</p>
                            </div>
                        </div>
                        <div class="row">
                            <?php
/*                                while ($fetch = mysqli_fetch_array($resp)){ */?>
                                    <div class="col-md-4">
                                        <a href="blog-details.php?bid=<?/*=$fetch['id']*/?>" class="text-decoration-none">
                                            <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                                <span class="thumb-info-side-image-wrapper">
                                                    <img alt="<?/*=$fetch['title']*/?>" class="img-fluid" src="admin/assets/img/blog/<?/*=$fetch['image']*/?>">
                                                </span>
                                                <span class="thumb-info-caption">
                                                    <span class="thumb-info-caption-text p-xl">
                                                        <h4 class="font-weight-semibold mb-1"><?/*=$fetch['title']*/?></h4>
                                                        <p class="text-3"><?php /*echo substr($fetch['content'], 0, 100); */?> ...</p>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                <?/* }
                            */?>
                        </div>
                        <div class="row pb-4">
                            <div class="col-lg-12 text-center">
                                <a href="blogs.php" class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">view more</a>
                            </div>
                        </div>
                    </div>
                </section>
            --><?php /*}*/
        ?>
        <?php
        /*$sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 order by `id` desc limit 0,3";*/
        $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `cat` = '' order by `id` desc limit 0,20";
        $resp = mysqli_query($conn,$sqlp);
        $nump = mysqli_num_rows($resp);
        if ($nump > 0){ ?>
            <section class="team pb-2 section">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="col align-center">
                                <h2 class="font-weight-semibold mb-0 ">Blogs</h2>
                                <p class="lead font-weight-normal" style="visibility:hidden;">List of our more blogs</p>
                            </div>
                            <div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">
                                <div class="bounce-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                                <div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1" data-plugin-options="{'items': 4, 'loop': false, 'dots': false, 'nav': true}">
                            <?php while ($fetch = mysqli_fetch_array($resp)){ ?>
                            <div class="pr-3 pl-3 thumb-info">
                                <a href="blog-details.php?bid=<?=$fetch['id']?>" class="text-decoration-none">
                                    <span class="thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                        <span class="thumb-info-side-image-wrapper">
                                            <img alt="<?=$fetch['title']?>" class="img-fluid" src="admin/assets/img/blog/<?=$fetch['image']?>">
                                        </span>
                                        <span class="thumb-info-caption hover_bg">
                                            <span class="thumb-info-caption-text p-xl">
                                                <h4 class="font-weight-semibold mb-1"><?=$fetch['title']?></h4>
                                                <p class="text-3"><p><?php echo substr($fetch['content'], 0, 100); ?> ...</p>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <?php } ?>
                            <!--<div class="pr-3 pl-3 thumb-info">
                                <a href="blog-details.php?bid=15" class="text-decoration-none">
                                    <span class="thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                        <span class="thumb-info-side-image-wrapper">
                                            <img alt="11Plan Investments" class="img-fluid" src="admin/assets/img/blog/1585650871blog-3.jpg">
                                        </span>
                                        <span class="thumb-info-caption hover_bg">
                                            <span class="thumb-info-caption-text p-xl">
                                                <h4 class="font-weight-semibold mb-1">11Plan Investments</h4>
                                                <p class="text-3"><p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh ...</p>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="pr-3 pl-3 thumb-info">
                                <a href="blog-details.php?bid=15" class="text-decoration-none">
                                    <span class="thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                        <span class="thumb-info-side-image-wrapper">
                                            <img alt="11Plan Investments" class="img-fluid" src="admin/assets/img/blog/1585650871blog-3.jpg">
                                        </span>
                                        <span class="thumb-info-caption hover_bg">
                                            <span class="thumb-info-caption-text p-xl">
                                                <h4 class="font-weight-semibold mb-1">11Plan Investments</h4>
                                                <p class="text-3"><p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh ...</p>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="pr-3 pl-3 thumb-info">
                                <a href="blog-details.php?bid=15" class="text-decoration-none">
                                    <span class="thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                        <span class="thumb-info-side-image-wrapper">
                                            <img alt="11Plan Investments" class="img-fluid" src="admin/assets/img/blog/1585650871blog-3.jpg">
                                        </span>
                                        <span class="thumb-info-caption hover_bg">
                                            <span class="thumb-info-caption-text p-xl">
                                                <h4 class="font-weight-semibold mb-1">11Plan Investments</h4>
                                                <p class="text-3"><p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh ...</p>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="pr-3 pl-3 thumb-info">
                                <a href="blog-details.php?bid=15" class="text-decoration-none">
                                    <span class="thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                        <span class="thumb-info-side-image-wrapper">
                                            <img alt="11Plan Investments" class="img-fluid" src="admin/assets/img/blog/1585650871blog-3.jpg">
                                        </span>
                                        <span class="thumb-info-caption hover_bg">
                                            <span class="thumb-info-caption-text p-xl">
                                                <h4 class="font-weight-semibold mb-1">11Plan Investments</h4>
                                                <p class="text-3"><p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh ...</p>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>-->
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-lg-12 text-center">
                            <a href="blogs.php" class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">view more</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
		<!--================ Latest Blogs Section End =================-->
		
		<!--============ Educational Video Section Start ==============-->
		<?php  if(0){ ?>	
		<section class="section section-no-border">
			<div class="container">
				<div class="row pt-3">
					<div class="col">
						<h2 class="font-weight-semibold mb-0">Educational Videos</h2>
						<p class="lead font-weight-normal">Professional & Educational Video</p>
					</div>
				</div>
				<div class="row">
				<div class="col-md-6">
				    <div class="educational-content text-justify">
				        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. .</p>
				    </div>
    		    </div>
				<div class="col-md-6">
				    <section id="lab_video_slider">
                    <div class="container-fluid">
                        <div class="row">
                            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
                            <!-- Link Swiper's CSS -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">
                            <!-- Swiper -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                        $sqlp = "SELECT * FROM `videos` order by `id` desc limit 0,1";
                                        $resp = mysqli_query($conn,$sqlp);
                                        $nump = mysqli_num_rows($resp);
                                        $fetch = mysqli_fetch_array($resp);
                                        $urls = $fetch['content'];
                                        $urls_array = explode(',',$urls);
                                        foreach ($urls_array as $url){
                                            ?>
                                                <div id="slide_one" class="swiper-slide">
                                                    <iframe style="visibility: visible; height: 306px; width: 100%;" poster="//dl.dropbox.com/s/pjopy0mu4klisat/working-with-espresso.jpg" class="slider-video" width="100%" src="<?=$url?>"></iframe>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <!-- Swiper JS -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>
                
                            <!-- Initialize Swiper -->
                            <script>
                                var swiper = new Swiper('.swiper-container', {
                                    pagination: '.swiper-pagination',
                                    paginationClickable: true,
                                    nextButton: '.swiper-button-next',
                                    prevButton: '.swiper-button-prev',
                                    spaceBetween: 30,
                                    autoplay: 5000,
                                    autoplayDisableOnInteraction: false
                                });
                            </script>
                        </div>
                        <!-- end .row -->
                    </div>
    		    </section>
    		    </div>
    		    </div>
    		</div>
		</section>
		<?php }  ?>
		<!--============= Educational Video Section End ===============-->
		
		<!--<section class="team pb-2">
			<div class="container">
				<div class="row pt-4">
					<div class="col">
						<h2 class="font-weight-semibold mb-0">Doctors</h2>
						<p class="lead font-weight-normal">Our Specialists</p>

						<div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">

							<div class="bounce-loader">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>

							<div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>

						</div>

					</div>
				</div>
				<div class="row pb-4">
					<div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1" data-plugin-options="{'items': 4, 'loop': false, 'dots': false, 'nav': true}">
						<div class="pr-3 pl-3">
							<a href="#" data-href="#" data-ajax-on-page class="text-decoration-none">
								<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-0">
										<img src="img/demos/medical/doctors/doctor-1.jpg" class="img-fluid" alt="">
									</span>
									<span class="thumb-info-caption p-4">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-type font-weight-light text-4">Cardiology</span>
											<span class="custom-thumb-info-inner font-weight-semibold text-5">John Doe</span>
											<i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="pr-3 pl-3">
							<a href="#" data-href="#" data-ajax-on-page class="text-decoration-none">
								<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-0">
										<img src="img/demos/medical/doctors/doctor-2.jpg" class="img-fluid" alt="">
									</span>
									<span class="thumb-info-caption p-4">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-type font-weight-light text-4">Gastroenterology</span>
											<span class="custom-thumb-info-inner font-weight-semibold text-5">Robin Doe</span>
											<i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="pr-3 pl-3">
							<a href="#" data-href="#" data-ajax-on-page class="text-decoration-none">
								<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-0">
										<img src="img/demos/medical/doctors/doctor-3.jpg" class="img-fluid" alt="">
									</span>
									<span class="thumb-info-caption p-4">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-type font-weight-light text-4">Pulmonology</span>
											<span class="custom-thumb-info-inner font-weight-semibold text-5">Jessica Doe</span>
											<i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="pr-3 pl-3">
							<a href="#" data-href="#" data-ajax-on-page class="text-decoration-none">
								<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-0">
										<img src="img/demos/medical/doctors/doctor-4.jpg" class="img-fluid" alt="">
									</span>
									<span class="thumb-info-caption p-4">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-type font-weight-light text-4">Dental</span>
											<span class="custom-thumb-info-inner font-weight-semibold text-5">Rose Doe</span>
											<i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="pr-3 pl-3">
							<a href="#" data-href="#" data-ajax-on-page class="text-decoration-none">
								<span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-0">
										<img src="img/demos/medical/doctors/doctor-5.jpg" class="img-fluid" alt="">
									</span>
									<span class="thumb-info-caption p-4">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-type font-weight-light text-4">Gynecology</span>
											<span class="custom-thumb-info-inner font-weight-semibold text-5">Mary Ann Doe</span>
											<i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		
		<!--================ Insurance Section Start ==================-->
		<!--<section>
			<div class="container">
				<div class="row pt-4">
					<div class="col">
						<h2 class="font-weight-semibold mb-0">Insurance</h2>
						<p class="lead font-weight-normal">Major insurance providers accepted</p>
					</div>
				</div>
				<div class="row mb-5 pb-4">
					<div class="col">
						<div class="content-grid">
							<div class="row content-grid-row pl-3 pr-3">
								<div class="content-grid-item col-md-4 col-lg-2 text-center">
									<img src="img/demos/medical/logos/insurance-logo-1.png" alt class="img-fluid" />
								</div>
								<div class="content-grid-item col-md-4 col-lg-2 text-center">
									<img src="img/demos/medical/logos/insurance-logo-2.png" alt class="img-fluid" />
								</div>
								<div class="content-grid-item col-md-4 col-lg-2 text-center">
									<img src="img/demos/medical/logos/insurance-logo-3.png" alt class="img-fluid" />
								</div>
								<div class="content-grid-item col-md-4 col-lg-2 text-center">
									<img src="img/demos/medical/logos/insurance-logo-4.png" alt class="img-fluid" />
								</div>
								<div class="content-grid-item col-md-4 col-lg-2 text-center">
									<img src="img/demos/medical/logos/insurance-logo-5.png" alt class="img-fluid" />
								</div>
								<div class="content-grid-item col-md-4 col-lg-2 text-center">
									<img src="img/demos/medical/logos/insurance-logo-6.png" alt class="img-fluid" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		<!--================= Insurance Section End ===================-->
		
		<!--=============== Testimonials Section Start ================-->
		<section class="section section-secondary">
			<div class="container">
			    <div class="row">
    			    <div class="col">
    					<h2 class="font-weight-semibold mb-0 align-center">Customer Testimonials</h2>
    				</div>
				</div>
				<div class="row pt-5 pb-5">
					<!--<div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false, 'dots': false}">-->
				    <div class="owl-carousel owl-theme dots-inside mt-2" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 4000}">
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">Prompt support and on time delivery of project make your services value for money. Best wishes.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Puneet Garg<br><br>Finance Tender Manager India, Alstom Transport</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">They serve clients with utmost dedication and sincerity. Ethics and professionalism are their core values.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Nitesh Kumar<br><br>Senior Associate, Cognizant</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">They have a strong team and are willing to go that extra mile for client satisfaction. They have always been on their toes to help me. I will personally recommend to all those seeking peace of mind.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Lavnish Goyal<br><br>Deputy Manager, Ministry of Power</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">They have extremely proactive and professional team. They not just helped me in filling my return but also advised me on investments and better tax planning.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Nitin Bansal<br><br>Senior Manager, Bank of America</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">Easily the best Consultancy one can find. Prompt grievance redressal along with on point best financial Advice.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Mehak Gupta<br><br>Technology Lead, Infosys</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">Decent people with maximum dedication towards work and client’s requirement. Fabulous investment and financial Consultancy.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Rashi Goyal<br><br>Senior Software Engineer, Microsoft</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-8 pt-4 mt-3">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
									<div class="testimonial-quote">“</div>
									<blockquote>
										<p class="font-weight-light">Wealthrun’s advice and experience has been invaluable to me. They’re always at the end of phone to answer any queries I have.</p>
									</blockquote>
									<div class="testimonial-author">
										<p class="text-uppercase">
											<strong>Mayank Rathore<br><br>Senior Member of Technical Staff, Paypal</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ Testimonials Section End =================-->
		
		<!--============== Why Choose Us Section Start ================-->
        <section class="section section-height-2 border-0 m-0">
            <div class="container py-2">
                <div class="row">
                    <div class="col mrgn-40">
                        <h2 class="font-weight-semibold mb-0 align-center mrgn-20">Why Choose Us</h2>
                        <p class="lead font-weight-normal align-center">We may not file your return in 10 minutes but we do assure 100% accuracy and value addition in our services.</p>
                    </div>
                </div>
                <!--<div class="row justify-content-center">
                   <div class="col-6 col-sm-4 col-lg-3">
                       <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                           <div class="featured-box featured-box-no-borders featured-box-box-shadow" style="height: 118px;">
                               <a href="#" class="text-decoration-none">
                                   <span class="box-content px-1 py-4 text-center d-block">
                                       <span class="text-primary text-8 position-relative top-3 mt-3"><i class="far fa-clock"></i></span>
                                       <span class="elements-list-shadow-icon text-default"><i class="far fa-clock"></i></span>
                                       <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Accurate & Timely return filling.</span>
                                   </span>
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-6 col-sm-4 col-lg-3">
                       <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                           <div class="featured-box featured-box-no-borders featured-box-box-shadow" style="height: 118px;">
                               <a href="#" class="text-decoration-none">
                                   <span class="box-content px-1 py-4 text-center d-block">
                                       <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-indent"></i></span>
                                       <span class="elements-list-shadow-icon text-default"><i class="fas fa-indent"></i></span>
                                       <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Data Safety is the highest priority for us.</span>
                                   </span>
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-6 col-sm-4 col-lg-3">
                       <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                           <div class="featured-box featured-box-no-borders featured-box-box-shadow" style="height: 118px;">
                               <a href="#" class="text-decoration-none">
                                   <span class="box-content px-1 py-4 text-center d-block">
                                       <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-columns"></i></span>
                                       <span class="elements-list-shadow-icon text-default"><i class="fas fa-columns"></i></span>
                                       <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Team of young and dedicated professionals.</span>
                                   </span>
                               </a>
                           </div>
                       </div>
                   </div>
                   <div class="col-6 col-sm-4 col-lg-3">
                       <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
                           <div class="featured-box featured-box-no-borders featured-box-box-shadow" style="height: 118px;">
                               <a href="#" class="text-decoration-none">
                                   <span class="box-content px-1 py-4 text-center d-block">
                                       <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-check"></i></span>
                                       <span class="elements-list-shadow-icon text-default"><i class="fas fa-check"></i></span>
                                       <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Expert assistance available even before you subscribe for any service.</span>
                                   </span>
                               </a>
                           </div>
                       </div>
                   </div>
               </div>-->
                <div class="featured-boxes featured-boxes-flat">
                    <!--<div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-primary featured-box-effect-2" style="height: 238.594px;">
                                <div class="box-content box-content-border-bottom">
                                    <i class="icon-featured far fa-heart"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Our <strong class="font-weight-extra-bold">Customers</strong></h4>
                                    <p class="mb-2 mt-2 text-2">Accurate & Timely return filling.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-2" style="height: 238.594px;">
                                <div class="box-content box-content-border-bottom">
                                    <i class="icon-featured far fa-file-alt"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Well <strong class="font-weight-extra-bold">Documented</strong></h4>
                                    <p class="mb-2 mt-2 text-2">Data Safety is the highest priority for us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-tertiary featured-box-effect-2" style="height: 238.594px;">
                                <div class="box-content box-content-border-bottom">
                                    <i class="icon-featured far fa-star"></i>
                                    <h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Winner</strong> Design</h4>
                                    <p class="mb-2 mt-2 text-2">Team of young and dedicated professionals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-quaternary featured-box-effect-2" style="height: 238.594px;">
                                <div class="box-content box-content-border-bottom">
                                    <i class="icon-featured far fa-edit"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Custom <strong class="font-weight-extra-bold">Source</strong></h4>
                                    <p class="mb-2 mt-2 text-2">Expert assistance available even before you subscribe for any service.</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-tertiary featured-box-effect-3" style="height: 225.594px;">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured far fa-heart"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Expert assistance available even before you subscribe for any service.</h4>
                                    <!--<h4 class="font-weight-normal text-5 mt-3">Our <strong class="font-weight-extra-bold">Customers</strong></h4>
                                    <p class="mb-2 mt-2 text-2"><b>Accurate & Timely return filling</b>.</p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-3" style="height: 225.594px;">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured far fa-file-alt"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Data Safety is the highest priority for us.</h4>
                                    <!--<h4 class="font-weight-normal text-5 mt-3">Well <strong class="font-weight-extra-bold">Documented</strong></h4>
                                    <p class="mb-2 mt-2 text-2"><b>Data Safety is the highest priority for us</b>.</p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-tertiary featured-box-effect-3" style="height: 225.594px;">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured far fa-star"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Accurate & Timely return filling.</h4>
                                    <!--<h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Winner</strong> Design</h4>
                                    <p class="mb-2 mt-2 text-2"><b>Team of young and dedicated professionals</b>.</p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="featured-box featured-box-secondary featured-box-effect-3" style="height: 225.594px;">
                                <div class="box-content box-content-border-0">
                                    <i class="icon-featured far fa-edit"></i>
                                    <h4 class="font-weight-normal text-5 mt-3">Team of young and dedicated professionals.</h4>
                                    <!--<h4 class="font-weight-normal text-5 mt-3">Custom <strong class="font-weight-extra-bold">Source</strong></h4>
                                    <p class="mb-2 mt-2 text-2"><b>Expert assistance available even before you subscribe for any service</b>.</p>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!--<section class="section section-no-border">
		    <div class="container">
		    <div class="row">
    			    <div class="col mrgn-40">
    					<h2 class="font-weight-semibold mb-0 align-center mrgn-20">Why Choose Us</h2>
    					<p class="lead font-weight-normal align-center">We may not file your return in 10 minutes but we do assure 100% accuracy and value addition in our services.</p>
    				</div>
				</div>
    		<div class="row">
    			<div class="col-md-3">
                    <div class="card card-1">
                        <div class="inner-card">
                            <img src="img/logo.png" alt="">
                            <p>Accurate & Timely return filling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-1">
                        <div class="inner-card">
                            <img src="img/logo.png" alt="">
                            <p>Data Safety is the highest priority for us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-1">
                        <div class="inner-card">
                            <img src="img/logo.png" alt="">
                            <p>Team of young and dedicated professionals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-1">
                        <div class="inner-card">
                            <img src="img/logo.png" alt="">
                            <p>Expert assistance available even before you subscribe for any service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>-->
		<!--<section class="section section-no-border">
			<div class="container">
				<div class="row pt-3">
					<div class="col">
						<h2 class="font-weight-semibold mb-0">Why Choose Us</h2>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-12">
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="text-justify">
								<ol>
                                    <li><b>Accurate & Timely return filling.</b></li>
                                    <li><b>Data Safety is the highest priority for us.</b></li>
                                    <li><b>We may not file your return in 10 minutes but we do assure 100% accuracy and value addition in our services.</b></li>
                                    <li><b>Team of young and dedicated professionals.</b></li>
                                    <li><b>Expert assistance available even before you subscribe for any service.</b></li>
                                </ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		<!--=============== Why Choose Us Section End =================-->
		
		

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