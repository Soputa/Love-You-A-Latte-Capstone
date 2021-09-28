<?php
include 'db_connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$query = "INSERT INTO loveyoualatte(fname,lname,phone,email) VALUSE ('$fname','$lname','$phone','$email')";
<?php
