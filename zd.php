<?php
// z pliku czytamy liczbę po jednej liczbie w linii, skrypt odczytuje tą liczbę i wyświetla je na ekranie, następnie średnią tych liczb zapisuje do pliku średnia.txt
$plik=fopen("liczby.txt", "w+");
$sumaRandomowych = 0;
for($x=0;$x<10;$x++){
    $randomowa = rand(1,100);
    fputs($plik, "$randomowa\n");
    $sumaRandomowych = ($sumaRandomowych + $randomowa);
}
fclose($plik);
$srednia = $sumaRandomowych / 10;
$plik=fopen("średnia.txt", "w+");
fputs($plik, "Średnia randomowych to: $srednia Suma randomowych to: $sumaRandomowych");
fclose($plik);

$plik=fopen("liczby.txt", "r");
while(!feof($plik)){
    $linia=fgetc($plik);
    echo $linia;
}
fclose($plik);

// $plik=fopen("średnia.txt");
$text = file_get_contents("średnia.txt");
echo "$text";
// fclose($plik);
?>