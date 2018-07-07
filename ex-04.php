<?php 

	session_id("jf87a7edb2vchljliung4h3v4f");
	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

 ?>