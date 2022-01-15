<?php
include('connection.php');


$fullname     = $_POST['fullname'];
$username     = $_POST['username'];
$email        = $_POST['email'];
$password     = $_POST['password'];

$sql          = "INSERT INTO users( fullname,username, email, password) 
               VALUES ('$fullname','$username','$email','$password')";

if (mysqli_query($connect, $sql)) {
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}
mysqli_close($connect);