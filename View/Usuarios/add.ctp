<?php

$form = $this->Form->create('Usuario');
$form .= $this->Form->input('Usuario.nome');
$form .= $this->Form->input('Usuario.celular');
$form .= $this->Form->input('Usuario.cpf');
$form .= $this->Form->input('Usuario.nascimento');
$form .= $this->Form->input('usuario.estado');
$form .= $this->Form->input('Usuario.cep');
$form .= $this->Form->input('Usuario.cidade');
$form .= $this->Form->input('Usuario.bairro');
$form .= $this->Form->input('Usuario.enderoco');
$form .= $this->Form->input('Usuario.numero');
$form .= $this->Form->input('Usuario.email');
$form .= $this->Form->input('Usuario.senha');

echo $this->Html->tag('h1', 'Novo Usuário');
echo $form;
echo $this->Html->link('Voltar', '/usuarios')

?>