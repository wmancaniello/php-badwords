<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Form per invio dei dati  -->
    <form action="operation.php" method="get">
        <div class="d-flex flex-column gap-2">
            <!-- Testo da verificare -->
            <label for="testo">Scrivi il testo:</label>
            <textarea name="testo" id="testo" rows="3" class="col-4"></textarea>
            <!-- Parola da censurare nell'output -->
            <label for="censored_word">Censura la parola:</label>
            <input type="text" id="censored_word" name="censored_word" class="col-4">
            <!-- BOTTONE SUBMIT -->
            <input type="submit" class="col-2" value="Invia al Server">
        </div>
    </form>

</body>

</html>