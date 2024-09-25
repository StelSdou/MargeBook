<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdmin.css">
    <title>Add</title>
</head>
<body>
    <div class="container">
        <div class="container-in">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="hidden" id="month" name="month" value="<?php
                    session_start();
                    echo $_SESSION['month'];
                ?>">
                <div class="in">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="in">
                    <label for="Year">Year</label>
                    <input type="text" value="<?php 
                    echo $_SESSION['year'];
                    ?>" name="Year" id="Year">
                </div>
                <div class="in">
                    <div class="f">
                        <label for="inpPdf">Choose file</label>
                        <input type="file" id="inpPdf" name="inpPdf" accept=".pdf" onchange="showFileName()" required>
                        <span class="file-name" id="file-name">No file chosen</span>
                    </div>
                </div>
                <div class="in">
                    <input type="submit" value="upload" name="submit">
                </div>
            </form>
        </div>
    </div>
    <script>
        function showFileName(){
            var fileInput = document.getElementById('inpPdf');
            var fileName = document.getElementById('file-name');
            if (fileInput.files.length > 0) {
                fileName.textContent = fileInput.files[0].name;
            } else {
                fileName.textContent = 'No file chosen';
            }
        }
    </script>
</body>
</html>