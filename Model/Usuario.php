<?php
App::uses('AppModel', 'Model');

class Usuario extends AppModel {

    public function beforeSave($options = array()) {
        if (!empty($this->data['Usuario']['nascimento'])) {
            $nascimento = str_replace('/', '-', $this->data['Usuario']['nascimento']);
            $this->data['Usuario']['nascimento'] = date('Y-m-d', strtotime($nascimento));
        }
        
        return true;
    }
    
}

?>