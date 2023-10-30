<?php

$password ='';

$text=[
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'K',
        'L',
        'M',
        'N',
        'O',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        'Z',
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z',
        '!',
        '?',
        '~',
        '@',
        '#',
        '-',
        '_',
        '+',
        '<',
        '>',
        '[',
        ']',
        '{',
        '}'
];

if(isset( $_POST['length'])){
    for($i = 0; $i < $_POST['length']; $i++){
    $random= rand(0, 65);
    $password .= $text[$random];
    };
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Password</title>
</head>
<body>
    <div class="container w-75 my-5">
        <h1 class="text-center">Strong Password Generetor</h1>
        <h3 class="text-center text-light">Genera una password sicura</h3>
        <div class="text bg-info p-3 mb-4">
            <p>
                Sceglliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri
            </p>
        </div>
        <div class="form bg-light p-3">
            <form action="index.php" method="post">
                <div class="d-flex justify-content-between">
                    <label for="length">Lunghezza password:</label>
                    <input class="form-control w-25 " type="number" name="length" id="length">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
            <div class="message">
                <p class="text-center p-2"><?php echo $password ?></p>
            </div>
        </div>
    </div>
</body>
</html>