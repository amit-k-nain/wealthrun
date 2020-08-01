   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/*body {margin:0;height:2000px;}*/

/*.icon-bar {*/
/*  position: fixed;*/
/*  top: 67%;*/
/*  -webkit-transform: translateY(-50%);*/
/*  -ms-transform: translateY(-50%);*/
/*  transform: translateY(-50%);*/
/*}*/

/*.icon-bar a {*/
/*  display: block;*/
/*  text-align: center;*/
/*  padding: 16px;*/
/*  transition: all 0.3s ease;*/
/*  color: white;*/
/*  font-size: 20px;*/
/*}*/

/*.icon-bar a:hover {*/
/*  background-color: #000;*/
/*}*/

/*.facebook {*/
/*  background: #3B5998;*/
/*  color: white;*/
/*}*/

/*.twitter {*/
/*  background: #55ACEE;*/
/*  color: white;*/
/*}*/

/*.google {*/
/*  background: #dd4b39;*/
/*  color: white;*/
/*}*/

/*.linkedin {*/
/*  background: #007bb5;*/
/*  color: white;*/
/*}*/

/*.youtube {*/
/*  background: #bb0000;*/
/*  color: white;*/
/*}*/

/*.content {*/
/*  margin-left: 75px;*/
/*  font-size: 30px;*/
/*}*/
/*.chat-now-whatsapp{*/
/*    position: fixed;*/
/*    bottom: 127px;*/
/*    z-index: 1;*/
/*    margin-right:18px;*/
/*    right: 0;*/
/*    background: #4dc147;*/
/*    padding: 15px 16px;*/
/*    font-size: 25px;*/
/*    border-radius: 100px;*/
/*}*/
/*.chat-now-mail{*/
/*    position: fixed;*/
/*    bottom: 189px;*/
/*    z-index: 1;*/
/*    margin-right: 18px;*/
/*    right: 0;*/
/*    background: #838383;*/
/*    padding: 15px 16px;*/
/*    font-size: 23px;*/
/*    border-radius: 100px;*/
/*}*/
/*.chat-now-message{*/
/*    position: fixed;*/
/*    bottom: 249px;*/
/*    z-index: 1;*/
/*    margin-right: 18px;*/
/*    right: 0;*/
/*    background: #0083fe;*/
/*    padding: 15px 16px;*/
/*    font-size: 23px;*/
/*    border-radius: 100px;*/
/*}*/
/*.chat-now-whatsapp a i{color: #fff;}*/
/*.chat-now-mail a i{color: #fff;}*/
/*.chat-now-message a i{color: #fff;}*/

@import url('https://fonts.googleapis.com/css?family=Montserrat');
.menu {
  z-index: 999;
  position: fixed;
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.menu .share i.fa {
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  background-color: #0189b4;
  color:#fff;
  border-radius: 2px;
}
.menu .share:hover.bottom .submenu li:nth-child(1) {
  opacity: 1;
  top: 50px;
  transform: rotate(0deg);
  border-top: 1px dashed #ccc;
  transition-delay: 0.08s;
}
.menu .share:hover.bottom .submenu li:nth-child(2) {
  opacity: 1;
  top: 100px;
  transform: rotate(0deg);
  border-top: 1px dashed #ccc;
  transition-delay: 0.16s;
}
.menu .share:hover.bottom .submenu li:nth-child(3) {
  opacity: 1;
  top: 150px;
  transform: rotate(0deg);
  border-top: 1px dashed #ccc;
  transition-delay: 0.24s;
}
.menu .share:hover.bottom .submenu li:nth-child(4) {
  opacity: 1;
  top: 200px;
  transform: rotate(0deg);
  border-top: 1px dashed #ccc;
  transition-delay: 0.32s;
}
.menu .share:hover.bottom .submenu li:nth-child(5) {
  opacity: 1;
  top: 250px;
  transform: rotate(0deg);
  border-top: 1px dashed #ccc;
  transition-delay: 0.4s;
}
.menu .share:hover.left .submenu li:nth-child(1) {
  opacity: 1;
  left: -51px;
  transform: rotate(0deg);
  transition-delay: 0.5s;
  border-right: 1px dashed #ccc;
}
.menu .share:hover.left .submenu li:nth-child(2) {
  opacity: 1;
  left: -102px;
  transform: rotate(0deg);
  transition-delay: 1s;
  border-right: 1px dashed #ccc;
}
.menu .share:hover.left .submenu li:nth-child(3) {
  opacity: 1;
  left: -153px;
  transform: rotate(0deg);
  transition-delay: 1.5s;
  border-right: 1px dashed #ccc;
}
.menu .share:hover.left .submenu li:nth-child(4) {
  opacity: 1;
  left: -204px;
  transform: rotate(0deg);
  transition-delay: 2s;
  border-right: 1px dashed #ccc;
}
.menu .share:hover.left .submenu li:nth-child(5) {
  opacity: 1;
  left: -255px;
  transform: rotate(0deg);
  transition-delay: 2.5s;
  border-right: 1px dashed #ccc;
}
.menu .share:hover.right .submenu li:nth-child(1) {
  opacity: 1;
  left: 50px;
  transform: rotate(0deg);
  transition-delay: 0.08s;
  border-left: 1px dashed #ccc;
}
.menu .share:hover.right .submenu li:nth-child(2) {
  opacity: 1;
  left: 100px;
  transform: rotate(0deg);
  transition-delay: 0.16s;
  border-left: 1px dashed #ccc;
}
.menu .share:hover.right .submenu li:nth-child(3) {
  opacity: 1;
  left: 150px;
  transform: rotate(0deg);
  transition-delay: 0.24s;
  border-left: 1px dashed #ccc;
}
.menu .share:hover.right .submenu li:nth-child(4) {
  opacity: 1;
  left: 200px;
  transform: rotate(0deg);
  transition-delay: 0.32s;
  border-left: 1px dashed #ccc;
}
.menu .share:hover.right .submenu li:nth-child(5) {
  opacity: 1;
  left: 250px;
  transform: rotate(0deg);
  transition-delay: 0.4s;
  border-left: 1px dashed #ccc;
}
.menu .share:hover.top .submenu li:nth-child(1) {
  opacity: 1;
  top: -51px;
  transition-delay: 0.08s;
  transform: rotateY(0deg);
  border-bottom: 1px dashed #d9d9d9;
}
.menu .share:hover.top .submenu li:nth-child(2) {
  opacity: 1;
  top: -102px;
  transition-delay: 0.16s;
  transform: rotateY(0deg);
  border-bottom: 1px dashed #d9d9d9;
}
.menu .share:hover.top .submenu li:nth-child(3) {
  opacity: 1;
  top: -153px;
  transition-delay: 0.24s;
  transform: rotateY(0deg);
  border-bottom: 1px dashed #d9d9d9;
}
.menu .share:hover.top .submenu li:nth-child(4) {
  opacity: 1;
  top: -204px;
  transition-delay: 0.32s;
  transform: rotateY(0deg);
  border-bottom: 1px dashed #d9d9d9;
}
.menu .share:hover.top .submenu li:nth-child(5) {
  opacity: 1;
  top: -255px;
  transition-delay: 0.4s;
  transform: rotateY(0deg);
  border-bottom: 1px dashed #d9d9d9;
}
.menu .submenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.menu .submenu li {
  transition: all ease-in-out 0.5s;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  opacity: 0;
}
.menu .submenu li a {
  color: #212121;
  font-size: 25px;
}
.menu .submenu li a:hover i.fa {
  color: #fff;
}
.menu .submenu li a:hover.whatsapp i.fa {
  background-color: #10ba18;
}
.menu .submenu li a:hover.mail i.fa {
  background-color: #16627a;
}
.menu .submenu li a:hover.sms i.fa {
  background-color: #2979b8;
}
.menu .submenu li a:hover.facebook i.fa {
  background-color: #3b5999;
}
.menu .submenu li a:hover.twitter i.fa {
  background-color: #0283bb;
}
.menu .submenu li a:hover.googlePlus i.fa {
  background-color: #dd4b39;
}
.menu .submenu li a:hover.instagram i.fa {
  background-color: #e4405f;
}
.menu .submenu li a:hover.youtube i.fa {
  background-color: #f80000;
}

.menu .submenu li:nth-child(1) {
  transform: rotateX(45deg);
}
.menu .submenu li:nth-child(2) {
  transform: rotateX(90deg);
}
.menu .submenu li:nth-child(3) {
  transform: rotateX(135deg);
}
.menu .submenu li:nth-child(4) {
  transform: rotateX(180deg);
}
/*.menu.topLeft {
  top: 10px;
  left: 10px;
}
.menu.topRight {
  top: 10px;
  right: 10px;
}*/
.menu.bottomLeft {
  bottom: 20px;
  left: 10px;
}
.menu.bottomRight {
  bottom: 20px;
  right: 10px;
}
</style>
    
   
   <ul class="menu bottomRight">
  <li class="share top">
    <i style="font-size: 20px;" class="fa fa-comments-o" aria-hidden="true"></i>
    <ul class="submenu">
      <li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=+919992818228&text=I%27m%20interested%20in%20your%20car%20for%20sale&source=&data=&app_absent="><i class="fa fa-whatsapp" ></i></a></li>
      <li><a class="mail" href="mailto:info@wealthrun.in"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
      <li><a class="sms" href="sms://+919813537853?body=Hello%20World!"> <i class="fa fa-comment-alt"></i></a></li>
      <!--<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>-->
    </ul>
  </li>
</ul>

<!--  -->
<ul class="menu bottomLeft">
  <li class="share top">
    <i class="fa fa-share-alt"></i>
    <ul class="submenu">
      <li><a href="https://www.facebook.com/WealthRun-104742011198154" class="facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://www.linkedin.com/in/wealthrun-advisors-4518831b1/" class="twitter"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCRmInWKjCK0pd7ewLj0_SLA" class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
      <!--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>-->
      <!--<li><a href="#" class="googlePlus"><i class="fa fa-google-plus"></i></a></li>-->
      <li><a href="https://www.instagram.com/wealthrun.in" class="instagram"><i class="fa fa-instagram"></i></a></li>
    </ul>
  </li>
</ul>

    <!--<div class="chat-now-whatsapp">-->
    <!--     <a href="https://api.whatsapp.com/send?phone=+919992818228&text=I%27m%20interested%20in%20your%20car%20for%20sale&source=&data=&app_absent="><i class="fa fa-whatsapp" ></i></a> -->
    <!--</div>-->
    <!--<div class="chat-now-mail">-->
    <!--     <a href="mailto:info@wealthrun.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>-->
    <!--</div>-->
    <!--<div class="chat-now-message">-->
    <!--    <a href="sms://+919813537853?body=Hello%20World!"> <i class="fas fa-comment-alt"></i></a>-->
    <!--</div>-->
    <!--<div class="chat-now">-->
    <!--    <img src="img/chats.png" onclick="openForm()">-->
    <!--</div>-->
    
    <?php
        $referrer = (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $open = ((isset($_SESSION['error']) && $_SESSION['error']) || (isset($_SESSION['success']) && $_SESSION['success'])) ? 'block' : 'none';
        $open = (isset($_GET['message']) && $_GET['message']) ? 'block' : 'none';
    ?>
    <div class="chat-popup contact-bottom" id="myForm" style="display: <?=$open?>;">
        <h3>Contact Us</h3>
        <form method="post" action="action/contact_process1.php"  class="form-container">
            <?php
                if(isset($_SESSION['success']) && $_SESSION['success']){
                    echo '<p style="color: #00ff00;">'.$_SESSION['success'].'</p>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error']) && $_SESSION['error']){
                    echo '<p style="color: #ff0000;">'.$_SESSION['error'].'</p>';
                    unset($_SESSION['error']);
                }
                if(isset($_GET['message']) && $_GET['message']){
                    echo '<p style="color: #00ff00;">'.$_GET['message'].'</p>';
                }
            ?>
            <input type="hidden" name="" value="">
            <input type="hidden" name="page" value="<?=$referrer?>">
            <!--<label for="name"><b>Name</b></label>-->
            <input type="text" placeholder="Your Name" name="name" class="chat-popupsm" required>
            <!--<label for="name"><b>Mobile Number</b></label>-->
            <input type="text" placeholder="Phone Number" name="phone" class="chat-popupsm" required>
            <!--<label for="email"><b>Email</b></label>-->
            <input placeholder="Your Email" type="email" name="email" class="chat-popupsm" required>
            <!--<label for="message"><b>Message</b></label>-->
            <textarea placeholder="Type message.." name="message" required></textarea>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            <button type="submit" class="btn">Send</button>
        </form>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    <footer id="footer" class="m-0">
        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col-md-3 col-lg-3 footer-links">
                    <h4 class="mb-4">Quick Links</h4>
                    <ul class="quick-links">
                        <li><a href="privacy-policy.php">Policy of Our Company</a></li>
                        <li><a href="terms-condition.php">Terms and Conditions</a></li>
                        <li><a href="refund.php">Refund and Cancellation Policy</a></li>
                        <li><a href="disclaimer.php">Disclaimer</a></li>
                        <li><a href="#">Security/SSL Certification</a></li>
                        <li><a href="#">ISO Certification</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 footer-links">
                    <h4 class="mb-4">Quick Links</h4>
                    <ul class="quick-links">
                        <li><a href="hra_cal.php">HRA Calculator</a></li>
                    </ul>
                </div>
                <!--<div class="col-md-4 col-lg-3">-->
                <!--    <div class="contact-details">-->
                <!--        <h4 class="mb-4">Wealthrun Contact</h4>-->
                <!--        <a class="text-decoration-none" href="tel:9992818228">-->
                <!--            <strong class=""> +91 9992818228</strong>-->
                <!--        </a>-->
                <!--        <a class="text-decoration-none" href="tel:9050620402">-->
                <!--            <strong class=""> +91 9050620402</strong>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-lg-3 text-md-center text-lg-left ml-lg-auto">
                    <h4 class="mb-4">Social Media</h4>
                    <ul class="social-icons">
                        <li class="social-icons-facebook">
                            <a href="https://www.facebook.com/WealthRun-104742011198154" target="_blank" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-icons-instagram">
                            <a href="https://www.instagram.com/wealthrun.in" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-icons-youtube">
                            <a href="https://www.youtube.com/channel/UCRmInWKjCK0pd7ewLj0_SLA" target="_blank" title="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 mb-2 add-clr">
                    <h4 class="mb-4">Contact Info</h4>
                    <p>WEALTHRUN ADVISORS PRIVATE LIMITED<br><b>CIN</b>: U74999HR2020PTC085965<br>DSS-29, SHOPPING COMPLEX, SECTOR 13<br>HISAR HARYANA 125005 IN<br><b>Email</b>: wealthrun.in@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center m-0">
                        <p>WealthRun © Copyright 2020. Design & Developed by <a href="https://havfly.com" target="_blank">HAVFLY</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <div class="icon-bar">-->
    <!--  <a href="https://www.facebook.com/WealthRun-104742011198154" class="facebook"><i class="fa fa-facebook"></i></a> -->
    <!--  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> -->
    <!--  <a href="#" class="google"><i class="fa fa-google"></i></a> -->
    <!--  <a href="https://www.linkedin.com/in/wealthrun-advisors-4518831b1/" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
    <!--  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> -->
    <!--</div>-->
    
    