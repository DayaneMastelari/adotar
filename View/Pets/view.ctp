<?php
$view = '';

$adotarButton = $this->Html->link('Adotar', '/', array('class' => 'btn btn-sm btn-primary'));

$view .= $this->Html->div('col-md-4',
    $this->Html->div('card mb-4 shadow-sm',
        $this->Html->image($pet['Pet']['foto'], array('class' => 'bd-placeholder-img card-img-top')) .
        $this->Html->div('card-body',
            $this->Html->para('card-text', 'Nome: ' . $pet['Pet']['nome']) .
            $this->Html->para('card-text', 'Porte: ' . $pet['Pet']['porte']) .
            $this->Html->para('card-text', 'Castrado: ' . $pet['Pet']['castrado']) .
            $this->Html->div('d-flex justify-content-between align-items-center',
                $this->Html->div('btn-group',
                    $adotarButton
                )
            )
        )
    )
);

echo $this->Flash->render('warning'); 
echo $this->Flash->render('success');

echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->tag('section', 
        $this->Html->div('container',
            $this->Html->tag('h1', 'Me adote', array('class' => 'jumbotron-heading')).
            $this->Html->para('lead text-muted', 'Estou super ansioso para encontrar uma familinha pra me amar o tempo todo!')
        ), 
        array('class' => 'jumbotron text-center')
    )
);
echo $this->Html->div('row', $view);
?>





