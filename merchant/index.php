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
    <script src="../static/js/merchant.js"></script>
    <link href="../static/css/merchant.css" rel="stylesheet">
    <link href="../static/css/base.css" rel="stylesheet">
</head>
<body>
    <!-- 商家後臺 -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-light">
                <div class="nav flex-column nav-pills nav-fill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h3 class="nav_title">選單</h3>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">訂單</a>
                    <a class="nav-link sidebar_font center" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">優惠</a>
                    <a class="nav-link sidebar_font center" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">資料</a>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">菜單</a>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">評價</a>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">頁面</a>
                </div>
            </div>

            <div class="col-sm-10">

                <!--訂單-->
                <div>
                    <h3 class="center title">📋訂單</h3>
                    <div class="container-fluid">
                        <div class="row">  
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4"> 
                                        <h5 class="center bold">❗待確認的訂單</h5> 
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
                                                        <p class="right">2022/05/05 16:50</p>
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
                            <div class="col-sm-2"></div>
                        </div>
                        <br>
                        <div class="row">  
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4"> 
                                        <h5 class="center bold">🔎搜尋訂單</h5> 
                                        <div class="card">
                                            <div>
                                                <form class="title ">   
                                                    <label>🔎透過日期搜尋訂單</label>
                                                        
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="row">
                                                                <div class="col-1">
                                                                    <label>起</label>
                                                                </div>
                                                                <div class="col-11">
                                                                    <input type="date" class="form-control" stytle="" id="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="row">
                                                                <div class="col-1">
                                                                    <label>迄</label>
                                                                </div>
                                                                <div class="col-11">
                                                                    <input type="date" class="form-control" id="" name="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <button type="submit" class="btn btn-primary">搜尋</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <!--<div>
                                                <form class="form-inline">
                                                    <label>🔎透過日期搜尋訂單:</label>
                                                    <div class="form-group">
                                                        <select class="custom-select mx-sm-2">
                                                            <option selected>2022</option>
                                                            <option value="1">2023</option>
                                                            <option value="2">2024</option>
                                                            <option value="3">2025</option>
                                                        </select>
                                                        年
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="custom-select mx-sm-2">
                                                            <option selected>1</option>
                                                            <option value="1">2</option>
                                                            <option value="2">3</option>
                                                            <option value="3">4</option>
                                                        </select>
                                                        月
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="custom-select mx-sm-2">
                                                            <option selected>1</option>
                                                            <option value="1">2</option>
                                                            <option value="2">3</option>
                                                            <option value="3">4</option>
                                                        </select>
                                                        日
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">搜尋</button>
                                                </form>
                                            </div>-->

                                            <div>
                                                <form class="top title">
                                                    <label>🔎透過編號搜尋訂單</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input name="token" id="token" type="text" placeholder="請輸入編號" class="form-control mx-sm-2">
                                                        </div>
                                                        
                                                        <div class="col">
                                                            <button type="submit" class="btn btn-primary">搜尋</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--<div>
                                                <form class="form-inline top">
                                                    <label>🔎透過編號搜尋訂單:</label>
                                                    <input name="token" id="token" type="text" placeholder="請輸入編號" class="form-control mx-sm-2">
                                                    <button type="submit" class="btn btn-primary">搜尋</button>
                                                </form>
                                            </div>-->
                                        </div>
                                    </div>  
                                </div> 
                                
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>

                
                
                <!--優惠-->
                <div>
                    <h3 class="center title">💥優惠</h3>
                    <div class="container-fluid">
                        <div class="row">  
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <form>
                                    <div class="card h-100 shadow border-0">
                                        <div class="card-body p-4"> 
                                            <div class="right">
                                                <button type="submit" class="btn btn-primary">新增</button>
                                                <button type="submit" class="btn btn-danger">刪除</button>
                                            </div>
                                            <br>
                                            <div class="card border-dark">
                                                <div class="card-body p-4">  
                                                    <input type="checkbox">                
                                                    <a class="text-decoration-none link-dark" href="#!" target="_blank"><label>買十送十，打折到你骨折</label></a>
                                                </div>  
                                            </div>

                                        </div>  
                                    </div>
                                </form>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>

                <!--資料-->
                <div class="form-group top">  
                    <p class="title center">🏪商家資料</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-2"></div>
                                    
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">
                                        <br>
                                        <div class="form-group">
                                            <label>店名</label>
                                            <input class="form-control" name="shop" id="shop" value="秉霖鮮果屋">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>住址</label>
                                            <input class="form-control" name="address" id="address" value="台中市">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>電話</label>
                                            <input class="form-control" name="tel" id="tel" value="0412341234">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>管理人</label>
                                            <input class="form-control" name="manager" id="manager" value="pingleo桑">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>管理人手機</label>
                                            <input class="form-control" name="phone" id="phone" value="0912123123">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>營業時間</label>
                                            <input class="form-control" name="time" id="time" value="24hr">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>外送與否</label>
                                            <input class="form-control" name="waimai" id="waimai" value="是">
                                        </div>
                                        <br>
                                        <div class="center">
                                        <button type="submit" class="btn btn-primary">變更</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                </div>


                <!--菜單-->
                <div class="container">
                <p class="title center">🧋菜單</p>
                
                    <div class="row top">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                            <div class="card-deck">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">
                                        <div class="center">
                                            <label>奶茶</label>
                                            <label>25元</label>
                                            <button type="submit" class="btn btn-primary">編輯</button>
                                            <button type="submit" class="btn btn-danger">刪除</button>
                                        </div>
                                    </div>
                                </div>



                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">
                                        <div class="center">
                                            <label>奶茶</label>
                                            <label>25元</label>
                                            <button type="submit" class="btn btn-primary">編輯</button>
                                            <button type="submit" class="btn btn-danger">刪除</button>
                                        </div>
                                    </div>
                                </div>



                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">
                                        <div class="center">
                                            <label>奶茶</label>
                                            <label>25元</label>
                                            <button type="submit" class="btn btn-primary">編輯</button>
                                            <button type="submit" class="btn btn-danger">刪除</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <br>
                    <div class="center">
                        <button type="submit" class="btn btn-primary">新增</button>
                    </div>
                </div>

                <!--評價-->

                <div>
                    <div class="container-fluid">
                        <p class="title center">📝被給予的評價</p>
                        <div class="row top">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="card h-100 shadow border-0">
                                    <div class="card-body p-4">                       
                                        <label>超讚的啦</label>
                                    </div>  
                                </div>  
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        

                        
                        
                        <div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>