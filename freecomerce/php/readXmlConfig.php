<?php
$filepath = "./config/configuration.xml";
if (file_exists($filepath)) {
    $xml = simplexml_load_file($filepath);
} else {
    exit('Could not read freecomerce xml-config');
}
?>