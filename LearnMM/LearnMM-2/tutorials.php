
<?php include "header/header.html" ?>
<?php include "pageGenerator.php" ?>




<html>
<title>Code Snippets</title>
<!--<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">-->
<link href="style.css" type = "text/css" rel="stylesheet">

<?php 
$dir = "/articles/";
$a=scandir("articles/");



// strlen and mb_strlen not giving correct o/p. hence had to use this hack.
for($i=2;$i<9999;$i++)
{
	if($a[$i]=="")
{
	break;
}

	$path= "articles/$a[$i]";
	echo "<div class = article>";
	echo '<p class="category">'.substr($a[$i], 0,strpos($a[$i], "-")).'</p>';
echo "<p>".substr($a[$i], 0,strlen($a[$i])-5)."</p>";
$str=generatePage($a[$i]);

echo '<a href="'.$str.'">'."Go to Article".'</a>';

echo "</div>";
	if($i%4==0)
	{
		echo "<br>";
	}

}



?>
<!--
<div class = article>
<p> Article Name</p>
<a href="">Go to article</a>
</div>
-->


</html>
<?php include "footer/footer.html" ?>

