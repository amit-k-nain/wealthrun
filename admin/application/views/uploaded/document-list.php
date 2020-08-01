<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/department/department-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:01 GMT -->
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
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Uploaded Document List</li>
            </ol>
          </nav>
        </div>
          
          <div class="col-xl-12">
            <div class="ms-panel">
              <div class="ms-panel-header  ms-panel-custome">
                <h6>Uploaded Document</h6>
                <!--<a href="<?php /*echo base_url();*/?>index.php/Uploadedcontroller/document_list" class="ms-text-primary">Uploaded Document</a>-->
              </div>
              <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="dtBasicExample" class="table table-striped thead-primary w-100 dataTable no-footer" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Service</th>
                          <th>Cost</th>
                          <th class="th-lg">Document</th>
                          <th class="th-lg">All_Remark</th>
                          <th>Docs_Required</th>
                          <th>Status</th>
                          <th>Message</th>
                          <th>Action</th>
                          <th>Order_Id</th>
                          <th>Transaction_Id</th>
                          <th>Transaction_Status</th>
                          <th>Transaction_Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(isset($uploaded_doc)){
                        	$count = 1;
                            foreach($uploaded_doc as $uploaded_docs){
                                $doccc = explode(',',$uploaded_docs->docs);
                                $total = count($doccc);
                            ?>    
                            <tr>
                              <td><?=$count?>.</td>
                              <td><a href="<?=base_url()?>index.php/Userscontroller/users_list"><?=$uploaded_docs->user_name?> (<?=$uploaded_docs->user_id;?>)</a></td>
								<td><?=$uploaded_docs->service;?></td>
								<td>Rs. <?=$uploaded_docs->txn_amount;?></td>
                              <td>
                              <?php
                              for($i=0;$i<$total;$i++){ ?>
                                  <?=$i+1?>.<a target="_blank" href="<?=base_url()?>../uploaded_docs/<?php echo $doccc[$i]?>">
                                  <?=$doccc[$i];?></a></br>
                              <?php
                              }
                              ?>
                              </td>
                              <td>
								  <?php
								  if($uploaded_docs->remarks){
									  $a = json_decode($uploaded_docs->remarks);
									  foreach ($a as $key => $value){
										  echo '<p>Remark: '.$value->remarks.', Time: '.$value->time.'</p>';
									  }
								  }
								  ?>
							  </td>
							  <td>
								  <?php
								  	if($uploaded_docs->number > 0){
								  		?>
										<?=$uploaded_docs->number?> <a href="<?php echo base_url();?>index.php/Uploadedcontroller/user_docs?sid=<?=$uploaded_docs->payment_id?>">View</a>
										<?php
									}
								  ?>
							  </td>
                              <td><?=array_search($uploaded_docs->status,array('Document Received' => 'received', 'In Process' => 'process', 'Query Pending' => 'query', 'Completed' => 'complete'))?></td>
                              <td><?=$uploaded_docs->msg;?></td>
								<td>
									<a href='javascript:void(0)'><i class='fas fa-pencil-alt ms-text-primary' data-toggle="modal" data-target="#edit<?=$uploaded_docs->payment_id?>"></i></a>
									<!--<a href='#'><i class='far fa-trash-alt ms-text-danger'></i></a>-->
								</td>
								<td><?=$uploaded_docs->order_id;?></td>
								<td><?=$uploaded_docs->txn_id;?></td>
								<td><?=$uploaded_docs->payment_status;?></td>
								<td><?=$uploaded_docs->txn_date;?></td>
                            </tr>

								<div class="modal fade" id="edit<?=$uploaded_docs->payment_id?>">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Change Status</h4>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<form action="<?php echo base_url();?>index.php/Uploadedcontroller/update_data" method="post">
													<div class="form-row">
														<div class="col-sm-6 mb-3">
															<label for="status">Status</label>
															<select id="status" class="form-control" name="status" required>
																<option value=""><-- Change Status -- ></option>
																<option <?php echo ($uploaded_docs->status == 'query') ? 'selected' : ''; ?> value="query">Query Pending</option>
																<option <?php echo ($uploaded_docs->status == 'received') ? 'selected' : ''; ?> value="received">Document Received</option>
																<option <?php echo ($uploaded_docs->status == 'process') ? 'selected' : ''; ?> value="process">In Process</option>
																<option <?php echo ($uploaded_docs->status == 'complete') ? 'selected' : ''; ?> value="complete">Completed</option>
																<!--<option <?php /*echo ($uploaded_docs->status == 'rejected') ? 'selected' : ''; */?> value="rejected">Rejected/Cancelled</option>-->
															</select>
														</div>
														<div class="col-sm-6 mb-3">
															<label for="remarks">Remark</label>
															<input id="remarks" type="text" class="form-control" name="remarks">
														</div>
														<div class="col-sm-6 mb-3">
															<label for="number">Number of more document required</label>
															<input id="number" type="number" class="form-control" name="number" min="0">
														</div>
													</div>
													<input type="hidden" name="payment_id" value="<?=$uploaded_docs->payment_id?>">
													<input type="hidden" name="user_id" value="<?=$uploaded_docs->user_id?>">
													<button class="btn btn-primary " type="submit">Update</button>
												</form>
											</div>
										</div>
									</div>
								</div>
                            <?php
								$count++;
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
