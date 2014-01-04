<?php /* Smarty version Smarty-3.1.16, created on 2014-01-04 12:00:37
         compiled from "./templates/thanks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202388542752c7e71867f309-40763897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a3102e58cc71128186cc3efbd1e655dae73473' => 
    array (
      0 => './templates/thanks.tpl',
      1 => 1388833152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202388542752c7e71867f309-40763897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52c7e7186a57d7_84917944',
  'variables' => 
  array (
    'title' => 0,
    'navigationText' => 0,
    'contentText' => 0,
    'advertisementText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c7e7186a57d7_84917944')) {function content_52c7e7186a57d7_84917944($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" type="text/css" href="../css/layout.css" />
<script type="text/javascript" src="../js/validation.js"></script>
<script type="text/javascript" src="../js/dhtmlFeatures.js"></script>
</head>
<body onload="javascript:dhtmlBlinker();">
	<div class="content">
		<div class="top_block header">
			<div class="content">
				<img src="../gfx/zateeo_logo.png" alt="Zateeo Logo" class="left" />
			</div>
		</div>
		<div class="background navigation"></div>
		<div class="left_block navigation">
			<div class="content">
				<span id="blink" style="visibility: visible;">Navigation </span>
			<?php echo $_smarty_tpl->tpl_vars['navigationText']->value;?>

			</div>
		</div>
		<div class="content">
			<?php echo $_smarty_tpl->tpl_vars['contentText']->value;?>

		</div>
		<div class="bottom_block_adv advertisement">
			<div class="content">
			<?php echo $_smarty_tpl->tpl_vars['advertisementText']->value;?>

			</div>
		</div>
		<div class="bottom_block footer">
			<div class="content">Footer</div>
		</div>
	</div>
</body>
</html><?php }} ?>
