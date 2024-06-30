<?php 
$host ="localhost";
$kullanici="root";
$parola="";
$vt="tablo";

$baglanti=mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($baglanti,"UTF8");

?>