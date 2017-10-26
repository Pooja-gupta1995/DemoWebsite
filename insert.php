<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="traanganaweb";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
echo 'successfully';	
 // create a variable
 
$user=$_POST['user'];
$pass=$_POST['pass'];
 
 //Execute the query
 
$order="INSERT INTO traangana(user,pass)
				VALUES('$user','$pass')";
if ($conn->query($order) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>