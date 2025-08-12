<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$pwd = htmlspecialchars($_POST["pwd"]);
	$email = htmlspecialchars($_POST["email"]);

	try {
		require_once 'dhb-handler.php';
		require_once 'login_model.php';
		require_once 'login_controller.php';

		$errors = [];

		if (is_input_empty($pwd, $email)) {
			$errors["empty_input"] = '<p class="error-message">Fill in all fields!</p>';
		}

		$result = get_user($pdo, $email);

		if (is_email_wrong($result)) {
			$errors["login_incorrect"] = "Incorrect login info!";
		}

		if (!is_email_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
			$errors["login_incorrect"] = "Incorrect login info!";
		}

		require_once 'config-session.php';

		if ($errors) {
			$_SESSION["errors-login"] = $errors;

			header("Location: ../login-signup.php");
			die();
		}

		$newSessionId = session_create_id();
		$sessionId = $newSessionId . "_" . $result["id"];
		session_id($sessionId);

		$_SESSION["user_id"] = $result["id"];
		$_SESSION["user_email"] = $result["email"];
		$_SESSION["user_username"] = htmlspecialchars($result["username"]);
		$_SESSION["last_regeneration"] = time();

		header("Location: ../login-signup.php?login=success");

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
