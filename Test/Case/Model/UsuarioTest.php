<?php
class UsuarioTest extends CakeTestCase {

    public $fixtures = array('app.usuario');
    public $Usuario = null;

    public function setUp() {
        $this->Usuario = ClassRegistry::init('Usuario');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->Usuario, 'Usuario'));
    }

    public function testNomeEmpty(){
        $data = array('Usuario' => array('nome' => null));
        $saved = $this->Usuario->save($data);
        $this->assertFalse($saved);
    }

    public function testNomeMinLength(){
        $data = array('Usuario' => array('nome' => 'bi'));
        $saved = $this->Usuario->save($data);
        $this->assertFalse($saved);
    }

   /* public function testNomeSomenteLetras() {
        $data = array('Usuario' => array('nome' => 'bi48d'));
        $saved = $this->Usuario->save($data);
        $this->assertFalse($saved);

        $data = array('Usuario' => array('nome' => 'Fabíola'));
        $saved = $this->Usuario->save($data);
        $this->assertFalse($saved);
    }

    public function*/

}

?>