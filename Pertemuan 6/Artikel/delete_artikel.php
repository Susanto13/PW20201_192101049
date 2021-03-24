<?php
    include "koneksi.php";
    
    $artikelID = $_GET['ID'];

    $perintah = "DELETE FROM artikel WHERE ID=\"$artikelID\"";
    $hasil = $connection->query($perintah);
    if($hasil){
        echo "Artikel Berhasil di Hapus!<br>";
        echo "<a href=\"tampil_artikel.php\">Back</a>";
    }else{
        echo "Gagal Menghapus: " .$connection->error;
    }

?>