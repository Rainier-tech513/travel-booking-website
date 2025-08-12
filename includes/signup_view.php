<?php

// alow your code to have type declaration
declare(strict_types=1);

function check_signup_errors() {
	if (isset($_SESSION["errors_signup"])) {

		$errors = $_SESSION["errors_signup"];

		echo "<br>";

		foreach ($errors as $error) {
			echo '<p class="form-error">' . $error . '</p>';
		}

		unset($_SESSION["errors_signup"]);
	} 
}



function signup_inputs() {
	
	if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
  		echo '<input type="text" id="name" name="username"' . $_SESSION["signup_data"]["username"] . '">';
  	} else {
  		echo '<input type="text" id="name" name="username">';
  	}

  	echo '<input type="password" id="password" name="pwd">';

  	if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_registered"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
  		echo '<input type="email" id="email" name="email"' . $_SESSION["signup_data"]["email"] . '">';
  	} else {
  		echo '<input type="email" id="email" name="email">';
  	}
}