<?php
// Server name must be localhost 
$servername = "localhost"; 

// In my case, user name will be root 
$username = "root"; 

// Password is empty 
$password = ""; 

$database = "tnrao";
// Creating a connection 
$conn = new mysqli($servername, 
			$username, $password, $database); 
 

$name = $_POST['Name'];
$email = $_POST['Email'];
$sub = $_POST['Sub'];
$msg = $_POST['Msg'];

$query = "INSERT INTO `contactus`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$name','$email','$sub','$msg')";

mysqli_query($conn,$query);

$referer = $_SERVER['HTTP_REFERER'];
header("Location: $referer");
// header('Location : contactUs.php');

// Closing connection 
$conn->close(); 

?>