<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'borderRadius': 0, 'colorPrimary': '#008fe2', 'colorSecondary': '#2d529f', 'colorTertiary': '#3aabdd', 'colorQuaternary': '#242424'}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HRA Calculator | Wealthrun</title>
    <meta name="description" content="Wealthrun - Income Tax Return (ITR)">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="css/demos/demo-medical.css">
    <link rel="stylesheet" href="css/skins/skin-medical.css">
    <script src="master/style-switcher/style.switcher.localstorage.js"></script>
    <link rel="stylesheet" href="css/custom.css">
    <script src="vendor/modernizr/modernizr.min.js"></script>
</head>
<body>
<div class="body">
    <?php include("header.php"); ?>

    <?php
    $totalSalary = 0;
    $basic = (isset($_POST['basic']) && $_POST['basic']) ? $_POST['basic'] : null;
    $da = (isset($_POST['da']) && $_POST['da']) ? $_POST['da'] : null;
    $hra = (isset($_POST['hra']) && $_POST['hra']) ? $_POST['hra'] : null;
    $rent = (isset($_POST['rent']) && $_POST['rent']) ? $_POST['rent'] : null;
    $isMetroPolitanCity = (isset($_POST['isMetroPolitanCity'])) ? $_POST['isMetroPolitanCity'] : null;

    $totalSalary = $basic + $da;

    if ($isMetroPolitanCity == 1){
        $basicSalaryPercent = (($totalSalary*50)/100);
    }elseif($isMetroPolitanCity == 0){
        $basicSalaryPercent = ($totalSalary*40)/100;
    }

    $renCal = $rent - (($totalSalary*10)/100);
    $renCal = ($renCal <= 0) ? 0 : $renCal;

    $taxExempted = min($hra,$renCal,$basicSalaryPercent);
    $taxCharge = $hra - $taxExempted;
    ?>

    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-primary page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>HRA Calculator</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-right breadcrumb-light">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">HRA Calculator</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <hr class="solid">
            <div class="row pt-4 mb-4">
                <div class="col-lg-6">
                    <h4 class="font-weight-semibold mb-4">HRA Exemption Calculator</h4>
                    <form id="contactForm" class="contact-form1" action="hra_cal.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="basic"><b>Basic salary received </b>*</label>
                                <input id="basic" name="basic" type="number" min="0" placeholder="Basic salary received" value="<?=$basic?>" data-msg-required="Please enter basic salary received." class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="da"><b>Dearness Allowance (DA) received </b>*</label>
                                <input id="da" name="da" min="0" type="number" placeholder="Dearness Allowance (DA) received" value="<?=$da?>" data-msg-required="Please enter DA received." class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="hra"><b>HRA received </b>*</label>
                                <input id="hra" name="hra" min="0" type="number" placeholder="HRA received" value="<?=$hra?>" data-msg-required="Please enter HRA received." class="form-control" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="rent"><b>Total Rent Paid </b>*</label>
                                <input id="rent" name="rent" min="0" type="number" placeholder="Total Rent Paid" value="<?=$rent?>" data-msg-required="Please enter total rent paid." class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city"><b>Do you live in Delhi, Mumbai, Kolkata or Chennai ?</b></label>
                            <div class="radio_container">
                                <span><input type="radio" name="isMetroPolitanCity" id="yes" value="1" <?php echo ($isMetroPolitanCity == 1) ? 'checked' : ''; ?> > <label for="yes"> Yes </label></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <span><input type="radio" name="isMetroPolitanCity" id="no" value="0" <?php echo ($isMetroPolitanCity == 0) ? 'checked' : ''; ?> > <label for="no"> No </label></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="Calculate" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div>
                <?php if($rent){ ?>
                    <div class="col-lg-6">
                        <div id="map_contact">
                            <div class="panel_header_13">
                                <span class="bullet"><i class="fa fa-paper-plane"></i></span>
                                <span class="text">Results</span>
                            </div>
                            <div class="success text-center">
                                <h4 class="text-primary"><strong>HRA chargeable to tax</strong></h4>
                                <p class="h1 m20">₹ <?=$taxCharge?></p>
                            </div>
                            <table class="table table-condensed smaller table-striped" style="margin-bottom:0px;">
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td><?php echo ($isMetroPolitanCity == 1) ? 50 : 40; ?>% of Basic Salary</td>
                                    <td align="right">₹ <?=$basicSalaryPercent?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>HRA received</td>
                                    <td align="right"><strong>₹ <?=$hra?></strong></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Excess of Rent paid over 10% of salary</td>
                                    <td align="right"><strong>₹ <?=$renCal?></strong></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                            <p><i class="fa fa-angle-double-right"></i> <b>The least of the above three is exempt from HRA</b></p>
                            <table class="table table-condensed smaller table-striped hra-table-2" style="border-bottom: 0px; margin-bottom:0px;">
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td><strong><i class="fa fa-check-circle-o"></i> Amount of Exempted HRA</strong></td>
                                    <td align="right"><strong>₹ <?=$taxExempted?></strong></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><strong><i class="fa fa-check-circle-o"></i> HRA chargeable to tax</strong></td>
                                    <td align="right"><strong>₹ <?=$taxCharge?></strong></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a href="hra_cal.php" style="float: right;" class="btn btn-primary btn-lg mb-5">Reset</a>
                    </div>
                <?php }else{ ?>
                    <div class="col-lg-6">
                        <div id="map_contact">
                            <h3>HRA Calculator</h3>
                            <p>Calculation result will be shown here.</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php include('comm_footer.php'); ?>
        </div>
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
        <script src="js/theme.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/views/view.contact.js"></script>
        <script src="js/demos/demo-medical.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/theme.init.js"></script>
        <script src="master/analytics/analytics.js"></script>
    </div>
</body>
</html>