<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 30.10.2024</title>
    <style>
        *{
            text-align: center;
        }
        #firstSection{
            border: solid black;
            border-radius: 1%;
            float: left;
            width: 49%;
            height: 150px;
            background-color: #22AAA1;
        }
        #secondSection{
            border: solid black;
            border-radius: 1%;
            float: left;
            width: 49%;
            height: 150px;
            background-color: #4CE0D2;
        }
        #thirdSection{
            border: solid black;
            border-radius: 1%;
            width: 99%;
            height: 150px;
            clear: both;
            background-color: #84CAE7;
        }
    </style>
</head>
<body>
<section id="firstSection">
    <?php
        // losujemy 20 liczb, wyswietlamy 1 sekcji ich, w 2 sume, w 4 odchylenie standarowe
        $randomArray = [];
        $randomArraySum = 0;
        $odchylenieStandardowe = 0;
        for($i=0;$i<20;$i++){
            $randomArray[] = rand(1, 100);
        }
        echo "<h1>Losujemy 20 liczb z przedziału od 1 do 100</h1>";
        foreach($randomArray as $key){
            $randomArraySum += $key;
            echo "$key ";
        }
        echo "<br>";
    ?>
    </section>
    <section id="secondSection">
    <?php
    echo "<h1>Liczymy sumę wszystkich wyłosowanych liczb</h1>$randomArraySum";
    ?>
    </section>
    <section id="thirdSection">
    <?php
    $randomArraySrednia = $randomArraySum/count($randomArray);
    foreach($randomArray as $key){
        $odchylenieStandardowe += pow($key - $randomArraySrednia, 2);
    }
    $odchylenieStandardowe = sqrt($odchylenieStandardowe / (count($randomArray)-1));
    echo "<h1>Liczymy odchylenie standardowe</h1>$odchylenieStandardowe%";
    ?>
    </section>
</body>
</html>