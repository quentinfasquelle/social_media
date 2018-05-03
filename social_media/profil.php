<?php
session_start();

//include("D:/wamp64/www/social_media/filters/auth_filter.php");
require("D:/wamp64/www/social_media/includes/functions.php");
require("D:/wamp64/www/social_media/config/database.php");



extract($_POST);
$base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ($base,"socialmedia") ;
    $temp = $_SESSION['compteID'];
	
$sql = "SELECT Nom,Prenom,DateNaissance,Email  FROM compte WHERE compteID = $temp";
$rql = "SELECT Promotion,SituationPro FROM compte WHERE compteID = $temp";
$reponse = mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
$rep = mysqli_query($base,$rql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);
		
$_SESSION['reponse'] = $reponse;
$_SESSION['rep'] = $rep;

?>
<?php require("D:/wamp64/www/social_media/views/profil.views.php"); ?>