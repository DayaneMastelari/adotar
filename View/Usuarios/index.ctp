<?php
$novoButton = $this->Html->link('Novo Usuario', '/usuarios/add');
$detalhe = array();
foreach($usuarios as $usuario){
    $detalhe[] = array(
        $usuario['Usuario']['nome'],
        $usuario['Usuario']['nascimento'],
        $usuario['Usuario']['email'],
    );
}

$titulos = array('Nome', 'Nascimento', 'Email', ' ');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);

echo $this->Html->tag('h1', 'Usuarios');
echo $novoButton;
echo $this->Html->tag('table', $header . $body);
?>