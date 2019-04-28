<?php

$form = $this->Form->create('Usuario');
$form .= $this->Form->input('Usuario.nome');
$form .= $this->Form->input('Usuario.celular');
$form .= $this->Form->input('Usuario.cpf', array(
    'text' => 'CPF'
));
$form .= $this->Form->input('Usuario.nascimento', array(
    'type' => 'text'
));
$form .= $this->Form->input('usuario.estado', array(
    'type' => 'select',
    'options' => array(
        'AC' => 'Acre',
        'AL' => 'Alagoas',
        'AP' => 'Amapá',
        'AM' => 'Amazonas',
        'BA' => 'Bahia',
        'CE' => 'Ceará',
        'DF' => 'Distrito Federal',
        'ES' => 'Espírito Santo',
        'GO' => 'Goiás',
        'MA' => 'Maranhão',
        'MT' => 'Mato Grosso',
        'MS' => 'Mato Grosso do Sul',
        'MG' => 'Minas Gerais',
        'PA' => 'Pará',
        'PB' => 'Paraíba',
        'PR' => 'Paraná',
        'PE' => 'Pernambuco',
        'PI' => 'Piauí',
        'RJ' => 'Rio de Janeiro',
        'RN' => 'Rio Grande do Norte',
        'RS' => 'Rio Grande do Sul',
        'RO' => 'Rondônia',
        'RR' => 'Roraima',
        'SC' => 'Santa Catarina',
        'SP' => 'São Paulo',
        'SE' => 'Sergipe',
        'TO' => 'Tocantins' 
    )
));
$form .= $this->Form->input('Usuario.cep', array(
    'text' => 'CEP'
));
$form .= $this->Form->input('Usuario.cidade');
$form .= $this->Form->input('Usuario.bairro');
$form .= $this->Form->input('Usuario.endereco', array(
    'text' => 'Endereço'
));
$form .= $this->Form->input('Usuario.numero');
$form .= $this->Form->input('Usuario.email');
$form .= $this->Form->input('Usuario.senha');
$form .= $this->Form->end('Gravar');

echo $this->Html->tag('h1', 'Novo Usuário');
echo $form;
echo $this->Html->link('Voltar', '/usuarios')

?>