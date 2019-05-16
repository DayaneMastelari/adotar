<?php
$form = $this->Form->create('Pet', array(
    'enctype' => 'multipart/form-data'
));
$form .= $this->Html->div('form-row mt-4', 
    $this->Form->input('Pet.foto', array(
        //'between' => '<br />',
        'type' => 'file',
        'placeholder' => 'Escolha uma foto',
        'label' => false,
        'required' => false,
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    )) . '<input type="hidden" name="MAX_FILE_SIZE" value="15000">' .
    $this->Form->input('Pet.nome', array(
        'required' => false,
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'placeholder' => 'Nome',
        'label' => false,
        'error' => array('attributes' => array('class' => 'invalid-feedback'))
    ))
);

$form .= $this->Html->div('form-row mt-4', 
    $this->Form->input('Pet.sexo', array(
        'label' => false,
        'empty' => 'Selecione o sexo',
        'type' => 'select',
        'options' => array(
            'M' => 'Macho', 
            'F' => 'Fêmea', 
        ),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    )) .
    $this->Form->input('Pet.porte', array(
        'label' => false,
        'empty' => 'Selecione o porte',
        'type' => 'select',
        'options' => array(
            'Mini' => 'Mini - Até 5 quilos', 
            'Pequeno' => 'Pequeno - De 5 até 15 quilos', 
            'Médio' => 'Médio - De 15 até 25', 
            'Grande' => 'Grande - De 25 até 45',
            'Gigante' => 'Gigante - De 45 até 90'
        ),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    ))
);

$form .= $this->Html->div('form-row mt-4', 
    $this->Form->input('Pet.castrado', array(
        'label' => false,
        'empty' => 'O Pet é castrado?',
        'type' => 'select',
        'options' => array(
            'S' => 'Sim', 
            'N' => 'Não', 
        ),
        'div' => array('class' => 'form-group col-md-6'),
        'class' => 'form-control',
        'error' => array('attributes' => array('class' => 'invalid-feedback'))  
    )) .
    $this->Form->input('Pet.vacinado', array(
        'label' => false,
        'empty' => 'O Pet é vacinado?',
        'type' => 'select',
        'options' => array(
            'S' => 'Sim', 
            'N' => 'Não', 
        ),
        'div' => array('class' => 'form-group col-md-6'),
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