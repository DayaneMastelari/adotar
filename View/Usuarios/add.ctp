<?php

$form = $this->Form->create('Usuario');
$form .= $this->Form->input('Usuario.nome', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Nome'
));
$form .= $this->Form->input('Usuario.celular', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Celular'
));
$form .= $this->Form->input('Usuario.cpf', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'CPF'
));
$form .= $this->Form->input('Usuario.nascimento', array(
    'type' => 'text',
    'required' => false,
    'label' => false,
    'placeholder' => 'Nascimento'
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
        'SSão PauloP' => 'São Paulo',
        'Sergipe' => 'Sergipe',
        'Tocantins' => 'Tocantins' 
    ),
    'required' => false,
    'label' => false,
    'empty' => 'estado'
));
$form .= $this->Form->input('Usuario.cep', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'CEP'
));
$form .= $this->Form->input('Usuario.cidade', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Cidade'
));
$form .= $this->Form->input('Usuario.bairro', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Bairro'
));
$form .= $this->Form->input('Usuario.endereco', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Endereço'
));
$form .= $this->Form->input('Usuario.numero', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Número'
));
$form .= $this->Form->input('Usuario.email', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Email'
));
$form .= $this->Form->input('Usuario.senha', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Senha',
    'type' => 'password'
));
$form .= $this->Form->end('Gravar');

echo $this->Html->tag('h1', 'Novo Usuário');
echo $form;
echo $this->Html->link('Voltar', '/usuarios')

?>