<?php




$host="localhost";
$username="dhrumil";
$password="12345678";
$dbname="userdb";

$con=mysqli_connect($host,$username,$password,$dbname);


if(!$con){
  echo "Error in database connection.";
}
else{
	echo "database connection success.";
}





?>