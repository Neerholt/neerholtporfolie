<?php
$servername = "localhost";
$username = "mvi01.skp-dp.sde";
$password = "23q3z5y5";
$databasename = "mvi01_skp_dp_sde_dk";


/*
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'mvi01_skp_dp_sde_dk';
$tabel_name='artikeldata'; 
*/

$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 