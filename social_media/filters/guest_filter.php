<?php

if(isset($_SESSION['compteID']) && isset($_SESSION['pseudo'])){
	echo "<script type='text/javascript'>document.location.replace('profil.php');</script>";


}