<?php
header("Content-Type: application/json");
include("connection.php");

$student_id = $_POST[ 'student_id' ];

$updatequery = "select * from register_tbl where id= '".$student_id."'";
$updatequeryconnect = mysqli_query($con, $updatequery); 
// $return_data=;
      $show = mysqli_fetch_assoc($updatequeryconnect);
          $return_data = $show;
      

// if ($updatequeryconnect){
    //     $return_data = array(
    //         "status"=> "0",
    //         "message"=>"working"
    //     );
    // } else {
    //     $return_data = 1;
    // }

print(json_encode($return_data, JSON_PRETTY_PRINT));
