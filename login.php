<?php
session_start();

// Check if the user is already authenticated
if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"]) {
	// Redirect to the main page
	header("Location: decrypt.php");
	exit();
}

// Define the correct password (replace with your own password)
$correct_password = "my-password";

// Initialize a variable to hold any error messages
$error_message = "";

// Check if the form has been submitted
if (isset($_POST["submit"])) {
	// Get the user-provided password from the form
	$password = $_POST["password"];

	// Check if the password is correct
	if ($password == $correct_password) {
		// Set the authenticated key in the session to true
		$_SESSION["authenticated"] = true;

		// Redirect to the main page
		header("Location: decrypt.php");
		exit();
	} else {
		$error_message = "Incorrect password. Please try again.";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form method="post">
		<label>Password:</label>
		<input type="password" name="password">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>
	<p><?php echo $error_message; ?></p>
</body>
</html>