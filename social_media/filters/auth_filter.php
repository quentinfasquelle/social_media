<?php

if(!isset($_SESSION['user_id']) || !isset($_SESSION['pseudo'])){
	echo "<script type='text/javascript'>document.location.replace('index.php');</script>";


}