<?php

$servername = getenv('127.0.0.1');
$username = 'mthin2';
$password = 'dragon';
$database = 'dreamtimenotes';
$dbport = 8888;
$dbname = 'dreamtimenotes';

$db = new mysqli($servername, $username, $password, $database, $dbport);

if ($db -> connect_error) {
	die('DEBUG / connection Failed ' . $db -> connect_error);
}
echo 'DEBUG / connection successful ' . $db -> host_info;

mysqli_select_db($db, $dbname);

if (empty($result)) {
	$sql = "CREATE TABLE DreamNotes (
		id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			title VARCHAR(100) NOT NULL,
			note VARCHAR(1000) NOT NULL
			)";

	if ($db -> query($sql) === TRUE) {
		ECHO '<br>Table Created.';
	} else {
		echo '<br>Table already exists.';
	};
}

?>