<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/hero.css" />
  <link rel="stylesheet" href="../css/ComicStyle.css" />
  <link rel="stylesheet" href="../css/footer.css" />
  <title>Batman</title>
  <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />

  <style>
    body {
      background-image: url('../ressources/images/backgrounds/bg_batman1.webp');
    }
  </style>

</head>

<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<body>


  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

  <!-- Get Origin Story -->
  <?php $originstory = file_get_contents('../ressources/documents/originstory_batman.html'); ?>

  <div class="main">
    <div class="blankContainer" style="--blankColor: transparent"></div>
    <div class="blankPartition" style="--bgcolor: #614278">
      <h2 class="mid">Batman</h2>
    </div>

    <div class="row">
      <div class="content">
        <div class="polaroid-animation">
          <div class="polaroid-frame">
            <img class="polaroid-image" src="../ressources/images/heroes/hero_batman.webp" alt="">
            <h1 class="hero_heading">funny quote</h1>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="textbox" style="--textbox-color: #ffffff">
          <h2 class="hero_heading">Superpowers</h2>
          <p>Some funny powers
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