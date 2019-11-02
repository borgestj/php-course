<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 001</title>
</head>

<body>
    <h2>Teste</h2>
    <?php
    if (phpversion() >= 7.0) :
        echo phpversion() . " - Hello World";
    else :
        echo phpversion() . " - Necessário atualizar a versão";
    endif;

    echo "<hr>";
    echo ini_get('date.timezone') . "<br>";
    echo date('d/m/Y H:i:s') . "<br>";
    ?>
</body>

</html>