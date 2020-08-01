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
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-xl-12 col-md-12">
                  <div class="ms-panel">
                     <div class="ms-panel-header ms-panel-custome">
                        <h6>Edit Blog</h6>
                        <a href="<?php echo base_url();?>index.php/Documentcontroller/blog_list" class="ms-text-primary">Blog List</a>
                     </div>
                      <?php
                        if(isset($_SESSION['doc_exist'])){ ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Warning!</strong> <?= $_SESSION['doc_exist'];?>
                            </div>
                        <?php
                        }
                        unset($_SESSION['doc_exist']);
                      ?>
                      
                     <div class="ms-panel-body">
                        <form action="<?php echo base_url();?>index.php/Documentcontroller/blog_update_process?bid=<?=$blog[0]->id?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="cat">Category</label>
									<div class="input-group">
										<select name="cat" id="cat" class="form-control">
											<option value="">Select Category</option>
											<option <?php echo ($blog[0]->cat == 'ITR') ? 'selected' : ''; ?> value="ITR">ITR</option>
											<option <?php echo ($blog[0]->cat == 'GST') ? 'selected' : ''; ?> value="GST">GST</option>
											<option <?php echo ($blog[0]->cat == 'TDS & TCS') ? 'selected' : ''; ?> value="TDS & TCS">TDS & TCS</option>
											<option <?php echo ($blog[0]->cat == 'Start Your Business') ? 'selected' : ''; ?> value="Start Your Business">Start Your Business</option>
											<option <?php echo ($blog[0]->cat == 'Plan Investments') ? 'selected' : ''; ?> value="Plan Investments">Plan Investments</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-row">
                              <div class="col-md-6 mb-3">
                                 <label for="title">Title</label>
                                 <div class="input-group">
                                    <input type="text" name="title" id="title" value="<?=$blog[0]->title?>" required class="form-control">
                                  </div>
                              </div>
							   <div class="col-md-2 mb-2"></div>
                              <div class="col-md-4 mb-2">
                                 <label>Status</label>
                                    <ul class="ms-list d-flex">
                                        <li class="ms-list-item pl-0">
                                            <label class="ms-checkbox-wrap">
                                            <input type="radio" name="status" value="1" <?php echo ($blog[0]->status == 1) ? 'checked' : ''; ?> >
                                            <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> Active </span>
                                        </li>
                                        <li class="ms-list-item">
                                            <label class="ms-checkbox-wrap">
                                            <input type="radio" name="status" value="0" <?php echo ($blog[0]->status == 0) ? 'checked' : ''; ?>>
                                            <i class="ms-checkbox-check"></i>
                                            </label>
                                            <span> InActive </span>
                                        </li>
                                    </ul>
                              </div>
                           </div>

							<div class="form-row">
								<div class="col-md-6 mb-2">
									<label>Image</label>
									<div class="input-group">
										<input type="file" name="image" class="form-control">
									</div>
								</div>
								<div class="col-md-2 mb-2">
								</div>
								<div class="col-md-4 mb-2">
									<img width="100" src="<?=base_url()?>/assets/img/blog/<?=$blog[0]->image?>">
								</div>
							</div>
                           
                           <div class="form-row">
                              <div class="col-md-12 mb-3">
                                 <label for="content">Content</label>
                                 <div class="input-group">
                                    <textarea name="content" id="content" rows="6" class="form-control ckeditor" required><?=$blog[0]->content?></textarea>
                                  </div>
                              </div>
                           </div>
                           <!-- <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button> -->
                           <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Update</button>
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
