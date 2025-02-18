<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularzy</title>
</head>
<body>
    <form action=formularz.php method=post>
        <label>Nazwisko:</label>
        <input type=text id=nazwisko name=nazwisko maxlength=10 placeholder="Wpisz nazwisko" required><br>
        Wiek: <input type=number id=wiek name=wiek value=100><br>
        Obecny: <input type=checkbox name=obecny id="ch1"><br>
        Płeć: <br>
        kobieta<input type=radio name=plec value=kobieta checked> <br>
        mężczyzna<input type=radio name=plec value=mężczyzna><br>

        <!-- e-mail:<input type=email name=email><br> -->
         <!-- <input type="image" id="image" alt="Login" name="aaa" -->
          <!-- src="https://picsum.photos/200/300" -->

        <select name=kolor id="kolor">
            <option value="czerwony">Czerwony</option>
            <option value="zielony">Zielony</option>
            <option value="niebieski">Niebieski</option>
    </select>
    <br>
    <textarea name=opis></textarea>
    <br>
    <input type=submit value=Wyślij>
    <input type=reset value="Czyść dane">
    </form>
</body>
</html>