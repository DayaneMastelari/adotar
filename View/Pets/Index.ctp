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

if (AuthComponent::user('id')) {
    echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
        $this->Html->tag('section', 
            $this->Html->div('container',
            $this->Html->tag('h1', 'Encontre seu novo amigo', array('class' => 'jumbotron-heading')) .
            $this->Html->para('lead text-muted', 'Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!')
            ), 
            array('class' => 'jumbotron text-center')
        )
    );    
} else {
    echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
        $this->Html->tag('section', 
            $this->Html->div('container',
                $this->Html->tag('h1', 'Encontre seu novo amigo', array('class' => 'jumbotron-heading')) .
                $this->Html->para('lead text-muted', 'Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!').
                $this->Html->para('',
                    $this->Html->link('Cadastre-se', '/usuarios/add', array('class' => 'btn btn-primary btn-lg mt-4'))
                )
            ), 
            array('class' => 'jumbotron text-center')
        )
    );
}
echo $this->Html->div('row', $view);
?>

<p class="lead text-muted">