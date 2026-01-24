<?php
/*


$username = "";
$email = "";
$password = "";

if(isset($_POST['btn'])){
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
*/



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Post method e data gula secure thake url e dekhai na
    get methon e data dile segula url e dekhai! -->


    

    <form action="form1.php" method = "POST" >

        <label>Username</label><br>
        <input type="text" name="user_name"><br>

        <label>email</label><br>
        <input type="email" name="email"><br>


        <label>password </label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Submit data" name="btn">







    </form>

    <!--<h2>Username: <?php echo $username ?>  </h2>
    <h2>Email: <?php echo $email ?> </h2>
    <h2>Password: <?php echo $password ?>  </h2> -->

    




    
</body>
</html>