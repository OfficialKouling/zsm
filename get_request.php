<?php
    //var_dump($_GET);
    //echo "<br>";
    //http://localhost/abc.php?x=5&y=9
    //! - negacja logiczna NOT
    //|| - OR

    if(!isset($_GET['x']) || !isset($_GET['y']))
    //$_GET tablica przekazanych parametrów metodą GET
    {
        echo "Brak parametru x lub y";
        exit;
    }
    if(empty($_GET['x']) || empty($_GET['y']))
    {
        echo "Brak parametru x lub y";
        exit;
    }
    $xx=$_GET["x"];
    $yy=$_GET["y"];

    echo "x=$xx y=$yy<br>";
    echo "$xx+$yy=".($xx+$yy)."<br>";
    echo "$xx-$yy=".($xx-$yy)."<br>";
    echo "$xx/$yy=".($xx/$yy)."<br>";
    echo "$xx*$yy=".($xx*$yy)."<br>";
    echo "$xx%$yy=".($xx%$yy)."<br>";

    //+ - / * % (modulo)
    // < > <= >= == !=
?>