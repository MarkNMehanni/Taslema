<?php
$con = new mysqli("localhost", "root", "","software_engeeniring");
$sql="select * from User";
$result = mysqli_query($con,$sql);	
if(mysqli_num_rows($result) > 0)
{
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>Name</td>
	<td>Age</td>
	<td>Edit</td>
	</tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td>".$row['Username']."</td>";
		echo"<td>".$row['Age']."</td>";
		echo "<td><a href=\"editUser.php?id=$row[ID]\">Edit</a></td>";
    }
    echo"</table>";
 }
?>