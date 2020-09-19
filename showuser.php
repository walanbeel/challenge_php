<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<title> Show User </title> 
	
	<style> 
		table { 
			margin: 0 auto; 
		  margin-top:50px;
			border: 1px solid black;

		} 

		td { 
			background-color: #FFFACD; 
			border: 1px solid black; 
      padding: 10px; 
			text-align: center; 
		} 

		
	</style> 
</head> 

<body> 

<?php

//include "config.php";

//$query = "SELECT * FROM `users`"; 
$conn=mysqli_connect("localhost","root","","challeng_php");
  $dataList=mysqli_query($conn,"select * from users");
 

echo"<table width='40%' border='1' cellpadding='5'>

<tr>
<td >ID</td>
<td>first name</td>
<td>fullname</td>
<td>pass</td>
</tr>";
while($row=mysqli_fetch_assoc( $dataList)){
    echo"
    <tr>
    <td>".$row['ID']."</td>
<td>".$row['First Name']."</td>
<td>".$row['Username']."</td>
<td>".$row['password']."</td>
    </tr> " ;
   

}
echo "</table>";
?>

</body> 

</html> 