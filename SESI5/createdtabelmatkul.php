<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER,DBPASS, DBNAME, DBPORT);
    if($cnn){
        $matkul = "tbMATKUL";
        $sql = "CREATE TABLE $matkul(
            kodeMk VARCHAR(8) PRIMARY KEY,
            matakuliah VARCHAR(50),
            sks  INT

        ) ";
        $hasil = mysqli_query($cnn, $sql) ;
        if($hasil){
            echo "Pembuatan Tabel " . $matkul . " Sukses";
        }

    }else{
        echo "Pembuatan Tabel " . $matkul . " Gagal";
    }