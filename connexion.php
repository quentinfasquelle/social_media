<?php
include("C:/wamp/www/social_mediaa/filters/guest_filter.php");
require("C:/wamp/www/social_mediaa/views/connexion.views.php");
require("C:/wamp/www/social_mediaa/config/database.php");
require("C:/wamp/www/social_mediaa/includes/functions.php");


if(isset($_POST["login"])){
	
	if(!empty($_POST["pseudo"])&& !empty($_POST["email"])&& !empty($_POST["mdp"])){
			
		extract($_POST);
		
		$q = $db->prepare("SELECT compteID, pseudo FROM compte
							WHERE  pseudo =:pseudo 
							AND email=:email 
							AND mdp=:mdp");
							
		$q->execute([ 
			'pseudo' => $pseudo,
			'email' => $email,
			'mdp' => $mdp
		]);
		
		$user = $q-> fetch();
		
		if($user){
			
			
			session_start();
			
			$_SESSION['compteID'] = $user["compteID"];
			$_SESSION['pseudo'] = $user["pseudo"];

			header('Location: profil.php?id='.$user["compteID"]);
			die();
			
			
			//echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
			
		} else {
			echo("combinaison incorrect");
			//save_input_data();
			}

	
	}

	
}

?>