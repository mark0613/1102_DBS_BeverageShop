<?php

require("../php/User.php");
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
    <script src="../static/js/home.js"></script>
    <link href="../static/css/home.css" rel="stylesheet">
    <link href="../static/css/base.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="../static/img/bootstrap-solid.svg" width="auto" height="30" alt="">
        <a class="navbar-brand" href="#">everageShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../member">會員專區</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../merchant">商家後臺</a>
                </li>
            </ul>

            <form action="" method="get" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav mr-auto">
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
    

    <!--
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    -->





    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Welcome to IGEN</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5 cover" src="../static/img/baseball.webp" alt="..." /></div>
            </div>
        </div>
    </header>






    <div class="container-fluid " >
        <div class="row top">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="center"><h1>TOP6  HOT🔥🔥</h1></div>
                <div class="container-fluid " >
                    <div class="row top">
                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>    
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>


                        <div class="col-sm-4">



                        <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>
                                
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>


                        </div>

                    </div>



                    <div class="row top">
                        <div class="col-sm-4">


 
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>
                                
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

  
                        </div>


                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>    
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>    
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>

                <div class="center"><h1>DISCOUNT💥💥</h1></div>
                <div class="container-fluid " >
                    <div class="row top">
                        <div class="col-sm-4">    
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>                               
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>   
                        </div>


                        <div class="col-sm-4">    
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>                               
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>   
                        </div>


                        <div class="col-sm-4">    
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>                               
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>   
                        </div>
                    </div>


                    <div class="row top">
                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>                              
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>                              
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top cover" src="../static/img/pingleo.jpg" alt="..."  />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>                        
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><div class="h3 card-title mb-3">IGEN 咖啡屋</div></a>
                                    <p class="card-text mb-0">高雄市鳳山區勳哥路87號</p>
                                    <p class="card-text mb-0">熱銷->一定是原萃啦</p>     
                                </div>                              
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <p>評論：</p>
                                            <div class="small">
                                                <p class="card-text mb-0">竣任喝過都說好</p>
                                                <p class="card-text mb-0">一定是大拇指的啦</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                            </div>
                        </div>

                    </div>


                </div>



                
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>






























    
    <!--<div class="container-fluid " >
        <div class="row top">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 bord-out">

                <form class="form-signin">
                    <div class="text-center">
                        <img class="mb-4" src="../../../static/img/bootstrap-solid.svg" alt="" width="auto" height="60px">
                        <h1 class="topic">！！！熱銷！！！</h1>
                        
                    </div>
                    <div class="container-fluid " >
                        <div class="row top">
                            <div class="col-sm-4 bord card">
                                
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <p>一定是大拇指的拉</p>
                                        <p>竣任喝過都說讚</p>
                                    </div>
                                
                            </div>

                            
                            <div class="col-sm-4 bord card">
                                
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <p>一定是大拇指的拉</p>
                                        <p>竣任喝過都說讚</p>
                                    </div>
                                
                            </div>
                            
                            <div class="col-sm-4 bord card">
                                
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <p>一定是大拇指的拉</p>
                                        <p>竣任喝過都說讚</p>
                                    </div>
                                
                            </div>
                        </div>
                        


                        <div class="row top">
                        <div class="col-sm-4 bord card">
                                
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <p>一定是大拇指的拉</p>
                                        <p>竣任喝過都說讚</p>
                                    </div>
                                
                            </div>
                            <div class="col-sm-4 bord card">
                                
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <p>一定是大拇指的拉</p>
                                        <p>竣任喝過都說讚</p>
                                    </div>
                                
                            </div>
                            <div class="col-sm-4 bord card">
                                
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <p>一定是大拇指的拉</p>
                                        <p>竣任喝過都說讚</p>
                                    </div>
                                
                            </div>
                        </div>
        
                    </div>
                
                    
                </form>

            </div>
            <div class="col-sm-2"></div>
        </div>
        












        <div class="row top">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 bord-out">

                <form class="form-signin">
                    <div class="text-center">
                        <img class="mb-4" src="../../../static/img/bootstrap-solid.svg" alt="" width="auto" height="60px">
                        <h1 class="topic">！！！優惠 限時下殺！！！</h1>
                        
                    </div>
                    <div class="container-fluid " >
                        <div class="row top">
                            <div class="col-sm-5 bord card">
                                <form class="form-signin">
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <h3>打到你骨折</h3>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-5 bord card">
                                <form class="form-signin">
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <h3>打到你骨折</h3>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        


                        <div class="row top">
                        <div class="col-sm-5 bord card">
                                <form class="form-signin">
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <h3>打到你骨折</h3>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-2 "></div>
                            <div class="col-sm-5 bord card">
                                <form class="form-signin">
                                    <div class="text-center">
                                        
                                        <h1 class="topic">IGEN飲料店</h1>
                                        <label>台中市西屯區福星北路98號</label>
                                        <h3>原萃</h3>
                                        <h3>打到你骨折</h3>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
        
                    </div>
                
                    
                </form>

            </div>
            <div class="col-sm-2"></div>
        </div>
        
    </div>-->
</body>
</html>