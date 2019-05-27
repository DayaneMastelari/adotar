<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Usuario extends AppModel {

    public $hasMany = array(
        'Pet'
    );

    public function beforeSave($options = array()) {
        if (!empty($this->data['Usuario']['senha'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data['Usuario']['senha'] = $passwordHasher->hash(
                $this->data['Usuario']['senha']
            );
        }
        return true;
    }

    public $validate = array(
        'nome' => array(
            'notBlank' => array('rule' => 'notBlank', 'messagem' => 'Informe o Nome ou Razão Social'),
            'minLength' => array('rule' => array('minLength', '3'), 'message' => 'Informe pelo menos 3 caracteres'),
            'SomenteLetras' => array('rule' => array('custom', '/A-Za-zÀ-ú/'), 'message' => 'Please enter an infinite number.')
        )
    );
    
}

?>