<!-- // jedna sekcja losuje sie 50 liczb z zakresu 1-100, ponizej beda 2 sekcji obok siebie wylosuje sie wartosc a, a na drugiej sekcji b, a<b, na dole jeszcze jedna sekcja  na całą szerokość w której wyświetlają się te same liczby co u góry ale liczby z przedzialu a,b wyswietlają się kolorem czerwonym -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanieZTablicami</title>
    <style>
        *{
            /* background-color: black; */
            text-align: center;
            /* height: 50px */
        }
        main{
            border: solid black;
            border-radius: 6px;
        }
        #firstSection{
            background-color: #054A91;
            color: white;
            /* height: 50px; */
        }
        #secondSection{
            float: left;
            width: 50%;
            background-color: #3E7CB1;
            /* height: 50px; */
        }
        #thirdSection{
            float: left;
            width: 50%;
            background-color: #81A4CD;
            /* height: 50px; */
        }
        #fourthSection{
            background-color: #DBE4EE;
            /* height: 100px; */
            clear: both;
        }
        .red{
            color: red;
        }
    </style>
</head>
<body>   
    <main>
        <section id="firstSection">
            <?php
            $arrayFifty = [];
            for($i=0;$i<50;$i++){
                $arrayFifty[] = rand(1, 100);
            }
            foreach($arrayFifty as $key){
                echo "$key ";
            }
            ?>
        </section>
        <section id="secondSection">
            <?php
            $a = rand(1,100);
            $b = rand(1,100);
            if($a>$b){
                $temp = $a;
                $a = $b;
                $b = $temp;
            }
            echo "A = $a";
            ?>
        </section>
        <section id="thirdSection">
            <?php
            echo "B = $b";
            ?>
        </section>
        <section id="fourthSection">
            <?php
            foreach($arrayFifty as $key){
                if($key>$a && $key<$b || $key==$a || $key==$b){
                    echo "<span class=\"red\">$key </span>";
                }
                else{
                    echo "$key ";
                }
            }
            ?>
        </section>
    </main>
</body>
</html>