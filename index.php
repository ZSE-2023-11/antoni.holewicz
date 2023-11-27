<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
<?php 
$servername = "localhost";
$username = "admin";
$password = "test";
$database = "baza";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submitted'])) {
    $query = "SELECT * FROM users WHERE username='" . mysqli_real_escape_string($conn, $_POST['username']) . "' AND password='" . mysqli_real_escape_string($conn, $_POST['password']) . "'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $message = "Zalogowano pomyślnie.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "Błąd logowania.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
