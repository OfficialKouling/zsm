<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 27_09_2024</title>
    <style>
        main{
            padding: 5px;
            height: 80px;
        }
        *{
            text-align: center;
        }
        #lewa{
            width: 49%;
            float: left;
            border-style: groove;
            background-color: red;
        }
        #prawa{
            width: 49%;
            background-color: aqua;
            float: left;
            border-style: groove;
        }
        #czerwono{
            color: red;
        }
    </style>
</head>
<body>
    <main>
        <section id=lewa>
        <?php
            if (!isset($_GET["n"]) || !isset($_GET["a"]) || !isset($_GET["b"])){
                echo "nie podano ilości liczb / dolnej granicy / górnej granicy";
                exit;
            }
            if (empty($_GET["n"]) || empty($_GET["a"]) || empty($_GET["b"])){
                echo "nie podano ilości liczb / dolnej granicy / górnej granicy";
                exit;
            }

            $ilosc=$_GET["n"];
            $dolna=$_GET["a"];
            $gorna=$_GET["b"];
            echo "N (ilość liczb) = $ilosc <br>A (dolna granica) = $dolna <br>B (górna granica) = $gorna <br>";
        ?>
        </section>
        <section id=prawa>
        <?php
            $x1=1;
            for($x=0;$x<$ilosc;$x++){
                $randomowa=rand($dolna, $gorna);
                echo "Wylosowana liczba $x1 = $randomowa <br>";
                $x1++;
            }
        ?>
        </section>
        <section id=czerwono>
            <?php echo(floatval($dolna + $gorna / 2)."<br>")
            ?>    
        <section>
        </main>
</body>
</html>
<!-- 3 parametry, n ilosc liczb, a dolna granica przedzialu, b - gorna granica przedzialu. Skrypt losuje n liczb z przedzialu a,b. Wartosci n,a,b w sekcji lewej, wylosowane liczby w sekcji prawej. Liczby rowne wartosci a + b / 2 wyswietlamy kolorem czerwonym -->