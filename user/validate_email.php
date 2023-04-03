<?php
include '../connection.php';

$userEmail=$_POST['user_email'];

$sqlQuery="SELECT * FROM users_table WHERE user_email='$userEmail'";

$resultOfQuery=$connectNow->query($sqlQuery);

if($resultOfQuery->num_rows>0)
{
    // num_rows == 1 - email already used
    echo json_encode(array("emailFound"=>true));
}else{
    // num_rows == 0 - email already NOT used(User will allowed to signUp successfully)
    echo json_encode(array("emailFound"=>false));
}
