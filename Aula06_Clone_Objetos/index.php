<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clone Objetos</title>
</head>

<body>
    <?php 
        require "./Nota.php";
        $notas = new Nota();

        $notas->setNota("Roberto Borges", "Matemática", 5, 2);
        echo $notas->getNota();

        $notasDois = clone $notas;
        $notasDois->setDiciplina("História");
        $notasDois->setProva(6);
        $notasDois->setTrabalho(4);
        echo $notasDois->getNota();
    ?>
</body>

</html>