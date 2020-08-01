<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include("dbconnect.php");

/*Google lgoin api*/
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('445617771379-qmbi59o4j3n1chmc7kb1p0cmqjrao1gr.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('LioCdPc91x5554zJW8_-TI67');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://wealthrun.in/gmail.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');
/*Google lgoin api*/

	if(isset($_SESSION['signup_success'])){ ?>
	    <div class="alert alert-success alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Success!</strong> <?= $_SESSION['signup_success'];?>
	    </div>
	<?php
	}
	unset($_SESSION['signup_success']);
?>
<?php
	if(isset($_SESSION['already_exist'])){ ?>
	    <div class="alert alert-warning alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Warning!</strong> <?= $_SESSION['already_exist'];?>
	    </div>
	<?php
	}
	unset($_SESSION['already_exist']);
?>
<?php
	if(isset($_SESSION['wrong_cred'])){ ?>
	    <div class="alert alert-warning alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Warning!</strong> <?= $_SESSION['wrong_cred'];?>
	    </div>
	<?php
	}
	unset($_SESSION['wrong_cred']);
?>

<?php
	if(isset($_SESSION['not_reg'])){ ?>
	    <div class="alert alert-warning alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Warning!</strong> <?= $_SESSION['not_reg'];?>
	    </div>
	<?php
	}
	unset($_SESSION['not_reg']);
?>

<?php
	if(isset($_SESSION['email_sent'])){ ?>
	    <div class="alert alert-success alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Success!</strong> <?= $_SESSION['email_sent'];?>
	    </div>
	<?php
	}
	unset($_SESSION['email_sent']);
?>
 <?php
	if(isset($_SESSION['invalid_email'])){ ?>
	    <div class="alert alert-Warning alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Warning!</strong> <?= $_SESSION['invalid_email'];?>
	    </div>
	<?php
	}
	unset($_SESSION['invalid_email']);
?>
<?php
	if(isset($_SESSION['update_pass'])){ ?>
	    <div class="alert alert-success alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>success!</strong> <?= $_SESSION['update_pass'];?>
	    </div>
	<?php
	}
	unset($_SESSION['update_pass']);
?>
<?php
	if(isset($_SESSION['payment_done'])){ ?>
	    <div class="alert alert-success alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>Thank you!</strong> <?= $_SESSION['payment_done'];?>
	    </div>
	<?php
	}
	unset($_SESSION['payment_done']);
?>
<?php
	if(isset($_SESSION['payment_failed'])){ ?>
	    <div class="alert alert-danger alert-dismissible">
	        <button type="button" class="close" data-dismiss="alert">&times;</button>
	        <strong>OOOPS...!</strong> <?= $_SESSION['payment_failed'];?>
	    </div>
	<?php
	}
	unset($_SESSION['payment_failed']);
?>

<style>
.modal {
  background-color: #95b2c8a3;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}
</style>

<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
	<div class="header-body border-top-0">
		<!--<div class="header-top header-top-default header-top-borders border-bottom-0">
			<div class="container h-100">
				<div class="header-row h-100">
					<div class="header-column justify-content-end">
						<div class="header-row">
							<nav class="header-nav-top">
								<ul class="nav nav-pills">
									<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
										<span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> Gurugram, Haryana, India</span>
									</li>
									<li class="nav-item nav-item-borders py-2">
										<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> +91 92050 56506</a>
									</li>
									<li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
										<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> admin@wealthrun.in</a>
									</li>
									<?php
									if(isset($_SESSION['full_name'])){ ?>
										<li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
											<a href="user-profile.php"><i class="far fa-user text-4 text-color-primary" style="top: 1px;"></i> <?=$_SESSION['full_name'];?></a>| <a href="action/logout.php">Logout</a>
										</li>
									<?php
									}
									else{ ?>
										<li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
											<a href="#myModal" data-toggle="modal" data-target=".log-sign"><i class="far fa-user text-4 text-color-primary" style="top: 1px;"></i> SignUp/SigIn</a>
										</li>
									<?php
									}
									?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="header-container container" style="height:90px;">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo">
							<a href="index.php">
								<img class="wr-logo log-responsive" id="main_logo" alt="wealthrun" src="img/wr-logo.png">
								<!--<h1 style="margin: 0;"><b>Wealthrun</b></h1>-->
							</a>&nbsp;
                            <h1 style="margin: unset;color: #009AC0;"><b>WealthRun</b></h1>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav order-2 order-lg-1">
							<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
										<li class="dropdown-full-color dropdown-secondary">
											<a class="nav-link active" href="index.php">
												Home
											</a>
										</li>
										<li class="dropdown-full-color dropdown-secondary">
											<a class="nav-link" href="about-us.php">
												About Us
											</a>
										</li>
										<li class="dropdown dropdown-full-color dropdown-secondary">
											<a class="nav-link dropdown-toggle dropdown-toggle" href="services.php">
												Services
											</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="income-tax.php">Income Tax Return</a></li>
												<li><a class="dropdown-item" href="gst.php">GST </a></li>
												<li><a class="dropdown-item" href="tds-and-tcs.php">TDS</a></li>
												<li><a class="dropdown-item" href="plan-investment.php">Plan your Investment</a></li>
												<li><a class="dropdown-item" href="start-business.php">Start your Business/Start-up</a></li>
												<!--<li><a class="dropdown-item" href="hra_cal.php">HRA Calculator</a></li>-->
											</ul>
										</li>
										<!--<li class="dropdown-full-color dropdown-secondary">
											<a class="nav-link" href="#">
												Education Video
											</a>
										</li>-->
										<li class="dropdown-full-color dropdown-secondary">
											<a class="nav-link" href="contact.php">
												Contact Us
											</a>
										</li>
										<?php
        									if(isset($_SESSION['full_name'])){ ?>
        										<li class="nav-item nav-item-borders pr-1 d-none1 d-md-inline-flex logout-btnn">
        											<a href="user-profile.php"><i class="far fa-user text-4 text-color-primary" style="top: 1px;"></i> <?=$_SESSION['full_name'];?></a>| <a href="action/logout.php">Logout</a>
        										</li>
        									<?php
        									}
        									else{ ?>
        										<li class="nav-item nav-item-borders py-2 pr-1 d-none1 d-md-inline-flex">
        											<a href="#myModal" data-toggle="modal" data-target=".log-sign" class="btn btn-primary btn-sigup"><i class="far fa-user text-4 text-color-primary" style="top: 1px;"></i>&nbsp; Sign In</a>
        										</li>
        									<?php
        									}
        								?>
									</ul>
								</nav>
							</div>
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
								<i class="fas fa-bars"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=================== Modal Section Start ===================-->
<div class="modal fade bs- log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" class="login-popup" data-toggle="tab">Log In</a></li>
                    <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-contents">
                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" method="post" action="action/login_process.php">
                            <fieldset>
                                <div class="group align-google">
                                    <a href="<?=$google_client->createAuthUrl()?>" class="social-signin google">Login with Google<!-- <i class="fab fa-google-plus"></i>--></a>
                                    <!--<button class="social-signin google">Log in with Google+ <i class="fab fa-google-plus"></i></button>-->
                                    <div class="or">OR</div>
                                </div>
                                
                                <!-- Sign In Form -->
                                <!-- Text input-->
                               <div class="group">
                                    <input required="" class="input" type="email" name="email">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Email *</label>
                                </div>
                                <!-- Password input-->
                                <div class="group">
                                    <input required="" name="password" class="input" type="password">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password *</label>
                                </div>
                                <em>minimum 6 characters</em>
                                <br>
                                <div class="forgot-link">
                                    <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> Forgot Password ?</a>
                                </div>
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="signin"></label>
                                    <div class="controls">
                                        <input type="submit" name="signin" class="btn btn-primary btn-block" value="Log In">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="signup">
                        <form class="form-horizontal" action="action/signup_process.php" method="post">
                            <fieldset>
                                <div class="group align-google">
                                    <a href="<?=$google_client->createAuthUrl()?>" class="social-signin google">Login with Google<!-- <i class="fab fa-google-plus"></i>--></a>
                                    <!--<button class="social-signin google">Log in with Google+ <i class="fab fa-google-plus"></i></button>-->
                                    <div class="or">OR</div>
                                </div>
                                <!-- Sign Up Form -->
                                 <!-- Text input-->
                                <div class="group">
                                    <input required="" class="input" name="full_name" type="text">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Name *</label>
                                </div>
                                <!-- Text input-->
                                <!--<div class="group">
                                    <input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Last Name</label>
                                </div>-->
                                <!-- Password input-->
                                <div class="group">
                                    <input required="" class="input" name="email" type="email">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Email *</label>
                                </div>
                                <!-- Text input-->
                                <div class="group2">
                                    <input required="" class="input" type="tel" name="mobile">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Phone *</label>
                                </div>

                                <div class="group2">
                                    <input class="input" type="text" name="refer">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Referral Code (if any)</label>
                                </div>

                                <!-- Text input-->
                                <!--<div class="row">
                                    <div class="col-sm-6">
                                        <div class="group2">
                                            <select class="input" required name="business_type">
                                                <option value=""></option>
                                                <?php
/*                                                $query = mysqli_query($conn,"SELECT * FROM business_type");
                                                while($businesstype = mysqli_fetch_array($query)){
                                                    $busntyp = $businesstype['business_type']; */?>
                                                    <option value="<?/*=$busntyp;*/?>"><?/*=$busntyp;*/?></option>
                                                <?php
/*                                                }
                                                */?>
                                            </select>
                                            <label class="label" for="date">Business Type</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="group2">
                                            <input required="" class="input" name="business_name" type="text">
                                            <span class="highlight"></span><span class="bar"></span>
                                            <label class="label" for="date">Business Name</label>
                                        </div>
                                    </div>
                                </div>-->

                                <!-- Text input-->
                                <div class="group">
                                    <input required="" class="input" name="password" type="password">
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password *</label>
                                </div>
                                <em>1-8 Characters</em>
                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="confirmsignup"></label>
                                    <div class="controls">
                                        <input type="submit" name="sgnupbtn" class="btn btn-primary btn-block" value="Sign Up">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </center>
            </div>
        </div>
    </div>
</div>
<!--modal2-->
<div class="modal fade bs-" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" action="action/forgot_pass_process.php" method="post">
                    <fieldset>
                        <div class="group">
                            <input required="" class="input" name="email" type="email">
                            <span class="highlight"></span><span class="bar"></span>
                            <label class="label" for="date">Email *</label>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="forpassword"></label>
                            <div class="controls">
                                <input type="submit" name="forpassword" class="btn btn-primary btn-block" value="Send">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!--==================== Modal Section End ====================-->