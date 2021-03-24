<?php
    include "koneksi.php";

    $perintah = "SELECT * FROM artikel ORDER BY ID DESC";
    $hasil = $connection->query($perintah);

    echo "<h2>List Artikel</h2><br><ul>";

    while($row = mysqli_fetch_array($hasil)){
        echo ("<li>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;
                <a href=\"edit_artikel.php?ID=$row[0]\">Edit</a>&nbsp;
                <a href=\"delete_artikel.php?ID=$row[0]\">Hapus</a>;
            </li><br>"
        );
    }
    echo ("</table>");
    echo "<br><a href=\"form_artikel.php\">Tambah</a>";
?>