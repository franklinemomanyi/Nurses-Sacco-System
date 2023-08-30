<?php
session_start();
$_SESSION['name']='FRANKLINE';
$amount="1.00";

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="bulma.css">
</head>
<body>
<br><br>
<!-- PAYPAL -->
<form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <input type="hidden" name="business" value="F3L2JAJ5S9EJQ">
    <!-- Reason for payment -->
    <input type="hidden" name="item_name_1" value="Revene">

    <input type="hidden" name="amount_1" value="<?php echo $amount; ?>">
    <input type="hidden" name="currency_code" value="USD">
    <!-- Give a live URL with https -->
    <input type="hidden" name="shopping_url" value="paypal.php">
    <input type="hidden" name="return" value="db.php">
    <input type="hidden" name="cancel_return" value="paypal.php">
 <input type="submit" class="button is-warning is-large has-text-primary" value="PROCEED TO PAYPAL"/>
</form>
<!-- PAYPAL -->
</body>
</html>