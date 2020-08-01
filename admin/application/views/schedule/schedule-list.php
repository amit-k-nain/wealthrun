<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/doctor-schedule/schedule-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:03 GMT -->
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

        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.min.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery UI -->
        <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
        <!-- Page Specific CSS (Slick Slider.css) -->
        <link href="../../assets/css/slick.css" rel="stylesheet">
        <!-- Page Specific Css (Datatables.css) -->
        <link href="../../assets/css/datatables.min.css" rel="stylesheet">
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
                                <li class="breadcrumb-item"><a href="#">Doctor Schedule</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Schedule List</li>
                            </ol>
                        </nav>
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Schedule List</h6>
                                <a href="<?php echo base_url();?>index.php/Schedulecontroller/add_schedule" class="ms-text-primary">Add Schedule</a>
                            </div>
                            <div class="ms-panel-body">
                                <div class="table-responsive">
                                  <table id="dtBasicExample" class="table table-striped thead-primary w-100 dataTable no-footer" cellspacing="0" width="100%">
                                  <thead>
                                    <tr>
                                      <th class="th-sm">#</th>
                                      <th class="th-sm">Department Name</th>
                                      <th class="th-sm">Doctor Name</th>
                                      <th class="th-sm">Start Time</th>
                                      <th class="th-sm">End Time</th>
                                      <th class="th-sm">Working Days</th>
                                      <th class="th-sm">Status</th>
                                      <th class="th-sm">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php $a=1;
                                    if(isset($scheduled_doc)){
                                      foreach ($scheduled_doc as $sched_doc) { 
                                        $schd_id = $sched_doc->schedule_id;
                                        $docid = $sched_doc->doc_id;
                                        $dptid = $sched_doc->dept_id;
                                        $startat = $sched_doc->start_at;
                                        $endat = $sched_doc->end_at;
                                        $workday = $sched_doc->working_days;
                                        $status = $sched_doc->status;

                                        foreach ($dept_details as $dptdet) {
                                          $dpttid = $dptdet->dept_id;
                                          if($dpttid == $dptid){
                                            $dptnme = $dptdet->dept_name;
                                          }
                                        }

                                        foreach ($doc_details as $docdet) {
                                          $docidd = $docdet->doc_id;
                                          if($docidd == $docid){
                                            $doccnme = $docdet->doc_name;
                                          }
                                        }
                                    ?>
                                      <tr>
                                        <td>SCH0<?= $a;?></td>
                                        <td><?= $dptnme;?></td>
                                        <td><?= $doccnme;?></td>
                                        <td><?= $startat;?></td>
                                        <td><?= $endat;?></td>
                                        <td><?= $workday;?></td>
                                        <?php
                                        if($status == 1){ ?>
                                          <td><span class='badge badge-success'>Active</span></td>
                                        <?php
                                        }else{ ?>
                                          <td><span class='badge badge-danger'>Inactive</span></td>
                                        <?php
                                        }
                                        ?>
                                        <td>
                                          <a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a>
                                          <a href='#'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                        </td>
                                      </tr>
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
        <!-- Page Specific Scripts Finish -->
        <script src="../../assets/js/d3.v3.min.js"> </script>
        <script src="../../assets/js/topojson.v1.min.js"> </script>
        <script src="../../assets/js/datamaps.all.min.js"> </script>
        <script src="../../assets/js/schedule.js"> </script>
        <!-- Mednalytics core JavaScript -->
        <script src="../../assets/js/framework.js"></script>
        <!-- Page Specific Scripts Start -->
        <script src="../../assets/js/datatables.min.js"> </script>
        <!-- <script src="../../assets/js/data-tables.js"> </script> -->
        <!-- Settings -->
        <script src="../../assets/js/settings.js"></script>
    </body>

    <script>
      $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
      });
    </script>

<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/doctor-schedule/schedule-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:04 GMT -->
</html>
