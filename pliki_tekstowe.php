<?php
//r odczyt/poczatek pliku
//r+ zapis/odczyt/poczatek pliku
//w zapis/koniec pliku/zerowanie lub tworzenie
//w+ zapis/odczyt/koniec pliku/zerowanie lub tworzenie
//a zapis/koniec pliku/tworzenie
//b - plik binarny

//Zapis do pliku
$c = 200;
$plik=fopen("liczby.txt", "w+");
fputs($plik, "linia pierwsza\n"); //#10#13
fputs($plik, "linia druga\n");
fputs($plik,$c."\n");
fclose($plik);

echo "<br>Odczyt pliku linia po linii:<br><br>";
$plik=fopen("liczby.txt","r");
while(!feof($plik)) //EOF - end of file feof()-sprawdza czy wystąpił koniec pliku
{
    $linia=fgets($plik);
    echo $linia."<br>";//." - jest typu ".gettype($linia)."<br>";
}
fclose($plik);

echo "<br>Odczyt pliku znak po znaku:<br><br>";
$plik=fopen("liczby.txt","r");
while($znak=fgetc($plik));
{
    echo $znak;
    if($znak=="\n") echo "<br>";
}
fclose($plik);

echo "<br>Odczyt całej zawartości pliku:<br><br>";
$c=file_get_contents("liczby.txt");
echo $c;
?>