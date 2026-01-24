<?php



$username = "";
$email = "";
$password = "";

if(isset($_POST['btn'])){
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}





?>

<h2>Username: <?php echo $username ?>  </h2>
<h2>Email: <?php echo $email ?> </h2>
<h2>Password: <?php echo $password ?>  </h2>