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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="../static/js/order.js"></script>
    <link href="../static/css/base.css" rel="stylesheet">
</head>
<body>
    <!-- 訂單紀錄 -->
    <div class="top">
        <p class="title center">訂單查詢結果</p>
        <div class="container-fluid">
            <div class="row">  
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body p-4"> 
                            <label>編號：</label>
                            <label>kk2123232</label>
                            <br>
                            <label>店家：</label>
                            <label>IGEN飲料店</label>
                            <br>
                            <label>品項：</label>
                            <label>IGEN現榨</label>
                            <br>
                            <label>金額：</label>
                            <label>55元</label>
                            <br>
                            <label>狀態：</label>
                            <label>已接受</label>
                            <br>
                            <label>時間：</label>
                            <label>2022/04/05 14:22:30</label> 
                        </div>  
                    </div>  
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>


    
        <canvas id="canvas-bar-amount" width="50px" height="50px"></canvas>
        <canvas id="canvas-bar-price"  width="50px" height="50px"></canvas>
        <canvas id="canvas-pie-accept" width="50px" height="50px"></canvas>
        <canvas id="canvas-pie-cancel" width="50px" height="50px"></canvas>
        <canvas id="canvas-pie-pending"width="50px" height="50px"></canvas>

</body>
</html>