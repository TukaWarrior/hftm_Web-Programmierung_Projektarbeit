<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meet the Team</title>
    <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/comicStyle.css" />
    <link rel="stylesheet" href="../css/heroTeam.css" />
    <link rel="stylesheet" href="../css/footer.css" />

</head>

<body>
    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>

    <!-- Content -->
    <div class="blankContainer" style="--blankColor: transparent"></div>
    <div class="blankPartition" style="--bgcolor: #990000">
        <h2 class="mid">our team - the best of the best</h2>
    </div>
    <!-- Team Cards -->
    <div class="teamContainer">
        <div class="portfolio">
            <!-- Card 1 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_doomslayer.webp);"></div>
                <div class="portfolio-description">
                    <h4>Doom Slayer</h4>
                    <a class="link-button" href="hero_doomslayer.php">show details</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_keanu.webp);"></div>
                <div class="portfolio-description">
                    <h4>Keanu Reeves</h4>
                    <a class="link-button" href="hero_keanu.php">show details</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_alpinebat.webp);"></div>
                <div class="portfolio-description">
                    <h4>Alpine Bat</h4>
                    <a class="link-button" href="hero_alpinebat.php">show details</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_stormtrooper.webp);"></div>
                <div class="portfolio-description">
                    <h4>FN-1337</h4>
                    <a class="link-button" href="hero_stormtrooper.php">show details</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_batman.webp);"></div>
                <div class="portfolio-description">
                    <h4>Batman</h4>
                    <a class="link-button h4" href="hero_batman.php">show details</a>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_bean.webp);"></div>
                <div class="portfolio-description">
                    <h4>Johnny English</h4>
                    <a class="link-button h4" href="hero_bean.php">show details</a>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="portfolio-item">
                <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_laracroft.webp);"></div>
                <div class="portfolio-description">
                    <h4>Lara Croft</h4>
                    <a class="link-button h4" href="hero_laracroft.php">show details</a>
                </div>
            </div>

            <!-- Card 8 -->
            <!-- <div class="portfolio-item">
            <div class="portfolio-bg" style="--img: url(../ressources/images/heroes/hero_masterchief.webp);"></div>
            <div class="portfolio-description">
                <h4>Masterchief</h4>
                <a class="link-button h4" href="hero_masterchief.php">view hero</a>
            </div>
        </div> -->
        </div>
    </div>

    <!-- Bottom Footer Bar -->
    <?php include 'element_footer.php'; ?>

</body>

</html>