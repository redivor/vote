<!DOCTYPE html>
<html>
<head>
  <title>Text File Sender Page</title>
</head>
<body>
  <h1>Text File Sender Page</h1>
  <?php
    if (isset($_POST['send'])) {
      $fileName = $_POST['file']; // Get the file name from the form
      $filePath = __DIR__ . '/' . $fileName; // Get the absolute path to the file
      $postData = array('file' => new CURLFile(realpath($filePath)));
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://reciever.rf.gd/recieve.php', // Replace with the URL of the receiver page
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_RETURNTRANSFER => true
      ));
      $response = curl_exec($curl);
      curl_close($curl);
      echo "<p>File sent.</p>";
    }
  ?>
  <form method="POST">
    <label for="file">Select a file to send:</label>
    <select name="file">
      <?php
        $dir = __DIR__;
        $files = scandir($dir);
        foreach ($files as $file) {
          if (!in_array($file, array('.', '..', 'sender.php'))) { // Exclude the current script file from the list
            echo "<option value=\"$file\">$file</option>";
          }
        }
      ?>
    </select>
    <button type="submit" name="send">Send File</button>
  </form>
</body>
</html>