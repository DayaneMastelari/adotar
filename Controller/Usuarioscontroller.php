<?php
App::uses('AppController', 'Controller');

class UsuariosController extends AppController {

    public $layout = 'bootstrap';
    public $helper = array('Js' => array('Jquerry'));
    public $components = array(
        'RequestHandler',
        /*'Auth' => array(
            'flash' => array('element' => 'bootstrap', 'params' => array('key' => 'warning'), 'key' => 'warning'),
            'authError' => 'Você não possui permissão para acessar essa operação',
            'loginAction' => '/login',
            'loginRedirect' => '/',
            'logoutRedirect' => '/login',
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Usuario',
                    'fields' => array('username' => 'login', 'password' => 'senha'),
                    'passwordHasher' => array('className' => 'Simple', 'hashType' => 'sha256')
                )
            ),
            //'authorize' => array('Crud' => array('userModel' => 'Usuario'))
        ),
        //'Acl'*/
    );

    public $paginate = array(
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
    }

    public function add(){
        if(!empty($this->request->data)){
            $this->Usuario->create();
            if($this->Usuario->save($this->request->data)){
                pr($this->request->data);
                $this->Flash->bootstrap('Cadastro realizado com sucesso', array('key' => 'success'));
                $this->redirect('/usuarios');
            }
        }
    }

    public function edit($id = null){
        if (!empty($this->request->data)) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Flash->bootstrap('Usuario alterado com sucesso!', array('key' => 'success'));
                $this->redirect('/usuarios');
            }
        } else {
            $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.celular', 'Usuario.cpf','Usuario.nascimento', 'Usuario.estado', 'Usuario.cep', 'Usuario.cidade', 'Usuario.bairro', 'Usuario.endereco', 'Usuario.email', 'Usuario.senha',);
            $conditions = array('Usuario.id' => $id);
            $this->request->data = $this->Usuario->find('first', compact('fields', 'conditions'));
        }
    }

    public function view($id = null){
        $fields = array('Usuario.id', 'Usuario.nome', 'Usuario.celular', 'Usuario.cpf','Usuario.nascimento', 'Usuario.estado', 'Usuario.cep', 'Usuario.cidade', 'Usuario.bairro', 'Usuario.endereco', 'Usuario.email', 'Usuario.senha',);
        $conditions = array('Usuario.id' => $id);
        $this->request->data = $this->Usuario->find('first', compact('fields', 'conditions'));
    }

    public function delete($idUsuario){
        $this->Usuario->delete($idUsuario);
        $this->Flash->bootstrap('Usuario excluido com sucesso!', array('key' => 'warning'));
        $this->redirect('/usuarios');

    }

    public function login() {
        $this->layout = 'login';
        pr($this->request->data);
        exit();
        /*if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->bootstrap('Usuário ou senha incorretos', array('key' => 'danger'));
            
        }*/
 
    }
 
    public function logout() {
        $this->Auth->logout();
        $this->redirect('/login');
    }
}

?>