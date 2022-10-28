<?php
header("Content-Type: application/json");
include("connection.php");
$name = $_POST["name"];
$f_name = $_POST["f_name"];
$roll_no = $_POST["roll_no"]; 
$std_class = $_POST["std_class"];
$section = $_POST["section"];
$reg_id = $_POST["reg_id"];
$fees = $_POST["fees"];
$age = $_POST["age"];
$subjects = $_POST["subjects"];
$gender = $_POST["gender"];

$student_id = $_POST['student_id'];

$updatequery = "update register_tbl set name ='{$name}', f_name='{$f_name}', roll_no='{$roll_no}', class='{$std_class}', section='{$section}', reg_id='{$reg_id}', fees='{$fees}', age='{$age}', subjects='{$subjects}', gender='{$gender}' where id= '$student_id' ";
// print_r($updatequery); die();


// $updatequery = "select * from register_tbl where id= '".$student_id_upd."'";

$updatequeryconnect = mysqli_query($con, $updatequery);

if ($updatequeryconnect){
    $return_data = array(
        "status"=> "0",
        "message"=>"data has beeen updateed"
    );
} else {
    $return_data = 1;
}


print(json_encode($return_data, JSON_PRETTY_PRINT));
?>
