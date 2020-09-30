<?php
    $host="localhost";
    $user="root";
    $password="usbw";
    $bd="escola";
    $con=mysqli_connect($host, $user, $password, $bd);
    if(!$con){
        Echo "houve um erro";
    }
?>