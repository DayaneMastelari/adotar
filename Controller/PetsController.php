<?php
App::uses('AppController', 'Controller');

class PetsController extends AppController {

    public $layout = 'bootstrap';
    public $helper = array('Js' => array('Jquerry'));
    public $components = array('RequestHandler');

    /*public $paginate = array(
        'fields' => array('Usuario.id', 'Usuario.nome', 'Usuario.nascimento', 'Usuario.email'),
        'conditions' => array(),
        'order' => array('Usuario.nome' => 'asc'),
        'limit' => 10
    );

    public function index() {
        if ($this->request->is('post') && !empty($this->request->data['Usuario']['nome'])) {
            $this->paginate['conditions'] = array(
                'Usuario.nome LIKE' => '%' . trim($this->request->data['Usuario']['nome']) . '%'
            );
        }

        $usuarios = $this->paginate();
        $this->set('usuarios', $usuarios);
    }*/

    public function add(){
        if(!empty($this->request->data)){
            move_uploaded_file($this->request->data['Pet']['foto']['tmp_name'], PATHFOTO . DS . 'foto_teste.jpg');
            $this->request->data['Pet']['foto'] = 'foto_teste.jpg';
            $this->Pet->create();
            if($this->Pet->save($this->request->data)){
                
                $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
                //$this->redirect('/');
            }
        }
    }
}

?>