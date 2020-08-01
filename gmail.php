<?php

//index.php

//Include Configuration File
include('config.php');
include('dbconnect.php');
$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
    //It will Attempt to exchange a code for an valid authentication token.
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    if(!isset($token['error']))
    {
     
        //Set the access token used for requests
        $google_client->setAccessToken($token['access_token']);

        //Store "access_token" value in $_SESSION variable for future use.
        $_SESSION['access_token'] = $token['access_token'];

        //Create Object of Google Service OAuth 2 class
        $google_service = new Google_Service_Oauth2($google_client);

        //Get user profile data from google
        include("dbconnect.php");
        //Get user profile data from google
        $data = $google_service->userinfo->get();

        $email = $data['email'];
        $date = date('Y-m-d');
        $full_name =  $data['given_name'];
        $gmail_id =  $data['id'];
        $email_existed = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' ");
        $em_exist = mysqli_num_rows($email_existed);

        if($em_exist > 0){
            $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' && verify = 1");
            $getnum_rows = mysqli_num_rows($query);
            if($getnum_rows == 1){
                $alldetails = mysqli_fetch_array($query);
                $userid = $alldetails['user_id'];
                $full_name = $alldetails['full_name'];
                $mobile = $alldetails['mobile'];

                $_SESSION['userid'] = $userid;
                $_SESSION['email'] = $email;
                $_SESSION['full_name'] = $full_name;
                $_SESSION['mobile'] = $mobile;
                header("Location:user-profile.php");
            }
            //$_SESSION["already_exist"]= "Email already registered";
            //header("Location:index.php");
        }
        else{
            
                $sql = "INSERT INTO users (full_name, email, password, status, gmail_id, added_on, verify)
VALUES ('$full_name', '$email', '123456','1', '$gmail_id', '$date','1')";

if ($conn->query($sql) === TRUE) {
    $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' && verify = 1");
    $getnum_rows = mysqli_num_rows($query);
    if($getnum_rows == 1){
        $alldetails = mysqli_fetch_array($query);
        $userid = $alldetails['user_id'];
        $full_name = $alldetails['full_name'];
        $mobile = $alldetails['mobile'];

        $_SESSION['userid'] = $userid;
        $_SESSION['email'] = $email;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['mobile'] = $mobile;
        header("Location:user-profile.php");
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


            /*print_r($data);
            die();*/
            //Below you can find Get profile data and store into $_SESSION variable

        }

    }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
    //Create a URL to obtain user authorization
    $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="sign-in-with-google.png" /></a>';
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Login using Google Account</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
<div class="container">
    <br />
    <h2 align="center"> Login using Google Account</h2>
    <br />
    <div class="panel panel-default">
        <?php
        if($login_button == '')
        {
            echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
            echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
            echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
            echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
            echo '<h3><a href="logout.php">Logout</h3></div>';
        }
        else
        {
            echo '<div align="center">'.$login_button . '</div>';
        }
        ?>
    </div>
</div>
</body>
</html>
