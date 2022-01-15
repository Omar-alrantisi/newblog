<?php
include('connection.php');


$name     = $_POST['name'];
$email     = $_POST['email'];
$number        = $_POST['number'];
$subject     = $_POST['subject'];
$message     = $_POST['message'];

$sql          = "INSERT INTO contact( name,email, number, subject,message) 
               VALUES ('$name','$email','$number','$subject','$message')";

if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($connect);