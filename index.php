<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] === "admin" && $_POST["password"] === "test") {
        echo "<script type='text/javascript'>alert('Zalogowano pomyślnie');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Złe dane logowania');</script>";
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
