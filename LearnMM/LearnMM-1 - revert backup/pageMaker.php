<?php include "header/header.html" ?>
<!DOCTYPE HTML>
<html>
<form action ="pagemaker.php" method="POST">
	<p>Enter Page Heading</p>
	<input type="text" name="ArticleHeading">
	<p>Enter Article Type</p>
	<select name="ArticleCategory">
		<option>Unity</option>
		<option>PHP</option>
	</select><br>
	<p>Enter Article Content</p>
	<p>Enter &ltbr&gt for New Line.<br> Enclose text between &ltstrong&gt and &lt/strong&gt for bold, &ltem&gt and &lt/em&gt for italic. <br>Use &ltimg src=""&gt HTML tags for images and other content for now.</p>
	<textarea name="ArticleContent" rows="4" cols="50"></textarea><br>
	<input type="submit" value="Create Page">
</html>
<?php
// Code to capture values from form
$heading = $_POST["ArticleHeading"];
$articlecontent = $_POST["ArticleContent"];
$articleType = $_POST["ArticleCategory"];

if(isset($heading))
{
// Code for creation of page below
$articleName= $articleType." - ".$heading;

$content=fopen("articles/$articleName.html","w");

$headingPartStart = "<h1>";
$headingPartEnd = "</h1>";

$bodyPartStart= "<p>";
$bodyPartEnd= "</p>";
$headingVar= $headingPartStart.$heading.$headingPartEnd;
$bodyVar = $bodyPartStart.$articlecontent.$bodyPartEnd;


fwrite($content, "<html>");
fwrite($content, $headingVar);
fwrite($content, $bodyVar);
fwrite($content, "</html>");
fclose($content);
}
?>
<?php include "footer/footer.html" ?>