<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
    <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/comicStyle.css" />
    <link rel="stylesheet" href="../css/about.css" />
    <link rel="stylesheet" href="../css/footer.css" />

</head>

<body>
    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>

    <div class="blankContainer" style="--blankColor: transparent"></div>

    <!-- Content "who we are" -->
    <div class="blankPartition" style="--bgcolor: rgb(109, 180, 180)">
        <h2 class="mid">who we are</h2>
    </div>

    <div class="container">
        <div class="containerGrid">
            <div class="box box-1" style="--img: url(../ressources/images/avatar/andres.webp);"
                data-text="Andres Soria">
                <a class="link-button" href="about_andres.php"></a>
            </div>
            <div class="box box-2" style="--img: url(../ressources/images/avatar/luca.webp);"
                data-text="Luca Bützberger">
                <a class="link-button" href="about_luca.php"></a>
            </div>
            <div class="box box-3" style="--img: url(../ressources/images/avatar/nicola.webp);" data-text="Nicola Jöhr">
                <a class="link-button" href="about_nicola.php"></a>
            </div>
        </div>
    </div>

    <div class="blankPartition" style="--bgcolor: #ffd000">
        <h2 class="mid">what we do</h2>
    </div>

    <!-- Content description -->
    <div class="containerPlainText">
        <p class="descriptionBig">
            Helping-Guard Agency - Where your wildest dreams and most peculiar predicaments meet the world's quirkiest
            solution
            provider!
        </p>
        <p class="description">
            At the Helping-Guard Agency we believe in making everyday life an extraordinary adventure. Our superhero team is ready
            for any mission, no matter how mundane or eccentric. Just don't ask them to fix the Wi-Fi - even heroes have
            their limits!
        </p>
        <ul>
            <li>Tired of doing your laundry? Helping-Guard Agency to the rescue! We send in caped crusaders to fold your socks
                with unparalleled precision.</li></br>
            <li>Got a date that could use some spicing up? Our Helping-Guard dating package includes a sidekick who'll
                narrate your evening with dramatic flair, turning mundane conversations into epic sagas of love.</li>
            </br>
            <li>Need someone to "accidentally" leave your family gathering? We've got the "Crisis-in-Cousinville"
                special;
                our heroes will stage a faux alien invasion, and your relatives will never forget the day they almost
                met
                extraterrestrials.</li></br>
            <li>Got a relentless pest problem? We've got "Insecta-Interceptors" who'll politely ask the bugs to leave,
                or
                maybe just throw a spectacular farewell party for them.</li></br>
        </ul>
    </div>

    <div class="blankPartition" style="--bgcolor: #ff99ff">
        <h2 class="mid">emotional support</h2>
    </div>

    <div class="container">
        <div>
            <div class="containerPhil">
                <div class="boxPhil" style="--img: url(../ressources/images/avatar/philipp.webp);"
                    data-text="Philipp Kupper"></div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Bar -->
    <?php include 'element_footer.php'; ?>

</body>

</html>