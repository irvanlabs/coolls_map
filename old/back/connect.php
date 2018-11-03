<?php
try
{
$con = new PDO("mysql:host=localhost;dbname=cool_map","naufal","naufalroot");
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>