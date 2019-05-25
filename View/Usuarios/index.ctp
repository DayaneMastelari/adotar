<?php
$novoButton = $this->Js->link('Novo', '/usuarios/add', array(
    'class' => 'btn btn-success float-right', 
    'update' => '#content'
));

$filtro = $this->Form->create('Usuarios', array('class' => 'form-inline'));
$filtro .= $this->Form->input('Usuario.nome', array(
    'required' => false,
    'label' => array('text' => 'Nome ou Razão Social', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'placeholder' => 'Nome ou Razão Social'
));
$filtro .= $this->Js->submit('Filtrar', array(
    'type' => 'submit', 
    'class' => 'btn btn-primary mb-2', 
    'update' => '#content'
));
$filtro .= $this->Form->end();

$filtroBar = $this->Html->div('row mb-4 mt-4',
    $this->Html->div('col-md-6', $filtro) .
    $this->Html->div('col-md-6', $novoButton)
);
$detalhe = array();
foreach($usuarios as $usuario){
    $viewLink = $this->Js->link($usuario['Usuario']['nome'], '/usuarios/pets_ong/' . $usuario['Usuario']['id'], array('update' => '#content'));
    $detalhe[] = array(
        $viewLink,
        $usuario['Usuario']['telefone'],
        $usuario['Usuario']['email']
    );
}

$titulos = array('Nome', 'Telefone', 'Email', ' ');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);

$this->Paginator->options(array('update' => '#content'));

$links = array(
    $this->Paginator->first('Primeira', array('class' => 'page-link')),
    $this->Paginator->prev('Anterior', array('class' => 'page-link')),
    $this->Paginator->next('Próxima', array('class' => 'page-link')),
    $this->Paginator->last('Última', array('class' => 'page-link'))
);
$paginate = $this->Html->nestedList($links, array('class' => 'pagination'), array('class' => 'page-item'));
$paginate = $this->Html->tag('nav', $paginate);
$paginateCount = $this->Html->para('', $this->Paginator->counter(
    '{:page} de {:pages}, Mostrando {:current} registros de {:count}, Começando em {:start}, até {:end}'
));

$paginateBar = $this->Html->div('row',
    $this->Html->div('col-md-6', $paginate) .
    $this->Html->div('col-md-6', $paginateCount)
);

echo $this->Flash->render('warning'); 
echo $this->Flash->render('success');

echo $this->Html->tag('h1', 'Usuários Cadastradas');
echo $this->Html->div('my-3 p-3 bg-white rounded shadow-sm',
    $filtroBar .
    $this->Html->tag('table', $header . $body, array('class' => 'table table-hover'))
);
echo $paginateBar;

$this->Js->buffer('$(".nav-item").removeClass("active");');
$this->Js->buffer('$(".nav-item a[href$=\'ongs\']").addClass("active");');
if($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}
?>