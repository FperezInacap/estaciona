<?php

// Debemos conocer el $receiverId y el $secretKey de ante mano.
$receiverId = 419794;
$secretKey = 'ae30c75a0174c05e15a42bf280649ebc034e6809';

require __DIR__ . '/vendor/autoload.php';

$configuration = new KhipuConfiguration();
$configuration->setReceiverId($receiverId);
$configuration->setSecret($secretKey);
// $configuration->setDebug(true);

$client = new KhipuApiClient($configuration);
$payments = new KhipuClientPaymentsApi($client);

try {
    $opts = array(
        "transaction_id" => "MTI-100",
        "return_url" => "http://mi-ecomerce.com/backend/return",    
        "cancel_url" => "http://mi-ecomerce.com/backend/cancel",
        "picture_url" => "http://mi-ecomerce.com/pictures/foto-producto.jpg",
        "notify_url" => "http://mi-ecomerce.com/backend/notify",
        "notify_api_version" => "1.3"
    );
    $response = $payments->paymentsPost(
        "Compra de prueba de la API", //Motivo de la compra
        "CLP", //Monedas disponibles CLP, USD, ARS, BOB
        100.0, //Monto. Puede contener ","
        $opts //campos opcionales
);

    print_r($response);
} catch (KhipuApiException $e) {
    echo print_r($e->getResponseBody(), TRUE);
}