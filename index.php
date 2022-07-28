<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://api.covid19api.com/summary');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($result, true);


    $global = $result['Global'];
    $temp_NewConfirmed = (string)$global["NewConfirmed"];
    $temp_TotalConfirmed = (string)$global["TotalConfirmed"];
    $temp_NewDeaths = (string)$global["NewDeaths"];
    $temp_TotalDeaths = (string)$global["TotalDeaths"];
    $temp_NewRecovered = (string)$global["NewRecovered"];
    $temp_TotalRecovered = (string)$global["TotalRecovered"];
    $countries = $result['Countries'];
    foreach ($countries as $key => $value);
    $i=1;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        #nav{
            position: relative;
            top: -5px;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: #000000;
            -webkit-transition: top 400ms ease 0s;
            -moz-transition: top 400ms ease 0s;
            -o-transition: top 400ms ease 0s;
            -ms-transition: top 400ms ease 0s;
            transition: top 400ms ease 0s;
            box-shadow: 0 0 40px #222;
            -webkit-box-shadow: 0 0 40px #222;
            -moz-box-shadow: 0 0 40px #222;
        }
        body{
            background-color: rgb(7, 30, 163);
            color: lightgoldenrodyellow;
        }
        #first{
            margin-top: 100px;
        }
        h2{
            margin-top: 100px;
            text-align: center;
            font-family: Impact, Charcoal, sans-serif;
            letter-spacing: 4px;
            word-spacing: 1.4px;
            text-shadow: 3px 5px 2px #474747;
        }
        .card-group{
            box-shadow: 0 0 40px #222;
        }
        #footer{
            text-align: center;
            margin-top: 70px;
            font-size: 13px;
        }
        .card{
            background-color: blue;
            border-width: 5px;
            border-color: rgb(39, 62, 192);
        }
        #fas{
            margin-right: 0;
        }
        #head{
            margin-top: 15px;
            color: #FFFFFF;
            text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
            color: #FFFFFF;
        }
    </style>
    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg"/>
    <title>Dashboard covid-19</title>
  </head>
  <body>
      <!-- nav bar -->
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" width="50" height="40" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <p id="head">COVID-19</p>
                </li>
                <li class="nav-item dropdown mt-2 ml-3">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">daftar chart</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="line.html"><i class="fas fa-chart-line mr-2"></i>Line</a>
                            <a class="dropdown-item" href="pie.html"><i class="fas fa-chart-pie mr-2"></i>Pie</a>
                            <a class="dropdown-item" href="radar.html"><i class="fas fa-bullseye mr-2"></i>Radar</a>
                            <a class="dropdown-item" href="bar.html"><i class="far fa-chart-bar mr-2"></i>Bar</a>
                        </div>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="list.php">List Total</a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="info.php">List Info Hari Ini</a>
                </li>
            </ul>
        </div>

        <div class="col-sm-4 text-center">
            <a href="https://wa.me/628980249767" class="text-white text-decoration-none btn btn-outline-light align-top mt-0 ml-1"><i class="fab fa-whatsapp" style=" font-size:1rem; color:white;"></i></a>
            <a href="https://web.facebook.com/kusuma.yuda.750/" class="text-white text-decoration-none btn btn-outline-light align-top mt-0 ml-1"><i class="fab fa-facebook-square" style="font-size:1rem;"></i></a>
            <a href="https://www.instagram.com/yuda_kusuma_25" class="text-white text-decoration-none btn btn-outline-light align-top mt-0 ml-1"><i class="fab fa-instagram" style="font-size:1rem;"></i></a>
        </div>
    </nav>

    <h2>Info Virus Covid-19 Di Seluruh Dunia</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-group" id="first">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Info Positif Hari Ini</h5>
                                <p class="card-text"><?php echo number_format($temp_NewConfirmed); ?></p>
                                <i class="fas fa-ambulance" id="fas"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo $value['Date']; ?></small>
                            </div>
                    </div>
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Positif Keseluruhan</h5>
                                <p class="card-text"><?php echo number_format($temp_TotalConfirmed); ?></p>
                                <i class="fas fa-ambulance" id="fas"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo $value['Date']; ?></small>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card-group mt-4">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Info Kematian Hari Ini</h5>
                                <p class="card-text"><?php echo number_format($temp_NewDeaths); ?></p>
                                <i class="fas fa-user-times" id="fas"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo $value['Date']; ?></small>
                            </div>
                    </div>
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Kematian keseluruhan</h5>
                                <p class="card-text"><?php echo number_format($temp_TotalDeaths); ?></p>
                                <i class="fas fa-user-times" id="fas"></i>
                                
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo $value['Date']; ?></small>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card-group mt-4">
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Info Yang Sembuh Hari Ini</h5>
                                <p class="card-text"><?php echo number_format($temp_NewRecovered); ?></p>
                                <i class="far fa-smile" id="fas"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo $value['Date']; ?></small>
                            </div>
                    </div>
                    <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Yang Sembuh Hari Ini</h5>
                                <p class="card-text"><?php echo number_format($temp_TotalRecovered); ?></p>
                                <i class="far fa-smile"></i>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated <?php echo $value['Date']; ?></small>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-12" id="footer">
                &copy; copyright:2020 yuda7246@gmail.com
            </div>
        </div>
    </div>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>