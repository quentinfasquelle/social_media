<?php
session_start();
session_destroy();

$_SESSION = [];

echo "<script type='text/javascript'>document.location.replace('index.php');</script>";

?>