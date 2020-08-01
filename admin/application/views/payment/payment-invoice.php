<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/payment/payment-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:06 GMT -->
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
                        <li class="breadcrumb-item"><a href="#">Payment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Payment-Invoice</li>
                     </ol>
                  </nav>
                  <div class="ms-panel">
                     <div class="ms-panel-header header-mini">
                        <div class="d-flex justify-content-between">
                           <h6>Invoice</h6>
                           <h6>#135178</h6>
                        </div>
                     </div>
                     <div class="ms-panel-body">
                        <!-- Invoice To -->
                        <div class="row align-items-center">
                           <div class="col-md-6">
                              <div class="invoice-address">
                                 <h3>Reciever: </h3>
                                 <h5>Hospital Memo</h5>
                                 <p>Anny.123@hotmail.com</p>
                                 <p class="mb-0">1642 Cambridge Drive, Phoenix, 85029 Arizona</p>
                                 <p class="mb-0">Arizona</p>
                                 <p>Phoenix</p>
                              </div>
                           </div>
                           <div class="col-md-6 text-md-right">
                              <ul class="invoice-date">
                                 <li>Invoice Date : Saturday, Nov 08 2019</li>
                                 <li>Due Date : Sunday, Nov 16 2019</li>
                              </ul>
                           </div>
                        </div>
                        <!-- Invoice Table -->
                        <div class="ms-invoice-table table-responsive mt-5">
                           <table class="table table-hover text-right thead-light">
                              <thead>
                                 <tr class="text-capitalize">
                                    <th class="text-center w-5">id</th>
                                    <th class="text-left">Item Name</th>
                                    <th>Qty</th>
                                    <th>Unit Cost</th>
                                    <th>total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left">Visting Charges</td>
                                    <td>1</td>
                                    <td>$100</td>
                                    <td>$100</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Medicines</td>
                                    <td>10</td>
                                    <td>$69</td>
                                    <td>$800</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-left">X-ray Reports</td>
                                    <td>4</td>
                                    <td>$600</td>
                                    <td>$1380</td>
                                 </tr>
                                 <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-left">MRI</td>
                                    <td>2</td>
                                    <td>$245</td>
                                    <td>$480</td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <td colspan="4">Total Cost: </td>
                                    <td>$1500</td>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <div class="invoice-buttons text-right">
                           <a href="#" class="btn btn-primary mr-2">Print Invoice</a>
                           <a href="#" class="btn btn-primary">Send Invoice</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <!-- Reminder Modal -->
      <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header bg-secondary">
                  <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <form>
                  <div class="modal-body">
                     <div class="ms-form-group">
                        <label>Remind me about</label>
                        <textarea class="form-control" name="reminder"></textarea>
                     </div>
                     <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Repeat Daily</span>
                        <label class="ms-switch float-right">
                        <input type="checkbox">
                        <span class="ms-switch-slider round"></span>
                        </label>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="ms-form-group">
                              <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="ms-form-group">
                              <select class="form-control" name="reminder-time">
                                 <option value="">12:00 pm</option>
                                 <option value="">1:00 pm</option>
                                 <option value="">2:00 pm</option>
                                 <option value="">3:00 pm</option>
                                 <option value="">4:00 pm</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Notes Modal -->
      <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header bg-secondary">
                  <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <form>
                  <div class="modal-body">
                     <div class="ms-form-group">
                        <label>Note Title</label>
                        <input type="text" class="form-control" name="note-title" value="">
                     </div>
                     <div class="ms-form-group">
                        <label>Note Description</label>
                        <textarea class="form-control" name="note-description"></textarea>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">Make An Appointment</h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-bshadow-none">
                  <div class="ms-panel-header">
                    <h6>Patient Information</h6>
                  </div>
                  <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom01">Patient Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom02">Date Of Birth</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="validationCustom02" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom03">Disease</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom03" placeholder="Disease" required>

                          </div>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-4 mb-2">
                          <label for="validationCustom04">Address</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom04" placeholder="Add Address" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom05">Phone no.</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Phone No." required>

                          </div>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="validationCustom06">Department Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom06" placeholder="Enter Department Name" required>

                          </div>
                        </div>
                      </div>



                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom07">Appointment With</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom07" placeholder="Enter Doctor Name" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom08">Appointment Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom08" placeholder="Enter Appointment Date" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label>Sex</label>
                          <ul class="ms-list d-flex">
                            <li class="ms-list-item pl-0">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" name="radioExample" value="">
                                <i class="ms-checkbox-check"></i>
                              </label>
                              <span> Male </span>
                            </li>
                            <li class="ms-list-item">
                              <label class="ms-checkbox-wrap">
                                <input type="radio" name="radioExample" value="" checked="">
                                <i class="ms-checkbox-check"></i>
                              </label>
                              <span> Female </span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                      <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Add Appointment</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="prescription" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">Make a prescription</h4>
              <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-bshadow-none">
                  <div class="ms-panel-header">
                    <h6>Patient Information</h6>
                  </div>
                  <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom09">Patient Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom09" placeholder="Enter Name" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom10">Date Of Birth</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="validationCustom10" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-2">
                          <label for="validationCustom11">Address</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom11" placeholder="Add Address" required>

                          </div>
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom12">Phone no.</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom12" placeholder="Enter Phone No." required>

                          </div>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="validationCustom13">Medication</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom13" placeholder="Acetaminophen" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom14">Period Of medication</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="validationCustom14" placeholder="" required>

                          </div>
                        </div>
                      </div>



                      <div class="form-row">

                        <div class="col-md-4 mb-3">
                          <label for="validationCustom15">Appointment With</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom15" placeholder="Enter Doctor Name" required>

                          </div>
                        </div>

                      </div>
                      <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Save Prescription</button>
                      <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save & Print</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="report1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
          <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
              <h4 class="modal-title text-white">Generate report</h4>
              <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
              <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-bshadow-none">
                  <div class="ms-panel-header">
                    <h6>Patient Information</h6>
                  </div>
                  <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom16">Patient Name</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom16" placeholder="Enter Name" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom17">Date Of Birth</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="validationCustom17" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-2">
                          <label for="validationCustom22">Address</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom22" placeholder="Add Address" required>

                          </div>
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom18">Phone no.</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom18" placeholder="Enter Phone No." required>

                          </div>

                        </div>

                        <div class="col-md-4 mb-3">
                          <label for="validationCustom19">Report Type</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom19" placeholder="Diseases Report" required>

                          </div>
                        </div>
                        <div class="col-md-4 mb-3">
                          <label for="validationCustom23">Report Period</label>
                          <div class="input-group">
                            <input type="number" class="form-control" id="validationCustom23" placeholder="" required>

                          </div>
                        </div>
                      </div>



                      <div class="form-row">

                        <div class="col-md-4 mb-3">
                          <label for="validationCustom20">Appointment With</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom20" placeholder="Enter Doctor Name" required>

                          </div>
                        </div>

                      </div>
                      <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Generate Report</button>
                      <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Generate & Print</button>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
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

<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/payment/payment-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:06 GMT -->
</html>
