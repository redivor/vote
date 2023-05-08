<?php
session_start();

// Check if the user is already authenticated
if (!isset($_SESSION["authenticated"]) || !$_SESSION["authenticated"]) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// Define the key for decrypting the file (replace with the same key used for encryption)
$key = "my-secret-key";

// Initialize a variable to hold the decrypted entries
$decrypted_entries = "";

// Check if the Clear Entries button was clicked
if (isset($_POST["clear_entries"])) {
    // Prompt the user for confirmation
    $confirmation = confirm("Are you sure you want to clear all entries?");
    if ($confirmation) {
        // Create a backup of the current "secret.txt" file
        $backup_filename = date("Y-m-d_His") . "_secret.txt";
        $backup_path = "backups/" . $backup_filename;
        copy("secret.txt", $backup_path);
        // Clear the contents of the "secret.txt" file
        file_put_contents("secret.txt", "");
        // Set the decrypted entries variable to a message indicating the entries were cleared
        $decrypted_entries = "All entries have been cleared.";
    } else {
        // Set the decrypted entries variable to the current contents of the file
        // If the user cancelled the confirmation prompt
        $file = fopen("secret.txt", "r");
        $contents = fread($file, filesize("secret.txt"));
        fclose($file);
        $lines = explode("\n", $contents);
        foreach ($lines as $line) {
            if (!empty(trim($line))) {
                $parts = explode(": ", $line);
                $label = $parts[0];
                $encrypted_value = $parts[1];
                $decrypted_value = openssl_decrypt($encrypted_value, "AES-256-CBC", $key);
                $decrypted_entries .= $label . ": " . $decrypted_value . "\n";
            }
        }
    }
} else {
    // Open the encrypted file for reading
    $file = fopen("secret.txt", "r");

    // Read the contents of the file into a string
    $contents = fread($file, filesize("secret.txt"));

    // Close the file
    fclose($file);

    // Split the contents of the file into lines
    $lines = explode("\n", $contents);

    // Initialize a counter for the number of entries
    $num_entries = 0;

    // Loop over each line and decrypt it using OpenSSL
    foreach ($lines as $line) {
        if (!empty(trim($line))) {
            $parts = explode(": ", $line);
            $label = $parts[0];
            $encrypted_value = $parts[1];
            $decrypted_value = openssl_decrypt($encrypted_value, "AES-256-CBC", $key);
            $decrypted_entries .= $label . ": " . $decrypted_value . "\n";
            $num_entries++;
        }
    }

    // Display a message if there are no entries
    if ($num_entries == 0) {
        $decrypted_entries = "No entries found.";
    }
}

// Create a file named "decrypt.txt" and write the decrypted entries to it
$file = fopen("decrypt.txt", "w");
fwrite($file, $decrypted_entries);
fclose($file);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Decrypted Entries</title>

</head>
<body>
    <?php echo nl2br($decrypted_entries); ?>
    <br><br>
    <a href="decrypt.txt" download><button>Download</button></a>
    <br><br>
    <form method="post">
        <button type="submit" name="clear" onclick="return confirm('Are you sure you want to clear all entries?')">Clear Entries</button>
    </form>
    <?php
    // Check if the clear button was clicked
    if (isset($_POST["clear"])) {
        // Backup the "secret.txt" file
        $backup_dir = "backup/";
        $backup_file = $backup_dir . date("YmdHis") . ".txt";
        if (!is_dir($backup_dir)) {
            mkdir($backup_dir);
        }
        copy("secret.txt", $backup_file);
            // Open the file for writing (truncate the file to 0 bytes)
    $file = fopen("secret.txt", "w");
    fclose($file);
    // Redirect back to the same page to avoid resubmitting the form
    header("Location: decrypt.php");
    exit();
}
?>
</body>
</html>
