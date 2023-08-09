<?php   
	header('HTTP/1.1 301 Moved Permanently' , 301);
	header("location : https://www.poste.it/cerca/index.html#/risultati-spedizioni/" .$_GET["ricercaSDA"]);
?>