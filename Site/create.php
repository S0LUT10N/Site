<?php
      require_once 'include/db.php';


$name = $_POST['name'];
$secondname = $_POST['secondname'];
$surname = $_POST['surname'];
$passortdata = $_POST['passortdata'];
$numberphone = $_POST['numberphone'];
$maxId = mysqli_query($con, "call newmaxid('klient1`', 'id_klient12123')");
$maxId = mysqli_fetch_all($maxId)[0][0];
mysqli_query($connect, "INSERT INTO `klient1` (`id_klient12123`, `name`, `familiya`, `otchestvo`, `passpot_data`, `numberphone`) VALUES ('$maxId', '$name', '$secondname', '$surname', '$passortdata ', '$numberphone')");
?>
