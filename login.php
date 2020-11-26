<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
        
</head>
<body background="img/inde.jpg">
	<form method="POST" action="loginscript.php">
		<h2>LOGIN</h2>
		<p>Username/email</p>
		<input type="text" name="n" placeholder="enter ur name">
		<p>Password</p>
                <input type="Password" name="p" placeholder="enter your password">
		<button type="submit" name="button">Login </button>
		<button type="back"><a href="index.php" style="color: black">Back to Orignal Page</a></button>
	</form>

</body>
</html>

