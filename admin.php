<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: tot.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>
<style>
body {
  background-image: url('./Desert.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
 background-size: auto;
}