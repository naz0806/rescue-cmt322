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

		<form method="POST" action="login-admin.php">
			<h3 style="text-align:left;">Sign In</h3>
			<input type="text" name="Username" required placeholder="Username"/>
            <input type="password" id="pass" name="Password" required placeholder="Password (Above 8 characters)" pattern=".{8,}" />
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<h2>Thank you for being one of us</h2>
				<br><br><br>
				
                <p id="al">Not a member? Create an account now.</p>
                <a href="usersSignUp-M.php">Sign Up</a>
			</div>
		</div>	
	</div>
</div>
