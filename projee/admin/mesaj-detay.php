<?php

if(!isset($_COOKIE["oturum"])){
    header("Location: ../giris.php");
    exit;
}

?>

<?php include_once('veritabani.php');

if (!isset($_GET["messageId"])) {
    header('Location: messages.php');
}

$message = $veritabani->mesajiGetir($_GET["messageId"]);

if (!$message) {
    header('Location: mesajlar.php');
}

?>

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

    <body id="page-top">

        <div id="wrapper" class="container" style="margin-top: 25px;">

            <div id="content-wrapper">
                <!-- /.container-fluid -->

                <!-- Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="inputAnnouncement">Ad Soyad</label>
                                <input type="text" class="form-control" value="<?= $message["name"] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="inputAnnouncement">Email</label>
                                <input type="text" class="form-control" value="<?= $message["email"] ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="inputAnnouncement">Tarih</label>
                                <input type="text" class="form-control"
                                    value="<?= strftime("%e %B %Y, %H:%M", strtotime($message['date_created'])) ?>"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="inputAnnouncement">Konu</label>
                                <input type="text" class="form-control" value="<?= $message["subject"] ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="inputAnnouncement">Mesaj İçeriği</label>
                                <textarea class="form-control" rows="6" disabled><?= $message["message"] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.Content -->

            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>

</html>