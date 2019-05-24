<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Adotar Faz Bem</title>

        <?php 
            echo $this->Html->css('bootstrap.min.css');
            echo $this->Html->css('album.css');
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
                        <?php echo $this->Html->link('Cadastrar Pet', '/pets/add', array('class' => 'nav-link nav-color-text'));?>                          
                    </li> 
                    <li class="nav-item">
                        <?php echo $this->Html->link('Adotados', '/', array('class' => 'nav-link nav-color-text'));?>
                    </li> 
                    <li class="nav-item">
                        <?php echo $this->Html->link('Perdidos', '/pets/perdidos', array('class' => 'nav-link nav-color-text'));?>
                    </li>                                        
                </ul>
                <div class="dropdown" >
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Perfil
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Editar perfil</a>
                        <a class="dropdown-item" href="#">Meus animais cadastrados</a>
                        <a class="dropdown-item" href="#">Sair</a>
                      </div>
                    </div>                
            </div>
        </nav>

        <main role="main" class="container" background-color="#0d0d0d">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Encontre seu novo amigo</h1>
                <p class="lead text-muted">Ao adotar, você ajuda a reduzir o número de cães e gatos abandonados. Os animais de rua já passaram por muito sofrimento e tudo o que precisam é de um lar para serem felizes de verdade!</p>      
            </div>
            <p>
                <?php echo $this->Html->link('Cadastre-se', '/usuarios/add', array('class' => 'btn btn-primary btn-lg mt-4')) ?>             
            </p>
            </section>
        </div>
            <?php 
                echo $this->Flash->render();
                echo $this->fetch('content');                 
            ?>
        </main>
        <?php 
            echo $this->Html->script('jquery-3.4.1.min.js');
            echo $this->Html->script('bootstrap.bundle.min.js');            
        ?>        
    </body>
</html>
