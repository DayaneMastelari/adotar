<?php
$form = $this->Form->create('Usuario');
$form .= $this->Form->hidden('Usuario.id');
$form .= $this->Html->div('form-row mt-4',
    $this->Form->input('Usuario.nome', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Nome',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
    )) . 
    $this->Form->input('Usuario.celular', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Celular',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    ))
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.cpf', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'CPF',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    )) . 
    $this->Form->input('Usuario.nascimento', array(
        'type' => 'text',
        'required' => false,
        'label' => false,
        'placeholder' => 'Nascimento',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    ))
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.estado', array(
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
        'empty' => 'Estado',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    )) . 
    $this->Form->input('Usuario.cep', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'CEP',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    ))
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.cidade', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Cidade',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    )) . 
    $this->Form->input('Usuario.bairro', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Bairro',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    ))
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.endereco', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Endereço',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    )) . 
    $this->Form->input('Usuario.numero', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Número',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    ))
);

$form .= $this->Html->div('form-row mb-4',
    $this->Form->input('Usuario.email', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Email',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    )) . 
    $this->Form->input('Usuario.senha', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Senha',
        'type' => 'password',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control'
    ))
);

$form .= $this->Form->button('Gravar', array('type' => 'submit', 'class' => 'btn btn-success mr-2'));
$form .= $this->Html->link('Voltar', '/usuarios', array('class' => 'btn btn-secondary'));
$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Novo Usuário');
echo $form;

?>