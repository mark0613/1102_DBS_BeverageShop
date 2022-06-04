<?php

require("Database.php");

function getMenu($u_id) {
    $data = [];
    $getMenu = "SELECT * FROM menu_beverage WHERE u_id='$u_id'";
    $result = Database::$connect->query($getMenu);
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        array_push($data, [
            "b_id" => $row["b_id"],
            "menuname" => $row["b_name"],
            "menuprice" => $row["price"],
        ]);
    }
    return $data;
}

$response = [
    "status" => "fail"
];

if(!isset($_SESSION)) { 
    session_start(); 
} 
if (!empty($_REQUEST["m_id"])) {
    $response["status"] = "success";
    $response["data"] = getMenu($_REQUEST["m_id"]);
}
elseif (!empty($_SESSION["type"]) && $_SESSION["type"]==="merchant") {
    $response["status"] = "success";
    $response["data"] = getMenu($_SESSION["id"]);
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);