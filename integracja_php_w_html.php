<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona 1</title>
    <style>
        *{
            padding: 10px;
            text-align: center;
        }
        #calosc
        {
            width:80%;
            margin-left: auto;
            margin-right: auto;
        }
        #logo
        {
            background-color: blue;
            min-height: 100px;
            color:white;
        }
        #lewa{
            background-color: rgb(100, 100, 200);
            min-height: 100px;
            width: calc(33.3333333% - 20px);
            float:left;
        }
        #srodek{
            background-color: #a6edb9;
            min-height: 100px;
            width: calc(33.3333333% - 20px);
            float:left;
        }
        #prawa{
            background-color: pink;
            min-height: 100px;
            width: calc(33.3333333% - 20px);
            float:left;
        }
        #dol{
            background-color: lightblue;
            min-height: 100px;
            clear:both;
        }
    </style>
</head>
<body>
    <div id=calosc>
        <div id=logo>
            <h1>Moja strona</h1>
        </div>
        <div id=lewa>
            <?php
            $a=rand(1,100);
            echo $a;
            ?>
        </div>
        <div id=srodek>
            <?php
                $b=rand(1,100);
                echo $b;
            ?>
        </div>
        <div id=prawa>
            <?php
                $c=rand(1,100);
                echo $c;
            ?>
        </div>
        <div id=dol style="background-color: red;">
            <?php
                $suma=$a+$b+$c;
                echo "sqrt($a+$b+$c=".sqrt($suma)."<br>";
                echo "$a+$b+$c=$suma";
            ?>
        </div>
    </div>
</body>
</html>