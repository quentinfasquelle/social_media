<?php
include("D:/wamp64/www/social_media/filters/guest_filter.php");
require("D:/wamp64/www/social_media/views/connexion.views.php");
require("D:/wamp64/www/social_media/config/database.php");
require("D:/wamp64/www/social_media/includes/functions.php");
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
			
		
		echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";
		} else {
			echo("combinaison incorrect");
			//save_input_data();
			}
	
	}
	
}
?>