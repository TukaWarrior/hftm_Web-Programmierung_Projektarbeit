<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>



    
    <?php
    // Get the parent directory (in this case root) and navigate to contactforms.
    $formsPath = dirname(__DIR__) . "\data\contactforms\\";
    echo $formsPath;

    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // Retrieve user input
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    // Generate a unique filename based on the user's name
    $filename = $name . "_contactform.txt";


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name, "<br>";
    echo $email, "<br>";
    echo $website, "<br>";
    echo $comment, "<br>";
    echo $gender, "<br>";


    // Open the file for writing
    $filepathname = $formsPath . $filename;
    $myfile = fopen($filepathname, "w") or die("Unable to open file!");


    fwrite($myfile, "Name: " . $name . "\n");
    fwrite($myfile, "E-mail: " . $email . "\n");
    fwrite($myfile, "Website: " . $website . "\n");
    fwrite($myfile, "Comment: " . $comment . "\n");
    fwrite($myfile, "Gender: " . $gender . "\n");

    // Close the file
    fclose($myfile);
    $test1 = $formsPath . $filename;
    echo $test1;
    
    echo "Did it work?";
    ?>

</body>

</html>