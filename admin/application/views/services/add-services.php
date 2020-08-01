<?php $this->load->view('templates/header'); ?>
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
                        <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Admincontroller/admin_home"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-xl-12 col-md-12">
                  <div class="ms-panel">
                     <div class="ms-panel-header ms-panel-custome">
                        <h6>Add Services</h6>
                        <a href="<?php echo base_url();?>index.php/Servicescontroller/services_list" class="ms-text-primary">Services List</a>
                     </div>

					  <?php
					  if(isset($_SESSION['error'])){ ?>
						  <div class="alert alert-danger alert-dismissible">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Warning !</strong> <?= $_SESSION['error'];?>
						  </div>
						  <?php
					  }
					  unset($_SESSION['error']);
					  ?>
                      
                      
                     <div class="ms-panel-body">
                        <form action="<?php echo base_url();?>index.php/Servicescontroller/addservices_process" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                           <div class="form-row"> 
                                <div class="col-md-6 mb-3">
                                     <label for="validationCustom002">Service Category</label>
                                     <select required class="form-control" name="cat">
                                         <option value="">Select Service</option>
                                         <?php
                                            if(isset($servic_category)){
                                                foreach($servic_category as $servc_categ){
                                                    $servcateg_id = $servc_categ->s_categ_id; 
                                                    $servicnae = $servc_categ->s_category_name; 
                                                    ?>
                                                    <option value="<?=$servicnae;?>"><?=$servicnae;?></option>
                                                <?php
                                                }
                                            }
                                         ?>
                                         
                                     </select>
                                </div>
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom002">Service Name</label>
                                 <div class="input-group">
                                    <input type="text" name="servic" required class="form-control">
                                  </div>
                              </div>
							   <!--<div class="col-md-3 mb-3">
                                 <label for="validationCustom002">Title 1</label>
                                 <div class="input-group">
                                    <input type="text" name="serviceName1" required class="form-control">
                                  </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                 <label for="validationCustom002">Title 2</label>
                                 <div class="input-group">
                                    <input type="text" name="serviceName2" required class="form-control">
                                  </div>
                              </div>-->
                           </div>
                           <div class="form-row">
                              <!--<div class="col-md-6 mb-2">
                                 <label>First File</label>
                                 <div class="input-group">
                                    <input type="file" name="service_img1" required class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-6 mb-2">
                                 <label>Second File</label>
                                 <div class="input-group">
                                    <input type="file" name="service_img2" required class="form-control">
                                 </div>
                              </div>-->
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom002">Cost (in Rs.)</label>
                                 <div class="input-group">
                                    <input type="text" autocomplete="off" name="serviceCost" id="serviceCost" placeholder="In Rs." required class="form-control">
                                  </div>
                                    <span id="msg_err" style="color: red; display: none;">Only digits</span>
                              </div>
                              <!--<div class="col-md-6 mb-2">
                                 <label>Required_Documents</label>
                                 <div class="input-group">
                                    <ul class="ms-list d-flex">
                                        <?php
/*                                        if(isset($doc_req)){
                                            foreach($doc_req as $docrequired){ 
                                            $docname = $docrequired->doc_name;
                                            */?>
                                                <li class="ms-list-item pl-0">
                                                  <label class="ms-checkbox-wrap">
                                                  <input type="checkbox" name="idprof[]" value="<?/*=$docname;*/?>">
                                                  <i class="ms-checkbox-check"></i>
                                                  </label>
                                                  <span> <?/*=$docname;*/?> </span>
                                                </li>
                                            <?php
/*                                            }
                                        }
                                        */?>
                                    </ul>
                                 </div>
                              </div>-->
                           </div>
                           <!--<div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom001">Description 1</label>
                                 <div class="input-group">
                                    <textarea name="description1" class="form-control ckeditor" required></textarea>
                                 </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label for="validationCustom001">Description 2</label>
                                 <div class="input-group">
                                    <textarea name="description2" class="form-control ckeditor" required></textarea>
                                 </div>
                              </div>
                           </div>-->
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

<script>
  $(document).ready(function(){
    $("#serviceCost").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      //display error message
      $("#msg_err").fadeIn('#msg_err');
          return false;
    }
    else{
      $("#msg_err").fadeOut('#msg_err');
    }
    });
    
  });
</script>
</html>
