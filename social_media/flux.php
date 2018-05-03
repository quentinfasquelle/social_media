<?php

session_start();

require("D:/wamp64/www/social_media/includes/functions.php");

require("D:/wamp64/www/social_media/config/database.php");


$base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ($base,"socialmedia") ;

if(isset($_POST['publier'])){


	if(!empty($_POST['champtexte'])){
		extract($_POST);
		//$q = $db->prepare('INSERT INTO publication(champtexte, compteID) VALUES(:champtexte, :compteID)');
		//$q-> execute([
		//	'champtexte' => $champtexte,
		//	'compteID' => $compteID
		//]);

		$temp = $_SESSION[compteID];
	

		$sql = "INSERT INTO publication(champtexte, compteID) VALUES ('$champtexte', '$temp')";
			mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);

echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
		echo("Votre profil a été mis à jour");

	}
}
$sql = 'SELECT compteID,champtexte FROM publication';
$reponse = mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);
//$data =  mysqli_fetch_array($reponse);

$_SESSION['reponse']= $reponse;




//$q = $db ->prepare('SELECT champtexte FROM publication ORDER BY publicationID DESC');
//$q -> execute();
//$publication = $q -> fetchAll();


?>


<?php require("D:/wamp64/www/social_media/views/flux.views.php"); ?>
