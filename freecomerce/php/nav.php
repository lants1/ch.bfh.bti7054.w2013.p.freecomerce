<?php 

// Links Array gemäss Aufgabe 4.2 erstellen und ausgeben...
$links = array("<a href='html/blacktea.html?cat_id=1'>Schwarztee</a>","<a href='html/whitetea.html'>Weisstee</a>","<a href='html/greentea.html'>Grüntee</a>",
"<a href='html/bluetea.html'>Blautee</a>");
echo "<ul>";
foreach($links AS $link)
{
	echo "<li>".$link."</li>";
}
echo "<ul>";
?>