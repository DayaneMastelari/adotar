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
            move_uploaded_file($this->request->data['Pet']['foto']['tmp_name'], PATHFOTO . DS . $this->request->data['Pet']['foto']['name']);
            $this->request->data['Pet']['foto'] = $this->request->data['Pet']['foto']['name'];
            $this->Pet->create();
            if($this->Pet->saveAll($this->request->data)){
                $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
               //$this->redirect('/');
            }
        }
    }

    public function delete($id) {
        $this->Pet->delete($id);
        $this->Flash->bootstrap('Pet excluído', array('key' => 'success'));
        $this->redirect('/');
    }

    public function view() {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'pet.foto');
        $pets = $this->Pet->find('all', compact('fields'));

        $this->set('pets', $pets);
    }
}

?>