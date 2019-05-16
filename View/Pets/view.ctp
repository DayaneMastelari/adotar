<?php

$adotarButton = $this->Html->link('Adotar', '/', array('class' => 'btn btn-sm btn-outline-secondary'));
$imagem = $this->Html->image($this->request->data['Pet']['foto'], array('class' => 'bd-placeholder-img card-img-top'));

$view = $this->Html->div('row',
    $this->Html->div('col-md-4',
        $this->Html->div('card mb-4 shadow-sm', $imagem .
            $this->Html->div('card-body', 
                $this->Html->para('card-text', $this->request->data['Pet']['porte']) .
                $this->Html->div('d-flex justify-content-between align-items-center',
                    $this->Html->div('btn-group', $adotarButton)
                )
            )
        )
    )
);
echo $view;
?>