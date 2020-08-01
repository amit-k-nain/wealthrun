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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	    /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.whatsapp {
  background: #25D366;
  color: white;
}

.instagram {
  background: #FBB34C;
  color: white;
}
	</style>
</head>
<body>
<div class="body">
    <?php
        $bid = (isset($_GET) && $_GET['bid']) ? $_GET['bid'] : null;
        if (!$bid){
            header("Location: index.php");
            die();
        }

        include_once("dbconnect.php");

        $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `id` = '".$bid."'";
        $resp = mysqli_query($conn,$sqlp);
        $nump = mysqli_num_rows($resp);

        if($nump < 1){
            header("Location: index.php");
            die();
        }

        $fetch = mysqli_fetch_array($resp);
    ?>
    
    <div class="icon-bar" style="z-index: 999;">
        <?php
            $shareUrl = basrUrl.'blog-details.php?bid='.$bid;
        ?>
      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?=$shareUrl?>&t=<?=$fetch['title']?>" class="facebook"><i class="fa fa-facebook"></i></a>
      <!--<a target="_blank" href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
      <a target="_blank" href="whatsapp://send?text=<?=$shareUrl?>" data-action="share/whatsapp/share" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
    </div>

    <!--==================== Header Section Start =====================-->
    <?php include("header.php");?>
    <!--===================== Header Section End ======================-->
    
    <section class="page-header page-header-modern bg-color-primary page-header-md">
		<div class="container">
			<div class="row">
				<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
					<h1><?=$fetch['title']?></h1>
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

	<div class="container blog-width">
		<div class="row mt-5 mb-4">
			<div class="col">
				<h2 class="font-weight-semibold mb-3"><?=$fetch['title']?></h2>
                <div class="content-grid mt-5 pb-5">
                    <div class="row content-grid-row pl-3 pr-3">
                        <div class="content-grid-item col-sm-12 text-center">
                            <img src="admin/assets/img/blog/<?=$fetch['image']?>" alt="<?=$fetch['title']?>" class="img-fluid" />
                        </div>
                    </div>
                </div>

				<p class="lead font-weight-normal text-justify"><?=$fetch['content']?></p>

				<!--<p class="lead font-weight-normal text-justify"> Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>-->
			</div>
		</div>
	</div>
    

    <!--==================== Footer Section Start =====================-->
    <?php include('footer.php'); ?>
    <!--==================== Footer Section Start =====================-->
    
    
    