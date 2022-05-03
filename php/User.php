<?php

require("Database.php");
class User {
    static function isValid($account, $password) {
        $hashPassword = hash("sha256", $password);
        $select = "SELECT Password FROM users WHERE email='$account' OR u_name='$account'";
        $result = Database::$connect->query($select);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)){
            if ($row["Password"] === $hashPassword) {
                return true;
            }
            break;
        }
        return false;
    }
    static function createSession($data) {
        session_start();
        foreach ($data as $key => $val) {
            $_SESSION[$key] = $val;
        }
    }
    static function createCookie($data) {
        foreach ($data as $key => $val) {
            setcookie($key, $val, time()+60*5, "/", "", 0);
        }
    }
    static function login($account, $password) {
        if (self::isValid($account, $password)) {
            $select = "SELECT (u_id, type) FROM users WHERE email='$account' OR u_name='$account'";
            $result = Database::$connect->query($select);
            $data = [];
            $token = bin2hex(random_bytes(16));  # 32 bits
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                $data["id"] = $row["u_id"];
                $data["type"] = $row["type"];
                $data["token"] = $token;
                self::createSession($data);
                self::createCookie($data);
                return true;
            }
        }
        return false;
    }
    static function logout() {
        if (isset($_SERVER['HTTP_REFERER'])) {
            foreach ($_COOKIE as $key=>$value) {
                setcookie($key, "", time()-3600, "/", "", 0);
            }
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
        else {
            header("Location: ./");
        }
    }
    static function check() {
        session_start();
        if (!empty($_COOKIE["token"])) {
            if (!empty($_SESSION["token"]) && $_SESSION["token"]===$_COOKIE["token"]) {
                return true;
            }
        }
        return false;
    }

    static function register($email, $username, $password, $type) {
        $hashPassword = hash("sha256", $password);
        $insert = "INSERT INTO users(email, u_name, password, type) VALUES('$email', '$username', '$hashPassword', '$type')";
        Database::$connect->query($insert);
        $getId = "SELECT u_id FROM users WHERE email='$email'";
        $result = Database::$connect->query($getId);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $u_id = $row["u_id"];
        }
        if ($type === "customer") {
            $insert = "INSERT INTO CUSTOMER(u_id) VALUES($u_id)";
            Database::$connect->query($insert);
            return;
        }
        if ($type === "merchant") {
            $insert = "INSERT INTO MERCHANT(u_id) VALUES($u_id)";
            Database::$connect->query($insert);
            return;
        }
    }
}

?>