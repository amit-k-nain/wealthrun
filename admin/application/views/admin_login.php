<!-- <?php
print_r($_SESSION);
?> -->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/mednalytics/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:13:27 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Wealthrun</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- mednalytics styles -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- Page Specific CSS (Morris Charts.css) -->
  <link href="assets/css/morris.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="login-box">
        <div class="form-heading">
          <h4>Login</h4>
        </div>
        <?php
          if(isset($_SESSION['admin_login'])){ ?>
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Failed!</strong> <?= $_SESSION['admin_login'];?>
              </div>
          <?php
          }
          unset($_SESSION['admin_login']);
        ?>
        <form method="post" action="<?php echo base_url();?>index.php/Admincontroller/admin_login">
          <div class="input-group">
             <input id="email" type="text" autocomplete="off" class="form-control" name="email" placeholder="Email" required>
           </div>
           <div class="input-group">
             <input id="password" type="password" autocomplete="off" class="form-control" name="password" placeholder="Password" required>
           </div>
          <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>
    </div>
  </div>
  
</body>
<!-- Mirrored from slidesigma.com/themes/html/mednalytics/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:17:38 GMT -->
</html>
