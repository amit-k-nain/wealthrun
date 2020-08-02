<?php 
//session_start();
date_default_timezone_set('Asia/Kolkata');
include("dbconnect.php"); 
session_destroy();
header("Location:../index.php");
?>