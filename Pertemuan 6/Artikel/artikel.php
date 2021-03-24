<?php
    include "koneksi.php";

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $lead = $_POST['lead'];
    $isi = $_POST['isi'];
    $lead = str_replace("\r\n","<br>",$lead);
    $content = str_replace("\r\n","<br>",$isi);
    $isi = str_replace("\r\n","<br>",$isi);

    $query = "INSERT INTO artikel (judul, penulis, lead, isi) VALUES ('$judul', '$penulis', '$lead', '$isi')";
    $result = mysqli_query($connection, $query);
    if($result) {
        echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
        echo "<A href=\"tampil_artikel.php\">List</A>";
    } else {
        echo "<h2 align=center>Proses penambahan artikel tidakberhasil</h2>";
    }


?>