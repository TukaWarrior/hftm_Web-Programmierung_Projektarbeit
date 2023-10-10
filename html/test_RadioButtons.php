<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<style>
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .radiobutton {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 0%;
    }

    /* On mouse-over, add a grey background color */
    /* .container:hover input~.radiobutton {
        background-color: #ccc;
    } */

    /* When the radio button is checked, add a blue background */
    .container input:checked~.radiobutton {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .radiobutton:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked~.radiobutton:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .radiobutton:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }



    /* HIDE RADIO */
    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=radio]+img {
        cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked+img {
        outline: 2px solid #f00;
    }
</style>

<body>
    <!-- Top Navigation Bar -->
    <?php include 'element_topnav.php'; ?>

    <h1>Custom Radio Buttons</h1>
    <label class="container">One
        <input type="radio" checked="checked" name="radio">
        <span class="radiobutton"></span>
    </label>
    <label class="container">Two
        <input type="radio" name="radio">
        <span class="radiobutton"></span>
    </label>
    <label class="container">Three
        <input type="radio" name="radio">
        <span class="radiobutton"></span>
    </label>
    <label class="container">Four
        <input type="radio" name="radio">
        <span class="radiobutton"></span>
    </label>


    <label>
        <input type="radio" name="test" value="value1" checked>
        <img src="https://via.placeholder.com/40x60/0bf/fff&text=A" alt="Option 1">
    </label>

    <label>
        <input type="radio" name="test" value="value2">
        <img src="https://i.pinimg.com/originals/fd/98/73/fd9873a4da721436f7b96c3cc518a4d7.jpg" width="100px" alt="Option 2">
    </label>

</body>

</html>