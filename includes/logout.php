<?php
	require 'conect.php';
	session_destroy();

	header('Location: /descu/includes/login.php');
?>
