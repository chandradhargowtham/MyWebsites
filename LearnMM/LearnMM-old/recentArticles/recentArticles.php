<html>
<body class = "bodyHeader">
<p>Featured Articles:</p>
<h2></h2></body>
</html>
<?php include "pageGenerator.php" ?>
<?php
$dir = "/articles/";
$a=scandir("articles/",1);

// strlen and mb_strlen not giving correct o/p. hence had to use this hack.
for($i=2;$i<5;$i++)
{
	if($a[$i]==" ")
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
<!DOCTYPE html>


<!-- Inline CSS for easy editing-->
<style>

</style>
<script language="javascript">
</script>