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

// prepare student object
$student = new Student($db);
$ids = isset($_GET['id']) ? $_GET['id'] : die();



// set ID property of student to be edited
$student->id = $ids;

// set student payment values
$student->paidAmount = $_POST["paidAmount"];


// update the student
if($student->update()){
    echo '{';
    echo '"message": "Payment updated."';
    echo '}';
}

// if unable to update the student, tell the user
else{
    echo '{';
    echo '"message": "Unable to update payment."';
    echo '}';
}
?>