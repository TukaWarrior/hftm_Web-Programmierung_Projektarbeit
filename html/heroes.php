<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/heros.css">
  <title>Meet your Heroes</title>

</head>

<body>

  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

  <div class="container">
    <h1>Meet our Heroes!</h1>
    <p>We have a hero to assist you in every task, no matter how questionable!</p>

    <div class="image-grid-row">
      <div class="image-grid-column">
        <div class="image-grid-content">
          <div class="polaroid-animation" onclick="loadNewPage_AlpineBat()">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_alpine-bat.png" alt="">
              <h1>Alpine Bat</h1>
            </div>
          </div>
        </div>
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_master-chief.png" alt="">
              <h1>Master Chief</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="image-grid-column">
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_evil-batman.png" alt="">
              <h1>Batman</h1>
            </div>
          </div>
        </div>
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_detective-bean.png" alt="">
              <h1>Detective Bean</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="image-grid-column">
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_keanu.png" alt="">
              <h1>Keanu Reeves</h1>
            </div>
          </div>
        </div>
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_stormtrooper.png" alt="">
              <h1>FN-69420</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="image-grid-column">
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_lara-croft.png" alt="">
              <h1>Lara Croft</h1>
            </div>
          </div>
        </div>
        <div class="image-grid-content">
          <div class="polaroid-animation">
            <div class="polaroid-frame">
              <img class="polaroid-image" src="../ressources/images/hero_doomguy.png" alt="">
              <h1>Doom Guy</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <script>
      function loadNewPage_AlpineBat() {
        window.location.href = 'index.html'; // Replace with the desired URL
      }
      function loadNewPage_Batman() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
      function loadNewPage_MasterChief() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
      function loadNewPage_DetectiveBean() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
      function loadNewPage_KeanuReeves() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
      function loadNewPage_LaraCroft() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
      function loadNewPage_FN69420() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
      function loadNewPage_DoomGuy() {
        window.location.href = 'https://www.example.com'; // Replace with the desired URL
      }
    </script> -->





















    <!-- Image Template -->
    <!-- <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_alpine-bat.png" alt="">
        <h1>Alpine Bat</h1>
      </div>
    </div>

    <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_master-chief.png" alt="">
        <h1>Master Chief</h1>
      </div>
    </div>


    <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_evil-batman.png" alt="">
        <h1>Batman</h1>
      </div>
    </div>

    <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_detective-bean.png" alt="">
        <h1>Detective Bean</h1>
      </div>
    </div>

    <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_keanu.png" alt="">
        <h1>Keanu Reeves</h1>
      </div>
    </div>

    <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_stormtrooper.png" alt="">
        <h1>FN-69420</h1>
      </div>
    </div> -->

    <!-- <div class="polaroid-animation">
      <div class="polaroid-frame">
        <img class="polaroid-image" src="../ressources/images/hero_stormtrooper.png" alt="">
        <h1>FN-69420</h1>
      </div>
    </div> -->

    <?php include 'new.php';?>
</body>

</html>