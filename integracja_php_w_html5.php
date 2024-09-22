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
        main
        {
            width:80%;
            margin-left: auto;
            margin-right: auto;
        }
        header
        {
            background-color: blue;
            min-height: 100px;
            color:white;
        }
        nav{
            background-color: rgb(100, 100, 200);
            min-height: 100px;
            width: calc(33.3333333% - 20px);
            float:left;
        }
        section{
            background-color: #a6edb9;
            min-height: 100px;
            width: calc(33.3333333% - 20px);
            float:left;
        }
        aside{
            background-color: pink;
            min-height: 100px;
            width: calc(33.3333333% - 20px);
            float:left;
        }
        footer{
            background-color: lightblue;
            min-height: 100px;
            clear:both;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Moja strona</h1>
        </header>
        <nav>
            <?php
            $a=rand(1,100);
            echo $a;
            ?>
        </nav>
        <section>
            <?php
                $b=rand(1,100);
                echo $b;
            ?>
        </section>
        <aside>
            <?php
                $c=rand(1,100);
                echo $c;
            ?>
        </aside>
        <footer style="background-color: red;">
            <?php
                $suma=$a+$b+$c;
                echo "sqrt($a+$b+$c=".sqrt($suma)."<br>";
                echo "$a+$b+$c=$suma";
            ?>
        </footer>
    </main>
</body>
</html>