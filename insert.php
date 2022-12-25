<?php 
$fname = $_GET['p'];
$contact = $_GET['q'];
$email = $_GET['r'];
$password = $_GET['s'];

$con = mysqli_connect("localhost", "root", "", "subham");
$sql = "INSERT INTO signuptable (fname, contact, email, password) VALUES ('$fname', '$contact', '$email', '$password')";
if (mysqli_query($con, $sql)){
	echo "Recotd Inserted Successfully";
}else{
	echo "Failed";
}





 ?>