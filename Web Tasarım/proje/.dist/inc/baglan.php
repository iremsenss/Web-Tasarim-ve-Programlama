<?php

function baglan(){
    $baglanti = mysqli_connect("localhost","root","","tablo");
    if($baglanti){
        //echo "Bağlandık ";
    }else{
        echo "Problem var ";
    }
    return $baglanti;
}
?>