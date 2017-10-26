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
/ Create database
$sql = "CREATE DATABASE taarangana";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
if(isset($_REQUEST['submit']))
{	
 // create a variable
 
$name=$_REQUEST['regname'];
$institution=$_REQUEST['institution'];
$course=$_REQUEST['course'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];
$password=$_REQUEST['password'];
$meaning=$_REQUEST['meaning'];
$team=$_REQUEST['team'];
$b=implode(",",$team);
 
 //Execute the query
 
$order="INSERT INTO taarangana(name,institution,course,email,contact,password,meaning,team)
				VALUES('$name','$institution','$course','$email','$contact','$password','$meaning','$b')";
if ($conn->query($order) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $order . "<br>" . $conn->error;
}
}
$conn->close();

?>
<html>
<br><br><br><br>
<form method="POST" action="excel.php">
<input type="submit"> <b>download in excel format</b></input>
</form>
</html>