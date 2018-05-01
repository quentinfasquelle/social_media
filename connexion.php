

<?php
require("C:/wamp/www/social_media/views/connexion.views.php");
require("C:/wamp/www/social_media/config/database.php");
require("C:/wamp/www/social_media/includes/functions.php");


if(isset($_POST["login"])){
	
	if(not_empty(['pseudo','email','password'])){
			
		extract($_POST);
		
		$q = $db->prepare("SELECT compteID FROM compte
							WHERE  pseudo =:pseudo 
							AND email=:email 
							AND password=:password");
							
		$q->execute([ 
			'pseudo' => $pseudo,
			'email' => $email,
			'password' => sha1($password)
		]);
		
		$userHasBeenFound = $q->rowCount();
		
		if($userHasBeenFound){
			header('Accueil.php');
		
		} else {
			echo("combinaison incorrect");
			//save_input_data();
			}

	
	}

	
}

?>
	

