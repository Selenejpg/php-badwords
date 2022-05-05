<?php

$paragrafo =  'Era quasi mezzanotte, e Harry era steso sul letto a pancia in giù, le coperte tirate sulla testa come una tenda, una torcia in mano e un grosso libro
rilegato in pelle "Storia della magia, di Adalbert Incant" aperto e appoggiato al cuscino.';

$parola = isset($_GET["parola"]) ? $_GET["parola"] : '';

$paragrafoCensurato = str_replace($parola,'***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h4>Piccolo paragrafo</h4>
        <p><?php echo $paragrafo; ?></p>
        <h4>Lunghezza paragrafo</h4>
        <p>La lunghezza del paragrafo è di <?php echo strlen($paragrafo)?> caratteri. </p>
        <h4>Inserisci la parola da censurare</h4>
        
        <form method="GET">
            <input type="text" name="parola">
            <button>Vai</button>
        </form>

        <h4>Testo censurato</h4>
        <p><?php echo $paragrafoCensurato?></p>
        <p>La lunghezza del paragrafo è di <?php echo strlen($paragrafoCensurato)?> caratteri.</p>
    </div>
</body>
</html>