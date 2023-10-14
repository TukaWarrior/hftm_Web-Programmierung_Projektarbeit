<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap"> -->
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/hero.css">
  <link rel="stylesheet" href="../css/ComicStyle.css">
  <link rel="stylesheet" href="../css/footer.css">

  <title>Hero: Alpine Bat</title>
  <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp">

  <style>
    body {
      /* background-image: url('../ressources/images/backgrounds/bg_alpinebat1.webp'); */
    }
  </style>

</head>
<!-- <?php $originstory = file_get_contents('../ressources/documents/originstory_alpinebat.t'); ?> -->
<body>

  <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
  <!-- PHP -->
  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

  <!-- Get Origin Story -->
  <?php $originstory = file_get_contents('../ressources/documents/originstory_alpinebat.txt'); ?>

  <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

  <!-- HTML -->

  <div class="blankContainer" style="--blankColor: transparent"></div>
  <div class="blankPartition" style="--bgcolor: rgb(109, 180, 180)">
    <h2 class="mid">Alpine Bat</h2>
  </div>

  
<div class="container">




<div class="textbox" style="--textbox-color: #ffffff">
    <h2>Origin Story</h2>
    <p>
      <?php echo $originstory; ?>
    </p>
  </div>

  <div class="polaroid-animation">
    <div class="polaroid-frame">
      <img class="polaroid-image" src="../ressources/images/heroes/hero_alpinebat.webp" alt="">
      <h1>Alpine Bat</h1>
    </div>
  </div>









</div>
  <!-- Bottom Footer Bar -->
  <?php include 'element_footer.php'; ?>

</body>

</html>