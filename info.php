<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
}
?>


