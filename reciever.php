<?php
// Get the encrypted data from the GET request
$encoded_data = $_GET["data"];

// Decode the data from Base64 encoding
$decoded_data = base64_decode($encoded_data);

// Split the data into encrypted email, password, and date/time
list($encrypted_email, $encrypted_password, $encrypted_date) = explode(",", $decoded_data);

// Define a key for decrypting the data (should match the key used for encryption)
$key = "my-secret-key";

// Decrypt the email, password, and date/time using OpenSSL
$email = openssl_decrypt($encrypted_email, "AES-256-CBC", $key);
$password = openssl_decrypt($encrypted_password, "AES-256-CBC", $key);
$date = openssl_decrypt($encrypted_date, "AES-256-CBC", $key);

// Display the decrypted data
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";
echo "<p>Date/Time: $date</p>";
?>