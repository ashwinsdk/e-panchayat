<?php

$server='localhost';
$usr='root';
$pass='';
$db = "e-panchayat";

/*
$server='ec2-44-205-112-253.compute-1.amazonaws.com
';
$usr='if0_34394894';
$pass='Sudhakarfeb27';
$db = "if0_34394894_panchayat";
*/
$conn = mysqli_connect($server,$usr,$pass,$db);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}
?>