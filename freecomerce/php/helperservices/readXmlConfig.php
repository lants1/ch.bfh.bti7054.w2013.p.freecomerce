<?php
/**
* Reads a xml from the configuration path and stores it to the global $xml variable...
*
* @author lants1
*/
$filepath = "./config/configuration.xml";
if (file_exists($filepath)) {
    $xml = simplexml_load_file($filepath);
} else {
    exit('Could not read freecomerce xml-config');
}
?>