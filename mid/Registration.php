<?php 

session_start();
if (isset($_POST['submit'])) {

	if ($_POST['password']== $_POST['cpassword'] && $_POST['name']!="" && $_POST['password']!="" && $_POST['id']!="") {
		if($_POST['admin']=="User" || $_POST['admin']=="Admin"){
		
	

$name=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$id=$_POST['id'];
$radio=$_POST['admin'];

$myfile = fopen('abc.txt','a');
fwrite($myfile,$id."|");
fwrite($myfile,$name."|");
fwrite($myfile,$password."|");
fwrite($myfile,$radio."|");



fclose($myfile);

header('location: Login.php');
}
else { echo("DWDWDWDWD");}
}
else{
	echo "Passwword doesnt match ";
}


}
else
{
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body bgcolor="#cceeff">
	<form action="" method="POST">
		<div style="background-color: lightblue"><fieldset >
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Passwword</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm password</td>
					<td><input type="password" name="cpassword"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
					<tr>
						<td>user type</td>
						<td>___________________________________________________________________________________________________________</td>
					</tr>
					<tr>
						<td><input type="radio" name="admin" value="User">USER <input type="radio" name="admin" value="Admin">ADMIN</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
						<td><a href="Login page.php">Sign In</a></td>
					</tr>
				</tr>
			</table>
		</fieldset>
	</form>
</div>

</body>
</html>
<?php 

}
 ?>