<?php
/**
* Generates and displays the navigation menu for the page
*
* @author lants1
*/

// Via Userclass die DB Abfrage machen...
$cat = new Category();
$result = $cat->getCategories();



// Task 5.1 ändere Design des Links für die aktuelle Seite
// via PHP und CSS...
echo "<ul>";
// Listenüberischt der Kategorie
// Get the ProductList from DB


while($row = $result->fetch_assoc()){
	if (isset ( $_GET ['cat_id']) && isset($_GET['chart']) == false && $row['categorie_id'] == $_GET['cat_id']) {
			echo "<li><div class='current-nav-page'><a href='".$_SERVER['PHP_SELF']."?cat_id=".$row['categorie_id']."'>".utf8_encode($row['text_'.$languageSetting.''])."</a></div></li>";
	} else {
			echo "<li><div class='nav-page'><a href='".$_SERVER['PHP_SELF']."?cat_id=".$row['categorie_id']."'>".utf8_encode($row['text_'.$languageSetting.''])."</a></div></li>";
		}
	}
echo "</ul>";

?>