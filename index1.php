<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>table de multiplication</title>
</head>
<body>
    <center>
            <div class="div">
                    <h1> !! Table de multiplication !!</h1>
                    <form action="http://www.devoirphp.mg/index1.php" method="GET">
                        <input type="text" name="a" placeholder=" Entrez a" class="a"/>
                        <input type="text" name="b" placeholder=" Entrez b" class="b"/>
                        <input type="submit" name="valider" value="valider" class="valider">
                    </form>
            </div>
    </center>

<center>
    <table>
                <?php
                    $a=$_GET["a"];
                    $b=$_GET["b"];
                    for( $i=1; $i<=$b; $i++){
                        $r=$i*$a;
                         if($i%2===0){
                            $color="green";
                         } 
                         else{
                            $color="white";

                         }
                            echo "<tr styles=\"background-color:$color;\">
                                        <td>$a</td>
                                        <td>$i</td>
                                        <td>$r</td>
                                        <td><a href=\"http://www.devoirphp.mg/modifier.php\">Modifier</a></td>
                                        <td>Supprimer</td>
                                    </tr>";
                    }
                ?>
        </table>
</center>

</body>
</html>