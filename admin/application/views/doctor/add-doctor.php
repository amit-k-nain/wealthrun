<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/doctor/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:21:22 GMT -->
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Mednalytics</title>
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
                                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Doctors</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Add Doctors</h6>
                                <a href="<?php echo base_url();?>index.php/Doctorcontroller/doctor_list" class="ms-text-primary">Doctors List</a>
                            </div>
                            <?php
                                if(isset($_SESSION['doc_added'])){ ?>
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Success!</strong> <?= $_SESSION['doc_added'];?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['doc_added']);
                            ?>
                            <?php
                                if(isset($_SESSION['doc_failed'])){ ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Failed!</strong> <?= $_SESSION['doc_failed'];?>
                                    </div>
                                <?php
                                }
                                unset($_SESSION['doc_failed']);
                            ?>
                            <div class="ms-panel-body">
                                <form action="<?php echo base_url();?>index.php/Doctorcontroller/adddocprocess" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0001">Doctor Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom0001" name="docname" placeholder="Enter Doctor Name"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0002">Doctor Email</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="validationCustom0002" name="docemail" placeholder="Enter Doctor Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom0005">Designation</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom0005" name="doc_desig" placeholder="Enter Designation" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom6">Department</label>
                                            <div class="input-group">
                                                <select class="form-control" name="docdept" id="validationCustom6" required>
                                                    <option value="">Select Department</option>
                                                    <?php
                                                    foreach ($dept_details as $dptment) {
                                                        $deptid = $dptment->dept_id; 
                                                        $deptname = $dptment->dept_name; 
                                                        ?>
                                                        <option value="<?= $deptid;?>"><?=$deptname;?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom007">Doctor Address</label>
                                            <div class="input-group">
                                                <input type="text" name="docaddress" class="form-control" id="validationCustom007" placeholder="Doctor Address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom008">Specialist</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom008" name="doc_specialist" placeholder="Specialist" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <label for="validationCustom009">Mobile</label>
                                            <div class="input-group">
                                                <input type="text" name="doc_mobile" class="form-control" id="validationCustom009" placeholder="Mobile" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label >Doctor Image</label>
                                            <div class="custom-file">
                                                <input class="form-control" type="file" name="docimg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label>Short Biography</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="doc_intro" id="exampleTextarea" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label>Gender</label>
                                            <ul class="ms-list d-flex">
                                                <li class="ms-list-item pl-0">
                                                    <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="gender" value="m">
                                                    <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> Male </span>
                                                </li>
                                                <li class="ms-list-item">
                                                    <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="gender" value="f" checked="">
                                                    <i class="ms-checkbox-check"></i>
                                                    </label>
                                                    <span> Female </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label>Doctor Fee (Rs.)</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required name="doc_fee" placeholder="300">
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
        <!-- Page Specific Scripts Finish -->
        <!-- Mednalytics core JavaScript -->
        <script src="../../assets/js/framework.js"></script>
        <!-- Settings -->
        <script src="../../assets/js/settings.js"></script>
    </body>

<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/doctor/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:21:22 GMT -->
</html>
