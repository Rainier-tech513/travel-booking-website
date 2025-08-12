<?php

// the are manditory. for your config-session file. either change them in your ini directory in your xampp folder, orhere in the code
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// a function
session_set_cookie_params([
	'lifetime' => 1800, // duration of the cookie id session, 1800 seconds / 30min
	'domain' => 'fit-track.nl', // our own domain. If your running online, then: 'fit-track.nl'
	'path' => '/', // works on all paths
	'secure' => true, // only https 
	'httponly' => true // nobody can inject for example code to do something with the session
]);

session_start();

if (isset($_SESSION["user_id"])) {

	if (!isset($_SESSION["last_regeneration"])) {
		regenerate_session_id_loggedin();
	} else {

		$interval = 60 * 30;

		// check if our current time - the time of our last regeneration, is >= the interval, 30min. if so, regenerate id and reset the time
		if (time() - $_SESSION["last_regeneration"] >=  $interval) {
			regenerate_session_id_loggedin();
		}
	}

} else {

	if (!isset($_SESSION["last_regeneration"])) {
		regenerate_session_id();
	} else {

		$interval = 60 * 30;

		if (time() - $_SESSION["last_regeneration"] >=  $interval) {
			regenerate_session_id();
		}
	}
}





//zoals je ziet kopieren we code hier. dus gebruiken we hier een function en die runnen in de if statament

function regenerate_session_id() {
	session_regenerate_id(true);
	$_SESSION["last_regeneration"] = time();
}


function regenerate_session_id_loggedin() {
	session_regenerate_id(true);

	$userId = $_SESSION["user_id"];
	$newSessionId = session_create_id();
	$sessionId = $newSessionId . "_" . $result["id"];
	session_id($sessionId);

	$_SESSION["last_regeneration"] = time();
}
