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
    <link href="../static/css/auth.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid " >
        <div class="row top">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <form class="form-signin">
                    <div class="text-center">
                        <img class="mb-4" src="../static/img/bootstrap-solid.svg" alt="" width="auto" height="60px">
                        <h1 class="topic">Register</h1>
                        <br>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                        <input type="text" id="usename" name="username" class="form-control" placeholder="Username" required>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <br>
                    </div>
                
                    <div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
                    </div>
                </form>

            </div>
        <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>