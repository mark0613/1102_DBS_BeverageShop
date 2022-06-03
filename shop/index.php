<?php

session_start(); 
require("../php/User.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeverageShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="../static/js/shop.js"></script>
    <link href="../static/css/base.css" rel="stylesheet">
    <link href="../static/css/shop.css" rel="stylesheet">
</head>

<body>
    <!-- 飲料店頁面 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../static/img/bootstrap-solid.svg" width="auto" height="30" alt="">
        <a class="navbar-brand" href="../">everageShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <form action="../search" method="get" class="form-inline navbar-nav pl-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ml-auto">

                <?php if(!empty($_COOKIE) && !empty($_COOKIE["type"])): ?>
                <ul class="navbar-nav mr-auto">
                    <?php if($_COOKIE["type"] == "customer"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../member">會員專區</a>
                    </li>
                    <?php elseif($_COOKIE["type"] == "merchant"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../merchant">商家後臺</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php endif; ?>

                <?php if(User::check()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../php/logout.php">Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="../register">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <header class="bg-dark py-3">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">IGEN飲料店</h1>
                        <label class="lead fw-normal text-white">台中市西屯區福星北路98號</label>
                        <br>
                        <label class="lead fw-normal text-white">(04)2222-7777</label>
                        <br>
                        <label class="lead fw-normal text-white">🕙營業時間:</label>
                        <label class="lead fw-normal text-white">24hr</label>
                        <br>
                        <label class="lead fw-normal text-white">🛵可外送</label>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5 cover" src="../static/img/default.jpg" alt="..." />
                </div>
            </div>
        </div>
    </header>


    <div class="center top">
        <h1>💥現正優惠中</h1>
    </div>

    <div class="container-fluid">

        <!-- <div class="row top">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card h-100 shadow border-0">
                    <div class="card-body p-4">                       
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><label>買十送十，打折到你骨折</label></a>
                    </div>  
                </div>  
            </div>
            <div class="col-sm-3"></div>
        </div>


        <div class="row top">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="card h-100 shadow border-0">
                    <div class="card-body p-4">                       
                           
                    </div>  
                </div>  
            </div>
            <div class="col-sm-3"></div>
        </div> -->

        <div class="center top">
            <h1>🧋菜單</h1>
        </div>
        <div class="row top">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">


                <!-- <div class="card-deck">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="center">
                                <label>奶茶</label>
                                <label>25元</label>
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                        </div>
                    </div>



                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="center">
                                <label>奶茶</label>
                                <label>25元</label>
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                        </div>
                    </div>



                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4">
                            <div class="center">
                                <label>奶茶</label>
                                <label>25元</label>
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                        </div>
                    </div>
                </div> -->


            </div>
            <div class="col-sm-2"></div>
            <!--菜單。改-->
            <!-- <div class="card-deck">
                <div class="card h-100 shadow border-0">
                    <div class="card-header center">
                        <h4>奶茶</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="center">
                            <label>100元</label>
                            <br>
                            <div class="input-group mb-3 justify-content-center">
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                            <div class="input-group">
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全糖</option>
                                    <option value="">半糖</option>
                                    <option value="">無糖</option>
                                </select>
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全冰</option>
                                    <option value="">半冰</option>
                                    <option value="">少冰</option>
                                    <option value="">微冰</option>
                                    <option value="">去冰（碎冰）</option>
                                    <option value="">完全去冰</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card h-100 shadow border-0">
                    <div class="card-header center">
                        <h4>奶茶</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="center">
                            <label>100元</label>
                            <br>
                            <div class="input-group mb-3 justify-content-center">
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                            <div class="input-group">
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全糖</option>
                                    <option value="">半糖</option>
                                    <option value="">無糖</option>
                                </select>
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全冰</option>
                                    <option value="">半冰</option>
                                    <option value="">少冰</option>
                                    <option value="">微冰</option>
                                    <option value="">去冰（碎冰）</option>
                                    <option value="">完全去冰</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card h-100 shadow border-0">
                    <div class="card-header center">
                        <h4>奶茶</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="center">
                            <label>100元</label>
                            <br>
                            <div class="input-group mb-3 justify-content-center">
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                            <div class="input-group">
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全糖</option>
                                    <option value="">半糖</option>
                                    <option value="">無糖</option>
                                </select>
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全冰</option>
                                    <option value="">半冰</option>
                                    <option value="">少冰</option>
                                    <option value="">微冰</option>
                                    <option value="">去冰（碎冰）</option>
                                    <option value="">完全去冰</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card h-100 shadow border-0">
                    <div class="card-header center">
                        <h4>奶茶</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="center">
                            <label>100元</label>
                            <br>
                            <div class="input-group mb-3 justify-content-center">
                                <input type='button' value='-' class="btn btn-outline-danger btn-sm">
                                <input type='text' name='quantity' value='0' class="in">
                                <input type='button' value='+' field='quantity' class="btn btn-outline-primary btn-sm">
                            </div>
                            <div class="input-group">
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全糖</option>
                                    <option value="">半糖</option>
                                    <option value="">無糖</option>
                                </select>
                                <select class="custom-select my-1 mr-sm-2" id="" name="">
                                    <option value="">全冰</option>
                                    <option value="">半冰</option>
                                    <option value="">少冰</option>
                                    <option value="">微冰</option>
                                    <option value="">去冰（碎冰）</option>
                                    <option value="">完全去冰</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--小視窗-->
        </div>
        <div>
            <div class="card h-100 shadow border-0">
                <div class="card-body p-4">
                    <h5 class="center bold">購物車</h5>
                    <div class="card">
                        <div class="card-header">
                            訂單編號:gg123
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">

                                    <label>奶茶</label>
                                    *
                                    <label>10</label>
                                    <label>$500</label>
                                    <br>
                                    <label>紅茶</label>
                                    *
                                    <label>10</label>
                                    <label>$200</label>
                                    <br>
                                    <label>紅茶</label>
                                    *
                                    <label>10</label>
                                    <label>$200</label>
                                    <br>
                                    <label>紅茶</label>
                                    *
                                    <label>10</label>
                                    <label>$200</label>

                                </div>
                                <div class="col-sm-6">
                                    <div class="down">
                                        <label>總花費</label>
                                        <label>$700</label>
                                        <button type="submit" class="btn btn-primary">接受</button>
                                        <button type="submit" class="btn btn-danger">拒絕</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="center top">
            <h1>📝填寫評價</h1>
        </div>
        <div class="row top">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <!-- <div class="card shadow border-0">
                    <div class="card-body">                         
                        good
                    </div>   
                </div>
                <br> -->
                <div class="card shadow border-0" id="com-show">
                    <div class="card-body p-4">
                        <div class="container-fluid ">
                            <div class="row top">
                                <div class="col-sm-10">
                                    <input type="text" id="" name="" class="form-control" placeholder="填寫評價" required>
                                </div>
                                <div class="col-sm-2">
                                    <button id="submit" class="btn btn-md btn-primary btn-block"
                                        type="button">提交</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2"></div>

        </div>
        <br>
    </div>


</body>

</html>