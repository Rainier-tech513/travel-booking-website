<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$username = htmlspecialchars($_POST["username"]);
	$pwd = htmlspecialchars($_POST["pwd"]);
	$email = htmlspecialchars($_POST["email"]);

	try {

		// the order matters. so first the dtbs connection, then model, then controller (if you need the view, you put it after model)
		require_once 'dhb-handler.php';
		require_once 'signup_model.php';
		require_once 'signup_controller.php';

		// errors handlers
		$errors = [];

		if (is_input_empty($username, $pwd, $email)) {
			$errors["empty_input"] = '<p class="error-message">Fill in all fields!</p>';
		}

		if (is_email_invalid($email)) {
			$errors["invalid_email"] = '<p class="error-message">Fill in valid email!</p>';
		}

		if (is_username_taken($pdo, $username)) {
			$errors["username_taken"] = "Username is already taken!";
		}
		if (is_email_registered($pdo, $email)) {
			$errors["email_registered"] = "Email is already registered!";
		}

		require_once 'config-session.php';

		if ($errors) {
			$_SESSION["errors_signup"] = $errors;

			$signupData = [
				"username" => $username,
				"email" => $email
			];

			$_SESSION["signup_data"] = $signupData;

			header("Location: ../login-signup.php");

			die();
		}

		create_user($pdo, $pwd, $username, $email);

		header("Location: ../login-signup.php?signup=success");

		$pdo = null;
		$stmt = null;

		die();

	} catch (PDOException $e) {
		die("Query failed: "  . $e->getMessage());
	}

} else {
	header("Location: ../login-signup.php");
	die();
}