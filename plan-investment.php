<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plan Your Investment | WealthRun</title>
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
                        <h1>Plan Your Investment</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Services</li>
                            <li class="active">Plan Your Investment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="coming-soon">
            <div class="bgimg">
              <div class="middle">
              </div>
            </div>
            <div class="coming-soon"><img src="img/coming-soon.jpg"></div>
        </section>
        <!--========= (Plan Investments) Section Start ===========-->
        <?php
        $sql1 = "SELECT * FROM service_content WHERE cat = 'Plan Investments' AND servic = 'Plan Investments'";
        $res1 = mysqli_query($conn,$sql1);
        $num1 = mysqli_num_rows($res1);
        if($num1 > 0){
            $fetch = mysqli_fetch_array($res1);
            ?>
            <!--<section class="section section-no-border">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col">
                            <h2 class="font-weight-semibold mb-0"><?=$fetch['s_name1']?></h2>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class="text-justify">
                                    <p><?=$fetch['s_description1']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class="feature-box-info">
                                    <?php if(strpos($fetch['doc1'], 'pdf') !== false || strpos($fetch['doc1'], 'doc') !== false){ ?>
                                        <embed src="admin/assets/img/<?=$fetch['doc1']?>" type="application/pdf" height="400px" width="100%">
                                    <?php }else{ ?>
                                        <img src="admin/assets/img/<?=$fetch['doc1']?>" alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-no-border">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col">

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class="feature-box-info">
                                    <?php if(strpos($fetch['doc2'], 'pdf') !== false || strpos($fetch['doc2'], 'doc') !== false){ ?>
                                        <embed src="admin/assets/img/<?=$fetch['doc2']?>" type="application/pdf" height="400px" width="100%">
                                    <?php }else{ ?>
                                        <img src="admin/assets/img/<?=$fetch['doc2']?>" alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom">
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="font-weight-semibold mb-0"><?=$fetch['s_name2']?></h2>
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class="text-justify">
                                    <p><?=$fetch['s_description2']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
        <?php }
        ?>
        <!--=========  (Plan Investments) Section Start ===========-->

        

        <!--=============== Latest Blogs Section Start ================-->
        <?php
        $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `cat` = 'Plan Investments' order by `id` desc limit 0,6";
        $resp = mysqli_query($conn,$sqlp);
        $nump = mysqli_num_rows($resp);
        if ($nump > 0){
            ?>
            <section class="section">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col align-center">
                            <h2 class="font-weight-semibold mb-0">Our Blogs</h2>
                            <p class="lead font-weight-normal" style="visibility: hidden;">List of our more blogs</p>
                        </div>
                    </div>
                    <div class="row">
                        <?php while ($fetch = mysqli_fetch_array($resp)){ ?>
                            <div class="col-md-4">
                                <a href="blog-details.php?bid=<?=$fetch['id']?>" class="text-decoration-none">
                                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                    <span class="thumb-info-side-image-wrapper">
                                        <img alt="<?=$fetch['title']?>" style="height: 257px;" class="img-fluid" src="admin/assets/img/blog/<?=$fetch['image']?>">
                                    </span>
                                    <span class="thumb-info-caption">
                                        <span class="thumb-info-caption-text p-xl">
                                            <h4 class="font-weight-semibold mb-1"><?=$fetch['title']?></h4>
                                            <p class="text-3"><?php echo substr($fetch['content'], 0, 100); ?> ...</p>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                        <?php } ?>
                        <!--<div class="col-md-4">
                            <a href="#" class="text-decoration-none">
                                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                    <span class="thumb-info-side-image-wrapper">
                                        <img alt="" class="img-fluid" src="img/demos/medical/gallery/blog-3.jpg">
                                    </span>
                                    <span class="thumb-info-caption">
                                        <span class="thumb-info-caption-text p-xl">
                                            <h4 class="font-weight-semibold mb-1">Good service tax</h4>
                                            <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hend...</p>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>-->
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