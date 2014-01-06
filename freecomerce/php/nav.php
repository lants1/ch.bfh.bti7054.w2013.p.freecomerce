<?php
/**
* Generates and displays the navigation menu for the page
*
* @author lants1
*/

// Task 5.2 Gebe jeder Seite eine ID...
$links [0] ['cat_id'] = 1;
$links [0] ['link'] = "?cat_id=1'>Schwarztee</a></div></li>";

$links [1] ['cat_id'] = 2;
$links [1] ['link'] = "?cat_id=2'>Weisstee</a></div></li>";

$links [2] ['cat_id'] = 3;
$links [2] ['link'] = "?cat_id=3'>Gr&uuml;ntee</a></div></li>";

$links [3] ['cat_id'] = 4;
$links [3] ['link'] = "?cat_id=4'>Blautee</a></div></li>";

// Task 5.1 ändere Design des Links für die aktuelle Seite
// via PHP und CSS...
echo "<ul>";
// Listenüberischt der Kategorie
foreach ( $links as $link ) {
	if (isset ( $_GET ['cat_id']) && $link['cat_id'] == $_GET['cat_id'] ) {
			echo "<li><div class='current-nav-page'><a href='".$_SERVER['PHP_SELF'].$link['link'];
	} else {
			echo "<li><div class='nav-page'><a href='".$_SERVER['PHP_SELF'].$link['link'];
		}
	}
echo "</ul>";

?>