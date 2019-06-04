<?php

if(isset($_POST['submit'])){
	
	$title=$_POST['name'];
	$age=$_POST['age'];

	$file= fopen("test(DATE).txt", "w+") or die("File not found");

	$s= $title.",,,".$age."\n";
	fputs($file,$s) or die("data not write");

	fclose($file);
}

?>

<center>
	<form action="#" method="POST">
		Title:
		<input type="text" name="name"><br>
		age:<input type="text" name="age"><br>
		<input type="submit" name="submit" value="Enter to file"><br>
	</form>




</center>