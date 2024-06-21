<?php
// Get the raw POST data
$postData = file_get_contents("php://input");
$data = json_decode($postData, true);

// Extract the window data from the JSON
$windowData = $data['windowData'];

// Define the file path
$filePath = 'window_data.txt';

// Save the data to the text file
file_put_contents($filePath, $windowData);

// Return a response
echo "Window data saved successfully.";
?>
