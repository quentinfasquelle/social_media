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

?>