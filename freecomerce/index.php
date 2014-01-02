<?php 
include_once ('php/language.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Zateeo Webshop</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
	<div class="content">
		<div class="top_block header">
			<div class="content">
			<img src="gfx/zateeo_logo.png" alt="Zateeo Logo" class="left"/>
			<div style="float:right;">
				<a href="<?php echo $_SERVER['PHP_SELF']."?chart=true"?>"><img src="gfx/cart.png" alt="Warenkorb"/></a>
				<?php languageChangeDialog();?>
			</div>
			</div>
		</div>
		<div class="background navigation">
		</div>
		<div class="left_block navigation">
			<div class="content">
			Navigation
			<?php include("php/nav.php"); ?>
			</div>
		</div>
		<div class="content">
			Inhalt
			<?php include("php/content.php"); ?>
		</div>
		<div class="bottom_block_adv advertisement">
			<div class="content">
			Advertisement
			<?php include("php/adv.php"); ?>
			</div>
		</div>
		<div class="bottom_block footer">
			<div class="content">
			Footer
			</div>
		</div>
	</div>
</body>
</html>