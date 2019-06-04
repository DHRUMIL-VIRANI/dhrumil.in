<!-- This is Jay-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>file upload</title>
</head>
<body>
	<?php
require "init.php";
if(isset($_POST['btn'])){

$name=$_FILES['myfile']['name'];
$type=$_FILES['myfile']['type'];
$data=file_get_contents($_FILES['myfile']['tmp_name']);
$stmt=$con->prepare("insert into fg values('',?,?,?)");
$stmt->bindParam(1,$name);
$stmt->bindParam(1,$type);
$stmt->bindParam(1,$data);
$stmt->execute();

}
	?>

	<form method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<button name="btn">UploAD</button>
		
	</form>

</body>
</html>