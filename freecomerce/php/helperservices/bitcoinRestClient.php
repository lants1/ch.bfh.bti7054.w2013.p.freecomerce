<?php
/**
 * Calls the Bitcoin Rest services and use it to display the current exchange value
 * 
 * @author lants1
 */
//Task 11 Rest Service Aufruf für Bitcoins inklusive Parsen der JSON Response...
$url = "https://api.bitcoinaverage.com/exchanges/CHF";
$response = file_get_contents($url);
$jsonresponse = json_decode($response,true);
?>