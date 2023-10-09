<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/ComicStyle.css">
  <link rel="stylesheet" href="../css/Animations.css">
  <title>Index</title>
</head>

<body>

  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

  </div>

  <!-- Top -->
  <div class="container">
    <h1 class="big background-text" content="ever wondered">Ever wondered</h1>
    <h1 class="big background-text" content="what happens when">what happens when</h1>
    <h1 class="big background-text" content="you break your ancle?">you break your ancle?</h1>
    <h1 class="symbol pulse">⬇</h1>
  </div>
  <!--------------------------------------------------------->
  <div class="blank">
    <h3 class="mid">storytime!</h3>
    <h1 class="bigblank background-textV2" content="kapoooow">kapoooow</h1>
  </div>
  <!-- Story -->
  <article class="comic">
    <div class="panel">
      <p class="text bottom-right">just a regular day saving the world</p>
    </div>
    <div class="panel">
      <p class="text top-left">Oh no!...</p>
    </div>
    <div class="panel">
      <p class="speech speechImage3">doesnt look good...</p>
    </div>
    <div class="panel">
      <p class="speech speechImage4">shit</p>
    </div>
    <div class="panel">
      <p class="text top-right">this is getting difficult</p>
    </div>
    <div class="panel">
      <p class="speech speechImage6">i cant do daily tasks anymore!</p>
      <p class="text bottom-right">realizing...</p>
    </div>

    <div class="panel">
      <p class="text top-left">later that day</p>
      <p class="speech speechImage7">this is exactly what i was looking for</p>
    </div>

  </article>
  <!--------------------------------------------------------->
  <div class="blank">
    <h3 class="mid">ehhhh ok </br> but </br> whats the point?</h3>
  </div>
  <!-- Reveal -->
  <article class="comic">
    <div class="panelV2">
      <p class="speech speechImageHeadquarter">you need help? we offer help!</br>
        we are a company that hires a superhero team for any purpose.</br>
        the story above is only one of many possible cases where someone needs help!</p>
    </div>
    <div class="panelV2">
      <p class="text top-left">our team is ready!</p>
    </div>
    <div class="panelV2">
      <p class="text top-right">learn more</p>
      <div class="topnav">
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'heroes.php')
          echo 'class="active"'; ?>
          href="heroes.php">Heroes</a>
      </div>
    </div>
  </article>

  </div>

  <footer>© 2023 Awesome Company</footer>

</body>

</html>