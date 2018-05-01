<?php


require("D:/wamp64/www/social_media/config/database.php");
require("D:/wamp64/www/social_media/includes/function.php")

	if(isset($_POST["register"])){

		if(!empty($_POST["pseudo"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["datedenaissance"]) && !empty($_POST["promotion"]) && !empty($_POST["situationpro"]) && !empty($_POST["sexe"]) && !empty($_POST["mdp"]) && !empty($_POST["confirmer_mdp"])){

			$errors = [];

			extract($_POST);

if(mb_strlen($pseudo)<2{
	$errors[]= "Pseudo trop court! ( minimum 2 caractères)";
}

if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[]="adresse email invalide!";
}

if(mb_sterlen($mdp)<6){
	$errors[]="MDP trop court ( minimum 2 caractères)";
	
}else {
	if($mdp!= $confirmer_mdp){
	$errors[]="Les deux mdp ne sont pas identiques";
	}
	
}

if(is_already_in_use('pdeuso', $pseudo, 'users')){
	$errors[] = "pseuso deja utilisé";
}


		if(count($errors) == 0){
			//enregistrement de l'utilisateur 

		}

		} else {

			$errors[] = "Veuillez SVP remplir tous les champs !"

		}

	}



?>





require("D:/wamp64/www/social_media/views/inscription.views.php");