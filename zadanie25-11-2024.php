<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie25-11-2024</title>
    <style>
        *{
            /* text-align: center; */
        }
        tr,th { border: 2px solid black; width: 100px; }
    </style>
</head>
<body>
    <!-- Skrypt generuje tabele -->
    <?php
    function f1($x){
        $wynikf1 = (2*$x-3);
        return $wynikf1;
    }
    function f2($x){
        $wynikf2 = (2*$x*$x-3*$x);
        return $wynikf2;
    }
    function f3($x){
        $wynikf3 = (($x-1)*($x-1)*($x-1)*($x-1));
        return $wynikf3;
    }
    $a = rand(1,20);
    $b = rand(1,20);
    if($a>$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $roznicaOdADoB = $b - $a;
    echo "A = $a<br>B = $b<br>";
    echo "Funkcja 1: <i>2x - 3</i><br>";
    echo "Funkcja 2: <i>2x * 2x - 3x</i><br>";
    echo "Funkcja 3: <i>(x-1) * (x-1) * (x-1) * (x-1)</i><br>";
    echo "<table>";
    echo "<tr><th>X</th><th>F1</th><th>F2</th><th>F3</th></tr>";
    for($q=0;$q<=$roznicaOdADoB;$q++){
        $pozycja = $a+$q;
        echo "<tr>"."<th>".$pozycja."</th>"."<th>".f1($pozycja)."</th>"."<th>".f2($pozycja)."</th>"."<th>".f3($pozycja)."</th>"."</tr>";
        
    }
    echo "</table>";
    ?>
</body>
</html>