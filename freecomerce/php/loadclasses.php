<?php
function __autoload ($klasse) {
	$file = "php/classes/".$klasse.".php";
	if (file_exists ($file)) {
		require_once $file;
	}
	else {
		echo "hallowelo";
	}
}
?>