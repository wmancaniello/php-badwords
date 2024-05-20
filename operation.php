<?php

// Tramite metodo GET, ottengo i dati richiesti nel form:
// Testo
$testo = $_GET['testo'];
// Parola censurata
$censored_word = $_GET['censored_word'];

// Calcolo della lunghezza del testo senza censure:
$length = strlen($testo);

// Censura della parola nel testo originale
$censored = str_replace($censored_word, '***', $testo);
// Calcolo della lunghezza del testp censurato
$length_censored = strlen($censored);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTPUT</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Richiesta Elaborata</h1>

        <!-- Originale -->
        <div>
            <h3>Paragrafo originale:</h3>
            <p> <?php echo $testo; ?> </p>
            <p>Lunghezza: <?php echo $length; ?> caratteri </p>
        </div>
        <!-- censurato -->
        <div>
            <h3>Paragrafo censurato:</h3>
            <p><?php echo htmlspecialchars($censored); ?></p>
            <p>Lunghezza: <?php echo $length_censored; ?> caratteri</p>
            <h5>Parola censurata:</h5>
            <p class="text-danger"><?php echo $censored_word ; ?></p>
        </div>
    </div>
</body>

</html>

<style>

</style>