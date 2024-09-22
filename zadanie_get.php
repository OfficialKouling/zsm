<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
    <style>
        *{
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
        }
        h1{
            text-align: center;
        }
        header{
            padding: 5px;
            text-align: center;
            height: 80px;
            background-color: blue;
            color: white;
        }
        #lewa{
            float: left;
            height: 50px;
            background-color: aquamarine;
            padding: 10px;
        }
        #prawa{
            float: right;
            height: 50px;
            background-color: aqua;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
    // Zadanie: do skryptu przekazujemy szerokosc, wysokosc prostokata. Skrypt oblicza pole i obwod prostokata. W sekcji gornej wyswietla sie wartosci bokow, w sekcji dolnej ktora bedzie podzielona na 2 czesci po lewej bedzie pole po prawej obwod
    if (!isset($_GET["szerokosc"]) || !isset($_GET["wysokosc"]))
    {
        echo "Nie podano wysokości/szerokości prostokąta";
        exit;
    }
    if (empty($_GET["szerokosc"]) || empty($_GET["wysokosc"]))
    {
        echo "Nie podano wysokości/szerokości prostokąta";
        exit;
    }
    echo "<h1>Obliczanie pola, obwodu prostokąta</h1>";
    $szerokosc=$_GET["szerokosc"];
    $wysokosc=$_GET["wysokosc"];
?>
    <header>
        <?php
            echo "Szerokość prostokąta = $szerokosc"." cm<br>";
            echo "Wysokość prostokąta = $wysokosc"." cm<br>";
        ?>
    </header>
    <footer>
        <section id="lewa">
            <?php
                echo "Pole prostokąta = $szerokosc * $wysokosc = ".($szerokosc*$wysokosc)." cm<sup>2</sup><br>";
            ?>
        </section>
        <section id="prawa">
            <?php
                echo "Obwód prostokąta = $szerokosc + $szerokosc + $wysokosc + $wysokosc = ".($szerokosc*2+$wysokosc*2)." cm<br>";
            ?>
        </section>
    </footer>
</body>
</html>