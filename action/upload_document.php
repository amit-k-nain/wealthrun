<?php
//session_start();
include("../dbconnect.php");

$service_id = $_POST['payment_id'];
$number = $_POST['number'];

for($i=0 ; $i<$number; $i++) {

    $tmpFilePath = $_FILES['doc'.$i]['tmp_name'];

    if ($tmpFilePath != ""){
        $a = time().$_FILES['doc'.$i]['name'];
        $newFilePath = "../uploaded_docs/" . $a;
        $upload = move_uploaded_file($tmpFilePath, $newFilePath);
    }

    $name = $_POST['name'.$i];
    $doc = $a;

    mysqli_query($conn,"INSERT INTO documents (service_id, name, doc) VALUES ('$service_id','$name','$doc')");
}

header('Location: ../order-history.php');
die;