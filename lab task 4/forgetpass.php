<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORGOT PASSWORD</title>
    </head>
    <head>
   
               <form style="text-align: center;" method="post"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <u><p><h1>Forgot Password</h1></p></u>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" > <br><hr><br>

                        <input type="submit" name="submit" value="Submit" />
                </form>
               <?php include("footer.php")?>
    </head>
</html>
