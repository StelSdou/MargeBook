<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST["submit"]){

    $pdf_file = $_FILES['inpPdf'];
    
    $upload_dir = 'C:/xampp/htdocs/margeBook/uploads/';
    $upload_file = $upload_dir . basename($pdf_file['name']);
    if (!move_uploaded_file($pdf_file['tmp_name'], $upload_file)) { 
        die("Possible file upload attack!");
    }

    $mon = $_POST['month'];

    try {
        $imagick = new Imagick();
        
        $imagick->readImage($upload_file);
        
        foreach ($imagick as $i => $page) {
            $page->setImageFormat('jpg');
            $imageBlob = $page->getImageBlob();
            $imagePath = $upload_dir . "page_" . $i . "_" . time() . ".jpg";
            file_put_contents($imagePath, $imageBlob);
            
            $stmt = $conn->prepare("INSERT INTO $mon (name, yearD, num, image_path) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $_POST['name'], $_POST['Year'], $i, $imagePath);
            $stmt->execute();
        }
    } catch (Exception $e) {
        echo 'Caught exception: <br>',  $e->getMessage(), "\n";
    }
    header('Location: indexLibrAdmin.php');
    exit();
}