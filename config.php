<?php

//config.php

//Include Google Client Library for PHP autoload file
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

//start session on web page
session_start();

?>