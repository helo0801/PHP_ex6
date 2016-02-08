<?php
  require_once("config.php");
  require_once("functions.php");

	$like = null;
  
		if(isset($_POST["Like"])){
	  $like = $_POST["Like"];
	}
	$films = like_sup($like);
  echo $films;
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
    <h1>Exemple 2</h1>
    <hr />
    <form method="post" action="">
      <input placeholder="Like" type="text" name="like" />
      <button type="submit">Soumettre</button>
    </form>
    <hr />
    <div class="container">
      <div class="row">
        <?php foreach($films as $film): ?>
          <div class="col-md-3">
            <img src="<?php echo $film["Affiche"] ?>" class="img-mov img-thumbnail">
            <div><?php echo $film["Nom"] ?></div>
            <div class="line2">
              <?php echo $film["Like"] ?><br>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>
</html>