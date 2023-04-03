<?php
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrive/read data from mysql db

if(isset($_POST['event_title']))
{
    $eventTitle=$_POST['event_title'];
}else return;

if(isset($_POST['user_id']))
{
    $userId=$_POST['user_id'];
}else return;

$sqlQuery = "INSERT INTO events_table SET event_title='$eventTitle', user_id='$userId'";

$resultOfQuery=$connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}else{
    echo json_encode(array("success"=>false));
}
