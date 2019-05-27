<?php
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
                    $this->Html->link('Mais informações', '/pets/view/' . $pet['Pet']['id'], array('class' => 'btn btn-block btn-primary'))
                ) 
            )
        )
    );
}
echo $this->Flash->render('warning'); 
echo $this->Flash->render('success');

echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->tag('section', 
        $this->Html->div('container',
            $this->Html->tag('h1', 'Animais da ' . $this->request->data['Usuario']['nome'], array('class' => 'jumbotron-heading')) .
            $this->Html->para('lead text-muted', 'Endereço: ' . $this->request->data['Usuario']['endereco']) .
            $this->Html->para('lead text-muted', 'Email: ' . $this->request->data['Usuario']['email']) .
            $this->Html->para('lead text-muted', 'Telefone: ' . $this->request->data['Usuario']['telefone'])            
        ), 
        array('class' => 'jumbotron text-center')
    )
);
echo $this->Html->div('row', $view);

$this->Js->buffer('$(".form-error").addClass("is-invalid")');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}

?>