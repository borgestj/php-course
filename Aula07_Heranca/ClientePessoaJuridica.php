<?php 

class ClientePessoaJuridica extends Cliente{

    public $Cnpj;
    public $NomeFantasia;

    function setCnpj($Cnpj) {
        $this->Cnpj = $Cnpj;
    }

    function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    function verEndereco() {
        return "<p><br>Endereço da Pessoa Jurídica.<br> Endereço: {$this->Endereco}<br>Bairro: {$this->Bairro}<br>Nome: {$this->NomeFantasia}<br>CNPJ: {$this->Cnpj}<hr></p>"; 
    }
}