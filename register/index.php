<?php

require("../php/User.php");
if (User::check()) {
  header("Location: ../home");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeverageShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="../static/css/auth.css" rel="stylesheet">
    <script src="../static/js/app.js"></script>
    <script src="../static/js/register.js"></script>
</head>
<body>
    <div class="container-fluid " >
        <div class="row top">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <form class="form-signin" method="post" action="">
                    <div class="text-center">
                        <img class="mb-4" src="../static/img/bootstrap-solid.svg" alt="" width="auto" height="60px">
                        <h1 class="topic">Register</h1>
                        <br>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required>
                        <select class="custom-select my-1 mr-sm-2" id="type" name="type">
                            <option selected>選擇身分</option>
                            <option value="customer">會員註冊</option>
                            <option value="merchant">商家註冊</option>
                        </select>
                    </div>
                    <div id="warning" role="alert"></div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block" id="submit" type="button">註冊</button>
                    </div>
                </form>

            </div>
        <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>