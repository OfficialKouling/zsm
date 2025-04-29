<!-- nazwa, ilość sztuk, cena 
cena towaru
wartość wszystkich towarów 
w formularzie nazwa, ilszt, cena-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 29.04.2025</title>
</head>
<body><section id="sekcja1">
    <form action="" method=post>
        <label>Nazwa: </label>
        <input type="text" id="nazwa" name="nazwa" placeholder="Wpisz nazwę towaru" required><br>
        Ilość sztuk: <input type="number" id="ilosc" name="ilosc" placeholder="Wpisz ilość towaru" required><br>
        Cena: <input type="number" id="cena" name="cena" placeholder="Wpisz cenę towaru" required><br>
        <input type="submit" value="Wyślij"> <input type="reset" value="Czyść dane">
        <?php
        $pol=mysqli_connect("localhost", "root", "", "towary");
        if(mysqli_connect_errno()){
            echo "Błąd połączenia z bazą danych";
            exit();
        }
        if(!empty($_POST['nazwa'])){
            $nazwa=$_POST["nazwa"];
            $ilosc=$_POST["ilosc"];
            $cena=$_POST["cena"];
            $z="INSERT INTO towary(nazwa, ilosc, cena) VALUES ('$nazwa',$ilosc,$cena)";
            $w=mysqli_query($pol, $z);
            mysqli_close($pol);
            echo "Dane wstawione do bazy";   
        }
        ?>
</section>
<section id="sekcja2">
<?php
$pol=mysqli_connect("localhost", "root", "", "towary");
if(mysqli_connect_errno()){
    echo "Błąd połączenia z bazą danych";
    exit();
}
$z="SELECT * FROM towary";
echo "<table border=2>";
$wszystko=0;
if($w=mysqli_query($pol, $z)){
    echo "<tr><th>Nazwa towaru</th><th>Ilość towaru</th><th>Cena towaru za sztukę</th><th>Cena za wszystkie</th></tr>";
    while($rekord=mysqli_fetch_assoc($w)){
        $razem=$rekord["ilosc"]*$rekord["cena"];
        echo "<tr><th>".$rekord["nazwa"]."</th><th>".$rekord["ilosc"]."</th><th>".$rekord["cena"]."zł</th><th>".$razem."zł</tr>";
        $wszystko=$wszystko+$razem;
    }
    echo "</table>";
    mysqli_free_result($w);
}
mysqli_close($pol);
?>
</section>
<section id="sekcja3">
<?php
echo "Wartość wszystkich towarów wynosi: ".$wszystko."zł";
?>
</section>
</form>
</body>
</html>