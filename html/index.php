<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome</title>
  <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/index.css" />
  <link rel="stylesheet" href="../css/comicStyle.css" />
  <link rel="stylesheet" href="../css/animations.css" />
  <link rel="stylesheet" href="../css/footer.css" />

</head>

<body>

  <div id="pageTop">
    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>
  </div>

  <!-- Top -->
  <div class="container">
    <h1 class="big background-text" content="ever wondered">Ever wondered</h1>
    <h1 class="big background-text" content="what happens when">what happens when</h1>
    <h1 class="big background-text" content="you break your leg?">you break your leg?</h1>
    <h1 class="symbol pulse">⬇</h1>
  </div>
  <!--------------------------------------------------------->
  <div class="blank">
    <h3 class="mid">storytime!</h3>
    <h1 class="bigblank background-textV2" content="kapoooow">kapoooow</h1>
  </div>
  <!-- Story -->
  <article class="comic_index01">
    <div class="panel panel_flash01">
      <p class="paneltext paneltext_topleft" style="--bgColor: #e793bb">oh look, free beer!</p>
      <!-- bottomright -->
    </div>
    <div class="panel panel_flash02">
      <p class="paneltext paneltext_topleft" style="--bgColor: #75ff9e">Oh no!...</p>
    </div>
    <div class="panel panel_flash03">
      <p class="speech speechImage3">doesnt look good...</p>
    </div>
    <div class="panel panel_flash04">
      <p class="speech speechImage4">shit</p>
    </div>
    <div class="panel panel_flash05">
      <p class="paneltext paneltext_topright" style="--bgColor: #6db4b4">this is getting difficult</p>
    </div>
    <div class="panel panel_flash06">
      <p class="speech speechImage6">i cant do daily tasks anymore!</p>
      <p class="paneltext paneltext_bottomright" style="--bgColor: #e793bb">realizing...</p>
    </div>

    <div class="panel panel_flash07">
      <p class="paneltext paneltext_topleft" style="--bgColor: #75ff9e">later that day</p>
      <p class="speech speechImage7">this is exactly what i was looking for</p>
    </div>

  </article>
  <!--------------------------------------------------------->
  <div class="blank">
    <h3 class="mid">ehhhh ok </br> but </br> whats the point?</h3>
  </div>
  <!-- Reveal -->
  <article class="comic_index01">
    <div class="panel panel_ad01">
      <p class="speech speechImageHeadquarter">you need help? we offer help!</br>
        we are a company that hires a superhero team for any purpose.</br>
        the story above is only one of many possible cases where someone needs help!</p>
    </div>
    <div class="panel panel_ad02">
      <p class="paneltext paneltext_topleft" style="--bgColor: #75ff9e">our team is ready! are you?</p>
    </div>
    <div class="panel panel_ad03">
      <div>
        <p class="speech speechImageBrowse">
          what are you waiting for? browse the page and meet our team!</br>
          <a href="#pageTop">➪ go back to top</a>
        </p>
      </div>
    </div>
  </article>

  <!-- Bottom Footer Bar -->
  <?php include 'element_footer.php'; ?>

</body>

</html>