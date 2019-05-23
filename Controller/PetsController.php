<?php
App::uses('AppController', 'Controller');

class PetsController extends AppController {

    public $layout = 'bootstrap';
    public $helper = array('Js' => array('Jquerry'));

    public function beforeFilter() {
        $this->Auth->allow(array('view'));
        $this->Auth->mapActions(['read' => ['perdidos']]);
    }

    /*public $paginate = array(
        'fields' => array('Pet.id', 'Pet.nome', 'Pet.castrado', 'Pet.vacinado', 'Pet.sexo'),
        'conditions' => array(),
        'order' => array('Usuario.nome' => 'asc'),
        'limit' => 10
    );*/

    public function index() {
        $this->layout = 'landingPage';
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'pet.foto');
        $conditions = array('Pet.perdido' => 'Não');
        $pets = $this->Pet->find('all', compact('fields', 'conditions'));

        $this->set('pets', $pets);
    }

    public function add(){
        if(!empty($this->request->data)){
            move_uploaded_file($this->request->data['Pet']['foto']['tmp_name'], PATHFOTO . DS . $this->request->data['Pet']['foto']['name']);
            $this->request->data['Pet']['foto'] = $this->request->data['Pet']['foto']['name'];
            $this->request->data['Pet']['usuario_id'] .= $this->Auth->user('id');
            $this->Pet->create();
            if($this->Pet->saveAll($this->request->data)){
                $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
                $this->redirect('/');                
            }
        }
    }

    public function delete($id) {
        $this->Pet->delete($id);
        $this->Flash->bootstrap('Pet excluido com sucesso!', array('key' => 'warning'));
        $this->redirect('/pets');
    }

    public function view() {
        
    }

    public function perdidos() {
        $this->layout = 'perdidos';
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'pet.foto');
        $conditions = array('Pet.perdido' => 'Sim');
        $pets = $this->Pet->find('all', compact('fields', 'conditions'));
        $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.telefone', 'Usuario.email');
        $conditions = array('Pet.usuario_id' => 'Usuario.id');
        $pets .= $this->Pet->find('first', compact('fields', 'conditions'));

        $this->set('pets', $pets);
    }
}

?>