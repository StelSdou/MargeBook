<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$month = $_SESSION['month'];
$year = $_SESSION['year'];
$name = $_SESSION['name'];
$sql = "SELECT id, num FROM $month WHERE yearD = ? AND name = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $year, $name);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id[] = $row["id"];
        $num[] = $row["num"];
    }
} else {
    echo "0 αποτελέσματα";
}
$number = (end($num) + 1) / 2;
$_SESSION['number'] = $number;

$conn->close();