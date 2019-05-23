<?php
$form = $this->Form->create('Pet', array(
    'enctype' => 'multipart/form-data'
));
$form .= $this->Form->hidden('Pet.id');
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
            'Mini - Até 5 quilos' => 'Mini - Até 5 quilos', 
            'Pequeno - De 5 até 15 quilos' => 'Pequeno - De 5 até 15 quilos', 
            'Médio - De 15 até 25' => 'Médio - De 15 até 25', 
            'Grande - De 25 até 45' => 'Grande - De 25 até 45',
            'Gigante - De 45 até 90' => 'Gigante - De 45 até 90'
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
    $this->Form->input('Pet.especie-pet', array(
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
    $this->Form->input('Pet.meses-anos', array(
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

$form .= $this->Form->submit('Salvar', array('type' => 'submit', 'class' => 'btn btn-success mr-2', 'div' => false, 'update' => '#content'));
$form .= $this->Js->link('Voltar', '/', array('class' => 'btn btn-secondary', 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->tag('h1', 'Cadastro de Pet');
echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $form
);

$this->Js->buffer('$(".form-error").addClass("is-invalid")');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}
?>