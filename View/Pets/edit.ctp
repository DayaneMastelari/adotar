<?php
$form = $this->Form->create('Pet');
$form .= $this->Form->hidden('Pet.id');
$form .= $this->Html->div('form-row mt-4', 
    $this->Form->input('Pet.nome', array(
        'label' => array('text' => 'Nome'),
        'required' => false,
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'placeholder' => 'Nome',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Pet.sexo', array(
        'label' => array('text' => 'Sexo'),
        'type' => 'select',
        'options' => array(
            'Macho' => 'Macho', 
            'Fêmea' => 'Fêmea', 
        ),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    ))
);

$form .= $this->Html->div('form-row', 
    $this->Form->input('Pet.porte', array(
        'label' => array('text' => 'Porte'),
        'type' => 'select',
        'options' => array(
            'Mini' => 'Mini', 
            'Pequeno' => 'Pequeno', 
            'Médio' => 'Médio', 
            'Grande' => 'Grande',
            'Gigante' => 'Gigante'
        ),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    )) .
    $this->Form->input('Pet.castrado', array(
        'label' => array('text' => 'Castrado'),
        'type' => 'select',
        'options' => array(
            'Sim' => 'Sim', 
            'Não' => 'Não', 
        ),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    )) .
    $this->Form->input('Pet.vacinado', array(
        'label' => array('text' => 'Vacinado'),
        'type' => 'select',
        'options' => array(
            'Sim' => 'Sim', 
            'Não' => 'Não', 
        ),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    ))
);

$form .= $this->Html->div('form-row', 
    $this->Form->input('Pet.especie', array(
        'label' => array('text' => 'Espécie'),
        'type' => 'select',
        'options' => array(
            'Cachorro' => 'Cachorro', 
            'Gato' => 'Gato',
            'Outro' => 'Outro', 
        ),
        'div' => array('class' => 'form-group col-md-3'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    )) .
    $this->Form->input('Pet.idade', array(
        'required' => array('text' => 'Idade'),
        'div' => array('class' => 'form-group col-md-3'),
        'class' => 'form-control',
        'placeholder' => 'Idade',
        'error' => array('attributes' => array('class' => 'invalid-feedback')) 
    )) .
    $this->Form->input('Pet.meses-anos', array(
        'label' => array('text' => 'Idade em meses ou anos'),
        'type' => 'select',
        'options' => array(
            'Meses' => 'Meses',
            'Anos' => 'Anos', 
        ),
        'div' => array('class' => 'form-group col-md-3'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback')) 
    )) .
    $this->Form->input('Pet.perdido', array(
        'label' => array('text' => 'O animal está perdido'),
        'type' => 'select',
        'options' => array(
            'Sim' => 'Sim',
            'Não' => 'Não', 
        ),
        'div' => array('class' => 'form-group col-md-3'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback')) 
    ))
);

$form .= $this->Html->div('form-row', 
    $this->Form->input('Pet.caracteristicas', array(
        'label' => array('text' => 'Caracteristicas adicionais'),
        'type' => 'textarea',
        'div' => array('class' => 'form-group col-md-12'),
        'class' => 'form-control',
        'maxlength' => 300,
        'error' => array('attributes' => array('class' => 'invalid-feedback')) 
    ))
);

$form .= $this->Form->submit('Salvar', array('type' => 'submit', 'class' => 'btn btn-success mr-2', 'div' => false, 'update' => '#content'));
$form .= $this->Js->link('Voltar', '/', array('class' => 'btn btn-secondary', 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->tag('section', 
        $this->Html->div('container',
            $this->Html->tag('h1', 'Alterar Pet', array('class' => 'jumbotron-heading'))
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