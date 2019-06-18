<?php
$view = $this->Html->div('col-md-4',
    $this->Html->tag('h6', 'Dados do Animal', array('class' => 'border-bottom border-gray pb-2 mb-0')) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Nome', array('class' => 'd-block text-gray-dark')) .
            $pet['Pet']['nome']
        )
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Sexo', array('class' => 'd-block text-gray-dark')) .
            $pet['Pet']['sexo']
        ) 
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'idade', array('class' => 'd-block text-gray-dark')) .
            $pet['Pet']['idade'] . ' ' . $pet['Pet']['meses_anos']
        ) 
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Castrado', array('class' => 'd-block text-gray-dark')) .
            $pet['Pet']['castrado']
        ) 
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125',
            $this->Html->tag('strong', 'Vacinado', array('class' => 'd-block text-gray-dark')) .
            $pet['Pet']['vacinado']
        )
    )
);

$view .= $this->Html->div('col-md-4',
    $this->Html->tag('h6', 'Dados para contato', array('class' => 'border-bottom border-gray pb-2 mb-0')) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Nome', array('class' => 'd-block text-gray-dark')) .
            $usuario['Usuario']['nome']
        )
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Telefone', array('class' => 'd-block text-gray-dark')) .
            $usuario['Usuario']['telefone']
        )
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Email', array('class' => 'd-block text-gray-dark')) .
            $usuario['Usuario']['email']
        )
    )
);

$view .= $this->Html->div('col-md-4',
    $this->Html->div('card mb-4 shadow-sm',
        $this->Html->image($pet['Pet']['foto'], array('class' => 'bd-placeholder-img card-img-top'))
    )
);

$footer = $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->para('', $pet['Pet']['caracteristicas'])
);

echo $this->Flash->render('warning'); 
echo $this->Flash->render('success');

if($pet['Pet']['perdido'] == 'Sim'){
    echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
        $this->Html->tag('section', 
            $this->Html->div('container',
                $this->Html->tag('h1', 'Você me Encontrou?', array('class' => 'jumbotron-heading')).
                $this->Html->para('lead text-muted', 'Se você me encontrou entre em contato com a minha família, estou com muita saudade deles!')
            ), 
            array('class' => 'jumbotron text-center')
        )
    );
}else{
    echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
        $this->Html->tag('section', 
            $this->Html->div('container',
                $this->Html->tag('h1', 'Me adote', array('class' => 'jumbotron-heading')).
                $this->Html->para('lead text-muted', 'Estou super ansioso para encontrar uma familinha pra me amar o tempo todo!')
            ), 
            array('class' => 'jumbotron text-center')
        )
    );
}
echo $this->Html->div('row', $view);
echo $footer;
echo $this->Js->link('Voltar', '/', array('class' => 'btn btn-secondary mb-10', 'update' => '#content'));

$this->Js->buffer('$(".form-error").addClass("is-invalid")');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}

?>





