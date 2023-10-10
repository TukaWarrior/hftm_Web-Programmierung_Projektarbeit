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

            <div class="container_skewed-panel">
                <div class="skewed-panel-right">
                    <div>
                        <h1>Hello There</h1>
                    </div>
                </div>
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
                <div class="panel">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <div class="container_skewed-panel">
                            <div class="skewed-panel-right">
                                <div>
                                    <label for="firstName">Name</label>
                                    <input type="text" id="name" name="name" required autocomplete="name" maxlength="50"
                                        placeholder="You have for sure a pretty name!">
                                </div>
                            </div>
                        </div>


                        <label for="firstName">Name</label>
                        <input type="text" id="name" name="name" required autocomplete="name" maxlength="50"
                            placeholder="You have for sure a pretty name!">

                        <label for="email">E-Mail</label>
                        <input type="email" id="email" name="email" autocomplete="email" maxlength="254"
                            placeholder="Your E-Mail Adress">

                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" autocomplete="tel" placeholder="Your Phone number">

                        <label for="adress">Adress</label>
                        <input type="text" id="adress" name="adress" autocomplete="address-line1"
                            placeholder="Give us your adress. Or don't. Our superheroes know where you are.">

                        <label for="message">Message</label>
                        <textarea id="message" name="message" maxlength="500" required
                            placeholder="How can we help you?" style="height:170px"></textarea>

                        <label for="urgency">How Serious is it?</label>
                        <input type="radio" name="urgency" value="urgent0" required>I have time
                        <input type="radio" name="urgency" value="urgent1" required>Please Hurry
                        <input type="radio" name="urgency" value="urgent2" required>Really Serious!
                        <input type="radio" name="urgency" value="urgent3" required>I AM DYING AAAAAAAA!!!
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="half right" id="">
        <div class="comic-pane">
            <div class="text">
                <div class="holder">
                    <h2 class="blue">Blue 1/2 Panel Header</h2>
                    <p>Captain universe; angel montana tempest nova franklin "foggy" nelson! Augustus "gus" beezer boom
                        boom black knight john stacy micah sanders.</p>
                </div>
            </div>
            <!-- <div class="comic-image"><span class="cimg"></span></div> -->
        </div>
    </div>


</body>

<!-- Currently Removed: -->
<!-- <label for="country">Country</label>
    <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
    </select> -->

<!-- // Send as Email
        $to = "luca.buetzberger@gmail.com";
        $subject = "New Contact Form Submission";
        $headers = "From: sender@example.com";
    
        $messageBody = "First Name: " . $firstName . "\n";
        $messageBody .= "Last Name: " . $lastName . "\n";
        $messageBody .= "Message: " . $message . "\n";
        $messageBody .= "Urgency: " . $urgency;

        ini_set("SMTP", "localhost");
        ini_set("smtp_port", "25");
    
        mail($to, $subject, $messageBody, $headers); -->


</html>