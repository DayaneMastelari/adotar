<?php
App::uses('AppController', 'Controller');

class UsuariosController extends AppController {
    
    public function index(){
        $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.nascimento', 'Usuario.email');
        $order = array('Usuario.nome' => 'asc');
        $usuarios = $this->Usuario->find('all', compact('fields', 'order'));

        $this->set('usuarios', $usuarios);
    }

    public function add(){
        if(!empty($this->request->data)){
            $this->Usuario->create();
            if($this->Usuario->save($this->request->data)){
                pr($this->request->data);
                $this->Flash->set('Cadastro realizado com sucesso');
                $this->redirect('/usuarios');
            }
        }
    }

    public function edit($id = null){
        if (!empty($this->request->data)) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Flash->set('Usuario alterado com sucesso!');
                $this->redirect('/usuarios');
            }
        } else {
            $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.celular', 'Usuario.cpf','Usuario.nascimento', 'Usuario.estado', 'Usuario.cep', 'Usuario.cidade', 'Usuario.bairro', 'Usuario.endereco', 'Usuario.numero', 'Usuario.email', 'Usuario.senha',);
            $conditions = array('Usuario.id' => $id);
            $this->request->data = $this->Usuario->find('first', compact('fields', 'conditions'));
        }
    }

    public function delete($idUsuario){
        $this->Usuario->delete($idUsuario);
        $this->Flash->set('Usuario excluido com sucesso!');
        $this->redirect('/usuarios');

    }
}

?>