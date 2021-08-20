
<?php
  // récupération du contenu du dossier scandir() est une fonction qui scanne un dossier et qui retourne un tableau
  $dossier = 'images';
  $scan = scandir($dossier);
  ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Hello, Carousel!</title>
</head>
<body>
<div class="container">
  <h1>Hello, Carousel!</h1>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <?php
      // utilisation d'une boucle foreach pour afficher les buttons attention à "." et ".." qui ne sont pas des images
      foreach ($scan as $k=>$v) {
        if ($v != "." && $v != "..") {
      ?>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$k-2?>" class="<?php if($k==2){ echo "active"; } ?>" aria-label="Slide <?=$k-2?>"></button>
      <?php
        }
      }
      ?>
    </div>
    <div class="carousel-inner">
      <?php
      // utilisation d'une boucle foreach pour afficher les images attention à "." et ".." qui ne sont pas des images
      foreach ($scan as $k=>$v) {
        if ($v != "." && $v != "..") {
      ?>
      <div class="carousel-item <?php if($k==2){ echo "active"; } ?>">
        <img src="./<?=$dossier?>/<?=$v?>" class="d-block w-100" alt="lake">
      </div>
      <?php
        }
      }
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>