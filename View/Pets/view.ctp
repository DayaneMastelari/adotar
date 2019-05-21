<?php
$view = '';

$adotarButton = $this->Html->link('Adotar', '/', array('class' => 'btn btn-sm btn-primary'));

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
                        $adotarButton
                    )
                )
            )
        )
    );
}
echo $this->Html->div('row', $view);
?>





