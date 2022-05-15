<?php

require("Database.php");
$response = [
    "status" => "fail",
];

if (!empty($_GET['token'])) {
    $o_id = $_GET['token'];
    $select = "SELECT * FROM orders WHERE o_id = $o_id";
    $result = Database::$connect->query($select);
    $i = 0;
    while ($row = $result->fetch_responseay(MYSQLI_ASSOC)){
        $response["status"] = "success";
        $response['data'][$i] = $row;
        $i+=1;
        
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);


    
?>