<?php
/* require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder
MercadoPago\SDK::setAccessToken("TEST-7796287116492122-072303-fdc8908792638e6c6d9118f64a2afdf4-614084063"); // Either Production or SandBox AccessToken
$payment = new MercadoPago\Payment();
$payment->transaction_amount = 141;
$payment->token = "YOUR_CARD_TOKEN";
$payment->description = "Ergonomic Silk Shirt";
$payment->installments = 1;
$payment->payment_method_id = "visa";
$payment->payer = array(
    "email" => "larue.nienow@email.com"
);
$payment->save();
echo $payment->status; */
?>
<?php

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');


MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
$preference->payment_methods = array(
    "excluded_payment_methods" => array(
        array("id" => "amex")
    ),
    "excluded_payment_types" => array(
        array("id" => "atm")
    ),
    "installments" => 6
);
// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->id = "1234";
$item->title = $_POST['title'];
$item->description = "Dispositivo móvil de Tienda e-commerce";
$item->picture_url = "./assets/003.jpg";
$item->quantity = 1;
$item->currency_id = $POST['unit'];
$item->unit_price = $_POST['price'];
$preference->items = array($item);


$preference->back_urls = array(
    "success" => "https://raulbarros22-mp-ecommerce-php.herokuapp.com/success.php",
    "failure" => "https://raulbarros22-mp-ecommerce-php.herokuapp.com/failure.php",
    "pending" => "http://www.tu-sitio/pending"
);
/* $preference->auto_return = "approved"; */


/* $preference->back_url = array(
    "success" => "https://raulbarros22-mp-ecommerce-php.herokuapp.com/success.php",
    "failure" => "https://raulbarros22-mp-ecommerce-php.herokuapp.com/failure.php"
); */
$preference->notification_url = "https://raulbarros22-mp-ecommerce-php.herokuapp.com/notification.php";

$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Lamda";
$payer->email = "test_user_63274575@testuser.com";
$payer->date_created = "2018-06-02T12:58:41.425-04:00";
$payer->phone = array(
    "area_code" => "11",
    "number" => "22223333"
);

$payer->identification = array(
    "type" => "DNI",
    "number" => "12345678"
);

$payer->address = array(
    "street_name" => "Cuesta Miguel Armendáriz",
    "street_number" => 123,
    "zip_code" => "1234"
);


/* $preference->payer = (object) array(
    "name" => "Lalo",
    "surname" => "Landa",
    "email" => "test_user_63274575@testuser.com",
    "phone" => array(
        "area_code" => "11",
        "phone" => "22223333"
    ),
    "address" => array(
        "street_name" => "False",
        "street_number" => 123,
        "zip_code" => "1234"
    )
); */


$preference->save();

/* $payment = new MercadoPago\Payment(); */

/* $payment->transaction_amount = 141;
$payment->token = "YOUR_CARD_TOKEN";
$payment->description = "Ergonomic Silk Shirt";
$payment->installments = 1;
$payment->payment_method_id = "visa"; */
/* $payment->payer = array(
    "name" => "Lalo",
    "surname" => "Landa",
    "email" => "test_user_63274575@testuser.com",
    "phone" => array(
        "area_code" => "11",
        "phone" => "22223333"
    ),
    "address" => array(
        "street_name" => "False",
        "street_number" => 123,
        "zip_code" => "1234"
    ),
);
$payment->save(); */
?>