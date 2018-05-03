<?php

if(!function_exists("is_already_in_use")){
	function is_already_in_use($field, $value, $table){
		global $db;
		$q = $db -> prepare("SELECT id FROM $table WHERE $field = ?");
		$q -> execute([$value]);
		$count = $q -> rowCount();
		$q-> closeCursor();
		return $count;
	}
}


function connectMaBase(){
    $base = mysqli_connect ('localhost', 'root', '');  
    mysqli_select_db ($base,"socialmedia") ;
}

if(!function_exists('e')){
	function e($string){
		if($string){
			return htmlspecialchars($string);
		}
	}
}



if(!function_exists('get_session')){
	function get_session($key){
		if($key){
			return !empty($_SESSION[$key])
			? e(($_SESSION[$key]))
			: null;
		}
		 
	}
}

if(!function_exists('is_logged_in')){
	function is_logged_in(){
		return isset($_SESSION['compteID']) || isset($_SESSION['pseudo']);
		}
		 
	}





?>

