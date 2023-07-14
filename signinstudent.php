<?php

include ('config/config.php');
$email = $_POST['email'];
$encpassword = $_POST['password'];
$password = md5($encpassword);

$sql1 = "SELECT * FROM `fbs_students` WHERE `regEmail`='$email' AND `regPassword`='$password'";
$query1 = $conn->query($sql1);
$row = $query1->rowCount();

if ($row > 0){
    $data = $query1->fetchAll();
    $userStatus = $data[0]['regStatus'];
    if ($userStatus == '0'){
        $_SESSION['regID'] = $data[0]['regID'];
        $_SESSION['timestamp']=time();
        $response['status'] = "200";
        $response['message'] = "Login Successfull..Redirecting You to dashboard in ";
    }elseif ($userStatus == '1'){
        $response['status'] = "401";
        $response['message'] = "Account Not Activated..Contact Administrator..   <a href='tel:+917219602045'>Click Here To Call</a>";
    }elseif ($userStatus == '2'){
        $response['status'] = "403";
        $response['message'] = "You are not Authorised to use this service..";
    }
}else{
    $response['status'] = "404";
    $response['message'] = "User Not Found With This Credential";
}
echo json_encode($response);