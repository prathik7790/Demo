<?php

//get details from user
$username = $_POST['username'];
$emailid = $_POST['useremail'];
$password = $_POST['userconfirmpassword'];

// Create connection
$conn = mysqli_connect("localhost","root","","panda");
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO registrations VALUES ('','$username','$emailid','$password')";

if (mysqli_query($conn, $sql)) 
{
    header("Location: thanks.html");
} else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>