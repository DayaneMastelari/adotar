<?php
$form = $this->Form->create('Ongs');
$form .= $this->Form->hidden('Ong.id');
$form .= $this->Html->div('form-row mt-4',
    $this->Form->input('Ong.razao_social', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Razao Social',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) . 
    $this->Form->input('Ong.fantasia', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Nome Fantasia',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Ong.cnpj', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'CNPJ',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Ong.telefone', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Telefone',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Html->div('form-row', 
    $this->Form->input('Ong.estado', array(
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
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Ong.cep', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'CEP',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Html->div('form-row',
    $this->Form->input('Ong.cidade', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Cidade',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Ong.bairro', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Bairro',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Form->input('Ong.endereco', array(
    'required' => false,
    'label' => false,
    'placeholder' => 'Endereço',
    'div' => array('class' => 'form-group'),
    'class' => 'form-control',
    'error' => array('attributes' => array('class' => 'invalid-feedback'))
));

$form .= $this->Html->div('form-row',
    $this->Form->input('Ong.email', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Email',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Ong.senha', array(
        'required' => false,
        'label' => false,
        'placeholder' => 'Senha',
        'type' => 'password',
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Js->submit('Gravar', array('type' => 'submit', 'div' => false, 'class' => 'btn btn-success mr-2', 'update' => '#content'));
$form .= $this->Js->link('Cancela', '/ongs', array('class' => 'btn btn-secondary', 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Cadastro');
echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $form
);

$this->Js->buffer('$(".form-error").addClass("is-invalid")');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}
?>