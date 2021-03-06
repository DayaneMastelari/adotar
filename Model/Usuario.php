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
            //'SomenteLetras' => array('rule' => array('custom', '/A-Za-zÀ-ú/'), 'message' => 'Please enter an infinite number.')
        )
    );

    public function afterSave($created, $options = array()) {
        if (!empty($this->data['Usuario']['aro_parent_id'])) {
            $this->aroSave();
        }
    }

    public function aroSave() {
        $Aro = ClassRegistry::init('Aro');
        $aro = $Aro->findByForeignKey($this->data['Usuario']['id']);
        $saveAro = array(
            'model' => 'Usuario',
            'foreign_key' => $this->data['Usuario']['id'],
            'parent_id' => $this->data['Usuario']['aro_parent_id']
        );
        if (empty($aro)) {
            $Aro->create();
        } else {
            $Aro->id = $aro['Aro']['id'];
        }
        $Aro->save($saveAro);        
    }
    
}

?>