<?php
include('connect.php');


class count extends AnotherClass
{

	function countFotocopy($fc){
		$result = $con->query('SELECT * FROM fotocopy');
		$hitung = count($motor);
		echo $hitung . "<br>";
}