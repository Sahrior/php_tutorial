<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take data from form</title>
</head>
<body>

    <form action="Final_Practice1.php" method = "post">

        <label>Username: </label><br>
        <input type="text" name="username" id=""><br>

        <label>Password: </label><br>
        <input type="password" name="password"> <br> <br>

        <input type="submit"><br>

    </form>
    
</body>
</html>

<?php

if (isset($_POST["username"], $_POST["password"])) {

    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";

}


?>
