<?php
header("Content-Type: application/json");
include("connection.php");

$student_id_del = $_POST['student_id_del'];

$deletequery = "delete from register_tbl where id= '" . $student_id_del . "'";
$deletequeryconnect = mysqli_query($con, $deletequery);
// $return_data=;
//   $show = mysqli_fetch_assoc($deletequeryconnect);
//       $return_data = $show;


if ($deletequeryconnect) {
    $return_data = array(
        "status" => "0",
        "message" => "working"
    );
} else {
    $return_data = 1;
}

print(json_encode($return_data, JSON_PRETTY_PRINT));
