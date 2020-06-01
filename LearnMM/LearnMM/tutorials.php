<?php include "header/header.html" ?>
<?php include "pageGenerator.php" ?>

<html>
<title>Tutorials</title>

<style>
#tutorialsheader {
    text-align: center;
    font-size: 26px;
    font-weight: 700;
    padding: 20px 0;
    margin-top: 30px;
    margin-bottom: 30px;
    color: #000000;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 8px 40px #00000040;
    opacity: 1;
}
</style>

<?php 


echo "<section id=tutorialssection>";
echo "<h1 id=tutorialsheader>Tutorials</h1>";


$dir = "/tutorials/";
$t=scandir("tutorials/");

for($i=2;$i<9999;$i++)
{
	if(empty($t[$i]))
{
	break;
}

    $path= "tutorials/$t[$i]";

    echo "<div class=container-fluid>";
      echo "<div class=row>";
       echo "<div class=col-md-4 col-xs-12>";
            echo"<div class=card flex-md-row mb-4 box-shadow h-md-250>";
               echo "<div class=card-body d-flex flex-column align-items-start>";
               echo" <strong class=d-inline-block mb-2 text-primary>".substr($t[$i], 0,strpos($t[$i], "-"))."</strong>";
              echo"<h3 class=mb-0><p class=text-dark>".substr($t[$i], 0,strlen($t[$i])-5)."</p></h3>";

              echo"<div class=codesnippetscontent>";
                echo"<p class=card-text mb-auto>"; 
                echo "</p>";
                $str=generatePage($t[$i],"tutorials");
                echo '<a href="'.$str.'">'."Go to Article".'</a>';
                //echo '<a type=button class=btn btn-outline-dark href="' . $path . '">'."Read More".'</a>';   
              echo"</div>";
      echo"</div>";
  echo"</div>";
echo"</div>";
echo"</div>";
echo" </div>";
echo"</section>";

	if($i%3==0)
	{
		echo "<br>";
	}
}
?>
</html>

<?php include "footer/footer.html" ?>
