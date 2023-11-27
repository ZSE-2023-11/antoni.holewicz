<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] === "admin" && $_POST["password"] === "test") {
        echo "<script type='text/javascript'>alert('Zalogowano pomyślnie');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Złe dane logowania');</script>";
    }
}
?>