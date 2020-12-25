<?php include "header/header.html" ?>
<html>
<form method = "POST" action=contact.php>
<p>Your Name: </p>
<input type="text" name="name">
<p>Email:</p>
<input type="text" name="email">
<p>Enter your Query:</p>
<textarea rows="4" cols="50" name="query"></textarea>
<br>
<input type="submit" name="submit">
</form>
</html>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$query = $_POST["query"];

$outputString = $name." \n".$email." \n".$query;
if(isset($name))
{
mail("chandradhargowtham93@gmail.com", "Learn MM Query", $outputString);
echo "Thanks for contacting us. Message sent.";
}
?>
<?php include "footer/footer.html" ?>