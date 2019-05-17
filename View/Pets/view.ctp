<?php
$view = '';
$tumbnail = '';
$linha = '';
$adotarButton = $this->Html->link('Adotar', '/', array('class' => 'btn btn-sm btn-outline-secondary'));

$quantidadePorLinha = 0;

foreach ($pets as $pet) {
    $tumbnail .=  $this->Html->div('imagem',
        $this->Html->image($pet['Pet']['foto'], array('class' => 'img-thumbnail'))
    );
    
}

/*$this->Html->div('card-body', 
                    $this->Html->para('card-text', $pet['Pet']['porte'], array('class' => 'img-fluid')) .
                    $this->Html->div('d-flex justify-content-between align-items-center',
                        $this->Html->div('btn-group', $adotarButton)
                    )
        )
    
                /*$this->Html->div('card-body', 
                    $this->Html->para('card-text', $pet['Pet']['porte']) .
                    $this->Html->div('d-flex justify-content-between align-items-center',
                        $this->Html->div('btn-group', $adotarButton)
                )
                );*/

    /*if ($quantidadePorLinha < 3) {
            $linha .= $tumbnail;
        if($quantidadePorLinha == 2 ) {
            $view .= $this->Html->div('row', $linha);
            $linha = '';
            $quantidadePorLinha = -1;
        }
        $quantidadePorLinha++;
    }*/


echo $tumbnail;
?>