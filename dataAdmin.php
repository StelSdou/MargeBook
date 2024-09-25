<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $_SESSION['year'] = $_POST['years'];
    $_SESSION['month'] = $_POST['month'];
    header('Location: create.php');
    exit();
}