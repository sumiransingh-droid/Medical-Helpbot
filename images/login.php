<?php
// Start a session
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the username and password from the form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Check if the username and password are correct
	if ($username == 'admin' && $password == 'password') {
		// Store the username in the session
		$_SESSION['username'] = $username;

		// Redirect to the home page
		header('Location: home.php');
		exit();
	} else {
		// Show an error message
		$error = 'Invalid username or password';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-form">
		<h1>Login</h1>
		<?php if (isset($error)) { ?>
			<p class="error"><?
	<?php } ?>
	<form method="POST" action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Login">
	</form>
	<p>Don't have an account? <a href="register.html">Register here</a></p>
</div>
