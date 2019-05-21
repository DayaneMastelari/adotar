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
            <a class="navbar-brand" href="#">Adotar Faz Bem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <?php echo $this->Html->link('Ongs', '/filmes', array('class' => 'nav-link')); ?>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adotar</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Cachorros</a>
                        <a class="dropdown-item" href="#">Gatos</a>
                        <a class="dropdown-item" href="#">Outros</a>
                      </div>
                    </li>            
                </ul>
                <form class="form-inline my-2 my-lg-0">                  
                  <?php echo $this->Html->link('Login', '/generos', array('class' => 'btn btn-outline-light my-2 my-sm-0'));?>
                  <?php echo $this->Html->link('Perfil', '/ators', array('class' => 'form-control btn btn-outline-light ml-2 mr-sm-2')); ?>       
                </form>
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
                  <?php echo $this->Html->link('Cadastr-se', '/usuarios/add', array('class' => 'btn btn-primary btn-lg mt-4')) ?>             
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
