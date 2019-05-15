<?php
App::uses('AppController', 'Controller');

class OngsController extends AppController {

    public $layout = 'bootstrap';
    public $helper = array('Js' => array('Jquerry'));
    public $components = array('RequestHandler');

    public $paginate = array(
        'fields' => array('Ong.id', 'Ong.fantasia', 'Ong.telefone', 'Ong.cidade', 'Ong.endereco', 'Ong.email'),
        'conditions' => array(),
        'order' => array('Ong.fantasia' => 'asc'),
        'limit' => 10
    );

    public function index() {
        if ($this->request->is('post') && !empty($this->request->data['Ong']['fantasia'])) {
            $this->paginate['conditions'] = array(
                'Ong.fantasia LIKE' => '%' . trim($this->request->data['Ong']['fantasia']) . '%'
            );
        }

        $ongs = $this->paginate();
        $this->set('ongs', $ongs);
    }

    public function add() {
        if (!empty($this->request->data)) {
            $this->Ong->create();
            if ($this->Ong->save($this->request->data)) {
                $this->Flash->bootstrap('Cadastro efetuado com sucesso!', array('key' => 'success'));
                $this->redirect('/ongs');
            }
        }
    }

    public function edit($id = null) {
        if (!empty($this->request->data)) {
            if ($this->Ong->save($this->request->data)) {
                $this->Flash->bootstrap('Cadastro alterado com sucesso!', array('key' => 'success'));
                $this->redirect('/ongs');
            }
        } else {
            $fields = array('Ong.id', 'Ong.razao_social', 'Ong.fantasia', 'Ong.cnpj', 'Ong.telefone', 'Ong.estado', 'Ong.cep', 'Ong.cidade', 'Ong.bairro', 'Ong.endereco', 'Ong.email', 'Ong.senha' );
            $conditions = array('Ong.id' => $id);
            $this->request->data = $this->Ong->find('first', compact('fields', 'conditions'));
        }
    }

    public function delete($id) {
        $this->Ong->delete($id);
        $this->Flash->bootstrap('Ong excluída com sucesso!', array('key' => 'warning'));
        $this->redirect('/ongs');
    }

}

?>