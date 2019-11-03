<?php
$unerr=$pwerr=$fail="";
if(isset($_POST['login']))
{
	$un=$_POST['username'];
	$pw=$_POST['password'];
	$cusCounter=0;
    if($un==$pw)
    {
    	header('location: Employee.php');

    }
	else
	{
		echo "Wrong password";
	}
}

?>





<html>
<head>
	<title>Cineplex | Login</title>
	
</head>

<body bgcolor="#cceeff">
	<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<div style="background-color:lightblue" >
			<center><font size="7" color="Green" >Welcome To<br/></font><br/><font size="12" color="blue" >CINEPLEX</font>
			</center>
		</div>
		<br/><br/>

		<center><font size="7" color="Green" > Login</font></center>
		<br/><br/>
		<div align="center">
			<table >
				<tr>
					<label><font size="3" color="red"><?= $fail; ?></font></label>
				</tr>
				<tr>
					<label><font size="3" color="red"><?= $unerr; ?></font></label>
				</tr>
				<tr>
					<label><font size="3" color="red"><?= $pwerr; ?></font></label>
				</tr>
				<tr>
					<td >
						<font size="5" > Username: &nbsp&nbsp&nbsp</font>
					</td>
					<td colspan="3">
						<input type="text" name="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">  
						
					</td>
				</tr>
				<tr>
					<td>
						<font size="5" > Password: &nbsp&nbsp&nbsp</font>
					</td>
					<td>
						<input type="Password" name="password">
						
					</td>

				</tr>	
			</table>
		</div>
		<br/>
		<center><a href="Registration.php"><font size="3" >Not a member Yet?</font></a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="login" value="Login">


	</form>

	</body>
	</html>