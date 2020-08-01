<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Wealthrun</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" hrefServices="../../vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">

  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific Css (Datatables.css) -->
  <link href="../../assets/css/datatables.min.css" rel="stylesheet">
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
              <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/Admincontroller/admin_home"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
          </nav>
        </div>
          <?php
                if(isset($_SESSION['categ_insert'])){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?= $_SESSION['categ_insert'];?>
                    </div>
                <?php
                }
                unset($_SESSION['categ_insert']);
          ?>
          <?php
                if(isset($_SESSION['s_categ_del'])){ ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?= $_SESSION['s_categ_del'];?>
                    </div>
                <?php
                }
                unset($_SESSION['s_categ_del']);
          ?>
           <?php
                if(isset($_SESSION['s_categ_update'])){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?= $_SESSION['s_categ_update'];?>
                    </div>
                <?php
                }
                unset($_SESSION['s_categ_update']);
          ?>
          <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header  ms-panel-custome">
                <h6>Services</h6>
                <!--<a href="<?php /*echo base_url();*/?>index.php/Servicescontroller/add_categories" class="ms-text-primary">Add Services Categories</a>-->
              </div>
              <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="dtBasicExample" class="table table-striped thead-primary w-100 dataTable no-footer" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="th-xs">#</th>
                          <th class="th-sm">Category Name</th>
                          <th class="th-sm">Category Description</th>
                          <th class="th-sm">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php $a=1;
                            if(isset($category)){
                                foreach($category as $categories){
                                    $s_categ_id = $categories->s_categ_id;
                                    $categ_id = base64_encode($s_categ_id);
                                    $s_catgname = $categories->s_category_name;
                                    $s_catgdesc = $categories->s_category_desc;
                                    $s_catgstatus = $categories->status;
                                ?>
                                    <tr>
                                      <td><?=$a;?></td>
                                      <td><?=$s_catgname;?></td>
                                      <td><?=$s_catgdesc;?></td>
                                      <?php
                                      if($s_catgstatus == 1){?>
                                          <td><span class='badge badge-success'>Active</span></td>
                                      <?php
                                      }
                                      else{ ?>
                                          <td><span class='badge badge-danger'>Deactive</span></td>
                                      <?php
                                      }
                                      ?>
                                      <!--<td>
                                       <i class='fas fa-pencil-alt ms-text-primary' data-toggle="modal" data-target="#edit<?/*=$s_categ_id;*/?>"></i>
                                        <a href='<?php /*echo base_url();*/?>index.php/Servicescontroller/s_categ_del?categ_del=<?php /*echo $categ_id;*/?>'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                      </td>-->
                                    </tr>
                                    
                                    <!-- The Modal -->
                                      <div class="modal fade" id="edit<?=$s_categ_id;?>">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">Modal Heading</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                              <form action="<?php echo base_url();?>index.php/Servicescontroller/update_categories" method="post" class="needs-validation">
                                                  <div class="form-row">
                                                      <div class="col-md-6 mb-3">
                                                          <label for="validationCustom001">Add Category</label>
                                                          <div class="input-group">
                                                             <input type="text" name="s_categ_name" required class="form-control" value="<?=$s_catgname;?>">
                                                          </div>
                                                      </div>
                                                      <div class="col-md-6 mb-2">
                                                         <label>Status</label>
                                                            <ul class="ms-list d-flex">
                                                                <li class="ms-list-item pl-0">
                                                                    <label class="ms-checkbox-wrap">
                                                                    <input type="radio" name="c_status" value="1"<?php echo set_value('c_status',  $s_catgstatus) == 1 ? "checked" : ""; ?>>
                                                                    <i class="ms-checkbox-check"></i>
                                                                    </label>
                                                                    <span> Active </span>
                                                                </li>
                                                                <li class="ms-list-item">
                                                                    <label class="ms-checkbox-wrap">
                                                                    <input type="radio" name="c_status" value="0"<?php echo set_value('c_status',  $s_catgstatus) == 0 ? "checked" : ""; ?>>
                                                                    <i class="ms-checkbox-check"></i>
                                                                    </label>
                                                                    <span> Deactive </span>
                                                                </li>
                                                            </ul>
                                                      </div>
                                                </div>
                                                   <input type="hidden" name="upd_categ_id" value="<?php echo $categ_id; ?>">
                                                  <div class="form-row">
                                                      <div class="col-md-12 mb-3">
                                                         <label for="validationCustom001">Description</label>
                                                         <div class="input-group">
                                                            <textarea name="c_description" class="form-control" required><?=$s_catgdesc;?></textarea>
                                                          </div>
                                                      </div>
                                                   </div>
                                                   <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Update</button>
                                              </form>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>
                                    
                                <?php
                                $a++;
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



<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/department/department-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:03 GMT -->
</html>
