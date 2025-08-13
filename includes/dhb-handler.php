<?php

// kopieer de connection van de online versie die je nu heb en zet m hierin
// verander de domein in config-session.php
// maak die nieuwe table aan in de online database code staat in docs
// then your set

if ($_SERVER['SERVER_NAME'] === 'localhost') {
    // Lokale database
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'testdatabase';

} else {
    // Online database
    $host = "database-5018102833.webspace-host.com";
	$dbname = 'dbs14373138';
	$dbusername = 'dbu2056935';
	$dbpassword = '4!S3qwCuQnqB9SJ';
}



try {
	$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}