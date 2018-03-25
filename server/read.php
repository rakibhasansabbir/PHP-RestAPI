<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/Student.php';

// instantiate database and server object
$database = new Database();
$db = $database->getConnection();
$project = explode('/', $_SERVER['REQUEST_URI'])[1];

// initialize object
$student = new Student($db);

// query products
$stmt = $student->read();
$num = $stmt->rowCount();
$test = 5454;



// check if more than 0 record found
if($num>0){

    // server array
    $student_arr=array();
    $student_arr["data"]=array();

    // retrieve our table contents

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $student_info=array(
            "id" => $id,
            "name" => $name,
            "address" => html_entity_decode($address),
            "paymentInfo" => "http://localhost/".$project."/server/read_one.php?id=".$id,

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
