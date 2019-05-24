<?php
$form = $this->Form->create('Usuario');
$form .= $this->Form->hidden('Usuario.id');
$form .= $this->Html->div('form-row mt-4',
    $this->Form->input('Usuario.nome', array(
        'required' => false,
        'label' => array('text' => 'Nome'),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) . 
    $this->Form->input('Usuario.cpf', array(
        'required' => false,
        'label' => array('text' => 'CPF - CNPJ'),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) 
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.telefone', array(
        'required' => false,
        'label' => array('text' => 'Telefone'),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
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
        'label' => array('text' => 'Estado'),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Usuario.cep', array(
        'required' => false,
        'label' => array('text' => 'Cep'),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))

);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.cidade', array(
        'required' => false,
        'label' => array('text' => 'Cidade'),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Usuario.bairro', array(
        'required' => false,
        'label' => array('text' => 'Bairro'),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Usuario.endereco', array(
        'required' => false,
        'label' => array('text' => 'Endereço'),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))

);

$form .= $this->Html->div('form-row',
    $this->Form->input('Usuario.email', array(
        'required' => false,
        'label' => array('text' => 'E-mail'),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Usuario.login', array(
        'required' => false,
        'label' => array('text' => 'Login'),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Js->submit('Gravar', array('type' => 'submit', 'div' => false, 'class' => 'btn btn-success mr-2', 'update' => '#content'));
$form .= $this->Js->link('Cancela', '/', array('class' => 'btn btn-secondary', 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->tag('section', 
        $this->Html->div('container',
            $this->Html->tag('h1', 'Alterar Cadastro', array('class' => 'jumbotron-heading'))
        ), 
        array('class' => 'jumbotron text-center')
    )
);
echo $form;

$this->Js->buffer('$(".form-error").addClass("is-invalid")');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}

?>