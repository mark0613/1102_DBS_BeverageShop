<?php

require("Database.php");

$response = [
    "status" => "fail"
];

if(!isset($_SESSION)) { 
    session_start(); 
} 

if (!empty($_SESSION["token"]) && !empty($_SESSION["type"]) && $_SESSION["type"]==="customer") {
    $response["status"] = "success";
    $data = [];
    $u_id = $_SESSION["id"];
    $getInfo = "SELECT u_name, email, c_name, c_phone FROM users, customer WHERE users.u_id=customer.u_id AND users.u_id='$u_id'";
    $result = Database::$connect->query($getInfo);
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $data["username"] = $row["u_name"];
        $data["email"] = $row["email"];
        $data['name'] = $row["c_name"];
        $data["phone"] = $row["c_phone"];
    }
    $response["data"] = $data;
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);