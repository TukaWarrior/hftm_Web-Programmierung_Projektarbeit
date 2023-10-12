<!DOCTYPE html>
<html>

<body>
    <div class="topnav">
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?> href="index.php">Home</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'heroesTest.php') echo 'class="active"'; ?> href="heroesTest.php">meet the team</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?> href="contact.php">Contact</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"'; ?> href="about.php">About</a>
        <a <?php if (basename($_SERVER['PHP_SELF']) == 'account.php') echo 'class="active"'; ?> href="#account" class="split">Account</a>
    </div>
</body>

</html>