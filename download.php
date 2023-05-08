<?php

$zip_file = 'website_codes.zip';
$root_path = dirname(__FILE__); // Assuming this script is in the root directory of your website
$extensions = array('html', 'css', 'js', 'php'); // List of file extensions to include in the zip file
$auth_token = '<#&sAn8^biag1M~YxJf9Jia]Kw]ghl!br?u]uG2~H0<c@u+|UW9Tnbx%8;9/+['; // Change this to your preferred authentication token

function addFilesToZip($dir, $zip) {
    $files = scandir($dir);
    foreach($files as $file) {
        if ($file == '.' || $file == '..') continue;
        $path = $dir . '/' . $file;
        if (is_dir($path)) {
            addFilesToZip($path, $zip);
        } else {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if (in_array($ext, $GLOBALS['extensions'])) {
                $zip->addFile($path, str_replace($GLOBALS['root_path'] . '/', '', $path));
            }
        }
    }
}

if (isset($_GET['token']) && $_GET['token'] == $auth_token) {
    $zip = new ZipArchive();
    $zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE);

    addFilesToZip($root_path, $zip);

    $zip->close();

    // Force the browser to download the zip file
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="'.basename($zip_file).'"');
    header('Content-Length: ' . filesize($zip_file));
    readfile($zip_file);

    // Remove the zip file from the server
    unlink($zip_file);
} else {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Unauthorized access';
}
