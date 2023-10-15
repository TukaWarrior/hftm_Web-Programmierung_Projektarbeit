<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hero: Alpine Bat</title>
  <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/hero.css" />
  <link rel="stylesheet" href="../css/comicStyle.css" />
  <link rel="stylesheet" href="../css/footer.css" />


  <style>
    body {
      background-image: url('../ressources/images/backgrounds/bg_alpinebat1.webp');
    }
  </style>

</head>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<body>

  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

  <!-- Get Description -->
  <?php $description = file_get_contents('../ressources/documents/description_alpinebat.html'); ?>
  <!-- Get Origin Story -->
  <?php $originstory = file_get_contents('../ressources/documents/originstory_alpinebat.html'); ?>

  <div class="main">
    <div class="blankContainer" style="--blankColor: transparent"></div>
    <div class="blankPartition" style="--bgcolor: #6bafff">
      <h2 class="mid">Alpine Bat</h2>
    </div>

    <div class="row">
      <div class="content">
        <div class="polaroid-animation">
          <div class="polaroid-frame">
            <img class="polaroid-image" src="../ressources/images/heroes/hero_alpinebat.webp" alt="">
            <h2 class="polaroid_text">"That happens when you eat too much cheese!"</h2>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="textbox" style="--textbox-color: #ffffff">
          <h2 class="hero_heading">Protector of the Alps!</h2>
          <p>
            <?php echo $description; ?>
          </p>
        </div>
      </div>

      <div class="content">
        <div class="textbox" style="--textbox-color: #ffffff">
          <h2 class="hero_heading">Origin Story</h2>
          <p>
            <?php echo $originstory; ?>
          </p>

        </div>
      </div>

    </div>
  </div>
  <!-- Bottom Footer Bar -->
  <?php include 'element_footer.php'; ?>

</body>

</html>