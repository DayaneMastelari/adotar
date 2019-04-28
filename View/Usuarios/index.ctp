<?php
$novoButton = $this->Html->link('Novo Usuario', '/usuarios/add');
$detalhe = array();
foreach($usuarios as $usuario){
    $editLink = $this->Html->link('Alterar', '/usuarios/edit/' . $usuario['Usuario']['id']);
    $deleteLink = $this->html->link('Excluir', '/usuarios/delete/' . $usuario['Usuario']['id']);
    $detalhe[] = array(
        $usuario['Usuario']['nome'],
        date('d/m/Y', strtotime($usuario['Usuario']['nascimento'])),
        $usuario['Usuario']['email'],
        $editLink . ' ' . $deleteLink
    );
}

$titulos = array('Nome', 'Nascimento', 'Email', ' ');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);

echo $this->Html->tag('h1', 'Usuarios');
echo $novoButton;
echo $this->Html->tag('table', $header . $body);
?>