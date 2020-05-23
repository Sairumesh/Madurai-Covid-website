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

$sql="INSERT INTO `volunteer_table` (fname,contact,age,naddress,skills,ntime,info) VALUES ('$_POST[fname]','$_POST[contact]','$_POST[age]','$_POST[naddress]','$_POST[skills]','$_POST[ntime]','$_POST[info]')";

if ($conn->query($sql) == TRUE) {
	echo "Your data is sucessfully stored!";
	/*echo "<a href='index.html'>Click here to go home page</a>";*/

} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
} 
mysqli_close($conn);
?>

</body>
</html>