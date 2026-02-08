<!DOCTYPE html>
<html>
<head>
    <title>Credit Card Selection</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>

    <?php
    if(isset($_POST["confirm"])) {
        // Check if a credit card option was selected
        if(isset($_POST["credit_card"])) {
            $credit_card = $_POST["credit_card"];
            echo "<p>Selected credit card: " . htmlspecialchars($credit_card) . "</p>";
        } else {
            echo "<p>Please select a credit card option.</p>";
        }
    }
    ?>
</body>
</html>