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

if(!function_exists('not empty')){
	function not_empty($fields =[]){
		if(count($fields) !=0){
		foreach($fields as $field){
			if(empty($p_POST[$field]) || trim($_POST[$field]) ==""){
			return false;
			}
		
		}
		return true;
	}
	
}
}

if(!function_exists('set_flash')){
	function set_flash($message, $type = 'info'){
		$_SESSION['notification']['message']=$message;
		$_SESSION['notification']['type']=$type;
	}
}

// if(!function_exists('save_input_data')){
//	function save_input_data ($page){
//		foreach ($_POST as $key => $value){
//			if(strpos($key, 'password') === false){
//				$_SESION['input'][$key] = $value;
//			}
//
			
//		}
//}

//if(!function_exists('get_input')){
//	function get_input ($key){
//		if(!empty ($_SESSION['input'][$key])){
//			return $_SESSION['input'][$key];
//		} else {
//			return null;
//		}		
		
//	}	
//}



?>






