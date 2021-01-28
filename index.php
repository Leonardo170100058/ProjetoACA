<?php
/**
 * Twitter API SEARCH
 * Selim Hallaç
 * selimhallac@gmail.com
 */

include "twitteroauth/twitteroauth.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <title>Twitter API SEARCH</title>
    </head>

        <body>

        <p>Presidenciais 2021 Twitter Feed</p>
        <br><br>

        <div id="resultadosEleicoes" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <br><br>

        <div id="resultadosEleicoes2016" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <br><br>

        <form action="" method="post">
            <button type="submit" name="marcelo"><img src="images/marcelo.jfif"><br><br>
                </img> <span>Marcelo Rebelo de Sousa</span></button>
            <button type="submit" name="mayan"><img src="images/mayan.jpeg"><br><br>
                </img><span>Tiago Mayan </span></button>
            <button type="submit" name="vitorino"><img src="images/vitorino.jpg"><br><br>
                </img><span>Vitorino Silva </span></button>
            <button type="submit" name="anagomes"><img src="images/anagomes.jpg"><br><br>
                </img><span>Ana Gomes </span></button>
            <button type="submit" name="marisamatias"><img src="images/marisamatias.jpg"><br><br>
                </img><span>Marisa Matias </span></button>
            <button type="submit" name="joaoferreira"><img src="images/joaoferreira.jpg"><br><br>
                </img><span>João Ferreira </span></button>
            <button type="submit" name="andreventura"><img src="images/andreventura.jpg"><br><br>
                </img><span>André Ventura </span></button>

        </form>
        <br><br>

        </body>
</html>
