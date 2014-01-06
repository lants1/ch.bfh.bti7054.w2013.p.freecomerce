<?php
/**
* Generates and displays the navigation menu for the page
*
* @author lants1
*/

// Via Userclass die DB Abfrage machen...
$cat = new Category();
$linksFromDb = $cat->getCategories();


// Task 5.2 Gebe jeder Seite eine ID...
// Diese Umwandlung des Datenbankresultats wäre eigentlich nicht nötig, da
// in Task 5.2 ein mehrdimensionales array verlangt wird lasse ich dies jedoch unrefactored...
$links [0] ['cat_id'] = $linksFromDb[1]['cat_id'];
$links [0] ['link'] = "?cat_id=1'>".utf8_encode($linksFromDb[1]['link'])."</a></div></li>";

$links [1] ['cat_id'] = $linksFromDb[2]['cat_id'];;
$links [1] ['link'] = "?cat_id=2'>".utf8_encode($linksFromDb[2]['link'])."</a></div></li>";

$links [2] ['cat_id'] = $linksFromDb[3]['cat_id'];
$links [2] ['link'] = "?cat_id=3'>".utf8_encode($linksFromDb[3]['link'])."</a></div></li>";

$links [3] ['cat_id'] = $linksFromDb[4]['cat_id'];
$links [3] ['link'] = "?cat_id=4'>".utf8_encode($linksFromDb[4]['link'])."</a></div></li>";

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