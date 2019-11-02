<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php 
        require './Usuario.php';
        $Usuario = new Usuario();
        echo $Usuario->getDadosUser("Roberto Borges", "borges.tj@gmail.com");
    ?>
</body>
</html>