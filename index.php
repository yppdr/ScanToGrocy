<?php

require __DIR__ . '/vendor/autoload.php';

$api = new OpenFoodFacts\Api('food','fr');


//Milka Barcode

$product = $api->getProduct('3045140105106');
$productDataAsArray = $product->getData();


header("Content-Type: application/json");
echo json_encode($productDataAsArray);
exit();
