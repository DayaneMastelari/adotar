<?php
App::uses('AppController', 'Controller');

class UsuariosController extends AppController {

    public $layout = 'landingPage';
    public $helper = array('Js' => array('Jquerry'));

    public function beforeFilter() {
        $this->Auth->allow(array('login', 'logout', 'add'));
        $this->Auth->mapActions(['read' => ['pets_ong']]);
    }


    public $paginate = array(
        'fields' => array('Usuario.id', 'Usuario.nome', 'Usuario.telefone', 'Usuario.email'),
        'conditions' => array('Usuario.aro_parent_id' => '2'),
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
    }

    public function add(){
        if(!empty($this->request->data)){
            $this->Usuario->create();
            if($this->Usuario->save($this->request->data)){
                $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
                $this->redirect('/usuarios');
            }
        }

        $fields = array('Aro.id', 'Aro.alias');
        $conditions = array('Aro.parent_id' => null);
        $aros = $this->Acl->Aro->find('list', compact('fields', 'conditions'));
        $this->set('aros', $aros);
    }

    public function edit($id = null){
        if (!empty($this->request->data)) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Flash->bootstrap('Usuario alterado com sucesso!', array('key' => 'success'));
                $this->redirect('/usuarios');
            }
        } else {
            $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.telefone', 'Usuario.cpf', 'Usuario.estado', 'Usuario.cep', 'Usuario.cidade', 'Usuario.bairro', 'Usuario.endereco', 'Usuario.email', 'Usuario.login',);
            $conditions = array('Usuario.id' => $id);
            $this->request->data = $this->Usuario->find('first', compact('fields', 'conditions'));
        }
    }

    public function view($id = null){
        $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.telefone', 'Usuario.cpf','Usuario.nascimento', 'Usuario.estado', 'Usuario.cep', 'Usuario.cidade', 'Usuario.bairro', 'Usuario.endereco', 'Usuario.email');
        $conditions = array('Usuario.id' => $id);
        $this->request->data = $this->Usuario->find('first', compact('fields', 'conditions'));
    }

    public function delete($id){
        $this->Usuario->delete($id);
        $this->redirect('/usuarios');
        $this->Flash->bootstrap('Usuario escluído com sucesso', array('key' => 'warning'));
    }

    public function login() {
        $this->layout = 'login';
         if ($this->request->is('post')) {
             if ($this->Auth->login()) {
                 return $this->redirect($this->Auth->redirectUrl());
             }
             $this->Flash->bootstrap('Usuário ou senha incorretos', array('key' => 'danger'));
         }
     }
 
    public function logout() {
        $this->Auth->logout();
        $this->redirect('/login');        
    }

    public function pets_ong($id) {     
        $fields = array('Pet.id', 'Pet.nome', 'Pet.porte', 'Pet.castrado','Pet.vacinado', 'Pet.foto', 'Pet.encontrado');
        $conditions = array('Pet.usuario_id' => $id, 'Pet.perdido' => 'Não', 'Pet.adotado' => null);
        $pets = $this->Usuario->Pet->find('all', compact('fields', 'conditions'));
        $this->set('pets', $pets); 

        $fields = array('Usuario.nome', 'Usuario.telefone','Usuario.estado', 'Usuario.cep', 'Usuario.cidade', 'Usuario.bairro', 'Usuario.endereco', 'Usuario.email');
        $conditions = array('Usuario.id' => $id);
        $this->request->data = $this->Usuario->find('first', compact('fields', 'conditions'));
        
    }
}

?>