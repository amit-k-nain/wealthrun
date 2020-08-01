<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
<style>
.accordion {
  background-color: #eee;
  color: #fff;
  cursor: pointer;
  border:none;
  padding: 18px;
  width: 100%;
  text-align: left;
  outline: none;
  font-size: 21px;
  margin-bottom: 10px;
  background-color: #009dc4;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
  border:none !important;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
#customers td span{ 
    float:right;
    
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #9cdafe;
  color: white;
}
@media only screen and (min-width: 768px) {
.acc-point-left-right{
    width:30%;
}
}
.acc-point-left-right span{
    float:right;
}
</style>
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GST | WealthRun</title>
    <meta name="description" content="Wealthrun - GST">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-medical.css">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/skin-medical.css">		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>
</head>

<body>
<div class="body">
    <!--==================== Header Section Start =====================-->
    <?php include("header.php");?>
    <!--==================== Header Section End =====================-->

    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-primary page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Good Service Tax (GST)</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Services</li>
                            <li class="active">GST</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!--=========== Upload your documents Section Start ===========-->
        <section class="section" id="bg_upload">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xl-7 col-md-7">
                        <form action="action/upload_doc.php" name="login" id="login" method="post" enctype="multipart/form-data">
                            <div class="contactBox main_ban_row" id="upload_doc">
                                <h2>Upload your documents</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="group m-l-0">
                                            <label for="docs">Documents *</label>
                                            <input class="inputMaterial" type="file" id="docs" value="" multiple name="docs[]" required="">
                                            <span class="highlight1"></span>
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="group m-l-0">
                                            <label for="service_id">Service *</label>
                                            <select required name="service_id" class="inputMaterial">
                                                <option value="">Select Service</option>
                                                <?php
                                                $sql = "SELECT * FROM services WHERE cat = 'GST'";
                                                $res = mysqli_query($conn,$sql);
                                                $num = mysqli_num_rows($res);
                                                if($num > 0){
                                                    while ($fetchq = mysqli_fetch_array($res)){
                                                        echo '<option value="'.$fetchq['id'].'">'.$fetchq['servic'].' - Rs.'.$fetchq['s_cost'].'</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="group m-l-0">
                                            <textarea class="inputMaterial " placeholder="Type your message here.." id="message" name="message"></textarea>
                                            <span class="highlight1"></span>
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="entity" id="entity" value="Business Startup">
                                <input type="hidden" name="entity_id" id="entity_id" value="58">
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <img class="lazy loading m-t-30" data-src="https://www.indiafilings.com/images/process.gif" alt="loading..." src="https://www.indiafilings.com/images/process.gif">
                                        <?php if(isset($_SESSION['email'])){ ?>
                                            <button name="upload_doc" class="btn btn-block btn-rounded login__submit_pixel hover_custom m-t-30 m-b-0" type="submit">Upload and Make payment</button>
                                        <?php }else{ ?>
                                            <button name="signuptoupload" href="#myModal" data-toggle="modal" data-target=".log-sign" class="btn btn-block btn-rounded login__submit_pixel hover_custom m-t-30 m-b-0" type="button">Sign up to upload</button>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--============ Upload your documents Section End ============-->

        <!--=========  (GST) Section Start ===========-->
        <br/><br/><br/>
        <div class="container">
            <h3>GST Module</h3>
            <h5><b>Due Dates for various GST Returns</b></h5>
            <br/><br/>
            <table id="customers">
                      <tr>
                        <th>Returns</th>
                        <th>Details</th>
                        <th>Due Date</th>
                      </tr>
                      <tr>
                        <td>GSTR-3B</td>
                        <td>Turnover More than Rs 5 Crore</td>
                        <td>20th of Next Month</td>
                      </tr>
                       <tr>
                        <td></td>
                        <td>Others in State of Chhattisgarh, Madhya Pradesh, Gujarat, Maharashtra, Karnataka, Goa, Kerala, Tamil Nadu, Telangana or Andhra Pradesh or the Union territories of Daman and Diu and Dadra and Nagar Haveli, Puducherry, Andaman and Nicobar Islands and Lakshadweep</td>
                        <td>22nd of Next Month</td>
                      </tr>
                       <tr>
                        <td></td>
                        <td>Others in State of Himachal Pradesh, Punjab, Uttarakhand, Haryana, Rajasthan, Uttar Pradesh, Bihar, Sikkim, Arunachal Pradesh, Nagaland, Manipur, Mizoram, Tripura, Meghalaya, Assam, West Bengal, Jharkhand, Odisha or the Union territories of Jammu and Kashmir, Ladakh, Chandigarh and Delhi  </td>
                        <td>24th of Next Month</td>
                      </tr>
                       <tr>
                        <td>GSTR-1</td>
                        <td>Turnover Exceeding 1.5 Crores – Monthly Return</td>
                        <td>11th of Next Month</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Turnover upto 1.5 Crores – Quarterly Return</td>
                        <td>1 Month from the end of Quarter.</td>
                      </tr>
                      <tr>
                        <td>CMP-08</td>
                        <td>Composition Dealers</td>
                        <td>18th of Next month from the end of Quarter.</td>
                      </tr>
                       <tr>
                        <td>GSTR-9/9A/9C (FY 2018-19)</td>
                        <td>GST Annual Return and Audit</td>
                        <td>30th June 2020</td>
                      </tr>
                      
            </table><br/>
            <table id="customers">
                      <tr>
                        <h5><b>PRICE PLANS FOR MONTHLY AND QUARTERLY RETURN FILING</b></h5>
                      </tr>
                      <tr>
                        <th>PLAN A</th>
                        <th>PLAN B</th>
                        <th>PLAN C</th>
                      </tr>
                       <tr>
                        <td>Rs 300 per Month or<br/>
                        Rs 3000 per Year</td>
                        <td>Rs 500 per Month or<br/>
                        Rs 5000 per Year</td>
                        <td>Rs 400 per Quarter or Rs 1500 per Year</td>
                      </tr>
                       <tr>
                        <td>
                            <li>Monthly Return (GSTR3B)</li>
                            <li>Quarterly return(GSTR1)</li>
                            <li>Up to 50 invoices per month, Rs. 5 extra per invoice above 50 invoices. No limit if data is shared in excel format.</li>
                        </td>
                        <td>
                            <li>Monthly Returns(GSTR3B & GSTR1)</li>
                            <li>Up to 50 invoices per month, Rs. 5 extra per invoice above 50 invoices. No limit if data in shared in excel files.</li>
                        </td>
                        <td>
                            <li>Composition Dealers (CMP 08)</li>
                        </td>
                      </tr>
                       
            </table><br/>
            <table id="customers">
                      <tr>
                        <h5><b>PRICE PLANS FOR ONE TIME COMPLIANCES UNDER GST</b></h5>
                      </tr>
                      <tr>
                        <th>Details</th>
                        <th>Price</th>
                      </tr>
                       <tr>
                        <td>GST Registration for Individual/ Sole Proprietor</td>
                        <td>Rs 1000</td>
                      </tr>
                       <tr>
                        <td>GST Registration for Partnership/ Companies</td>
                        <td>Rs 1500*</td>
                      </tr>
                      <tr>
                        <td>Annual Return (GSTR 9) for turnover up to Rs 1.50 Cr</td>
                        <td>Rs 1000</td>
                      </tr>
                      <tr>
                        <td>Annual Return (GSTR 9) for turnover from<br/>

Rs 1.50 Cr – Rs 5 Cr</td>
                        <td>Rs 2000</td>
                      </tr>
                      <tr>
                        <td>Annual Return (GSTR 9) for turnover from<br/>

Rs 5 Cr – Rs 10 Cr</td>
                        <td>Rs 5000</td>
                      </tr>
                      <tr>
                        <td>Annual Return (GSTR 9) for turnover above Rs 10 Cr</td>
                        <td>Rs 10000</td>
                      </tr>
                       
            </table><br/>
        </div>

        <!--========= Income Tax Return (ITR) Section Start ===========-->
        <!--============ Upload your documents Section End ============-->
        <br/><br/><br/>
        <div class="container">
            <h3>GST Module</h3>
            <h5><b>Types of GST Returns</b></h5>
             <button class="accordion">1. GSTR-3B</button>
            <div class="panel">
              <p>
                    <ul>
                      <li>Monthly return containing details of taxes collected on outward supplies and details of taxes paid on input supplies. GSTR-3B is to be filed by all normal taxpayers registered under GST.</li>
                      <li>A registered taxable person shall furnish electronic summary of outward and inward supplies of goods and services for the tax period on or before the 20th,22nd or 24thof succeeding month.</li>
                    </ul>
              </p>
            </div>
            
            <button class="accordion">2. GSTR-1</button>
            <div class="panel">
              <p><ul>
                  <li>Details of outward supply of goods or services to be filed monthly for persons having aggregate turnover of more than Rs 1.50 Crores or quarterly for persons having aggregate turnover of less than Rs 1.50 Crores.</li>
                  <li>A registered taxable person shall furnish electronic statement of the details of outward supplies of goods and services for the tax period on or before the 11th of succeeding month for monthly returns and 1 month from the end of quarter for quarterly returns.</li>
              </ul></p>
            </div>
            
            <button class="accordion">3. GST CMP-08</button>
            <div class="panel">
              <p><ul>
                  <li>Quarterly self-assessed statement-cum-payment by composition dealers.</li>
              </ul></p>
            </div>
            <button class="accordion">4. GSTR-9</button>
            <div class="panel">
              <p><ul>
                  <li>GSTR 9 is an annual return to be filed once in a year by the registered taxpayers under GST. It is a consolidation of all the monthly or quarterly returns (GSTR-1, GSTR-2A, GSTR-3B) filed during that year.</li>
              </ul></p>
            </div>
            <button class="accordion">5. GSTR-9A</button>
            <div class="panel">
              <p><ul>
                  <li>GSTR-9A is the annual return to be filed by taxpayers who have registered under the Composition Scheme in a financial year. It is a consolidation of all the quarterly returns filed during that financial year.</li>
              </ul></p>
            </div>
            <button class="accordion">6. GSTR-9C</button>
            <div class="panel">
              <p><ul>
                  <li>GSTR 9C is a statement of reconciliation between the Annual returns in GSTR 9 filed for a Financial Year and the figures as per Audited Annual Financial Statements of the taxpayer.</li></ul></p>
            </div><br/><br/>
            <h5><b>GST Registration Documents Checklist:-</b></h5>
            <table id="customers">
                      <tr>
                        <th>Category of persons</th>
                        <th>Documents Required</th>
                      </tr>
                      <tr>
                        <td>Sole proprietor / Individual</td>
                        <td><li>1. PAN Card</li>
                        <li>2. Aadhaar Card</li>
                        <li>3. Photograph</li>
                        <li>4. Bank Account Details*</li>
                        <li>5. Address Details**</li>
                        </td>
                      </tr>
                      <tr>
                        <td>Partnership firm</td>
                        <td><li>1. PAN Card of Firm and all Partners</li>
                        <li>2. Aadhaar Card of all Partners</li>
                        <li>3. Copy of Partnership Deed</li>
                        <li>4. Photograph of all partners</li>
                        <li>5. Authorisation Letter for Authorised Signatory</li>
                        <li>6. Bank Account Details*</li>
                        <li>7. Address Details**</li>
                        </td>
                      </tr>
                      <tr>
                        <td>HUF</td>
                        <td><li>1. PAN Card of HUF</li>
                        <li>2. PAN Card and Aadhaar Card of Karta</li>
                        <li>3. Photograph of Karta</li>
                        <li>4. Bank Account Details*</li>
                        <li></li>5. Address Details**</li>
                        </td>
                      </tr>
                       <tr>
                        <td>Company (Public and Private) (Indian and foreign)</td>
                        <td><li>1.  PAN Card of Company and all Directors</li>

                            <li>2. Aadhaar Card of all Directors</li>
                            
                            <li>3. MOA/ AOA and Certificate of Incorporation of Company</li>
                            
                            <li>4. Photograph of all Directors</li>
                            
                            <li>5. Board Resolution for Authorised Signatory</li>
                            
                            <li>6. Bank Account Details*</li>
                            
                            <li>7. Address Details**</li>
                        </td>
                      </tr>
                       
            </table><br/>
            <p><b>*Bank account details:</b> A copy of cancelled cheque or a copy of passbook/bank statement (first and last page).</p>
            <h5><b>**Address Details:</b></h5>
            <p>1. Proof of Place of Business: Any one of following:</p>
            <li>Property Tax Receipt or</li>
            <li>Municipal Khata copy or</li>
            <li>Electricity bill copy</li>
            <p>1. Proof of Ownership:</p>
            <li>Ownership deed/document in case of owned property.</li>
          <li>Lease/rent agreement in case of leased/rented property.</li>
            <li>Consent letter/NOC from the owner in case of consent arrangement or shared property. </li>
        </div>
<br/>
        <!--========= Income Tax Return (ITR) Section Start ===========-->
       

        <!--=============== Latest Blogs Section Start ================-->
        <?php
        $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `cat` = 'GST' order by `id` desc limit 0,6";
        $resp = mysqli_query($conn,$sqlp);
        $nump = mysqli_num_rows($resp);
        if ($nump > 0){
            ?>
            <section class="white-section">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col align-center">
                            <h2 class="font-weight-semibold mb-0">Our Blogs</h2>
                            <p class="lead font-weight-normal" style="visibility: hidden;">List of our more blogs</p>
                        </div>
                    </div>
                    <div class="row">
                        <?php while ($fetch = mysqli_fetch_array($resp)){ ?>
                            <div class="col-md-4">
                                <a href="blog-details.php?bid=<?=$fetch['id']?>" class="text-decoration-none">
                                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                    <span class="thumb-info-side-image-wrapper">
                                        <img alt="<?=$fetch['title']?>" style="height: 257px;" class="img-fluid" src="admin/assets/img/blog/<?=$fetch['image']?>">
                                    </span>
                                    <span class="thumb-info-caption">
                                        <span class="thumb-info-caption-text p-xl">
                                            <h4 class="font-weight-semibold mb-1"><?=$fetch['title']?></h4>
                                            <p class="text-3"><?php echo substr($fetch['content'], 0, 100); ?> ...</p>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                        <?php } ?>
                        <!--<div class="col-md-4">
                            <a href="#" class="text-decoration-none">
                                <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                                    <span class="thumb-info-side-image-wrapper">
                                        <img alt="" class="img-fluid" src="img/demos/medical/gallery/blog-3.jpg">
                                    </span>
                                    <span class="thumb-info-caption">
                                        <span class="thumb-info-caption-text p-xl">
                                            <h4 class="font-weight-semibold mb-1">Good service tax</h4>
                                            <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hend...</p>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>-->
                    </div>
                    <div class="row pb-4">
                        <div class="col-lg-12 text-center">
                            <a href="blogs.php" class="btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold">view more</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>
        <!--================ Latest Blogs Section End =================-->


        <!--=============== Get in Touch Section Start ================-->

        <!--<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h3>"Get in Touch"</h3>
                            <p class="mb-0">CONNECT WITH US</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="contact.php" target="_blank" class="btn btn-lg btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--================ Get in Touch Section End =================-->

        <!--================== Footer Section Start ===================-->
        <?php include('comm_footer.php'); ?>
        <!--=================== Footer Section End ====================-->
    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src="master/less/skin-medical.less"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>
    <!-- Current Page Vendor and Views -->
    <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js"></script>
    <!-- Demo -->
    <script src="js/demos/demo-medical.js"></script>
    <!-- Theme Custom -->
    <script src="js/custom.js"></script>
    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-42715764-5', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    <script src="master/analytics/analytics.js"></script>
</div>
</body>
</html>
