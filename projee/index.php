<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap kütüphanesinidahil ediyoruz -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstap -->

</head>

<body>

    <?php include_once("menu.php"); ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="slider1.jpeg" width="330" height="520">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="slider2.jpeg" width="330" height="520">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="slider3.jpeg" width="330" height="520">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="alert alert-warning" role="alert">
        <font face="Batang">
            <h5>Makarnanın Yanında Tercih Edilenler &darr;</h5>
        </font>
    </div>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img src="dcorba.jpg" class="card-img-top">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Domates Çorbası</h5>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
            <div class="card">
                <img src="mercimekcorba.jpg" class="card-img-top">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Mercimek Çorbası</h5>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
            <div class="card">
                <img src="ızgarakofte.jpg" class="card-img-top" width="400" height="262">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Izgara Köfte</h5>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img src="paprikali.jpg" class="card-img-top" width="550" height="315">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Paprikalı Tavuk</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
            <div class="card">
                <img src="yogurtlama.jpg" class="card-img-top" width="300" height="315">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Yoğurtlama</h5>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
            <div class="card">
                <img src="kremalimantarsote.jpg" class="card-img-top" width="400" height="315">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Kremalı Mantar Sote</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img src="saksuka.jpg" class="card-img-top" width="350" height="270">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Şakşuka</h5>

                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
            <div class="card">
                <img src="dsosizgarapatlican.jpg" class="card-img-top" width="350" height="270">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Domates Soslu Izgara Patlıcan</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
            <div class="card">
                <img src="eginpiyazi.jpg" class="card-img-top" width="350" height="270">
                <div class="card-body">
                    <hr>
                    <h5 class="card-title">Eğin Piyazi</h5>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>
            </div>
        </div>
    </div>
    <br>
    <?php include_once("footer.php"); ?>

</body>

</html>