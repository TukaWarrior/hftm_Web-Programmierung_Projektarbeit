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
    </style>
</head>

<body>

  <!-- Top Navigation Bar -->
  <?php include 'element_topnav.php'; ?>

    <div class="container">
        <div style="text-align:center">
            <h2>Do you need a hero?</h2>
            <p>Yes? No problem. No matter tthe cause or reason, a superhero will rush to your aid! No questions asked!</p>
        </div>
        <div class="row">
            <div class="column">
                <img src="https://media.licdn.com/dms/image/C4E12AQFY1HPLdvUlAw/article-cover_image-shrink_423_752/0/1614954939274?e=1702512000&v=beta&t=9HzJe79tHexHQ8N2kHR3H8UF2MSlKYGsaA0uI3bnvxk" style="width:100%">
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="You have for sure a pretty name!">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Tell us your bloodline">

           
                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="How can we help you?"
                        style="height:170px"></textarea>

                    <input type="submit" value="Submit">

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

</html>