<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <p>
    <?php
    $paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste consectetur fugit reprehenderit doloremque saepe iure perferendis nesciunt ab vel, quos facilis ex atque recusandae et, reiciendis quod, ipsa nam fugiat!";
    echo 'Il paragrafo è ' . $paragrafo;
    ?>
    </p>
    <p>
        <?php
         echo "La lunghezza del paragrafo è " .  strlen($paragrafo);
        ?>
    </p>

    <p>
        <?php
           $parolaCensurata = $_GET['name'];
           $nuovoParagrafo = str_replace($parolaCensurata, '***', $paragrafo);
        ?>
    </p>

    <h3>Il nuovo paragrafo è:</h3>
    <p>
        <?php
        echo $nuovoParagrafo;
        ?>
    </p>
        <h3>La lunghezza del nuovo paragrafo è:</h3>
 
        <p>
        <?php
        echo strlen($nuovoParagrafo);
        ?>
    </p>
</body>
</html>