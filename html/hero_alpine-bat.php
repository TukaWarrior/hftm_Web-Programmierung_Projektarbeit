<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/hero.css">
  <link rel="stylesheet" href="../css/footer.css">
  <title>Hero: Alpine Bat</title>

</head>

<body>

  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>
  <?php $originstory = file_get_contents('../ressources/documents/originstory_alpine-bat.html'); ?>

<h2>Origin Story</h2>
  <p class="originstory"><?php echo $originstory; ?></p>

  <div class="polaroid-animation">
    <div class="polaroid-frame">
      <img class="polaroid-image" src="../ressources/images/heroes/hero_alpine-bat.png" alt="">
      <h1>Alpine Bat</h1>
    </div>
  </div>


  <!-- Bottom Footer Bar -->
  <?php include 'element_footer.php'; ?>

</body>

</html>