<?php
$host   = 'localhost';
$uname  = 'naufal';
$pass   = 'naufalroot';
$db     = 'mikrotik';
$mysqli = new mysqli($host, $uname, $pass, $db);

if ($mysqli->connect_errno) {
	echo "gagal".$mysqli->mysqli_error();
}

$mysqli->close();
?>