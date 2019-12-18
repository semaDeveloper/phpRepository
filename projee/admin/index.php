<?php

if(!isset($_COOKIE["oturum"])){
    header("Location: ../giris.php");
    exit;
}

header("Location: mesajlar.php");

?>