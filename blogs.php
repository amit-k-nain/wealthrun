<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
	
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>Blogs | Wealth Run</title>	
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
    
    <section class="page-header page-header-modern bg-color-primary page-header-md">
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1>All Blogs</h1>
				</div>
				<div class="col-md-4 order-1 order-md-2 align-self-center">
					<ul class="breadcrumb d-block text-md-right breadcrumb-light">
						<li><a href="index.php">Home</a></li>
						<li class="active">Blogs</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container">
		<div class="row mt-5 mb-5">
			<div class="col">
				<h2 class="font-weight-semibold mb-3">Blogs Details</h2>

                <?php
                    $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 order by `id` desc";
                    $resp = mysqli_query($conn,$sqlp);
                    $nump = mysqli_num_rows($resp);
                    if ($nump > 0){
                        while ($fetch = mysqli_fetch_array($resp)){
                            ?>
                                <div class="row mt-4">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <a href="blog-details.php?bid=<?=$fetch['id']?>" class="text-decoration-none">
                                        <img alt="<?=$fetch['title']?>" class="img-fluid" src="admin/assets/img/blog/<?=$fetch['image']?>">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="font-weight-semibold mb-1 mt-1">
                                        <a href="blog-details.php?bid=<?=$fetch['id']?>" class="text-decoration-none"><?=$fetch['title']?></a>
                                    </h4>
                                    <p><?=substr($fetch['content'],0,500)?>....</p>
                                    <p><a href="blog-details.php?bid=<?=$fetch['id']?>" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1" target="_blank">read more...</a></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
				<!--<div class="row mt-4">
					<div class="col-md-4 mb-3 mb-md-0">
						<a href="blog-details.php" class="text-decoration-none">
							<img alt="" class="img-fluid" src="http://gfrabkart.com/wealth/img/demos/medical/gallery/blog-2.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<h4 class="font-weight-semibold mb-1 mt-1">
							<a href="blog-details.php" class="text-decoration-none">Income Tax</a>
						</h4>
						<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio....</p>
						<p><a href="blog-details.php" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1" target="_blank">view more...</a></p>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-4 mb-3 mb-md-0">
						<a href="blog-details.php" class="text-decoration-none">
							<img alt="" class="img-fluid" src="http://gfrabkart.com/wealth/img/demos/medical/gallery/blog-3.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<h4 class="font-weight-semibold mb-1 mt-1">
							<a href="blog-details.php" class="text-decoration-none">Good service tax</a>
						</h4>
						<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio....</p>
						<p><a href="blog-details.php" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1" target="_blank">view more...</a></p>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-4 mb-3 mb-md-0">
						<a href="blog-details.php" class="text-decoration-none">
							<img alt="" class="img-fluid" src="http://gfrabkart.com/wealth/img/demos/medical/gallery/blog-4.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<h4 class="font-weight-semibold mb-1 mt-1">
							<a href="blog-details.php" class="text-decoration-none">GST</a>
						</h4>
						<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio....</p>
						<p><a href="blog-details.php" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1" target="_blank">view more...</a></p>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-4 mb-3 mb-md-0">
						<a href="blog-details.php" class="text-decoration-none">
							<img alt="" class="img-fluid" src="http://gdrabkart.com/wealth/img/demos/medical/gallery/blog-2.jpg">
						</a>
					</div>
					<div class="col-md-8">
						<h4 class="font-weight-semibold mb-1 mt-1">
							<a href="blog-details.php" class="text-decoration-none">Income tax services</a>
						</h4>
						<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio....</p>
						<p><a href="blog-details.php" class="btn btn-outline btn-quaternary custom-button text-uppercase mt-2 mb-3 font-weight-bold btn-md text-1" target="_blank">view more...</a></p>
					</div>
				</div>-->
			</div>
		</div>
		<!--<div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
            </div>-->
	</div>
	
	


    

    <!--==================== Footer Section Start =====================-->
    <?php include('footer.php'); ?>
    <!--==================== Footer Section Start =====================-->
    
    
    