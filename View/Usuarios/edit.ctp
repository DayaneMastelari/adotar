<?php

$form = $this->Form->create('Usuario');
$form .= $this->Form->hidden('Usuario.id');
$form .= $this->Form->input('Usuario.nome');
$form .= $this->Form->input('Usuario.celular');
$form .= $this->Form->input('Usuario.cpf', array(
    'label' => 'CPF'
));
$form .= $this->Form->input('Usuario.nascimento', array(
    'type' => 'text',
    'dateFormat' => 'dmY',
));
$form .= $this->Form->input('Usuario.estado', array(
    'type' => 'select',
    'options' => array(
        'Acre' => 'Acre',
        'Alagoas' => 'Alagoas',
        'Amapá' => 'Amapá',
        'Amazonas' => 'Amazonas',
        'Bahia' => 'Bahia',
        'Ceará' => 'Ceará',
        'Distrito Federal' => 'Distrito Federal',
        'Espírito Santo' => 'Espírito Santo',
        'Goiás' => 'Goiás',
        'Maranhão' => 'Maranhão',
        'Mato Grosso' => 'Mato Grosso',
        'Mato Grosso do Sul' => 'Mato Grosso do Sul',
        'Minas Gerais' => 'Minas Gerais',
        'Pará' => 'Pará',
        'Paraíba' => 'Paraíba',
        'Paraná' => 'Paraná',
        'Pernambuco' => 'Pernambuco',
        'Piauí' => 'Piauí',
        'Rio de Janeiro' => 'Rio de Janeiro',
        'Rio Grande do Nort' => 'Rio Grande do Norte',
        'Rio Grande do Sul' => 'Rio Grande do Sul',
        'Rondônia' => 'Rondônia',
        'Roraima' => 'Roraima',
        'Santa Catarina' => 'Santa Catarina',
        'São Paulo' => 'São Paulo',
        'Sergipe' => 'Sergipe',
        'Tocantins' => 'Tocantins' 
    )
));
$form .= $this->Form->input('Usuario.cep', array(
    'label' => 'CEP'
));
$form .= $this->Form->input('Usuario.cidade');
$form .= $this->Form->input('Usuario.bairro');
$form .= $this->Form->input('Usuario.endereco', array(
    'label' => 'Endereço'
));
$form .= $this->Form->input('Usuario.numero');
$form .= $this->Form->input('Usuario.email');
$form .= $this->Form->input('Usuario.senha');
$form .= $this->Form->end('Gravar');

echo $this->Html->tag('h1', 'Aterar Usuário');
echo $form;
echo $this->Html->link('Voltar', '/usuarios')

?>