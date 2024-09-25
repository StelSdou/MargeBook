<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['title']){
        session_start();
        $_SESSION['year'] = isset($_POST['years']) ? $_POST['years'] : date("Y");
        $_SESSION['month'] = isset($_POST['month']) ? $_POST['month'] : "ctomber";
        $_SESSION['name'] = $_POST['title'];
        header('Location: index.php');
        exit();
    }else{
        header('Location: indexLibr.php');
        exit();
    }
}