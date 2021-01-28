<?php
/**
 * Twitter API SEARCH
 * Selim Hallaç
 * selimhallac@gmail.com
 */

include "twitteroauth/twitteroauth.php";

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votosPresidenciais";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}


//Querys para localizar valores eleicoes 2021
$marcelo = "SELECT percentagem FROM candidatos WHERE id='1';";
$ana = "SELECT percentagem FROM candidatos WHERE id='2';";
$andre = "SELECT percentagem FROM candidatos WHERE id='3';";
$joao = "SELECT percentagem FROM candidatos WHERE id='4';";
$marisa = "SELECT percentagem FROM candidatos WHERE id='5';";
$tiago = "SELECT percentagem FROM candidatos WHERE id='6';";
$vitorino = "SELECT percentagem FROM candidatos WHERE id='7';";
$branco = "SELECT percentagem FROM candidatos WHERE id='8';";
$nulos = "SELECT percentagem FROM candidatos WHERE id='9';";
$abstencao = "SELECT percentagem FROM candidatos WHERE id='10';";

//Querys para localizar valores eleicoes 2016
$marcelo16 = "SELECT percentagem FROM candidatos2016 WHERE id='1';";
$sampaio = "SELECT percentagem FROM candidatos2016 WHERE id='2';";
$marisa16 = "SELECT percentagem FROM candidatos2016 WHERE id='3';";
$maria = "SELECT percentagem FROM candidatos2016 WHERE id='4';";
$edgar = "SELECT percentagem FROM candidatos2016 WHERE id='5';";
$vitorino = "SELECT percentagem FROM candidatos2016 WHERE id='6';";
$paulo = "SELECT percentagem FROM candidatos2016 WHERE id='7';";
$henrique = "SELECT percentagem FROM candidatos2016 WHERE id='8';";
$branco16 = "SELECT percentagem FROM candidatos2016 WHERE id='11';";
$nulos16 = "SELECT percentagem FROM candidatos2016 WHERE id='12';";
$abstencao16 = "SELECT percentagem FROM candidatos2016 WHERE id='13';";

//Coneções com a base de dados
$result = mysqli_query($conn, $marcelo);
$result1 = mysqli_query($conn, $ana);
$result2 = mysqli_query($conn, $andre);
$result3 = mysqli_query($conn, $joao);
$result4 = mysqli_query($conn, $marisa);
$result5 = mysqli_query($conn, $tiago);
$result6 = mysqli_query($conn, $vitorino);
$result7 = mysqli_query($conn, $branco);
$result8 = mysqli_query($conn, $nulos);
$result9 = mysqli_query($conn, $abstencao);

//Coneções com a base de dados 2016
$result16 = mysqli_query($conn, $marcelo16);
$result161 = mysqli_query($conn, $sampaio);
$result162 = mysqli_query($conn, $marisa16);
$result163 = mysqli_query($conn, $maria);
$result164 = mysqli_query($conn, $edgar);
$result165 = mysqli_query($conn, $vitorino);
$result166 = mysqli_query($conn, $paulo);
$result167 = mysqli_query($conn, $henrique);
$result1610 = mysqli_query($conn, $branco16);
$result1611 = mysqli_query($conn, $nulos16);
$result1612 = mysqli_query($conn, $abstencao16);

$resultCheck = mysqli_num_rows($result);

//Verificação se existem dados para introduzir
if($resultCheck > 0) {

    $marcelo1 = mysqli_fetch_assoc($result);
    $ana1 = mysqli_fetch_assoc($result1);
    $andre1 = mysqli_fetch_assoc($result2);
    $joao1 = mysqli_fetch_assoc($result3);
    $marisa1 = mysqli_fetch_assoc($result4);
    $tiago1 = mysqli_fetch_assoc($result5);
    $vitorino1 = mysqli_fetch_assoc($result6);
    $branco1 = mysqli_fetch_assoc($result7);
    $nulos1 = mysqli_fetch_assoc($result8);
    $abstencao1 = mysqli_fetch_assoc($result9);

    $marcelo16 = mysqli_fetch_assoc($result16);
    $sampaio = mysqli_fetch_assoc($result161);
    $marisa16 = mysqli_fetch_assoc($result162);
    $maria = mysqli_fetch_assoc($result163);
    $edgar = mysqli_fetch_assoc($result164);
    $vitorino = mysqli_fetch_assoc($result165);
    $paulo = mysqli_fetch_assoc($result166);
    $henrique = mysqli_fetch_assoc($result167);
    $branco16 = mysqli_fetch_assoc($result1610);
    $nulos16 = mysqli_fetch_assoc($result1611);
    $abstencao16 = mysqli_fetch_assoc($result1612);

//Adicionar valores a nossa tabela
        $dataPoints = array(
            array("y" => $abstencao1 ['percentagem'], "label" => "Abstenção"),
            array("y" => $nulos1 ['percentagem'] , "label" => "Votos Nulos"),
            array("y" => $branco1 ['percentagem'] , "label" => "Em Branco"),
            array("y" => $vitorino1 ['percentagem'] , "label" => "Votorino Silva"),
            array("y" => $tiago1 ['percentagem'] , "label" => "Tiago Mayan"),
            array("y" => $marisa1 ['percentagem'] , "label" => "Marisa Matias"),
            array("y" => $joao1 ['percentagem'] , "label" => "João Ferreira"),
            array("y" => $andre1 ['percentagem'] , "label" => "André Ventura"),
            array("y" => $ana1 ['percentagem'], "label" => "Ana Gomes"),
            array("y" => $marcelo1['percentagem'], "label" => "Marcelo Rebelo de Sousa")
        );

        $dataPoints16 = array(
            array("y" => $abstencao16 ['percentagem'], "label" => "Abstenção"),
            array("y" => $nulos16 ['percentagem'] , "label" => "Votos Nulos"),
            array("y" => $branco16 ['percentagem'] , "label" => "Em Branco"),
            array("y" => $henrique ['percentagem'] , "label" => "Henrique Neto"),
            array("y" => $paulo ['percentagem'] , "label" => "Paulo de Morais"),
            array("y" => $vitorino ['percentagem'] , "label" => "Vitorino Silva"),
            array("y" => $edgar ['percentagem'], "label" => "Edgar Silva"),
            array("y" => $maria['percentagem'], "label" => "Maria de Belém"),
            array("y" => $marisa16 ['percentagem'] , "label" => "Marisa Matias"),
            array("y" => $sampaio ['percentagem'], "label" => "Sampaio da Nóvoa"),
            array("y" => $marcelo16['percentagem'], "label" => "Marcelo Rebelo de Sousa")
        );

    }

// Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <title>Twitter API SEARCH</title>
    </head>
    <script>

        window.onload = function(){
            var chart = new CanvasJS.Chart("resultadosEleicoes", {
                animationEnabled: true,
                title:{
                    text: "Eleições Presidenciais 2021"
                },
                axisY:{
                    title: "Percentagens Por Candidato",
                    includeZero: true,
                    prefix: "%",
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##%",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

            var chart2016 = new CanvasJS.Chart("resultadosEleicoes2016", {
                animationEnabled: true,
                title:{
                    text: "Eleições Presidenciais 2016"
                },
                axisY:{
                    title: "Percentagens Por Candidato",
                    includeZero: true,
                    prefix: "%",
                },
                data: [{
                    type: "bar",
                    yValueFormatString: "#,##%",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($dataPoints16, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart2016.render();

        }


    </script>
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

            <div id="tweetsContainer">

                <?php
                    if(isset($_POST['marcelo'])){
                        marcelo();
                    }
                    if(isset($_POST['mayan'])){
                        mayan();
                    }
                    if(isset($_POST['vitorino'])){
                        vitorino();
                    }
                    if(isset($_POST['anagomes'])){
                        anagomes();
                    }
                    if(isset($_POST['marisamatias'])){
                        marisamatias();
                    }
                    if(isset($_POST['joaoferreira'])){
                        joaoferreira();
                    }
                    if(isset($_POST['andreventura'])){
                        andreventura();
                    }

                function marcelo(){
                        $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                        $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                        $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                        $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                        $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                        $tweetsMarcelo = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=Marcelo Rebelo De Sousa&result_type=recent&count=30');

                        foreach ($tweetsMarcelo->statuses as $key => $tweet) { ?>
                            <img src="<?=$tweet->user->profile_image_url;?>" />
                            <?=$tweet->text; ?><br>
                        <?php }
                    }

                function mayan(){
                    $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                    $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                    $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                    $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                    $tweetsMayan = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=Tiago Mayan&result_type=recent&count=30');
                    foreach ($tweetsMayan->statuses as $key => $tweet) { ?>
                        <img src="<?=$tweet->user->profile_image_url;?>" />
                        <?=$tweet->text; ?><br>
                    <?php }
                }

                function vitorino(){
                    $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                    $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                    $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                    $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                    $tweetsVitorino = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=Vitorino Silva&result_type=recent&count=30');
                    foreach ($tweetsVitorino->statuses as $key => $tweet) { ?>
                        <img src="<?=$tweet->user->profile_image_url;?>" />
                        <?=$tweet->text; ?><br>
                    <?php }
                }

                function anagomes(){
                    $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                    $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                    $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                    $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                    $tweetsAnaGomes = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=Ana Gomes&result_type=recent&count=30');
                    foreach ($tweetsAnaGomes->statuses as $key => $tweet) { ?>
                        <img src="<?=$tweet->user->profile_image_url;?>" />
                        <?=$tweet->text; ?><br>
                    <?php }
                }

                function marisamatias(){
                    $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                    $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                    $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                    $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                    $tweetsMarisa = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=Marisa Matias&result_type=recent&count=30');
                    foreach ($tweetsMarisa->statuses as $key => $tweet) { ?>
                        <img src="<?=$tweet->user->profile_image_url;?>" />
                        <?=$tweet->text; ?><br>
                    <?php }
                }

                function joaoferreira(){
                    $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                    $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                    $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                    $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                    $tweetsJoaoFerreira = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=João Ferreira&result_type=recent&count=30');
                    foreach ($tweetsJoaoFerreira->statuses as $key => $tweet) { ?>
                        <img src="<?=$tweet->user->profile_image_url;?>" />
                        <?=$tweet->text; ?><br>
                    <?php }
                }

                function andreventura(){
                    $consumer_key = "nk1jhCuVj1bPzIiuZXrhfyJ8t";
                    $consumer_secret = "p4lxJm8qzyxuW4pr365E8u5po637U7QNY96CXVzU37jnImDzpa";
                    $access_token = "1919433620-ZQT32jBZHnjSblRFxOL8XEYB5B2uTM6HkNQcrQg";
                    $access_token_secret = "TuQEMfacCOFcdwn04f3nclGkeVn6PHQgyeQy2DrijpQuk";
                    $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
                    $tweetsAndreVentura = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=André Ventura&result_type=recent&count=30');
                    foreach ($tweetsAndreVentura->statuses as $key => $tweet) { ?>
                        <img src="<?=$tweet->user->profile_image_url;?>" />
                        <?=$tweet->text; ?><br>
                    <?php }
                }
                ?>

            </div>
        </body>
</html>
