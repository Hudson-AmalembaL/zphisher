<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
    $_SESSION['number'] = $_POST['number'];
    echo 'Number received: ' . $_POST['number'];
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['number'])) {
        echo $_SESSION['number'];
    } else {
        echo 'No number set.';
    }
} else {
    echo 'Invalid request.';
}
?>
