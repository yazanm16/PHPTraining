<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="superGlobals.php" method="post">
    <input type="text" name="username">
    <input type="submit">
    <a href="superGlobals.php?user_id=123">Click Me</a>
</form>
</body>
</html>

<?php
/* Superglobals in PHP are built-in variables that are always accessible, regardless of scope. They are used to access information about the server:
    $_GET: Used to collect data sent via URL parameters.
    $_POST: Used to collect data sent via HTTP POST method.
    $_REQUEST: Used to collect data sent via both GET and POST methods.
    $_SERVER: Contains information about headers, paths, and script locations.
    $_SESSION: Used to store session variables.
    $_COOKIE: Used to access cookies.
    $_FILES: Used to handle file uploads.


*/
    //only test not a real example

    // Using $_GET to get data from URL
    if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];
        echo "User ID is: " . $id;
    }else{
        echo "User ID is not set";
    }
    // Using $_POST to get data from form submission
    echo "<br>";
    if(isset($_POST['username'])){
        $name = $_POST['username'];
        echo "Welcome " . $name;
    }else{
        echo "Please enter your name";
    }
    echo "<br>";
    // Using $_REQUEST to get both GET and POST data
    if(isset($_REQUEST['username'])){
        $nameReq = $_REQUEST['username'];
        echo "Using REQUEST: Welcome " . $nameReq;
    }else{
        echo "Using REQUEST: Please enter your name";
    }
    // Using $_SERVER to get server information
    echo "<br>";
    echo "Server Name: " . $_SERVER['SERVER_NAME'];//localhost
    echo "<br>";

    // Note: $_SESSION, $_COOKIE, and $_FILES require additional setup (like starting a session, setting cookies, or uploading files) to demonstrate their usage.
?>