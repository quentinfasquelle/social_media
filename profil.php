

<?php


session_start();



include("C:/wamp/www/social_mediam/filters/auth_filter.php");
require("C:/wamp/www/social_mediam/includes/functions.php");

require("C:/wamp/www/social_mediam/config/database.php");

$id = $_GET['compteID'];

$base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ($base,"socialmedia") ;
	



$sql = "SELECT *  FROM compte ";
$reponse = mysqli_query($base,$sql) or die('erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
			mysqli_close($base);
		
	
	while( $data = mysqli_fetch_array($reponse)){
        if($data['compteID'] == $id){
			$_SESSION['prenom']=$data['prenom'];
			$_SESSION['nom']=$data['nom'];
       
		}     
    
	}  
             






?>

<?php require("C:/wamp/www/social_mediam/views/profil.views.php");?>


