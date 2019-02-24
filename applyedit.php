<?php
$con = new mysqli("localhost", "root", "","software_engeeniring");
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$fname= $_POST['name'];
	$age=$_POST['age'];
	mysqli_query($con, "UPDATE
	user SET Username = '$fname', Age= '$age' where ID='$id'");
}
header('location: index.php');
?>