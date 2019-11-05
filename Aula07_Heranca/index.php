<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herança</title>
</head>
<body>
    <?php
        require "./Cliente.php";
        $cliente = new Cliente();
        $cliente->setEndereco("Av. Republicas Argentina");
        $cliente->setBairro("Novo Mundo");
        echo $cliente->verEndereco();
    ?>
</body>
</html>