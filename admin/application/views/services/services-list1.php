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
              <li class="breadcrumb-item active" aria-current="page">Service Content</li>
            </ol>
          </nav>
        </div>
          
          <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header  ms-panel-custome">
                <h6>Service Content</h6>
                <!--<a href="<?php /*echo base_url();*/?>index.php/Servicescontroller/add_services" class="ms-text-primary">Add Services</a>-->
              </div>

          <?php
            if(isset($_SESSION['serv_added'])){ ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> <?= $_SESSION['serv_added'];?>
                </div>
            <?php
            }
            unset($_SESSION['serv_added']);
          ?>

          <?php
            if(isset($_SESSION['serv_exist'])){ ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Warning!</strong> <?= $_SESSION['serv_exist'];?>
                </div>
            <?php
            }
            unset($_SESSION['serv_exist']);
          ?>

          <?php
            if(isset($_SESSION['serv_deleted'])){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> <?= $_SESSION['serv_deleted'];?>
                </div>
            <?php
            }
            unset($_SESSION['serv_deleted']);
          ?>

          <?php
            if(isset($_SESSION['serv_updated'])){ ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> <?= $_SESSION['serv_updated'];?>
                </div>
            <?php
            }
            unset($_SESSION['serv_updated']);
          ?>

              <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="dtBasicExample" class="table table-striped thead-primary w-100 dataTable no-footer" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
						<th>Service</th>
                          <th>Title_1</th>
						  <th>Description_1</th>
                          <th>Title_2</th>
						  <th>Description_2</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                         $i=1;
                        if(isset($services)){
                          foreach($services as $service){
                            $serv_id = base64_encode($service->id);
                            $serv_doc1 = $service->doc1;
                            $serv_doc2 = $service->doc2;
                            $servic = $service->servic;
                            $cat = $service->cat;
                            $serv_name1 = $service->s_name1;
                            $serv_name2 = $service->s_name2;
                            $serv_cost = $service->s_cost;
                            $serv_desc1 = $service->s_description1;
                            $serv_desc2 = $service->s_description2;
                            $serv_doc_req = $service->doc_required;
                            $serv_status = $service->status;
                            $doc_required = $service->doc_required;
                            $doc_prof = explode(',',$doc_required);
                            ?>
                            <tr>
                              <td><?php echo $i; ?>.</td>
                              <td><?php echo $cat; ?></td>
                              <td><a href="<?= base_url();?>assets/img/<?=$serv_doc1;?>" target="_blank"><img style="border-radius: 0;" src="<?= base_url();?>assets/img/<?=$serv_doc1;?>"></a><span><?= $serv_name1; ?></span></td>
							  <td><?=substr($serv_desc1,0,30)?>..</td>
                              <td><a href="<?= base_url();?>assets/img/<?=$serv_doc2;?>" target="_blank"><img style="border-radius: 0;" src="<?= base_url();?>assets/img/<?=$serv_doc2;?>"></a><span><?= $serv_name2; ?></span></td>
                              <td><?=substr($serv_desc2,0,30)?>..</td>
                              <td>
                                <i class='fas fa-pencil-alt ms-text-primary' data-toggle="modal" data-target="#edit<?=$service->id;?>"></i>
                              </td>
                            </tr>
                            
                            <!-- The Modal -->
                              <div class="modal fade" id="edit<?=$service->id;?>">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Update Service Content</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                      <div class="modal-body">
                                        <form action="<?php echo base_url();?>index.php/Servicescontroller/updateservices_content_process" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                                          <div class="form-row">
                                             <div class="col-md-4 mb-3">
                                                 <label for="validationCustom002">Service Category</label>
												 <input type="text" class="form-control"  value="<?php echo $cat;?>" readonly required>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                              <label>Title 1</label>
                                                <input type="text" class="form-control" name="servicename1" autocomplete="off" value="<?php echo $serv_name1;?>" required>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                              <label>Title 2</label>
                                                <input type="text" class="form-control" name="servicename2" autocomplete="off" value="<?php echo $serv_name2;?>" required>
                                            </div>
                                          </div>
                                          <input type="hidden" name="serv_id" value="<?php echo $serv_id; ?>">
                                          <div class="form-row">
                                            <div class="col-sm-6 mb-2">
                                              <label>First File</label>
                                              <input type="file" class="form-control" name="service_img1" value="<?php echo $serv_doc1;?>">
                                            </div>
                                            <div class="col-sm-6 mb-2">
                                              <label>Second File</label>
                                              <input type="file" class="form-control" name="service_img2" value="<?php echo $serv_doc2;?>">
                                            </div>
											  
                                          </div>

										<div class="form-row">
											<div class="col-sm-6 mb-3">
												<label>First File</label>
												<div class="input-group">
													<?php if (strpos($service->doc1, 'pdf') !== false || strpos($service->doc1, 'doc') !== false){ ?>
														<a href="<?= base_url();?>assets/img/<?=$service->doc1?>" target="_blank"><?=$service->doc1?></a>
													<?php }else{ ?>
														<img width="200" style="border-radius: 0;" src="<?= base_url();?>assets/img/<?=$service->doc1?>">
													<?php } ?>
												</div>
											</div>
											<div class="col-sm-6 mb-3">
												<label>Second File</label>
												<div class="input-group">
													<?php if (strpos($service->doc2, 'pdf') !== false || strpos($service->doc2, 'doc') !== false){ ?>
														<a href="<?= base_url();?>assets/img/<?=$service->doc2?>" target="_blank"><?=$service->doc2?></a>
													<?php }else{ ?>
														<img width="200" style="border-radius: 0;" src="<?= base_url();?>assets/img/<?=$service->doc2?>">
													<?php } ?>
												</div>
											</div>
										</div>

                                          <div class="form-row">
                                            <div class="col-sm-12 mb-3">
                                              <label>Description 1</label>
                                              <div class="input-group">
                                                <textarea name="servicedesc1" class="form-control ckeditor" required><?php echo $serv_desc1;?></textarea>
                                              </div>
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                              <label>Description 2</label>
                                              <div class="input-group">
                                                <textarea name="servicedesc2" class="form-control ckeditor" required><?php echo $serv_desc2;?></textarea>
                                              </div>
                                            </div>
                                          </div>
                                          
                                         <!-- <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button> -->
                                         <button class="btn btn-primary " type="submit">Update</button>
                                         </form>
                                      </div>
                                    <!-- Modal footer -->
                                    <!--<div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>-->
                                    
                                  </div>
                                </div>
                              </div>
                              
                               <!-- The Modal -->
                          <?php
                          $i++;
                          }
                        }
                        ?>
                        
                      </tbody>
                    </table>
                </div>
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
  <script src="../../assets/js/department.js"> </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Page Specific Scripts Start -->
  <script src="../../assets/js/datatables.min.js"> </script>
  <!-- <script src="../../assets/js/data-tables.js"> </script> -->
  <!-- Mednalytics core JavaScript -->

  <script src="../../assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="../../assets/js/settings.js"></script>
  <!-- MDB core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/js/mdb.min.js"></script>
</body>

<script>
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>
