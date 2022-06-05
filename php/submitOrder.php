<?php

require("Database.php");
if(!isset($_SESSION)) { 
    session_start(); 
} 
date_default_timezone_set('Asia/Taipei');

$response = [
    "status" => "fail"
];


$c_id = $_SESSION["id"];
$m_id = $_REQUEST["m_id"];
$time = date('Y-m-d H:i:s');
$generateOrder = "
INSERT INTO orders
(c_id, m_id, order_time)
VALUES
($c_id, $m_id, '$time');
";
Database::$connect->query($generateOrder);
$getOid = "SELECT o_id FROM orders WHERE c_id='$c_id' AND m_id='$m_id' AND order_time='$time'";
$result = Database::$connect->query($getOid);
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $o_id = $row["o_id"];
}
foreach($_REQUEST["orders"] as $b_id => $order) {
    $price = $order['price'];
    $quantity = $order['quantity'];
    $sugar = $order['sugar'];
    $ice = $order['ice'];
    $generateOrderDetail = "
        INSERT INTO order_beverage
        (o_id, b_id, sugar, ice, quantity)
        VALUES
        ($o_id, $b_id, $sugar, $ice, $quantity)
    ";
    $result = Database::$connect->query($generateOrderDetail);
}
$response["status"] = "success";

header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);