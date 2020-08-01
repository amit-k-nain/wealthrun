<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TDS & TCS | WealthRun</title>
    <meta name="description" content="Wealthrun - TDS & TCS">
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
                        <h1>Tax Deducted Collected at Source (TDS & TCS)</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Services</li>
                            <li class="active">TDS & TCS</li>
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
        <!--=========== Upload your documents Section Start ===========-->
        <!--<section class="section" id="bg_upload">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xl-7 col-md-7">
                        <form action="action/upload_doc.php" name="login" id="login" method="post" enctype="multipart/form-data">
                            <div class="contactBox main_ban_row" id="upload_doc">
                                <h2>Upload your documents</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="group m-l-0">
                                            <label for="docs">Documents *</label>
                                            <input class="inputMaterial" type="file" id="docs" value="" multiple name="docs[]" required="">
                                            <span class="highlight1"></span>
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="group m-l-0">
                                            <label for="service_id">Service *</label>
                                            <select required name="service_id" class="inputMaterial">
                                                <option value="">Select Service</option>
                                                <?php
                                                $sql = "SELECT * FROM services WHERE cat = 'TDS & TCS'";
                                                $res = mysqli_query($conn,$sql);
                                                $num = mysqli_num_rows($res);
                                                if($num > 0){
                                                    while ($fetchq = mysqli_fetch_array($res)){
                                                        echo '<option value="'.$fetchq['id'].'">'.$fetchq['servic'].' - Rs.'.$fetchq['s_cost'].'</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="group m-l-0">
                                            <textarea class="inputMaterial " placeholder="Type your message here.." id="message" name="message"></textarea>
                                            <span class="highlight1"></span>
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="entity" id="entity" value="Business Startup">
                                <input type="hidden" name="entity_id" id="entity_id" value="58">
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <img class="lazy loading m-t-30" data-src="https://www.indiafilings.com/images/process.gif" alt="loading..." src="https://www.indiafilings.com/images/process.gif">
                                        <?php if(isset($_SESSION['email'])){ ?>
                                            <button name="upload_doc" class="btn btn-block btn-rounded login__submit_pixel hover_custom m-t-30 m-b-0" type="submit">Upload and Make payment</button>
                                        <?php }else{ ?>
                                            <button name="signuptoupload" href="#myModal" data-toggle="modal" data-target=".log-sign" class="btn btn-block btn-rounded login__submit_pixel hover_custom m-t-30 m-b-0" type="button">Sign up to upload</button>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>-->
        <!--============ Upload your documents Section End ============-->

        <!--========= (TDS & TCS) Section Start ===========-->
        <?php
        $sql1 = "SELECT * FROM service_content WHERE cat = 'TDS & TCS' AND servic = 'TDS & TCS'";
        $res1 = mysqli_query($conn,$sql1);
        $num1 = mysqli_num_rows($res1);
        if($num1 > 0){
            $fetch = mysqli_fetch_array($res1);
            ?>
            <!--<section class="white-section section-no-border">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col">
                            <h2 class="font-weight-semibold mb-0"><?=$fetch['s_name1']?></h2>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class=" text-justify">
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
                            <h2 class="font-weight-semibold mb-0"><?=$fetch['s_name2']?></h2><br>
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class=" text-justify">
                                    <p><?=$fetch['s_description2']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
        <?php }
        ?>
        <!--=========  (TDS & TCS) Section Start ===========-->

        <!--=============== Latest Blogs Section Start ================-->
        <?php
        $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `cat` = 'TDS & TCS' order by `id` desc limit 0,6";
        $resp = mysqli_query($conn,$sqlp);
        $nump = mysqli_num_rows($resp);
        if ($nump > 0){
            ?>
            <section class="white-section">
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


        <!--=============== Get in Touch Section Start ================-->

        <!--<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
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
                            <a href="contact.php" target="_blank" class="btn btn-lg btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
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