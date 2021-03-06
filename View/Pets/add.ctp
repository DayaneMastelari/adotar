<?php
$form = $this->Form->create('Pet', array(
    'enctype' => 'multipart/form-data'
));
$form .= $this->Form->hidden('Pet.usuario_id');
$form .= $this->Html->div('form-row mt-4', 
    $this->Form->input('Pet.foto', array(
        //'between' => '<br />',
        'type' => 'file',
        'placeholder' => 'Escolha uma foto',
        'label' => false,
        'required' => false,
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) . '<input type="hidden" name="MAX_FILE_SIZE" value="15000">' .
    $this->Form->input('Pet.nome', array(
        'required' => false,
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'placeholder' => 'Nome',
        'label' => false,
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) .
    $this->Form->input('Pet.sexo', array(
        'label' => false,
        'empty' => 'Selecione o sexo',
        'type' => 'select',
        'options' => array(
            'Macho' => 'Macho', 
            'Fêmea' => 'Fêmea', 
        ),
        'div' => array('class' => 'form-group col-md-4'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    ))
);

$form .= $this->Html->div('form-row', 
    $this->Form->input('Pet.porte', array(
        'label' => false,
        'empty' => 'Selecione o porte',
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
        'label' => false,
        'empty' => 'O Pet é castrado?',
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
        'label' => false,
        'empty' => 'O Pet é vacinado?',
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
        'label' => false,
        'empty' => 'Espécie',
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
        'required' => false,
        'div' => array('class' => 'form-group col-md-3'),
        'class' => 'form-control',
        'placeholder' => 'Idade',
        'label' => false,
        'error' => array('attributes' => array('class' => 'invalid-feedback')) 
    )) .
    $this->Form->input('Pet.meses_anos', array(
        'label' => false,
        'empty' => 'Idade em messes ou anos',
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
        'label' => false,
        'empty' => 'O animal está perdido?',
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
        'label' => false,
        'placeholder' => 'Caracteristicas adicionais',
        'type' => 'textarea',
        'div' => array('class' => 'form-group col-md-12'),
        'class' => 'form-control',
        'maxlength' => 300,
        'error' => array('attributes' => array('class' => 'invalid-feedback')) 
    ))
);

$form .= $this->Form->submit('Gravar', array('type' => 'submit', 'class' => 'btn btn-success mr-2', 'div' => false, 'update' => '#content'));
$form .= $this->Js->link('Cancelar', '/', array('class' => 'btn btn-secondary', 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->tag('section', 
        $this->Html->div('container',
            $this->Html->tag('h1', 'Cadastrar Animal', array('class' => 'jumbotron-heading'))
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