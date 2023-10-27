<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Password</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Strong Password Generetor</h1>
        <h3 class="text-center">Genera una password sicura</h3>
        <div class="text">
            <p>
                Sceglliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri
            </p>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <div>
                    <label for="length">Lunghezza password:</label>
                    <input type="number" name="length" id="length">
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>