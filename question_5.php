<?php
	require_once("config.php");
	require_once("functions.php");
	
	$acteurs = array_unique(array_linearize(get_all_items("Acteur")));
?>
