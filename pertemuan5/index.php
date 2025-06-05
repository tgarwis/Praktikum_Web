<?php
    define("SITE_NAME", "tegarwisnu.shop");
    define("VERSION", "1.0");


    echo "Selamat datang di " . SITE_NAME . "<br>";
    echo "Versi Sistem: " . VERSION . "<br>";

    echo " ";
    echo " ";

    $nama = "Tegar Wisnukurnia Aji";
    $umur = 22;
    $NPM = 2010631170035;

    echo "Nama  : " . $nama . "<br>";
    echo "NPM   : " . $NPM . "<br>";
    echo "Umur  : " . $umur . " tahun<br>";

    class Mahasiswa {
        public $nama;
        public function sapa() {
            return "Halo, saya $this->nama";
        }
    }
    $mhs = new Mahasiswa();
    $mhs->nama = "Tegar";
    echo $mhs->sapa();
 
?>
