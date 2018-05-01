<?php

define("DB_HOST","localhost");
define("DB_NAME","socialmedia");
define("DB_USERNAME","root");
define("DB_PASSWORD","");

try{
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME , DB_PASSWORD);
}catch(PDOException $e){
	die("Erreur :" .$e->getMessage());
}

?>