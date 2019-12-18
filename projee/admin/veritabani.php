<?php

class Veritabani
{
    public $sunucu;
    public $kullanici;
    public $parola;
    public $veritabani;
    public $baglanti;

    public function isLocalhost()
    {
        $whitelist = array(
            '127.0.0.1',
            '::1',
        );
        if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            return true;
        } else {
            return false;
        }
    }

    // Yapıcı metodumuzun içerisinden veritabanına bağlanıyoruz.
    public function __construct()
    {
        $this->sunucu     = "localhost";
        $this->kullanici  = "root";
        $this->parola     = "";
        $this->veritabani = "proje";


        $dbBaglanti = mysqli_connect($this->sunucu, $this->kullanici, $this->parola, $this->veritabani) or die("Veritabanına bağlanılamadı: " . mysqli_connect_error());
        mysqli_set_charset($dbBaglanti, "utf8");
        if (mysqli_connect_errno()) {
            printf("Veritabanı bağlantı hatası: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->baglanti = $dbBaglanti;
        }
    }

    public function mesajEkle($data){
        $name = $data->name;
        $email = $data->email;
        $subject = $data->subject;
        $message = $data->message;

        $sorgu         = "INSERT INTO mesajlar (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        $sorgu_sonuc   = mysqli_query($this->baglanti, $sorgu) or die('Mesajlar yazılırken veritabanında hata oluştu.');

        return $sorgu_sonuc;
    }

    public function mesajlariGetir(){
        $sorgu         = "SELECT * FROM mesajlar";
        $sorgu_sonuc   = mysqli_query($this->baglanti, $sorgu) or die('Mesajlar okunurken veritabanında hata oluştu.');

        $mesajlar = array();

        while ($mesaj = mysqli_fetch_assoc($sorgu_sonuc)) {
            array_push($mesajlar, $mesaj);
        }

        if ($mesajlar) 
            return $mesajlar;
        else return false;
    }

    public function mesajiGetir($id){
        $sorgu         = "SELECT * FROM mesajlar WHERE id = $id";
        $sorgu_sonuc   = mysqli_query($this->baglanti, $sorgu) or die('Mesajlar okunurken veritabanında hata oluştu.');

        $mesajlar = mysqli_fetch_assoc($sorgu_sonuc);

        if ($mesajlar) 
            return $mesajlar;
        else 
            return false;
    }

    public function mesajiSil($id)
    {
        $sorgu = "DELETE from mesajlar WHERE id = $id";
        if (mysqli_query($this->baglanti, $sorgu)) {
            return true;
        } else {
            return false;
        }
    }

   
}

// Diğer dosyalardan veritabanı sınıfına erişmek için kullanacağımız nesnemizi oluşturuyoruz.
$veritabani = new Veritabani();