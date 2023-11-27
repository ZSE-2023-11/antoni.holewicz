<?php
$servername = "localhost";
$username = "admin";
$password = "test";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] === "admin" && $_POST["password"] === "test") {
        echo "<script type='text/javascript'>alert('Zalogowano pomyślnie');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Złe dane logowania');</script>";
    }
}

$conn->close();
?>
