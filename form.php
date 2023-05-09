<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Registration form</title>
</head>
<body>
<h2>Welcome to Facturation Gocas</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="includes\signup.inc.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="Username" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button name="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="includes\signin.inc.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="name" placeholder="Email" />
			<input type="password" name="email" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button name="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
    <script type="text/javascript" src="js/form.js"></script>
</div>
<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields</p>";
        }
        if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a propre username</p>";
        }
        if ($_GET["error"] == "invalidemail") {
            echo "<p>Enter a valid email </p>";
        }
        if ($_GET["error"] == "emailexist") {
            echo "<p>The email is already taken choose a different one</p>";
        }
        if ($_GET["error"] == "none") {
            echo "<p>Sign up successful</p>";
        }
    }

?>

<footer>
    <p>Copyright © 2023 by Ngatamto, dongmo,mbouebe</p>
</footer>
</body>
</html>