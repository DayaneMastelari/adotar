<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Adotar Faz Bem</title>

        <?php 
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('starter-template.css');
            //echo $this->Html->css('all.css');
        ?>

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <?php
                echo $this->Html->link('Adotar Faz Bem', '/', array(
                    'class' => 'navbar-brand'
                ))
            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <?php echo $this->Html->link('Cadastrar animal', '/pets/add', array('class' => 'nav-link nav-color-text'));?>                          
                    </li> 
                    <li class="nav-item">
                        <?php echo $this->Html->link('Animais adotados', '/', array('class' => 'nav-link nav-color-text'));?>
                    </li>                                        
                </ul>
                <form class="form-inline my-2 my-lg-0">                                    
                  <?php echo $this->Html->link('Perfil', '/usuarios/edit', array('class' => 'form-control btn btn-outline-light ml-2 mr-sm-2')); ?>       
                </form>
            </div>
        </nav>

        <main role="main" class="container" id="content">
            <?php 
                echo $this->Flash->render();
                echo $this->fetch('content');                              
            ?> 
        </main>
        <?php 
            echo $this->Html->script('jquery-3.4.1.min.js');
            echo $this->Html->script('bootstrap.bundle.min.js'); 
            echo $this->Js->writeBuffer();           
        ?>  
</div>      
    </body>
</html>
