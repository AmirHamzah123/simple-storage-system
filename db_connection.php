<?php
$servername = "localhost";
$username = "root";
$passsword = "";
$dbname = "inventory_db";

$conn = mysqli_connect($servername,$username,$passsword,$dbname);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}

?>