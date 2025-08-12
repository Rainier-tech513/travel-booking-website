<?php

declare(strict_types=1);

function check_login_errors() {
	if (isset($_SESSION["errors-login"])) {
		$errors = $_SESSION["errors-login"];

		echo "<br>";

		foreach ($errors as $error) {
			echo '<p class="error-message">' . $error . '</p>';
		}

		unset($_SESSION["errors-login"]);
	} 

	//Succesfull login notification
	/*else if (isset($_GET['login']) && $_GET['login'] === "success") {
		echo "<br>";

		echo '<p class="form-success">Login success!</p>';
	}
	*/
}

function output_username() {
	if (isset($_SESSION["user_id"])) {
		echo "You are logged in as " . $_SESSION["user_username"];
	} else {
		echo 'You are not logged in!';
	}
}