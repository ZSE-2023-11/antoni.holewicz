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