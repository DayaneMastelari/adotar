<?php
$view = '';

foreach ($pets as $pet) {
    $view .= $this->Html->div('col-md-4',
        $this->Html->div('card mb-4 shadow-sm',
            $this->Html->image($pet['Pet']['foto'], array('class' => 'bd-placeholder-img card-img-top')) .
            $this->Html->div('card-body',
                $this->Html->para('card-text', 'Nome: ' . $pet['Usuario']['nome']) .
                $this->Html->para('card-text', 'Porte: ' . $pet['Pet']['porte']) .
                $this->Html->div('d-flex justify-content-between align-items-center',
                    $this->Html->link('Entrar em contato com o dono', '/pets/view/' . $pet['Pet']['id'], array('class' => 'btn btn-block btn-primary'))
                )
            )
        )
    );
}
echo $this->Flash->render('warning'); 
echo $this->Flash->render('success');
echo $this->Html->div('row', $view);
?>