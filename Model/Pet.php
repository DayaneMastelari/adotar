<?php
App::uses('AppModel', 'Model');

class Pet extends AppModel {

    public $belongsTo = array(
        'Usuario'
    );

}

?>