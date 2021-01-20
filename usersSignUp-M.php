<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/volunteerSignUp-M.css">

</head>
<div class="container" id="container">
	
	<div class="form-container sign-in-container">

		<form onsubmit="mySubmit3()" method="POST" action="register.php">
			<h3 style="text-align:left;">Create An Account</h3>
			<input type="text" name="Fullname" required placeholder="Fullname"/>
			<input type="email" name="Email"  required placeholder="example@gmail.com" />
			<input type="text" name="Username" required placeholder="Username"/>
            <input type="password" id="pass" name="Password" required placeholder="Password (Above 8 characters)" pattern=".{8,}" />
			<input type="tel" name="Contact" required placeholder="Contact No." />
			<button name="submit">Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello Friend!</h1>
				<h2>Be One of Us</h2>
				<h3>Register Now.</h3><br><br><br>
				
                <p id="al">Already have an account?</p>
                <a href="usersSignIn-vol.php">Sign In</a>
			</div>
		</div>	
	</div>
</div>

<script src="js/main.js"></script> 

