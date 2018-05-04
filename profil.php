<?php
session_start();

//include("D:/wamp64/www/social_media/filters/auth_filter.php");
require("/Applications/MAMP/htdocs/social_media/includes/functions.php");
require("/Applications/MAMP/htdocs/social_media/config/database.php");



$base = mysqli_connect ('localhost', 'root', 'root');  
    mysqli_select_db ($base,"socialmedia") ;
    $temp = $_SESSION['compteID'];
	
$sql = "SELECT * FROM compte WHERE compteID = $temp";
$rql = "SELECT Promotion,SituationPro FROM compte WHERE compteID = $temp";
$reponse = mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
$rep = mysqli_query($base,$rql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));

$_SESSION['reponse'] = $reponse;
$_SESSION['rep'] = $rep;

//mysqli_close($base);

if(isset($_POST["Modifier"])){
	$errors = [];
	extract($_POST);

	/*if(mb_strlen($mdp)<6){
		$errors[]="MDP trop court ( minimum 6 caractères)";
	}else {
		if($mdp!= $confirmer_mdp){
			$errors[]="Les deux mdp ne sont pas identiques";
		}
	
	}*/

	/*if(count($errors) == 0){
		if(!empty($nom)){
			//$sql = "UPDATE compte SET compte.Nom = $nom WHERE compte.CompteID = $_SESSION['compteID']";
			$sql1 = "INSERT INTO compte (CompteID,Nom,Prenom,)"
			mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);
		}else {

			$errors[] = "Veuillez SVP remplir tous les champs !";

		}
	}*/
	if(!empty($photoprofil)){
		$PhotoProfil = "'".$photoprofil."'";
		$sql3 = "UPDATE Compte SET PhotoProfil = $PhotoProfil WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(!empty($nom)){
		$Nom = "'".$nom."'";
		$sql3 = "UPDATE Compte SET Nom = $Nom WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(!empty($prenom)){
		$Prenom = "'".$prenom."'";
		$sql3 = "UPDATE Compte SET Prenom = $Prenom WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(!empty($email)){
		$Email = "'".$email."'";
		$sql3 = "UPDATE Compte SET Email = $Email WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(!empty($promotion)){
		$Promotion = "'".$promotion."'";
		$sql3 = "UPDATE Compte SET Promotion = $Promotion WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(!empty($situationpro)){
		$SituationPro = "'".$situationpro."'";
		$sql3 = "UPDATE Compte SET SituationPro = $SituationPro WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(!empty($email)){
		$Email = "'".$email."'";
		$sql3 = "UPDATE Compte SET Email = $Email WHERE CompteId = $temp";
		mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
	}
	if(mb_strlen($mdp)<6){
		$errors[]="MDP trop court ( minimum 6 caractères)";
		}else{
			if($mdp== $confirmer_mdp){
				$Mdp = "'".$mdp."'";
				$sql3 = "UPDATE Compte SET Mdp = $Mdp WHERE CompteId = $temp";
				mysqli_query($base,$sql3) or die('erreur SQL 1!'.$sql3.'<br/>'.mysqli_error($base));
			}
			else {
				$errors[]="Les deux mdp ne sont pas identiques";
			}
	}
	
	echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
}

	


			


?>
<?php require("/Applications/MAMP/htdocs/social_media/views/profil.views.php"); ?>