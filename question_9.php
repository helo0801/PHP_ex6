<?php
// Récupération des fonctions
require_once("config.php");
require_once("functions.php");
$annee = null;
$films = films_all();
foreach ($films as $film) {
  if ($film["Nom"] == "La ligne verte") {
    $annee = $film["Année"];
  }
}
?>

<!DOCTYPE>
<html>
<head>
  <title>PHP - P20</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>.img-mov {height: 300px;} .col-md-3 {margin-bottom: 15px;}</style>
</head>
<body>
  <div class="col-md-12">
    <h1>Question 9</h1>
    <hr />
    <div class="container">
      <ul class="row">
        <li class="col-md-12"><?php echo $annee ?></li>
      </ul>
    </div>
  </div>
</body>
</html>