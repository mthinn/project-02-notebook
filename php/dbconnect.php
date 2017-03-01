<?php

$servername = getenv('127.0.0.1');
$username = 'notesadmin';
$password = 'dragon';
$database = 'notes';
$dbport = 8888;
$dbname = 'notes';

// create an object that will hold the above variable.
$db = new mysqli($servername, $username, $password, $database, $dbport);

//connect to the server and check our connection
if ($db -> connect_error) {
	die('DEBUG / connection Failed' . $db -> connect_error);
}
echo 'DEBUG / connection successful' . $db -> host_info;

?>
