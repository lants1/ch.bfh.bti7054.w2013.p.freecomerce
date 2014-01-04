<?php
date_default_timezone_set('Europe/Zurich');
include('lib/Smarty-3.1.16/libs/Smarty.class.php');

// create object
$smarty = new Smarty;
$smarty->assign('title', 'Bad Idea to make templates a the end...:(');
$smarty->assign('navigationText', '<br><br><a href="../index.php">Back to Shop</a>');
$smarty->assign('contentText', 'Templates sollten ziehmlich früh im Projekt erstellt werden um ein mühsames umsteigen zu vermeiden...');
$smarty->assign('advertisementText', 'Waschamschienen leben länger mit Calgon...');

// display it
$smarty->display('thanks.tpl');
?>