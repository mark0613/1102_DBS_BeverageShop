<?php
require("Database.php");
$o_id=json_encode($_GET['token']);
$arr = [
    "status" => "fail",
];


$select = "SELECT * FROM orders WHERE o_id = $o_id";


$result = Database::$connect->query($select);
$i =0;
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $arr["status"] = "success";
        $arr['data'][$i] = $row;
        $i+=1;
        
    }
    print_r(json_encode($arr));
    
?>