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
$project = explode('/', $_SERVER['REQUEST_URI'])[1];

// prepare server object
$student = new Student($db);
$ids = isset($_GET['id']) ? $_GET['id'] : die();

$oldAmount = $student->amount($ids);

if (is_numeric($_POST["paidAmount"])){
    $newAmount = $_POST["paidAmount"];
}else{

    $newAmount = 9999999999999999999999999999999;
}


// set ID property of server to be edited
$student->id = $ids;

// set server payment values
$student->paidAmount = $oldAmount + $newAmount;


// update the server
if($student->update()){
    echo '{';
    echo '"message": "Payment successfully updated."';
    echo '}';
    header("refresh:3; url= /".$project."/client/clientView.php?id=$ids");

}

// if unable to update the server, tell the user
else{
    echo '{';
    echo '"message": "Unable to update payment."';
    echo '}';
    header("refresh:3; url= /".$project."/client/clientPayment.php?id=$ids");
}
?>