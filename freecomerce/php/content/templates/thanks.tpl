<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>{$title}</title>
<link rel="stylesheet" type="text/css" href="../../css/layout.css" />
<script type="text/javascript" src="../../js/validation.js"></script>
<script type="text/javascript" src="../../js/dhtmlFeatures.js"></script>
</head>
<body onload="javascript:dhtmlBlinker();">
	<div class="content">
		<div class="top_block header">
			<div class="content">
				<img src="../../gfx/zateeo_logo.png" alt="Zateeo Logo" class="left" />
			</div>
		</div>
		<div class="background navigation"></div>
		<div class="left_block navigation">
			<div class="content">
				<span id="blink" style="visibility: visible;">Navigation </span>
			{$navigationText}
			</div>
		</div>
		<div class="content">
			{$contentText}
		</div>
		<div class="bottom_block_adv advertisement">
			<div class="content">
			{$advertisementText}
			</div>
		</div>
		<div class="bottom_block footer">
			<div class="content">Footer</div>
		</div>
	</div>
</body>
</html>