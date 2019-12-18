<?php

if(!isset($_COOKIE["oturum"])){
    header("Location: ../giris.php");
    exit;
}

?>

<?php include_once('veritabani.php');

$notification = '';

if (isset($_POST['deleteRecordId'])) {
    if ($veritabani->mesajiSil($_POST['deleteRecordId'])) {
        $notification = '<div class="alert alert-success" role="alert"> Mesaj başarıyla silindi.</div>';
    } else {
        $notification = '<div class="alert alert-danger" role="alert"> Mesaj silinirken hata oluştu.</div>';
    }
}

$allMessages = $veritabani->mesajlariGetir();

if(!$allMessages) $allMessages = array();

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

    <script>
    function submitForm(id) {
        document.getElementById("formDeleteRecord" + id).submit();
    }
    </script>

</head>

<body>
    <?php include_once("menu.php"); ?>

    <body id="page-top">
        <div id="wrapper">

            <div class="container" style="margin-top: 25px;">
                <div class="container-fluid">

                    <!-- Table -->
                    <div class="card mb-3">
                        <?= $notification ?>
                        <div class="card-header">
                            <i class="fas fa-calendar"></i>
                            Mesajlar
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>İsim</th>
                                            <th>E-Posta</th>
                                            <th>Konu</th>
                                            <th>Mesaj Tarihi</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($allMessages as $message) { ?>
                                        <tr>
                                            <td style="vertical-align: middle;"><?= $message['id'] ?></td>
                                            <td style="vertical-align: middle;"><?= $message['name'] ?></td>
                                            <td style="vertical-align: middle;"><?= $message['email'] ?></td>
                                            <td style="vertical-align: middle;"><?= $message['subject'] ?></td>
                                            <td style="vertical-align: middle;">
                                                <?= strftime("%e %B %Y, %H:%M", strtotime($message['date_created'])) ?>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="mesaj-detay.php" method="GET">
                                                            <input type="hidden" name="messageId"
                                                                value="<?= $message['id'] ?>">
                                                            <button type="submit" class="btn btn-primary"
                                                                style="width: 100%; margin: 2px;">Mesajı Gör</button>
                                                        </form>
                                                    </div>
                                                    <div class="col">
                                                        <form id="formDeleteRecord<?= $message['id'] ?>"
                                                            action="mesajlar.php" method="POST">
                                                            <input type="hidden" name="deleteRecordId"
                                                                value="<?= $message['id'] ?>">
                                                        </form>
                                                        <button onClick="submitForm(<?= $message['id'] ?>)"
                                                            class="btn btn-danger"
                                                            style="width: 100%; margin: 2px;">Sil</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">
                            Toplam <?= count($allMessages) ?> adet kayıt mevcut
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>

</html>