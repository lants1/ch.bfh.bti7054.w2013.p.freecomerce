<?php
//Task 11 Rest Service Aufruf für Bitcoins inklusive Parsen der JSON Response...
$url = "https://api.bitcoinaverage.com/exchanges/CHF";
$response = file_get_contents($url);
$jsonresponse = json_decode($response,true);
?>