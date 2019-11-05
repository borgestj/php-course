<?php 

class Nota {
    public $Aluno;
    public $Diciplina;
    public $Prova;
    public $Trabalho;

    function setDiciplina($Diciplina) {
        $this->Diciplina = $Diciplina;
    }

    function setProva($Prova) {
        $this->Prova = $Prova;
    }

    function setTrabalho($Trabalho) {
        $this->Trabalho = $Trabalho;
    }

    function setNota($Aluno, $Diciplina, $Prova, $Trabalho) {
        $this->Aluno = $Aluno;
        $this->Diciplina = $Diciplina;
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }

    function getNota() {
        return "<br>Nome do Aluno: {$this->Aluno}<br> Diciplina: {$this->Diciplina}<br> Nota: " . ($this->Prova + $this->Trabalho) . "<br><hr>";
    }
}

