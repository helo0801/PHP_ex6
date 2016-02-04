<?php
// Récupération des fonctions
	require_once("config.php");
	require_once("functions.php");
// Déclaration variable vide
	$id = null;
// Stockage des valeurs dans la variable
	if (isset($_GET["id"])) {
  	$id = $_GET["id"];
	}
	$film = get_film_by_id($id);
?>