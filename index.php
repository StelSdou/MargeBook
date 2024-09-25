<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleBook.css" />
    <script src="https://unpkg.com/pdf-lib"></script>
    <script
    src="https://kit.fontawesome.com/22e77351d3.js"
    crossorigin="anonymous"
    ></script>
    <title>Book</title>
  </head>
  <body>
    <button id="prevBtn" class="but">
      <div class="pr bMobile"></div>
      <div class="b">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
    </button>

    <!-- Book -->
    <div id="book" class="book">
      <!-- Paper -->
      <?php
        include_once 'count.php';
        include 'myData.php';

        $f = 1;
        for ($i = 1; $i < $number; $i++) {
          echo'
          <div id="p'.$i.'" class="paper">
          <!-- Front -->
          <div class="front">
            <!-- Contact -->
            <div class="frontCont">
              ' . im($id[$f - 1]) . '
            </div>
          </div>
          <!-- Back -->
          <div class="back">
            <!-- Contact -->
            <div class="backCont">
              ' . im($id[$f]) . '
            </div>
          </div>
        </div>
        <style>
          #p'. $i .' {
            z-index: '. $number - $i + 1 .';
          }
        </style>
        ';
        $f = $f + 2;
        }
      ?>
      <div id="pF" class="paper">
          <!-- Front -->
          <div class="front">
            <!-- Contact -->
            <div class="frontCont">
            <?php
                echo im(end($id) - 1);
              ?>
            </div>
          </div>
          <!-- Back -->
          <div class="back">
            <!-- Contact -->
            <div class="backCont">
            <?php
                echo im(end($id));
              ?>
            </div>
          </div>
        </div>
        <style>
          #pF {
            z-index:1;
          }
        </style>
    </div>
    
    <button id="nextBtn" class="but">
      <div class="nex bMobile"></div>
      <div class="b">
        <i class="fa-solid fa-arrow-right"></i>
      </div>
    </button>

    <script>
      var numOfPage = parseInt("<?php echo $number; ?>");
      var currentLocation = 1;
      var maxLocation = numOfPage + 1;
    </script>
    <script src="myScript.js"></script>
    
  </body>
</html>
