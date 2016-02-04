<?php
// Chargement de tous les films
include_once("database.php");
function films_all() {
  global $films;
  return $films;
}

// Récupérer un film selon son id
function get_film_by_id(id) {
  global $films;
  return $films[id];
}


// Récuperer tous les films en fonction de l'année
function annee_sup($annee) {
  // films
  $films = films_all();
  $rows = array();
  foreach ($films as $film) {
    if($film["Année"] > $annee) {
      array_push($rows, $film);
    }
  }
  return $rows;
}


// Récupérer tous les items de tous les films
function get_all_items($key) {
  $films = films_all();
  $items = array();
  foreach ($films as $film) {
    foreach ($film[$key] as $item) {
      array_push($items, $item);
    }
  }
  return $items;
}


// Récupére tous les années de tous les films (unique)
function get_all_items_unique($key) {
  return array_unique(get_all_items($key));
}


// Récupére tous les acteurs ayant jouer dans un film possèdant un genre spécifique
function acteurs_genre($genre) {
  $films = films_all();
  $acteurs = array();
  foreach ($films as $film) {
    foreach ($film["Genres"] as $genre_film) {
      //Si le genre est le même, on récupere tous les acteurs du film
      if($genre == $genre_film) {
        //récupération des acteurs
        foreach ($film["Acteurs"] as $acteur) {
          array_push($acteurs, $acteur);
        }
      }
    }
  }
  // Récuperation d'un tableau unique
  return array_unique($acteurs);
}