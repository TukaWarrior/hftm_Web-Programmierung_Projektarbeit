<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/hero.css" />
  <link rel="stylesheet" href="../css/ComicStyle.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <title>Hero: Doomslayer</title>
  <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />

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

  <!-- Get Origin Story -->
  <?php $originstory = file_get_contents('../ressources/documents/originstory_doomslayer.html'); ?>

  <div class="main">
    <div class="blankContainer" style="--blankColor: transparent"></div>
    <div class="blankPartition" style="--bgcolor: #ba1a1c">
      <h2 class="mid">Doom Slayer</h2>
    </div>

    <div class="row">
      <div class="content">
        <div class="polaroid-animation">
          <div class="polaroid-frame">
            <img class="polaroid-image" src="../ressources/images/heroes/hero_doomslayer.webp" alt="">
            <h1 class="hero_heading">some brutal quote</h1>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="textbox" style="--textbox-color: #ffffff">
          <h2 class="hero_heading">Superpowers</h2>
          <p>Supersonic Flying <br>
            Shooting Fondue out of fingers<br>
            Sonic Blast Yodeling
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