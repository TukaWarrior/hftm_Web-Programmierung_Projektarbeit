<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contact.css">
    <!-- <link rel="stylesheet" href="../css/index.css"> -->
    <!-- <link rel="stylesheet" href="../css/ComicStyle.css"> -->
    <link rel="stylesheet" href="../css/footer.css">
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="../ressources/images/favicon.webp">

</head>

<body>

    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>


    <!-- PHP Forms -->
    <?php
    // Variables
    $name = "";
    $email = "";
    $phone = "";
    $message = "";
    $urgency = "";

    // Test userinput for certain characters
    function test_input($data)
    {
        $data = trim($data); // Removes leading and trailing whitespaces. 
        $data = stripslashes($data); // Removes function backslashes. 
        $data = htmlspecialchars($data); // Converts special characters into their html entities. 
        return $data;
    }

    // If submitted:
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        // Retrieve and test user input
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $message = test_input($_POST["message"]);
        $urgency = test_input($_POST["urgency"]);

        // Get DateTime
        $currentDateTime = date("YmdHis_");

        // File directory
        $fileDirectoiry = dirname(__DIR__) . "\data\contactforms\\";

        // File name
        $fileName = $currentDateTime . $name . "_msg.txt";

        // File path
        $filePath = $fileDirectoiry . $fileName;

        // Create / Open File
        $contactForms = fopen($filePath, "w") or die("Unable to open file!");

        fwrite($contactForms, "Name: " . $name . "\n");
        fwrite($contactForms, "E-Mail: " . $email . "\n");
        fwrite($contactForms, "Phone: " . $phone . "\n");
        fwrite($contactForms, "Message: " . $message . "\n");
        fwrite($contactForms, "Urgency: " . $urgency);

        // Close File
        fclose($contactForms);
    }
    ?>

    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- HTML Forms -->
    <div class="container"></div>
    <div class="banner bg-image_1" style="--bannerHeight: 100px; --bgColor: #805f97">
        <h1 class="mid">Call a superhero!</h1>
    </div>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <article class="comic">

            <div class="panel panel_name">
                <p class="paneltext paneltext_top-left color_CoralRed">Name!</p>
                <input type="text" id="name" name="name" required autocomplete="name" maxlength="85"
                    placeholder="What a pretty name!">
            </div>

            <div class="panel panel_email">
                <p class="paneltext paneltext_top-left color_GreenYellow">E-Mail</p>
                <input type="email" id="email" name="email" autocomplete="email" maxlength="50"
                    placeholder="Where spammers text you...">
            </div>

            <div class="panel panel_phone">
                <p class="paneltext paneltext_top-right color_LightblueBlue">Phone</p>
                <input type="tel" id="phone" name="phone" autocomplete="tel" maxlength="40"
                    placeholder="Where scammers call you...">
            </div>


            <div class="panel panel_adress">
                <p class="paneltext paneltext_bottom-right color_YellowOrange">Adress</p>
                <input type="text" id="adress" name="adress" autocomplete="address-line1" maxlength="110"
                    placeholder="We don't actually need your adress, because superheroes always know where you are.">
            </div>

            <div class="panel panel_message">
                <p class="paneltext paneltext_top color_CoralRed">How can we help you?</p>
                <textarea id="message" name="message" maxlength="1500" required
                    placeholder="                  Please make it quick..."></textarea>
            </div>

            <div class="panel panel_radio">
                <p class="paneltext paneltext_top-left color_LightblueBlue">How serious is it?</p>

                <div class="panel panel_radio-option panel_radio-urgent1">
                    <p class="paneltext paneltext_bottom-left color_LightblueBlue">Grandma needs help!</p>
                    <label class="customRadio">
                        <input type="radio" name="urgency" value="urgency: 1/4" required>
                        <span class="radio_checkmark"></span>
                    </label>
                </div>

                <div class="panel panel_radio-option panel_radio-urgent2">
                    <p class="paneltext paneltext_top-right color_GreenYellow">Like a car crash...</p>
                    <label class="customRadio">
                        <input type="radio" name="urgency" value="urgency: 2/4" required>
                        <span class="radio_checkmark"></span>
                    </label>
                </div>

                <div class="panel panel_radio-option panel_radio-urgent3">
                    <p class="paneltext paneltext_bottom-left color_YellowOrange">Really Serious!</p>
                    <label class="customRadio">
                        <input type="radio" name="urgency" value="urgency: 3/4" required>
                        <span class="radio_checkmark"></span>
                    </label>
                </div>

                <div class="panel panel_radio-option panel_radio-urgent4">
                    <p class="paneltext paneltext_bottom-left color_CoralRed">I AM DYING AAAH!!!</p>
                    <label class="customRadio">
                        <input type="radio" name="urgency" value="urgency: 4/4" required>
                        <span class="radio_checkmark"></span>
                    </label>
                </div>

            </div>

            <input type="submit" name="submit" value="Submit">

        </article>
    </form>

  <!-- Bottom Footer Bar -->
  <?php include 'element_footer.php'; ?>
</body>

</html>