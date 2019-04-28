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
        if(!empty($this->request->data)){
            $this->Usuario->create();
            if($this->Usuario->save($this->request->data)){
                $this->Flash->set('Cadastro realizado com sucesso');
                $this->redirect('/usuarios');
            }
        }
    }
}

?>