`Bcrypt:`
- Bardzo popularny do przechowywania haseł.
- Posiada wewnętrzne opóźnienia, co utrudnia ataki brute-force.

`Argon2:`
- Algorytm stworzony specjalnie do przechowywania haseł.
- Oferuje konfigurowalne parametry dla dodatkowej bezpieczeństwa.

`Scrypt:`
- Wykorzystuje opóźnienia w celu utrudnienia ataków brute-force.
- Wymaga większej ilości zasobów obliczeniowych.

`PBKDF2` (Password-Based Key Derivation Function 2):
- Stosuje iteracje i sól do wzmacniania bezpieczeństwa.
- Jest stosunkowo prosty w użyciu.

### Kod do zapisu zaszyfrowanych danych w bazie.
```
<?php
$username = "admin";
$plainPassword = "test";
$hashedPassword = password_hash($plainPassword, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, password) VALUES (?,?)";
?>
```
## Kod sprawdzającego dane logowania z szyfrowaniem.
```
<?php
$usernameToCheck = "admin";
$passwordToCheck = "test";
$sql = "SELECT password FROM users WHERE username = ?";
$hashedPasswordFromDatabase = "test1";
if (password_verify($passwordToCheck, $hashedPasswordFromDatabase)) {
    echo "Poprawne logowanie!";
} else {
    echo "Błędne hasło.";
}
?>
```