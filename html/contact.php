<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/ComicStyles.css">
    <!-- <link rel="stylesheet" href="../css/about.css"> -->
    <title>Contact</title>

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

    <!-- HTML Forms -->
    <div class="container">
        <div style="text-align:center">
            <h2>Do you need a hero?</h2>
            <p>Yes? No problem. No matter tthe cause or reason, a superhero will rush to your aid! No questions asked!
            </p>


            <div class="aboutBlank" style="--bgcolor: #ffd000">
        <h2 class="mid">what we do</h2>
    </div>


        </div>
        <!-- Table Grid -->
        <div class="row">
            <!-- Left Part: Image -->
            <div class="column">
                <img src="https://media.licdn.com/dms/image/C4E12AQFY1HPLdvUlAw/article-cover_image-shrink_423_752/0/1614954939274?e=1702512000&v=beta&t=9HzJe79tHexHQ8N2kHR3H8UF2MSlKYGsaA0uI3bnvxk"
                    style="width:100%">
            </div>
            <!-- Right Part: Form Input -->
            <div class="column">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <article class="comic">

                        <div class="panel panel_name">
                            <p class="paneltext paneltext_top-left color_CoralRed">Name!</p>
                            <input type="text" id="name" name="name" required autocomplete="name" maxlength="50"
                                placeholder="You have for sure a pretty name!">
                        </div>

                        <div class="panel panel_email">
                            <p class="paneltext paneltext_top-left color_GreenYellow">E-Mail</p>
                            <input type="email" id="email" name="email" autocomplete="email" maxlength="254"
                                placeholder="Your E-Mail Adress">
                        </div>

                        <div class="panel panel_phone">
                            <p class="paneltext paneltext_top-right color_LightblueBlue">Phone</p>
                            <input type="tel" id="phone" name="phone" autocomplete="tel"
                                placeholder="Your Phone number">
                        </div>


                        <div class="panel panel_adress">
                            <p class="paneltext paneltext_bottom-right color_YellowOrange">Adress</p>
                            <input type="text" id="adress" name="adress" autocomplete="address-line1"
                                placeholder="Give us your adress. Or don't. Our superheroes know where you are.">
                        </div>

                        <div class="panel panel_message">
                            <p class="paneltext paneltext_top color_CoralRed">How can we help you?</p>
                            <textarea id="message" name="message" maxlength="960" required
                                placeholder="How can we help you?"></textarea>
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
            </div>
        </div>
    </div>

</body>

</html>