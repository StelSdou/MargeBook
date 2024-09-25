<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLibr.css">
    <title>Library</title>
</head>
<body>
    <?php 
        include 'connection.php';
        $year = isset($_GET['variable']) ? $_GET['variable'] : date("Y");
        $num = 0;
    ?>
    <div class="page">
        <div class="main">
            <div class="c1">
                <h2><?php echo $year ?></h2>
            </div>
            <div class="c2">
                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM octomber WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "octomber";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            }else{
                                $name = "";
                                echo "img.jpg";
                            }
                            $stmt->close();
                            ?>
                        " alt="img"></figure></div>
                        
                        <p class="month">Οκτώβριος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM november WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "november";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            }else{
                                $name = "";
                                echo "img.jpg";
                            } 
                        ?>
                        " alt="img"></figure></div>
                        <p class="month">Νοέμβριος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM december WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "december";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            }
                            else{
                                $name = "";
                                echo "img.jpg";
                            }
                        ?>
                        " alt="img"></figure></div>
                        <p class="month">Δεκέμβριος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM january WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "january";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            }
                            else{
                                $name = "";
                                echo "img.jpg";
                            }
                        ?>
                        " alt="img"></figure></div>
                        <p class="month">Ιανουάριος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM february WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "february";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            }
                            else{
                                $name = "";
                                echo "img.jpg";
                            }
                        ?>
                        " alt="img"></figure></div>
                        <p class="month">Φεβρουάριος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM march WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "march";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            } 
                            else{
                                $name = "";
                                echo "img.jpg";
                            }
                        ?>
                        " alt="img"></figure></div>
                        <p class="month">Μάρτιος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM april WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "april";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            } else{
                                $name = "";
                                echo "img.jpg";
                            }
                        ?>
                        " alt="img"></figure></div>
                        <p class="month">Απρίλιος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

                <form class="forms" method="post" action="data.php">
                    <div class="book">
                        <div class="imgs"><figure><img src="
                        <?php
                            $sql = "SELECT image_path, name FROM may WHERE yearD = ? AND num = ?";
                            $stmt = mysqli_prepare($conn, $sql);
                            mysqli_stmt_bind_param($stmt, "ii", $year, $num);

                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $name = $row["name"];
                                    $month = "may";
                                    echo str_replace("C:/xampp/htdocs/margeBook/", "", $row["image_path"]);
                                }
                            } else{
                                $name = "";
                                echo "img.jpg";
                            }
                        ?>" alt="img"></figure></div>
                        <p class="month">Μάιος</p>
                        <h3 class="title"><?php echo $name; ?></h3>
                    </div>
                    <input type="hidden" name="years" value="<?php echo $year; ?>">
                    <input type="hidden" name="month" value="<?php echo $month; ?>">
                    <input type="hidden" name="title" value="<?php echo $name; ?>">
                </form>

            </div>
            <div class="c3">
                <div class="prev">
                        <form method="get">
                            <input type="hidden" name="variable" value="<?php  echo $year = $year - 1; ?>">
                            <button type="submit"><h4><--<?php echo $year; ?></h4></button>
                    </form>
                </div>
                <div class="next">
                    <form method="get">
                        <input type="hidden" name="variable" value="<?php  echo $year = $year + 2; ?>">
                        <button type="submit"><h4><?php echo $year; ?>--></h4></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="myScriptLib.js"></script>
</body>
</html>