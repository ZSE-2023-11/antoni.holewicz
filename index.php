<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Seweryn Mocny">
    <title>Zadanie 2</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="title-box">
            <h1>Logowanie</h1>
        </div>
        <div class="input-box">
            <form method="post">
                <input name="username" id="username" type="text" required>
                <input name="password" id="password" type="password" required>
                <button id="button-login">Zaloguj</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usernameInput = htmlspecialchars($_POST["username"]);
        $passwordInput = htmlspecialchars($_POST["password"]);

        if ($usernameInput === "admin" && $passwordInput === "test") {
            $message = "Zalogowano pomyślnie";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Złe dane logowania";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>
</body>
</html>