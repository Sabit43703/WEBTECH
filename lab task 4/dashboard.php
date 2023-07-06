<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
  header('Location: login.php');
}
?>


<html>
    <head>
        <title>

        </title>
    </head>
    <body>
    </body>
</html>