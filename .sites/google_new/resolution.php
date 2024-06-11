<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$resolutionFile = 'resolution.txt';

// Read existing resolutions
$resolutions = file_exists($resolutionFile) ? file_get_contents($resolutionFile) : '';
$resolutionArray = $resolutions ? explode(', ', trim($resolutions)) : [];

if (isset($_POST['resolution'])) {
    $newResolution = $_POST['resolution'];

    // Add the new resolution
    $resolutionArray[] = $newResolution;

    // Keep only the last two resolutions
    if (count($resolutionArray) > 2) {
        $resolutionArray = array_slice($resolutionArray, -2);
    }

    // Save back to the file
    file_put_contents($resolutionFile, implode(', ', $resolutionArray) . "\n");

    // Check if there are exactly two resolutions 
    if (count($resolutionArray) == 2) {
        // if they dont match, redirect
        if ($resolutionArray[0] !== $resolutionArray[1]) {
            echo json_encode(['redirect' => true]);
        } else {
            json_encode(['redirect' => false]);
        }        
    } else {
        echo json_encode(['redirect' => false]);
    }
} else {
    echo json_encode(['error' => 'Resolution not set']);
}

// file_put_contents('resolution.txt', $_POST['resolution'], FILE_APPEND);
// header('Location: browser.html');

exit();
?>