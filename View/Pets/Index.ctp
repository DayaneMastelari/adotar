<?php
if (AuthComponent::user('id')) {
    $cabecalho = $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
        $this->Html->tag('section', 
            $this->Html->div('container',
            $this->Html->tag('h1', 'Encontre seu novo amigo', array('class' => 'jumbotron-heading')) .
            $this->Html->para('lead text-muted', 'Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!')
            ), 
            array('class' => 'jumbotron text-center')
        )
    );    
} else {
    $cabecalho = $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
        $this->Html->tag('section', 
            $this->Html->div('container',
                $this->Html->tag('h1', 'Encontre seu novo amigo', array('class' => 'jumbotron-heading')) .
                $this->Html->para('lead text-muted', 'Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!').
                $this->Html->para('',
                    $this->Js->link('Cadastre-se', '/usuarios/add', array('class' => 'btn btn-primary btn-lg mt-4'))
                )
            ), 
            array('class' => 'jumbotron text-center')
        )
    );
}

$filtro = $this->Form->create('Pets', array('class' => 'form-inline'));
$filtro .= $this->Form->input('Pet.cidade', array(
    'required' => false,
    'label' => array('text' => 'Cidade', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'placeholder' => 'cidade'
));
$filtro .= $this->Js->submit('Filtrar', array(
    'type' => 'submit', 
    'class' => 'btn btn-primary mb-2', 
    'update' => '#content'
));
$filtro .= $this->Form->end();
$view = '';
foreach ($pets as $pet) {
    $view .= $this->Html->div('col-md-4',
        $this->Html->div('card mb-4 shadow-sm',
            $this->Html->image($pet['Pet']['foto'], array('class' => 'bd-placeholder-img card-img-top')) .
            $this->Html->div('card-body',
                $this->Html->para('card-text', 'Nome: ' . $pet['Pet']['nome']) .
                $this->Html->para('card-text', 'Porte: ' . $pet['Pet']['porte']) .
                $this->Html->para('card-text', 'Castrado: ' . $pet['Pet']['castrado']) .
                $this->Html->div('d-flex justify-content-between align-items-center',
                    $this->Js->link('Mais informações', '/pets/view/' . $pet['Pet']['id'], array('class' => 'btn btn-block btn-primary', 'update' => '#content'))
                )
            )
        )
    );
}
echo $this->Flash->render('warning'); 
echo $this->Flash->render('success');

echo $cabecalho;
//echo $filtro;
echo $this->Html->div('row', $view);

$this->Js->buffer('$(".form-error").addClass("is-invalid")');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}

?>

