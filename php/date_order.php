<?php
require("Database.php");
$s_datepicker=json_encode($_GET['s_datepicker']);
$e_datepicker=json_encode($_GET['e_datepicker']);

$arr = [
    "status" => "fail",
];


$select = "SELECT * FROM orders WHERE order_time BETWEEN $s_datepicker AND $e_datepicker";


$result = Database::$connect->query($select);
$i =0;
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $arr["status"] = "success";
        $arr['data'][$i] = $row;
        $i+=1;
        
    }
    print_r(json_encode($arr));
    
?>