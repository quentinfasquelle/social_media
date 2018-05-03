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

echo "<script type='text/javascript'>document.location.replace('flux.php');</script>";
		echo("Votre profil a été mis à jour");

	}
}

	

if(isset($_POST['submit'])){
	extract($_POST);
	$temp = $_SESSION['compteID'];

	$sql = "INSERT INTO commentaire(contenu, compteID, publicationID) VALUES ('$contenu','$temp',$publicationID)";
	mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
	

	$sql = "SELECT commentaireID,contenu FROM commentaire";
	$reponse = mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
	
	while ($data = mysqli_fetch_array($reponse)) {
			if($contenu == $data['contenu']){
				$commentaireID = $data['commentaireID'];
			}
		}
		
	$sql = "UPDATE publication SET publication.commentaireID = $commentaireID WHERE publication.publicationID = $publicationID";
	mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
	

	if(isset($aime)){
		$aime = 1;
		$sql = "UPDATE publication SET publication.aime = $aime WHERE publication.publicationID = $publicationID";
		mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
		mysqli_close($base);
	}
	echo "<script type='text/javascript'>document.location.replace('flux.php');</script>";
}






$sql = "SELECT publicationID,compteID,champtexte,aime FROM publication";
$rql = "SELECT compteID,pseudo FROM compte";
$tql = "SELECT publicationID,compteID,contenu FROM commentaire";
$reponse = mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
$rep = mysqli_query($base,$rql) or die('erreur SQL !'.$rql.'<br/>'.mysqli_error($base));
$r = mysqli_query($base,$tql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);
//$data =  mysqli_fetch_array($reponse);

$_SESSION['reponse']= $reponse;
$_SESSION['rep']= $rep;
$_SESSION['r']= $r;




//$q = $db ->prepare('SELECT champtexte FROM publication ORDER BY publicationID DESC');
//$q -> execute();
//$publication = $q -> fetchAll();


?>


<?php require("D:/wamp64/www/social_media/views/flux.views.php"); ?>
