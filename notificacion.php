<?php

MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

switch ($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment . find_by_id($_POST["id"]);
        break;
    case "plan":
        $plan = MercadoPago\Plan . find_by_id($_POST["id"]);
        break;
    case "subscription":
        $plan = MercadoPago\Subscription . find_by_id($_POST["id"]);
        break;
    case "invoice":
        $plan = MercadoPago\Invoice . find_by_id($_POST["id"]);
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Muchas gracias por su compra <?php echo $payment['id'] ?> </h3>
</body>

</html>