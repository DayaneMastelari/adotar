<?php
App::uses('AppController', 'Controller');

class PetsController extends AppController {

    public $layout = 'landingPage';
    public $helper = array('Js' => array('Jquerry'));

    public function beforeFilter() {
        $this->Auth->allow(array('index', 'perdidos', 'adotados', 'ongs', 'view'));
        $this->Auth->mapActions(['read' => ['perdidos']]);
        $this->Auth->mapActions(['read' => ['adotados']]);
        $this->Auth->mapActions(['update' => ['meus_pets_perdidos']]);
        $this->Auth->mapActions(['update' => ['meus_pets_cadastrados']]);        
        $this->Auth->mapActions(['update' => ['encontrado']]);      
        $this->Auth->mapActions(['update' => ['adotado']]);
    }

    public function index() {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.foto');
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
            if($this->Pet->save($this->request->data)){
                if ($this->request->data['Pet']['perdido'] == 'Não') {
                    $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
                    $this->redirect('/'); 
                } else {
                    $this->Flash->bootstrap('Pet perdido cadastrado com sucesso', array('key' => 'success'));
                    $this->redirect('/pets/perdidos'); 
                }
                               
            }
        }
    }

    public function edit($id = null) {
        if(!empty($this->request->data)){
            if($this->Pet->save($this->request->data)){                
                $this->Flash->bootstrap('Alteração realizada com sucesso', array('key' => 'success'));
                $this->redirect('/'); 
            }
        } else {
            $fields = array('Pet.id', 'Pet.nome', 'Pet.sexo', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.especie', 'Pet.idade', 'Pet.meses_anos', 'Pet.perdido', 'Pet.caracteristicas');
            $conditions = array('Pet.id' => $id);
            $this->request->data = $this->Pet->find('first', compact('fields', 'conditions'));
        }        
    }

    public function delete($id) {
        $this->Pet->delete($id);
        $this->Flash->bootstrap('Pet excluido com sucesso!', array('key' => 'warning'));
        $this->redirect('/pets');
    }

    public function view($id = null) {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado', 'Pet.vacinado', 'Pet.foto', 'Pet.sexo', 'Pet.idade', 'Pet.meses_anos', 'Pet.caracteristicas', 'Pet.perdido', 'Pet.usuario_id'/*, 'Usuario.id', 'Usuario.nome', 'Usuario.telefone', 'Usuario.email'*/);
        $conditions = array('Pet.id' => $id);
        $pet = $this->Pet->find('first', compact('fields', 'conditions'));
        $this->set('pet', $pet);
        $idUsuario = $pet['Pet']['usuario_id'];

        $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.telefone', 'Usuario.email');
        $conditions = array('Usuario.id' => $idUsuario);
        $usuario = $this->Pet->find('first', compact('fields', 'conditions'));
        $this->set('usuario', $usuario);
    }

    public function perdidos() {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.foto');
        $conditions = array('Pet.perdido' => 'Sim', 'Pet.encontrado IS NULL');
        $pets = $this->Pet->find('all', compact('fields', 'conditions'));

        $this->set('pets', $pets);
    }

    public function meus_pets_perdidos($id) {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.foto', 'Pet.encontrado', 'Pet.adotado');
        $conditions = array('Pet.usuario_id' => $id, 'Pet.perdido' => 'Sim', 'Pet.encontrado IS NULL');
        $pets = $this->Pet->find('all', compact('fields', 'conditions'));
        $this->set('pets', $pets);         
    }

    public function meus_pets_cadastrados($id) {
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.foto', 'Pet.encontrado');
        $conditions = array('Pet.usuario_id' => $id, 'Pet.perdido' => 'Não', 'Pet.adotado IS NULL');
        $pets = $this->Pet->find('all', compact('fields', 'conditions'));
        $this->set('pets', $pets);        
    }

    public function adotados() {
        $fields = array('Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.foto', 'Pet.adotado');
        $conditions = array('Pet.adotado' => 'Sim', 'Pet.perdido' => 'Não');
        $pets = $this->Pet->find('all', compact('fields', 'conditions'));
        $this->set('pets', $pets); 
    }

    public function encontrado($id = null) {
        $this->Pet->id = $id;
        if ($this->Pet->saveField('encontrado', 'Sim')){
            $this->Flash->bootstrap('Pet marcado como encontrado', array('key' => 'success'));
        }else{
            $this->Flash->bootstrap('Não foi possível marcar pet como encontrado', array('key' => 'warning'));
        }
        $usuarioID = $this->Auth->user('id');
        $this->redirect('/pets/meus_pets_perdidos/' . $usuarioID);

    }

    public function adotado($id = null){
        $this->Pet->id = $id;
        if ($this->Pet->saveField('adotado', 'Sim')){
            $this->Flash->bootstrap('Pet marcado como adotado', array('key' => 'success'));
        }else{
            $this->Flash->bootstrap('Não foi possível marcar pet como adotado', array('key' => 'warning'));
        }
        $usuarioID = $this->Auth->user('id');
        $this->redirect('/pets/meus_pets_encontrados/' . $usuarioID);                           
    }
}

?>