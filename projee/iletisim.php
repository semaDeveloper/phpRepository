<?php

include_once('admin/veritabani.php');

$name = "";
$email = "";
// $phone = "";
$subject = "";
$message = "";

if (isset($_POST["name"], $_POST["email"], /* $_POST["phone"], */ $_POST["subject"], $_POST["message"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    // $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $data = new StdClass();

    if (
        !empty($name) &&
        !empty($email) &&
        // !empty($phone) &&
        !empty($subject) &&
        !empty($message)
    ) {
        $data->name = $name;
        $data->email = $email;
        $data->subject = $subject;
        $data->message = $message;

        if ($veritabani->mesajEkle($data)) {
            $resultCode = 1;

            $name = "";
            $email = "";
            // $phone = "";
            $subject = "";
            $message = "";
        } else {
            $resultCode = 0;
        }
    } else {
        $resultCode = 2;
    }
}

$notification = '';
if (isset($resultCode)) {
    if ($resultCode == 0) {
        $notification = '<div id="notification" class="alert alert-danger" role="alert"> Mesajınız gönderilirken hata oluştu, daha sonra tekrar göndermeyi deneyiniz..</div>';
    } else if ($resultCode == 1) {
        $notification = '<div id="notification" class="alert alert-success" role="alert"> Mesajınız başarıyla gönderildi.</div>';
    } else if ($resultCode == 2) {
        $notification = '<div id="notification" class="alert alert-warning" role="alert"> Zorunlu alanları doldurunuz.</div>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Türkçe karakter sorunu yaşamamak için bunu ekliyoruz -->
    <meta charset="UTF-8" />

    <!-- Bootstrap kütüphanesinidahil ediyoruz -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstap -->
</head>

<body>

    <?php include_once("menu.php"); ?>

    <br>
    <div class="container">
        <?php echo $notification ?>
        <form action="" method="POST">
            <label for="exampleFormControlInput1">
                <h5>İLETİŞİM FORMU</h5>
            </label>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="ADINIZ VE SOYADINIZ">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="email" class="form-control" placeholder="E-POSTA ADRESİNİZ">
                </div>
                <div class="col">
                    <input type="text" name="subject" class="form-control" placeholder="MESAJ KONUSU">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">MESAJINIZI YAZINIZ</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-info">GÖNDER</a>
        </form>
    </div>
    <br>

    <?php include_once("footer.php"); ?>
</body>

</html>