<?php
session_start();

//include("D:/wamp64/www/social_media/filters/auth_filter.php");
require("/Applications/MAMP/htdocs/social_media/includes/functions.php");
require("/Applications/MAMP/htdocs/social_media/config/database.php");

$base = mysqli_connect ('localhost', 'root', 'root');  
                    mysqli_select_db ($base,"socialmedia") ;

extract($_POST);

    $temp = $_SESSION['compteID'];
	$_SESSION['temp'] = $temp;

$sql = 'SELECT CompteID,Nom,Prenom FROM compte WHERE CompteID ="'.$temp.'"';
$rql = "SELECT ReseauID  FROM reseau WHERE compteID = $temp";
$reponse = mysqli_query($base,$sql) or die('erreur SQL !!'.$sql.'<br/>'.mysqli_error($base));
$_SESSION['reponse']=$reponse;
$rep = mysqli_query($base,$rql) or die('erreur SQL !'.$rql.'<br/>'.mysqli_error($base));
$_SESSION['rep']=$rep;
?>
<?php require("/Applications/MAMP/htdocs/social_media/views/monreseau.views.php"); ?>