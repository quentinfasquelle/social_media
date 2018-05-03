<?php

session_start();
require("D:/wamp64/www/social_media/config/database.php");
require("D:/wamp64/www/social_media/includes/functions.php");

$base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ($base,"socialmedia") ;


	if(isset($_POST["register"])){

		if(!empty($_POST["pseudo"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["datenaissance"]) && !empty($_POST["promotion"]) && !empty($_POST["situationpro"]) && !empty($_POST["mdp"]) && !empty($_POST["confirmer_mdp"])){

			$errors = [];

			extract($_POST);

if(mb_strlen($pseudo)<2){
	$errors[]= "Pseudo trop court! ( minimum 2 caractères)";
}

if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[]="adresse email invalide!";
}

if(mb_strlen($mdp)<6){
	$errors[]="MDP trop court ( minimum 6 caractères)";
	
}else {
	if($mdp!= $confirmer_mdp){
	$errors[]="Les deux mdp ne sont pas identiques";
	}
	
}

if(is_already_in_use('pseudo', $pseudo, 'users')){
	$errors[] = "pseuso deja utilisé";
}




		if(count($errors) == 0){
			//enregistrement de l'utilisateur 
		 
			//connectMaBase();

          //$q = $db->prepare('INSERT INTO compte(pseudo,nom,prenom,email,datenaissance,promotion,situationpro,mdp) VALUES(:pseudo,:nom,:prenom,:email,:datenaissance,:promotion,:situationpro,:mdp)');

          //$q->execute(array(
          //	'pseudo' => $pseudo,
          //	'nom' => $nom,
//'prenom' => $prenom,
          //	'email' => $email,
          //	'datenaissance' => $datenaissance,
          //	'promotion' => $promotion,
          //	'situationpro' => $situationpro,
          //	'mdp' => $mdp
         // ));
         
			$sql = "INSERT INTO compte(pseudo,nom,prenom,email,datenaissance,promotion,situationpro,mdp) VALUES('$pseudo','$nom','$prenom','$email','$datenaissance','$promotion','$situationpro','$mdp')";
			mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);


          		}

		} else {

			$errors[] = "Veuillez SVP remplir tous les champs !";

		}

	}



?>

<?php require("D:/wamp64/www/social_media/views/inscription.views.php"); ?>



