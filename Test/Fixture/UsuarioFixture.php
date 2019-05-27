<?php
class UsuarioFixture extends CakeTestFixture {
    
    public $name = 'Usuario';
    public $import = array('model' => 'Usuario', 'records' => false);

    public function init() {
        $this->records = array(
            array(
                'id' => 1, 
                'nome' => 'Lucas', 
                'telefone' => '(14)99677-9562', 
                'tipo_usuario' => 
                'ong', 'cpf' => 
                '07.518.001/0001-71', 
                'estado' => 'Paraná', 
                'cep' => '17-10-393', 
                'cidade' => 'Curitiba',
                'bairro' => 'Jardim Floresta',
                'endereco' => '31 de Marco, 25',
                'email' => 'dayane.mastelari@gmail.com',
                'login' => 'dayane',
                'senha' => '1234'
            )
        );
        parent::init();
    }

}
?>