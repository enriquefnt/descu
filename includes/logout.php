<?php
	require 'conect.php';
	session_destroy();

	header('Location: /descu/public/login.php');

?>
