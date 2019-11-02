<?php

class Usuario {
    public $Nome;
    public $Email;

    function getDadosUser($Nome, $Email) {
        return "O usuário $Nome tem o email $Email.";
    }
}