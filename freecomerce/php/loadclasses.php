<?php
function __autoload ($klasse) {
	$fileIndex = "php/classes/".$klasse.".php";
	$fileInPhp = "classes/".$klasse.".php";
	if (file_exists ($fileIndex)) {
		require_once $fileIndex;
	}
	else if(file_exists ($fileInPhp)){
		require_once $fileInPhp;
	}
}
?>