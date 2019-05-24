<?php
$view = $this->Html->tag('h1', 'Visualizar Usuário');
$view .= $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('', $this->request->data['Usuario']['nome']);
$view .= $this->Html->tag('h2', 'Celular');
$view .= $this->Html->para('', $this->request->data['Usuario']['telefone']);
$view .= $this->Html->tag('h2', 'CPF');
$view .= $this->Html->para('', $this->request->data['Usuario']['cpf']);
$view .= $this->Html->tag('h2', 'Nascimento');
$data = date('d/m/Y', strtotime($this->request->data['Usuario']['nascimento']));
$view .= $this->Html->para('', $data);
$view .= $this->Html->tag('h2', 'Estado');
$view .= $this->Html->para('', $this->request->data['Usuario']['estado']);
$view .= $this->Html->tag('h2', 'CEP');
$view .= $this->Html->para('', $this->request->data['Usuario']['cep']);
$view .= $this->Html->tag('h2', 'Cidade');
$view .= $this->Html->para('', $this->request->data['Usuario']['cidade']);
$view .= $this->Html->tag('h2', 'Bairro');
$view .= $this->Html->para('', $this->request->data['Usuario']['bairro']);
$view .= $this->Html->tag('h2', 'Endereco');
$view .= $this->Html->para('', $this->request->data['Usuario']['endereco']);
$view .= $this->Html->tag('h2', 'Numero');
$view .= $this->Html->para('', $this->request->data['Usuario']['numero']);
$view .= $this->Html->tag('h2', 'Email');
$view .= $this->Html->para('', $this->request->data['Usuario']['email']);

$voltarButton = $this->Html->link('Voltar', '/usuarios');

echo $view;
echo $voltarButton;
?>