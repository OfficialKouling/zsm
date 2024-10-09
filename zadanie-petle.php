<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie-pętle</title>
    <style>
        *{
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }
        #firstSection{
            float: left;
            width: 50%;
        }
        #secondSection{
            float: left;
            width: 50%;
        }
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Petlę - zadanie</h1>
    <section id="firstSection"><?php
        // strona podzielona na 2 sek. w 20 liczb z przedzialu 1-100, liczby parzyste czerw, nieparzyste zielonym, w drug sek. komunikat ile liczb parz ile nieparz
        $evenNumbers=0;
        $evenNumbersArray = array();
        $evenNumbersSum = 0;
        $noEvenNumbers=0;
        $noEvenNumbersArray = array();
        $noEvenNumbersSum = 0;
        for($x=0;$x<20;$x++){
            $randomVariable = rand(1,100);
            if($randomVariable % 2){
                $evenNumbersArray[] = "$randomVariable";
                $evenNumbers++;
            }
            else{
                $noEvenNumbersArray[] = "$randomVariable";
                $noEvenNumbers++;
            }
        }
        echo"<p class=\"green\">";
        foreach($evenNumbersArray as $key){
            echo "$key ";
        }
        echo"</p>";

        echo"<p class=\"red\">";
        foreach($noEvenNumbersArray as $key){
            echo "$key  ";
        }
        echo"</p>";
    ?></section>
    <section id="secondSection"><?php
        echo "liczb parzystych jest: $evenNumbers<br>";
        echo "liczb nieparzystych jest: $noEvenNumbers<br>";
        echo "suma liczb parzystych: ";
        foreach($evenNumbersArray as $key){
            $evenNumbersSum += $key;
        }
        foreach($noEvenNumbersArray as $key){
            $noEvenNumbersSum += $key;
        }
        echo"$evenNumbersSum<br>";
        echo "suma liczb nieparzystych: ";
        echo "$noEvenNumbersSum";
    ?></section>
</body>
</html>