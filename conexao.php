<?php

$server = "localhost";
$username = "root"; 
$password = "Guto2002@";
$dbname = "moinho";
$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>