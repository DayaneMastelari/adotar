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
            'Ong Anima'
        )
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Telefone', array('class' => 'd-block text-gray-dark')) .
            '(45)'
        )
    ) .
    $this->Html->div('media text-muted pt-3',
        $this->Html->para('media-body pb-3 mb-0 small lh-125 border-bottom border-gray',
            $this->Html->tag('strong', 'Email', array('class' => 'd-block text-gray-dark')) .
            'ong.anima@hotmail.com'
        )
    )
);

$view .= $this->Html->div('col-md-4',
    $this->Html->div('card mb-4 shadow-sm',
        $this->Html->image($pet['Pet']['foto'], array('class' => 'bd-placeholder-img card-img-top'))
    )
);

$footer = $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $this->Html->para('lead text-muted', 
        'Olá miaumigos, eu sou o Benício, tenho 7 meses e estou super ansioso para encontrar uma familinha pra me amar o tempo todo 😻❤️
        Eu sou brincalhão, muito carinhoso e sou todo bonitão, olha só.
        Os titios dizem que sou miaupaixonante 😺
        Eu vou contar pra vocês uma coisa da minha vida particular, mas não é pra espalhar, tá!
        Minha bolinhas não desceram 🙀
        Os titios disseram que não é nada preocupante, acontece mesmo com alguns gatinhos, aqui no LT já havia acontecido com o Miguel, que foi miaudotado e está em Minas Gerais. Isso não é um impedimento para eu ter uma vida normal, mas os titios farão um tal de ultrassom para encontrar as fujonas 😸
        Caso encontre, minha castração pode ser feita com cirurgia na barriguinha (igual fazem nas meninas).
        Preciso da energia boa de vocês para passar por esse momento, mas também preciso da divulgação para encontrar a família que vai me encher de dengo!'
    )
);


/*<div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">@username</strong>
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
      </p>
    </div>*/

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
echo $footer;
?>





