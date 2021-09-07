<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table border="1" bgcolor="	#FFFFFFFF">
		
	<tr>
		
	<td><strong>First Name</strong></td>
<td> <?php
	$FirstName = $_POST['fname'];
	echo $FirstName;
	?></td>
		</tr>
		
		<tr>
		<td><strong>Last Name</strong></td>
<td><?php	
	$LastName = $_POST['lname'];
	echo $LastName;
?></td>
		
		</tr>
		
		<tr>
		<td><strong>Username</strong></td>
<td><?php	
	$userame = $_POST['username'];
	echo $userame;
?></td>
		
		</tr>
		
		<tr>
		<td><strong>Password</strong></td>
<td><?php	
	$password = $_POST['password'];
	echo $password;
?></td>
		
		</tr>
		
		<tr>
		<td><strong>Gender</strong></td>
<td><?php	
	$Gender = $_POST['gtype'];
	echo $Gender;
?></td>
		
		</tr>
		
		<tr>
		<td><strong>Academic Year</strong></td>
<td><?php	
	$Academicyear = $_POST['year'];
	echo $Academicyear;
?></td>
		
		</tr>
		
		<tr>
		<td><strong>Phone No</strong></td>
<td><?php	
	$pnumber = $_POST['pnu'];
	echo $pnumber;
?></td>
		
		</tr>
		
		
</table>
</body>
</html>