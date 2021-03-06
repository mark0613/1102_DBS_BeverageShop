<?php

session_start(); 
require("../php/User.php");
if (!User::check()) {
    header("Location: ../");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeverageShop</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- date picker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
    </script>

    <!-- multiple select -->
    <!-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../static/css/app.css" rel="stylesheet" >
    <link href="../static/css/base.css" rel="stylesheet">
    <link href="../static/css/merchant.css" rel="stylesheet">
    <script src="../static/js/app.js"></script>
    <script src="../static/js/merchant.js"></script>
</head>

<body class="over">
    <!-- ???????????? -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../static/img/bootstrap-solid.svg" width="auto" height="30" alt="">
        <a class="navbar-brand" href="../">everageShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="" method="get" class="form-inline navbar-nav pl-0 mr-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ml-auto">
                <?php if(!empty($_COOKIE) && !empty($_COOKIE["type"])): ?>
                <ul class="navbar-nav mr-auto">
                    <?php if($_COOKIE["type"] == "customer"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../member">????????????</a>
                    </li>
                    <?php elseif($_COOKIE["type"] == "merchant"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../merchant">????????????</a>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-light sidebar">
                <div class="nav flex-column nav-pills nav-fill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h3 class="nav_title">??????</h3>
                    <a class="nav-link sidebar_font center active" id="v-pills-record-tab" data-toggle="pill" href="#v-pills-record" role="tab" aria-controls="v-pills-record" aria-selected="True">??????</a>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">??????</a>
                    <!-- <a class="nav-link sidebar_font center" id="v-pills-discount-tab" data-toggle="pill" href="#v-pills-discount" role="tab" aria-controls="v-pills-discount" aria-selected="false">??????</a> -->
                    <a class="nav-link sidebar_font center" id="v-pills-menu-tab" data-toggle="pill" href="#v-pills-menu" role="tab" aria-controls="v-pills-menu" aria-selected="false">??????</a>
                    <a class="nav-link sidebar_font center" id="v-pills-rate-tab" data-toggle="pill" href="#v-pills-rate" role="tab" aria-controls="v-pills-rate" aria-selected="false">??????</a>
                    <a class="nav-link sidebar_font center" href="#" id="link-shop-page">??????</a>
                </div>
                
            </div>

            <div class="col-sm-10 pre-scrollable high">
                <div class="tab-content" id="v-pills-tabContent">
                    <!--??????-->
                    <div class="tab-pane fade show active" id="v-pills-record" aria-labelledby="v-pills-record" role="tabpanel">
                        <h3 class="center title">??????????</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    
                                    <div class="card h-100 shadow border-0" id="not-accepted-orders">
                                    </div>

                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                            <br>
                            <!-- ???????????? -->
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="card h-100 shadow border-0">
                                        <div class="card-body p-4">
                                            <h5 class="center bold">????????????????</h5>
                                            <div class="card">
                                                <div>
                                                    <form class="title ">
                                                        <label>????????????????????????????</label>
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <label>???</label>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <div class="input-group date" id='datepicker'>
                                                                            <input type="date" class="form-control" id="startDate"/>
                                                                            <span class="input-group-addon">
                                                                                <i class="glyphicon glyphicon-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <div class="row">
                                                                    <div class="col-1">
                                                                        <label>???</label>
                                                                    </div>
                                                                    <div class="col-11">
                                                                        <div class="input-group date" id='datepicker'>
                                                                            <input type="date" class="form-control" id="endDate"/>
                                                                            <span class="input-group-addon">
                                                                                <i class="glyphicon glyphicon-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-2">
                                                                <button type="button" class="btn btn-primary" onclick="searchOrder('date')">??????</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div>
                                                    <form class="top title">
                                                        <label>????????????????????????????</label>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input name="order-id" id="order-id" type="text" placeholder="???????????????" class="form-control mx-sm-2">
                                                            </div>

                                                            <div class="col">
                                                                <button type="button" class="btn btn-primary" onclick="searchOrder('id')">??????</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>

                    <!--??????-->
                    <!-- <div class="tab-pane fade" id="v-pills-discount" aria-labelledby="v-pills-discount" role="tabpanel">
                        <h3 class="center title">??????????</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <form>
                                        <div class="card h-100 shadow border-0">
                                            <div class="card-body p-4">
                                                <div class="right">
                                                    <button type="submit" class="btn btn-primary">??????</button>
                                                    <button type="submit" class="btn btn-danger">??????</button>
                                                </div>
                                                <br>

                                                <div class="card border-dark">
                                                    <div class="card-body p-4">
                                                        <input type="checkbox">
                                                        <a class="text-decoration-none link-dark" href="#!" target="_blank"><label>?????????????????????????????????</label></a>
                                                    </div>
                                                </div>
                                                <br>
                                                


                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>


                        </div>
                    </div> -->

                    <!--??????-->
                    <div class="form-group top tab-pane fade" id="v-pills-profile" aria-labelledby="v-pills-profile" role="tabpanel">
                        <p class="title center">????????????????</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2"></div>

                                <div class="col-sm-8">
                                    <div class="card h-100 shadow border-0">
                                        <form method="post" class="card-body p-4" id="form-merchant-info" enctype="multipart/form-data">
                                            <div class="form-group center">
                                                <img src="../static/img/default.jpg"  id="shop-photo" width="500px">
                                                <input type="file" class="form-control-file" id="photo" name="photo">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>??????</label>
                                                <input class="form-control" name="m_name" id="m_name" value="">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>??????</label>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <label>??????</label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-control" name="address_city" id="address_city" value="">
                                                        </div>
                                                        <div class="col-1">
                                                            <label>??????</label>
                                                        </div>
                                                        <div class="col-2">
                                                            <input class="form-control" name="address_district" id="address_district" value="">
                                                        </div>
                                                        <div class="col-1">
                                                            <label>??????</label>
                                                        </div>
                                                        <div class="col-5">
                                                            <input class="form-control" name="address_detail" id="address_detail" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>??????</label>
                                                <input class="form-control" name="m_phone" id="m_phone" value="">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>?????????</label>
                                                <input class="form-control" name="manager_name" id="manager_name" value="">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>???????????????</label>
                                                <input class="form-control" name="manager_phone" id="manager_phone" value="">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>????????????</label>
                                                <div class="container">
                                                    <div class="row">
                                                        <input class="form-control col-5" name="opening_hours_start" id="opening_hours_start" value="">
                                                        <span class="col-2 center">~</span>
                                                        <input class="form-control col-5" name="opening_hours_end" id="opening_hours_end" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>????????????</label>
                                                <input class="form-control" name="delivery" id="delivery" value="">
                                            </div>
                                            <br>
                                            <div class="center">
                                                <button type="button" class="btn btn-primary" id="save">??????</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>

                    <!--??????-->
                    <div class="tab-pane fade center" id="v-pills-menu" aria-labelledby="v-pills-menu" role="tabpanel">
                        <p class="title center">??????????</p>
                        <div class="row top">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10" id = "showmenu">
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <br>
                        <div class="center">
                            <button type="submit" class="btn btn-primary open-window">??????</button>
                        </div>

                        <!-- window -->
                        <div class="window bg-light top-50">
                            <br>
                            <br>
                            <form method="post">
                                <br>
                                <div class="container-fluid">
                                    <div class="form-group row">
                                        <div class="col-2"></div>
                                        <div class="col-2">
                                            <label for="b_name">????????????</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="b_name" name="b_name" value="">
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2"></div>
                                        <div class="col-2">
                                            <label for="price">??????</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" id="price" name="price" value="">
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-2">
                                                <label for="sugar">????????????</label>
                                            </div>
                                            <div class="col-6">
                                            <select class="selectpicker multi-select" name="sugar[]" id="sugar-select" multiple
                                                data-live-search="true" placeholder="??????" data-actions-box="true" data-select-all-text='??????' data-deselect-all-text='??????'>
                                                <option value="0">??????</option>
                                                <option value="1">1??????</option>
                                                <option value="3">??????</option>
                                                <option value="5">??????</option>
                                                <option value="7">??????</option>
                                                <option value="10">??????</option>
                                            </select>
                                            </div>
                                            <div class="col-2"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-2">
                                                <label for="ice">????????????</label>
                                            </div>
                                            <div class="col-6">
                                            <select class="selectpicker multi-select" name="ice[]" id="ice-select" multiple
                                                data-live-search="true" placeholder="??????" data-actions-box="true" data-select-all-text='??????' data-deselect-all-text='??????'>
                                                <option value="0">????????????</option>
                                                <option value="1">?????????</option>
                                                <option value="3">??????</option>
                                                <option value="5">??????</option>
                                                <option value="7">??????</option>
                                                <option value="10">??????</option>
                                            </select>
                                            </div>
                                            <div class="col-2"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-4"></div>
                                        <div class="col-4 center">
                                            <button type="button" class="btn btn-secondary close-window">??????</button>
                                            <button type="button" class="btn btn-primary" onclick="addMenu()">??????</button>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--??????-->
                    <div class="tab-pane fade" id="v-pills-rate" aria-controls="v-pills-rate" role="tabpanel">
                        <div class="container-fluid">
                            <p class="title center">??????????????????????</p>
                            <div id = "show-mer-com">
                            </div>
                            <div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous" id="prebtn">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item" id="btn1"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next" id="nextbtn">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> 

                        </div>
                    </div>
                </div>

                <br><br><br><br><br>
            </div>
        </div>
    </div>
    <div class="black-cover"></div>
</body>

</html>