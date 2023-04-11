<?php
    include("konfigurasi.php");

    $hasil = mysqli_connect(DBHOST, DBUSER,DBPASS);

    if($hasil){
        echo "Koneksi ke MySql Sukses";
    }else{
        echo "Koneksi ke MySql Gagal";
    }
    ///echo "Host:" . DBHOST;


    ///include_once();
    ///require();
    ///require_once();
