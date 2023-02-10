<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "miniprojact029";
//$username = "id20210813_nattamon";
//$password = "C4DNCx3E!Gnmyt<>";
//$dbname = "id20210813_miniproject";
$conn = new mysqli($host,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>