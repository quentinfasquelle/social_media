<?php

session_start();

//include("D:/wamp64/www/social_media/filters/auth_filter.php");
require("D:/wamp64/www/social_media/includes/functions.php");
require("D:/wamp64/www/social_media/config/database.php");


$base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ($base,"socialmedia") ;

if(isset($_POST['publier'])){

	if(!empty($_POST['ChampTexte'])){
		extract($_POST);
		//$q = $db->prepare('INSERT INTO publication(champtexte, compteID) VALUES(:champtexte, :compteID)');
		//$q-> execute([
		//	'champtexte' => $champtexte,
		//	'compteID' => $compteID
		//]);

		
	echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";

		$sql = "INSERT INTO publication(ChampTexte, compteID) VALUES ('$ChampTexte','$compteID')";
			mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);


		echo("Votre profil a été mis à jour");
	}
}
if(!empty($_POST['compteID'])){
	echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
}

//echo "<script type='text/javascript'>document.location.replace('flux.php');</script>";
}
?>

<?php require("D:/wamp64/www/social_media/views/flux.views.php"); ?>