<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");

// include database and object files
include_once '../config/database.php';
include_once '../objects/Student.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare server object
$student = new Student($db);
$ids = isset($_GET['id']) ? $_GET['id'] : die();

$oldAmount = $student->amount($ids);


// set ID property of server to be edited
$student->id = $ids;

// set server payment values
$student->paidAmount = $oldAmount + $_POST["paidAmount"];


// update the server
if($student->update()){
    echo '{';
    echo '"message": "Payment updated."';
    echo '}';
}

// if unable to update the server, tell the user
else{
    echo '{';
    echo '"message": "Unable to update payment."';
    echo '}';
}
?>