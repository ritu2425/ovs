<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: tot.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: adlogin.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
	<center>
        <h1>vote result</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>
