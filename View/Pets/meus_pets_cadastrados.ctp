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
                    $this->Html->div('btn-group',
                        $this->Html->link('Adotado', '/pets/adotado' . $pet['Pet']['id'], array('class' => 'btn btn-outline-primary')) .
                        $this->Html->link('Alterar', '/pets/edit/' . $pet['Pet']['id'], array('class' => 'btn btn-outline-secondary')) .
                        $this->Html->link('Excluir', '/pets/delete/' . $pet['Pet']['id'], array('class' => 'btn btn-outline-danger'))

                    )
                    
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
            $this->Html->tag('h1', 'Meus animais cadastrados', array('class' => 'jumbotron-heading'))
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