
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<br><br>
	<h1 style="text-align: center;" >Login</h1>
	<br>

	
	
	
	<form style="text-align: center;"  >

		<label for="username">User Name:</label>
		<input type="text" name="username" id="username" required>

		<br><br>
		
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<br><br>
		<input type="submit" value="Login">
		<br>

	<?php 

		if (isset($_GET['msg'])) {
			echo $_GET['msg'];
		}
	?>
		
		<label><a href="Forgetpass.php">Forget password!</a></label>
	</form>
	

	<?php include("footer.php")?>

</body>
</html>





	

