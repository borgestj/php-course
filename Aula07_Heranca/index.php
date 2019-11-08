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
        require "./ClientePessoaFisica.php";
        require "./ClientePessoaJuridica.php";
        
        $cliente = new Cliente();
        $cliente->setEndereco("Av. Republicas Argentina");
        $cliente->setBairro("Novo Mundo");
        echo $cliente->verEndereco();

        $clientePf = new ClientePessoaFisica();
        $clientePf->setNome("Roberto Borges");
        $clientePf->setCpf("049.235.169-41");
        $clientePf->setEndereco("Av. Republicas Argentina");
        $clientePf->setBairro("Novo Mundo");
        echo $clientePf->verEndereco();

        $clientePj = new ClientePessoaJuridica();
        $clientePj->setNomeFantasia("Ihnove");
        $clientePj->setCnpj("00.000.000/0000-00");
        $clientePj->setEndereco("Av. Republicas Argentina");
        $clientePj->setBairro("Novo Mundo");
        echo $clientePj->verEndereco();

    ?>
</body>
</html>