<?php
//Login details for sql database
$user = "movies_db";
$pw = "l8(*)[NiTe9exmuE";
$host = "localhost";
$db = "movies_db";

//Login
$conn = new mysqli($host, $user, $pw, $db);

//Test connection
if ($conn->connect_error) {
    die("oopsie: " . $conn ->connect_error);
} else {
    //echo "Gaming time";
}

?>