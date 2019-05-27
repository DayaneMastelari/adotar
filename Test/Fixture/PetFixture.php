<?php
class AtorFixture extends CakeTestFixture {
    
    public $name = 'Ator';
    public $import = array('model' => 'Ator', 'records' => false);

    public function init() {
        $this->records = array(
            array(
                'id' => 1, 
                'foto' => '43678617_139308707032941_3383552811564574769_n.jpg', 
                'nome' => 'Billy',
                'sexo' => 'Macho',
                'porte' => 'Grande',
                'especie' => 'Cachorro',
                'castrado' => 'Sim',
                'vacinado' => 'Sim',
                'idade' => '5',
                'meses_anos' => 'Meses',
                'caracteristicas' => 'Sociavel com crianças e brincalhão',
                'perdido' => 'Não',
                'encontrado' => null,
                'adotado' => null,
                'usuario_id' => 1,                
            )
        );
        parent::init();
    }

}
?>