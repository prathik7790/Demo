<?php
session_start();

$username = $_POST['loginname'];
$password = $_POST['loginpassword'];


// Create connection
$conn = mysqli_connect("localhost","root","","panda");
// Check connection
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM registrations WHERE emailid='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);
if ($rows<=0) 
{
	header("Location: login.php");
} 
else 
{
	$_SESSION['user'] = $username; // session variable
	header("Location: listproducts.php");
}

mysqli_close($conn);

?>