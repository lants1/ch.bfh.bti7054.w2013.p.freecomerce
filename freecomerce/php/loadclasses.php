<?php
/**
* autoload for classes acording to the current directory
*
* @author lants1
*/
function __autoload ($klasse) {
	// two diffrent filepath's are possible
	$fileIndex = "php/classes/".$klasse.".php";
	$fileInPhp = "classes/".$klasse.".php";
	// choose the correct one
	if (file_exists ($fileIndex)) {
		require_once $fileIndex;
	}
	else if(file_exists ($fileInPhp)){
		require_once $fileInPhp;
	}
}
?>