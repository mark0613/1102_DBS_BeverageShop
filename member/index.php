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
    <script src="../static/js/member.js"></script>
    <link href="../static/css/member.css" rel="stylesheet">
    <link href="../static/css/base.css" rel="stylesheet">
</head>
<body>

    <!-- 會員專區 -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-light">
                <div class="nav flex-column nav-pills nav-fill" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h3 class="nav_title">選單</h3>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">訂單紀錄</a>
                    <a class="nav-link sidebar_font center" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">最愛店家</a>
                    <a class="nav-link sidebar_font center" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">個人資料</a>
                    <a class="nav-link sidebar_font center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">評價紀錄</a>
                </div>
            </div>

            <div class="col-sm-10">
                <!--訂單記錄-->
                <label class="title">📋訂單紀錄</label>
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
                
                <!--最愛店家-->
                <div class="top">
                    <label class="title">❤️最愛店家</label>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">秉霖鮮果站</a>
                        <a href="#" class="list-group-item list-group-item-action">秉霖鮮果站</a>
                        <a href="#" class="list-group-item list-group-item-action">秉霖鮮果站</a>
                    </div>
                </div>

                <!--個人資料-->
                <div class="form-group top">
                        <label class="title">😀個人資料</label>
                        <br>
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username" id="username" value="廖一勳">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" id="email" value="ggininder606@gmail.com">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>ID</label>
                            <input class="form-control" name="id" id="id" value="IGEN">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" name="phone" id="phone" value="0912123123">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>ChangePassword</label>
                            <input class="form-control" name="password" id="password" placeholder="輸入新密碼">
                        </div>
                        <br>
                        <div class="center">
                            <button type="submit" class="btn btn-primary">變更</button>
                        </div>
                </div>

                <!--評價-->
                <label class="title">📝評價紀錄</label>
                <div class="container-fluid " >
                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
                                </div>  
                            </div>  
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                    <div class="row top">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">                       
                                    <h3>勳哥飲料店</h3>
                                    
                                    <label>竣任喝過都說讚</label>
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

      
      


</body>
</html>