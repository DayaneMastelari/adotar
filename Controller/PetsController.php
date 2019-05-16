<?php
App::uses('AppController', 'Controller');

class PetsController extends AppController {

    public $layout = 'bootstrap';
    public $helper = array('Js' => array('Jquerry'));
    public $components = array('RequestHandler');

    public $paginate = array(
        'fields' => array('Pet.id', 'Pet.nome', 'Pet.castrado', 'Pet.vacinado', 'Pet.sexo'),
        'conditions' => array(),
        'order' => array('Usuario.nome' => 'asc'),
        'limit' => 10
    );

    public function index() {
        if ($this->request->is('post') && !empty($this->request->data['Pet']['nome'])) {
            $this->paginate['conditions'] = array(
                'Pet.nome LIKE' => '%' . trim($this->request->data['Pet']['nome']) . '%'
            );
        }

        $pets = $this->paginate();
        $this->set('pets', $pets);
    }

    public function add(){
        if(!empty($this->request->data)){
            move_uploaded_file($this->request->data['Pet']['foto']['tmp_name'], PATHFOTO . DS . 'foto_teste.jpg');
            $this->request->data['Pet']['foto'] = 'foto_teste.jpg';
            $this->Pet->create();
            if($this->Pet->saveAll($this->request->data)){
                $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
               $this->redirect('/');
            }
        }
    }

    public function delete($id) {
        $this->Pet->delete($id);
        $this->Flash->bootstrap('Pet excluído', array('key' => 'success'));
        $this->redirect('/');
    }

    public function view($id = null) {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'pet.foto');
        $conditions = array('Pet.id' => $id);
        $this->request->data = $this->Pet->find('first', compact('fields', 'conditions'));
    }
}

?>