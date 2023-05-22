<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBname = "easyAlgo";


$conn = mysqli_connect($servername, $dBUsername,$dBPassword,$dBname);

if (!$conn){
    die("Could not connect: ". mysqli_connect_error());
}