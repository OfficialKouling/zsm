<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warunki 13.11.2024</title>
</head>
<body>
    <?php
        $a=9;
        $b=19;

        // > < <= >= == !=
        // warunek1 && warunek2 // AND
        // warunek1 || warunek2 // OR
        // !warunek1            // NOT

        //instrukcja warunkowa

        if($a>$b){
            echo "a > b";
        }
        elseif($a==$b){
            echo "a = b";
        }
        else{
            echo "a < b";
        }
        echo "<br>";

        // wyrażenie warunkowe
        // $wynik=($a==$b?"tak":"nie");
        echo "Czy $a i $b są równe? ".($a==$b?"tak":"nie");
        //warunek?wartość jeżeli true:wartość jeżeli false
        echo "<br>";

        //instrukcja wyboru
        switch(rand(1,5)){
            case 1: echo "wylosowano 1";
                echo "<br>";
                break;
            case 2: echo "wylosowano 2";
                echo "<br>";
                break;
            case 3: echo "wylosowano 3";
                echo "<br>";
                break;
            case 4: echo "wylosowano 4";
                echo "<br>";
                break;
            case 5: echo "wylosowano 5";
                echo "<br>";
                break;
        }
    ?>
</body>
</html>