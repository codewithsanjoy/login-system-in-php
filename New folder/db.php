<?php 
$severname = "localhost";
$username = "root";
$password = "";
$databasename = "register";
$con = mysqli_connect($severname,$username,$password,$databasename);
if($con){
	echo "database conected";
}
else{
	echo"faield";
}
?>