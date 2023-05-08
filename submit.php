<?php
if(isset($_POST['email'])) {
  $email = $_POST['email'];
  $file = 'emails.txt';
  file_put_contents($file, $email.PHP_EOL, FILE_APPEND);
}
?>