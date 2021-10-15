<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "pcd_log";



$conn = mysqli_connect($server, $user, $pass, $db) or die ('Não foi possível conectar com o banco de dados');


$login_bd = "login";


$conn_login = mysqli_connect($server, $user, $pass, $login_bd) or die ('Não foi possível conecetar com o banco de dados');

?>