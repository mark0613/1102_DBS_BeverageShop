<?php

require("Database.php");
if(!isset($_SESSION)) { 
    session_start(); 
} 
header('Content-Type: application/json; charset=utf-8');

$response = [
    "status" => "fail"
];

$u_id = $_SESSION["id"];
$b_name = $_REQUEST["b_name"];
$price = $_REQUEST["price"];
$sugar = $_REQUEST["sugar"];
$ice = $_REQUEST["ice"];

Database::$connect->autocommit(False);
$addMenu = "
    INSERT INTO menu_beverage
    (u_id, b_name, price)
    VALUES
    ('$u_id', '$b_name', '$price')
";
$res = Database::$connect->query($addMenu);
if (!$res) {
    Database::$connect->rollback();
    $response["error"] = "新增失敗";
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    exit;
}
$getId = "SELECT b_id FROM menu_beverage WHERE u_id='$u_id' AND b_name='$b_name'";
$result = Database::$connect->query($getId);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $b_id = $row["b_id"];
}
foreach($sugar as $s) {
    $addSugarOptions = "
        INSERT INTO sugar_type
        (b_id, sugar_value)
        VALUES
        ('$b_id', '$s')
    ";
    Database::$connect->query($addSugarOptions);
}
foreach($ice as $i) {
    $addIceOptions = "
        INSERT INTO ice_type
        (b_id, ice_value)
        VALUES
        ('$b_id', '$i')
    ";
    Database::$connect->query($addIceOptions);

}
Database::$connect->autocommit(True);

$response["status"] = "success";

echo json_encode($response, JSON_UNESCAPED_UNICODE);