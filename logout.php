<?php

	
	setcookie("username", $email, time()-3, "/");
	header('location: index.php');
?>