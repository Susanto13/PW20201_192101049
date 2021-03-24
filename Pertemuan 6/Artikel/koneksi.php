<?php 
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "db_artikel";

    // lakukan koneksi dengan mysql
    $connection = new mysqli($servername,$dbusername,$dbpassword);
    if($connection->connect_error){
        die("Koneksi Gagal: " . $connection->connect_error);
        return;
    }

    //pilih database
    $pilih_db = mysqli_select_db($connection, $dbname);
    if(!$pilih_db){
        $sql = "CREATE DATABASE $dbname";
        if($connection->query($sql) === TRUE){
            echo "Database Berhasil Dibuat dengan nama $dbname";
        }else{
            echo "Gagal Membuat Database: " . $connection->error;
            exit;
        }
    }
    //sql membuat table
    $sql = "CREATE TABLE artikel(ID int NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), judul VARCHAR(255), penulis VARCHAR(255), lead VARCHAR(255), isi TEXT, waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    if($connection->query($sql) === TRUE){
        echo "Table artikel sukses di buat";
    }

    $connection->query($sql);
?>