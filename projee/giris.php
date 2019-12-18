<?php

$mesaj= "";
$ok = 0;

if (isset($_POST["email"],$_POST["sifre"]) && !empty($_POST["email"]) && !empty($_POST["sifre"]))
{
  $eposta = $_POST["email"];
  $sifre = $_POST["sifre"];

  $baglanti = mysqli_connect("localhost","root","","proje");
  $sorgu = "SELECT COUNT(*) as toplam FROM kisiler WHERE email='$eposta' AND sifre='$sifre'";

  $sonuc = mysqli_query($baglanti, $sorgu)->fetch_assoc()["toplam"];
  
  if ($sonuc > 0)
  {
    setcookie("oturum", $eposta, time() + 86400 * 30, "/");
    $ok = 1;
  }
  else
  {
    $mesaj = "<div class='alert alert-warning' role='alert'> Parola veya şifre hatalı !</div>"; 
  }
}

if (isset($_COOKIE["oturum"]) || $ok)
{
  header("Location: admin/mesajlar.php");
  exit;
}


?>

<!DOCTYPE html>
<html>

<head>
    <!-- Türkçe karakter sorunu yaşamamak için bunu ekliyoruz -->
    <meta charset="UTF-8" />

    <!-- Bootstrap kütüphanesini dahil ediyoruz -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Bootstap -->
</head>

<body>

    <!-- Menü Başlangıç -->
    <?php include_once("menu.php"); ?>
    <!-- Menü Bitiş -->

    <br>
    <div class="container" style="max-width: 500px;">
        <?= $mesaj  ?>
        <form action="" method="POST">
            <label for="exampleFormControlInput1">
                <h5>GİRİŞ</h5>
            </label>
            <br>
            <div class="container">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-Mail" required>
                    <!--required alan doldurmak için uyarı-->
                </div>
                <div class="form-group">
                    <input type="password" name="sifre" class="form-control" placeholder="Şifreniz" required>
                </div>
                <input type="submit" class="btn btn-info" />
            </div>
            <br>
        </form>
    </div>
</body>

</html>