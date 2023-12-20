
<?php
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'yash4367@gmail.com'; //Business Email
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paypal Payment Gateway</title>
</head><body>
    <img src="images/image2.jpeg"/>
    <br/>Prodcut Name: 
    <br/>Product Price:
    <form action="<?php echo $paypal_link; ?>" method="post">
        <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="amount" value="5">
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
    </form>

    <form action="https://secure.paypal.com/uk/cgi-bin/webscr" method="post" name="paypal" id="paypal">
    <!-- Prepopulate the PayPal checkout page with customer details, -->
    <input type="hidden" name="first_name" value="<?php echo Firstname?>">
    <input type="hidden" name="last_name" value="<?php echo Lastname?>">
    <input type="hidden" name="email" value="<?php echo Email?>">
    <input type="hidden" name="address1" value="<?php echo Address?>">
    <input type="hidden" name="address2" value="<?php echo Address2?>">
    <input type="hidden" name="city" value="<?php echo City?>">
    <input type="hidden" name="zip" value="<?php echo Postcode?>">
    <input type="hidden" name="day_phone_a" value="">
    <input type="hidden" name="day_phone_b" value="<?php echo Mobile?>">

    <!-- We don't need to use _ext-enter anymore to prepopulate pages -->
    <!-- cmd = _xclick will automatically pre populate pages -->
    <!-- More information: https://www.x.com/docs/DOC-1332 -->
    <input type="hidden" name="cmd" value="_xclick" />
    <input type="hidden" name="business" value="paypal@email.com" />
    <input type="hidden" name="cbt" value="Return to Your Business Name" />
    <input type="hidden" name="currency_code" value="GBP" />

    <!-- Allow the customer to enter the desired quantity -->
    <input type="hidden" name="quantity" value="1" />
    <input type="hidden" name="item_name" value="Name of Item" />

    <!-- Custom value you want to send and process back in the IPN -->
    <input type="hidden" name="custom" value="<?php echo session_id();?>" />

    <input type="hidden" name="shipping" value="<?php echo $shipping_price; ?>" />
    <input type="hidden" name="invoice" value="<?php echo $invoice_id ?>" />
    <input type="hidden" name="amount" value="<?php echo $total_order_price; ?>" />
    <input type="hidden" name="return" value="http://<?php echo $_SERVER['SERVER_NAME']?>/shop/paypal/thankyou"/>
    <input type="hidden" name="cancel_return" value="http://<?php echo $_SERVER['SERVER_NAME']?>/shop/paypal/cancelled" />

    <!-- Where to send the PayPal IPN to. -->
    <input type="hidden" name="notify_url" value="http://<?php echo $_SERVER['SERVER_NAME']?>/shop/paypal/process" />
</form>

</body>
</html>