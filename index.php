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
    $usernameInput = htmlspecialchars($_POST["username"]);
    $passwordInput = htmlspecialchars($_POST["password"]);

    $query = "SELECT * FROM users WHERE username = '$usernameInput' AND password = '$passwordInput'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $message = "Zalogowano pomyślnie";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "Złe dane logowania";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
$conn->close();
?>