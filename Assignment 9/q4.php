<?php
class PasswordException extends Exception {}
function validatePassword($password) {
    if (strlen($password) < 8) throw new PasswordException("Password must be at least 8 characters long");
    if (!preg_match("/[A-Z]/", $password)) throw new PasswordException("Password must contain at least one uppercase letter");
    if (!preg_match("/[0-9]/", $password)) throw new PasswordException("Password must contain at least one digit");
    if (!preg_match("/[@#$%]/", $password)) throw new PasswordException("Password must contain at least one special character (@, #, $, %)");
    return true;
}
$password = "Test123";
try {
    validatePassword($password);
    echo "Password is valid";
} catch (PasswordException $e) {
    echo $e->getMessage();
}
?>
