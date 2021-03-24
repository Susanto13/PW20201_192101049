<?php 
    include "koneksi.php";

    $ID = $_POST['ID'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $lead = $_POST['lead'];
    $isi = $_POST['isi'];

    $perintah = "UPDATE artikel SET judul='$judul', penulis='$penulis', lead='$lead', isi='$isi' WHERE ID ='$ID'";
    $hasil = $connection->query($perintah);
    if($hasil){
        echo "Artikel Berhasil di Update<br>";
        echo "<a href=\"tampil_artikel.php\">List</a>";
    }else{
        echo "Artikel gagal di Update!";
    }

?>