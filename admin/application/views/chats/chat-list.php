<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/department/department-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:01 GMT -->
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
  <!-- Page Specific Css (Datatables.css) -->
  <link href="../../assets/css/datatables.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="../../assets/css/slick.css" rel="stylesheet">
  <!-- Mednalytics styles -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">

  <style>
    .adminchat{
      padding: 5px;
      background:#ddd;
      margin-left: 50px;
      border-radius: 10px 10px 0px 10px;
    }

    .userchat{
      padding: 5px;
      background: #009efb;
      margin-right: 50px;
      border-radius: 0px 10px 10px 10px;
      color: #fff;
    }

    .chatbody{
      max-height: 250px;
      overflow: auto;
    }

    .msgs{
      width: 80%;
      height: 30px;
    }
  </style> 
    
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
              <li class="breadcrumb-item"><a href="#">Ask & Reply</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ask & Reply List</li>
            </ol>
          </nav>
        </div>
          
          <div class="col-xl-6">
            <div class="ms-panel">
              <div class="ms-panel-header ms-panel-custome">
                <h6>Ask & Reply</h6>
                <a href="<?php echo base_url();?>index.php/Chatcontroller/ask" class="ms-text-primary">Ask</a>
              </div>
              <?php
                if(isset($_SESSION['msg_sent'])){ ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?= $_SESSION['msg_sent'];?>
                    </div>
                <?php
                }
                unset($_SESSION['msg_sent']);
              ?>
              <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="dtBasicExample" class="table table-striped thead-primary w-100 dataTable no-footer" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="th-xs">#</th>
                          <th class="th-sm">User Name</th>
                          <th class="th-sm">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $a=1;
                        if(isset($userchat)){
                          foreach ($userchat as $chatuser) {
                            $userid = $chatuser->uid;
                            $username = $chatuser->u_name; ?>
                            <tr>
                              <td><?=$a;?></td>
                              <td><?=$username;?></td>
                              <td>
                                <i class="fas fa-reply ms-text-primary mychat" data-id="<?=$userid;?>" style="cursor: pointer;"></i>
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
          <div class="col-xl-6">
            <div class="ms-panel">
              <div class="ms-panel-header ms-panel-custome">
                <h6>Chats</h6>
              </div>
              <div class="ms-panel-body chatbody">

              </div>
              <div class="ms-panel-footer sentmsgbody" style="display: none;">
                  <input type="text" name="msgs" class="msgs">
                  <!-- <input type="file" name="attachment" class="attachment"> -->
                  <input type="submit" name="sent" class="sendchat" value="Sent">
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

    $(".fa-paperclip").on("click", function(){
      $(".attachfile").trigger("click");
    })
  
    $(".mychat").on("click", function(){
      var useridd = $(this).data("id");
      $.ajax({
          type: "POST",
          url: "<?php echo base_url();?>index.php/Chatcontroller/getchatby_userid",
          data: {useridd:useridd},
          success: function(data) {
             $('.chatbody').empty().append(data);
             $('.sentmsgbody').show();
             $(".chatbody").animate({ scrollTop: $(document).height() }, 1000);
          }
      });
    })  

    $(".sendchat").on("click", function(){
      var usridd = $(".iduserr").val();
      var msgs = $(".msgs").val();
      if(msgs == ''){
        alert("Please write something");
      }
      else{
        $.ajax({
          type: "POST",
          url: "<?php echo base_url();?>index.php/Chatcontroller/insertchatby_admin",
          data: {usridd:usridd,msgs:msgs},
          success: function(data) {
             $('.chatbody').empty().append(data);
             $(".msgs").val('');
             $(".chatbody").animate({ scrollTop: $(document).height() }, 1000);
          }
        });
      }
    })  

    $(document).on('keypress',function(e) {
      if(e.which == 13) {
          $(".sendchat").trigger("click");
      }
    });

  });
</script>

<!-- Mirrored from slidesigma.com/themes/html/mednalytics/pages/department/department-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Jan 2020 12:22:03 GMT -->
</html>
