<!DOCTYPE html>
<html>

<head>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/contact.css">
        <title>Contact</title>
    </head>


    <link rel="stylesheet" href="../css/styles.css">

    <title>Contact</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        /* Style inputs */
        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Style the container/contact section */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }

        /* Create two columns that float next to eachother */
        .column {
            float: left;
            width: 50%;
            margin-top: 6px;
            padding: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .column,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        /* Grey out disabled Submit Button */
        input[type="submit"][disabled] {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
</head>

<body>

    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>


    <!-- PHP Forms -->
    <?php

    // Variables
    $firstName = "";
    $lastName = "";
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
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $message = test_input($_POST["message"]);
        $urgency = test_input($_POST["urgency"]);

        // Get DateTime
        $currentDateTime = date("YmdHis_");

        // File directory
        $fileDirectoiry = dirname(__DIR__) . "\data\contactforms\\";

        // File name
        $fileName = $currentDateTime . $firstName . "_contactform.txt";

        // File path
        $filePath = $fileDirectoiry . $fileName;

        // Create / Open File
        $contactForms = fopen($filePath, "w") or die("Unable to open file!");

        fwrite($contactForms, "First Name: " . $firstName . "\n");
        fwrite($contactForms, "First Name: " . $lastName . "\n");
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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="on">

                    <label for="firstName">First Name</label>
                    <input type="text" id="fname" name="firstName" required="true"
                        placeholder="You have for sure a pretty name!">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lname" name="lastName" required="true" placeholder="Tell us your bloodline">

                    <label for="message">Message</label>
                    <textarea id="subject" name="message" required="true" placeholder="How can we help you?"
                        style="height:170px"></textarea>

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