<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("falha na conexão: " . $conn->connect_error);

}

echo "Conectado com Sucesso";

?>