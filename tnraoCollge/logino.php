<?php
$us=$_POST['user'];
$pass=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","tnrao");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$us=$_POST['user'];
	$pass=$_POST['pass'];
	$qry="INSERT INTO `login1`(`username`, `password`) VALUES ('$us','$pass')";
	$result=mysqli_query($conn,$qry);
	if($result)
	{
		echo "inserted";
	}
	else
	{
		echo "not inserted";
	}
}	
?>
