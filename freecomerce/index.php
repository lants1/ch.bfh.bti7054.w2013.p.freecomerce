<?php
/**
* Startpoint for the freecomerce webshop containts the layout and includes
* for the content, configuration, language and classloading...
*
* @author lants1
*/
include_once ('php/loadclasses.php');
include_once ('php/language.php');
include_once ('php/readXmlConfig.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Zateeo Webshop</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/dhtmlFeatures.js"></script>
</head>
<body onload="javascript:dhtmlBlinker();">
	<div class="content">
	<!-- Page Header -->
		<div class="top_block header">
			<div class="content">
				<img src="gfx/zateeo_logo.png" alt="Zateeo Logo" class="left" />
				<div style="float: right;">
					<a href="<?php echo $_SERVER['PHP_SELF']."?chart=true"?>"><img
						src="gfx/cart.png" alt="Warenkorb" height="32" width="32"/></a>
				<?php languageChangeDialog();?>
				<?php include ('php/usersession.php'); ?>
			</div>
			</div>
		</div>
		<div class="background navigation"></div>
		<!-- Place for the navigation -->
		<div class="left_block navigation">
			<div class="content">
				<span id="<?php if($xml->blink=="true") {echo "blink";};?>" style="visibility: visible;">Navigation </span>
			<?php include("php/nav.php"); ?>
			</div>
		</div>
		<!-- Content is placed here-->
		<div class="content">
			<?php include("php/content.php"); ?>
		</div>
		<!-- Advertisment-->
		<div class="bottom_block_adv advertisement">
			<div class="content">
			Advertisement
			<?php include("php/adv.php"); ?>
			</div>
		</div>
		<!-- Page footer -->
		<div class="bottom_block footer">
			<div class="content">Footer: Thanks to <a href="php/thanks.php">Me</a></div>
		</div>
	</div>
</body>
</html>