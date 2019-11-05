<?php 

class Cliente {
    public $Endereco;
    public $Bairro;

    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setBairro($Bairro) {
        $this->Bairro = $Bairro;
    }

    function verEndereco() {
        return "<p><br>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairro}<hr></p>";
    }
}