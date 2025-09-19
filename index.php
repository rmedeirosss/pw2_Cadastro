<?php
require 'Classes/Aluno.class.php';

$retorno = $aluno = new Aluno();

if ($retorno) {
    echo '<h1>Conectado ao banco de dados</h1>';
    exit;
} else {
    echo '<h1>Banco indisponível, tente novamente mais tarde</h1>';
}
?>