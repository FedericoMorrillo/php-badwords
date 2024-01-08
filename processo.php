<!--PHP-->

<?php
// Recuperiamo i dati dal form

$paragraph = $_POST["paragraph"];
$badWord = $_POST["badWord"];

// Recuperiamo i dati dal form

//censura della parola 

$paragraphCensured = str_replace($badWord, "***", $paragraph );

//censura della parola

//calcolo lunghezza del testo

$textLenght = strlen($paragraph);

$censuredLenght = strlen($paragraphCensured);

//calcolo lunghezza del testo
?>
<!--PHP-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>bad Word elaborazione</title>
</head>
<body>
<div class="container radius">
    <!--Titolo-->
    <h2 class="pad-10">il testo originale:</h2>
    <!--/Titolo-->

    <!--paragrafo originale-->

    <div class="pad-10 back-white radius">
        <?php 
            echo $paragraph;
        ?>
        <br>
    </div>
    <div class="pad-10">
      <?php
        echo "la lunghezza del testo è di ". $textLenght ."caratteri";
    ?>  
    </div>
    

    <!--paragrafo originale-->

    <!--Titolo-->
    <h2 class="pad-10">il testo censurato:</h2>
    <!--/Titolo-->

    <!--Paragrafo censurato-->

    <div class="pad-10 back-white radius">
        <?php 
            echo $paragraphCensured;
        ?>
    </div>
    <div class="pad-10">
     <?php 
        echo "la lunghezza del testo è di ". $censuredLenght . "caratteri";
    ?>   
    </div>
    

    <!--paragrafo censurato-->
</div>
</body>
</html>