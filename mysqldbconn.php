<?php

$server='localhost';
$usr='root';
$pass='';
$db = "panchayat";

/*
$server='ec2-44-205-112-253.compute-1.amazonaws.com
';
$usr='rdujmpylzwsjrn';
$pass='ab7121bd2e33acf16afc59d03b326604675eaeeb08099aace188ec57b82c078f';
$db = "d9c1orqblrsual";
*/
$conn = mysqli_connect($server,$usr,$pass,$db);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}
?>