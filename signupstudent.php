<?php

include ('config/config.php');

$fullname = $_POST['regname'];
$email = $_POST['regemail'];
$encpassword = $_POST['regpassword'];
$password = md5($encpassword);
$program = $_POST['regprogram'];
$country =$_POST['regcountry'];
$phone =$_POST['regphone'];

$sql1 = "SELECT * FROM `fbs_students` WHERE `regEmail`='$email' OR `regPhoneNo` = '$phone'";
$query1 = $conn->query($sql1);
$row = $query1->rowCount();

if ($row > 0){
    $response['status'] = "401";
    $response['message'] = "User alredy exist with email id or phone no.";
}else{
    $sql = "INSERT INTO `fbs_students`(`regName`, `regEmail`, `regPassword`, `regProgram`, `regCountry`, `regPhoneNo`, `regStatus`) VALUES ('$fullname','$email','$password','$program','$country','$phone','0')";
    $query = $conn->query($sql);
        $response['status'] = "200";
        $response['message'] = "Registration Successfull";
}
echo json_encode($response);