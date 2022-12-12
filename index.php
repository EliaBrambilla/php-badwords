<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <?php
    $textFile = 'Due cose sono infinite: l’universo e la stupidità umana, ma non sono sicuro dell’universo.  ~ Albert Einstein'
        ?>
    <?php
    $replaceV = '***'
        ?>

    <h2>
        <?php echo $textFile ?>
    </h2>
    <p> lunghezza testo =
        <?php echo (strlen($textFile)) ?> caratteri
    </p>

    <form action="" method="GET">
        <label for="replace"></label>
        <input placeholder="filtra una parola" type="text" name="replace">

        <button type="submit">Invio</button>
    </form>

    <p>
        <?php echo str_replace($_GET['replace'], $replaceV, $textFile) ?>
    </p>
    <p> Lunghezza Nuovo Testo
        <?php echo (strlen(str_replace($_GET['replace'], $replaceV, $textFile))) ?> caratteri
    </p>
</body>

</html>