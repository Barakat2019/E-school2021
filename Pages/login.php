<?php
include_once('../Pages/Nav-Bar.php');
?>
<!DOCTYPE html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="http://localhost/E-School/css/bootstrap.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
<div class="phpkida-main">
	<h2>Sign In Now</h2>
		<form action="#" method="post">
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
			<span><input type="checkbox" />Remember Me</span>
			<span class="span-right"><a href="#">Forgot Password?</a></span>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
</div>
</div>
</body>
</html>