<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <?php
    $mysqli = new mysqli('localhost', 'root','', 'ryby');
    $mysqli->close();
    ?>
    <header><h1>Portal dla Wędkarzy</h1></header>
    <div id="test">
        <div id="lewo">
    <div id="lewo1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <li>
                Szczupak pływa w rzece Warta-Obrzycko, Wielkopolskie
            </li>
            <li>
                Leszcz pływa w rzece Przemsza k. Okradzinowa, Śląskie
            </li>
        </ol>
    </div>
    <div id="lewo2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <td>L.p</td><td>Gatunek</td><td>Występowanie</td>
            </tr>
            <tr>
                <td>1</td><td>Szczupak</td><td>stawy, rzeki</td>
            </tr>
            <tr>
                <td>3</td><td>sandacz</td><td>stawy jeziora, rzeki</td>
            </tr>
            <tr>
                <td>4</td><td>Okoń</td><td>rzeki</td>
            </tr>
            <tr>
                <td>5</td><td>Sum</td><td>jeziora, rzeki</td>
            </tr><tr>
                <td>6</td><td>Dorsz</td><td>Morza, oceany</td>
            </tr>
        </table>

    </div>
</div>
    <div id="prawo">
        <img src="./ryba1.jpg" alt="">
        <br>
        <a id="kwarenda" href="">Pobierz Kwarendę</a>

    </div>
</div>
    
    
    <footer>Stronę Wykonał Mikołaj Sadkowski</footer>
</body>
</html>