<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/Student.php';

// get database connection
$database = new Database();
$db = $database->getConnection();


// initialize object
$student = new Student($db);
// set ID property of server to be edited
$student->id = isset($_GET['id']) ? $_GET['id'] : die();
$ids = isset($_GET['id']) ? $_GET['id'] : die();

// query products
$stmt = $student->readOne($ids);

$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){

    // server array
    $student_arr=array();
    $student_arr["data"]=array();

    // retrieve our table contents
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $student_info=array(
            "student_id" => $id,
            "name" => $name,
            "address" => html_entity_decode($address),
            "feesStatus" => $feesAmount <= $paidAmount ? "paid" : "due" ,
            "feesAmount" => $feesAmount,
            "paidAmount" => $paidAmount,
            "dueAmount" => $feesAmount - $paidAmount,

        );

        array_push($student_arr["data"], $student_info);
    }

    echo json_encode($student_arr);
}

else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>