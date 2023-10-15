<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Andres</title>
    <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/aboutMe.css" />
    <link rel="stylesheet" href="../css/comicStyle.css" />
    <link rel="stylesheet" href="../css/footer.css" />


    <style>
        body {
            background-image: url('../ressources/images/backgrounds/bg_about_andres.webp');
        }
    </style>

</head>

<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<body>

    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>

    <!-- Get Origin Story -->
    <?php $aboutme = file_get_contents('../ressources/documents/about_andres.html'); ?>

    <div class="main">

        <div class="blankContainer" style="--blankColor: transparent"></div>
        <div class="blankPartition" style="--bgcolor: #ad3915">
            <h2 class="mid">Andres Soria</h2>
        </div>

        <div class="row">
            <div class="aboutMePanel" style="width: 350px;">
                <p class="paneltext paneltext_topleft" style="font-size: 25px; font-weight: bold;  --bgColor: #e793bb">About me</p>
                <p>
                    <?php echo $aboutme; ?>
                </p>
            </div>
        </div>

    </div>

    <!-- Bottom Footer Bar -->
    <?php include 'element_footer.php'; ?>

</body>

</html>