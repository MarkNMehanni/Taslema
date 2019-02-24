<?php
$con = new mysqli("localhost", "root", "","software_engeeniring");
$sql="select * from user";
$result = mysqli_query($con,$sql);	
if(mysqli_num_rows($result) > 0)
{
	echo"<form method='post' action=''>";
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>#</td>
	<td>ID</td>
	<td>Name</td>
	<td>Age</td>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><a href=\"deleteUser.php?id=$row[ID]\">Delete</a></td>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Username'] . "</td>";
		echo "<td>". $row['Age'] ."</td>";
    }
    echo"<tr>
    <td align='center' bgcolor='#CCCCCC' colspan='4'><input type='submit' name='submit'></td></tr>";
    echo"</table>";
    echo"</form>";
 }


?>