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
