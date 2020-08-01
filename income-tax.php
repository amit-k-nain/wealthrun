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
  border: none;
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
    <title>ITR | Income Tax Return</title>
    <meta name="description" content="Wealthrun - Income Tax Return (ITR)">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/wr-logo.png" type="image/x-icon" />
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
                        <h1>Income Tax Return <br><small>Everything you need to know</small></h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Services</li>
                            <li class="active">Income tax return</li>
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
                                                    $sql = "SELECT * FROM services WHERE cat = 'ITR'";
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
        <br/><br/><br/>
        <div class="container">
            <h3>Income Tax Module</h3>
            <h5><b>Checklist for Filling Income Tax Return:</b></h5>
            <p>Basic detail like Name (as per PAN), Father’s Name (as per PAN), Date of Birth, PAN number, Aadhaar number, Passport number (optional), Voter Id (optional), address, mobile number and email id.</p>
            <button class="accordion">1. Detail of Income:</button>
            <div class="panel">
              <p>
                    <ul>
                      <li>For Salaried person: Form 16/ month wise salary slips.</li>
                      <li>For others: Detail of Income on self declaration basis</li>
                      <li><b>(for any help, contact us link)</b></li>
                    </ul>
              </p>
            </div>
            
            <button class="accordion">2. Detail of Other miscellaneous income:</button>
            <div class="panel">
              <p><ul>
                  <li>Saving Bank Interest: Name of Bank and Interest Amount</li>
                  <li>FD Interest: Name of Bank and Interest amount</li>
                  <li>Any other income on self declaration basis.</li>
              </ul></p>
            </div>
            
            <button class="accordion">3. Detail of deductions: Deductions for various investments can be claimed</button>
            <div class="panel">
              <p><ul>
                  <li>Contribution to PPF</li>
                  <li>Life Insurance Premium paid</li>
                  <li>Donation given</li>
                   <li>     Repayment of Home Loan</li>
                    <li>    Children’s Tuition fees</li>
                    <li>    ELSS/ Mutual Fund Investment</li>
              </ul></p>
            </div>
            <button class="accordion">4. Detail of All bank accounts: Single and joint account both</button>
            <div class="panel">
              <p><ul>
                  <li>Account number</li>
                   <li> IFSC Code</li>
                   <li> Address of Bank branch</li>
                  <li>  MICR code</li>
                   <li> BSR code</li>
              </ul></p>
            </div><br/><br/>
            <h5><b>PRICE AND PLANS FOR RETURN FILLING:</b></h5>
            <table id="customers">
                      <tr>
                        <th>Salary Income</th>
                        <th>Salary plus House Rent Income</th>
                        <th>Capital Gain Income</th>
                        <th>Professional/Freelancers and<br/> Small Business Income</th>
                        <th>Business Income</th>
                      </tr>
                      <tr>
                        <th>Plan A</th>
                        <th>Plan B</th>
                        <th>Plan C</th>
                        <th>Plan D</th>
                        <th>Plan E</th>
                      </tr>
                      <tr>
                        <th>Rs. 500</th>
                        <th>Rs. 1000</th>
                        <th>Rs. 1500</th>
                        <th>Rs. 2500</th>
                        <th>Rs. 5000</th>
                      </tr>
                      <tr>
                        <td>1. Salary/pension Income</td>
                        <td>1. Plan A</td>
                        <td>1. Plan B</td>
                        <td>1. Plan C</td>
                        <td>1. Plan C</td>
                      </tr>
                       <tr>
                        <td>2. Deductions</td>
                        <td>2. Income from House Property (Maximum 2 houses covered)</td>
                        <td>2. Capital gain on sale/purchase of stock, mutual funds or property. (Maximum 100 entries covered)</td>
                        <td>2. Income earned by Self-employed professionals and persons engaged as professionals by the organisations covered here. Applicable only where professional receipt is less than Rs. 50 Lakhs. (return filed under Section 44ADA)</td>
                        <td>2. Businesses having more than 200 transactions.</td>
                      </tr>
                       <tr>
                        <td>3. TDS on salary</td>
                        <td>3. Rs. 200 per house if income from more than 2 houses is received.</td>
                        <td>3. Rs. 5 per entry if income from sale/purchase of stock, mutual funds includes more than 100 entries.</td>
                        <td>3. Income from MSME businesses where Gross Turnover is less than Rs. 2 Crore. (Return filed under Section 44AD)</td>
                        <td>3. Preparation of P&L and balance sheet from the books of accounts of client covered here.</td>
                      </tr>
                       <tr>
                        <td>4. Interest Income from bank.</td>
                        <td></td>
                        <td></td>
                        <td>4. This plan does not include Tax Audit Returns.</td>
                        <td>4. Audit Fees and DSC not covered.</td>
                      </tr>
                      
            </table><br/>
            <p>1. Prices are exclusive of all taxes.</p>
            <p>2. For Assisted filling and customized price plan</p>
            <p>– Talk to our expert.</p>
        </div>

        <!--========= Income Tax Return (ITR) Section Start ===========-->
       
		<!--========= Income Tax Return (ITR) Section Start ===========-->
		
		 <!--========= Income Tax Return (ITR) Section Start ===========-->
        <br/><br/><br/>
        <div class="container">
            <h3>Income Tax</h3>
            <h5><b>Why Wealthrun for ITR Filling:</b></h5>
            <p>1. Personal Review by team of Chartered Accountant experts.</p>
            <p>2. Suggestions for future tax planning.</p>
            <p>3. Data safety is the extreme priority for us.</p>
            <p>4. We may not get it done in 10 minutes, but we assure 100% accuracy in the process.</p>
            <p>We reduce the chances of mismatch in data of ITR form and Form 16.</p><br/>
            <h5><b>Income Tax Slabs: AY 2020-21</b></h5>
            <button class="accordion">1. Individual Male/Female & HUF/AOP/BOI (Age < 60 years)</button>
            <div class="panel">
              <p>
                    <ul>
                      <li class="acc-point-left-right">Up to Rs. 2,50,000 <span>Nil</span></li>
                      <li class="acc-point-left-right">Rs. 2,50,001 to Rs. 5,00,000 <span>5%</span></li>
                      <li class="acc-point-left-right">Rs. 5,00,001 to Rs. 10,00,000   <span>20%</span></li>
                      <li class="acc-point-left-right">Above Rs. 10,00,000 <span>30%</span></li>
                      <li class="acc-point-left-right">Surcharge  <span>Note 1</span></li>
                      <li class="acc-point-left-right">Health & Education Cess <span>Note 5</span></li><br/>
                      <li>* Relief u/s 87A available up to Rs. 12,500 if total income up to Rs. 5,00,000</li>
                    </ul>
              </p>
            </div>
            
            <button class="accordion">2. Senior Citizen (Age 60 years or > 60 years but less than 80 years)</button>
            <div class="panel">
              <p><ul>
                      <li class="acc-point-left-right">Up to Rs. 3,00,000 <span>Nil</span></li>
                      <li class="acc-point-left-right">Rs. 3,00,001 to Rs. 5,00,000  <span>5%</span></li>
                      <li class="acc-point-left-right">Rs. 5,00,001 to Rs. 10,00,000     <span>20%</span></li>
                      <li class="acc-point-left-right">Above Rs. 10,00,000   <span>30%</span></li>
                      <li class="acc-point-left-right">Surcharge  <span>Note 1</span></li>
                      <li class="acc-point-left-right">Health & Education Cess <span>Note 5</span></li><br/>
                      <li>* Relief u/s 87A available up to Rs. 12,500 if total income up to Rs. 5,00,000</li>
                    </ul>
                </p>
            </div>
            
            <button class="accordion">3. Super Senior Citizen (Age 80 years or > 80 years)</button>
            <div class="panel">
              <p><ul>
                      <li class="acc-point-left-right">Up to Rs. 5,00,000  <span>Nil</span></li>
                      <li class="acc-point-left-right">Rs. 5,00,001 to Rs. 10,00,000     <span>20%</span></li>
                      <li class="acc-point-left-right">Above Rs. 10,00,000   <span>30%</span></li>
                      <li class="acc-point-left-right">Surcharge  <span>Note 1</span></li>
                      <li class="acc-point-left-right">Health & Education Cess <span>Note 5</span></li><br/>
                      <li>* Relief u/s 87A available up to Rs. 12,500 if total income up to Rs. 5,00,000</li>
                    </ul></p>
            </div>
            <button class="accordion">4. Domestic Company</button>
            <div class="panel">
              <p><ul>
                  <li class="acc-point-left-right">Tax Rate    <span>30% *</span></li>
                      <li class="acc-point-left-right">MAT      <span>18.2%</span></li>
                      <li class="acc-point-left-right">Surcharge    <span>Note 2</span></li>
                      <li class="acc-point-left-right">Health & Education Cess <span>Note 5</span></li><br/>
                      <li>* Tax Rate is 25% if turnover or gross receipt of the company in the previous year 2017-18 doesn’t exceed Rs. 400 crore</li>
              </ul></p>
            </div>
            <button class="accordion">5. Foreign Company</button>
            <div class="panel">
              <p><ul>
                  <li class="acc-point-left-right">Tax Rate    <span>40% </span></li>
                      <li class="acc-point-left-right">Surcharge    <span>Note 3</span></li>
                      <li class="acc-point-left-right">Health & Education Cess <span>Note 5</span></li>
              </ul></p>
            </div>
            <button class="accordion">6. Partnership Firm</button>
            <div class="panel">
              <p><ul>
                  <li class="acc-point-left-right">Tax Rate    <span>40% </span></li>
                      <li class="acc-point-left-right">Surcharge    <span>Note 3</span></li>
                      <li class="acc-point-left-right">Health & Education Cess <span>Note 5</span></li>
              </ul></p>
            </div><br/><br/>
            <h3><b>NOTE:</b></h3><br/>
            <h5><b>1. Surcharge on Individuals:</b></h5>
            <p>10% if total income exceeds Rs. 50 lacs, 15% if total income exceeds Rs. 1 Crore but doesn't exceed Rs. 2 Crore, 25% if total income exceeds Rs. 2 Crore but doesn't exceed Rs. 5 Crore, 37% if total income exceeds Rs. 5 Crore</p>
            <h5><b> 2. Surcharge on Domestic Companies</b></h5>
            <p>Surcharge: 7% if total income exceeds Rs. 1 Crore and 12% if total income exceeds Rs. 10 Crores</p>
            <h5><b>  3. Surcharge on Foreign Companies</b></h5>
            <p>Surcharge: 2% if total income exceeds Rs. 1 Crore and 5% if total income exceeds Rs. 10 Crores</p>
            <h5><b>  4. Surcharge on Partnership Firms</b></h5>
            <p>Surcharge at 12% if total income exceeds Rs. 1 Crore</p>
            <h5><b>  5. Health & Education cess</b></h5>
            <p>4% of Income Tax & Surcharge</p>
            <h5><b>Income Tax Slabs: AY 2021-22 As per Finance Act 2020, the taxpayers have been given option between two tax regimes. Summary of applicable tax rates in both the regimes is give hereunder:</b></h5>
            <table id="customers">
                      <tr>
                        <th>OLD REGIME</th>
                        <th>NEW REGIME</th>
                      </tr>
                      <tr>
                        <th>1. Individual Male/Female & HUF/AOP/BOI (Age < 60 years)</th>
                        <th>1. For All Individuals and HUF</th>
                      </tr>
                      <tr>
                        <td>Up to Rs. 2,50,000<span>Nil</span></td>
                        <td>Up to Rs. 2,50,000<span>Nil</span></td>
                      </tr>
                       <tr>
                        <td>Rs. 2,50,001 to Rs. 5,00,000<span>5%</span></td>
                        <td>Rs. 2,50,001 to Rs. 5,00,000<span>5%</span></td>
                      </tr>
                       <tr>
                        <td>Rs. 5,00,001 to Rs. 10,00,000<span>20%</span></td>
                        <td>s. 5,00,001 to Rs. 7,50,000<span>10%</span></td>
                      </tr>
                       <tr>
                        <td>Above Rs. 10,00,000<span>30%</span></td>
                        <td>Rs. 7,50,001 to Rs. 10,00,000<span>15%</span></td>
                      </tr>
                       <tr>
                        <td>Surcharge<span>Note 1</span></td>
                        <td>Rs. 10,00,001 to Rs. 12,50,000<span>20%</span></td>
                      </tr> <tr>
                        <td>Health & Education Cess<span>Note 5%</span></td>
                        <td>Rs. 12,50,001 to Rs. 15,00,000<span>25%</span></td>
                      </tr>
                       <tr>
                        <td>* Relief u/s 87A available up to Rs. 12,500 if total income up to Rs. 5,00,000<span></span></td>
                        <td>Above Rs. 15,00,000<span>30%</span></td>
                      </tr> <tr>
                        <td></td>
                        <td>Surcharge<span>Note 1</span></td>
                      </tr> <tr>
                        <td><b>2. Senior Citizen (Age 60 years or > 60 years but less than 80 years)</b><span></span></td>
                        <td>Health & Education Cess<span>Note 5</span></td>
                      </tr>
                       <tr>
                        <td>Up to Rs. 3,00,000<span>Nil</span></td>
                        <td></td>
                      </tr>
                       <tr>
                        <td>Rs. 3,00,001 to Rs. 5,00,000<span>5%</span></td>
                        <td><b>* List of exemptions and deductions that a taxpayer will have to give up, if the new tax regime is chosen over old regime.</b><span></span></td>
                      </tr>
                       <tr>
                        <td>Rs. 5,00,001 to Rs. 10,00,000<span>20%</span></td>
                        <td></td>
                      </tr>
                       <tr>
                        <td>Above Rs. 10,00,000<span>30%</span></td>
                        <td>1. Leave Travel Allowance (LTA)<span></span></td>
                      </tr>
                       <tr>
                        <td>Surcharge<span>Note 1</span></td>
                        <td>2. House Rent Allowance (HRA)<span></span></td>
                      </tr>
                       <tr>
                        <td>Health & Education Cess<span>Note 5</span></td>
                        <td>3. Deduction of Rs 15000 allowed from family pension u/s 57(iia).<span></span></td>
                      </tr>
                       <tr>
                        <td><b>* Relief u/s 87A available up to Rs. 12,500 if total income up to Rs. 5,00,000</b><span></span></td>
                        <td>4. Daily expenses in the course of employment<span></span></td>
                      </tr>
            </table><br/>
            <h4><b>NOTE:</b></h4>
            <h5><b>Surcharge on Individuals:</b></h5>
            <p>10% if total income exceeds Rs. 50 lacs, 15% if total income exceeds Rs. 1 Crore but doesn't exceed Rs. 2 Crore, 25% if total income exceeds Rs. 2 Crore but doesn't exceed Rs. 5 Crore, 37% if total income exceeds Rs. 5 Crore</p>
            <h5><b>Surcharge on Individuals:</b></h5>
            <p>Surcharge: 7% if total income exceeds Rs. 1 Crore and 12% if total income exceeds Rs. 10 Crores</p>
            <h5><b>3. Surcharge on Foreign Companies</b></h5>
            <p>Surcharge: 2% if total income exceeds Rs. 1 Crore and 5% if total income exceeds Rs. 10 Crores</p>
            <h5><b>4. Surcharge on Partnership Firms</b></h5>
            <p> Surcharge at 12% if total income exceeds Rs. 1 Crore</p>
            <h5><b>5. Health & Education cess</b></h5>
            <p>  4% of Income Tax & Surcharge.</p>
        </div>

		<!--========= Income Tax Return (ITR) Section Start ===========-->
		
		<!--============== HAR Calculator Section Start ===============-->
		<!--<section class="call-to-action call-to-action-default call-to-action-big content-align-center mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="col-sm-12">
                            <div class="call-to-action-btn">
                                <a href="hra_cal.php" target="_blank" class="btn btn-lg btn-primary HRA-calc" target="_blank">HRA Calculator</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--=============== HAR Calculator Section End ================-->

        <!--=============== Latest Blogs Section Start ================-->
        <?php
            $sqlp = "SELECT * FROM `blogs` WHERE `status`= 1 AND `cat` = 'ITR' order by `id` desc limit 0,6";
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
