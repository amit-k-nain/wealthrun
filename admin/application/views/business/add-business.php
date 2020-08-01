<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/payment/add-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:05 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Wealthrun</title>
      <!-- Iconic Fonts -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="../../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
      <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins.css">
      <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
      <!-- Bootstrap core CSS -->
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- jQuery UI -->
      <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
      <!-- Page Specific CSS (Slick Slider.css) -->
      <link href="../../assets/css/slick.css" rel="stylesheet">
      <!-- Mednalytics styles -->
      <link href="../../assets/css/style.css" rel="stylesheet">

      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
   </head>
   <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
      <!-- Setting Panel -->
      <?php $this->load->view('templates/settings'); ?>
      <!-- Preloader -->
      <?php $this->load->view('templates/preloader'); ?>
      <!-- Overlays -->
      <?php $this->load->view('templates/overlays'); ?>
      <!-- Sidebar Navigation Left -->
      <?php $this->load->view('templates/sidebar_left'); ?>
      <!-- Sidebar Right -->
      <?php $this->load->view('templates/sidebar_right'); ?>
      <!-- Main Content -->
      <main class="body-content">
         <!-- Navigation Bar -->
         <?php $this->load->view('templates/top_nav'); ?>
         <!-- Body Content Wrapper -->
         <div class="ms-content-wrapper">
            <div class="row">
               <div class="col-md-12">
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Business Type</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Business Type</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-xl-12 col-md-12">
                  <div class="ms-panel">
                     <div class="ms-panel-header ms-panel-custome">
                        <h6>Add Business Type</h6>
                        <a href="<?php echo base_url();?>index.php/Businesscontroller/business_list" class="ms-text-primary">Business Type List</a>
                     </div>
                      <?php
                        if(isset($_SESSION['busi_exist'])){ ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Warning!</strong> <?= $_SESSION['busi_exist'];?>
                            </div>
                        <?php
                        }
                        unset($_SESSION['busi_exist']);
                      ?>
                      
                     <div class="ms-panel-body">
                        <form action="<?php echo base_url();?>index.php/Businesscontroller/addbusiness_process" method="post" class="needs-validation" novalidate>
                           <div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom001">Add Business Type</label>
                                 <div class="input-group">
                                    <input type="text" name="business_type" required class="form-control">
                                  </div>
                              </div>
                              <div class="col-md-6 mb-2">
                                 <label>Status</label>
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                            <label class="ms-checkbox-wrap">
                                            <input type="radio" name="status" value="1">
                                            <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Active </span>
                                        </li>
                                        <li class="ms-list-item">
                                            <label class="ms-checkbox-wrap">
                                            <input type="radio" name="status" value="0" checked="">
                                            <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Deactive </span>
                                        </li>
                                    </ul>
                              </div>
                           </div>
                           
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="validationCustom001">Description</label>
                                 <div class="input-group">
                                    <textarea name="description" class="form-control" required></textarea>
                                  </div>
                              </div>
                           </div>
                           <!-- <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button> -->
                           <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
  <!-- modals start-->
  <?php $this->load->view('templates/modals'); ?>
  <!-- modals end-->
      <!-- SCRIPTS -->
      <!-- Global Required Scripts Start -->
      <script src="../../assets/js/jquery-3.3.1.min.js"></script>
      <script src="../../assets/js/popper.min.js"></script>
      <script src="../../assets/js/bootstrap.min.js"></script>
      <script src="../../assets/js/perfect-scrollbar.js"> </script>
      <script src="../../assets/js/jquery-ui.min.js"> </script>
      <!-- Global Required Scripts End -->
      <!-- Page Specific Scripts Start -->
      <script src="../../assets/js/slick.min.js"> </script>
      <script src="../../assets/js/moment.js"> </script>
      <script src="../../assets/js/jquery.webticker.min.js"> </script>
      <script src="../../assets/js/Chart.bundle.min.js"> </script>
      <script src="../../assets/js/Chart.Financial.js"> </script>
      <!-- Page Specific Scripts Finish -->
      <!-- Mednalytics core JavaScript -->
      <script src="../../assets/js/framework.js"></script>
      <!-- Settings -->
      <script src="../../assets/js/settings.js"></script>
   </body>

<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/payment/add-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:06 GMT -->
</html>
