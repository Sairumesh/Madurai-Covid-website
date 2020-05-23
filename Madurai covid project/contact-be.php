<html>
<body>
<?php

// Create connection
$conn=new mysqli('localhost','root','');

//check connection

if($conn->connect_error){
	die("Connection_failed: ". $conn->conect_error);
}
/* echo "DB Connected successfully"; */

//this will select the database new
mysqli_select_db($conn,"covid");

/*  echo "\n DB is selected as Test successfully"; */

//crete insert query 

$sql="INSERT INTO `contact` (fname,contact,email,nmessage) VALUES ('$_POST[fname]','$_POST[contact]','$_POST[email]','$_POST[nmessage]')";

if ($conn->query($sql) == TRUE) {
	echo "You data has been stored !";
	/*echo "<a href='index.html'>Click here to go home page</a>";*/

} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
} 
mysqli_close($conn);
?>

</body>
</html>