<?php
// Define the root URL for the project
define('ROOT', 'http://localhost/event/');

// Include the redirect function from the helper
require_once "helper/redirect.php";
require_once "helper/DB.php";
// Default values for module and file
$module = "booking";
$file = "index";
$uid = null;

// Get the 'url' parameter from the query string
$url = $_GET['url'] ?? null;

// If 'url' is provided in the query string, process it
if ($url) {
    // Remove trailing slashes and split the URL into parts
    $urlParts = explode('/', rtrim($url, '/'));

    // The first part is the module
    $module = $urlParts[0];

    // If there is a second part, it becomes the file name
    $file = $urlParts[1] ?? $file;
    $uid = $urlParts
    [2] ?? null;
}

// Construct the path to the requested file (module/file.php)
$path = "modules/$module/$file.php";

// Check if the file exists
if (file_exists($path)) {
    // Include header, the requested module file, and footer
    include_once "header.php";
    include_once $path;
    include_once "footer.php";
} else {
    // If the file doesn't exist, redirect to the 404 page
    redirect('404.php');
}
?>
