<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hero: Doom Slayer</title>
  <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/hero.css" />
  <link rel="stylesheet" href="../css/comicStyle.css" />
  <link rel="stylesheet" href="../css/footer.css" />


  <style>
    body {
      background-image: url('../ressources/images/backgrounds/bg_doomslayer1.webp');
    }
  </style>

</head>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<body>

  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

  <!-- Get Description -->
  <?php $description = file_get_contents('../ressources/documents/description_doomslayer.html'); ?>
  <!-- Get Origin Story -->
  <?php $originstory = file_get_contents('../ressources/documents/originstory_doomslayer.html'); ?>

  <div class="main">
    <div class="blankContainer" style="--blankColor: transparent"></div>
    <div class="blankPartition" style="--bgcolor: #af1e18">
      <h2 class="mid">Doom Slayer</h2>
    </div>

    <div class="row">
      <div class="content">
        <div class="polaroid-animation">
          <div class="polaroid-frame">
            <img class="polaroid-image" src="../ressources/images/heroes/hero_doomslayer.webp" alt="">
            <p class="polaroid_text">"Rip and tear until it's done!"</p>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="textbox" style="--textbox-color: #ffffff">
          <h2 class="hero_heading">The Only thing they fear is you</h2>
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