<?php
App::uses('AppController', 'Controller');

class UsuariosController extends AppController {
    
    public function index(){
        $fields = array('Usuario.nome', 'Usuario.nascimento', 'Usuario.email');
        $order = array('Usuario.nome' => 'asc');
        $usuarios = $this->Usuario->find('all', compact('fields', 'order'));

        $this->set('usuarios', $usuarios);
    }

    public function add(){
        
    }
}

?>