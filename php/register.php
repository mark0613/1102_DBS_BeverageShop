<?php

require("User.php");
$response = [
    "status" => "fail",
];

if (!empty($_REQUEST["email"]) && !empty($_REQUEST["username"])
    && !empty($_REQUEST["password"]) && !empty($_REQUEST["phone"]) 
    && !empty($_REQUEST["type"])) {
    if (User::register($_REQUEST["email"], $_REQUEST["username"], 
        $_REQUEST["password"], $_REQUEST["phone"], $_REQUEST["type"])) {
        $response["status"] = "success";
    }
    else {
        // TODO : replace error messages
        $response["error"] = User::$error;
    }
}
else {
    $response["error"] = "不能有任何資料為空";
}
echo json_encode($response);