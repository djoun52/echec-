<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>echequier</title>
</head>

<body>
    <div id="wrapper">

        <?php

        $piece = ["Tour", "Cavalier", "Fou", "Reine", "Roi", "Fou", "Cavalier", "Tour"];

        function echiquier($param){

            for ($x = 0; $x <= 8; $x++) { // Cette boucle génere les lignes de l'échiquer (axe x) 
                for ($y = 0; $y < 8; $y++) { // Cette boucle génere les colonnes de l'échiquier (axe y)

                    if ($x == 7) { // sélectionne la dernier ligne 
                        if ($y % 2 != 0) { // selectionne les colonnes numéro 1,3,5 et 7
                            echo "<div class='case blanche'><p> $param[$y] BLANC <p> </div>";
                        } else {
                            echo "<div class='case noir'><p> $param[$y] BLANC <p> </div>";
                        }
                    }
                    if ($x == 6) { // sélectionne l'avant dernier ligne
                        if ($y % 2 == 0) { // selectione  les colonnes numéro 0,2,4,6
                            echo "<div class='case blanche'><p>  pion BLANC <p> </div>";
                        } else {
                            echo "<div class='case noir'><p>  pion BLANC<p> </div>";
                        }
                    }

                    if ($x < 6  && $x > 1) { //selectionne les lignes 2,3,4,5
                        if (($x % 2 == 0 && $y % 2 == 0) || ($x % 2 != 0 && $y % 2 != 0)) { // selectione les case qui ont comme coordonné une ligne avec un nombre paire (2 et 4) et les colonne impaire (1,3,5,7) ou les cases avec une position qui ont une ligne impaire (3 et 5)  et une colonne paire (0,2,4,6)
                                echo "<div class='case blanche'> </div>";
                            } else {
                                echo "<div class='case noir'> </div>";
                        }
                    }

                    if ($x == 1) { // selectionne la 2eme ligne 
                        if ($y % 2 != 0) { // selectionne les colonne numéro 1,3,5 et 7
                            echo "<div class='case blanche'><p>  pion NOIR<p> </div>";
                        } else {
                            echo "<div class='case noir'><p> pion NOIR<p> </div>";
                        }
                    }

                    if ($x == 0) { // selectionne la 1er ligne
                        if ($y % 2 == 0) { // selectione  les colonnes numéro 0,2,4,6
                            echo "<div class='case blanche'><p> $param[$y] NOIR<p> </div>";
                        } else {
                            echo "<div class='case noir'><p> $param[$y] NOIR<p> </div>";
                        }
                    }
                }
            }
            return;
        }
    echiquier($piece);
    ?>
    </div>
</body>

</html>