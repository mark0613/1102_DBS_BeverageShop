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
    <link href="../static/css/w3.css" rel="stylesheet" >
    <link href="../static/css/member.css" rel="stylesheet">
</head>
<body>

    <!-- 會員專區 -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="w3-sidebar w3-light-grey w3-bar-block">
                    <h2 class="w3-bar-item">選單</h2>
                    <a href="#" class="w3-bar-item w3-button"><label>訂單紀錄</label></a>
                    <a href="#" class="w3-bar-item w3-button"><label>最愛店家</label></a>
                    <a href="#" class="w3-bar-item w3-button"><label>個人資料</label></a>
                    <a href="#" class="w3-bar-item w3-button"><label>評價紀錄</label></a>
                </div>
            </div>

            <div class="col-sm-10">

                <!--訂單記錄-->
                <label class="title">📋訂單紀錄</label>
                <div>
                    <form class="form-inline  title">
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
                </div>

                <div>
                    <form class="form-inline top title">
                        <label>🔎透過編號搜尋訂單:</label>
                        <input name="token" id="token" type="text" placeholder="請輸入編號" class="form-control mx-sm-2">
                        <button type="submit" class="btn btn-primary">搜尋</button>
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
                        Username:
                        <input name="username" id="username" value="廖一勳">
                        <br>
                        Email:
                        <input name="email" id="email" value="ggininder606@gmail.com">
                        <br>
                        Id:
                        <input name="id" id="id" value="IGEN">
                        <br>
                        Phone:
                        <input name="phone" id="phone" value="0912123123">
                        <br>
                        ChangePassword:
                        <input name="password" id="password" placeholder="輸入新密碼">
                        <br>
                        <button type="submit" class="btn btn-primary">變更</button>
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
                            <ul class="pagination">
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