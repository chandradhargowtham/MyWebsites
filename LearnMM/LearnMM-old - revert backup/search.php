<?php include "header/header.html" ?>
<?php include "pageGenerator.php" ?>
<html>
<link href="style.css" type = "text/css" rel="stylesheet">
<form action = search.php method = "GET">
<p>Enter the search query</p>
<input type="text" name = "search">
<input type="submit" value="Search">
</form>
</html>
<?php

$category = $_GET["category"];
$searchQuery = $_GET["search"];

if(isset($searchQuery)){
$a=scandir("articles/");


for($i=2;$i<9999;$i++)
{
	
	if($a[$i]=="")
{
	break;
}

$str=generatePage($a[$i]);

//echo "OMG";
if(stripos($str, $searchQuery))
	{
	$path= "articles/$a[$i]";
	echo "<div class = article>";
	echo '<p class="category">'.substr($a[$i], 0,strpos($a[$i], "-")).'</p>';
echo "<p>".substr($a[$i], 0,strlen($a[$i])-5)."</p>";


echo '<a href="'.$str.'">'."Go to Article".'</a>';

echo "</div>";
	if($i%4==0)
	{
		echo "<br>";
	}
}
}

echo "<br>End of results<br>";
}

?>
<?php include "footer/footer.html" ?>