<?php

require("Database.php");
$response = [
    "status" => "fail",
];

$data = [];
if (!empty($_REQUEST['o_id'])) {
    $o_id = $_REQUEST['o_id'];
    $getOrders = "SELECT * FROM orders, merchant WHERE o_id=$o_id AND m_id=u_id";
}
if (!empty($_REQUEST["startDate"]) && !empty($_REQUEST["endDate"])) {
    $startDate = $_REQUEST["startDate"];
    $endDate = $_REQUEST["endDate"];
    $getOrders = "SELECT * FROM orders, merchant WHERE m_id=u_id AND order_time BETWEEN '$startDate' AND '$endDate'";
    
}

$result = Database::$connect->query($getOrders);
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    $id=$row["o_id"];
    $getOrderDetail = "SELECT * FROM order_beverage, menu_beverage WHERE o_id=$id AND order_beverage.b_id=menu_beverage.b_id";
    $res = Database::$connect->query($getOrderDetail);
    $tmp = [
        "order" => $row,
        "orderDetail" => [],
    ];
    while ($r = $res->fetch_array(MYSQLI_ASSOC)){
        array_push($tmp["orderDetail"], $r);
    }
    array_push($data, $tmp);
}

$response["data"] = $data;
$response["status"] = "success";



header('Content-Type: application/json; charset=utf-8');
echo json_encode($response, JSON_UNESCAPED_UNICODE);
