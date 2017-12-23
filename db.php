<?php
$host    = "localhost";
$pass    = "123gaurangB";
$user    = "root";
$db_name = "chat";
$conn    = new mysqli($host, $user, $pass, $db_name);
if ($conn) {
	echo "establish";
}
?>