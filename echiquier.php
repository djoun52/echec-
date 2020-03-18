<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <?php

        $piece = ["Tour", "Cavalier", "Fou", "Reine", "Roi", "Fou", "Cavalier", "Tour"];


        for ($x = 0; $x <= 8; $x++) {
            for ($y = 0; $y < 8; $y++) {

                if ($x < 8 && $x > 6) {
                    if (($x % 2 == 0 && $y % 2 == 0) || ($x % 2 != 0 && $y % 2 != 0)) {
                        echo "<div class='case blanche'><p> $piece[$y] Blanc<p>
                   
                 </div>";
                    } else {
                        echo "<div class='case noir'><p> $piece[$y] Blanc <p>
                  
                 </div>";
                    }
                }
                if ($x < 7 && $x > 5) {
                    if (($x % 2 == 0 && $y % 2 == 0) || ($x % 2 != 0 && $y % 2 != 0)) {
                        echo "<div class='case blanche'><p>  pion Blanc <p>
                       
                     </div>";
                    } else {
                        echo "<div class='case noir'><p>  pion Blanc<p>
                      
                     </div>";
                    }
                }
                if ($x < 6  && $x > 1) {
                    if (($x % 2 == 0 && $y % 2 == 0) || ($x % 2 != 0 && $y % 2 != 0)) {
                        echo "<div class='case blanche'>
                   
                 </div>";
                    } else {
                        echo "<div class='case noir'>
                  
                 </div>";
                    }
                }
                if ($x < 2 && $x > 0) {
                    if (($x % 2 == 0 && $y % 2 == 0) || ($x % 2 != 0 && $y % 2 != 0)) {
                        echo "<div class='case blanche'><p>  pion NOIR<p>
                   
                 </div>";
                    } else {
                        echo "<div class='case noir'><p> pion NOIR<p>
                  
                 </div>";
                    }
                }
                if ($x < 1) {
                    if (($x % 2 == 0 && $y % 2 == 0) || ($x % 2 != 0 && $y % 2 != 0)) {
                        echo "<div class='case blanche'><p>  $piece[$y] NOIR<p>
                   
                 </div>";
                    } else {
                        echo "<div class='case noir'><p> $piece[$y] NOIR<p>
                  
                 </div>";
                    }
                }
            }
        }

        ?>
    </div>
</body>

</html>