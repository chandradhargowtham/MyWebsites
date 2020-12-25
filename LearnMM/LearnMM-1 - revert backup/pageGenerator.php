<html>
<?php 

generatePage($fileName);
function generatePage($fileName)
{
	$str='Zarticle='.substr($fileName, 0,strlen($fileName)-4)."php";
	//echo $str;
	$file=fopen($str, "w");
$lines = '<?php include "header/header.html" ?>'.'<?php include "'.'articles/'.$fileName.'" ?>'.'<?php include "footer/footer.html" ?>';
	fwrite($file, $lines);
	fclose($file);
	
	return $str;
//echo "Writing Done";


 
}

?>
</html>









