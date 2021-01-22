<?php
//veri tabani baglanti
header("Content-Type: text/html; charset=utf-8");
//hatalari gosterme
setlocale(LC_ALL,'tr_TR.UTF8','tr_TR','tr','turkish');
$DBhost="localhost";
$DBuser="root";
$DBpass="15835847692U";
$DBname="oyuncublog";

try{
	$db=new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
} catch(PDOException $e)
{
echo $e->getMessage();
}
$db->exec("SET NAMES 'utf8';SET CHARSET'utf8'");

define("_URL","http://localhost/oyuncublog/");


?>